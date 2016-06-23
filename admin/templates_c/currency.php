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


if(isset($_POST['recount'])) {


	print_r($_POST);
	$query_num = "select id from currency";
	$result_num = mysqli_query($dbc, $query_num) or die("Error query_num");

	while($next_num = mysqli_fetch_array($result_num)) {
		$index_buy = "buy".$next_num['id'];
		$index_sell = "sell".$next_num['id'];
	
		$query_update = "update currency set buy='".$_POST[$index_buy]."' sell='".$_POST[$index_sell]."' where id=".$next_num['id'];
		echo $query_update;
		mysqli_query($dbc, $query_update) or die("Error query_update");

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




/*if(!empty($_POST['recount_currency'])) {*/
	$query = "select id, name, sell, buy from currency";
	$result = mysqli_query($dbc, $query) or die("Error query");
	$currency = array();
	while($next = mysqli_fetch_array($result)) {
		$currency[] = array("id"=>$next['id'], "name"=>$next['name'], "buy"=>$next['buy'], "sell"=>$next['sell']);
	}

	$smarty_currency->assign("currency", $currency);
	$content = $smarty_currency->fetch("currency.tpl");
/*}*/








$smarty_main->assign("content", $content);

$smarty_main->display("main.tpl");

}

else {
	header("location:../404.html");
}

?>