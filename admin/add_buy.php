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

$smarty_add_categories = new Smarty();

if(!isset($_POST['add_categorie'])) {
	$content = $smarty_add_categories->fetch("add_buy.tpl");
}

else if(isset($_POST['add_categorie']) && !empty($_POST['first_name'])) {
	
	$query = "insert into where_buy (first_name, last_name, seria_passport, number_passport, tel, skan, comment) values('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['seria_passport']."', '".$_POST['number_passport']."', '".$_POST['tel']."', '".$_POST['skan']."', '".$_POST['comment']."')";

	/*echo $query;*/
	mysqli_query($dbc, $query) or die("Error query");

	$content = "Контакт успешно добавлен<br /><a href='view_buy.php'>Вернуться к списку контактов</a><br /><a href='add_buy.php'>Добавить еще контакт</a>";

}

else {
	$content = "Недостаточно данных для добавления контакта<br /><a href='add_buy.php'>Попробуйте снова</a>";
} 

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");



}

else {
	header("location:../404.html");
}

?>