<?php
echo '<h2>'.$title.'</h2>';
echo '<p>Это число:'.$number.'</p>';
echo '<ul>';
foreach ($countries as $c) {
	echo '<li>'.$c.'</li>';
}
echo '</ul>';