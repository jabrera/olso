	<div id="action-bar">
		<div class="row">
			<div class="menu-title">
				<ul>
					<li><a onclick="showElement('#float-left-menu', 1)" class="action_icon ic_menu_white icons icon_medium"></a></li>
					<li><span class="title">Login</span></li>
				</ul>
			</div>
			<div class="actions">
			</div>
		</div>
	</div>
	<div id="float-left-menu">
		<div class="wrapper">
			<div class="title">
				<div style="position: relative"><a class="icons icon_medium" onclick="showElement('none')"></a>Main Menu</div>
			</div>
			<ul class="ripple">
				<li><a href="about.php"><span class="img ic_info_outline_white"></span>About</a></li>
				<li><a href="index.php?login"><span class="img ic_lock_outline_white"></span>Login</a></li>
				<li><a href="index.php?register"><span class="img ic_account_circle_white"></span>Register</a></li>
			</ul>
			<div class="copyright">
				<?php echo $pageInfo["Copyright"]; ?>
			</div>
		</div>
	</div>
	<div id="body-container">
		<div class="content">
			<div class="bg-cover" style="background-image: url(images/skin/oslo/bg/cover1.jpg); height: 500px;"></div>
			<div class="title">
			</div>
			<div class="wrapper">
				<div class="col-4 offset-3">
					<div class="card">
						<h2>Login</h2>
						<form id="loginForm" action="process.php?action=login" method="post">
							<table width="100%" cellpadding="10px" cellspacing="0px">
								<tr>
									<td><input type="text" placeholder="Username" name="username"></td>
								</tr>
								<tr>
									<td><input type="password" placeholder="Password" name="password"></td>
								</tr>
								<tr>
									<td><input type="submit" value="Login" class="block"></td>
								</tr>
							</table>
							<p align="right"><a href="forgotpassword.php">Forgot password?</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>