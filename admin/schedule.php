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



$smarty_add_products = new Smarty();


if(!isset($_POST['add'])) {
	$query_edit = "select mon, tue, wed, thu, fri, sat, sun from schedule";

	$result_edit = mysqli_query($dbc, $query_edit) or die("Error query_edit");
	$next_edit = mysqli_fetch_array($result_edit);

	$smarty_add_products->assign("mon", $next_edit['mon']);
	$smarty_add_products->assign("tue", $next_edit['tue']);
	$smarty_add_products->assign("wed", $next_edit['wed']);
	$smarty_add_products->assign("thu", $next_edit['thu']);
	$smarty_add_products->assign("fri", $next_edit['fri']);
	$smarty_add_products->assign("sat", $next_edit['sat']);
	$smarty_add_products->assign("sun", $next_edit['sun']);
	

	
	$content = $smarty_add_products->fetch("schedule.tpl");
}


else if(isset($_POST['add'])) {

		$query = "update schedule set mon='".$_POST['mon']."', tue='".$_POST['tue']."', wed='".$_POST['wed']."', thu='".$_POST['thu']."', fri='".$_POST['fri']."', sat='".$_POST['sat']."', sun='".$_POST['sun']."'";
		//echo $query;
		mysqli_query($dbc, $query) or die("Error query");

		$content = "Ваш график работы успешно изменен<br /><a href='schedule.php'>Просмотр графика работы</a>";
}


else {
	$content = "Недостаточно данных для редактирования<br /><a href='schedule.php'>Попробовать снова</a>";
}

require_once("main.php");




}

else {
	header("location:login.php");
}

?>