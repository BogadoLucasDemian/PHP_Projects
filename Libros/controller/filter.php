<?php 
	include "link.php";
	if(isset($_POST['filtrar'])){
		if(!isset($_GET['param'])){
			$cond=$_POST['filtro'];
			$val=$_POST['value'];
			if($cond == 'codigo' || $cond == 'dniAlumno'){
				$sqlFilter = mysqli_query($link, "SELECT * FROM libros WHERE $cond LIKE $val");
			}
			else
			{
				$sqlFilter = mysqli_query($link, "SELECT * FROM libros WHERE $cond LIKE '%$val%'");
			}
			if ($val == "") {
				header("Location: index.php");
			}
		}
		else{
			$cond=$_POST['filtro'];
			$val=$_POST['value'];
			if($cond == 'codigo' || $cond == 'dniAlumno'){
				$sqlFilter = mysqli_query($link, "SELECT * FROM debaja WHERE $cond LIKE $val");
			}
			else
			{
				$sqlFilter = mysqli_query($link, "SELECT * FROM debaja WHERE $cond LIKE '%$val%'");
			}
			if ($val == "") {
				header("Location: index.php?param=devueltos");
			}
		}
	}
?>