<?php
$this->load->view('header');
$st['class']='form-horizontal';
echo form_open('home/showItem',$st);
echo '<div class="">';
echo form_label('Выберите id товара ','itemid',array('class'=>'control-label'));
echo form_input(array('name'=>'itemid','type'=>'text','placeholder'=>'значение','class'=>'form-control','style'=>'color:green'));
echo form_submit(array('name'=>'send','value'=>'послать','class'=>'btn btn-success'));
echo '</div>';
echo form_close();
$this->load->view('footer');