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


$smarty_edit_categorie = new Smarty();

if(!isset($_POST['edit_categorie']) && !empty($_GET['idc'])) {
	$query = "select id, name, photo from categories where id =".$_GET['idc'];

	$result = mysqli_query($dbc, $query) or die("Error query");

	$next = mysqli_fetch_array($result);
	$smarty_edit_categorie->assign("idc", $next['id']);
	$smarty_edit_categorie->assign("name", $next['name']);
	if(empty($next['photo'])) {
		$photo = "no_image.png";
		$smarty_edit_categorie->assign("photo", $photo);
	}
	else {
		$photo = $next['photo'];
		$smarty_edit_categorie->assign("photo", $next['photo']);
	}
	
	$content = $smarty_edit_categorie->fetch("edit_categories.tpl");
}

else if(isset($_POST['edit_categorie']) && !empty($_POST['idc']) && !empty($_POST['name'])) {


	if($_FILES['new_photo']['error'] == 0){
		if($old_photo != "no-image.png") {
			@unlink("../images/".$old_photo);
		}

		$photo_tmp_name = $_FILES['new_photo']['tmp_name'];

		$photo_name = time().$_FILES['new_photo']['name'];

		move_uploaded_file($photo_tmp_name, "../images/".$photo_name);
		$query_edit = "update categories set name='".$_POST['name']."', photo='$photo_name', exist='".$_POST['exist']."' where id=".$_POST['idc'];
	}

	else {
		$query_edit = "update categories set name='".$_POST['name']."', exist='".$_POST['exist']."' where id=".$_POST['idc'];
	}
	
	mysqli_query($dbc, $query_edit) or die("Error query_edit");

	$content = "Вы успешно отредактировали категорию<br /><a href='view_categories.php'>Вернуться к списку категорий</a>";
}

else {
	$content = "Недостаточно данных для редактирования";
}

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");


}

else {
	header("location:../404.html");
}




?>