<?php 
	$link = mysqli_connect("localhost", "root", "", "prestamos");
	mysqli_set_charset($link, "utf-8");
	mysqli_query($link, "SET NAMES 'utf8'");
?>