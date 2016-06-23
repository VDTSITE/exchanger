<?php
require_once("header.php");

$smarty_login = new Smarty();

if(!isset($_POST['log_in'])) {

$content = 5;

}

else if(isset($_POST['log_in']) && !empty($_POST['login']) && !empty($_POST['password'])) {
	$query_log_in = "select id, name, photo, rights from admin where login='".$_POST['login']."' and password=SHA1('".$_POST['password']."')";

	$result_log_in = mysqli_query($dbc, $query_log_in) or die("Error query_log_in");

	if(mysqli_num_rows($result_log_in) == 1) {
		$next_log_in = mysqli_fetch_array($result_log_in);

		$_SESSION['user_id'] = $next_log_in['id'];
		$_SESSION['user_name'] = $next_log_in['user_name'];
		$_SESSION['user_rights'] = $next_log_in['user_rights'];
		$_SESSION['user_photo'] = $next_log_in['user_photo'];

		setcookie('user_id', $next_log_in['id'], time() + 60 * 60 * 24 * 30 * 3);
		setcookie('user_name', $next_log_in['name'], time() + 60 * 60 * 24 * 30 * 3);
		setcookie('user_rights', $next_log_in['rights'], time() + 60 * 60 * 24 * 30 * 3);
		setcookie('user_photo', $next_log_in['photo'], time() + 60 * 60 * 24 * 30 * 3);

		/*$content = "Вы успешно вошли в админ панель";*/

		header("location:index.php");
	}

	else {
		$content = "Неверный логин или пароль";
	}
}

else {
	$content = "Недостаточно данных для входа";
}

$smarty_login->assign("content", $content);
$smarty_login->display("login.tpl");

?>