<div id="body-container">
	<div class="content">
		<div class="bg-cover" style="height: 400px;"></div>
		<div class="title">
		</div>
		<div class="wrapper">
			<div class="col-4 offset-4">
				<div class="card" id="frmReset">
					<h2>Change password</h2>
					<?php
					$data = Database::getRow("ResetPassword", "*", "Hash = '$hash'");
					?>
					<p>Hello, <?=Database::getSingleData("Account", "Username", "ID = '".$data["AccountID"]."'")?>! You can now reset your password here!</p>
					<table width="100%" cellpadding="10px" cellspacing="0px">
						<tr>
							<td><input type="password" placeholder="New Password" name="pass1"></td>
						</tr>
						<tr>
							<td><input type="password" placeholder="Re-enter new password" name="pass2"></td>
						</tr>
					</table>
					<ul class="button-container block">
						<li><a id="btnReset" class="raised_button">Reset Password</a></li>
					</ul>
					<script>
					$(document).ready(function() {
						$("#frmReset #btnReset").click(function() {
							$pass1 = $("#frmReset input[name=pass1]").val();
							$pass2 = $("#frmReset input[name=pass2]").val();
							if($pass1 != "" && $pass2 != "" && $pass1 == $pass2) {
								$("#frmReset ul.button-container").hide();
								$("#loading").show("slow");
								$.ajax({
									type: "post",
									cache: false,
									url: "process.php?action=resetpassword",
									data: {pass: $pass1, hash: '<?=$hash?>'},
									success: function(html) {
										$("#loading").hide("slow");
										showDialogBox('resetpassword');
										$("#snackbar .wrapper").html(html);
									}
								})
							} else {
								showSnackbarMsg("Passwords does not match.");
							}
						})
					})
					</script>
				</div>
			</div>
		</div>
	</div>
</div>