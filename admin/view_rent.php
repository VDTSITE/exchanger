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

$smarty_categories = new Smarty();

$query = "select id, adress, tel from where_rent";

$result = mysqli_query($dbc, $query) or die("Error query");

$categories = array();
$count = 1;
while($next = mysqli_fetch_array($result)) {

	$categories[] = array("id"=>$next['id'], "adress"=>$next['adress'], "tel"=>$next['tel']);
}

$smarty_categories->assign("count", $count);

$smarty_categories->assign("categories", $categories);

$content = $smarty_categories->fetch("view_rent.tpl");

$smarty_main->assign("content", $content);

$smarty_main->display("main.tpl");


}

else {
	header("location:../404.html");
}


?>