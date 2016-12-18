<?php
$this->load->view('header');
$st['class']='form-horizontal';
echo form_open('home/showItem2',$st);
echo '<div class="">';
echo form_label('Выберите товар ',array('class'=>'control-label'));

$ar=array();
foreach ($list as $key => $value) {
	$ar[$key]=$value['itemname'];
}
echo form_dropdown('itemid',$ar);
//echo form_input(array('name'=>'itemid','type'=>'text','placeholder'=>'значение','class'=>'form-control','style'=>'color:green'));
echo form_submit(array('name'=>'send','value'=>'послать','class'=>'btn btn-success'));
echo '</div>';
echo form_close();
$this->load->view('footer');