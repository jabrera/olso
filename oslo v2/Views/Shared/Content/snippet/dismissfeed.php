<?php
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
?>