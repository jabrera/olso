<div class="bg"></div>
<?php
if(isset($report)) {
?>
<div class="paper">
	
</div>
<script>
$(document).ready(function() {
	$except = 0;
	$("#float-left-menu").hide();
	updateLayout("loaded");
	$("#blackTrans").show();
	$("#loading").show("slow");
	$.ajax({
		type: "post",
		cache: true,
		url: "process.php?show=viewreport",
		data: {report: '<?php echo $report; ?>', get: <?php echo json_encode($_GET); ?>},
		success: function(html) {
			$(".paper").html(html);
		}
	})
});
</script>
<?php
}
?>
<script>
$(document).ready(function() {
	$except = 0;
	$("#float-left-menu").hide();
	updateLayout("loaded");
});
</script>