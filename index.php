<?php

require_once("header.php");

$smarty_index = new Smarty();



//print_r($_GET);
$query_currency = "select id, name, buy, sell from currency where act=0";

//echo $query_currency;

$result_currency = mysqli_query($dbc, $query_currency) or die("Error query_currency");

$currency = array();

while($next_currency = mysqli_fetch_array($result_currency)) {
	$currency[] = array("id"=>$next_currency['id'], "name"=>$next_currency['name'], "buy"=>$next_currency['buy'], "sell"=>$next_currency['sell']);
}





////////////////////////////////////////////////


//print_r($_GET);
$query_currency1 = "select id, name, buy, sell from currency";

//echo $query_currency;

$result_currency1 = mysqli_query($dbc, $query_currency1) or die("Error query_currency1");

$currency1 = array();

while($next_currency1 = mysqli_fetch_array($result_currency1)) {
	$currency1[] = array("id"=>$next_currency1['id'], "name"=>$next_currency1['name'], "buy"=>$next_currency1['buy'], "sell"=>$next_currency1['sell']);
}



///////////////////////////////////
$query_currency_wm = "select id, name, buy, sell from currency_wm where act=0";

//echo $query_currency;

$result_currency_wm = mysqli_query($dbc, $query_currency_wm) or die("Error query_currency_wm");

$currency_wm = array();

while($next_currency_wm = mysqli_fetch_array($result_currency_wm)) {
	$currency_wm[] = array("id"=>$next_currency_wm['id'], "name"=>$next_currency_wm['name'], "buy"=>$next_currency_wm['buy'], "sell"=>$next_currency_wm['sell']);
}
////////////////////////////

$query_stock = "select id, type_operation, id_currency, percent, k_oplate, k_polucheniju, actual from stock";

$result_stock = mysqli_query($dbc, $query_stock) or die("Error query");

$categories = array();
$count = 1;
while($next_stock = mysqli_fetch_array($result_stock)) {
	$number_k_oplate = number_format($next_stock['k_oplate'], 2, '.', ' ');
	$number_k_polucheniju = number_format($next_stock['k_polucheniju'], 2, '.', ' ');
	$categories[] = array("count"=>$count, "id"=>$next_stock['id'], "type_operation"=>$next_stock['type_operation'], "id_currency"=>$next_stock['id_currency'], "percent"=>$next_stock['percent'], "k_oplate"=>$number_k_oplate, "k_polucheniju"=>$number_k_polucheniju, "actual"=>$next_stock['actual']);
}

//print_r($categories);



///////////////////////////


	$query_schedule = "select mon, tue, wed, thu, fri, sat, sun from schedule";

	$result_schedule = mysqli_query($dbc, $query_schedule) or die("Error query_schedule");
	$next_schedule = mysqli_fetch_array($result_schedule);

	$smarty_index->assign("mon", $next_schedule['mon']);
	$smarty_index->assign("tue", $next_schedule['tue']);
	$smarty_index->assign("wed", $next_schedule['wed']);
	$smarty_index->assign("thu", $next_schedule['thu']);
	$smarty_index->assign("fri", $next_schedule['fri']);
	$smarty_index->assign("sat", $next_schedule['sat']);
	$smarty_index->assign("sun", $next_schedule['sun']);
	


///////////////////////////

$query_sponsors = "select photo from nails_slider";
//echo $query_sponsors;
$result_sponsors = mysqli_query($dbc, $query_sponsors) or die("Error query_sponsors");

$sponsors = array();

while($next_sponsors = mysqli_fetch_array($result_sponsors)) {
	$sponsors[] = array("photo"=>$next_sponsors['photo']);
}


$smarty_index->assign("sponsors", $sponsors);


//////////////////////////
$smarty_index->assign("categories", $categories);
$smarty_index->assign("currency", $currency);
$smarty_index->assign("currency1", $currency1);
$smarty_index->assign("currency_wm", $currency_wm);

$smarty_index->display("index.tpl");



?>