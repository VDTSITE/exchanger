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

$query = "select id, first_name, last_name, seria_passport, number_passport, tel, skan, comment from where_buy";

$result = mysqli_query($dbc, $query) or die("Error query");

$categories = array();
$count = 1;
while($next = mysqli_fetch_array($result)) {

	$categories[] = array("id"=>$next['id'], "first_name"=>$next['first_name'], "last_name"=>$next['last_name'], "seria_passport"=>$next['seria_passport'], "number_passport"=>$next['number_passport'], "tel"=>$next['tel'], "skan"=>$next['skan'], "comment"=>$next['comment']);
}

//print_r($categories);

$smarty_categories->assign("count", $count);

$smarty_categories->assign("categories", $categories);

$content = $smarty_categories->fetch("view_buy.tpl");

require_once("main.php");


}

else {
	header("location:../404.html");
}


?>