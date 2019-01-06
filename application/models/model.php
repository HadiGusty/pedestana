<?php 
	Class model extends CI_Model{
		Public function __construct(){
			parent::__construct();
		}

	function checkadmin($pass){
		$query=$this->db->query("SELECT * FROM admin WHERE password='$password'LIMIT 1");
		return $query;
	}




	}
?>