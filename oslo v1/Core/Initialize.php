<?php

require_once("Controller.php");
require_once("Controllers/".$controller.".php");


$params = [];

if(isset($_GET)) {
	foreach($_GET as $key => $value) {
		$params[$key] = $value;
	}
}