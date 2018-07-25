<li><a id="btnChangePasswordSelected"><span class="flat_icon ic_security_black trans_icon"></span>Change Password</a></li>
<li><a id="btnDeleteSelected"><span class="flat_icon ic_delete_black trans_icon"></span>Delete</a></li>
<script>
$("#data-action-bar #btnDeleteSelected").click(function() {
	showDialogBox("deleteuser_data", $checkedData);
});
$("#data-action-bar #btnChangePasswordSelected").click(function() {
	showBottomSheet("changepassword_data", $checkedData);
});
</script>