<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {
		$smarty_main->assign("user_name", $_SESSION['user_name']);
		$smarty_delete_mail_idc = new Smarty();

	if(isset($_GET['idc'])) {

		$smarty_delete_mail_idc->assign("id", $_GET['idc']);
		
		$content = $smarty_delete_mail_idc->fetch("delete_nails_slider.tpl");
	}


	else if(!empty($_POST['id']) && !empty($_POST['delete']) && $_POST['del'] == "yes") {

		$query = "delete from nails_slider where id=".$_POST['id'];

		//echo $query;

		mysqli_query($dbc, $query) or die("Error query");

		$content = "Данный слайд успешно удалён.<br /><a href='view_nails_slider.php'>Вернуться к списку слайдов</a>";
		
	}

	else {
		$content = "Недостаточно данных для удаления слайда.<br /><a href='delete_nails_slider.php?idc=".$_POST['id']."'>Попробуйте снова</a>";
	}

	
	$smarty_main->assign("content", $content);
	$smarty_main->display("main.tpl");


	}

else {
	header("location:../404.html");
}


?>