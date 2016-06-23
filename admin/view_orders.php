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
$smarty_view_orders = new Smarty();


$mark = 0;
$smarty_view_orders->assign("mark", $mark);

$query = "select clients.id as clients_id, name, email, tel, comment, count_tovarov, rel_zakaz.data, products.id as products_id from clients inner join rel_zakaz on clients.id = rel_zakaz.id_client inner join products on rel_zakaz.id_tovara = products.id where rel_zakaz.status = 0 order by data desc, id_client desc";


$result = mysqli_query($dbc, $query) or die("Error query");

$order = array();

$total_summ = 0;
$priznak = 0;
$count_count = 1;
$schetchik = 1;
$smarty_view_orders->assign("schetchik", $schetchik);
while($next = mysqli_fetch_array($result)) {
	$total_summ = $next['price'] * $next['count_tovarov'];

	$order[] = array("clients_id"=>$next['clients_id'], "name"=>$next['name'], "email"=>$next['email'], "tel"=>$next['tel'], "count_tovarov"=>$next['count_tovarov'], "data"=>$next['data'], "total_res"=>$total_res, "total_summ"=>$total_summ, "count_count"=>$count_count, "priznak"=>$priznak, "products_id"=>$next['products_id']);

	if($priznak != $next['clients_id']) {
		$priznak = $next['clients_id'];
	}
}

$smarty_view_orders->assign("order", $order);

$content = $smarty_view_orders->fetch("view_orders.tpl");

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");

}

else {
	header("location:../404.html");
}

?>