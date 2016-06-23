<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
	$_SESSION['user_photo'] = $_COOKIE['user_photo'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {

$smarty_main->assign("user_name", $_SESSION['user_name']);
$smarty_main->assign("user_photo", $_SESSION['user_photo']);

$smarty_mail = new Smarty();



/////////////////////////////
	$elem_in = "select_in".$_POST['id_in'];

	if(isset($_POST[$elem_in])) {
		if($_POST[$elem_in] == 1) {
			$query_status_in = "update form_in set status2=1 where id=".$_POST['id_in'];
		}
		else {
			$query_status_in = "update form_in set status2=0 where id=".$_POST['id_in'];
		}
		mysqli_query($dbc, $query_status_in) or die("Error query_status_in");
	}



/////////////////////////////
	$elem_out = "select_out".$_POST['id_out'];

	if(isset($_POST[$elem_out])) {
		if($_POST[$elem_out] == 1) {
			$query_status_out = "update form_out set status2=1 where id=".$_POST['id_out'];
		}

		else {
			$query_status_out = "update form_out set status2=0 where id=".$_POST['id_out'];
		}
		mysqli_query($dbc, $query_status_out) or die("Error query_status_out");
	}

////////////////////////

	$elem_stock = "select_stock".$_POST['id_stock'];

	if(isset($_POST[$elem_stock])) {
		if($_POST[$elem_stock] == 1) {
			$query_status_stock = "update form_stock set status2=1 where id=".$_POST['id_stock'];
		}

		else {
			$query_status_stock = "update form_stock set status2=0 where id=".$_POST['id_stock'];
		}
		mysqli_query($dbc, $query_status_stock) or die("Error query_status_stock");
	}

////////////////////////







$query_mail = "select id, tel, last_name, first_name, data, status, status2 from form_in where status = 0 order by data desc";
/*echo $query_mail;*/

$result_mail = mysqli_query($dbc, $query_mail) or die("Error query_mail");

$mail = array();
while($next_mail = mysqli_fetch_array($result_mail)) {
	$mail[] = array("id"=>$next_mail['id'], "tel"=>$next_mail['tel'], "last_name"=>$next_mail['last_name'], "first_name"=>$next_mail['first_name'], "data"=>$next_mail['data'], "status"=>$next_mail['status'], "status2"=>$next_mail['status2']);
}

//print_r($mail);

$smarty_mail->assign("mail", $mail);




$query_mail1 = "select id, tel, last_name, first_name, data, status, status2 from form_out where status = 0 order by data desc";
/*echo $query_mail;*/

$result_mail1 = mysqli_query($dbc, $query_mail1) or die("Error query_mail1");

$mail1 = array();
while($next_mail1 = mysqli_fetch_array($result_mail1)) {
	$mail1[] = array("id"=>$next_mail1['id'], "tel"=>$next_mail1['tel'], "last_name"=>$next_mail1['last_name'], "first_name"=>$next_mail1['first_name'], "data"=>$next_mail1['data'], "status"=>$next_mail1['status'], "status2"=>$next_mail1['status2']);
}

//print_r($mail1);

$smarty_mail->assign("mail1", $mail1);




$query_mail2 = "select id, tel, last_name, first_name, data, status, status2 from form_stock where status = 0 order by data desc";
/*echo $query_mail;*/

$result_mail2 = mysqli_query($dbc, $query_mail2) or die("Error query_mail2");

$mail2 = array();
while($next_mail2 = mysqli_fetch_array($result_mail2)) {
	$mail2[] = array("id"=>$next_mail2['id'], "tel"=>$next_mail2['tel'], "last_name"=>$next_mail2['last_name'], "first_name"=>$next_mail2['first_name'], "data"=>$next_mail2['data'], "status"=>$next_mail2['status'], "status2"=>$next_mail2['status2']);
}

/*print_r($mail);*/

$smarty_mail->assign("mail2", $mail2);





$content = $smarty_mail->fetch("request.tpl");

require_once("main.php");

}

else {
	header("location:../404.html");
}


?>