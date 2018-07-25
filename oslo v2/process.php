<?php
$controller = "ProcessController";
require_once("Core/Initialize.php");
$controllers = new $controller("index", array("get" => $_GET, "post" => $_POST));
?>