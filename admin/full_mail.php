<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {
	
	if(isset($_GET['idc'])) {
	$smarty_main->assign("user_name", $_SESSION['user_name']);
	$smarty_full_mail = new Smarty();
	$query_full_mail = "select name, email, tel, box_country, box_size, sposob_dostavki, sposob_oplati, adress_dostavki, comment, date from clients where id = ".$_GET['idc']." order by date desc";
	/*echo $query_full_mail;*/

	$result_full_mail = mysqli_query($dbc, $query_full_mail) or die("Error query_full_mail");

	$full_mail = array();

	while($next_full_mail = mysqli_fetch_array($result_full_mail)) {
		$full_mail[] = array("id"=>$_GET['idc'], "name"=>$next_full_mail['name'], "email"=>$next_full_mail['email'], "tel"=>$next_full_mail['tel'], "box_country"=>$next_full_mail['box_country'], "box_size"=>$next_full_mail['box_size'], "sposob_dostavki"=>$next_full_mail['sposob_dostavki'], "sposob_oplati"=>$next_full_mail['sposob_oplati'], "adress_dostavki"=>$next_full_mail['adress_dostavki'], "comment"=>$next_full_mail['comment'], "date"=>$next_full_mail['date']);
	}
	$smarty_full_mail->assign("full_mail", $full_mail);

	}



	$content = $smarty_full_mail->fetch("full_mail.tpl");

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
}



else {
	header("location:../404.html");
}
?>