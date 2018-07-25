<?php

class Controller {

	public $session;

	public $menuIcon = array();

	public $welcome = false;

	function __construct($page, $data = []) {
		if(!$this->welcome) {
			if(file_exists("Library/Config.php")) {
				require_once("Library/Config.php");
				$this->session = new Session();
				$this->session->checkSession();
				$this->menuIcon = $menuIcon;
				if(!empty($data))
					$this->{$page}($data);
				else
					$this->{$page}();
			} else {
				require_once("Library/Classes/Helpers/Definitions.php");
				require_once("Views/Shared/start.php");
				require_once("Views/Error/confignotfound.php");
				require_once("Views/Shared/end.php");
			}
		} else {
				require_once("Library/Classes/Helpers/Definitions.php");
				require_once("Views/Shared/start.php");
				require_once("Views/welcome.php");
				require_once("Views/Shared/end.php");
		}
	}

	function getPluralEntity($entity) {
		$lastletter = $entity[strlen($entity)-1];
		if($lastletter == "s")
			$entity .= "es";
		elseif($lastletter == "y")
			$entity = substr($entity, 0, strlen($entity)-1)."ies";
		else
			$entity .= "s";
		return $entity;
	}

}