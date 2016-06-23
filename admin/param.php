<?php

$dbc = @mysqli_connect("vdtvdt.mysql.ukraine.com.ua", "vdtvdt_exchanger", "rryltqw2", "vdtvdt_exchanger") or die("Error connect");

function myProtect($link, $data) {
	/*$result = htmlspecialchars($data);*/
return mysqli_real_escape_string($link, trim($data)); //Функция трим удаляет пробелы вначале и вконце данных
//Функция mysqli_real_escape_string делает безопасными эскейп-последовательности(точка с запятой, косая черта и т.д) и имеет параметры 1) Идентификатор подключения к бд 2) Сами данные в которых нужно найти ескейп символы и заменить их на безопасные
}


function myProtect_html($link, $data) {
	$result = htmlspecialchars($data);
	return mysqli_real_escape_string($link, trim($result)); //Функция трим удаляет пробелы вначале и вконце данных
//Функция mysqli_real_escape_string делает безопасными эскейп-последовательности(точка с запятой, косая черта и т.д) и имеет параметры 1) Идентификатор подключения к бд 2) Сами данные в которых нужно найти ескейп символы и заменить их на безопасные
}

function myTotPrice($price_db) {
	
	$sot = substr($price_db, -3, 3);
	$tis = substr($price_db, -6, 3);
	$mil = substr($price_db, -9, 2);
	//$bil = substr($price_db, -15, 3);

	 return $bil." ".$mil." ".$tis." ".$sot;
}

function myPrice($price_db) {
	$des = substr($price_db, -3);
	$sot = substr($price_db, -6, 3);
	$tis = substr($price_db, -9, 3);
	$mil = substr($price_db, -12, 2);

	//$bil = substr($price_db, -15, 3);

	 return $bil." ".$mil." ".$tis." ".$sot.$des;
}

function myPrice1($price_db) {
	$valuta = substr($price_db, 0, 3);
}


function myData($data_db) {
 
 $year = substr($data_db, 0, 4);
 $moons = substr($data_db, 5, 2);
 $day = substr($data_db, 8, 4);

 switch($moons) {
 	case "01" :
 	$moons1 = "Января";
 	break;

 	case "02" :
 	$moons1 = "Февраля";
 	break;

 	case "03" :
 	$moons1 = "Марта";
 	break;

 	case "04" :
 	$moons1 = "Апреля";
 	break;

 	case "05" :
 	$moons1 = "Мая";
 	break;

 	case "06" :
 	$moons1 = "Июня";
 	break;

 	case "07" :
 	$moons1 = "Июля";
 	break;

 	case "08" :
 	$moons1 = "Августа";
 	break;

 	case "09" :
 	$moons1 = "Сентября";
 	break;

 	case "10" :
 	$moons1 = "Октября";
 	break;

 	case "11" :
 	$moons1 = "Ноября";
 	break;

 	case "12" :
 	$moons1 = "Декабря";
 	break;

 	
 }

 return $day." ".$moons1." ".$year;
}

/*$d = "2016-04-22";
echo myData($d);*/

mysqli_query($dbc,"SET NAMES UTF8");
mysqli_query($dbc,"SET CHARACTER SET UTF8");


$editor_cnf_UserFilesPath=$baseURL."userfiles/image/"; 
$editor_cnf_UserFilesAbsolutePath=$localPath."/userfiles/image/";


?>