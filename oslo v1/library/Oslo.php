<?php
class Oslo {
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

	function generateHash($length) {
		$x = "abcdef1234567890";
		return substr(str_shuffle(str_repeat($x, $length)), 0, $length);
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
?>