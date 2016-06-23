<?php
require_once("header.php");

$smarty_add_gallery = new Smarty();

if(empty($_FILES['photo'])) {

	$content = $smarty_add_gallery->fetch("add_gallery.tpl");
}


else if(!empty($_FILES['photo'])) {
	/*echo "321";*/
	if($_FILES['photo']['error'] == 0) {
		$photo_tmp_name = $_FILES['photo']['tmp_name'];
		$photo_name = time().$_FILES['photo']['name'];

		move_uploaded_file($photo_tmp_name, '../images/'.$photo_name);

		
		$query_news = "insert into gallery (photo) values('$photo_name')";

		/*echo $query_news;*/

		mysqli_query($dbc, $query_news) or die("Error query_news");

		$content = "Данная фотография успешно добавлена<br /><a href='view_gallery.php'>Вернуться в галерею</a>";
		
	}


}

else {
	$content = "Недостаточно данных для добавления<br /><a href='add_gallery.php'>Попробовать еще раз</a>";
}



$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");





?>