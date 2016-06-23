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
$smarty_currency = new Smarty();

setlocale(LC_MONETARY, 'en_US');

if(isset($_POST['select_currency'])) {
	//echo $_POST['select_currency'];

	$query_status_null = "update currency_wm set status=0";
	$result_status_null = mysqli_query($dbc, $query_status_null) or die("Error query_status_null");

	$query_status_main = "update currency_wm set status=1 where id=".$_POST['select_currency'];
	$result_status_main = mysqli_query($dbc, $query_status_main) or die("Error query_status_main");
}



if(isset($_GET['act_currency'])) {
	if($_GET['act_currency'] == 1) {
		$query_act = "update currency_wm set act=1 where id=".$_GET['ida'];
	}

	else {
		$query_act = "update currency_wm set act=0 where id=".$_GET['ida'];
	}
	mysqli_query($dbc, $query_act) or die("Error query_act");
}




if(isset($_POST['recount'])) {


	//print_r($_POST);
	$query_num = "select id from currency";
	$result_num = mysqli_query($dbc, $query_num) or die("Error query_num");

	while($next_num = mysqli_fetch_array($result_num)) {
		$index_buy = "buy".$next_num['id'];
		$result_buy = $_POST[$index_buy] * $_POST['active_buy'];

		$index_sell = "sell".$next_num['id'];
		$result_sell = $_POST[$index_sell] * $_POST['active_sell'];
	
		$query_update = "update currency set buy='$result_buy', sell='$result_sell' where id=".$next_num['id'];
		$query_update_wm = "update currency_wm set buy='$result_buy', sell='$result_sell' where id=".$next_num['id'];
		//echo $query_update;
		mysqli_query($dbc, $query_update) or die("Error query_update");
		mysqli_query($dbc, $query_update_wm) or die("Error query_update_wm");

	}








/*	$query_num = "select id from currency";
	$result_num = mysqli_query($dbc, $query_num) or die("Error query_num");
	$count_num = mysqli_num_rows($result_num);
	$id_element = 0;


	//echo $count_num;
	for($i = 0; $i < $count_num; $i++) {
		$id_element = $_POST['param'][$i]."<br />";
		
		//echo $i;
		echo $id_element;
		$element_buy = "buy".$id_element['param'][$i];
		$element_sell = "sell".$id_element['param'][$i];
		//echo $element_buy;
		$_POST[$i]['buy'] = $_POST[$element_buy];
		$_POST[$i]['sell'] = $_POST[$element_sell];
		//print_r($_POST);

		$query_update = "update currency set buy='".$_POST[$i]['buy']."' sell='".$_POST[$i]['sell']."'";
		//echo $query_update;
		
	}*/
}




	$query_active_currency = "select buy, sell from currency_wm where status = 1";
	//echo $query_active_currency;
	$result_active_currency = mysqli_query($dbc, $query_active_currency) or die("Error query_active_currency");

	$next_active_currency = mysqli_fetch_array($result_active_currency);
	$active_buy = $next_active_currency['buy'];
	$active_sell = $next_active_currency['sell'];
	$smarty_currency->assign("active_buy", $active_buy);
	$smarty_currency->assign("active_sell", $active_sell);





	$query = "select id, name, sell, buy, status, act from currency_wm";
	$result = mysqli_query($dbc, $query) or die("Error query");
	$currency = array();
	while($next = mysqli_fetch_array($result)) {

		$buy = $next['buy']/$active_buy;
		$sell = $next['sell']/$active_sell;
		


		$currency[] = array("id"=>$next['id'], "name"=>$next['name'], "buy"=>number_format($buy, 2), "sell"=>number_format($sell, 2), "status"=>$next['status'], "act"=>$next['act']);
	}
	//print_r($currency);
	$smarty_currency->assign("currency", $currency);
	$content = $smarty_currency->fetch("currency_wm.tpl");









require_once("main.php");

}

else {
	header("location:../404.html");
}

?>