<?php 
	include "link.php";
	mysqli_query($link, "TRUNCATE debaja");
	header("Location: ./../index.php?param=devueltos");
?>