<?php

class Utility {

	function convertHexDec($hex) {
		$hex = substr($hex, 1);
		$rgb = array();
		for($i = 0; $i < 3; $i++) {
			$temphex = substr($hex, 0, 2);
			$rgb[] = hexdec($temphex);
			$hex = substr($hex, 2);
		}
		return $rgb;
	}

	function generateHash($length) {
		$x = "abcdef1234567890";
		return substr(str_shuffle(str_repeat($x, $length)), 0, $length);
	}

	function convertPHPArrayToJS($arr) {
		$x = "[";
		for($i = 0; $i < sizeof($arr); $i++) {
			if($i == 0) 
				$x .= $arr[$i];
			else
				$x .= ", ".$arr[$i];
		}
		$x .= "]";
		return $x;
	}

	function convertArrayToSQL($arr) {
		$data = "//";
		foreach($arr as $ar) {
			$data .= $ar."//";
		}
		return $data;
	}

	function convertSQLToArray($data) {
		return explode("//", trim($data, "//"));
	}

	function removeElementInArray($arr, $el) {
		if(in_array($el, $arr))
			unset($arr[array_search($el, $arr)]);
		return $arr;
	}
}