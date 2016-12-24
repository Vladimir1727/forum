<?php
$this->load->view('header');
echo '<div class="row">';
	echo '<div class="col-md-2">';
		echo '<ul>';
		foreach ($items as $i) {
			echo '<li>';
			echo $i['category'];
			echo '</li>';
		}
		echo '</ul>';
	echo '</div>';
		if (isset($map)){
			//var_dump($map);
			echo $map['js'];
			echo $map['html'];
		}
	echo '<div class="col-md-10">';
	echo '</div>';
echo '</div>';
$this->load->view('footer');