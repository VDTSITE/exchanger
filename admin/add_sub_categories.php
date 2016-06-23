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

$smarty_add_sub_categories = new Smarty();

if(!isset($_POST['add_sub_categorie'])) {
	$query_cat = "select id, name from categories";
	$result_cat = mysqli_query($dbc, $query_cat) or die("Error query_cat");
	$cat = array();

	while($next_cat = mysqli_fetch_array($result_cat)) {
		$cat[] = array("id"=>$next_cat['id'], "name"=>$next_cat['name']);
	}

	$smarty_add_sub_categories->assign("cat", $cat);

	$content = $smarty_add_sub_categories->fetch("add_sub_categories.tpl");
}

else if(isset($_POST['add_sub_categorie']) && !empty($_POST['name'])) {

	if($_FILES['photo']['error'] == 0){

		$photo_tmp_name = $_FILES['photo']['tmp_name'];

		$photo_name = time().$_FILES['photo']['name'];

		move_uploaded_file($photo_tmp_name, "../images/".$photo_name);
		$query = "insert into sub_categories (name, photo) values('".$_POST['name']."', '$photo_name')";
	}
	else {
		$query = "insert into sub_categories (name, id_cat) values('".$_POST['name']."', '".$_POST['id_cat']."')";
	}
	/*echo $query;*/
	mysqli_query($dbc, $query) or die("Error query");

	$content = "Подкатегория успешно добавлена<br /><a href='add_sub_categories.php'>Добавить еще подкатегорию</a><br /><a href='view_sub_categories.php'>Вернуться к списку подкатегорий</a>";

}

else {
	$content = "Недостаточно данных для добавления подкатегории";
} 

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");



}

else {
	header("location:login.php");
}

?>