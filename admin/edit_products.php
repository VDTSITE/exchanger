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


$smarty_edit_products = new Smarty();

if(isset($_GET['idp'])) {
	$query = "select title, short_desc, full_desc, price, old_price, count, photo, id_cat, id_sub_cat from products where id =".$_GET['idp'];

	echo $query;
	$result = mysqli_query($dbc, $query) or die("Error query");
	$next = mysqli_fetch_array($result);
	$smarty_edit_products->assign("idp", $_GET['idp']);
	$smarty_edit_products->assign("title", $next['title']);
	$smarty_edit_products->assign("short_desc", $next['short_desc']);
	$smarty_edit_products->assign("full_desc", $next['full_desc']);
	$smarty_edit_products->assign("price", $next['price']);
	$smarty_edit_products->assign("old_price", $next['old_price']);
	$smarty_edit_products->assign("count", $next['count']);
	$smarty_edit_products->assign("photo", $next['photo']);
	$smarty_edit_products->assign("id_cat", $next['id_cat']);
	$smarty_edit_products->assign("id_sub_cat", $next['id_sub_cat']);

	$query_categories = "select id, name from categories";
	$result_categories = mysqli_query($dbc, $query_categories) or die("Error query_categories");

	$categories = array();
	while($next_categories = mysqli_fetch_array($result_categories)) {
		$categories[] = array("id"=>$next_categories['id'], "name"=>$next_categories['name']);
	}



	$query_sub_categories = "select id, name from sub_categories";
	/*echo $query_sub_categories;*/
	$result_sub_categories = mysqli_query($dbc, $query_sub_categories) or die("Error query_sub_categories");

	$sub_categories = array();
	while($next_sub_categories = mysqli_fetch_array($result_sub_categories)) {
		$sub_categories[] = array("id"=>$next_sub_categories['id'], "name"=>$next_sub_categories['name']);
	}





	$smarty_edit_products->assign("sub_categories", $sub_categories);
	$smarty_edit_products->assign("categories", $categories);
	$content = $smarty_edit_products->fetch("edit_products.tpl");
}

else if(isset($_POST['edit_product']) && !empty($_POST['idp']) && !empty($_POST['title']) && !empty($_POST['short_desc']) && !empty($_POST['full_desc']) && !empty($_POST['price']) && !empty($_POST['old_photo'])) {


	if($_FILES['new_photo']['error'] == 0) {
		if($old_photo != "no-image.png") {
			@unlink("../img/$old_photo");
		}

		$photo_tmp_name = $_FILES['new_photo']['tmp_name'];
		$photo_name = time().$_FILES['new_photo']['name'];
		move_uploaded_file($photo_tmp_name, "../img/".$photo_name);

		$query_edit = "update products set title='".$_POST['title']."', short_desc='".$_POST['short_desc']."', full_desc='".$_POST['full_desc']."', price='".$_POST['price']."', old_price='".$_POST['old_price']."', count='".$_POST['count']."', photo='$photo_name', id_cat='".$_POST['id_cat']."', id_sub_cat='".$_POST['id_sub_cat']."'  where id =".$_POST['idp'];
	}
	else {
		$query_edit = "update products set title='".$_POST['title']."', short_desc='".$_POST['short_desc']."', full_desc='".$_POST['full_desc']."', price='".$_POST['price']."', old_price='".$_POST['old_price']."', count='".$_POST['count']."', id_cat='".$_POST['id_cat']."', id_sub_cat='".$_POST['id_sub_cat']."' where id =".$_POST['idp'];
	}

	mysqli_query($dbc, $query_edit) or die("Error query_edit");
	$content = "Товар успешно отредактирован<br /><a href='view_products.php'>К списку товаров</a>";
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