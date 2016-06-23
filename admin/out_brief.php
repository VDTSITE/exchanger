<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>out_brief</title>
</head>
<body>

<?php
require_once("param.php");
echo "<table border='1'>
<tr><th>id</th><th>Услуги</th><th>Имя</th><th>Email</th><th>Телефон</th><th>Город</th><th>Название компании</th><th>Название проекта</th><th>Подробнее</th><th>Редактировать</th><th>Удалить</th></tr>";

$query = "select id, services, name, email, tel, city, company_name, project_title from brief";

$result = mysqli_query($dbc, $query) or die("Error query");


while($next = mysqli_fetch_array($result)) {
	$id = $next['id'];
	$services = $next['services'];
	if ($services == 1) {
		$services = "Создание сайта";
	}
	if ($services == 2) {
		$services = "Создание дизайна";
	}
	if ($services == 3) {
		$services = "Верстка дизайна";
	}
	if ($services == 4) {
		$services = "Продвижение сайта, SEO-оптимизация";
	}
	if ($services == 5) {
		$services = "Контекстная реклама";
	}
	if ($services == 6) {
		$services = "Поддержка сайта";
	}
	if ($services == 7) {
		$services = "Хостинг, размещение на хостинге";
	}
	if ($services == 8) {
		$services = "Домен";
	}
	if ($services == 9) {
		$services = "Мобильное приложение";
	}
	if ($services == 10) {
		$services = "Брендинг, фирменный стиль";
	}
	if ($services == 11) {
		$services = "Копирайтинг, контент менеджмент";
	}
	if ($services == 12) {
		$services = "Аудит сайта";
	}
	if ($services == 13) {
		$services = "SMM (продвижение в социальных сетях)";
	}

	$name = $next['name'];
	$email = $next['email'];
	$tel = $next['tel'];
	$city = $next['city'];
	$company_name = $next['company_name'];
	$project_title = $next['project_title'];


	

	echo "<tr><td>$id</td><td>$services</td><td>$name</td><td>$email</td><td>$tel</td><td>$city</td><td>$company_name</td><td>$project_title</td><td><a href='full_out_brief.php?idu=".$id."'>Подробнее</a></td><td><a href='edit_brief.php?idu=".$id."'>Редактировать</a></td><td><a href='delete_brief.php?idu=".$id."&name=".$name."'>Удалить</a></td></tr>";
}

echo "</table>";


mysqli_close($dbc);

?>
	
</body>
</html>