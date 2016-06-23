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


if(!isset($_POST['delete_categorie']) && !empty($_GET['ids'])) {

	$smarty_delete_categories->assign("ids", $_GET['ids']);

	$content = $smarty_delete_categories->fetch("delete_stock.tpl");
}


else if(isset($_POST['delete_categorie']) && !empty($_POST['ids']) && $_POST['del'] == "yes") {
	$query_delete = "delete from stock where id =".$_POST['ids'];
	mysqli_query($dbc, $query_delete) or die("Error query_delete");

	$content = "Данная акция успешно удалена<br /><a href='view_stock.php'>Вернуться к списку акций</a>";
}

else {
	$content = "Недостаточно данных для удаления<br /><a href='delete_stock.php?ids=".$_POST['ids']."'>Попробовать снова</a>";
}

require_once("main.php");



}

else {
	header("location:login.php");
}

?>