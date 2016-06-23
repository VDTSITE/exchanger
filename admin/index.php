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

$smarty_index = new Smarty();

$query_pages = "select id, name from setting";

$result_pages = mysqli_query($dbc, $query_pages) or die("Error query");

$pages = array();

while($next_pages = mysqli_fetch_array($result_pages)) {
	$pages[] = array("id"=>$next_pages['id'], "name"=>$next_pages['name']); 
}

$smarty_index->assign("pages", $pages);

$content = $smarty_index->fetch("index.tpl");

require_once("main.php");

}

else {
	header("location:../404.html");
}

?>