<?php
/**
 * overuje stavy domen ulozenych v db
 *
 * @todo Vlahovic, 14.12.11 16:38: doplnit kontrolu verzi s www i bez
 */
class Domain_keeper_library{
	private $parent;
	private $domains_info;
	private $id_log_cycle;
	private $temporary_file_name=false;

	/* ************************************************************************ */
	/* magic methods																														*/
	/* ************************************************************************ */
	public function __construct($params){
		$this->parent=$params['parent'];
		$this->domains_info=$this->parent->domain_keeper_model->getDomainsList();
		$this->id_log_cycle=($this->parent->domain_keeper_model->getIdLogCycle())+1;
	}

	/* ************************************************************************ */
	/* public methods																														*/
	/* ************************************************************************ */
	public function checkDomains(){
		if($this->temporary_file_name){
			$this->parent->load->library('temporary_file',array('file_name'=>$this->temporary_file_name));
			$this->parent->load->helper('string_helper');
		}
		// muze trvat hooodne dlouho...
		set_time_limit(0);
		foreach($this->domains_info as $index => $domain){
			if($domain['active']){
				$index;
				// pomoci curl zjisti vse...
				$ch = curl_init(); // create cURL handle (ch)
				if (!$ch) {
						die("Couldn't initialize a cURL handle");
				}
				// set some cURL options
				$ret = curl_setopt($ch, CURLOPT_URL,            $domain['address']);
				$ret = curl_setopt($ch, CURLOPT_HEADER,         0);
				$ret = curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				$ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$ret = curl_setopt($ch, CURLOPT_TIMEOUT,        60);

				// execute
				$ret = curl_exec($ch);

				if (empty($ret)) {
						$this->domains_info[$index]['redirect']='';
						$this->domains_info[$index]['host']='';
						$this->domains_info[$index]['real_url']='';
						$this->domains_info[$index]['ip']='';
						$this->domains_info[$index]['http_code']='';
						$this->domains_info[$index]['response']='';
						curl_close($ch); // close cURL handler
				} else {
						$info = curl_getinfo($ch);
						$real_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
						$host = parse_url($real_url, PHP_URL_HOST);
						$ip = @gethostbyname($host);
						$this->domains_info[$index]['redirect']=$info['redirect_url'];
						$this->domains_info[$index]['host']=$host;
						$this->domains_info[$index]['real_url']=$real_url;
						$this->domains_info[$index]['ip']=$ip;




	//					echo '<pre>'.print_r($info,true).'</pre>';
						curl_close($ch); // close cURL handler

						if (empty($info['http_code'])) {
							$this->domains_info[$index]['http_code']='no http code';
							$this->domains_info[$index]['response']='no response';
						} else {
							// load the HTTP codes
							$http_codes = parse_ini_file(_ROOT."application/config/http_protocol_messages.ini");
							$this->domains_info[$index]['http_code']=$info['http_code'];
							$this->domains_info[$index]['response']=$http_codes[$info['http_code']];
						}

				}
			}
			// uklada do docasneho souboru
			if($this->temporary_file_name){
				$this->parent->temporary_file->write(log_progress($this->temporary_file_name,'check domains', count($this->domains_info), $index));
			}
		}
		return $this;
	}

	public function getDomainsInfo(){
		return $this->domains_info;
	}

	public function logDomains(){
		foreach($this->domains_info as $domain){
			// neaktivni neloguje
			if($domain['active']){
				$query="
					# loguje detaily o domene
					INSERT INTO `log_items`
						(`id_domains`,`id_log_cycle`,`type`,`key`,`value`)
						VALUES
						('".$domain['id_domains']."','".$this->id_log_cycle."','domain','real_url','".$domain['real_url']."'),
						('".$domain['id_domains']."','".$this->id_log_cycle."','domain','ip','".$domain['ip']."'),
						('".$domain['id_domains']."','".$this->id_log_cycle."','domain','http_code','".$domain['http_code']."'),
						('".$domain['id_domains']."','".$this->id_log_cycle."','domain','response','".$domain['response']."')
						;";
				$this->parent->db->query($query)->result_array();
			}
		}
		return $this;
	}

	public function setTemporaryFileName($temporary_file_name){
		if($temporary_file_name){
			$this->temporary_file_name=$temporary_file_name;
		}
	}
	/* ************************************************************************ */
	/* private methods																													*/
	/* ************************************************************************ */
}