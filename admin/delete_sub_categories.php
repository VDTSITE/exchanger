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

$smarty_delete_sub_categories = new Smarty();


if(!isset($_POST['delete_sub_categorie']) && !empty($_GET['idc']) && !empty($_GET['sub_categories'])) {
	$query = "select id, name from sub_categories where id =".$_GET['idc'];

	$result = mysqli_query($dbc, $query) or die("Error query");

	$next = mysqli_fetch_array($result);

	$smarty_delete_sub_categories->assign("idc", $next['id']);
	$smarty_delete_sub_categories->assign("name", $next['name']);

	$content = $smarty_delete_sub_categories->fetch("delete_sub_categories.tpl");
}


else if(isset($_POST['delete_sub_categorie']) && !empty($_POST['idc']) && !empty($_POST['name']) && $_POST['del'] == "yes") {
	$query_delete = "delete from sub_categories where id =".$_POST['idc'];
	mysqli_query($dbc, $query_delete) or die("Error query_delete");

	$content = "Категория ".$_POST['name']." успешно удалена<br /><a href='view_sub_categories.php'>Вернуться к списку подкатегорий</a>";
}

else {
	$content = "Недостаточно данных для удаления<br /><a href='delete_sub_categories.php?idc=".$_POST['idc']."&sub_categorie=".$_POST['name']."'>Попробовать снова</a><br /><a href='view_sub_categories.php'>К списку подкатегорий</a>";
}

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");



}

else {
	header("location:login.php");
}

?>