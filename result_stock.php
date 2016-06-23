<?php
require_once("header.php");

$query_stock = "select type_operation, id_currency, percent, k_oplate, k_polucheniju, data from stock where id=".$_POST['id_id'];
//echo $query_stock;
$result_stock = mysqli_query($dbc, $query_stock) or die("Error query_stock");

$stock = array();

$next_stock = mysqli_fetch_assoc($result_stock);

$_SESSION = array();
$_SESSION['test'] = $next_stock;
//$stock = array("type_operation"=>$next_stock['type_operation'], "id_currency"=>$next_stock['id_currency'], "percent"=>$next_stock['percent'], "k_oplate"=>$next_stock['k_oplate'], "k_polucheniju"=>$next_stock['k_polucheniju'], "actual"=>$next_stock['actual'], "data"=>$next_stock['data']);

//echo json_encode(array('success' => true, 'data' => $stock));
header('Content-Type: application/json; charset=utf-8');
echo json_encode($next_stock);



?>