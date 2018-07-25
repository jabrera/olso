<?php
$entity = "user";
?>
<div class="card">
	<a onclick="showBottomSheet('add<?=$entity;?>');" class="float_button pos_top_right ic_plus_white icon_medium"></a>
	<?php
	$p = 1;
	if(isset($_POST['p']))
		$p = $_POST['p'];
	if(isset($_POST['pp'])) {
		if($_POST['pp'] == "All")
			$rowPerPage = 0;
		else
			$rowPerPage = $_POST['pp'];
	} else {
		$rowPerPage = 0;
	}
	$startFrom = ($p-1) * $rowPerPage;

	$filter = "";
	if(isset($_POST['search'])) {
		if($_POST['search'] != "") {
			$search = mysql_escape_string($_POST['search']);
			$filter .= " AND CONCAT(FirstName, ' ', LastName) LIKE '%$search%' ";
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
	$additional = "Account.Username = User.Username $filter";
	$tableData = Database::getData("User INNER JOIN Account", "*", $additional);
	?>
	<table class="list" id="tableListData">
		<tr class="title">
			<td width="1px">
				<label id="chkAll"><input type="checkbox"><span></span></label>
			</td>
			<td colspan="2"><?=$results = sizeof($tableData); if($results == 1) echo ' '.$entity; else echo ' '.$this->getPluralEntity($entity);?></td>
		</tr>
		<?php
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
					echo $data["FullName"]
					?>
				</span>
				<span><?=$data["Username"]?></span>
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
					showBottomSheet('edit<?=$entity;?>', '<?=$data["ID"]?>');
				});
				$("#btnDelete_<?=$data["ID"]?>").click(function() {
					showDialogBox('delete<?=$entity;?>', '<?=$data["ID"]?>');
				});
			});
			</script>
			<?php
			}
			HTMLParser::scriptCheckedData("#tableListData");
		} else {
		?>
		<tr>
			<td colspan="3" align="center">
				<small>No result found.</small>
			</td>
		</tr>
		<script>
		$(document).ready(function() {
			$("#tableListData #chkAll").hide();
			$("#tableListData tr.title td:first-child").hide();
		});
		</script>
		<?php
		}
		?>
	</table>
</div>
<?=
HTMLParser::showDataAction($entity);
//HTMLParser::showPagination("SELECT * FROM User INNER JOIN Account WHERE Account.Username = User.Username", $filter, $rowPerPage, $p, "refreshListData();");
?>