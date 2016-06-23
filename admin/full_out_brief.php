<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>out_brief</title>
</head>
<body>

<?php

if(!empty($_GET['idu'])) {
	$idu = $_GET['idu'];


require_once("param.php");
echo "<table border='1'>
<tr><th>id</th><th>Услуги</th><th>Имя</th><th>Email</th><th>Телефон</th><th>Город</th><th>Название компании</th><th>Название проекта</th><th>Домен</th><th>Хостинг</th><th>Логотип</th><th>Фирменный стиль</th><th>Бюджет от</th><th>Бюджет до</th><th>Срок запуска</th><th>Как нашли</th><th>Цветовая палитра</th><th>структура страницы</th><th>Ваши идеи</th><th>Примеры сайтов</th><th>Списки страниц</th><th>Необходим контент</th><th>Необходима раскрутка</th></tr>";

$query = "select id, services, name, email, tel, city, company_name, project_title, domen, hosting, logo, firm_style, budg_from, budg_to, srok_zap, how_find, colors, page_structure, your_ideas, site_examples, pages_list, need_content, need_seo, comment from brief";

$result = mysqli_query($dbc, $query) or die("Error query");


$next = mysqli_fetch_array($result);
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
	$domen = $next['domen'];
	if($domen == 0) {
		$domen = "Нет, необходима регистрация";
	}
	else {
		$domen = "Да, есть";
	}
	$hosting = $next['hosting'];
	if($hosting == 0) {
		$hosting = "Нет, необходима регистрация";
	}
	else {
		$hosting = "Да, есть";
	}
	$logo = $next['logo'];
	if($logo == 0) {
		$logo = " Нет, необходима разработка";
	}
	else {
		$logo= "Да, есть";
	}

	$firm_style = $next['firm_style'];
	if($firm_style == 0) {
		$firm_style = "Нет, необходима разработка";
	}
	else {
		$firm_style = "Да, есть";
	}
	$budg_from = $next['budg_from'];
	$budg_to = $next['budg_to'];
	$srok_zap = $next['srok_zap'];
	$how_find = $next['how_find'];
	if ($how_find == 1) {
		$how_find = "Поисковые системы";
	}
	if ($how_find == 2) {
		$how_find = "Социальные сети";
	}
	if ($how_find == 3) {
		$how_find = "Рекомендации";
	}
	$colors = $next['colors'];
	$page_structure = $next['page_structure'];
	if($page_structure == 0) {
		$page_structure = "Нет, необходимо разработать";
	}
	else {
		$page_structure = "Да, есть";
	}
	$your_ideas = $next['your_ideas'];
	$site_examples = $next['site_examples'];
	$pages_list = $next['pages_list'];
	$need_content = $next['need_content'];
	if($need_content == 0) {
		$need_content = " Нет, спасибо я как-то сам";
	}
	else {
		$need_content = "Да, надо";
	}
	$need_seo = $next['need_seo'];
	if($need_seo == 0) {
		$need_seo = " Нет, спасибо я как-то сам";
	}
	else {
		$need_seo = "Да, надо";
	}

	echo "<tr><td>$idu</td><td>$services</td><td>$name</td><td>$email</td><td>$tel</td><td>$city</td><td>$company_name</td><td>$project_title</td><td>$domen</td><td>$hosting</td><td>$logo</td><td>$firm_style</td><td>$budg_from$</td><td>$budg_to$</td><td>$srok_zap</td><td>$how_find</td><td>$colors</td><td>$page_structure</td><td>$your_ideas</td><td>$site_examples</td><td>$pages_list</td><td>$need_content</td><td>$need_seo</td><td>$comment</td></tr>";


echo "</table>";


mysqli_close($dbc);
}

else {
	echo "Недостаточно данных для просмотра";
}

?>
	
</body>
</html>