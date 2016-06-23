<?php

require_once("header.php");
//$smarty_main = new Smarty();

$query_notifications_in = "select id from form_in where status = 0";

$result_notifications_in = mysqli_query($dbc, $query_notifications_in) or die("Error query_notifications_in");

$notifications_in = array();
$count_in = 0;
while($next_notifications_in = mysqli_fetch_array($result_notifications_in)) {


	$count_in++;
}
///////////

$query_notifications_out = "select id from form_out where status = 0";

$result_notifications_out = mysqli_query($dbc, $query_notifications_out) or die("Error query_notifications_out");

$notifications_out = array();
$count_out = 0;
while($next_notifications_out = mysqli_fetch_array($result_notifications_out)) {


	$count_out++;
}




$query_notifications_stock = "select id from form_stock where status = 0";

$result_notifications_stock = mysqli_query($dbc, $query_notifications_stock) or die("Error query_notifications_stock");

$notifications_stock = array();
$count_stock = 0;
while($next_notifications_stock = mysqli_fetch_array($result_notifications_stock)) {


	$count_stock++;
}


$summ_notification = $count_in + $count_out + $count_stock; 

//echo $summ;
$smarty_main->assign("summ_notification", $summ_notification);


//////////////////////////////////////////////////////////////////////////////////



$query_notifications_in_archive = "select id from form_in where status = 1";

$result_notifications_in_archive = mysqli_query($dbc, $query_notifications_in_archive) or die("Error query_notifications_in_archive");

$notifications_in_archive = array();
$count_in_archive = 0;
while($next_notifications_in_archive = mysqli_fetch_array($result_notifications_in_archive)) {


	$count_in_archive++;
}
///////////

$query_notifications_out_archive = "select id from form_out where status = 1";

$result_notifications_out_archive = mysqli_query($dbc, $query_notifications_out_archive) or die("Error query_notifications_out_archive");

$notifications_out_archive = array();
$count_out_archive = 0;
while($next_notifications_out_archive = mysqli_fetch_array($result_notifications_out_archive)) {


	$count_out_archive++;
}




$query_notifications_stock_archive = "select id from form_stock where status = 1";

$result_notifications_stock_archive = mysqli_query($dbc, $query_notifications_stock_archive) or die("Error query_notifications_stock_archive");

$notifications_stock_archive = array();
$count_stock_archive = 0;
while($next_notifications_stock_archive = mysqli_fetch_array($result_notifications_stock_archive)) {


	$count_stock_archive++;
}


$summ_notification_archive = $count_in_archive + $count_out_archive + $count_stock_archive; 

//echo $summ;
$smarty_main->assign("summ_notification_archive", $summ_notification_archive);











$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");


?>