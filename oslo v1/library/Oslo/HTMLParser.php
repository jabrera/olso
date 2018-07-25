<?php

class HTMLParser {
	
	function parseForm($inputs) {
	?>
	<form>
	<table class="form-container">
	<?php
		foreach($inputs as $input) {
		?>
		<tr>
			<td<?php if($input[1] == "hidden") echo ' class="hide"'; ?>><label><?php echo $input[1]; ?></label>
			<?php
			if($input[4] == 0) {
				echo '<br>';
				if(in_array($input[1], array("text", "password", "textarea")))
					echo $input[3];
				elseif($input[1] == "date")
					echo date("F d, Y", strtotime($input[3]));
				elseif($input[1] == "time")
					echo date("g:i a", strtotime($input[3]));
				elseif($input[1] == "select") {
					echo $input[3][0];
				}
			} elseif($input[4] == 1) {
				if(in_array($input[1], array("text", "password", "date", "time", "hidden"))) {
					echo '<input type="'.$input[1].'" placeholder="'.$input[0].'" value="'.$input[3].'" name="'.$input[2].'">';
				} elseif($input[1] == "textarea") {
					echo '<textarea name="'.$input[2].'" placeholder="'.$input[0].'">'.$input[3].'</textarea>';
				} elseif($input[1] == "select") {
					echo '<select name="'.$input[2].'">';
					for($op = 0; $op < sizeof($input[3][1]); $op++) {
						$selected = "";
						if($input[3][0] == $input[3][1][$op])
							$selected = " selected";
						echo '<option value="'.$input[3][1][$op].'"'.$selected.'>'.$input[3][2][$op].'</option>';
					}
					echo '</select>';
				}
			}
			?>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	</form>
	<?php
	}

	function showPagination($query, $filter, $rowPerPage, $p, $refreshList) {
?>
	<div class="card button-container">
		<?php
		$query = mysql_query("$query $filter");
		$totalRecords = mysql_num_rows($query);
		$totalPages = 1;
		if($rowPerPage != 0)
			$totalPages = ceil($totalRecords / $rowPerPage);
		?>
		<div class="table">
			<div class="row">
				<div class="cell compact">
					<ul class="button-container divider">
						<li><a <?php if($p != 1) echo 'id="btnFirst" '?>onclick class="flat_button"><span class="flat_icon ic_double-left compact"></span></a></li>
						<li><a <?php if($p != 1) echo 'id="btnPrev" '?>onclick class="flat_button"><span class="flat_icon ic_left compact"></span></a></li>
					</ul>
				</div>
				<div class="cell">
					<select id="ddlPage">
						<?php
						for($i = 1; $i <= $totalPages; $i++) {
							$selected = "";
							if($p == $i) {
								$selected = " selected";
							}
							echo '<option value="'.$i.'"'.$selected.'>'.$i.'</option>';
						}
						?>
					</select>
				</div>
				<div class="cell compact">
					<ul class="button-container right divider">
						<li><a <?php if($p != $totalPages) echo 'id="btnNext" '?>onclick class="flat_button"><span class="flat_icon ic_right compact"></span></a></li>
						<li><a <?php if($p != $totalPages) echo 'id="btnLast" '?>onclick class="flat_button"><span class="flat_icon ic_double-right compact"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<script>
		$(document).ready(function() {
			$("#btnFirst").click(function() {
				$("#frmSearch input[name='p']").val(1);
				<?=$refreshList?>
			});
			$("#btnPrev").click(function() {
				$("#frmSearch input[name='p']").val(parseInt($("#frmSearch input[name='p']").val(), 10)-1);
				<?=$refreshList?>
			});
			$("#btnNext").click(function() {
				$("#frmSearch input[name='p']").val(parseInt($("#frmSearch input[name='p']").val(), 10)+1);
				<?=$refreshList?>
			});
			$("#btnLast").click(function() {
				$("#frmSearch input[name='p']").val(<?=$totalPages?>);
				<?=$refreshList?>
			});
			$("#ddlPage").change(function() {
				$val = $(this).val();
				$("#frmSearch input[name='p']").val($val);
				<?=$refreshList?>
			});
		});
		</script>
	</div>
	<?php
	}

	function scriptCheckedData($id) {
	?>
	<script>
	$(document).ready(function() {
		$("<?=$id?> #chkAll input").change(function() {
			if(this.checked) {
				$("<?=$id?> .checkData input").each(function() {
					if(!this.checked) {
						$checkedData.push($(this).attr("value"));
					}
				});
			} else {
				$("<?=$id?> .checkData input").each(function() {
					$index = $checkedData.indexOf($(this).attr("value"));
					$checkedData.splice($index, 1);
				});
			}
			if(this.checked) {
				$("<?=$id?> .checkData input").prop("checked", true);
			} else {
				$("<?=$id?> .checkData input").prop("checked", false);
			}
			updateDataAction();
		});
		$("<?=$id?> .checkData input").change(function() {
			$n = 1;
			$num = 0;
			$("<?=$id?> .checkData input").each(function() {
				if(!this.checked)
					$n = 0;
				else
					$num++;
			});
			if(this.checked) {
				$checkedData.push($(this).attr("value"));
			} else {
				$index = $checkedData.indexOf($(this).attr("value"));
				$checkedData.splice($index, 1);
			}
			if($n == 1)
				$("<?=$id?> #chkAll input").prop("checked", true);
			else
				$("<?=$id?> #chkAll input").prop("checked", false);
			updateDataAction();
		});
	});
	function updateDataAction() {
		if($checkedData.length != 0) {
			$("#data-action-bar .menu-title .title").html($checkedData.length + " selected");
			showDataAction(true);
		} else {
			$("#numDataSelected").html("");
			showDataAction(false);
		}
	}
	$("#data-action-bar #btnSelectAll").click(function() {
		$(".checkData input").each(function() {
			if(!this.checked) {
				$checkedData.push($(this).attr("value"));
			}
		});
		$("#chkAll input").prop("checked", true);
		$(".checkData input").prop("checked", true);
		updateDataAction();
	});
	$("#data-action-bar #btnSelectOff").click(function() {
		deselectData();
	});
	function deselectData() {
		$checkedData = [];
		$("#chkAll input").prop("checked", false);
		$(".checkData input").prop("checked", false);
		updateDataAction();
	}
	</script>
	<?php
	}

	function submitBottomSheet($action, $refresh) {
	?>
	$("#bottom-sheet #btnSubmit").click(function() {
		$("#bottom-sheet ul.button-container").hide();
		$("#loading").show("slow");
		$.ajax({
			type: "post",
			cache: true,
			url: "process.php?action=<?=$action?>",
			data: $("#botom-sheet form").serialize(),
			success: function(html) {
				$("#bottom-sheet ul.button-container").show();
				$("#loading").hide("slow");
				$("#snackbar .wrapper").html(html);
				<?=$refresh?>
			}
		})
	});
	<?php
	}

	function submitDialogBox($action, $refresh) {
	?>
	$("#dialog-box").click(function() {
		$("#dialog-box ul.button-container").hide();
		$("#loading").show("slow");
		$("#dialog-box").css({
			"margin-top": "-"+(($("#dialog-box").height()/2).toFixed())+"px"
		});
		$.ajax({
			type: "post",
			cache: false,
			url: "process.php?action=<?=$action?>",
			data: {id: '<?php echo $db_id; ?>'},
			success: function(html) {
				showElement('none');
				<?=$refresh?>
				$("#snackbar .wrapper").html(html);
			}
		});
	});
	<?php
	}

	function renderGraph($labels, $values, $type) {
		$length = 6;
		$randid = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz0123456789", $length)), 0, $length);
		$colors = array(
			implode(",",Utility::convertHexDec($this->primary)), 
			implode(",",Utility::convertHexDec($this->secondary))
		);
?>
		<div>
			<canvas id="statistics<?=$randid?>"></canvas>
		</div>
		<?php
		echo strpos("bbcde", "a");
		?>
		<script>
		var statistics<?=$randid?> = <?php
			if(in_array($type, array("Line", "Bar", "Radar"))) {
			?>{
			labels : [<?='"'.implode("\",\"", $labels).'"'?>],
			datasets : [
				<?php
				$colorsused = 0;
				for($i = 0; $i < sizeof($values); $i++) {
					if(isset($values[$i][2])) {
						if(strpos($values[$i][2], "#") == 0) 
							$colortouse = implode(",",Utility::convertHexDec($values[$i][2]));
						else
							$colortouse = $values[$i][2];
					} elseif($i > sizeof($colors)-1) {
						$rgb = array(rand(0,255),rand(0,255),rand(0,255));
						$colortouse = implode(",", $rgb);
					} else {
						$colortouse = $colors[$colorsused];
						$colorsused++;
					}
				?>
				{
					label: "<?=$values[$i][0]?>",
					fillColor : "rgba(<?=$colortouse?>,.2)",
					strokeColor : "rgba(<?=$colortouse?>,.8)",
					pointColor : "rgba(<?=$colortouse?>,.8)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(<?=$colortouse?>,.8)",
					data : [<?=implode(",", $values[$i][1])?>]
				}
				<?php
					if($i != sizeof($values)-1) echo ',';
				}
				?>
			]
		}
			<?php 
			} elseif(in_array($type, array("PolarArea","Pie","Doughnut"))) {
			?>[<?php
				$colorsused = 0;
				for($i = 0; $i < sizeof($values); $i++) {
					if(isset($values[$i][2])) {
						if(strpos($values[$i][2], "#") == 0) 
							$colortouse = implode(",",Utility::convertHexDec($values[$i][2]));
						else
							$colortouse = $values[$i][2];
					} elseif($i > sizeof($colors)-1) {
						$rgb = array(rand(0,255),rand(0,255),rand(0,255));
						$colortouse = implode(",", $rgb);
					} else {
						$colortouse = $colors[$colorsused];
						$colorsused++;
					}
				?>
				{
					value: <?=$values[$i][1]?>,
					color: "rgba(<?=$colortouse?>,.8)",
					highlight: "rgba(<?=$colortouse?>,.4)",
					label: "<?=$values[$i][0]?>"
				}
				<?php
					if($i != sizeof($values)-1) echo ',';
				}
				?>
			]
			<?php
			}
			?>
		$(document).ready(function() {
			var ctx = document.getElementById("statistics<?=$randid?>").getContext("2d");
			new Chart(ctx).<?=$type?>(statistics<?=$randid?>, {responsive: true});
		})
		</script>
<?php
	}
}