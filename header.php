<?php
session_start();
require_once("admin/param.php");

define('SMARTY_LIB', "libs/");

require_once(SMARTY_LIB."smarty.class.php");

$smarty_main = new Smarty();


?>