<?php
require_once("header.php");

$smarty_test = new Smarty();

//print_r($_SESSION);
if(empty($_POST['tel'])) {
	
	$smarty_test->display("test.tpl");
}


else if(!empty($_POST['tel'])) {
	if(!empty($_SESSION['summVvoda_ref'])) {

	$query = "insert into form_in (tel, last_name, first_name, summ, na_wm, oplata_v, komisija, k_oplate, data) values('".$_POST['tel']."', '".$_POST['last_name']."', '".$_POST['first_name']."', '".$_SESSION['summVvoda_ref']."', '".$_SESSION['wm_ref']."', '".$_SESSION['oplata_ref']."', '".$_SESSION['marga_ref']."', '".$_SESSION['k_oplate_ref']."', now())";


	/* получатели */
	$to= "Alex <alexthedestiny@gmail.com>" . ", " ; //обратите внимание на запятую
	$to .= "Shilling.co <office@shilling.co>";

	/* тема/subject */
	$subject = "Поступила новая заявка на пополнение счета";

	/* сообщение */
	$message = '
	<html>
	<head>
	 <title>Shilling.co</title>
	</head>
	<body>
	<p>На ваш сайт Shilling.co поступила новая заявка на пополнение счета!</p>
	<p>Телефон: '.$_POST['tel'].'</p>
	<p>Сумма: '.$_SESSION['summVvoda_ref'];
	if($_SESSION['wm_ref'] == "WMZ") {
		$message.= ' WMZ';
	} 
	else if($_SESSION['wm_ref'] == "WME") {
		$message.= ' WME';
	} 
	else if($_SESSION['wm_ref'] == "WMR") {
		$message.= ' WMR';
	} 
	else {
		$message.= ' WMU';
	}

	$message.= ' - '.$_SESSION['k_oplate_ref'];

	if($_SESSION['oplata_ref'] == "USD") {
		$message.= ' USD';
	} 
	else if($_SESSION['oplata_ref'] == "EUR") {
		$message.= ' EUR';
	} 
	else if($_SESSION['oplata_ref'] == "RUB") {
		$message.= ' RUB';
	} 
	else {
		$message.= ' UAH';
	}


	$message.= ' </p>
	<p>Тип операции: Ввод</p>
	<p>Имя Фамилия: '.$_POST['last_name'].' '.$_POST['first_name'].'</p>
	<p>Нажмите <span style="color: #cc0000;"><a href="837163.vdtvdt.web.hosting-test.net/admin/request.php">ЗДЕСЬ</a></span> чтобы просмотреть подробнее!</p>
	</body>
	</html>
	';

	/* Для отправки HTML-почты вы можете установить шапку Content-type. */
	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	/* дополнительные шапки */
	$headers .= "From: Shilling.co <birthday@example.com>\r\n";
	$headers .= "Cc: birthdayarchive@example.com\r\n";
	$headers .= "Bcc: birthdaycheck@example.com\r\n";

	/* и теперь отправим из */
	mail($to, $subject, $message, $headers);
	}

	else {
		$query = "insert into form_out (tel, last_name, first_name, summ, s_wm, v_currency, komisija, k_oplate, data) values('".$_POST['tel']."', '".$_POST['last_name']."', '".$_POST['first_name']."', '".$_SESSION['summVvoda_cash']."', '".$_SESSION['wm_cash']."', '".$_SESSION['oplata_cash']."', '".$_SESSION['marga_cash']."', '".$_SESSION['k_oplate_cash']."', now())";

			/* получатели */
			$to= "Alex <alexthedestiny@gmail.com>" . ", " ; //обратите внимание на запятую
			$to .= "Shilling.co <office@shilling.co>";

			/* тема/subject */
			$subject = "Поступила новая заявка на вывод средств";

			/* сообщение */
			$message = '
			<html>
			<head>
			 <title>Shilling.co</title>
			</head>
			<body>
			<p>На ваш сайт Shilling.co поступила новая заявка на вывод средств!</p>
			<p>Нажмите <span style="color: #cc0000;"><a href="837163.vdtvdt.web.hosting-test.net/admin/request.php">ЗДЕСЬ</a></span> чтобы просмотреть!</p>
			</body>
			</html>
			';

			/* Для отправки HTML-почты вы можете установить шапку Content-type. */
			$headers= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

			/* дополнительные шапки */
			$headers .= "From: Shilling.co <birthday@example.com>\r\n";
			$headers .= "Cc: birthdayarchive@example.com\r\n";
			$headers .= "Bcc: birthdaycheck@example.com\r\n";

			/* и теперь отправим из */
			mail($to, $subject, $message, $headers);
			
	}

	//echo $query;
	//echo "test_test_test";
	mysqli_query($dbc, $query) or die("Error query");
	//header("location:test1.php");
	$smarty_test->display("test1.tpl");
}



?>