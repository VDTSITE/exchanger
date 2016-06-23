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
	$query = "select id, adress, tel from where_rent where id =".$_GET['idc'];

	$result = mysqli_query($dbc, $query) or die("Error query");

	$next = mysqli_fetch_array($result);
	$smarty_edit_categorie->assign("idc", $next['id']);
	$smarty_edit_categorie->assign("adress", $next['adress']);
	$smarty_edit_categorie->assign("tel", $next['tel']);
	
	$content = $smarty_edit_categorie->fetch("edit_rent.tpl");
}

else if(isset($_POST['edit_categorie']) && !empty($_POST['idc']) && !empty($_POST['adress'])) {

	
	$query_edit = "update where_rent set adress='".$_POST['adress']."', tel='".$_POST['tel']."' where id=".$_POST['idc'];

	
	mysqli_query($dbc, $query_edit) or die("Error query_edit");

	$content = "Вы успешно отредактировали адрес<br /><a href='view_rent.php'>Вернуться к списку адресов</a>";
}

else {
	$content = "Недостаточно данных для редактирования";
}

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");


}

else {
	header("location:../404.html");
}




?>