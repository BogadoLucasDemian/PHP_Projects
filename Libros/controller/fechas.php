<?php
	$date1 = new DateTime("now");
	$date2 = new DateTime("2019-12-05");
	$diff = $date1->diff($date2);
	// will output 2 days
	echo $diff->m . ' meses <br>';
	print_r($diff);
?>