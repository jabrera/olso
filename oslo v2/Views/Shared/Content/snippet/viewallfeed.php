<?php
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
					url: "process.php?show=viewrecentfeed",
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