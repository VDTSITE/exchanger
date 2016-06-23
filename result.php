<?php
require_once("header.php");


$_SESSION = array();

$_SESSION['summVvoda_ref'] = $_POST['summVvoda_ref'];
$_SESSION['wm_ref'] = $_POST['wm_ref'];
$_SESSION['oplata_ref'] = $_POST['oplata_ref'];
$_SESSION['marga_ref'] = $_POST['marga_ref'];
$_SESSION['k_oplate_ref'] = $_POST['k_oplate_ref'];




$_SESSION['summVvoda_cash'] = $_POST['summVvoda_cash'];
$_SESSION['wm_cash'] = $_POST['wm_cash'];
$_SESSION['oplata_cash'] = $_POST['oplata_cash'];
$_SESSION['marga_cash'] = $_POST['marga_cash'];
$_SESSION['k_oplate_cash'] = $_POST['k_oplate_cash'];

//$_SESSION['name'] = $_POST['name'];
//echo "tesdyt";
?>