<?php
require_once("header.php");

if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name']) && isset($_COOKIE['user_rights'])) {
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['user_name'] = $_COOKIE['user_name'];
	$_SESSION['user_rights'] = $_COOKIE['user_rights'];
	$_SESSION['user_photo'] = $_COOKIE['user_photo'];
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_rights'])) {
$smarty_main->assign("user_name", $_SESSION['user_name']);
$smarty_main->assign("user_photo", $_SESSION['user_photo']);

$smarty_sub_categories = new Smarty();




/////////////////////////////////////////////////
$query_cat = "select id, name from categories";
	$result_cat = mysqli_query($dbc, $query_cat) or die("Error query_cat");
	$cat = array();

	while($next_cat = mysqli_fetch_array($result_cat)) {
		$cat[] = array("id"=>$next_cat['id'], "name"=>$next_cat['name']);
	}

	$smarty_sub_categories->assign("cat", $cat);

/////////////////////////////////////////////////







$sub_categories = array();
$query = "select id, name, photo, id_cat from sub_categories";
		/*echo $query;*/
$result = mysqli_query($dbc, $query) or die("Error query");
		
		
$count = 1;
		
while($next = mysqli_fetch_array($result)) {
		$photo = $next['photo'];
		if(empty($photo)) {
			$photo = "no_image.png";
		}

		else {
			$photo = $next['photo'];
		}

		$sub_categories[] = array("id"=>$next['id'], "name"=>$next['name'], "id_cat"=>$next['id_cat'], "photo"=>$photo);
		
	}





$smarty_sub_categories->assign("count", $count);

$smarty_sub_categories->assign("sub_categories", $sub_categories);

////////////////////////////////////////////////////

////////////////////////////////////////////////////
$content = $smarty_sub_categories->fetch("view_sub_categories.tpl");

$smarty_main->assign("content", $content);

$smarty_main->display("main.tpl");


}

else {
	header("location:login.php");
}


?>