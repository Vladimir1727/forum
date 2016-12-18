<?php
//контроллер 
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

	function select(){
		$data['title']='Главная страница';
		$data['number']=rand(0,1000);
		$data['countries']=array("Аргентина","ЮАР","Украина","Канада");
		$this->load->view('home_main',$data);
	}

	function r(){
		$data['dtime']=date('H:i');
		$this->load->view('time',$data);
	}

	function index(){
		$this->load->view('home_view');
	}

	function showItems(){
		$data['items']=$this->Home_model->getItems();
		if ($data['items']==false){
			$data['error']='DB error';
		};
		$data['title']='Список всех товаров';
		$this->load->view('home_items',$data);	
	}

	function showItem(){
		if (!$this->input->post('send')){
			$this->load->view('form1');
		}
		else{
			$itemid=$this->input->post('itemid');
			$item=$this->Home_model->getItemById($itemid);
			$data['item']=$item;
			$this->load->view('item',$data);
		}
	}

	function showItem2(){
		if (!$this->input->post('send')){
			$data['list']=$this->Home_model->getItemsId();
			$this->load->view('form2',$data);
		}
		else{
			
			$itemid=$this->input->post('itemid');
			$item=$this->Home_model->getItemById($itemid);
			$data['item']=$item;
			$this->load->view('item',$data);
		}
	}
}