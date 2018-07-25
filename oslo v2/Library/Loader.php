<?php

class Loader {

	private $data = array();

	function __set($name, $value) {
		$this->data[$name] = $value;
	}
	function __get($name) {
		return $this->data[$name];
	}

	function load($dir) {
		foreach(scandir($dir) as $file)
			if($file != "." && $file != "..") {
				if(strpos($file, "."))
					require_once($dir.$file);
				else
					$this->load($dir.$file."/");
			}
	}

	function start() {
		$this->load($this->data["dir"]);
	}

}