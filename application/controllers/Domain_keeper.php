<?php
class Domain_keeper extends MY_Controller {
	 public function __construct()
	 {
		 parent::__construct();
		$this->load->model('domain_keeper_model');
		$this->load->library('domain_keeper_library',array('parent'=>$this));
	 }

	final public function index(){
		$this->load->library('parser');
		$this->load->helper('string_helper');

		// doplni vypis o celkove shrnuti
		$detail_domains_list=$this->domain_keeper_model->getDetailDomainsList();
//		echo '<pre>'.print_r($detail_domains_list,true).'</pre>';
		$res=array();
		$report=array();
		foreach($detail_domains_list as $index => $domain){
			$index;
			unset($res,$report);
			$res=array();
			$report=array();
			$result=false;
			$this_row_class=false;
			$active=(isset($detail_domains_list[$index]['active']) ? $detail_domains_list[$index]['active'] : true);
			unset($detail_domains_list[$index]['active']);
			if(!$active){
					$this_row_class='Inactive';
					$res[]='info';
					$report[]='v databázi je označeno jako neaktivní';
			}
			else{
				foreach($domain as $key => $value){
					// kontrola navratoveho stavu
					if($key=='http_code' && $value && $value!=200){
						$res[]='error';
						$report[]='nežádoucí odpověď serveru';
						$detail_domains_list[$index]['http_code']=$this->load->view('blocks/strong-error',array('text'=>$detail_domains_list[$index]['http_code']),true);
						$detail_domains_list[$index]['response']=$this->load->view('blocks/strong-error',array('text'=>$detail_domains_list[$index]['response']),true);
					}
					elseif($key=='http_code' && !$value){
						$res[]='error';
						$report[]='server neodpověděl';
					}
					// kontrola ip adresy
					if($key=='ip' && $value && $this->ipControl($value)==2){
						$res[]='alert';
						$report[]='stará IP adresa';
						$detail_domains_list[$index]['ip']=$this->load->view('blocks/strong-alert',array('text'=>$detail_domains_list[$index]['ip']),true);
					}
					elseif($key=='ip' && $value && $this->ipControl($value)==3){
						$res[]='error';
						$report[]='není naše IP adresa';
						$detail_domains_list[$index]['ip']=$this->load->view('blocks/strong-error',array('text'=>$detail_domains_list[$index]['ip']),true);
					}
				}
				// aktivni link
				$detail_domains_list[$index]['real_url']=($detail_domains_list[$index]['real_url'] ? $this->load->view('blocks/link',array('href'=>$detail_domains_list[$index]['real_url'],'text'=>false),true) : false);
			}
			// vyhodnoceni
			if(count($res) && (in_array('alert', $res) || in_array('error', $res) || in_array('info', $res))){
				$text=implode('<br>',$report);
				$icon=false;
				if(in_array('error', $res)){
					$icon=$this->load->view('blocks/icon-error',false,true);
				}
				elseif(in_array('alert', $res)){
					$icon=$this->load->view('blocks/icon-alert',false,true);
				}
				else{
					$icon=$this->load->view('blocks/icon-info',false,true);
				}
				$result=$this->parser->parse('blocks/popup-with-icon',array('icon'=>$icon,'text'=>$text),true);
			}
			elseif($active){
				$result=$this->load->view('blocks/icon-tick',false,true);
			}
			if($this_row_class){
				$detail_domains_list[$index]['this_row_class']=$this_row_class;
			}
			// pocet testu
			$detail_domains_list[$index]['count_of_tests']=$domain['count_of_tests'];
			// shrnuti
			$detail_domains_list[$index]['result']=$result;
		}

		// vypis tabulky s informacemi
		$info=array(
				'header'=>array('id','doména','skutečná DNS adresa','testy','IP adresa','HTTP kód','HTTP stav',''),
				'rows'=>$detail_domains_list,
				'class'=>'tablesorter',
						);
		$table=$this->load->view('blocks/table',$info,true);

		// nacpe vse do sablony
		$content=array(
				'table'=>$table,
				'site_identificator'=>site_identificator(),
		);
		$this->parser->parse('layout/domains-keeper-layout',$content);

		// testovaci vypis
//		$library=$this->domain_keeper_library->getDomainsInfo();
//		echo '<pre>'.print_r($library,true).'</pre>';
	}

	/**
	 * spusti novou kontrolu domen
	 *
	 * @todo Vlahovic, 15.12.11 11:48: AJAX, ktery bude volat stranu s kontrolou, by si mel pridat do nazvu souboru (identifikator strany) i vlastni retezec pro odlisenich jinych pripadnych tempu te same strany a idealne jeste poradove cislo (kdyby se poradilo spustit jej vickrat najednou)
	 */
	public function check(){
		// test domen
		if(!empty($_POST['temporary_file_name']) && !empty($_POST['action']) && $_POST['action']=='check'){
			$this->domain_keeper_library->setTemporaryFileName($_POST['temporary_file_name']);// zapne ukladani vystupu do tmp souboru, ktery se jmenuje stejne...
			$this->domain_keeper_library->checkDomains();
			$this->domain_keeper_library->logDomains();
			echo 1;
		}
		// informace o prubehu
		elseif(!empty($_POST['temporary_file_name']) && !empty($_POST['action']) && $_POST['action']=='info'){
			$this->parent->load->library('temporary_file',array('file_name'=>$this->temporary_file_name));
			echo 'ok';
			echo $this->parent->temporary_file->getLastRow();
		}
		elseif(!empty($_POST)){
			print_r($_POST);
		}
		else{
			echo 0;
		}
		// test nastavenych akci
		// spusteni cron souboru
	}

	/**
	 * kontroluje jestli zadana ip je nase, nebo ne
	 *
	 * @staticvar array $cache
	 * @param string $ip
	 * @return integer 1=ok;2=uz neni aktivni;3=neni nase
	 */
	private function ipControl($ip){
		static $cache=array();
		if(!isset($cache[$ip])){
			$return=3;
			foreach($this->domain_keeper_model->getServers() as $server){
				if($server['ip']==$ip && $server['active']){
					$return=1;
					break;
				}
				elseif($server['ip']==$ip){
					$return=2;
					break;
				}
			}
			$cache[$ip]=$return;
		}
		return $cache[$ip];
	}

}
?>
