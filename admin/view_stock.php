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





if(isset($_GET['actual']) && $_GET['actual'] == "finish" && !empty($_GET['ids'])) {
	$query_finish = "update stock set actual=1 where id=".$_GET['ids'];

	mysqli_query($dbc, $query_finish) or die("Error query_finish");
}


if(isset($_GET['actual']) && $_GET['actual'] == "active" && !empty($_GET['ids'])) {
	$query_finish = "update stock set actual=0 where id=".$_GET['ids'];

	mysqli_query($dbc, $query_finish) or die("Error query_finish");
}




$query = "select id, type_operation, id_currency, percent, k_oplate, k_polucheniju, actual from stock";

$result = mysqli_query($dbc, $query) or die("Error query");

$categories = array();
$count = 1;
while($next_stock = mysqli_fetch_array($result)) {
	$number_k_oplate = number_format($next_stock['k_oplate'], 2, '.', ' ');
	$number_k_polucheniju = number_format($next_stock['k_polucheniju'], 2, '.', ' ');
	$categories[] = array("count"=>$count, "id"=>$next_stock['id'], "type_operation"=>$next_stock['type_operation'], "id_currency"=>$next_stock['id_currency'], "percent"=>$next_stock['percent'], "k_oplate"=>$number_k_oplate, "k_polucheniju"=>$number_k_polucheniju, "actual"=>$next_stock['actual']);
}




$query_currency = "select id, name from currency_wm";
	$result_currency = mysqli_query($dbc, $query_currency) or die("Error query_currency");

	$currency = array();

	while($next_currency = mysqli_fetch_array($result_currency)) {
		$currency[] = array("id"=>$next_currency['id'], "name"=>$next_currency['name']);
	}


	$smarty_categories->assign("currency", $currency);

//print_r($currency);

$smarty_categories->assign("count", $count);

$smarty_categories->assign("categories", $categories);

$content = $smarty_categories->fetch("view_stock.tpl");

require_once("main.php");


}

else {
	header("location:../login.php");
}


?>