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




$smarty_add_news = new Smarty();


if(!isset($_POST['title_news1']) && !isset($_POST['desc_news'])) {
	$content = $smarty_add_news->fetch("add_news.tpl");
}


else if(!empty($_POST['title_news1']) && !empty($_POST['short_desc1']) && !empty($_POST['title_news1']) && !empty($_POST['desc_news1'])) {
	if($_FILES['photo_news1']['error'] == 0) {
		$photo_tmp_name = $_FILES['photo_news1']['tmp_name'];
		$photo_name = time().$_FILES['photo_news1']['name'];

		move_uploaded_file($photo_tmp_name, '../images/'.$photo_name);

		if(!empty($_POST['video_news1'])) {
			$query_news = "insert into news (title, video, video_html, photo, short_desc, description, data) values('".$_POST['title_news1']."', '".myProtect($dbc, $_POST['video_news1'])."', '".myProtect_html($dbc, $_POST['video_news1'])."', '$photo_name', '".myProtect($dbc, $_POST['desc_news1'])."', now())";
		}

		else {
			$query_news = "insert into news (title, photo, short_desc, description, data) values('".$_POST['title_news1']."', '$photo_name', '".myProtect($dbc, $_POST['short_desc1'])."', '".myProtect($dbc, $_POST['desc_news1'])."', now())";
		}

		
	}


	else {
		if(isset($_POST['video_news1'])) {
			$query_news = "insert into news (title, video, video_html, short_desc, description, data) values('".$_POST['title_news1']."', '".myProtect($dbc, $_POST['video_news1'])."', '".myProtect_html($dbc, $_POST['video_news1'])."', '".myProtect($dbc, $_POST['short_desc1'])."', '".myProtect($dbc, $_POST['desc_news1'])."', now())";
		}

		else {
			$query_news = "insert into news (title, short_desc, description, data) values('".$_POST['title_slider1']."', '".myProtect($dbc, $_POST['short_desc1'])."', '".myProtect($dbc, $_POST['desc_news1'])."', now())";
		}
		
	}



	//echo $query_news;

	mysqli_query($dbc, $query_news) or die("Error query_news");

	$content = "Данная новость успешно добавлена<br /><a href='view_news.php'>К списку новостей</a>";
	
}

else {
	$content = "Недостаточно данных для добавления";
}



$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");

}

else {
	header("location:login.php");
}



?>