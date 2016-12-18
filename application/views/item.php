<?php
$this->load->view('header');
//var_dump($item);
echo '<div class="row"><div class="col-md-3">';
echo '<img class="img-responsive" src="'.base_url().$item[0]["imagepath"].'" alt=""></div>';
echo '<div class="col-md-9"><h2 class="h2">'.$item[0]["itemname"].' <span class="text-danger">'.$item[0]['pricesale'].' грн.</span></h2>';
echo '<p class="jumbotron">'.$item[0]["info"].'</p></div>';

$this->load->view('footer');