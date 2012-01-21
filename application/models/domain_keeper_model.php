<?php
class Domain_keeper_model extends CI_Model {
	private $domains_list=array();
	private $detail_domains_list=array();
	private $id_log_cycle;
	private $servers=array();

	/* ************************************************************************ */
	/* magic methods																														*/
	/* ************************************************************************ */
	function __construct(){
		parent::__construct();
		$this->setDomainList();
		$this->setIdLogCycle();
		$this->setServers();
	}

	/* ************************************************************************ */
	/* public methods																														*/
	/* ************************************************************************ */
	public function getDomainsList(){
		return $this->domains_list;
	}

	public function getDetailDomainsList(){
		$this->setDetailDomainList();
		return $this->detail_domains_list;
	}

	public function getIdLogCycle(){
		return $this->id_log_cycle;
	}

	public function getServers(){
		return $this->servers;
	}

	/* ************************************************************************ */
	/* private methods																													*/
	/* ************************************************************************ */
	private function setDomainList(){
				$query="
			# vytazeni seznamu domen
			SELECT * FROM `domains`";
		$this->domains_list=$this->db->query($query)->result_array();
	}

	private function setDetailDomainList(){
		$detail_list=array();
				$query="
			# vytazeni detailu o domenach
			SELECT
				`dom`.`active`,
				`dom`.`id_domains` AS `id`,
				`dom`.`address`,
				`log`.`key`,
				`log`.`value`,
				(SELECT COUNT(*) FROM `tests` WHERE `tests`.`id_domains`=`dom`.`id_domains`) AS `count_of_tests`
			FROM `domains` AS `dom`
			LEFT JOIN `log_items` AS `log` ON `log`.`id_domains`=`dom`.`id_domains`
			WHERE
				(`log`.`id_log_cycle`='".$this->id_log_cycle."' OR `dom`.`active`=0) AND
				`log`.`type`='domain'
			ORDER BY `dom`.`id_domains` ASC";
		$details=$this->db->query($query)->result_array();
		foreach($details as $detail){
			$detail_list[$detail['id']]['id']=$detail['id'];
			$detail_list[$detail['id']]['address']=$detail['address'];
			$detail_list[$detail['id']]['active']=$detail['active'];
			$detail_list[$detail['id']][$detail['key']]=$detail['value'];
			$detail_list[$detail['id']]['count_of_tests']=$detail['count_of_tests'];
		}
		$this->detail_domains_list=$detail_list;
	}

	private function setServers(){
		$query="SELECT `ip`,`active` FROM `servers`";
		$this->servers=$this->db->query($query)->result_array();
	}

	private function setIdLogCycle(){
		$query="SELECT MAX(`id_log_cycle`) AS `id` FROM `log_items` LIMIT 1";
		$id_log_cycle=$this->db->query($query)->row_array();
		$id_log_cycle=($id_log_cycle['id'] ? $id_log_cycle['id'] : 0);
		$this->id_log_cycle=$id_log_cycle;
	}

}
?>
