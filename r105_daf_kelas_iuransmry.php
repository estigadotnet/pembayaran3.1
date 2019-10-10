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
if (!isset($r105_daf_kelas_iuran_summary))
	$r105_daf_kelas_iuran_summary = new r105_daf_kelas_iuran_summary();
if (isset($Page))
	$OldPage = $Page;
$Page = &$r105_daf_kelas_iuran_summary;

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
var fr105_daf_kelas_iuransummary = currentForm = new ew.Form("fr105_daf_kelas_iuransummary");

// Validate method
fr105_daf_kelas_iuransummary.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj), elm;

	// Call Form Custom Validate event
	if (!this.Form_CustomValidate(fobj))
		return false;
	return true;
}

// Form_CustomValidate method
fr105_daf_kelas_iuransummary.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}
<?php if (CLIENT_VALIDATE) { ?>
fr105_daf_kelas_iuransummary.validateRequired = true; // Uses JavaScript validation
<?php } else { ?>
fr105_daf_kelas_iuransummary.validateRequired = false; // No JavaScript validation
<?php } ?>

// Use Ajax
fr105_daf_kelas_iuransummary.lists["x_tsk"] = <?php echo $r105_daf_kelas_iuran_summary->tsk->Lookup->toClientList() ?>;
fr105_daf_kelas_iuransummary.lists["x_tsk"].options = <?php echo JsonEncode($r105_daf_kelas_iuran_summary->tsk->lookupOptions()) ?>;
fr105_daf_kelas_iuransummary.lists["x_nama"] = <?php echo $r105_daf_kelas_iuran_summary->nama->Lookup->toClientList() ?>;
fr105_daf_kelas_iuransummary.lists["x_nama"].options = <?php echo JsonEncode($r105_daf_kelas_iuran_summary->nama->lookupOptions()) ?>;
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
<div id="ew-center" class="<?php echo $r105_daf_kelas_iuran_summary->CenterContentClass ?>">
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
<form name="fr105_daf_kelas_iuransummary" id="fr105_daf_kelas_iuransummary" class="form-inline ew-form ew-ext-filter-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($Page->Filter <> "") ? " show" : " show"; ?>
<div id="fr105_daf_kelas_iuransummary-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<div id="r_1" class="ew-row d-sm-flex">
<div id="c_tsk" class="ew-cell form-group">
	<label for="x_tsk" class="ew-search-caption ew-label"><?php echo $Page->tsk->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r105_daf_kelas_iuran" data-field="x_tsk" data-value-separator="<?php echo $Page->tsk->displayValueSeparatorAttribute() ?>" id="x_tsk" name="x_tsk"<?php echo $Page->tsk->editAttributes() ?>>
		<?php echo $Page->tsk->selectOptionListHtml("x_tsk") ?>
	</select>
</div>
<?php echo $Page->tsk->Lookup->getParamTag("p_x_tsk") ?>
</span>
</div>
</div>
<div id="r_2" class="ew-row d-sm-flex">
<div id="c_nama" class="ew-cell form-group">
	<label for="x_nama" class="ew-search-caption ew-label"><?php echo $Page->nama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r105_daf_kelas_iuran" data-field="x_nama" data-value-separator="<?php echo $Page->nama->displayValueSeparatorAttribute() ?>" id="x_nama" name="x_nama"<?php echo $Page->nama->editAttributes() ?>>
		<?php echo $Page->nama->selectOptionListHtml("x_nama") ?>
	</select>
</div>
<?php echo $Page->nama->Lookup->getParamTag("p_x_nama") ?>
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
fr105_daf_kelas_iuransummary.filterList = <?php echo $Page->getFilterList() ?>;
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
<div id="gmp_r105_daf_kelas_iuran" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<thead>
	<!-- Table header -->
	<tr class="ew-table-header">
<?php if ($Page->tsk->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="tsk"><div class="r105_daf_kelas_iuran_tsk"><span class="ew-table-header-caption"><?php echo $Page->tsk->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="tsk">
<?php if ($Page->sortUrl($Page->tsk) == "") { ?>
		<div class="ew-table-header-btn r105_daf_kelas_iuran_tsk">
			<span class="ew-table-header-caption"><?php echo $Page->tsk->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r105_daf_kelas_iuran_tsk" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->tsk) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->tsk->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->tsk->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->tsk->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->nama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="nama"><div class="r105_daf_kelas_iuran_nama"><span class="ew-table-header-caption"><?php echo $Page->nama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="nama">
<?php if ($Page->sortUrl($Page->nama) == "") { ?>
		<div class="ew-table-header-btn r105_daf_kelas_iuran_nama">
			<span class="ew-table-header-caption"><?php echo $Page->nama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r105_daf_kelas_iuran_nama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->nama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->nama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->jumlah->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="jumlah"><div class="r105_daf_kelas_iuran_jumlah" style="text-align: right;"><span class="ew-table-header-caption"><?php echo $Page->jumlah->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="jumlah">
<?php if ($Page->sortUrl($Page->jumlah) == "") { ?>
		<div class="ew-table-header-btn r105_daf_kelas_iuran_jumlah" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->jumlah->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r105_daf_kelas_iuran_jumlah" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->jumlah) ?>',2);" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->jumlah->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->jumlah->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->jumlah->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->jumlah_siswa->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="jumlah_siswa"><div class="r105_daf_kelas_iuran_jumlah_siswa" style="text-align: right;"><span class="ew-table-header-caption"><?php echo $Page->jumlah_siswa->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="jumlah_siswa">
<?php if ($Page->sortUrl($Page->jumlah_siswa) == "") { ?>
		<div class="ew-table-header-btn r105_daf_kelas_iuran_jumlah_siswa" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->jumlah_siswa->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r105_daf_kelas_iuran_jumlah_siswa" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->jumlah_siswa) ?>',2);" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->jumlah_siswa->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->jumlah_siswa->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->jumlah_siswa->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
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
<?php if ($Page->tsk->Visible) { ?>
		<td data-field="tsk"<?php echo $Page->tsk->cellAttributes() ?>>
<span<?php echo $Page->tsk->viewAttributes() ?>><?php echo $Page->tsk->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->nama->Visible) { ?>
		<td data-field="nama"<?php echo $Page->nama->cellAttributes() ?>>
<span<?php echo $Page->nama->viewAttributes() ?>><?php echo $Page->nama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->jumlah->Visible) { ?>
		<td data-field="jumlah"<?php echo $Page->jumlah->cellAttributes() ?>>
<span<?php echo $Page->jumlah->viewAttributes() ?>><?php echo $Page->jumlah->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->jumlah_siswa->Visible) { ?>
		<td data-field="jumlah_siswa"<?php echo $Page->jumlah_siswa->cellAttributes() ?>>
<span<?php echo $Page->jumlah_siswa->viewAttributes() ?>><?php echo $Page->jumlah_siswa->getViewValue() ?></span></td>
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
	$Page->resetAttributes();
	$Page->RowType = ROWTYPE_TOTAL;
	$Page->RowTotalType = ROWTOTAL_GRAND;
	$Page->RowTotalSubType = ROWTOTAL_FOOTER;
	$Page->RowAttrs["class"] = "ew-rpt-grand-summary";
	$Page->renderRow();
?>
<?php if ($Page->ShowCompactSummaryFooter) { ?>
	<tr<?php echo $Page->rowAttributes() ?>><td colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount) ?>"><?php echo $ReportLanguage->Phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $ReportLanguage->phrase("RptCnt") ?></span><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($Page->TotalCount,0,-2,-2,-2) ?></span>)</span></td></tr>
<?php } else { ?>
	<tr<?php echo $Page->rowAttributes() ?>><td colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount) ?>"><?php echo $ReportLanguage->Phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<?php echo FormatNumber($Page->TotalCount,0,-2,-2,-2); ?><?php echo $ReportLanguage->Phrase("RptDtlRec") ?>)</span></td></tr>
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
<div id="gmp_r105_daf_kelas_iuran" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
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
<?php include "r105_daf_kelas_iuran_pager.php" ?>
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