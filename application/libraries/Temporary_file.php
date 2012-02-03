<?php
/**
 * usnadnuje praci s docasnymi soubory - vytvareni, cteni, mazani
 */
class Temporary_file{
	private $file_name;
	private $file_address;
	private $control=true;
	private $file;

	/* ************************************************************************ */
	/* magic methods																														*/
	/* ************************************************************************ */
	public function __construct($params){
		$this->setFileName($params['file_name']);
	}

	public function __destruct()
	{
		if($this->file){
			fclose($this->file);
			unlink($this->file_address);
		}
	}

	/* ************************************************************************ */
	/* private methods																													*/
	/* ************************************************************************ */
	private function setFileName($file_name){
		if($file_name){
			$this->file_name=$file_name;
			$this->setFileAddress();
		}
		else{
			$this->control=false;
		}
	}

	private function setFileAddress(){
		$this->file_address=str_replace('\\','/',sys_get_temp_dir()).'/php_'.$this->file_name.'.tmp';
	}

	private function setFile(){
		if(!$this->file){
			if($this->control){
				$file=fopen($this->file_address, 'w+');
				if($file){
					$this->file=$file;
				}
				else{
					$this->control=false;
				}
			}
		}
	}

	/* ************************************************************************ */
	/* public methods																														*/
	/* ************************************************************************ */
	public function write($string){
		$this->setFile();
		fwrite($this->file, $string);
	}

	/**
	 * vraci posledni radek nastaveneho souboru
	 */
	public final function getLastRow(){
		return array_pop(file($this->file_address));
	}
}
?>
