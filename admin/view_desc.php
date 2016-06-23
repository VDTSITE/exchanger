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



$smarty_add_products = new Smarty();


if(!isset($_POST['add'])) {
	$query_edit = "select title, content from description";

	$result_edit = mysqli_query($dbc, $query_edit) or die("Error query_edit");
	$next_edit = mysqli_fetch_array($result_edit);

	$smarty_add_products->assign("title", $next_edit['title']);
	$smarty_add_products->assign("content", $next_edit['content']);

	
	$content = $smarty_add_products->fetch("view_desc.tpl");
}


else if(isset($_POST['add']) && !empty($_POST['title']) && !empty($_POST['desc'])) {

		$query = "update description set title='".$_POST['title']."', content='".myProtect($dbc, $_POST['desc'])."'";
		//echo $query;
		mysqli_query($dbc, $query) or die("Error query");

		$content = "Ваше описание успешно добавлено<br /><a href='view_desc.php'>Просмотр</a>";
}


else {
	$content = "Недостаточно данных для добавления<br /><a href='view_desc.php'>Попробовать снова</a>";
}

$smarty_main->assign("content", $content);

$smarty_main->display("main.tpl");




}

else {
	header("location:../404.html");
}

?>