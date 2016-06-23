<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
	$_SESSION['user_photo'] = $_COOKIE['user_photo'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {


if(isset($_GET['idp'])) {

	$smarty_main->assign("user_name", $_SESSION['user_name']);
	$smarty_main->assign("user_photo", $_SESSION['user_photo']);
	$smarty_edit_pages = new Smarty();

	
	$query = "select meta_title, meta_keyword, meta_description, title, content from setting where id=".$_GET['idp'];
	$result = mysqli_query($dbc, $query) or die("Error query");

	$next = mysqli_fetch_array($result);

	$smarty_edit_pages->assign("idp", $_GET['idp']);
	$smarty_edit_pages->assign("meta_title", $next['meta_title']);
	$smarty_edit_pages->assign("meta_keyword", $next['meta_keyword']);
	$smarty_edit_pages->assign("meta_description", $next['meta_description']);
	$smarty_edit_pages->assign("title", $next['title']);
	$smarty_edit_pages->assign("content", $next['content']);

	
	$content = $smarty_edit_pages->fetch("edit_pages.tpl");

}

else if(!empty($_POST['idp']) && isset($_POST['edit']) && !empty($_POST['meta_title']) && !empty($_POST['meta_keyword']) && !empty($_POST['meta_description']) && !empty($_POST['title']) && !empty($_POST['content'])) {

	$query_edit_pages = "update setting set meta_title='".$_POST['meta_title']."', meta_keyword='".$_POST['meta_keyword']."', meta_description='".$_POST['meta_description']."', title='".$_POST['title']."', content='".$_POST['content']."' where id=".$_POST['idp'];

	mysqli_query($dbc, $query_edit_pages) or die("Error query_edit_pages");

	$content = "Ваша страница успешно отредактирована";

	
}

else {
	$content = "Недостаточно данных для редактирования страницы";
}

require_once("main.php");

}

else {
	header("location:../404.html");
}

?>