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


$smarty_edit_sub_categorie = new Smarty();

if(!isset($_POST['edit_sub_categorie']) && !empty($_GET['idc'])) {
	$query = "select id, name from sub_categories where id =".$_GET['idc'];

	$result = mysqli_query($dbc, $query) or die("Error query");

	$next = mysqli_fetch_array($result);
	$smarty_edit_sub_categorie->assign("idc", $next['id']);
	$smarty_edit_sub_categorie->assign("name", $next['name']);

/////////////////////////////////////////////////////////////

	$query_cat = "select id, name, photo, exist from categories";

	$result_cat = mysqli_query($dbc, $query_cat) or die("Error query_cat");


	$count_cat = mysqli_num_rows($result_cat);
	$cat = array();

	while($next_cat = mysqli_fetch_array($result_cat)) {
		$photo = $next_cat['photo'];
		if(empty($photo)) {
			$photo = "no_image.png";
		}

		else {
			$photo = $next_cat['photo'];
		}
		 
			$cat[] = array("id"=>$next_cat['id'], "name"=>$next_cat['name'], "photo"=>$photo, "exist"=>$next_cat['exist']);

	}



	$smarty_edit_sub_categorie->assign("cat", $cat);
	$content = $smarty_edit_sub_categorie->fetch("edit_sub_categories.tpl");





}

else if(isset($_POST['edit_sub_categorie']) && !empty($_POST['idc']) && !empty($_POST['name'])) {

	if($_FILES['new_photo']['error'] == 0){
		if($old_photo != "no-image.png") {
			@unlink("../images/".$old_photo);
		}

		$photo_tmp_name = $_FILES['new_photo']['tmp_name'];

		$photo_name = time().$_FILES['new_photo']['name'];

		move_uploaded_file($photo_tmp_name, "../images/".$photo_name);
		$query_edit = "update sub_categories set name='".$_POST['name']."', photo='$photo_name' where id=".$_POST['idc'];
	}

	else {

		$query_edit = "update sub_categories set name='".$_POST['name']."' where id=".$_POST['idc'];
	}
	mysqli_query($dbc, $query_edit) or die("Error query_edit");

	$content = "Вы успешно отредактировали подкатегорию<br /><a href='view_sub_categories.php'>Вернуться к списку подкатегорий</a>";
}

else {
	$content = "Недостаточно данных для редактирования";
}

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");


}

else {
	header("location:login.php");
}




?>