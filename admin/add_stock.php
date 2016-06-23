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

$smarty_add_categories = new Smarty();

if(!isset($_POST['add_categorie'])) {

	$query_currency = "select id, name from currency_wm";
	$result_currency = mysqli_query($dbc, $query_currency) or die("Error query_currency");

	$currency = array();

	while($next_currency = mysqli_fetch_array($result_currency)) {
		$currency[] = array("id"=>$next_currency['id'], "name"=>$next_currency['name']);
	}


	$smarty_add_categories->assign("currency", $currency);
	$content = $smarty_add_categories->fetch("add_stock.tpl");
}

else if(isset($_POST['add_categorie'])) {
	
	$query = "insert into stock (type_operation, id_currency, percent, k_oplate, k_polucheniju, actual, data) values('".$_POST['type_operation']."', '".$_POST['id_currency']."', '".$_POST['percent']."', '".$_POST['k_oplate']."', '".$_POST['k_polucheniju']."', 0, now())";

	
	mysqli_query($dbc, $query) or die("Error query");

	$content = "Акция успешно добавлена<br /><a href='view_stock.php'>Вернуться к списку акций</a><br /><a href='add_stock.php'>Добавить еще акцию</a>";

}

else {
	$content = "Недостаточно данных для добавления акцию";
} 

require_once("main.php");



}

else {
	header("location:login.php");
}

?>