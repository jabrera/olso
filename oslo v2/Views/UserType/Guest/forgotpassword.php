<div id="body-container">
	<div class="content">
		<div class="bg-cover" style="background-image: url(images/skin/oslo/bg/cover1.jpg); height: 500px;"></div>
		<div class="title">
		</div>
		<div class="wrapper">
			<div class="col-4 offset-4">
				<?php
				if(isset($_GET['sent'])) {
				?>
				<div class="card">
					<h2>Success</h2>
					<p>We've sent you an email of the link to change your password.</p>
				</div>
				<?php
				} elseif(isset($_GET['error'])) {
				?>
				<div class="card">
					<h2>Message</h2>
					<p>Error. The email you entered is invalid or not found.</p>
				</div>
				<?php
				}
				?>
				<div class="card">
					<h2>Forgot password</h2>
					<form id="loginForm" action="process.php?action=forgotpassword" method="post">
						<table width="100%" cellpadding="10px" cellspacing="0px">
							<tr>
								<td><input type="text" placeholder="Email" name="email"></td>
							</tr>
							<tr>
								<td><input type="submit" value="Reset password" class="block"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>