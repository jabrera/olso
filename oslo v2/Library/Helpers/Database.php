<?php

class Database {

	function connect($host, $user, $pass, $dbname) {
		mysql_connect($host, $user, $pass);
		mysql_select_db($dbname);
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
		$x = Database::getData($table, "*", $additional);
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

	function escape($unescaped) {
		$escape = array();
		foreach($unescaped as $str) {
			$escape[] = mysql_escape_string($str);
		}
		return $escape;
	}

	function executeQuery($query) {
		mysql_query($query);
		return $query;
	}

	function insertData($table, $columns, $values) {
		if(empty($columns)) {
			$columns = "";
		} else {
			$columns = "(".implode(", ", $columns).")";
		}
		$values = Database::escape($values);
		$values = "('".implode("', '",$values)."')";
		$query = "INSERT INTO $table $columns VALUES $values";
		return Database::executeQuery($query);
	}

	function updateData($table, $columns, $values, $where = "") {
		$query = "";
		if(sizeof($columns) == sizeof($values)) {
			$values = Database::escape($values);
			$set = array();
			for($i = 0; $i < sizeof($columns); $i++)
				$set[] = $columns[$i]." = '".$values[$i]."'";
			if($where != "") 
				$where = " WHERE ".$where;
			$query = "UPDATE $table SET ".implode(", ", $set)." $where";
		}
		return Database::executeQuery($query);
	}

	function deleteData($table, $where = "1=2") {
		$query = "DELETE FROM $table WHERE $where";
		return Database::executeQuery($query);
	}
}
?>