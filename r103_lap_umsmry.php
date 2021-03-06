<?php
namespace PHPMaker2019\p_pembayaran3_1;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start();

// Autoload
include_once "rautoload.php";
?>
<?php

// Create page object
if (!isset($r103_lap_um_summary))
	$r103_lap_um_summary = new r103_lap_um_summary();
if (isset($Page))
	$OldPage = $Page;
$Page = &$r103_lap_um_summary;

// Run the page
$Page->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());
if (!$DashboardReport)
	WriteHeader(FALSE);

// Global Page Rendering event (in rusrfn*.php)
Page_Rendering();

// Page Rendering event
$Page->Page_Render();
?>
<?php if (!$DashboardReport) { ?>
<?php include_once "header.php"; ?>
<?php include_once "rheader.php" ?>
<?php } ?>
<?php if ($Page->Export == "" || $Page->Export == "print") { ?>
<script>
currentPageID = ew.PAGE_ID = "summary"; // Page ID
</script>
<?php } ?>
<?php if ($Page->Export == "" && !$Page->DrillDown && !$DashboardReport) { ?>
<script>

// Form object
var fr103_lap_umsummary = currentForm = new ew.Form("fr103_lap_umsummary");

// Validate method
fr103_lap_umsummary.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj), elm;

	// Call Form Custom Validate event
	if (!this.Form_CustomValidate(fobj))
		return false;
	return true;
}

// Form_CustomValidate method
fr103_lap_umsummary.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}
<?php if (CLIENT_VALIDATE) { ?>
fr103_lap_umsummary.validateRequired = true; // Uses JavaScript validation
<?php } else { ?>
fr103_lap_umsummary.validateRequired = false; // No JavaScript validation
<?php } ?>

// Use Ajax
fr103_lap_umsummary.lists["x_tahunajaran"] = <?php echo $r103_lap_um_summary->tahunajaran->Lookup->toClientList() ?>;
fr103_lap_umsummary.lists["x_tahunajaran"].options = <?php echo JsonEncode($r103_lap_um_summary->tahunajaran->lookupOptions()) ?>;
fr103_lap_umsummary.lists["x_sekolahnama"] = <?php echo $r103_lap_um_summary->sekolahnama->Lookup->toClientList() ?>;
fr103_lap_umsummary.lists["x_sekolahnama"].options = <?php echo JsonEncode($r103_lap_um_summary->sekolahnama->lookupOptions()) ?>;
fr103_lap_umsummary.lists["x_kelasnama"] = <?php echo $r103_lap_um_summary->kelasnama->Lookup->toClientList() ?>;
fr103_lap_umsummary.lists["x_kelasnama"].options = <?php echo JsonEncode($r103_lap_um_summary->kelasnama->lookupOptions()) ?>;
fr103_lap_umsummary.lists["x_iurannama[]"] = <?php echo $r103_lap_um_summary->iurannama->Lookup->toClientList() ?>;
fr103_lap_umsummary.lists["x_iurannama[]"].options = <?php echo JsonEncode($r103_lap_um_summary->iurannama->lookupOptions()) ?>;
fr103_lap_umsummary.lists["x_periodebayar[]"] = <?php echo $r103_lap_um_summary->periodebayar->Lookup->toClientList() ?>;
fr103_lap_umsummary.lists["x_periodebayar[]"].options = <?php echo JsonEncode($r103_lap_um_summary->periodebayar->lookupOptions()) ?>;
</script>
<?php } ?>
<?php if ($Page->Export == "" && !$Page->DrillDown && !$DashboardReport) { ?>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<a id="top"></a>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
<!-- Content Container -->
<div id="ew-container" class="container-fluid ew-container">
<?php } ?>
<?php if (ReportParam("showfilter") === TRUE) { ?>
<?php $Page->showFilterList(TRUE) ?>
<?php } ?>
<div class="btn-toolbar ew-toolbar">
<?php
if (!$Page->DrillDownInPanel) {
	$Page->ExportOptions->render("body");
	$Page->SearchOptions->render("body");
	$Page->FilterOptions->render("body");
	$Page->GenerateOptions->render("body");
}
?>
</div>
<?php $Page->showPageHeader(); ?>
<?php $Page->showMessage(); ?>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
<div class="row">
<?php } ?>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
<!-- Center Container - Report -->
<div id="ew-center" class="<?php echo $r103_lap_um_summary->CenterContentClass ?>">
<?php } ?>
<!-- Summary Report begins -->
<?php if ($Page->Export <> "pdf") { ?>
<div id="report_summary">
<?php } ?>
<?php if ($Page->Export == "" && !$Page->DrillDown && !$DashboardReport) { ?>
<!-- Search form (begin) -->
<?php

	// Render search row
	$Page->resetAttributes();
	$Page->RowType = ROWTYPE_SEARCH;
	$Page->renderRow();
?>
<form name="fr103_lap_umsummary" id="fr103_lap_umsummary" class="form-inline ew-form ew-ext-filter-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($Page->Filter <> "") ? " show" : " show"; ?>
<div id="fr103_lap_umsummary-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<div id="r_1" class="ew-row d-sm-flex">
<div id="c_tahunajaran" class="ew-cell form-group">
	<label for="x_tahunajaran" class="ew-search-caption ew-label"><?php echo $Page->tahunajaran->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r103_lap_um" data-field="x_tahunajaran" data-value-separator="<?php echo $Page->tahunajaran->displayValueSeparatorAttribute() ?>" id="x_tahunajaran" name="x_tahunajaran"<?php echo $Page->tahunajaran->editAttributes() ?>>
		<?php echo $Page->tahunajaran->selectOptionListHtml("x_tahunajaran") ?>
	</select>
</div>
<?php echo $Page->tahunajaran->Lookup->getParamTag("p_x_tahunajaran") ?>
</span>
</div>
</div>
<div id="r_2" class="ew-row d-sm-flex">
<div id="c_sekolahnama" class="ew-cell form-group">
	<label for="x_sekolahnama" class="ew-search-caption ew-label"><?php echo $Page->sekolahnama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r103_lap_um" data-field="x_sekolahnama" data-value-separator="<?php echo $Page->sekolahnama->displayValueSeparatorAttribute() ?>" id="x_sekolahnama" name="x_sekolahnama"<?php echo $Page->sekolahnama->editAttributes() ?>>
		<?php echo $Page->sekolahnama->selectOptionListHtml("x_sekolahnama") ?>
	</select>
</div>
<?php echo $Page->sekolahnama->Lookup->getParamTag("p_x_sekolahnama") ?>
</span>
</div>
</div>
<div id="r_3" class="ew-row d-sm-flex">
<div id="c_kelasnama" class="ew-cell form-group">
	<label for="x_kelasnama" class="ew-search-caption ew-label"><?php echo $Page->kelasnama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r103_lap_um" data-field="x_kelasnama" data-value-separator="<?php echo $Page->kelasnama->displayValueSeparatorAttribute() ?>" id="x_kelasnama" name="x_kelasnama"<?php echo $Page->kelasnama->editAttributes() ?>>
		<?php echo $Page->kelasnama->selectOptionListHtml("x_kelasnama") ?>
	</select>
</div>
<?php echo $Page->kelasnama->Lookup->getParamTag("p_x_kelasnama") ?>
</span>
</div>
</div>
<div id="r_4" class="ew-row d-sm-flex">
<div id="c_nomorinduk" class="ew-cell form-group">
	<label for="x_nomorinduk" class="ew-search-caption ew-label"><?php echo $Page->nomorinduk->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("LIKE"); ?><input type="hidden" name="z_nomorinduk" id="z_nomorinduk" value="LIKE"></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->nomorinduk->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="r103_lap_um" data-field="x_nomorinduk" id="x_nomorinduk" name="x_nomorinduk" size="10" maxlength="25" placeholder="<?php echo HtmlEncode($Page->nomorinduk->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->nomorinduk->AdvancedSearch->SearchValue) ?>"<?php echo $Page->nomorinduk->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_5" class="ew-row d-sm-flex">
<div id="c_siswanama" class="ew-cell form-group">
	<label for="x_siswanama" class="ew-search-caption ew-label"><?php echo $Page->siswanama->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("LIKE"); ?><input type="hidden" name="z_siswanama" id="z_siswanama" value="LIKE"></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->siswanama->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="r103_lap_um" data-field="x_siswanama" id="x_siswanama" name="x_siswanama" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($Page->siswanama->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->siswanama->AdvancedSearch->SearchValue) ?>"<?php echo $Page->siswanama->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_6" class="ew-row d-sm-flex">
<div id="c_iurannama" class="ew-cell form-group">
	<label for="x_iurannama" class="ew-search-caption ew-label"><?php echo $Page->iurannama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r103_lap_um" data-field="x_iurannama" data-value-separator="<?php echo $Page->iurannama->displayValueSeparatorAttribute() ?>" id="x_iurannama[]" name="x_iurannama[]" multiple="multiple"<?php echo $Page->iurannama->editAttributes() ?>>
		<?php echo $Page->iurannama->selectOptionListHtml("x_iurannama[]") ?>
	</select>
</div>
<?php echo $Page->iurannama->Lookup->getParamTag("p_x_iurannama") ?>
</span>
</div>
</div>
<div id="r_7" class="ew-row d-sm-flex">
<div id="c_periodebayar" class="ew-cell form-group">
	<label for="x_periodebayar" class="ew-search-caption ew-label"><?php echo $Page->periodebayar->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r103_lap_um" data-field="x_periodebayar" data-value-separator="<?php echo $Page->periodebayar->displayValueSeparatorAttribute() ?>" id="x_periodebayar[]" name="x_periodebayar[]" multiple="multiple"<?php echo $Page->periodebayar->editAttributes() ?>>
		<?php echo $Page->periodebayar->selectOptionListHtml("x_periodebayar[]") ?>
	</select>
</div>
<?php echo $Page->periodebayar->Lookup->getParamTag("p_x_periodebayar") ?>
</span>
</div>
</div>
<div class="ew-row d-sm-flex">
<button type="submit" name="btn-submit" id="btn-submit" class="btn btn-primary"><?php echo $ReportLanguage->phrase("Search") ?></button>
<button type="reset" name="btn-reset" id="btn-reset" class="btn hide"><?php echo $ReportLanguage->phrase("Reset") ?></button>
</div>
</div>
</form>
<script>
fr103_lap_umsummary.filterList = <?php echo $Page->getFilterList() ?>;
</script>
<!-- Search form (end) -->
<?php } ?>
<?php if ($Page->ShowCurrentFilter) { ?>
<?php $Page->showFilterList() ?>
<?php } ?>
<?php

// Set the last group to display if not export all
if ($Page->ExportAll && $Page->Export <> "") {
	$Page->StopGroup = $Page->TotalGroups;
} else {
	$Page->StopGroup = $Page->StartGroup + $Page->DisplayGroups - 1;
}

// Stop group <= total number of groups
if (intval($Page->StopGroup) > intval($Page->TotalGroups))
	$Page->StopGroup = $Page->TotalGroups;
$Page->RecordCount = 0;
$Page->RecordIndex = 0;

// Get first row
if ($Page->TotalGroups > 0) {
	$Page->loadRowValues(TRUE);
	$Page->GroupCount = 1;
}
$Page->GroupIndexes = InitArray(2, -1);
$Page->GroupIndexes[0] = -1;
$Page->GroupIndexes[1] = $Page->StopGroup - $Page->StartGroup + 1;
while ($Page->Recordset && !$Page->Recordset->EOF && $Page->GroupCount <= $Page->DisplayGroups || $Page->ShowHeader) {

	// Show dummy header for custom template
	// Show header

	if ($Page->ShowHeader) {
?>
<?php if ($Page->Export <> "pdf") { ?>
<?php if ($Page->Export == "word" || $Page->Export == "excel") { ?>
<div class="ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } else { ?>
<div class="card ew-card ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } ?>
<?php } ?>
<!-- Report grid (begin) -->
<?php if ($Page->Export <> "pdf") { ?>
<div id="gmp_r103_lap_um" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<thead>
	<!-- Table header -->
	<tr class="ew-table-header">
<?php if ($Page->tahunajaran->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="tahunajaran"><div class="r103_lap_um_tahunajaran"><span class="ew-table-header-caption"><?php echo $Page->tahunajaran->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="tahunajaran">
<?php if ($Page->sortUrl($Page->tahunajaran) == "") { ?>
		<div class="ew-table-header-btn r103_lap_um_tahunajaran">
			<span class="ew-table-header-caption"><?php echo $Page->tahunajaran->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r103_lap_um_tahunajaran" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->tahunajaran) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->tahunajaran->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->tahunajaran->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->tahunajaran->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->sekolahnama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="sekolahnama"><div class="r103_lap_um_sekolahnama"><span class="ew-table-header-caption"><?php echo $Page->sekolahnama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="sekolahnama">
<?php if ($Page->sortUrl($Page->sekolahnama) == "") { ?>
		<div class="ew-table-header-btn r103_lap_um_sekolahnama">
			<span class="ew-table-header-caption"><?php echo $Page->sekolahnama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r103_lap_um_sekolahnama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->sekolahnama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->sekolahnama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->sekolahnama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->sekolahnama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->kelasnama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="kelasnama"><div class="r103_lap_um_kelasnama"><span class="ew-table-header-caption"><?php echo $Page->kelasnama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="kelasnama">
<?php if ($Page->sortUrl($Page->kelasnama) == "") { ?>
		<div class="ew-table-header-btn r103_lap_um_kelasnama">
			<span class="ew-table-header-caption"><?php echo $Page->kelasnama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r103_lap_um_kelasnama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->kelasnama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->kelasnama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->kelasnama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->kelasnama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->nomorinduk->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="nomorinduk"><div class="r103_lap_um_nomorinduk"><span class="ew-table-header-caption"><?php echo $Page->nomorinduk->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="nomorinduk">
<?php if ($Page->sortUrl($Page->nomorinduk) == "") { ?>
		<div class="ew-table-header-btn r103_lap_um_nomorinduk">
			<span class="ew-table-header-caption"><?php echo $Page->nomorinduk->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r103_lap_um_nomorinduk" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->nomorinduk) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->nomorinduk->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->nomorinduk->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->nomorinduk->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->siswanama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="siswanama"><div class="r103_lap_um_siswanama"><span class="ew-table-header-caption"><?php echo $Page->siswanama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="siswanama">
<?php if ($Page->sortUrl($Page->siswanama) == "") { ?>
		<div class="ew-table-header-btn r103_lap_um_siswanama">
			<span class="ew-table-header-caption"><?php echo $Page->siswanama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r103_lap_um_siswanama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->siswanama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->siswanama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->siswanama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->siswanama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->iurannama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="iurannama"><div class="r103_lap_um_iurannama"><span class="ew-table-header-caption"><?php echo $Page->iurannama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="iurannama">
<?php if ($Page->sortUrl($Page->iurannama) == "") { ?>
		<div class="ew-table-header-btn r103_lap_um_iurannama">
			<span class="ew-table-header-caption"><?php echo $Page->iurannama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r103_lap_um_iurannama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->iurannama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->iurannama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->iurannama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->iurannama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->periodebayar->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="periodebayar"><div class="r103_lap_um_periodebayar"><span class="ew-table-header-caption"><?php echo $Page->periodebayar->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="periodebayar">
<?php if ($Page->sortUrl($Page->periodebayar) == "") { ?>
		<div class="ew-table-header-btn r103_lap_um_periodebayar">
			<span class="ew-table-header-caption"><?php echo $Page->periodebayar->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r103_lap_um_periodebayar" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->periodebayar) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->periodebayar->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->periodebayar->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->periodebayar->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->jumlah_total->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="jumlah_total"><div class="r103_lap_um_jumlah_total" style="text-align: right;"><span class="ew-table-header-caption"><?php echo $Page->jumlah_total->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="jumlah_total">
<?php if ($Page->sortUrl($Page->jumlah_total) == "") { ?>
		<div class="ew-table-header-btn r103_lap_um_jumlah_total" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->jumlah_total->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r103_lap_um_jumlah_total" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->jumlah_total) ?>',2);" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->jumlah_total->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->jumlah_total->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->jumlah_total->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="iuran_id"><div class="r103_lap_um_iuran_id"><span class="ew-table-header-caption"><?php echo $Page->iuran_id->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="iuran_id">
<?php if ($Page->sortUrl($Page->iuran_id) == "") { ?>
		<div class="ew-table-header-btn r103_lap_um_iuran_id">
			<span class="ew-table-header-caption"><?php echo $Page->iuran_id->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r103_lap_um_iuran_id" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->iuran_id) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->iuran_id->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->iuran_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->iuran_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
	</tr>
</thead>
<tbody>
<?php
		if ($Page->TotalGroups == 0) break; // Show header only
		$Page->ShowHeader = FALSE;
	}
	$Page->RecordCount++;
	$Page->RecordIndex++;
?>
<?php

		// Render detail row
		$Page->resetAttributes();
		$Page->RowType = ROWTYPE_DETAIL;
		$Page->renderRow();
?>
	<tr<?php echo $Page->rowAttributes(); ?>>
<?php if ($Page->tahunajaran->Visible) { ?>
		<td data-field="tahunajaran"<?php echo $Page->tahunajaran->cellAttributes() ?>>
<span<?php echo $Page->tahunajaran->viewAttributes() ?>><?php echo $Page->tahunajaran->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->sekolahnama->Visible) { ?>
		<td data-field="sekolahnama"<?php echo $Page->sekolahnama->cellAttributes() ?>>
<span<?php echo $Page->sekolahnama->viewAttributes() ?>><?php echo $Page->sekolahnama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->kelasnama->Visible) { ?>
		<td data-field="kelasnama"<?php echo $Page->kelasnama->cellAttributes() ?>>
<span<?php echo $Page->kelasnama->viewAttributes() ?>><?php echo $Page->kelasnama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->nomorinduk->Visible) { ?>
		<td data-field="nomorinduk"<?php echo $Page->nomorinduk->cellAttributes() ?>>
<span<?php echo $Page->nomorinduk->viewAttributes() ?>><?php echo $Page->nomorinduk->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->siswanama->Visible) { ?>
		<td data-field="siswanama"<?php echo $Page->siswanama->cellAttributes() ?>>
<span<?php echo $Page->siswanama->viewAttributes() ?>><?php echo $Page->siswanama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->iurannama->Visible) { ?>
		<td data-field="iurannama"<?php echo $Page->iurannama->cellAttributes() ?>>
<span<?php echo $Page->iurannama->viewAttributes() ?>><?php echo $Page->iurannama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->periodebayar->Visible) { ?>
		<td data-field="periodebayar"<?php echo $Page->periodebayar->cellAttributes() ?>>
<span<?php echo $Page->periodebayar->viewAttributes() ?>><?php echo $Page->periodebayar->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->jumlah_total->Visible) { ?>
		<td data-field="jumlah_total"<?php echo $Page->jumlah_total->cellAttributes() ?>>
<span<?php echo $Page->jumlah_total->viewAttributes() ?>><?php echo $Page->jumlah_total->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
		<td data-field="iuran_id"<?php echo $Page->iuran_id->cellAttributes() ?>>
<span<?php echo $Page->iuran_id->viewAttributes() ?>><?php echo $Page->iuran_id->getViewValue() ?></span></td>
<?php } ?>
	</tr>
<?php

		// Accumulate page summary
		$Page->accumulateSummary();

		// Get next record
		$Page->loadRowValues();
	$Page->GroupCount++;
} // End while
?>
<?php if ($Page->TotalGroups > 0) { ?>
</tbody>
<tfoot>
<?php
	$Page->jumlah_total->Count = $Page->GrandCounts[8];
	$Page->jumlah_total->SumValue = $Page->GrandSummaries[8]; // Load SUM
	$Page->resetAttributes();
	$Page->RowType = ROWTYPE_TOTAL;
	$Page->RowTotalType = ROWTOTAL_GRAND;
	$Page->RowTotalSubType = ROWTOTAL_FOOTER;
	$Page->RowAttrs["class"] = "ew-rpt-grand-summary";
	$Page->renderRow();
?>
<?php if ($Page->ShowCompactSummaryFooter) { ?>
	<tr<?php echo $Page->rowAttributes() ?>><td colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount) ?>"><?php echo $ReportLanguage->Phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $ReportLanguage->phrase("RptCnt") ?></span><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($Page->TotalCount,0,-2,-2,-2) ?></span>)</span></td></tr>
	<tr<?php echo $Page->rowAttributes() ?>>
<?php if ($Page->GroupColumnCount > 0) { ?>
		<td colspan="<?php echo $Page->GroupColumnCount ?>" class="ew-rpt-grp-aggregate">&nbsp;</td>
<?php } ?>
<?php if ($Page->tahunajaran->Visible) { ?>
		<td data-field="tahunajaran"<?php echo $Page->tahunajaran->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->sekolahnama->Visible) { ?>
		<td data-field="sekolahnama"<?php echo $Page->sekolahnama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->kelasnama->Visible) { ?>
		<td data-field="kelasnama"<?php echo $Page->kelasnama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->nomorinduk->Visible) { ?>
		<td data-field="nomorinduk"<?php echo $Page->nomorinduk->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->siswanama->Visible) { ?>
		<td data-field="siswanama"<?php echo $Page->siswanama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->iurannama->Visible) { ?>
		<td data-field="iurannama"<?php echo $Page->iurannama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->periodebayar->Visible) { ?>
		<td data-field="periodebayar"<?php echo $Page->periodebayar->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->jumlah_total->Visible) { ?>
		<td data-field="jumlah_total"<?php echo $Page->jumlah_total->cellAttributes() ?>><?php echo $ReportLanguage->phrase("RptSum") ?><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span<?php echo $Page->jumlah_total->viewAttributes() ?>><?php echo $Page->jumlah_total->SumViewValue ?></span></td>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
		<td data-field="iuran_id"<?php echo $Page->iuran_id->cellAttributes() ?>></td>
<?php } ?>
	</tr>
<?php } else { ?>
	<tr<?php echo $Page->rowAttributes() ?>><td colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount) ?>"><?php echo $ReportLanguage->Phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<?php echo FormatNumber($Page->TotalCount,0,-2,-2,-2); ?><?php echo $ReportLanguage->Phrase("RptDtlRec") ?>)</span></td></tr>
	<tr<?php echo $Page->rowAttributes() ?>>
<?php if ($Page->tahunajaran->Visible) { ?>
		<td data-field="tahunajaran"<?php echo $Page->tahunajaran->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->sekolahnama->Visible) { ?>
		<td data-field="sekolahnama"<?php echo $Page->sekolahnama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->kelasnama->Visible) { ?>
		<td data-field="kelasnama"<?php echo $Page->kelasnama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->nomorinduk->Visible) { ?>
		<td data-field="nomorinduk"<?php echo $Page->nomorinduk->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->siswanama->Visible) { ?>
		<td data-field="siswanama"<?php echo $Page->siswanama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->iurannama->Visible) { ?>
		<td data-field="iurannama"<?php echo $Page->iurannama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->periodebayar->Visible) { ?>
		<td data-field="periodebayar"<?php echo $Page->periodebayar->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->jumlah_total->Visible) { ?>
		<td data-field="jumlah_total"<?php echo $Page->jumlah_total->cellAttributes() ?>><span class="ew-aggregate"><?php echo $ReportLanguage->phrase("RptSum") ?></span><?php echo $ReportLanguage->phrase("AggregateColon") ?>
<span<?php echo $Page->jumlah_total->viewAttributes() ?>><?php echo $Page->jumlah_total->SumViewValue ?></span></td>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
		<td data-field="iuran_id"<?php echo $Page->iuran_id->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
	</tr>
<?php } ?>
	</tfoot>
<?php } elseif (!$Page->ShowHeader && FALSE) { // No header displayed ?>
<?php if ($Page->Export <> "pdf") { ?>
<?php if ($Page->Export == "word" || $Page->Export == "excel") { ?>
<div class="ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } else { ?>
<div class="card ew-card ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } ?>
<?php } ?>
<!-- Report grid (begin) -->
<?php if ($Page->Export <> "pdf") { ?>
<div id="gmp_r103_lap_um" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<?php } ?>
<?php if ($Page->TotalGroups > 0 || FALSE) { // Show footer ?>
</table>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<?php if ($Page->Export == "" && !($Page->DrillDown && $Page->TotalGroups > 0)) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php include "r103_lap_um_pager.php" ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<?php } ?>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<!-- Summary Report Ends -->
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
</div>
<!-- /#ew-center -->
<?php } ?>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
</div>
<!-- /.row -->
<?php } ?>
<?php if ($Page->Export == "" && !$DashboardReport) { ?>
</div>
<!-- /.ew-container -->
<?php } ?>
<?php
$Page->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php

// Close recordsets
if ($Page->GroupRecordset)
	$Page->GroupRecordset->Close();
if ($Page->Recordset)
	$Page->Recordset->Close();
?>
<?php if ($Page->Export == "" && !$Page->DrillDown && !$DashboardReport) { ?>
<script>

// Write your table-specific startup script here
// console.log("page loaded");

</script>
<?php } ?>
<?php if (!$DashboardReport) { ?>
<?php include_once "rfooter.php" ?>
<?php include_once "footer.php"; ?>
<?php } ?>
<?php
$Page->terminate();
if (isset($OldPage))
	$Page = $OldPage;
?>