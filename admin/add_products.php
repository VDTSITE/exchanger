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



$smarty_add_products = new Smarty();


if(!isset($_POST['add'])) {
	$query_categories = "select id, name from categories";
	/*echo $query_categories;*/
	$result_categories = mysqli_query($dbc, $query_categories) or die("Error query_categories");

	$categories = array();
	while($next_categories = mysqli_fetch_array($result_categories)) {
		$categories[] = array("id_cat"=>$next_categories['id'], "name_cat"=>$next_categories['name']);
	}

	

$smarty_add_products->assign("categories", $categories);


	$query_sub_categories = "select id, name from sub_categories";
	/*echo $query_sub_categories;*/
	$result_sub_categories = mysqli_query($dbc, $query_sub_categories) or die("Error query_sub_categories");

	$sub_categories = array();
	while($next_sub_categories = mysqli_fetch_array($result_sub_categories)) {
		$sub_categories[] = array("id_sub_cat"=>$next_sub_categories['id'], "name_sub_cat"=>$next_sub_categories['name']);
	}
	$smarty_add_products->assign("sub_categories", $sub_categories);



	
	
	$content = $smarty_add_products->fetch("add_products.tpl");
}


else if(isset($_POST['add']) && !empty($_POST['title']) && !empty($_POST['short_desc']) && !empty($_POST['full_desc']) && !empty($_POST['price']) && $_POST['count'] >= 0) {


	$exist = false;
	$id_product = 0;




	if($_FILES['photo']['error'] == 0){

		$photo_tmp_name = $_FILES['photo']['tmp_name'];

		$photo_name = time().$_FILES['photo']['name'];

		move_uploaded_file($photo_tmp_name, "../images/".$photo_name);


		$query = "insert into products (title, short_desc, full_desc, price, old_price, count, photo, id_cat, id_sub_cat) values ('".$_POST['title']."', '".$_POST['short_desc']."', '".$_POST['full_desc']."', '".$_POST['price']."', '".$_POST['old_price']."', '".$_POST['count']."', '$photo_name', '".$_POST['id_cat']."', '".$_POST['id_sub_cat']."')";

	}


	else {
		$query = "insert into products (title, short_desc, full_desc, price, old_price, count, id_cat, id_sub_cat) values ('".$_POST['title']."', '".$_POST['short_desc']."', '".$_POST['full_desc']."', '".$_POST['price']."', '".$_POST['old_price']."', '".$_POST['count']."', '".$_POST['id_cat']."', '".$_POST['id_sub_cat']."')";
	}

	//echo $query;
	

	mysqli_query($dbc, $query) or die("Error query");
	$id_product = mysqli_insert_id($dbc);




	print_r($_FILES['photo_ex']);
	echo count($_FILES['photo_ex']);
	for($i = 0; $i < count($_FILES['photo_ex']); $i++) {
			if($_FILES['photo_ex']['error'][$i] == 0) {
				//echo "test";
				$photo_ex_tmp_name = $_FILES['photo_ex']['tmp_name'][$i];
				$photo_ex_name = time().$_FILES['photo_ex']['name'][$i];
				move_uploaded_file($photo_ex_tmp_name, "../images/".$photo_ex_name);


				$query_ex = "insert into rel_photo (id_product, photo) values ('$id_product', '$photo_ex_name')";

				echo $query_ex;
				mysqli_query($dbc, $query_ex) or die("Error query_ex");
				

			}
	}





	//print_r($_FILES['photo_ex']);




	$content = "Ваш товар успешно добавлен<br /><a href='add_products.php'>Добавить еще товар</a><br /><a href='view_products.php'>К списку товаров</a>";
}


else {
	$content = "Недостаточно данных для добавления<br /><a href='add_products.php'>Попробовать снова</a>";
}

$smarty_main->assign("content", $content);

$smarty_main->display("main.tpl");




}

else {
	header("location:../404.html");
}

?>