<?php

require_once("header.php");


$smarty_portfolio = new Smarty();


$content = $smarty_portfolio->fetch("view_portfolio.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");


?>