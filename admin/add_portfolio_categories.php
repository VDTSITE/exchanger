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

$smarty_add_portfolio_categories = new Smarty();

if(!isset($_POST['add_categorie'])) {
	$content = $smarty_add_portfolio_categories->fetch("add_portfolio_categories.tpl");
}

else if(isset($_POST['add_categorie']) && !empty($_POST['name'])) {

	if($_FILES['photo']['error'] == 0){

		$photo_tmp_name = $_FILES['photo']['tmp_name'];

		$photo_name = time().$_FILES['photo']['name'];

		move_uploaded_file($photo_tmp_name, "../images/".$photo_name);
		$query = "insert into portfolio_categories (name, photo, exist) values('".$_POST['name']."', '$photo_name','".$_POST['exist']."')";
	}

	else {
		$query = "insert into portfolio_categories (name, exist) values('".$_POST['name']."', '".$_POST['exist']."')";
	}

	/*echo $query;*/
	mysqli_query($dbc, $query) or die("Error query");

	$content = "Категория успешно добавлена<br /><a href='view_portfolio_categories.php'>Вернуться к списку категорий</a><br /><a href='add_portfolio_categories.php'>Добавить еще категорию</a>";

}

else {
	$content = "Недостаточно данных для добавления категории";
} 

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");



}

else {
	header("location:../404.html");
}

?>