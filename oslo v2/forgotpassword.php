<?php 
$controller = "MainController";
require_once("Core/Initialize.php");
$controllers = new $controller("forgotpassword", array("get" => $_GET, "post" => $_POST));
?>