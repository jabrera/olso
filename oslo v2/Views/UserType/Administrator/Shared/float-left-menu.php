<div id="float-left-menu">
	<div class="wrapper">
		<div class="title cover">
			<div class="filter"></div>
			<div style="position: relative">
				<a class="icons icon_medium" onclick="showElement('none')"></a>
				<?php
				if(defined('BRAND_LOGO'))
					echo '<a class="brand-logo" style="background-image: url('.BRAND_LOGO.')"></a>';
				else
					echo 'Main Menu';
				?>
			</div>
			<div class="name">
			<?php
			echo ($userType == "Administrator") ? $userType : $session->getUserInfo("Username");
			?>
			</div>
		</div>
		<ul class="ripple">
		<?php
		$menuIcon = $this->menuIcon;
		foreach($mainMenu as $menu) {
			if(is_array($menu)) {
				if(isset($menuIcon[$menu[0]]))
					$icon = $menuIcon[$menu[0]];
				else 
					$icon = "ic_dashboard_white";
				echo '
				<li><a><span class="img '.$icon.'"></span>'.$menu[0].'</a>
				<ul>';
				foreach($menu[1] as $submenu) {
					if(isset($menuIcon[$submenu]))
						$icon = $menuIcon[$submenu];
					else 
						$icon = "ic_dashboard_white";
					echo '
					<li><a href="?'.str_replace(" ", "-", strtolower($submenu)).'"><span class="img '.$icon.'"></span>'.$submenu.'</a></li>';
				}
				echo '
				</ul></li>';
			} else {
				if(isset($menuIcon[$menu]))
					$icon = $menuIcon[$menu];
				else 
					$icon = "ic_dashboard_white";
				echo '
				<li><a href="?'.str_replace(" ", "-", strtolower($menu)).'"><span class="img '.$icon.'"></span>'.$menu.'</a></li>';
			}
		}
		?>
		</ul>
		<div class="copyright">
			<?=PAGE_COPYRIGHT?>
		</div>
	</div>
</div>