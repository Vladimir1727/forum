<?php
$this->load->view('header');
echo '<h2 class="text-center">'.$title.'</h2>';
if (isset($error)){
		echo $error;
	}
else{
	echo '<table class="table">';
	foreach ($items as $i) {
		echo '<tr>';
		echo '<td>'.$i['itemname'].'</td>';
		echo '<td>'.$i['pricein'].'</td>';
		echo '<td>'.$i['pricesale'].'</td>';
		echo '</tr>';
		}
	echo '</table>';
}
$this->load->view('footer');