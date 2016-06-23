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


if(isset($_GET['clients_id']) && !empty($_GET['name'])) {
	$smarty_delete_orders = new Smarty();
	$smarty_delete_orders->assign("count_tovarov", $_GET['count_tovarov']);
	$smarty_delete_orders->assign("clients_id", $_GET['clients_id']);
	$smarty_delete_orders->assign("name", $_GET['name']);
	$smarty_delete_orders->assign("products_id", $_GET['products_id']);


	$content = $smarty_delete_orders->fetch("delete_orders.tpl");


}


else if(isset($_POST['delete_orders']) && isset($_POST['del']) && $_POST['del'] == "yes") {
	

	$query_clients = "delete from clients where id =".$_POST['clients_id'];
	/*echo $query_clients;*/

	$query_rel_zakaz = "delete from rel_zakaz where id_client =".$_POST['clients_id'];
	/*echo $query_rel_zakaz;*/

	$result_clients = mysqli_query($dbc, $query_clients) or die("Error query_clients");

	$query_rel_zakaz = mysqli_query($dbc, $query_rel_zakaz) or die("Error query_rel_zakaz");


	$query_id_tovara = "select id_tovara, rel_zakaz.count_tovarov, products.id as products_id from rel_zakaz inner join products on rel_zakaz.id_tovara = products.id where id_client = ".$_POST['clients_id'];



	$result_id_tovara = mysqli_query($dbc, $query_id_tovara) or die("Error query_id_tovara");

	while($next_id_tovara = mysqli_fetch_array($result_id_tovara)) {
		$query_update = "update products set count=count+".$next_id_tovara['count_tovarov']." where id =".$next_id_tovara['id_tovara'];
		/*echo $query_update;*/

		mysqli_query($dbc, $query_update) or die("Error query_update");
	}



	/*echo "teste5h5rha55555555555555555555555hhhhhhhhhhhhhhhhhhhhhhhhhhh";*/


	$content = "Данный заказ был успешно удален<br /><a href='view_orders.php'>Вернуться к списку заказов</a>";

}



else {
	$content ="Недостаточно данных для удаления";
}

$smarty_main->assign("content", $content);

$smarty_main->display("main.tpl");



}

else {
	header("location:../404.html");
}



?>