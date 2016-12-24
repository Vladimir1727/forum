<?php
class Locations extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('locationsmodel');
	}

	function index(){
		//$items=$this->locationsmodel->getcat();
		//$data['items']=$items;
		$data['map']=$this->showMap();
		$this->load->view('map',$data);
	}

	function showMap(){
		$this->load->library('googlemaps');
		$config['center']='47.5512, 35.0811';
		$config['zoom']='auto';
		$this->googlemaps->initialize($config);

		$markers=array();
		$markers['position']='47.5512, 35.0811';
		$this->googlemaps->add_marker($markers);
		$map=$this->googlemaps->create_map();
		return $map;
	}

}