<?php
$load = array("Database", "HTMLParser", "Session", "Utility");
foreach($load as $l) {
	if(file_exists("Library/Oslo/".$l.".php"))
		require_once("Library/Oslo/".$l.".php");
}
require_once("Library/ExcelReader/ExcelReader.php");
date_default_timezone_set('Asia/Manila');

//ini_set('display_errors', 0);
ini_set('max_execution_time', 600);
//error_reporting(1);


if($_SERVER["HTTP_HOST"] == "localhost") {
	$mysql_host = "localhost";
	$mysql_database = "cms";
	$mysql_user = "root";
	$mysql_password = "";
} else {
	$mysql_host = "";
	$mysql_database = "";
	$mysql_user = "";
	$mysql_password = "";
}

$oslo_db = new Database($mysql_user, $mysql_password, $mysql_host, $mysql_database);
$oslo_db->ConnectDB();
$excel = new Spreadsheet_Excel_Reader();



session_start();
$loggedIn = false;

// Assigning of icons for menu
$menuIcon = array(
	"Dashboard" => "ic_dashboard_white"
);

$loggedID = "";
if(isset($_SESSION['loggedID'])) {
	$loggedIn = true;
	$loggedID = $_SESSION["loggedID"];
	Session::loggedUser($_SESSION["loggedID"]);
	if(isset($_GET['logout']) || !Database::isExists("Account", array("ID"), array($_SESSION['loggedID']))) {
		header("Location: process.php?action=logout");
	}
}

$pageInfo = array(
	"Title" => "Oslo Framework",
	"Copyright" => "&copy; 2015 Oslo Framework<br>Developed and designed by <a href=\"http://www.juvarabrera.com/\" target=\"_blank\">Juvar Abrera</a>"
);

?>