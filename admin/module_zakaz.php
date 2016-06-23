<?php 

require_once("header.php"); 

if($_GET['script'] == "request") {
	if(!empty($_GET['idi'])) {
		$query = "update form_in set status = 1, status2 = 2 where id =".$_GET['idi']; 
		
	}

	else if(!empty($_GET['ids'])) {
		$query = "update form_stock set status = 1, status2 = 2 where id =".$_GET['ids'];
	
	}

	else {
		$query = "update form_out set status = 1, status2 = 2 where id =".$_GET['ido'];

	}

	mysqli_query($dbc, $query) or die("Error query");
	header("location:request.php");
} 

else { 
	if(!empty($_GET['idi'])) {
		$query = "update form_in set status = 0, status2 = 0 where id =".$_GET['idi']; 
	}

	else if(!empty($_GET['ids'])) {
		$query = "update form_stock set status = 0, status2 = 0 where id =".$_GET['ids'];
	}

	else {
		$query = "update form_out set status = 0, status2 = 0 where id =".$_GET['ido']; 
	}
	mysqli_query($dbc, $query) or die("Error query");
	header("location:request_archive.php");
} 


?>