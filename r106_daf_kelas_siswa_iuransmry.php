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
if (!isset($r106_daf_kelas_siswa_iuran_summary))
	$r106_daf_kelas_siswa_iuran_summary = new r106_daf_kelas_siswa_iuran_summary();
if (isset($Page))
	$OldPage = $Page;
$Page = &$r106_daf_kelas_siswa_iuran_summary;

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
var fr106_daf_kelas_siswa_iuransummary = currentForm = new ew.Form("fr106_daf_kelas_siswa_iuransummary");

// Validate method
fr106_daf_kelas_siswa_iuransummary.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj), elm;

	// Call Form Custom Validate event
	if (!this.Form_CustomValidate(fobj))
		return false;
	return true;
}

// Form_CustomValidate method
fr106_daf_kelas_siswa_iuransummary.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}
<?php if (CLIENT_VALIDATE) { ?>
fr106_daf_kelas_siswa_iuransummary.validateRequired = true; // Uses JavaScript validation
<?php } else { ?>
fr106_daf_kelas_siswa_iuransummary.validateRequired = false; // No JavaScript validation
<?php } ?>

// Use Ajax
fr106_daf_kelas_siswa_iuransummary.lists["x_tahun_ajaran"] = <?php echo $r106_daf_kelas_siswa_iuran_summary->tahun_ajaran->Lookup->toClientList() ?>;
fr106_daf_kelas_siswa_iuransummary.lists["x_tahun_ajaran"].options = <?php echo JsonEncode($r106_daf_kelas_siswa_iuran_summary->tahun_ajaran->lookupOptions()) ?>;
fr106_daf_kelas_siswa_iuransummary.lists["x_sekolah_nama"] = <?php echo $r106_daf_kelas_siswa_iuran_summary->sekolah_nama->Lookup->toClientList() ?>;
fr106_daf_kelas_siswa_iuransummary.lists["x_sekolah_nama"].options = <?php echo JsonEncode($r106_daf_kelas_siswa_iuran_summary->sekolah_nama->lookupOptions()) ?>;
fr106_daf_kelas_siswa_iuransummary.lists["x_kelas_nama"] = <?php echo $r106_daf_kelas_siswa_iuran_summary->kelas_nama->Lookup->toClientList() ?>;
fr106_daf_kelas_siswa_iuransummary.lists["x_kelas_nama"].options = <?php echo JsonEncode($r106_daf_kelas_siswa_iuran_summary->kelas_nama->lookupOptions()) ?>;
fr106_daf_kelas_siswa_iuransummary.lists["x_iuran_nama"] = <?php echo $r106_daf_kelas_siswa_iuran_summary->iuran_nama->Lookup->toClientList() ?>;
fr106_daf_kelas_siswa_iuransummary.lists["x_iuran_nama"].options = <?php echo JsonEncode($r106_daf_kelas_siswa_iuran_summary->iuran_nama->lookupOptions()) ?>;
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
<div id="ew-center" class="<?php echo $r106_daf_kelas_siswa_iuran_summary->CenterContentClass ?>">
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
<form name="fr106_daf_kelas_siswa_iuransummary" id="fr106_daf_kelas_siswa_iuransummary" class="form-inline ew-form ew-ext-filter-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($Page->Filter <> "") ? " show" : " show"; ?>
<div id="fr106_daf_kelas_siswa_iuransummary-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<div id="r_1" class="ew-row d-sm-flex">
<div id="c_tahun_ajaran" class="ew-cell form-group">
	<label for="x_tahun_ajaran" class="ew-search-caption ew-label"><?php echo $Page->tahun_ajaran->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r106_daf_kelas_siswa_iuran" data-field="x_tahun_ajaran" data-value-separator="<?php echo $Page->tahun_ajaran->displayValueSeparatorAttribute() ?>" id="x_tahun_ajaran" name="x_tahun_ajaran"<?php echo $Page->tahun_ajaran->editAttributes() ?>>
		<?php echo $Page->tahun_ajaran->selectOptionListHtml("x_tahun_ajaran") ?>
	</select>
</div>
<?php echo $Page->tahun_ajaran->Lookup->getParamTag("p_x_tahun_ajaran") ?>
</span>
</div>
</div>
<div id="r_2" class="ew-row d-sm-flex">
<div id="c_sekolah_nama" class="ew-cell form-group">
	<label for="x_sekolah_nama" class="ew-search-caption ew-label"><?php echo $Page->sekolah_nama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r106_daf_kelas_siswa_iuran" data-field="x_sekolah_nama" data-value-separator="<?php echo $Page->sekolah_nama->displayValueSeparatorAttribute() ?>" id="x_sekolah_nama" name="x_sekolah_nama"<?php echo $Page->sekolah_nama->editAttributes() ?>>
		<?php echo $Page->sekolah_nama->selectOptionListHtml("x_sekolah_nama") ?>
	</select>
</div>
<?php echo $Page->sekolah_nama->Lookup->getParamTag("p_x_sekolah_nama") ?>
</span>
</div>
</div>
<div id="r_3" class="ew-row d-sm-flex">
<div id="c_kelas_nama" class="ew-cell form-group">
	<label for="x_kelas_nama" class="ew-search-caption ew-label"><?php echo $Page->kelas_nama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r106_daf_kelas_siswa_iuran" data-field="x_kelas_nama" data-value-separator="<?php echo $Page->kelas_nama->displayValueSeparatorAttribute() ?>" id="x_kelas_nama" name="x_kelas_nama"<?php echo $Page->kelas_nama->editAttributes() ?>>
		<?php echo $Page->kelas_nama->selectOptionListHtml("x_kelas_nama") ?>
	</select>
</div>
<?php echo $Page->kelas_nama->Lookup->getParamTag("p_x_kelas_nama") ?>
</span>
</div>
</div>
<div id="r_4" class="ew-row d-sm-flex">
<div id="c_nomorinduk" class="ew-cell form-group">
	<label for="x_nomorinduk" class="ew-search-caption ew-label"><?php echo $Page->nomorinduk->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("LIKE"); ?><input type="hidden" name="z_nomorinduk" id="z_nomorinduk" value="LIKE"></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->nomorinduk->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="r106_daf_kelas_siswa_iuran" data-field="x_nomorinduk" id="x_nomorinduk" name="x_nomorinduk" size="30" maxlength="25" placeholder="<?php echo HtmlEncode($Page->nomorinduk->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->nomorinduk->AdvancedSearch->SearchValue) ?>"<?php echo $Page->nomorinduk->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_5" class="ew-row d-sm-flex">
<div id="c_siswa_nama" class="ew-cell form-group">
	<label for="x_siswa_nama" class="ew-search-caption ew-label"><?php echo $Page->siswa_nama->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("LIKE"); ?><input type="hidden" name="z_siswa_nama" id="z_siswa_nama" value="LIKE"></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->siswa_nama->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="r106_daf_kelas_siswa_iuran" data-field="x_siswa_nama" id="x_siswa_nama" name="x_siswa_nama" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($Page->siswa_nama->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->siswa_nama->AdvancedSearch->SearchValue) ?>"<?php echo $Page->siswa_nama->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_6" class="ew-row d-sm-flex">
<div id="c_iuran_nama" class="ew-cell form-group">
	<label for="x_iuran_nama" class="ew-search-caption ew-label"><?php echo $Page->iuran_nama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r106_daf_kelas_siswa_iuran" data-field="x_iuran_nama" data-value-separator="<?php echo $Page->iuran_nama->displayValueSeparatorAttribute() ?>" id="x_iuran_nama" name="x_iuran_nama"<?php echo $Page->iuran_nama->editAttributes() ?>>
		<?php echo $Page->iuran_nama->selectOptionListHtml("x_iuran_nama") ?>
	</select>
</div>
<?php echo $Page->iuran_nama->Lookup->getParamTag("p_x_iuran_nama") ?>
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
fr106_daf_kelas_siswa_iuransummary.filterList = <?php echo $Page->getFilterList() ?>;
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
	$Page->loadGroupRowValues(TRUE);
	$Page->GroupCounter[0] = 1;
	$Page->GroupCount = 1;
}
$Page->GroupIndexes = InitArray($Page->StopGroup - $Page->StartGroup + 1, -1);
while ($Page->GroupRecordset && !$Page->GroupRecordset->EOF && $Page->GroupCount <= $Page->DisplayGroups || $Page->ShowHeader) {

	// Show dummy header for custom template
	// Show header

	if ($Page->ShowHeader) {
?>
<?php if ($Page->GroupCount > 1) { ?>
</tbody>
</table>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<?php if ($Page->Export == "" && !($Page->DrillDown && $Page->TotalGroups > 0)) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php include "r106_daf_kelas_siswa_iuran_pager.php" ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<span data-class="tpb<?php echo $Page->GroupCount - 1 ?>_r106_daf_kelas_siswa_iuran"><?php echo $Page->PageBreakContent ?></span>
<?php } ?>
<?php if ($Page->Export <> "pdf") { ?>
<?php if ($Page->Export == "word" || $Page->Export == "excel") { ?>
<div class="ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } else { ?>
<div class="card ew-card ew-grid"<?php echo $Page->ReportTableStyle ?>>
<?php } ?>
<?php } ?>
<!-- Report grid (begin) -->
<?php if ($Page->Export <> "pdf") { ?>
<div id="gmp_r106_daf_kelas_siswa_iuran" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<thead>
	<!-- Table header -->
	<tr class="ew-table-header">
<?php if ($Page->tsk->Visible) { ?>
	<?php if ($Page->tsk->ShowGroupHeaderAsRow) { ?>
	<td data-field="tsk">&nbsp;</td>
	<?php } else { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="tsk"><div class="r106_daf_kelas_siswa_iuran_tsk"><span class="ew-table-header-caption"><?php echo $Page->tsk->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="tsk">
<?php if ($Page->sortUrl($Page->tsk) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_tsk">
			<span class="ew-table-header-caption"><?php echo $Page->tsk->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_tsk" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->tsk) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->tsk->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->tsk->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->tsk->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
	<?php } ?>
<?php } ?>
<?php if ($Page->ns->Visible) { ?>
	<?php if ($Page->ns->ShowGroupHeaderAsRow) { ?>
	<td data-field="ns">&nbsp;</td>
	<?php } else { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="ns"><div class="r106_daf_kelas_siswa_iuran_ns"><span class="ew-table-header-caption"><?php echo $Page->ns->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="ns">
<?php if ($Page->sortUrl($Page->ns) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_ns">
			<span class="ew-table-header-caption"><?php echo $Page->ns->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_ns" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->ns) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->ns->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->ns->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->ns->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
	<?php } ?>
<?php } ?>
<?php if ($Page->tahun_ajaran->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="tahun_ajaran"><div class="r106_daf_kelas_siswa_iuran_tahun_ajaran"><span class="ew-table-header-caption"><?php echo $Page->tahun_ajaran->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="tahun_ajaran">
<?php if ($Page->sortUrl($Page->tahun_ajaran) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_tahun_ajaran">
			<span class="ew-table-header-caption"><?php echo $Page->tahun_ajaran->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_tahun_ajaran" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->tahun_ajaran) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->tahun_ajaran->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->tahun_ajaran->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->tahun_ajaran->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->sekolah_nama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="sekolah_nama"><div class="r106_daf_kelas_siswa_iuran_sekolah_nama"><span class="ew-table-header-caption"><?php echo $Page->sekolah_nama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="sekolah_nama">
<?php if ($Page->sortUrl($Page->sekolah_nama) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_sekolah_nama">
			<span class="ew-table-header-caption"><?php echo $Page->sekolah_nama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_sekolah_nama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->sekolah_nama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->sekolah_nama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->sekolah_nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->sekolah_nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->kelas_nama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="kelas_nama"><div class="r106_daf_kelas_siswa_iuran_kelas_nama"><span class="ew-table-header-caption"><?php echo $Page->kelas_nama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="kelas_nama">
<?php if ($Page->sortUrl($Page->kelas_nama) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_kelas_nama">
			<span class="ew-table-header-caption"><?php echo $Page->kelas_nama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_kelas_nama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->kelas_nama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->kelas_nama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->kelas_nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->kelas_nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->nomorinduk->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="nomorinduk"><div class="r106_daf_kelas_siswa_iuran_nomorinduk"><span class="ew-table-header-caption"><?php echo $Page->nomorinduk->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="nomorinduk">
<?php if ($Page->sortUrl($Page->nomorinduk) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_nomorinduk">
			<span class="ew-table-header-caption"><?php echo $Page->nomorinduk->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_nomorinduk" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->nomorinduk) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->nomorinduk->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->nomorinduk->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->nomorinduk->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->siswa_nama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="siswa_nama"><div class="r106_daf_kelas_siswa_iuran_siswa_nama"><span class="ew-table-header-caption"><?php echo $Page->siswa_nama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="siswa_nama">
<?php if ($Page->sortUrl($Page->siswa_nama) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_siswa_nama">
			<span class="ew-table-header-caption"><?php echo $Page->siswa_nama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_siswa_nama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->siswa_nama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->siswa_nama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->siswa_nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->siswa_nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="iuran_id"><div class="r106_daf_kelas_siswa_iuran_iuran_id"><span class="ew-table-header-caption"><?php echo $Page->iuran_id->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="iuran_id">
<?php if ($Page->sortUrl($Page->iuran_id) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_iuran_id">
			<span class="ew-table-header-caption"><?php echo $Page->iuran_id->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_iuran_id" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->iuran_id) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->iuran_id->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->iuran_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->iuran_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->iuran_nama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="iuran_nama"><div class="r106_daf_kelas_siswa_iuran_iuran_nama"><span class="ew-table-header-caption"><?php echo $Page->iuran_nama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="iuran_nama">
<?php if ($Page->sortUrl($Page->iuran_nama) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_iuran_nama">
			<span class="ew-table-header-caption"><?php echo $Page->iuran_nama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_iuran_nama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->iuran_nama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->iuran_nama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->iuran_nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->iuran_nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->jumlah->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="jumlah"><div class="r106_daf_kelas_siswa_iuran_jumlah" style="text-align: right;"><span class="ew-table-header-caption"><?php echo $Page->jumlah->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="jumlah">
<?php if ($Page->sortUrl($Page->jumlah) == "") { ?>
		<div class="ew-table-header-btn r106_daf_kelas_siswa_iuran_jumlah" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->jumlah->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r106_daf_kelas_siswa_iuran_jumlah" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->jumlah) ?>',2);" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->jumlah->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->jumlah->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->jumlah->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
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

	// Build detail SQL
	$where = DetailFilterSql($Page->tsk, $Page->getSqlFirstGroupField(), $Page->tsk->groupValue(), $Page->Dbid);
	if ($Page->PageFirstGroupFilter <> "") $Page->PageFirstGroupFilter .= " OR ";
	$Page->PageFirstGroupFilter .= $where;
	if ($Page->Filter != "")
		$where = "($Page->Filter) AND ($where)";
	$sql = BuildReportSql($Page->getSqlSelect(), $Page->getSqlWhere(), $Page->getSqlGroupBy(), $Page->getSqlHaving(), $Page->getSqlOrderBy(), $where, $Page->Sort);
	$Page->DetailRecordCount = 0;
	if ($Page->Recordset = $Page->getRecordset($sql)) {
		$Page->DetailRecordCount = $Page->Recordset->recordCount();
		if (GetConnectionType($Page->Dbid) == "ORACLE") { // Oracle, cannot moveFirst, use another recordset
			$rswrk = $Page->getRecordset($sql);
			$Page->DetailRows = $rswrk ? $rswrk->getRows() : [];
			$rswrk->close();
		} else {
			$Page->DetailRows = $Page->Recordset ? $Page->Recordset->getRows() : [];
		}
	}
	if ($Page->DetailRecordCount > 0)
		$Page->loadRowValues(TRUE);
	$Page->GroupIndexes[$Page->GroupCount] = [-1];
	while ($Page->Recordset && !$Page->Recordset->EOF) { // Loop detail records
		$Page->RecordCount++;
		$Page->RecordIndex++;
?>
<?php if ($Page->tsk->Visible && $Page->checkLevelBreak(1) && $Page->tsk->ShowGroupHeaderAsRow) { ?>
<?php

		// Render header row
		$Page->resetAttributes();
		$Page->RowType = ROWTYPE_TOTAL;
		$Page->RowTotalType = ROWTOTAL_GROUP;
		$Page->RowTotalSubType = ROWTOTAL_HEADER;
		$Page->RowGroupLevel = 1;
		$Page->tsk->Count = $Page->getSummaryCount(1);
		$Page->renderRow();
?>
	<tr<?php echo $Page->rowAttributes(); ?>>
<?php if ($Page->tsk->Visible) { ?>
		<td data-field="tsk"<?php echo $Page->tsk->cellAttributes(); ?>><span class="ew-group-toggle icon-collapse"></span></td>
<?php } ?>
		<td data-field="tsk" colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount - 1) ?>"<?php echo $Page->tsk->cellAttributes() ?>>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
		<span class="ew-summary-caption r106_daf_kelas_siswa_iuran_tsk"><span class="ew-table-header-caption"><?php echo $Page->tsk->caption() ?></span></span>
<?php } else { ?>
	<?php if ($Page->sortUrl($Page->tsk) == "") { ?>
		<span class="ew-summary-caption r106_daf_kelas_siswa_iuran_tsk">
			<span class="ew-table-header-caption"><?php echo $Page->tsk->caption() ?></span>
		</span>
	<?php } else { ?>
		<span class="ew-table-header-btn ew-pointer ew-summary-caption r106_daf_kelas_siswa_iuran_tsk" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->tsk) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->tsk->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->tsk->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->tsk->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</span>
	<?php } ?>
<?php } ?>
		<?php echo $ReportLanguage->phrase("SummaryColon") ?>
<span data-class="tpx<?php echo $Page->GroupCount ?>_r106_daf_kelas_siswa_iuran_tsk"<?php echo $Page->tsk->viewAttributes() ?>><?php echo $Page->tsk->GroupViewValue ?></span>
		<span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $ReportLanguage->phrase("RptCnt") ?></span><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($Page->tsk->Count,0,-2,-2,-2) ?></span>)</span>
		</td>
	</tr>
<?php } ?>
<?php if ($Page->ns->Visible && $Page->checkLevelBreak(2) && $Page->ns->ShowGroupHeaderAsRow) { ?>
<?php

		// Render header row
		$Page->resetAttributes();
		$Page->RowType = ROWTYPE_TOTAL;
		$Page->RowTotalType = ROWTOTAL_GROUP;
		$Page->RowTotalSubType = ROWTOTAL_HEADER;
		$Page->RowGroupLevel = 2;
		$Page->ns->Count = $Page->getSummaryCount(2);
		$Page->renderRow();
?>
	<tr<?php echo $Page->rowAttributes(); ?>>
<?php if ($Page->tsk->Visible) { ?>
		<td data-field="tsk"<?php echo $Page->tsk->cellAttributes(); ?>></td>
<?php } ?>
<?php if ($Page->ns->Visible) { ?>
		<td data-field="ns"<?php echo $Page->ns->cellAttributes(); ?>><span class="ew-group-toggle icon-collapse"></span></td>
<?php } ?>
		<td data-field="ns" colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount - 2) ?>"<?php echo $Page->ns->cellAttributes() ?>>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
		<span class="ew-summary-caption r106_daf_kelas_siswa_iuran_ns"><span class="ew-table-header-caption"><?php echo $Page->ns->caption() ?></span></span>
<?php } else { ?>
	<?php if ($Page->sortUrl($Page->ns) == "") { ?>
		<span class="ew-summary-caption r106_daf_kelas_siswa_iuran_ns">
			<span class="ew-table-header-caption"><?php echo $Page->ns->caption() ?></span>
		</span>
	<?php } else { ?>
		<span class="ew-table-header-btn ew-pointer ew-summary-caption r106_daf_kelas_siswa_iuran_ns" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->ns) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->ns->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->ns->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->ns->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</span>
	<?php } ?>
<?php } ?>
		<?php echo $ReportLanguage->phrase("SummaryColon") ?>
<span data-class="tpx<?php echo $Page->GroupCount ?>_<?php echo $Page->GroupCounter[0] ?>_r106_daf_kelas_siswa_iuran_ns"<?php echo $Page->ns->viewAttributes() ?>><?php echo $Page->ns->GroupViewValue ?></span>
		<span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $ReportLanguage->phrase("RptCnt") ?></span><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($Page->ns->Count,0,-2,-2,-2) ?></span>)</span>
		</td>
	</tr>
<?php } ?>
<?php

		// Render detail row
		$Page->resetAttributes();
		$Page->RowType = ROWTYPE_DETAIL;
		$Page->renderRow();
?>
	<tr<?php echo $Page->rowAttributes(); ?>>
<?php if ($Page->tsk->Visible) { ?>
	<?php if ($Page->tsk->ShowGroupHeaderAsRow) { ?>
		<td data-field="tsk"<?php echo $Page->tsk->cellAttributes(); ?>>&nbsp;</td>
	<?php } else { ?>
		<td data-field="tsk"<?php echo $Page->tsk->cellAttributes(); ?>>
<span data-class="tpx<?php echo $Page->GroupCount ?>_r106_daf_kelas_siswa_iuran_tsk"<?php echo $Page->tsk->viewAttributes() ?>><?php echo $Page->tsk->GroupViewValue ?></span></td>
	<?php } ?>
<?php } ?>
<?php if ($Page->ns->Visible) { ?>
	<?php if ($Page->ns->ShowGroupHeaderAsRow) { ?>
		<td data-field="ns"<?php echo $Page->ns->cellAttributes(); ?>>&nbsp;</td>
	<?php } else { ?>
		<td data-field="ns"<?php echo $Page->ns->cellAttributes(); ?>>
<span data-class="tpx<?php echo $Page->GroupCount ?>_<?php echo $Page->GroupCounter[0] ?>_r106_daf_kelas_siswa_iuran_ns"<?php echo $Page->ns->viewAttributes() ?>><?php echo $Page->ns->GroupViewValue ?></span></td>
	<?php } ?>
<?php } ?>
<?php if ($Page->tahun_ajaran->Visible) { ?>
		<td data-field="tahun_ajaran"<?php echo $Page->tahun_ajaran->cellAttributes() ?>>
<span<?php echo $Page->tahun_ajaran->viewAttributes() ?>><?php echo $Page->tahun_ajaran->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->sekolah_nama->Visible) { ?>
		<td data-field="sekolah_nama"<?php echo $Page->sekolah_nama->cellAttributes() ?>>
<span<?php echo $Page->sekolah_nama->viewAttributes() ?>><?php echo $Page->sekolah_nama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->kelas_nama->Visible) { ?>
		<td data-field="kelas_nama"<?php echo $Page->kelas_nama->cellAttributes() ?>>
<span<?php echo $Page->kelas_nama->viewAttributes() ?>><?php echo $Page->kelas_nama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->nomorinduk->Visible) { ?>
		<td data-field="nomorinduk"<?php echo $Page->nomorinduk->cellAttributes() ?>>
<span<?php echo $Page->nomorinduk->viewAttributes() ?>><?php echo $Page->nomorinduk->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->siswa_nama->Visible) { ?>
		<td data-field="siswa_nama"<?php echo $Page->siswa_nama->cellAttributes() ?>>
<span<?php echo $Page->siswa_nama->viewAttributes() ?>><?php echo $Page->siswa_nama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
		<td data-field="iuran_id"<?php echo $Page->iuran_id->cellAttributes() ?>>
<span<?php echo $Page->iuran_id->viewAttributes() ?>><?php echo $Page->iuran_id->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->iuran_nama->Visible) { ?>
		<td data-field="iuran_nama"<?php echo $Page->iuran_nama->cellAttributes() ?>>
<span<?php echo $Page->iuran_nama->viewAttributes() ?>><?php echo $Page->iuran_nama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->jumlah->Visible) { ?>
		<td data-field="jumlah"<?php echo $Page->jumlah->cellAttributes() ?>>
<span<?php echo $Page->jumlah->viewAttributes() ?>><?php echo $Page->jumlah->getViewValue() ?></span></td>
<?php } ?>
	</tr>
<?php

		// Accumulate page summary
		$Page->accumulateSummary();

		// Get next record
		$Page->loadRowValues();

		// Show Footers
?>
<?php
	} // End detail records loop
?>
<?php

	// Next group
	$Page->loadGroupRowValues();

	// Show header if page break
	if ($Page->Export <> "")
		$Page->ShowHeader = ($Page->ExportPageBreakCount == 0) ? FALSE : ($Page->GroupCount % $Page->ExportPageBreakCount == 0);

	// Page_Breaking server event
	if ($Page->ShowHeader)
		$Page->Page_Breaking($Page->ShowHeader, $Page->PageBreakContent);
	$Page->GroupCount++;
	$Page->GroupCounter[0] = 1;

	// Handle EOF
	if (!$Page->GroupRecordset || $Page->GroupRecordset->EOF)
		$Page->ShowHeader = FALSE;
} // End while
?>
<?php if ($Page->TotalGroups > 0) { ?>
</tbody>
<tfoot>
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
<div id="gmp_r106_daf_kelas_siswa_iuran" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
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
<?php include "r106_daf_kelas_siswa_iuran_pager.php" ?>
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