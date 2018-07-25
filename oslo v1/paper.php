<?php 
	$backDir = '';
	if(file_exists($backDir."library/Config.php")) {
		require_once($backDir."library/Config.php"); 
	}
	if(!$loggedIn)
		header("Location: index.php");
	if(isset($_GET['report']) && $oslo->getLoggedUserInfo("Type") == "Administrator") {
		$report = $_GET['report'];
		$doc["DocumentTitle"] = "";
	} else {
		header("Location: index.php");
	}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title><?php echo $doc["DocumentTitle"]; ?></title>
	<script src="<?php echo $backDir; ?>scripts/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $backDir; ?>styles/skin/light/">
	<link rel="stylesheet" href="<?php echo $backDir; ?>styles/style.php">
	<link rel="stylesheet" href="<?php echo $backDir; ?>styles/paper.css">
	<script src="<?php echo $backDir; ?>scripts/smooth_scroll.js"></script>
	<script src="<?php echo $backDir; ?>scripts/oslo-ui.js"></script>
</head>
<body>
<div id="app-container">
	<div class="bg"></div>
	<?php
	if(isset($report)) {
	?>
	<div class="paper">

	</div>
	<script>
	$(document).ready(function() {
		$except = 0;
		$("#float-left-menu").hide();
		updateLayout("loaded");
		$("#blackTrans").show();
		$("#loading").show("slow");
		$.ajax({
			type: "post",
			cache: true,
			url: "process.php?action=viewreport",
			data: {report: '<?php echo $report; ?>', get: <?php echo json_encode($_GET); ?>},
			success: function(html) {
				$(".paper").html(html);
			}
		})
	});
	</script>
	<?php
	}
	?>
	<script>
	$(document).ready(function() {
		$except = 0;
		$("#float-left-menu").hide();
		updateLayout("loaded");
	});
	</script>
	<div id="float-left-menu">
		<div class="wrapper">
			<div class="title">
				<div style="position: relative"><a class="icons icon_medium" onclick="showElement('none')"></a>Main Menu</div>
			</div>
			<ul class="ripple">
				<li><a><span class="img ic_payment_white"></span>About</a></li>
				<li><a href="index.php?login"><span class="img ic_dashboard_white"></span>Login</a></li>
				<li><a href="index.php?register"><span class="img ic_account_circle_white"></span>Register</a></li>
			</ul>
			<div class="copyright">
				&copy; 2015 Online Enrollment System<br>
				Juvar Abrera • Jarrell Maverick Remulla
			</div>
		</div>
	</div>
	<div id="blackTrans"></div>
	<div id="dialog-box">
		<div class="wrapper">
			<center><div class="loading"></div></center>
		</div>
	</div>
	<div id="snackbar">
		<div class="wrapper">
		</div>
	</div>
	<div id="loading"></div>
</div>
</body>
</html>