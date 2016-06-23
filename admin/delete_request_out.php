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

	if(isset($_GET['ido'])) {
		

		$query_delete_mail_idc = "select id, first_name from form_out where id =".$_GET['ido'];

		$result_delete_mail_idc = mysqli_query($dbc, $query_delete_mail_idc) or die("Error query_delete_mail_ido");

	
		$next_delete_mail_idc = mysqli_fetch_array($result_delete_mail_idc);

		$smarty_delete_mail_idc->assign("ido", $_GET['ido']);
		$smarty_delete_mail_idc->assign("name", $next_delete_mail_idc['first_name']);
		$content = $smarty_delete_mail_idc->fetch("delete_request_out.tpl");
	}


	else if(!empty($_POST['ido']) && isset($_POST['delete']) && $_POST['del'] == "yes") {
		//echo "nah";
		$query_name = "select first_name, status from form_out where id=".$_POST['ido'];

		//echo $query_name;

		$result_name = mysqli_query($dbc, $query_name) or die("Error query_name");

		$next_name = mysqli_fetch_array($result_name);


		$query = "delete from form_out where id=".$_POST['ido'];

		mysqli_query($dbc, $query) or die("Error query");
		if($next_name['status'] == 0) {
			$content = "Заявка клиента ".$next_name['first_name']." успешно удалена.<br /><a href='request.php'>Вернуться к списку заявок</a>";
		}

		else {
			$content = "Заявка клиента ".$next_name['first_name']." успешно удалена.<br /><a href='request_archive.php'>Вернуться к архиву заявок</a>";
		}
	}

	else {
		$content = "Недостаточно данных для удаления.<br /><a href='delete_request_out.php?ido=".$_POST['ido']."'>Попробуйте снова</a>";
	}

	
require_once("main.php");

	}






else {
	header("location:../404.html");
}


?>