<?php

class Session {
	protected $loggedID;
	function loggedUser($loggedID) {
		$this->loggedID = $loggedID;
	}

	function getID($username) {
		$x = "";
		$query = mysql_query("SELECT * FROM Account WHERE Username = '$username'");
		while($row = mysql_fetch_array($query)) {
			$x = $row["ID"];
		}
		return $x;
	}

	function getLoggedUserInfo($column) {
		$x = "";
		$query = mysql_query("SELECT $column FROM Account WHERE ID = '{$this->loggedID}'");
		while($row = mysql_fetch_array($query)) {
			$x = $row[$column];
		}
		return $x;
	}

	function getUserInfo($column, $id) {
		$x = "";
		$query = mysql_query("SELECT $column FROM Account WHERE ID = '$id'");
		while($row = mysql_fetch_array($query)) {
			$x = $row[$column];
		}
		return $x;
	}

	function getNameFormat($format, $id) {
		$x = $format;
		$formats = "FfMmLl";
		for($i = 0; $i < strlen($formats); $i++) {
			$temp = substr($formats, $i, 1);
			$x = str_replace($temp, '{'.$temp.'}', $x);
		}
		$type = $this->getSingleData("Account", "Type", "ID = '$id'");
		if($type == "Student" || $type == "Enrollee")
			$query = mysql_query("SELECT FirstName, MiddleName, LastName FROM Student WHERE ID = '$id'");
		elseif($type == "Faculty")
			$query = mysql_query("SELECT FirstName, MiddleName, LastName FROM Faculty WHERE ID = '$id'");
		while($row = mysql_fetch_array($query)) {
			$x = str_replace("{f}", $row["FirstName"], $x);
			$x = str_replace("{m}", $row["MiddleName"], $x);
			$x = str_replace("{l}", $row["LastName"], $x);
			$x = str_replace("{F}", substr($row["FirstName"], 0, 1), $x);
			$x = str_replace("{M}", substr($row["MiddleName"], 0, 1), $x);
			$x = str_replace("{L}", substr($row["LastName"], 0, 1), $x);
		}
		return $x;
	}
}