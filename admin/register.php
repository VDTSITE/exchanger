<?php
require_once("header.php");

$smarty_register = new Smarty();



if(!isset($_POST['register'])) {
	$content = 5;
}

else if(isset($_POST['register']) && !empty($_POST['name']) && !empty($_POST['password']) && $_POST['password'] == $_POST['password_reply'] && !empty($_POST['email']) && !empty($_POST['tel'])) {

	if($_FILES['photo']['error'] == 0) {
		$photo_tmp_name = $_FILES['photo']['tmp_name'];
		$photo_name = time().$_FILES['photo']['name'];

		move_uploaded_file($photo_tmp_name, "../images/".$photo_name);
		$query_register = "insert into admin (name, login, password, email, tel, photo, rights, date) values('".$_POST['name']."', '".$_POST['login']."', SHA1('".$_POST['password']."'), '".$_POST['email']."', '".$_POST['tel']."', '$photo_name', '".$_POST['rights']."', now())";
	}
	else {
		$query_register = "insert into admin (name, login, password, email, tel, rights, date) values('".$_POST['name']."', '".$_POST['login']."', SHA1('".$_POST['password']."'), '".$_POST['email']."', '".$_POST['tel']."', '".$_POST['rights']."', now())";
	}

	
	/*echo $query_register;*/
	mysqli_query($dbc, $query_register) or die("Error query_resiter");

	$content = "Вы успешно зарегистрировались";

	mysqli_close($dbc);
}

else {
	$content = "Недостаточно данных для регистрации";
}

$smarty_register->assign("content", $content);

$smarty_register->display("register.tpl");


?>