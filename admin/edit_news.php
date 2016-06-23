<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {
$smarty_main->assign("user_name", $_SESSION['user_name']);

$smarty_edit_news = new Smarty();

if(isset($_GET['idn'])) {
	$query = "select title, video, video_html, photo, short_desc, description, data from news where id =".$_GET['idn'];
	$result = mysqli_query($dbc, $query) or die("Error query");
	$next = mysqli_fetch_array($result);
	$photo = $next['photo'];

	if($photo == "") {
		$photo = "no_image.png";
	}

	else {
		$photo = $next['photo'];;
	}
	$smarty_edit_news->assign("idn", $_GET['idn']);
	$smarty_edit_news->assign("title", $next['title']);
	$smarty_edit_news->assign("video", $next['video']);
	$smarty_edit_news->assign("video_html", $next['video_html']);
	/*echo $next['video'];
	echo $next['video_html'];*/
	$smarty_edit_news->assign("photo", $photo);
	$smarty_edit_news->assign("short_desc", $next['short_desc']);
	$smarty_edit_news->assign("description", $next['description']);
	
	

	$content = $smarty_edit_news->fetch("edit_news.tpl");
}

else if(isset($_POST['edit_news']) && !empty($_POST['idn']) && !empty($_POST['title1']) && !empty($_POST['description1'])) {

	if($_FILES['new_photo']['error'] == 0) {
		if($old_photo != "no_image.png") {
			@unlink("../images/$old_photo");
		}

		$photo_tmp_name = $_FILES['new_photo']['tmp_name'];
		$photo_name = time().$_FILES['new_photo']['name'];
		move_uploaded_file($photo_tmp_name, "../images/".$photo_name);

		if(!empty($_POST['video'])) {
			$query_edit = "update news set title='".$_POST['title1']."', video='".myProtect($dbc, $_POST['video'])."', video_html='".myProtect_html($dbc, $_POST['video'])."', photo='$photo_name', short_desc='".myProtect($dbc, $_POST['short_desc1'])."', description='".myProtect($dbc, $_POST['description1'])."' where id =".$_POST['idn'];
		}

		else {
			$query_edit = "update news set title='".$_POST['title1']."', video='".$_POST['video']."', photo='$photo_name', short_desc='".myProtect($dbc, $_POST['short_desc1'])."', description='".myProtect($dbc, $_POST['description1'])."' where id =".$_POST['idn'];
		}

		
	}
	else {
		if(isset($_POST['video'])) {
		$query_edit = "update news set title='".$_POST['title1']."', video='".myProtect($dbc, $_POST['video'])."', video_html='".myProtect_html($dbc, $_POST['video'])."', short_desc='".myProtect($dbc, $_POST['short_desc1'])."', description='".myProtect($dbc, $_POST['description1'])."' where id =".$_POST['idn'];
		}

		else {
			$query_edit = "update news set title='".$_POST['title1']."', short_desc='".myProtect($dbc, $_POST['short_desc1'])."', description='".myProtect($dbc, $_POST['description1'])."' where id =".$_POST['idn'];
		}
	}

	//echo $query_edit;

	mysqli_query($dbc, $query_edit) or die("Error query_edit");
	$content = "Данная новость успешно отредактирована<br /><a href='view_news.php'>К списку новостей</a>";
}

else {
	$content = "Недостаточно данных для редактирования<br /><a href='edit_news.php?idn=".$_POST['idn']."'>Попробовать еще раз</a><br /><a href='view_news.php'>К списку новостей</a>";
}


$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");



}

else {
	header("location:../404.html");
}


?>