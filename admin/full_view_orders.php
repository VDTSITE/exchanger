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


if(isset($_GET['clients_id'])) {

$smarty_full_view_orders = new Smarty();


$mark = 0;
$smarty_full_view_orders->assign("mark", $mark);

$query = "select name, email, tel, comment, title, price, photo, count_tovarov, rel_zakaz.data from clients inner join rel_zakaz on clients.id = rel_zakaz.id_client inner join products on products.id = rel_zakaz.id_tovara where rel_zakaz.status = 0 and clients.id = ".$_GET['clients_id']." order by data desc, id_client desc";

$result = mysqli_query($dbc, $query) or die("Error query");

$order = array();



$mark = 0;
$smarty_full_view_orders->assign("mark", $mark);


$total_summ = 0;
$priznak = 0;
$total_res = 0;
$count_count = 1;
while($next = mysqli_fetch_array($result)){
	$total_summ = $next['price'] * $next['count_tovarov'];

	$query_count_id = "select id_tovara from rel_zakaz where id_client =".$_GET['clients_id'];

	$result_count_id = mysqli_query($dbc, $query_count_id) or die("Error query_count_id");

	$count_id = mysqli_num_rows($result_count_id);

	if($priznak != $_GET['clients_id']) {
		$total_res = $total_summ;

		$count_count = 1;
	}

	else {
		$total_res += $total_summ;
		$count_count++;
	}


	$order[] = array("clients_id"=>$_GET['clients_id'], "name"=>$next['name'], "email"=>$next['email'], "tel"=>$next['tel'], "comment"=>$next['comment'], "title"=>$next['title'], "price"=>$next['price'], "photo"=>$next['photo'], "count_tovarov"=>$next['count_tovarov'], "data"=>$next['data'], "total_res"=>$total_res, "total_summ"=>$total_summ, "count_id"=>$count_id, "count_count"=>$count_count, "priznak"=>$priznak);

	if($priznak != $_GET['clients_id']) {
		$priznak = $_GET['clients_id'];
	}

}
$smarty_full_view_orders->assign("order", $order);

$content = $smarty_full_view_orders->fetch("full_view_orders.tpl");

$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");

}

}

else {
	header("location:../404.html");
}

?>