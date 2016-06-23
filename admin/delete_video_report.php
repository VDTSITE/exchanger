<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {
		$smarty_main->assign("user_name", $_SESSION['user_name']);
		$smarty_delete_video_report = new Smarty();

	if(isset($_GET['idc'])) {
		

		$query_delete_mail_idc = "select id, name from videoreport where id =".$_GET['idc'];

		$result_delete_mail_idc = mysqli_query($dbc, $query_delete_mail_idc) or die("Error query_delete_mail_idc");

	
		$next_delete_mail_idc = mysqli_fetch_array($result_delete_mail_idc);

		$smarty_delete_video_report->assign("id", $next_delete_mail_idc['id']);
		$smarty_delete_video_report->assign("name", $next_delete_mail_idc['name']);
		$content = $smarty_delete_video_report->fetch("delete_video_report.tpl");
	}


	else if(!empty($_POST['id']) && isset($_POST['delete']) && $_POST['del'] == "yes") {
		//echo "nah";
		$query_name = "select name from videoreport where id=".$_POST['id'];

		//echo $query_name;

		$result_name = mysqli_query($dbc, $query_name) or die("Error query_name");

		$next_name = mysqli_fetch_array($result_name);


		$query = "delete from videoreport where id=".$_POST['id'];

		mysqli_query($dbc, $query) or die("Error query");

		$content = "Заявка клиента ".$next_name['name']." успешно удалена.<br /><a href='video_report.php'>Вернуться к списку заявок</a>";
		
	}

	else {
		$content = "Недостаточно данных для удаления.<br /><a href='delete_video_report.php?idc=".$_POST['id']."'>Попробуйте снова</a>";
	}

	
	$smarty_main->assign("content", $content);
	$smarty_main->display("main.tpl");


	}






else {
	header("location:../404.html");
}


?>