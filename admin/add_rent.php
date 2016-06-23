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
	$content = $smarty_add_categories->fetch("add_rent.tpl");
}

else if(isset($_POST['add_categorie']) && !empty($_POST['adress'])) {
	
	$query = "insert into where_rent (adress, tel) values('".$_POST['adress']."', '".$_POST['tel']."')";

	/*echo $query;*/
	mysqli_query($dbc, $query) or die("Error query");

	$content = "Адрес успешно добавлен<br /><a href='view_rent.php'>Вернуться к списку адресов</a><br /><a href='add_rent.php'>Добавить еще адрес</a>";

}

else {
	$content = "Недостаточно данных для добавления адреса";
} 

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");



}

else {
	header("location:../404.html");
}

?>