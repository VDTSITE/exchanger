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


$smarty_delete_products = new Smarty();


if(!isset($_POST['delete_product']) && !empty($_GET['idp']) && !empty($_GET['product'])) {
$query = "select id, title from products where id =".$_GET['idp'];
$result = mysqli_query($dbc, $query) or die("Error query");
$next = mysqli_fetch_array($result);
$smarty_delete_products->assign("id", $next['id']);
$smarty_delete_products->assign("title", $next['title']);

$content = $smarty_delete_products->fetch("delete_products.tpl");
}

else if(isset($_POST['delete_product'])){//} && !empty($_POST['title']) && !empty($_POST['idp']) && $_POST['del'] == "yes") {
	$query_photo = "select photo from products where id =".$_POST['idp'];

	$result_photo = mysqli_query($dbc, $query_photo) or die("Error query_photo");
	$next_photo = mysqli_fetch_array($result_photo);
	if(!empty($next_photo['photo'])) {
		@unlink("../img/".$next_photo['photo']);
	}

	$query_delete = "delete from products where id =".$_POST['idp'];

	mysqli_query($dbc, $query_delete) or die("Error query_delete");
	$content = "Товар ".$_POST['title']." успешно удален. <br /><a href='view_products.php' >Вернуться к списку товаров</a>";
}

else {
	$content = "Недостаточно данных для удаления";
}


$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");


}

else {
	header("location:../404.html");
}


?>