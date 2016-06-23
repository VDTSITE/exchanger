<?php

require_once("header.php");

$smarty_delete_news = new Smarty();

if(isset($_GET['idn']) && !empty($_GET['news_title'])) {
	$idn = $_GET['idn'];
	$news_title = $_GET['news_title'];

	$query = "select id, title from news where id=".$_GET['idn'];

	$result = mysqli_query($dbc, $query) or die("Error query") or die("Error query");

	$next = mysqli_fetch_array($result);
	$smarty_delete_news->assign("idn", $next['id']);
	$smarty_delete_news->assign("news_title", $next['title']);

	$content = $smarty_delete_news->fetch("delete_news.tpl");
}


else if(isset($_POST['delete']) && !empty($_POST['idn']) && !empty($_POST['del']) && $_POST['del'] == "yes") {

	/*echo $_GET['idn'];*/
	$query_news_photo = "select photo from news where id=".$_POST['idn'];

	/*echo $query_news_photo;*/
	$result_news_photo = mysqli_query($dbc, $query_news_photo) or die("Error query_news_photo");
	$next_news_photo = mysqli_fetch_array($result_news_photo);
	if(!empty($next_news_photo['photo'])) {
		
		@unlink("../images/".$next_news_photo['photo']);
	}

	$query_delete_news = "delete from news where id=".$_POST['idn'];
	mysqli_query($dbc, $query_delete_news) or die("Error query_delete_news");

	$content = "Статья ".$_GET['news_title']." успешно удалена<br /><a href='view_news.php'>К списку статей</a>";
}


else {
	$content = "Недостаточно данных для удаления статьи".$_GET['news_title']."<br /><a href='view_news.php'>К списку статей</a>";
}


$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");



?>