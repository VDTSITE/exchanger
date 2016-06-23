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


$smarty_products_list = new Smarty();


////////////////////

$zapis = 10;

$query_list = "select id from products";

$result_list = mysqli_query($dbc, $query_list) or die("Error query");

$count_zapis = mysqli_num_rows($result_list);

$pages = ceil($count_zapis/$zapis);

$smarty_products_list->assign("pages", $pages);

if(isset($_GET['page'])) {
	$active_page = $_GET['page'];

}

else {
	$active_page = 1;
}

$smarty_products_list->assign("active_page", $active_page);

$array_page = array();

for($i = 1; $i <= $pages; $i++) {
	$array_page[] = array("p"=>$i);
}

$smarty_products_list->assign("array_page", $array_page);

$skip = ($active_page - 1) * $zapis;




////////////////////


$query = "select id, title, short_desc, full_desc, price, old_price, count, photo, id_cat, id_sub_cat from products limit $skip, $zapis";

$result = mysqli_query($dbc, $query) or die("Error query");


$products_list = array();

while($next_list = mysqli_fetch_array($result)) {
	$count = 0;
	$short = substr($next_list['short_desc'], 0, 100);
	$full = substr($next_list['full_desc'], 0, 100);

	$products_list[] = array("skip"=>$skip, "id"=>$next_list['id'], "title"=>$next_list['title'], "short_desc"=>$short, "full_desc"=>$full, "price"=>$next_list['price'], "old_price"=>$next_list['old_price'], "count"=>$next_list['count'], "photo"=>$next_list['photo'], "id_cat"=>$next_list['id_cat'], "id_sub_cat"=>$next_list['id_sub_cat']);
	$skip++;
}
$smarty_products_list->assign("count", $count);
$smarty_products_list->assign("products_list", $products_list);
$content = $smarty_products_list->fetch("view_products.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");

}

else {
	header("location:login.php");
}

?>