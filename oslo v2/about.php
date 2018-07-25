<?php
$controller = "MainController";
require_once("Core/Initialize.php");
$controllers = new $controller("about", array("get" => $_GET, "post" => $_POST));
?>