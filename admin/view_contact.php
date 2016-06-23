<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {

$smarty_main->assign("user_name", $_SESSION['user_name']);
$smarty_contact = new Smarty();

$query_mail = "select id, name, email, subject, message, data from contact order by data desc";
/*echo $query_mail;*/

$result_mail = mysqli_query($dbc, $query_mail) or die("Error query_mail");

$mail = array();
while($next_mail = mysqli_fetch_array($result_mail)) {
	$mail[] = array("id"=>$next_mail['id'], "name"=>$next_mail['name'], "email"=>$next_mail['email'], "subject"=>$next_mail['subject'], "message"=>$next_mail['message'], "data"=>$next_mail['data']);
}

/*print_r($mail);*/

$smarty_contact->assign("mail", $mail);

$content = $smarty_contact->fetch("view_contact.tpl");

$smarty_contact->assign("content", $content);

$smarty_contact->display("main.tpl");

}

else {
	header("location:../404.html");
}


?>