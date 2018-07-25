<?php
$entity = "User";
?>
<div class="content">
	<h3>Add <?=$entity?></h3>
	<?php
	$form = new Form();
	$form->setParent("#bottom-sheet");
	$form->setAction("add<?=$entity?>");
	$form->addInput(array("Full Name", "text", "fname", "", true, true));
	$form->addInput(array("Password", "password", "password1", "", true, true, 'data-to="password2"'));
	$form->addInput(array("Retype Password", "password", "password2", "", true, true, 'data-from="password1"'));
	$form->addInput(array("Email", "email", "email", "", true, true));
	$form->addInput(array("Position", "text", "position", "", true, false));
	$form->addInput(array("Bio", "textarea", "bio", "", true, false));
	$form->addButton(array("Cancel", "close"));
	$form->addButton(array("Add <?=$entity?>", "submit", "disabled"));
	$form->setJsAfter("refreshListData();");
	HTMLParser::parseForm($form);
	?>
</div>
<script>

</script>