<?php
$data = Database::getRow("<TABLE>", "<COLUMNS>", "<WHERE>");
$entity = "User";
?>
<div class="content">
	<h3>Edit <?=$entity?></h3>
	<?php
	$form = new Form();
	$form->setParent("#bottom-sheet");
	$form->setAction("edit<?=$entity?>");
	$form->addInput(array("ID", "hidden", "id", $data["ID"], true, true));
	$form->addInput(array("Full Name", "text", "fname", $data["FullName"], true, true));
	$form->addInput(array("Email", "email", "email", $data["Email"], true, true));
	$form->addInput(array("Position", "text", "position", $data["Position"], true, false));
	$form->addInput(array("Bio", "textarea", "bio", $data["Bio"], true, false));
	$form->addButton(array("Cancel", "close"));
	$form->addButton(array("Edit <?=$entity?>", "submit", "disabled"));
	$form->setJsAfter("refreshListData();");
	HTMLParser::parseForm($form);
	?>
</div>
<script>

</script>