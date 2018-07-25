<?php
if(isset($_POST['report'], $_POST['get'])) {
	$date = date("F d, Y");
	$time = date("h:i a");
	$report = $_POST['report'];
	if(file_exists('Views/Shared/Content/report/'.$report.'.php')) {
		require_once('Views/Shared/Content/report/'.$report.'.php');
	?>
	<textarea class="resize"></textarea>
	</div>
	<div class="footer"></div>
	<script>
	$(document).ready(function() {
		document.title = "<?=$reportTitle?>";
		<?php
		if($landscape) {
		?>
		$(".paper").addClass("landscape");
		$(".bg").addClass("landscape");
		<?php
		}
		?>
		$("#loading").hide("slow");
		$("#blackTrans").hide();
		$("textarea.resize").keyup(function(event) {
			$(this).css('height','auto');
			$(this).height(this.scrollHeight);
		});
	})
	</script>
	<?php
	}
	else
		HTMLParser::showDialogBox('invalidreport');
}
?>