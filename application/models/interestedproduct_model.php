<?php
class interestedproduct_model extends CI_Model {

	var $postID ='';
	var $viewCount ='';
	var $session_id='';
	var	$createDate='';
		
	function __construct()
	{
		parent::__construct();
	}
	 

	function insert($data)
	{
		try {
			 
			$this->db->trans_start();
			$var=$this->db->insert('interestedproduct', $data);
			$this->db->trans_complete();

			if($var>0)
				return true;
			else return false;
		}catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		 
		return false;
	}
}