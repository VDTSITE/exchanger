<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
	$_SESSION['user_photo'] = $_COOKIE['user_photo'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {
$smarty_main->assign("user_photo", $_SESSION['user_photo']);
$smarty_main->assign("user_name", $_SESSION['user_name']);
$smarty_mail1 = new Smarty();

$query_mail1 = "select id, title, video, photo, description, data from news order by data desc";
/*echo $query_mail;*/

$result_mail1 = mysqli_query($dbc, $query_mail1) or die("Error query_mail1");




$mail1 = array();
while($next_mail1 = mysqli_fetch_array($result_mail1)) {
	$photo = $next_mail1['photo'];

	if($photo == "") {
		$photo = "no_image.png";
	}

	else {
		$photo = $next_mail1['photo'];;
	}

	$desc = substr($next_mail1['description'], 0, 100);
	$mail1[] = array("id"=>$next_mail1['id'], "title"=>$next_mail1['title'], "video"=>$next_mail1['video'], "photo"=>$photo, "desc"=>myProtect($desc), "data"=>myData($next_mail1['data']));
}
/*
print_r($mail1);
echo "test";*/
$smarty_mail1->assign("mail1", $mail1);

$content = $smarty_mail1->fetch("view_news.tpl");

$smarty_main->assign("content", $content);

$smarty_main->display("main.tpl");

}

else {
	header("location:../404.html");
}


?>