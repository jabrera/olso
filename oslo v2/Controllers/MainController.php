<?php

class MainController extends Controller {

	function index($data = []) {
		require_once("Views/Shared/start.php");
		if($this->session->loggedIn) {
			$displayPage = "Dashboard";
			$userType = $this->session->getUserInfo("Type");
			$mainMenu = array();
			if($userType == "Administrator") {
				$mainMenu = array(
					"Dashboard",
					"Users",
					"Settings"
				);
			}
			if(!empty($mainMenu)) {
				foreach ($mainMenu as $menu) {
					if(is_array($menu)) {
						foreach($menu[1] as $submenu) {
							if(isset($data['get'][str_replace(" ", "-", strtolower($submenu))])) {
								$displayPage = $submenu;
								break;
							}
						}
					} else {
						if(isset($data['get'][str_replace(" ", "-", strtolower($menu))])) {
							$displayPage = $menu;
							break;
						}
					}
				}
				$pageCode = str_replace(" ", "-", strtolower($displayPage));
			}
			if(file_exists("Views/UserType/$userType/")) {
				require_once("Views/UserType/".$userType."/Shared/action-bar.php");
				require_once("Views/UserType/".$userType."/Shared/float-left-menu.php");
				if(file_exists("Views/UserType/".$userType."/".$pageCode.".php"))
					require_once("Views/UserType/".$userType."/".$pageCode.".php");
				else
					require_once("Views/Error/pagenotfound.php");
			} else
				require_once("Views/Error/typenotfound.php");
		} else {
			if(isset($data['get']['login'])) {
				$displayPage = "Login";
			} elseif(isset($data['get']['register'])) {
				$displayPage = "Register";
			} elseif(isset($data['get']['demo'])) {
				$displayPage = "Demo Page";
			} else {
				$displayPage = "Login";
			}
			if(!isset($data['get']['demo'])) {
				require_once("Views/UserType/Guest/Shared/action-bar.php");
				require_once("Views/UserType/Guest/Shared/float-left-menu.php");
			}
			if(isset($data['get']['login'])) {
				require_once("Views/UserType/Guest/login.php");
			} elseif(isset($data['get']['register'])) {
				require_once("Views/UserType/Guest/register.php");
			} elseif(isset($data['get']['demo'])) {
				require_once("Views/UserType/Guest/demo.php");
			} else {
				require_once("Views/UserType/Guest/login.php");
			}
		}
		require_once("Views/Shared/end.php");
	}

	function about() {
		$displayPage = "About";
		if($this->session->loggedIn)
			header("Location: index.php");
		require_once("Views/Shared/start.php");
		require_once("Views/UserType/Guest/Shared/action-bar.php");
		require_once("Views/UserType/Guest/Shared/float-left-menu.php");
		require_once("Views/UserType/Guest/about.php");
		require_once("Views/Shared/end.php");
	}

	function changepassword($data) {
		if($this->session->loggedIn || !isset($data['get']['h'])) 
			header("Location: index.php");
		$hash = $data['get']['h'];
		$exists = Database::isExists("ResetPassword", array("Hash"), array($hash));
		if(!$exists)
			header("Location: index.php");
		$displayPage = "Change Password";

		require_once("Views/Shared/start.php");
		require_once("Views/UserType/Guest/Shared/action-bar.php");
		require_once("Views/UserType/Guest/Shared/float-left-menu.php");
		require_once("Views/UserType/Guest/changepassword.php");
		require_once("Views/Shared/end.php");
	}

	function forgotpassword() {
		if($this->session->loggedIn) 
			header("Location: index.php");

		$displayPage = "Forgot Password";

		require_once("Views/Shared/start.php");
		require_once("Views/UserType/Guest/Shared/action-bar.php");
		require_once("Views/UserType/Guest/Shared/float-left-menu.php");
		require_once("Views/UserType/Guest/forgotpassword.php");
		require_once("Views/Shared/end.php");
	}

	function paper($data) {
		if(!$this->session->loggedIn) 
			header("Location: index.php");
		if(isset($data["get"]["report"]) && $this->session->getUserInfo("Type")) {
			$report = $data["get"]["report"];
			$doc["DocumentTitle"] = "";
		} else {
			header("Location: index.php");
		}
		$displayPage = "Report";
		require_once("Views/Shared/start.php");
		require_once("Views/UserType/Guest/Shared/float-left-menu.php");
		require_once("Views/UserType/Guest/paper.php");
		require_once("Views/Shared/end.php");
	}

}