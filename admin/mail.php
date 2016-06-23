<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {

$smarty_main->assign("user_name", $_SESSION['user_name']);
$smarty_mail = new Smarty();

$query_mail = "select id, name, box_country, box_size, comment, date from clients order by date desc";
/*echo $query_mail;*/

$result_mail = mysqli_query($dbc, $query_mail) or die("Error query_mail");

$mail = array();
while($next_mail = mysqli_fetch_array($result_mail)) {
	$mail[] = array("id"=>$next_mail['id'], "name"=>$next_mail['name'], "box_country"=>$next_mail['box_country'], "box_size"=>$next_mail['box_size'], "comment"=>$next_mail['comment'], "date"=>$next_mail['date']);
}

/*print_r($mail);*/

$smarty_mail->assign("mail", $mail);

$content = $smarty_mail->fetch("mail.tpl");

$smarty_main->assign("content", $content);

$smarty_main->display("main.tpl");

}

else {
	header("location:../404.html");
}


?>