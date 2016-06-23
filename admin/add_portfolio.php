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

$smarty_add_portfolio = new Smarty();

if(!isset($_POST['add_categorie'])) {

	$query_categories = "select id, name from portfolio_categories";
	/*echo $query_categories;*/
	$result_categories = mysqli_query($dbc, $query_categories) or die("Error query_categories");

	$categories = array();
	while($next_categories = mysqli_fetch_array($result_categories)) {
		$categories[] = array("id_cat"=>$next_categories['id'], "name_cat"=>$next_categories['name']);
	}


	$smarty_add_portfolio->assign("categories", $categories);
	$content = $smarty_add_portfolio->fetch("add_portfolio.tpl");
}

else if(isset($_POST['add_categorie'])) {

	if($_FILES['photo']['error'] == 0){

		$photo_tmp_name = $_FILES['photo']['tmp_name'];

		$photo_name = time().$_FILES['photo']['name'];

		move_uploaded_file($photo_tmp_name, "../images/".$photo_name);
		$query = "insert into portfolio (photo, id_cat) values('$photo_name','".$_POST['id_cat']."')";
	}

	else {
		$query = "insert into portfolio (name, exist) values('".$_POST['id_cat']."')";
	}

	/*echo $query;*/
	mysqli_query($dbc, $query) or die("Error query");

	$content = "Фотография успешно добавлена<br /><a href='view_portfolio.php'>Вернуться к списку работ</a><br /><a href='add_portfolio.php'>Добавить еще фотографию в портфолио</a>";

}

else {
	$content = "Недостаточно данных для добавления фотографии";
} 

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");



}

else {
	header("location:../404.html");
}

?>