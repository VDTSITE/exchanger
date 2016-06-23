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


$smarty_edit_categorie = new Smarty();

if(!isset($_POST['edit_categorie']) && !empty($_GET['ids'])) {
	$query_stock = "select type_operation, id_currency, percent, k_oplate, k_polucheniju, actual, data from stock where id=".$_GET['ids'];
	//echo $query_stock;
	$result_stock = mysqli_query($dbc, $query_stock) or die("Error query_stock");
	$next_stock = mysqli_fetch_array($result_stock);
	$smarty_edit_categorie->assign("ids", $_GET['ids']);
	$smarty_edit_categorie->assign("type_operation", $next_stock['type_operation']);
	$smarty_edit_categorie->assign("id_currency", $next_stock['id_currency']);
	$smarty_edit_categorie->assign("percent", $next_stock['percent']);
	$smarty_edit_categorie->assign("k_oplate", $next_stock['k_oplate']);
	$smarty_edit_categorie->assign("k_polucheniju", $next_stock['k_polucheniju']);
	$smarty_edit_categorie->assign("actual", $next_stock['actual']);
	$smarty_edit_categorie->assign("data", $next_stock['data']);


	$query_currency = "select id, name from currency_wm";
	$result_currency = mysqli_query($dbc, $query_currency) or die("Error query_currency");

	$currency = array();

	while($next_currency = mysqli_fetch_array($result_currency)) {
		$currency[] = array("id"=>$next_currency['id'], "name"=>$next_currency['name']);
	}


	$smarty_edit_categorie->assign("currency", $currency);
	$content = $smarty_edit_categorie->fetch("edit_stock.tpl");
}

else if(isset($_POST['edit_categorie']) && !empty($_POST['ids'])) {

	
	$query_edit = "update stock set type_operation='".$_POST['type_operation']."', id_currency='".$_POST['id_currency']."', percent='".$_POST['percent']."', k_oplate='".$_POST['k_oplate']."', k_polucheniju='".$_POST['k_polucheniju']."' where id=".$_POST['ids'];

	
	mysqli_query($dbc, $query_edit) or die("Error query_edit");

	$content = "Вы успешно отредактировали акцию<br /><a href='view_stock.php'>Вернуться к списку акций</a>";
}

else {
	$content = "Недостаточно данных для редактирования";
}

require_once("main.php");


}

else {
	header("location:login.php");
}




?>