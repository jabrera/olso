<?php

class MainController extends Controller {

	function index($params = []) {
		$backDir = "";
		require_once("library/Config.php");
		require_once("Views/Shared/start.php");
		if($loggedIn) {
			$displayPage = "Dashboard";
			if(Session::getLoggedUserInfo("Type") == "Administrator") {
				$mainMenu = array(
					"Dashboard",
					"Hehe",
					"Settings"
				);
			}
			foreach ($mainMenu as $menu) {
				if(is_array($menu)) {
					foreach($menu[1] as $submenu) {
						if(isset($params[str_replace(" ", "-", strtolower($submenu))])) {
							$displayPage = $submenu;
							break;
						}
					}
				} else {
					if(isset($params[str_replace(" ", "-", strtolower($menu))])) {
						$displayPage = $menu;
						break;
					}
				}
			}
			$pageCode = str_replace(" ", "-", strtolower($displayPage));
			$typefolder = Session::getLoggedUserInfo("Type");
			require_once("Views/".$typefolder."/action-bar.php");
			require_once("Views/".$typefolder."/float-left-menu.php");
			if(file_exists("Views/".$typefolder."/".$pageCode.".php"))
				require_once("Views/".$typefolder."/".$pageCode.".php");
			else
				require_once("Views/notfound.php");
		} else {
			$displayPage = "hehe";
			if(!isset($params['demo'])) {
				require_once("Views/Guest/action-bar.php");
				require_once("Views/Guest/float-left-menu.php");
			}
			if(isset($params['login']))
				require_once("Views/Guest/login.php");
			elseif(isset($params['register']))
				require_once("Views/Guest/register.php");
			elseif(isset($params['demo']))
				require_once("Views/Guest/demo.php");
			else
				require_once("Views/Guest/login.php");
		}
		require_once("Views/Shared/end.php");
	}

	function about() {
		require_once("library/Config.php");
		if($loggedIn)
			header("Location: index.php");
		require_once("Views/Shared/start.php");
		require_once("Views/Guest/action-bar.php");
		require_once("Views/Guest/float-left-menu.php");
		require_once("Views/Guest/about.php");
		require_once("Views/Shared/end.php");
	}

}