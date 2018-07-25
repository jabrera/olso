<?php

class Session {
	public $loggedID = "";
	public $loggedIn = false;
	public $accountTable = "Account";

	function __construct() {
		session_start();
	}

	function setLoggedUser($loggedID) {
		$this->loggedID = $loggedID;
	}

	function getLoggedUser() {
		return $ths->loggedID;
	}

	function getUserInfo($column) {
		$x = "";
		$query = mysql_query("SELECT $column FROM ".$this->accountTable." WHERE ID = '".$this->loggedID."'");
		while($row = mysql_fetch_array($query)) {
			$x = $row[$column];
		}
		return $x;
	}

	function checkSession() {
		if(isset($_SESSION['loggedID'])) {
			$this->loggedIn = true;
			$this->loggedID = $_SESSION["loggedID"];
			if(isset($_GET['logout']) || !Database::isExists("Account", array("ID"), array($this->loggedID))) {
				header("Location: process.php?action=logout");
			}
		}
	}
}