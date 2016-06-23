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


$smarty_edit_categorie = new Smarty();

if(!isset($_POST['edit_categorie']) && !empty($_GET['idc'])) {
	$query = "select first_name, last_name, seria_passport, number_passport, tel, skan, comment from where_buy where id =".$_GET['idc'];

	$result = mysqli_query($dbc, $query) or die("Error query");

	$next = mysqli_fetch_array($result);
	$smarty_edit_categorie->assign("idc", $_GET['idc']);
	$smarty_edit_categorie->assign("first_name", $next['first_name']);
	$smarty_edit_categorie->assign("last_name", $next['last_name']);
	$smarty_edit_categorie->assign("seria_passport", $next['seria_passport']);
	$smarty_edit_categorie->assign("number_passport", $next['number_passport']);
	$smarty_edit_categorie->assign("tel", $next['tel']);
	$smarty_edit_categorie->assign("skan", $next['skan']);
	$smarty_edit_categorie->assign("comment", $next['comment']);
	
	
	$content = $smarty_edit_categorie->fetch("edit_buy.tpl");
}

else if(isset($_POST['edit_categorie']) && !empty($_POST['idc']) && !empty($_POST['first_name'])) {

	
	$query_edit = "update where_buy set first_name='".$_POST['first_name']."', last_name='".$_POST['last_name']."', seria_passport='".$_POST['seria_passport']."', number_passport='".$_POST['number_passport']."', tel='".$_POST['tel']."', skan='".$_POST['skan']."', comment='".$_POST['comment']."' where id=".$_POST['idc'];
	echo $query_edit;
	
	mysqli_query($dbc, $query_edit) or die("Error query_edit");

	$content = "Вы успешно отредактировали контакт<br /><a href='view_buy.php'>Вернуться к списку контактов</a>";
}

else {
	$content = "Недостаточно данных для редактирования";
}

require_once("main.php");


}

else {
	header("location:../404.html");
}




?>