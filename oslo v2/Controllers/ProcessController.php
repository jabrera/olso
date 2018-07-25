<?php

class ProcessController extends Controller {

	function index($data) {
		if(isset($data['get']['action'])) {
			$action = $data['get']['action'];
			if(!empty($data["post"]))
				$this->{$action}($data['post']);
			else
				$this->{$action}();
		} elseif(isset($data['get']['show'])) {
			$show = $data['get']['show'];
			if(file_exists("Views/Shared/Content/snippet/$show.php"))
				require_once("Views/Shared/Content/snippet/$show.php");
			else 
				require_once("Views/Shared/Content/snippet/null.php");
		} else
			header("Location: index.php");
	}

	function login($data) {
		if(isset($data['username'], $data['password'])) {
			$username = mysql_escape_string($data['username']);
			$password = mysql_escape_string($data['password']);
			$query = Database::getRow("Account", "*", "Username = '$username' AND Password = '$password'");
			if(!empty($query)) {
				$_SESSION["loggedID"] = $query["ID"];
			}
		}
		header("Location: ".ROOT);
	}

	function logout() {
		session_destroy();
		header("Location: ".ROOT);
	}

	function showBottomSheet($data) {
		if(isset($data['name'])) {
			$name = $data['name'];
			if(file_exists("Views/Shared/Content/bottom-sheet/$name.php"))
				require_once("Views/Shared/Content/bottom-sheet/$name.php");
			else
				require_once("Views/Shared/Content/bottom-sheet/null.php");
		} else 
			require_once("Views/Shared/Content/bottom-sheet/null.php");
	}

	function showDialogBox($data) {
		if(isset($data['name'])) {
			$name = $data['name'];
			if(file_exists("Views/Shared/Content/dialog-box/$name.php"))
				require_once("Views/Shared/Content/dialog-box/$name.php");
			else 
				require_once("Views/Shared/Content/dialog-box/null.php");
		} else
			require_once("Views/Shared/Content/dialog-box/null.php");
	}

	function showSnackbar($data) {
		if(isset($data['name'])) {
			$name = $data['name'];
			if(file_exists("Views/Shared/Content/snackbar/$name.php"))
				require_once("Views/Shared/Content/snackbar/$name.php");
			else 
				require_once("Views/Shared/Content/snackbar/null.php");
		} else 
			require_once("Views/Shared/Content/snackbar/null.php");
	}

	function showDataAction($data) {
		if(isset($data['module'])) {
			$m = $data['module'];
			if(file_exists("Views/Shared/Content/data-action/$m.php"))
				require_once("Views/Shared/Content/data-action/$m.php");
			else 
				require_once("Views/Shared/Content/data-action/null.php");
		} else
			require_once("Views/Shared/Content/data-action/null.php");
	}

	function changePassword($data) {
		if(isset($data['old'], $data['new'], $data['new2'])) {
			$old = mysql_escape_string($data['old']);
			$new = mysql_escape_string($data['new']);
			$new2 = mysql_escape_string($data['new2']);
			$curpass = Database::getSingleData("Account", "Password", "ID = '".$_SESSION['loggedID']."'");
			if($curpass == $old && $new == $new2) {
				$q1 = mysql_query("UPDATE Account SET Password = '$new' WHERE ID = '".$_SESSION['loggedID']."'");
				if($q1)
					header("Location: index.php?settings&pass_success");
				else
					header("Location: index.php?settings&pass_error");
			} else
				header("Location: index.php?settings&pass_error");
		} else
			header("Location: index.php?settings&pass_error");
	} 

	function resetPassword($data) {
		if(isset($data['pass'], $data['hash'])) {
			$pass = $data['pass'];
			$hash = $data['hash'];
			$id = Database::getSingleData("ResetPassword", "AccountID", "Hash = '$hash'");
			mysql_query("UPDATE Account SET Password = '$pass' WHERE ID = '$id'");
			mysql_query("DELETE FROM ResetPassword WHERE Hash = '$hash'");
		} else
			header("Location: index.php");
	}

	function forgotPassword($data) {
		if(isset($data['email'])) {
			$email = $data['email'];
			$student = Database::getRow("Student", "*", "Email = '$email'");
			if(!empty($student)) {
				$hash = $oslo->generateHash(20);
				mysql_query("DELETE FROM ResetPassword WHERE AccountID = '".$student["ID"]."'");
				mysql_query("INSERT INTO ResetPassword (Hash, AccountID) VALUES ('$hash', '".$student["ID"]."')");
				$message = "Hello, ".Session::getNameFormat("f",$student["ID"])."!<br><br>We've heard you lost/forgot your password. We can reset it for you! Just click or copy and paste the link below:<br><br>http://oes.juvarabrera.com/changepassword.php?h=$hash";
				$oslo->sendEmail($student["ID"], "Forgot Password", $message);
				header("Location: forgotpassword.php?sent");
			} else {
				header("Location: forgotpassword.php?error");
			}
		} else {
			header("Location: forgotpassword.php?error");
		}
	}

}