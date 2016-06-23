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

$smarty_delete_categories = new Smarty();


if(!isset($_POST['delete_categorie']) && !empty($_GET['idc']) && !empty($_GET['categorie'])) {
	$query = "select id, adress from where_rent where id =".$_GET['idc'];

	$result = mysqli_query($dbc, $query) or die("Error query");

	$next = mysqli_fetch_array($result);

	$smarty_delete_categories->assign("idc", $next['id']);
	$smarty_delete_categories->assign("adress", $next['adress']);

	$content = $smarty_delete_categories->fetch("delete_rent.tpl");
}


else if(isset($_POST['delete_categorie']) && !empty($_POST['idc']) && !empty($_POST['name']) && $_POST['del'] == "yes") {
	$query_delete = "delete from where_rent where id =".$_POST['idc'];
	mysqli_query($dbc, $query_delete) or die("Error query_delete");

	$content = "Адрес ".$_POST['adress']." успешно удалён<br /><a href='view_rent.php'>Вернуться к списку адресов</a>";
}

else {
	$content = "Недостаточно данных для редактирования<br /><a href='delete_rent.php?idc=".$_POST['idc']."&categorie=".$_POST['adress']."'>Попробовать снова</a>";
}

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");



}

else {
	header("location:../404.html");
}

?>