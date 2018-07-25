<?php
$entity = "User";
?>
<span class="title">Add <?=$entity?></span><br>
<?php
$form = new Form();
$form->setParent("#dialog-box");
$form->setAction("add<?=$entity?>");
$form->addInput(array("Name", "text", "name", "", true, true));
$form->addButton(array("Cancel", "close"));
$form->addButton(array("Add <?=$entity?>", "submit", "disabled"));
$form->setJsAfter("refreshListData();");
HTMLParser::parseForm($form);
?>