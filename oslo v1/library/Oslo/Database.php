<?php

class Database {
	public $user, $pass, $host, $dbname;
	
	/*
	Gets username, password, host, and database name
	*/
	function __construct($user, $pass, $host, $dbname) {
		$this->user = $user;
		$this->pass = $pass;
		$this->host = $host;
		$this->dbname = $dbname;
	}

	/*
	Connects to database
	*/
	function ConnectDB() {
		mysql_connect($this->host, $this->user, $this->pass);
		mysql_select_db($this->dbname);
	}



	function getSingleData($table, $column, $where) {
		$x = "";
		$query = mysql_query("SELECT $column FROM $table WHERE $where");
		while($row = mysql_fetch_array($query)) {
			$x = $row[$column];
			break;
		}
		return $x;
	}

	function getRow($table, $columns, $additional) {
		$x = array();
		$queryString = "";
		if($columns == "*") {
			$queryString .= "SELECT * ";
			$columns = array();
			$temp_table = explode(" INNER JOIN ", $table);
			foreach($temp_table as $t) {
				$query = mysql_query("SHOW COLUMNS FROM $t");
				while($row = mysql_fetch_array($query)) {
					$columns[] = $row["Field"];
				}
			}
		} elseif(strpos(",", $columns)) {
			$queryString .= "SELECT $columns ";
			$columns = explode(",", str_replace(" ", "", $columns));
		}
		$queryString .= "FROM $table";
		if($additional != "")
			$queryString .= " WHERE $additional";
		$query = mysql_query($queryString);
		while($row = mysql_fetch_array($query)) {
			foreach($columns as $column)
				$x[$column] = $row[$column];
			break;
		}
		return $x;
	}

	function getData($table, $columns, $additional) {
		$x = array();
		$queryString = "";
		$tables = explode(" INNER JOIN ", $table);
		if($columns == "*") {
			$queryString .= "SELECT * ";
			$columns = array();
			foreach($tables as $t) {
				$query = mysql_query("SHOW COLUMNS FROM $t");
				while($row = mysql_fetch_array($query)) {
					$columns[] = $row["Field"];
				}
			}
		} elseif(strpos(",", $columns)) {
			$queryString .= "SELECT $columns ";
			$columns = explode(",", str_replace(" ", "", $columns));
		}
		$queryString .= "FROM $table";
		if($additional != "")
			$queryString .= " WHERE $additional";
		$query = mysql_query($queryString);
		$i = 0;
		while($row = mysql_fetch_array($query)) {
			foreach($columns as $column)
				$x[$i][$column] = $row[$column];
			$i++;
		}
		return $x;
	}

	function getNum($table, $additional) {
		$x = $this->getData($table, "*", $additional);
		return sizeof($x);
	}

	function isExists($table, $column, $value) {
		$exists = false;
		$where = "";
		for($i = 0; $i < sizeof($column); $i++) {
			if($i == 0)
				$where .= $column[$i]." = '".$value[$i]."'";
			else
				$where .= " AND ".$column[$i]." = '".$value[$i]."'";
		}
		$query = mysql_query("SELECT * FROM $table WHERE $where");
		if(mysql_num_rows($query) > 0)
			$exists = true;
		return $exists;
	}
}
?>