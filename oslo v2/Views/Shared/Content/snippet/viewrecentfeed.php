<?php
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
					url: "process.php?show=dismissfeed",
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
					url: "process.php?show=viewallfeed",
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
?>