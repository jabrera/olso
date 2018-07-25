<span class="title">Message</span>
<p>
	Are you sure you want to delete this data?
</p>
<?php
$inputs = array(
	array("ID", "hidden", "id", "1", 0)
);
$oslo->parseForm($inputs);
?>
<ul class="button-container right">
	<li><a onclick="showElement('none')" class="flat_button">No</a></li>
	<li><a id="btnSubmit" class="flat_button">Yes</a></li>
</ul>
<script>
$(document).ready(function() {
	<?=$oslo->submitDialogBox("testaction", "")?>
});
</script>