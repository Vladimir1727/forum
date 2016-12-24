<?php
class Createdbmodel extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function createTable($query){
		$this->db->query($query);
	}



}