<?php 
$controller = "MainController";
require_once("Core/Initialize.php");
$controllers = new $controller("changepassword", array("get" => $_GET, "post" => $_POST));
?>