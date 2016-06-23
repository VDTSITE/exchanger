<?php
require_once("header.php");

//print_r($_SESSION);

$smarty_test_stock = new Smarty();

if(!isset($_POST['ok'])) {


	$type_operation = $_SESSION['test']['type_operation'];
	$smarty_test_stock->assign("type_operation", $type_operation);

	$id_currency = $_SESSION['test']['id_currency'];
	$smarty_test_stock->assign("id_currency", $id_currency);

	$percent = $_SESSION['test']['id_currency'];
	$smarty_test_stock->assign("percent", $percent);

	$k_oplate = $_SESSION['test']['k_oplate'];
	$smarty_test_stock->assign("k_oplate", $k_oplate);

	$k_polucheniju = $_SESSION['test']['k_polucheniju'];
	$smarty_test_stock->assign("k_polucheniju", $k_polucheniju);



	$smarty_test_stock->display("test_stock.tpl");
}

else if(isset($_POST['ok'])) {

	//foreach($_SESSION['test'] as $tmp) {
		$type_operation = $_SESSION['test']['type_operation'];
		$id_currency = $_SESSION['test']['id_currency'];

		$percent = $_SESSION['test']['percent'];
		$k_oplate = $_SESSION['test']['k_oplate'];
		$k_polucheniju = $_SESSION['test']['k_polucheniju'];
		$data = $_SESSION['test']['data'];


	//}
	$query_stock = "insert into form_stock (tel, last_name, first_name, type_operation, currency, percent, k_oplate, k_polucheniju, data) values('".$_POST['tel']."', '".$_POST['last_name']."', '".$_POST['first_name']."', '$type_operation', '$id_currency', '$percent', '$k_oplate','$k_polucheniju', now())";
	//echo $query_stock;



	/* получатели */
			$to= "Alex <alexthedestiny@gmail.com>" . ", " ; //обратите внимание на запятую
			$to .= "Shilling.co <office@shilling.co>";

			/* тема/subject */
			$subject = "Поступила новая заявка на акиционное предложение";

			/* сообщение */
			$message = '
			<html>
			<head>
			 <title>Shilling.co</title>
			</head>
			<body>
			<p>На ваш сайт Shilling.co поступила новая заявка на акиционное предложение!</p>
			<p>Перейдите по ссылке ниже чтобы просмотреть!</p>
			<br />
			837163.vdtvdt.web.hosting-test.net/admin/request.php
			</body>
			</html>
			';

			/* Для отправки HTML-почты вы можете установить шапку Content-type. */
			$headers= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

			/* дополнительные шапки */
			$headers .= "From: Shilling.co <office@shilling.co>\r\n";
			/*$headers .= "Cc: birthdayarchive@example.com\r\n";
			$headers .= "Bcc: birthdaycheck@example.com\r\n";*/

			/* и теперь отправим из */
			mail($to, $subject, $message, $headers);
	mysqli_query($dbc, $query_stock);
	$smarty_test_stock->display("test1.tpl");
}
?>