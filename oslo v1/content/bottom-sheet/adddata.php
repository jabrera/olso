<div class="content">
	<h3>Add Data</h3>
	<?php
	$inputs = array(
		array("Full Name", "text", "fname", "", 1),
		array("Address", "text", "address", "", 1),
		array("Email", "text", "email", "", 1),
		array("Contact No.", "text", "contactno", "", 1),
		array("Gender", "select", "gender", array("Male", array("Male", "Female"), array("Male", "Female")), 1)
	);
	echo $oslo->parseForm($inputs);
	?>
	<ul class="button-container right">
		<li><a onclick="showElement('none');" target="_blank" class="raised_button">Cancel</a></li>
		<li><a id="btnSubmit" target="_blank" class="raised_button">Add</a></li>
	</ul>
</div>
<script>
$(document).ready(function() {
	<?=$oslo->submitBottomSheet("testaction", "")?>
});
</script>