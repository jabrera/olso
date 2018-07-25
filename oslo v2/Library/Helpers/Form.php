<?php

class Form {
	private $parent = "";

	private $inputs = array();

	private $buttons = array();

	private $action = "";

	private $jsAfter = "";

	function setParent($parent) {
		$this->parent = $parent;
	}

	function setAction($action) {
		$this->action = $action;
	}

	function addInput($input) {
		$this->inputs[] = $input;
	}

	function addButton($button) {
		$this->buttons[] = $button;
	}

	function setJsAfter($jsAfter) {
		$this->jsAfter = $jsAfter;
	}

	function getParent() {
		return $this->parent;
	}
	
	/*

	$inputs = array(
		array("label/placeholder", "input type", "input name", "input default value", a*, isRequired, other input properties)
	)

	a* ? as input : print only value
	*/

	function getInputs() {
		return $this->inputs;
	}

	function getButtons() {
		return $this->buttons;
	}

	function getAction() {
		return $this->action;
	}

	function getJsAfter() {
		return $this->jsAfter;
	}

}