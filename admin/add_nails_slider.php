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
$smarty_add_slider = new Smarty();


if(empty($_FILES['photo_slider1'])) {
	$content = $smarty_add_slider->fetch("add_nails_slider.tpl");
}


else if(!empty($_FILES['photo_slider1'])) {
	
	if($_FILES['photo_slider1']['error'] == 0) {
		$photo_tmp_name = $_FILES['photo_slider1']['tmp_name'];
		$photo_name = time().$_FILES['photo_slider1']['name'];

		move_uploaded_file($photo_tmp_name, '../images/'.$photo_name);

		$query_slider = "insert into nails_slider (photo) values('$photo_name')";
	
		mysqli_query($dbc, $query_slider) or die("Error query_slider");

		$content = "Данный слайдер успешно добавлен<br /><a href='view_nails_slider.php'>К списку слайдеров</a><br /><a href='add_nails_slider.php'>Добавить еще</a>";
	}
	
}

else {
	$content = "Недостаточно данных для добавления";
}



$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");


}

else {
	header("location:../404.html");
}


?>