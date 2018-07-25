<?php
$entity = "User";
?>
<span class="title">Message</span>
<p>
	Are you sure you want to delete the selected users?
</p>
<?php
$form = new Form();
$form->setParent("#dialog-box");
$form->setAction("delete<?=$entity?>_data");
$form->addInput(array("ID", "hidden", "id", $data["id"], true, true));
$form->addButton(array("Cancel", "close"));
$form->addButton(array("Delete", "submit", "disabled"));
$form->setJsAfter("refreshListData();");
HTMLParser::parseForm($form);
?>