<?php
namespace PHPMaker2019\p_pembayaran3_1;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start(); 

// Autoload
include_once "autoload.php";
?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$t001_tahun_ajaran_view = new t001_tahun_ajaran_view();

// Run the page
$t001_tahun_ajaran_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t001_tahun_ajaran_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t001_tahun_ajaran->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft001_tahun_ajaranview = currentForm = new ew.Form("ft001_tahun_ajaranview", "view");

// Form_CustomValidate event
ft001_tahun_ajaranview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft001_tahun_ajaranview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft001_tahun_ajaranview.lists["x_Aktif[]"] = <?php echo $t001_tahun_ajaran_view->Aktif->Lookup->toClientList() ?>;
ft001_tahun_ajaranview.lists["x_Aktif[]"].options = <?php echo JsonEncode($t001_tahun_ajaran_view->Aktif->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t001_tahun_ajaran->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t001_tahun_ajaran_view->ExportOptions->render("body") ?>
<?php $t001_tahun_ajaran_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t001_tahun_ajaran_view->showPageHeader(); ?>
<?php
$t001_tahun_ajaran_view->showMessage();
?>
<form name="ft001_tahun_ajaranview" id="ft001_tahun_ajaranview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t001_tahun_ajaran_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t001_tahun_ajaran_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t001_tahun_ajaran">
<input type="hidden" name="modal" value="<?php echo (int)$t001_tahun_ajaran_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t001_tahun_ajaran->Mulai->Visible) { // Mulai ?>
	<tr id="r_Mulai">
		<td class="<?php echo $t001_tahun_ajaran_view->TableLeftColumnClass ?>"><span id="elh_t001_tahun_ajaran_Mulai"><?php echo $t001_tahun_ajaran->Mulai->caption() ?></span></td>
		<td data-name="Mulai"<?php echo $t001_tahun_ajaran->Mulai->cellAttributes() ?>>
<span id="el_t001_tahun_ajaran_Mulai">
<span<?php echo $t001_tahun_ajaran->Mulai->viewAttributes() ?>>
<?php echo $t001_tahun_ajaran->Mulai->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t001_tahun_ajaran->Selesai->Visible) { // Selesai ?>
	<tr id="r_Selesai">
		<td class="<?php echo $t001_tahun_ajaran_view->TableLeftColumnClass ?>"><span id="elh_t001_tahun_ajaran_Selesai"><?php echo $t001_tahun_ajaran->Selesai->caption() ?></span></td>
		<td data-name="Selesai"<?php echo $t001_tahun_ajaran->Selesai->cellAttributes() ?>>
<span id="el_t001_tahun_ajaran_Selesai">
<span<?php echo $t001_tahun_ajaran->Selesai->viewAttributes() ?>>
<?php echo $t001_tahun_ajaran->Selesai->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t001_tahun_ajaran->Aktif->Visible) { // Aktif ?>
	<tr id="r_Aktif">
		<td class="<?php echo $t001_tahun_ajaran_view->TableLeftColumnClass ?>"><span id="elh_t001_tahun_ajaran_Aktif"><?php echo $t001_tahun_ajaran->Aktif->caption() ?></span></td>
		<td data-name="Aktif"<?php echo $t001_tahun_ajaran->Aktif->cellAttributes() ?>>
<span id="el_t001_tahun_ajaran_Aktif">
<span<?php echo $t001_tahun_ajaran->Aktif->viewAttributes() ?>>
<?php if (ConvertToBool($t001_tahun_ajaran->Aktif->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t001_tahun_ajaran->Aktif->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t001_tahun_ajaran->Aktif->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</form>
<?php
$t001_tahun_ajaran_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t001_tahun_ajaran->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t001_tahun_ajaran_view->terminate();
?>