<?php

require_once("header.php");

$smarty_view_gallery = new Smarty();


$query = "select photo from gallery";

$result = mysqli_query($dbc, $query) or die("Error query");

$gallery = array();

while($next = mysqli_fetch_array($result)) {
	$gallery[] = array("photo"=>$next['photo']);
}

$strings = array();

for($i = 0; $i < 3; $i++) {
	$strings[] = array("p", $i);
}
$smarty_view_gallery->assign("strings", $strings);
$smarty_view_gallery->assign("gallery", $gallery);
$content = $smarty_view_gallery->fetch("view_gallery.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");


?>
