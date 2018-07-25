<?php

require_once("Library/Loader.php");
$load = new Loader();
$load->__set("dir", "Library/Helpers/");
$load->start();
date_default_timezone_set('Asia/Manila');

ini_set('display_errors', 0);
ini_set('max_execution_time', 600);
error_reporting(0);

Database::connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$menuIcon = array(
	"Dashboard" => "ic_dashboard_white",
	"Users" => "ic_account-multiple_white",
	"Categories" => "ic_speaker_notes_white",
	"Blog Posts" => "ic_subject_white",
	"Settings" => "ic_settings_white"
);

?>