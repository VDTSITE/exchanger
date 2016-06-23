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

if(!empty($_GET['ido'])) {
$query_mail = "select tel, last_name, first_name, summ, s_wm, v_currency, komisija, k_oplate, data, status from form_out where id = ".$_GET['ido']." order by data desc";
//echo $query_mail;

$result_mail = mysqli_query($dbc, $query_mail) or die("Error query_mail");

$mail = array();
$next_mail = mysqli_fetch_array($result_mail);


$smarty_mail->assign("ido", $_GET['ido']);
$smarty_mail->assign("tel", $next_mail['tel']);
$smarty_mail->assign("last_name", $next_mail['last_name']);
$smarty_mail->assign("first_name", $next_mail['first_name']);
$smarty_mail->assign("summ", $next_mail['summ']);
$smarty_mail->assign("s_wm", $next_mail['s_wm']);
$smarty_mail->assign("v_currency", $next_mail['v_currency']);
$smarty_mail->assign("komisija", $next_mail['komisija']);
$smarty_mail->assign("k_oplate", $next_mail['k_oplate']);
$smarty_mail->assign("data", $next_mail['data']);
$smarty_mail->assign("status", $next_mail['status']);



$content = $smarty_mail->fetch("full_out.tpl");

require_once("main.php");
}
}

else {
	header("location:../404.html");
}


?>