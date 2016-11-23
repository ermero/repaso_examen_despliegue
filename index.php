<?php
if(isset($_GET['p'])==false){

	include "controller/home.php";
}else{
	$pag=$_GET['p'];
	include "controller/$pag.php";
}
