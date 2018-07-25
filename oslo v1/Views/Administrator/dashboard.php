<div id="body-container">
	<div class="content">
		<div class="bg-cover"></div>
		<div class="title">
			<h1>Dashboard</h1>
		</div>
		<div class="wrapper">
			<div class="col-10">
				<div class="card">
					<h4>Welcome</h4>
					<?php
					$labels = array();
					for($i = 7; $i >= 0; $i--) {
						$date = date("M d", strtotime("-".$i." days"));
						$labels[] = $date;
					}
					$values = array(
						array("Title", ""),
						array("Title", "")
					);
					for($v = 0; $v < sizeof($values); $v++) {
						for($i = 7; $i >= 0; $i--) {
							$values[$v][1][] = rand(0,1000);
						}
					} 
					HTMLParser::renderGraph($labels, $values, "Bar");
					?>
				</div>
			</div>
		</div>
		<!--
			<div class="wrapper">
			<div class="col-3">
				<div class="card">
					<h4>Search and Filter</h4>
					<hr>
					<form action="" id="frmSearch">
					<table class="form-container">
						<tr>
							<td>
								<label>Search</label>
								<input type="text" name="search" placeholder="Website Name">
							</td>
						</tr>
						<tr>
							<td><label>Results per page</label>
							<select name="pp">
							<?php
							$options = array(25,100,250,"All");
							foreach($options as $option) {
								echo '<option value="'.$option.'">'.$option.'</option>';
							}
							?>
							</select>
							<input type="hidden" name="p" value="1"></td>
						</tr>
					</table>
					</form>
					<ul class="button-container block">
						<li><a id="btnSearchFilter" class="raised_button">Search and Filter</a></li>
					</ul>
					<script>
					function refreshListData() {
						$checkedData = [];
						$("#numDataSelected").html("");
						showDataAction(false);
						
						$("#lstData").html('<div class="card"><center><br><br><img src="images/skin/oslo/bg/loading.gif" /><br><br></center></div>');
						$.ajax({
							type: "post",
							cache: true,
							url: "process.php?action=listxxx",
							data: $("#frmSearch").serialize(),
							success: function(html) {
								$("#lstData").html(html)
							}
						});
					}
					$(document).ready(function() {
						$("#btnSearchFilter").click(function() {
							refreshListData();
						});
					});
					</script>
				</div>
			</div>
			<div class="col-7" id="lstData">
				
			</div>
			<script>
			$checkedData = [];
			refreshListData();
			</script>
		</div>


			<div class="col-4" id="lstFeed">	
			</div>
			<script>
			$(document).ready(function() {
				$.ajax({
					type: "post",
					cache: true,
					url: "process.php?action=viewrecentfeed",
					data: {id: '<?php echo $_SESSION['loggedID']; ?>'},
					success: function(html) {
						$("#lstFeed").html(html);
					}
				})
			})
			</script>
		-->
	</div>
</div>