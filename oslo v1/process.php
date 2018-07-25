<?php
$backDir = '';
if(file_exists($backDir."library/Config.php"))
	require_once($backDir."library/Config.php"); 

function showSnackbar($show) {
	echo '<script>showSnackbar("'.$show.'");</script>';
}
function showSnackbarMsg($show) {
	echo '<script>showSnackbarMsg("'.$show.'");</script>';
}
function showDialogBox($show) {
	echo '<script>showDialogBox("'.$show.'");</script>';
}
function showBottomSheet($show) {
	echo '<script>showBottomSheet("'.$show.'");</script>';
}
function hideElements() {
	echo '<script>showElement("none");</script>';
}

if(isset($_GET['action'])) {
	$action = $_GET['action'];
	if($action == "show-bottom-sheet") {
		if(isset($_POST['name'])) {
			$name = $_POST['name'];
			if(isset($_POST['id'])) 
				$bs_id = $_POST['id'];
			if(file_exists("content/bottom-sheet/$name.php"))
				require_once("content/bottom-sheet/$name.php");
			else
				require_once("content/bottom-sheet/null.php");
		} else 
			require_once("content/bottom-sheet/null.php");
	} elseif($action == "show-dialog-box") {
		if(isset($_POST['name'])) {
			$name = $_POST['name'];
			if(isset($_POST['id'])) 
				$db_id = $_POST['id'];
			if(file_exists("content/dialog-box/$name.php"))
				require_once("content/dialog-box/$name.php");
			else 
				require_once("content/dialog-box/null.php");
		} else 
			require_once("content/dialog-box/null.php");
	} elseif($action == "show-snackbar") {
		if(isset($_POST['name'])) {
			$name = $_POST['name'];
			if(isset($_POST['id'])) 
				$sb_id = $_POST['id'];
			if(file_exists("content/snackbar/$name.php"))
				require_once("content/snackbar/$name.php");
			else 
				require_once("content/snackbar/null.php");
		} else 
			require_once("content/snackbar/null.php");
	} elseif($action == "register") {
		
	} elseif($action == "login") {
		if(isset($_POST['username'], $_POST['password'])) {
			$username = mysql_escape_string($_POST['username']);
			$password = mysql_escape_string($_POST['password']);
			$query = mysql_query("SELECT * FROM Account WHERE Username = '$username' AND Password = '$password'");
			while($row = mysql_fetch_array($query)) {
				$_SESSION["loggedID"] = Session::getID($username);
			}
		}
		header("Location: index.php");
	} elseif($action == "logout") {
		session_destroy();
		header("Location: index.php");
	} elseif($action == "listxxx") {
	?>
	<div class="card">
		<a onclick="showBottomSheet('addxxx');" class="float_button pos_top_right ic_plus_white icon_medium"></a>
		<?php
		$p = 1;
		if(isset($_POST['p']))
			$p = $_POST['p'];
		if(isset($_POST['pp'])) {
			if($_POST['pp'] == "All")
				$rowPerPage = 0;
			else
				$rowPerPage = $_POST['pp'];
		}
		$startFrom = ($p-1) * $rowPerPage;
		$filter = "";
		if(isset($_POST['search'])) {
			if($_POST['search'] != "") {
				$search = mysql_escape_string($_POST['search']);
				$filter .= " AND (CONCAT(Student.FirstName, ' ', Student.MiddleName, ' ', Student.LastName) LIKE '%$search%' OR Account.ID LIKE '%$search%') ";
			}
		}
		/*
		if(isset($_POST['xxx1'])) {
			if($_POST['xxx1'] != "all") {
				$xxx1 = $_POST['xxx1'];
				$filter .= " AND Table.Column = '$xxx1' ";
			}
		}
		*/
		$additional = "1=1 $filter LIMIT $startFrom, $rowPerPage";
		if($rowPerPage == 0) 
			$additional = "1=1 $filter";
		?>
		<table class="list" id="tableListData">
			<tr class="title">
				<td width="1px">
					<label id="chkAll"><input type="checkbox"><span></span></label>
				</td>
				<td colspan="2"><?=$results = Database::getNum("Table", "1=1 $filter"); if($results == 1) echo ' xxx'; else echo ' xxxs'?></td>
			</tr>
			<?php
			$tableData = Database::getData("Table", "*", $additional);
			if(!empty($tableData)) {
				foreach($tableData as $data) {
				?>
			<tr>
				<td>
					<label class="checkData" id="chk_<?=$data["ID"]?>"><input type="checkbox" value="<?=$data["ID"]?>"><span></span></label>
				</td>
				<td class="primary">
					<span>
						<?php 
						echo $data["Column"]
						?>
					</span>
					<span><?=$data["ID"]?></span>
				</td>
				<td width="1px">
					<ul class="button-container">
						<li>
							<a id="btnEdit_<?=$data["ID"]?>" class="flat_icon_20 ic_pencil showhover"></a>
							<a id="btnDelete_<?=$data["ID"]?>" class="flat_icon_20 ic_delete showhover"></a>
						</li>
					</ul>
				</td>
			</tr>
				<script>
				$(document).ready(function() {
					$("#btnEdit_<?=$data["ID"]?>").click(function() {
						showBottomSheet('editxxx', '<?=$data["ID"]?>');
					});
					$("#btnDelete_<?=$data["ID"]?>").click(function() {
						showDialogBox('deletexxx', '<?=$data["ID"]?>');
					});
				});
				</script>
				<?php
				}
				$oslo->scriptCheckedData("#tableListData");
			} else {
			?>
			<tr>
				<td></td>
				<td colspan="2" align="center">
					No result found.
				</td>
			</tr>
			<script>
			$(document).ready(function() {
				$("#tableListData #chkAll").css({"visibility": "hidden"});
			});
			</script>
			<?php
			}
			?>
		</table>
	</div>
	<script>
	$.ajax({
		type: "post",
		cache: true,
		url: "process.php?action=getdataaction",
		data: {module: "xxx"},
		success: function(html) {
			$("#data-action-bar #actions").html(html);
		}
	})
	</script>
		<?php
		$oslo->showPagination("SELECT * FROM Table WHERE 1=1", $filter, $rowPerPage, $p, "refreshListData();");
	} elseif($action == "dismissfeed") {
		if(isset($_POST['id'], $_POST['feed'])) {
			$id = $_POST['id'];
			$feed = $_POST['feed'];
			mysql_query("UPDATE Feed SET Dismiss = '1' WHERE ID = '$feed'");
			$feeds = Database::getData("Feed", "*", "AccountID = '$id' AND Dismiss = '0'");
			if(empty($feeds)) {
			?>
			<script>showCard('feeddone');</script>
			<?php
			}
		}
	} elseif($action == "viewallfeed") {
		if(isset($_POST['id'])) {
			$id = $_POST['id'];
			$feeds = Database::getData("Feed", "*", "AccountID = '$id' ORDER BY ID DESC");
			foreach($feeds as $feed) {
			?>
				<div class="card" id="card-feed_<?=$feed["ID"]?>">
					<table class="feed">
						<tr>
							<td><?=$feed["Title"]?></td>
							<td><?=date("M j, Y", strtotime($feed["DatePosted"]))?></td>
						</tr>
						<tr>
							<td colspan="2"><?=$feed["Message"]?></td>
						</tr>
					</table>
				</div>
			<?php
			}
			if(empty($feeds)) {
			?>
				<div class="card">
					<h4>Message</h4>
					<p>You have no previous cards.</p>
				</div>
			<?php
			}
			?>
			<div class="card button-container compact">
				<ul class="button-container block">
					<li><a id="btnViewPreviousCards" class="flat_button"><span class="flat_icon ic_visibility"></span>View Recent Cards</a></li>
				</ul>
				<script>
				$(document).ready(function() {
					$("#btnViewPreviousCards").click(function() {
						$.ajax({
							type: "post",
							cache: false,
							url: "process.php?action=viewrecentfeed",
							data: {id: '<?=$id?>'},
							success: function(html) {
								$("#lstFeed").html(html);
							}
						});
					})
				})
				</script>
			</div>
			<?php
		}
	} elseif($action == "viewrecentfeed") {
		if(isset($_POST['id'])) {
			$id = $_POST['id'];
			$feeds = Database::getData("Feed", "*", "AccountID = '$id' AND Dismiss = '0' ORDER BY ID DESC");
			foreach($feeds as $feed) {
			?>
				<div class="card" id="card-feed_<?=$feed["ID"]?>">
					<table class="feed">
						<tr>
							<td><?=$feed["Title"]?></td>
							<td><?=date("M j, Y", strtotime($feed["DatePosted"]))?></td>
						</tr>
						<tr>
							<td colspan="2"><?=$feed["Message"]?></td>
						</tr>
					</table>
					<ul class="button-container right">
						<li><a id="btnDismiss_<?=$feed["ID"]?>" class="flat_button"><span class="flat_icon ic_done"></span>Dismiss</a></li>
					</ul>
				</div>
				<script>
				$(document).ready(function() {
					dismissCard('feeddone', 'fast');
					$("#lstFeed #card-feed_<?=$feed["ID"]?> #btnDismiss_<?=$feed["ID"]?>").click(function() {
						dismissCard("feed_<?=$feed["ID"]?>", "swipe-left");
						$.ajax({
							type: "post",
							cache: true,
							url: "process.php?action=dismissfeed",
							data: {id: '<?=$_SESSION['loggedID']?>', feed: '<?=$feed["ID"]?>'},
							success: function(html) {
								$("#snackbar .wrapper").html(html);
							}
						})
					});
				});
				</script>
			<?php
			}
			if(empty($feeds)) {
			?>
			<div class="card">
				<h4>Done!</h4>
				<p>You're all done! Nothing to see here now.</p>
			</div>
			<?php
			} else {
			?>
			<div class="card" id="card-feeddone">
				<h4>Done!</h4>
				<p>You're all done! Nothing to see here now.</p>
			</div>
			<?php
			}
			?>
			<div class="card button-container compact">
				<ul class="button-container block">
					<li><a id="btnViewPreviousCards" class="flat_button"><span class="flat_icon ic_visibility"></span>View Previous Cards</a></li>
				</ul>
				<script>
				$(document).ready(function() {
					$("#btnViewPreviousCards").click(function() {
						$.ajax({
							type: "post",
							cache: false,
							url: "process.php?action=viewallfeed",
							data: {id: '<?=$id?>'},
							success: function(html) {
								$("#lstFeed").html(html);
							}
						});
					})
				})
				</script>
			</div>
		<?php
		}
	} elseif($action == "forgotpassword") {
		if(isset($_POST['email'])) {
			$email = $_POST['email'];
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
	} elseif($action == "changepassword") {
		if(isset($_POST['old'], $_POST['new'], $_POST['new2'])) {
			$old = mysql_escape_string($_POST['old']);
			$new = mysql_escape_string($_POST['new']);
			$new2 = mysql_escape_string($_POST['new2']);
			$curpass = $oes->getSingleData("Account", "Password", "ID = '".$_SESSION['loggedID']."'");
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
	} elseif($action == "changepassword1") {
		if(isset($_POST['pass'], $_POST['hash'])) {
			$pass = $_POST['pass'];
			$hash = $_POST['hash'];
			$id = Database::getSingleData("ResetPassword", "AccountID", "Hash = '$hash'");
			mysql_query("UPDATE Account SET Password = '$pass' WHERE ID = '$id'");
			mysql_query("DELETE FROM ResetPassword WHERE Hash = '$hash'");
		} else
			header("Location: index.php");
	} elseif($action == "viewreport") {
		if(isset($_POST['report'], $_POST['get'])) {
			$date = date("F d, Y");
			$time = date("h:i a");
			$report = $_POST['report'];
			if($report == "Sample Report") {
				$reportTitle = $report;
				$get = $_POST['get'];
				$landscape = false;
				if(isset($get['admission'], $get['max'])) {
					?>
					<div class="header right"><?=$date.' - '.$time?></div>
					<div class="content">
						<span class="title"><?=$report?></span><hr><br>
					<?=date("F d, Y", strtotime(Database::getSingleData("Admission", "ScheduleDate", "ID = '".$get['admission']."'"))).' - '.date("g:i a", strtotime(Database::getSingleData("Admission", "ScheduleTime", "ID = '".$get['admission']."'")));?>
					<br><br>
					<?php
				}
				?>
			<?php
			} else {
				showDialogBox('invalidreport');
			}
			if(isset($reportTitle)) {
			?>
				<textarea class="resize"></textarea>
			</div>
			<div class="footer"></div>
			<script>
			$(document).ready(function() {
				document.title = "<?=$reportTitle?>";
				<?php
				if($landscape) {
				?>
				$(".paper").addClass("landscape");
				$(".bg").addClass("landscape");
				<?php
				}
				?>
				$("#loading").hide("slow");
				$("#blackTrans").hide();

				$("textarea.resize").keyup(function(event) {
					$(this).css('height','auto');
					$(this).height(this.scrollHeight);
				});
			})
			</script>
			<?php
			}
		}
	} elseif($action == "testaction") {
		hideElements();
		showSnackbarMsg("This is a test action");
	} else {
		header("Location: index.php");
	}
} elseif(isset($_GET['debug'])) {
	echo 'Hi!';
} else {
	header("Location: index.php");
}
?>