<?php
class Home_model extends CI_Model
{
	function __construct(){
		$this->load->database();//подключение библиотеки
	}
	function getItems()
	{
		$res=$this->db->query('select * from items');
		//return $res->result();//возвращает массив объектов значений
		return $res->result_array();//возвращает массив массивов значений
	}

	function getItemById($id){
		$res=$this->db->query('select * from items where id='.$id);
		return $res->result_array();
	}

	function getItemsId(){
		$res=$this->db->query('select id,itemname from items');
		return $res->result_array();
	}
}