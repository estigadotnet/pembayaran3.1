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
if (!isset($r102_lap_tunggak_summary))
	$r102_lap_tunggak_summary = new r102_lap_tunggak_summary();
if (isset($Page))
	$OldPage = $Page;
$Page = &$r102_lap_tunggak_summary;

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
var fr102_lap_tunggaksummary = currentForm = new ew.Form("fr102_lap_tunggaksummary");

// Validate method
fr102_lap_tunggaksummary.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj), elm;

	// Call Form Custom Validate event
	if (!this.Form_CustomValidate(fobj))
		return false;
	return true;
}

// Form_CustomValidate method
fr102_lap_tunggaksummary.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}
<?php if (CLIENT_VALIDATE) { ?>
fr102_lap_tunggaksummary.validateRequired = true; // Uses JavaScript validation
<?php } else { ?>
fr102_lap_tunggaksummary.validateRequired = false; // No JavaScript validation
<?php } ?>

// Use Ajax
fr102_lap_tunggaksummary.lists["x_TahunAjaran"] = <?php echo $r102_lap_tunggak_summary->TahunAjaran->Lookup->toClientList() ?>;
fr102_lap_tunggaksummary.lists["x_TahunAjaran"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->TahunAjaran->lookupOptions()) ?>;
fr102_lap_tunggaksummary.lists["x_SekolahNama"] = <?php echo $r102_lap_tunggak_summary->SekolahNama->Lookup->toClientList() ?>;
fr102_lap_tunggaksummary.lists["x_SekolahNama"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->SekolahNama->lookupOptions()) ?>;
fr102_lap_tunggaksummary.lists["x_KelasNama"] = <?php echo $r102_lap_tunggak_summary->KelasNama->Lookup->toClientList() ?>;
fr102_lap_tunggaksummary.lists["x_KelasNama"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->KelasNama->lookupOptions()) ?>;
fr102_lap_tunggaksummary.lists["x_IuranNama[]"] = <?php echo $r102_lap_tunggak_summary->IuranNama->Lookup->toClientList() ?>;
fr102_lap_tunggaksummary.lists["x_IuranNama[]"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->IuranNama->lookupOptions()) ?>;
fr102_lap_tunggaksummary.lists["x_Periode[]"] = <?php echo $r102_lap_tunggak_summary->Periode->Lookup->toClientList() ?>;
fr102_lap_tunggaksummary.lists["x_Periode[]"].options = <?php echo JsonEncode($r102_lap_tunggak_summary->Periode->lookupOptions()) ?>;
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
<div id="ew-center" class="<?php echo $r102_lap_tunggak_summary->CenterContentClass ?>">
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
<form name="fr102_lap_tunggaksummary" id="fr102_lap_tunggaksummary" class="form-inline ew-form ew-ext-filter-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($Page->Filter <> "") ? " show" : " show"; ?>
<div id="fr102_lap_tunggaksummary-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<div id="r_1" class="ew-row d-sm-flex">
<div id="c_TahunAjaran" class="ew-cell form-group">
	<label for="x_TahunAjaran" class="ew-search-caption ew-label"><?php echo $Page->TahunAjaran->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r102_lap_tunggak" data-field="x_TahunAjaran" data-value-separator="<?php echo $Page->TahunAjaran->displayValueSeparatorAttribute() ?>" id="x_TahunAjaran" name="x_TahunAjaran"<?php echo $Page->TahunAjaran->editAttributes() ?>>
		<?php echo $Page->TahunAjaran->selectOptionListHtml("x_TahunAjaran") ?>
	</select>
</div>
<?php echo $Page->TahunAjaran->Lookup->getParamTag("p_x_TahunAjaran") ?>
</span>
</div>
</div>
<div id="r_2" class="ew-row d-sm-flex">
<div id="c_SekolahNama" class="ew-cell form-group">
	<label for="x_SekolahNama" class="ew-search-caption ew-label"><?php echo $Page->SekolahNama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r102_lap_tunggak" data-field="x_SekolahNama" data-value-separator="<?php echo $Page->SekolahNama->displayValueSeparatorAttribute() ?>" id="x_SekolahNama" name="x_SekolahNama"<?php echo $Page->SekolahNama->editAttributes() ?>>
		<?php echo $Page->SekolahNama->selectOptionListHtml("x_SekolahNama") ?>
	</select>
</div>
<?php echo $Page->SekolahNama->Lookup->getParamTag("p_x_SekolahNama") ?>
</span>
</div>
</div>
<div id="r_3" class="ew-row d-sm-flex">
<div id="c_KelasNama" class="ew-cell form-group">
	<label for="x_KelasNama" class="ew-search-caption ew-label"><?php echo $Page->KelasNama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r102_lap_tunggak" data-field="x_KelasNama" data-value-separator="<?php echo $Page->KelasNama->displayValueSeparatorAttribute() ?>" id="x_KelasNama" name="x_KelasNama"<?php echo $Page->KelasNama->editAttributes() ?>>
		<?php echo $Page->KelasNama->selectOptionListHtml("x_KelasNama") ?>
	</select>
</div>
<?php echo $Page->KelasNama->Lookup->getParamTag("p_x_KelasNama") ?>
</span>
</div>
</div>
<div id="r_4" class="ew-row d-sm-flex">
<div id="c_NomorInduk" class="ew-cell form-group">
	<label for="x_NomorInduk" class="ew-search-caption ew-label"><?php echo $Page->NomorInduk->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("LIKE"); ?><input type="hidden" name="z_NomorInduk" id="z_NomorInduk" value="LIKE"></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->NomorInduk->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="r102_lap_tunggak" data-field="x_NomorInduk" id="x_NomorInduk" name="x_NomorInduk" size="10" maxlength="25" placeholder="<?php echo HtmlEncode($Page->NomorInduk->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->NomorInduk->AdvancedSearch->SearchValue) ?>"<?php echo $Page->NomorInduk->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_5" class="ew-row d-sm-flex">
<div id="c_SiswaNama" class="ew-cell form-group">
	<label for="x_SiswaNama" class="ew-search-caption ew-label"><?php echo $Page->SiswaNama->caption() ?></label>
	<span class="ew-search-operator"><?php echo $ReportLanguage->phrase("LIKE"); ?><input type="hidden" name="z_SiswaNama" id="z_SiswaNama" value="LIKE"></span>
	<span class="control-group ew-search-field">
<?php PrependClass($Page->SiswaNama->EditAttrs["class"], "form-control"); // PR8 ?>
<input type="text" data-table="r102_lap_tunggak" data-field="x_SiswaNama" id="x_SiswaNama" name="x_SiswaNama" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($Page->SiswaNama->getPlaceHolder()) ?>" value="<?php echo HtmlEncode($Page->SiswaNama->AdvancedSearch->SearchValue) ?>"<?php echo $Page->SiswaNama->editAttributes() ?>>
</span>
</div>
</div>
<div id="r_6" class="ew-row d-sm-flex">
<div id="c_IuranNama" class="ew-cell form-group">
	<label for="x_IuranNama" class="ew-search-caption ew-label"><?php echo $Page->IuranNama->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r102_lap_tunggak" data-field="x_IuranNama" data-value-separator="<?php echo $Page->IuranNama->displayValueSeparatorAttribute() ?>" id="x_IuranNama[]" name="x_IuranNama[]" multiple="multiple"<?php echo $Page->IuranNama->editAttributes() ?>>
		<?php echo $Page->IuranNama->selectOptionListHtml("x_IuranNama[]") ?>
	</select>
</div>
<?php echo $Page->IuranNama->Lookup->getParamTag("p_x_IuranNama") ?>
</span>
</div>
</div>
<div id="r_7" class="ew-row d-sm-flex">
<div id="c_Periode" class="ew-cell form-group">
	<label for="x_Periode" class="ew-search-caption ew-label"><?php echo $Page->Periode->caption() ?></label>
	<span class="ew-search-field">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="r102_lap_tunggak" data-field="x_Periode" data-value-separator="<?php echo $Page->Periode->displayValueSeparatorAttribute() ?>" id="x_Periode[]" name="x_Periode[]" multiple="multiple"<?php echo $Page->Periode->editAttributes() ?>>
		<?php echo $Page->Periode->selectOptionListHtml("x_Periode[]") ?>
	</select>
</div>
<?php echo $Page->Periode->Lookup->getParamTag("p_x_Periode") ?>
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
fr102_lap_tunggaksummary.filterList = <?php echo $Page->getFilterList() ?>;
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
	$Page->GroupCounter[1] = 1;
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
<?php include "r102_lap_tunggak_pager.php" ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($Page->Export <> "pdf") { ?>
</div>
<?php } ?>
<span data-class="tpb<?php echo $Page->GroupCount - 1 ?>_r102_lap_tunggak"><?php echo $Page->PageBreakContent ?></span>
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
<div id="gmp_r102_lap_tunggak" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
<?php } ?>
<table class="<?php echo $Page->ReportTableClass ?>">
<thead>
	<!-- Table header -->
	<tr class="ew-table-header">
<?php if ($Page->keterangan->Visible) { ?>
	<?php if ($Page->keterangan->ShowGroupHeaderAsRow) { ?>
	<td data-field="keterangan">&nbsp;</td>
	<?php } else { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="keterangan"><div class="r102_lap_tunggak_keterangan"><span class="ew-table-header-caption"><?php echo $Page->keterangan->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="keterangan">
<?php if ($Page->sortUrl($Page->keterangan) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_keterangan">
			<span class="ew-table-header-caption"><?php echo $Page->keterangan->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_keterangan" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->keterangan) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->keterangan->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->keterangan->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->keterangan->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
	<?php } ?>
<?php } ?>
<?php if ($Page->IuranNama2->Visible) { ?>
	<?php if ($Page->IuranNama2->ShowGroupHeaderAsRow) { ?>
	<td data-field="IuranNama2">&nbsp;</td>
	<?php } else { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="IuranNama2"><div class="r102_lap_tunggak_IuranNama2"><span class="ew-table-header-caption"><?php echo $Page->IuranNama2->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="IuranNama2">
<?php if ($Page->sortUrl($Page->IuranNama2) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_IuranNama2">
			<span class="ew-table-header-caption"><?php echo $Page->IuranNama2->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_IuranNama2" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->IuranNama2) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->IuranNama2->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->IuranNama2->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->IuranNama2->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
	<?php } ?>
<?php } ?>
<?php if ($Page->Jumlah->Visible) { ?>
	<?php if ($Page->Jumlah->ShowGroupHeaderAsRow) { ?>
	<td data-field="Jumlah">&nbsp;</td>
	<?php } else { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="Jumlah"><div class="r102_lap_tunggak_Jumlah" style="text-align: right;"><span class="ew-table-header-caption"><?php echo $Page->Jumlah->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="Jumlah">
<?php if ($Page->sortUrl($Page->Jumlah) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_Jumlah" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->Jumlah->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_Jumlah" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->Jumlah) ?>',2);" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->Jumlah->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->Jumlah->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->Jumlah->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
	<?php } ?>
<?php } ?>
<?php if ($Page->TahunAjaran->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="TahunAjaran"><div class="r102_lap_tunggak_TahunAjaran"><span class="ew-table-header-caption"><?php echo $Page->TahunAjaran->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="TahunAjaran">
<?php if ($Page->sortUrl($Page->TahunAjaran) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_TahunAjaran">
			<span class="ew-table-header-caption"><?php echo $Page->TahunAjaran->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_TahunAjaran" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->TahunAjaran) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->TahunAjaran->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->TahunAjaran->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->TahunAjaran->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->SekolahNama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="SekolahNama"><div class="r102_lap_tunggak_SekolahNama"><span class="ew-table-header-caption"><?php echo $Page->SekolahNama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="SekolahNama">
<?php if ($Page->sortUrl($Page->SekolahNama) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_SekolahNama">
			<span class="ew-table-header-caption"><?php echo $Page->SekolahNama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_SekolahNama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->SekolahNama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->SekolahNama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->SekolahNama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->SekolahNama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->KelasNama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="KelasNama"><div class="r102_lap_tunggak_KelasNama"><span class="ew-table-header-caption"><?php echo $Page->KelasNama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="KelasNama">
<?php if ($Page->sortUrl($Page->KelasNama) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_KelasNama">
			<span class="ew-table-header-caption"><?php echo $Page->KelasNama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_KelasNama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->KelasNama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->KelasNama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->KelasNama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->KelasNama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->NomorInduk->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="NomorInduk"><div class="r102_lap_tunggak_NomorInduk"><span class="ew-table-header-caption"><?php echo $Page->NomorInduk->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="NomorInduk">
<?php if ($Page->sortUrl($Page->NomorInduk) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_NomorInduk">
			<span class="ew-table-header-caption"><?php echo $Page->NomorInduk->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_NomorInduk" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->NomorInduk) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->NomorInduk->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->NomorInduk->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->NomorInduk->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->SiswaNama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="SiswaNama"><div class="r102_lap_tunggak_SiswaNama"><span class="ew-table-header-caption"><?php echo $Page->SiswaNama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="SiswaNama">
<?php if ($Page->sortUrl($Page->SiswaNama) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_SiswaNama">
			<span class="ew-table-header-caption"><?php echo $Page->SiswaNama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_SiswaNama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->SiswaNama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->SiswaNama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->SiswaNama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->SiswaNama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="iuran_id"><div class="r102_lap_tunggak_iuran_id"><span class="ew-table-header-caption"><?php echo $Page->iuran_id->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="iuran_id">
<?php if ($Page->sortUrl($Page->iuran_id) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_iuran_id">
			<span class="ew-table-header-caption"><?php echo $Page->iuran_id->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_iuran_id" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->iuran_id) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->iuran_id->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->iuran_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->iuran_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->IuranNama->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="IuranNama"><div class="r102_lap_tunggak_IuranNama"><span class="ew-table-header-caption"><?php echo $Page->IuranNama->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="IuranNama">
<?php if ($Page->sortUrl($Page->IuranNama) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_IuranNama">
			<span class="ew-table-header-caption"><?php echo $Page->IuranNama->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_IuranNama" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->IuranNama) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->IuranNama->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->IuranNama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->IuranNama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->Periode->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="Periode"><div class="r102_lap_tunggak_Periode"><span class="ew-table-header-caption"><?php echo $Page->Periode->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="Periode">
<?php if ($Page->sortUrl($Page->Periode) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_Periode">
			<span class="ew-table-header-caption"><?php echo $Page->Periode->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_Periode" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->Periode) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->Periode->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->Periode->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->Periode->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->PeriodeBulan->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="PeriodeBulan"><div class="r102_lap_tunggak_PeriodeBulan"><span class="ew-table-header-caption"><?php echo $Page->PeriodeBulan->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="PeriodeBulan">
<?php if ($Page->sortUrl($Page->PeriodeBulan) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_PeriodeBulan">
			<span class="ew-table-header-caption"><?php echo $Page->PeriodeBulan->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_PeriodeBulan" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->PeriodeBulan) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->PeriodeBulan->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->PeriodeBulan->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->PeriodeBulan->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</div>
<?php } ?>
	</td>
<?php } ?>
<?php } ?>
<?php if ($Page->JumlahBayar->Visible) { ?>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
	<td data-field="JumlahBayar"><div class="r102_lap_tunggak_JumlahBayar" style="text-align: right;"><span class="ew-table-header-caption"><?php echo $Page->JumlahBayar->caption() ?></span></div></td>
<?php } else { ?>
	<td data-field="JumlahBayar">
<?php if ($Page->sortUrl($Page->JumlahBayar) == "") { ?>
		<div class="ew-table-header-btn r102_lap_tunggak_JumlahBayar" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->JumlahBayar->caption() ?></span>
		</div>
<?php } else { ?>
		<div class="ew-table-header-btn ew-pointer r102_lap_tunggak_JumlahBayar" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->JumlahBayar) ?>',2);" style="text-align: right;">
			<span class="ew-table-header-caption"><?php echo $Page->JumlahBayar->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->JumlahBayar->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->JumlahBayar->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
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
	$where = DetailFilterSql($Page->keterangan, $Page->getSqlFirstGroupField(), $Page->keterangan->groupValue(), $Page->Dbid);
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
	$Page->GroupIndexes[$Page->GroupCount][] = [-1];
	while ($Page->Recordset && !$Page->Recordset->EOF) { // Loop detail records
		$Page->RecordCount++;
		$Page->RecordIndex++;
?>
<?php if ($Page->keterangan->Visible && $Page->checkLevelBreak(1) && $Page->keterangan->ShowGroupHeaderAsRow) { ?>
<?php

		// Render header row
		$Page->resetAttributes();
		$Page->RowType = ROWTYPE_TOTAL;
		$Page->RowTotalType = ROWTOTAL_GROUP;
		$Page->RowTotalSubType = ROWTOTAL_HEADER;
		$Page->RowGroupLevel = 1;
		$Page->keterangan->Count = $Page->getSummaryCount(1);
		$Page->renderRow();
?>
	<tr<?php echo $Page->rowAttributes(); ?>>
<?php if ($Page->keterangan->Visible) { ?>
		<td data-field="keterangan"<?php echo $Page->keterangan->cellAttributes(); ?>><span class="ew-group-toggle icon-collapse"></span></td>
<?php } ?>
		<td data-field="keterangan" colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount - 1) ?>"<?php echo $Page->keterangan->cellAttributes() ?>>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
		<span class="ew-summary-caption r102_lap_tunggak_keterangan"><span class="ew-table-header-caption"><?php echo $Page->keterangan->caption() ?></span></span>
<?php } else { ?>
	<?php if ($Page->sortUrl($Page->keterangan) == "") { ?>
		<span class="ew-summary-caption r102_lap_tunggak_keterangan">
			<span class="ew-table-header-caption"><?php echo $Page->keterangan->caption() ?></span>
		</span>
	<?php } else { ?>
		<span class="ew-table-header-btn ew-pointer ew-summary-caption r102_lap_tunggak_keterangan" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->keterangan) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->keterangan->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->keterangan->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->keterangan->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</span>
	<?php } ?>
<?php } ?>
		<?php echo $ReportLanguage->phrase("SummaryColon") ?>
<span data-class="tpx<?php echo $Page->GroupCount ?>_r102_lap_tunggak_keterangan"<?php echo $Page->keterangan->viewAttributes() ?>><?php echo $Page->keterangan->GroupViewValue ?></span>
		<span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $ReportLanguage->phrase("RptCnt") ?></span><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($Page->keterangan->Count,0,-2,-2,-2) ?></span>)</span>
		</td>
	</tr>
<?php } ?>
<?php if ($Page->IuranNama2->Visible && $Page->checkLevelBreak(2) && $Page->IuranNama2->ShowGroupHeaderAsRow) { ?>
<?php

		// Render header row
		$Page->resetAttributes();
		$Page->RowType = ROWTYPE_TOTAL;
		$Page->RowTotalType = ROWTOTAL_GROUP;
		$Page->RowTotalSubType = ROWTOTAL_HEADER;
		$Page->RowGroupLevel = 2;
		$Page->IuranNama2->Count = $Page->getSummaryCount(2);
		$Page->renderRow();
?>
	<tr<?php echo $Page->rowAttributes(); ?>>
<?php if ($Page->keterangan->Visible) { ?>
		<td data-field="keterangan"<?php echo $Page->keterangan->cellAttributes(); ?>></td>
<?php } ?>
<?php if ($Page->IuranNama2->Visible) { ?>
		<td data-field="IuranNama2"<?php echo $Page->IuranNama2->cellAttributes(); ?>><span class="ew-group-toggle icon-collapse"></span></td>
<?php } ?>
		<td data-field="IuranNama2" colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount - 2) ?>"<?php echo $Page->IuranNama2->cellAttributes() ?>>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
		<span class="ew-summary-caption r102_lap_tunggak_IuranNama2"><span class="ew-table-header-caption"><?php echo $Page->IuranNama2->caption() ?></span></span>
<?php } else { ?>
	<?php if ($Page->sortUrl($Page->IuranNama2) == "") { ?>
		<span class="ew-summary-caption r102_lap_tunggak_IuranNama2">
			<span class="ew-table-header-caption"><?php echo $Page->IuranNama2->caption() ?></span>
		</span>
	<?php } else { ?>
		<span class="ew-table-header-btn ew-pointer ew-summary-caption r102_lap_tunggak_IuranNama2" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->IuranNama2) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->IuranNama2->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->IuranNama2->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->IuranNama2->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</span>
	<?php } ?>
<?php } ?>
		<?php echo $ReportLanguage->phrase("SummaryColon") ?>
<span data-class="tpx<?php echo $Page->GroupCount ?>_<?php echo $Page->GroupCounter[0] ?>_r102_lap_tunggak_IuranNama2"<?php echo $Page->IuranNama2->viewAttributes() ?>><?php echo $Page->IuranNama2->GroupViewValue ?></span>
		<span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $ReportLanguage->phrase("RptCnt") ?></span><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($Page->IuranNama2->Count,0,-2,-2,-2) ?></span>)</span>
		</td>
	</tr>
<?php } ?>
<?php if ($Page->Jumlah->Visible && $Page->checkLevelBreak(3) && $Page->Jumlah->ShowGroupHeaderAsRow) { ?>
<?php

		// Render header row
		$Page->resetAttributes();
		$Page->RowType = ROWTYPE_TOTAL;
		$Page->RowTotalType = ROWTOTAL_GROUP;
		$Page->RowTotalSubType = ROWTOTAL_HEADER;
		$Page->RowGroupLevel = 3;
		$Page->Jumlah->Count = $Page->getSummaryCount(3);
		$Page->renderRow();
?>
	<tr<?php echo $Page->rowAttributes(); ?>>
<?php if ($Page->keterangan->Visible) { ?>
		<td data-field="keterangan"<?php echo $Page->keterangan->cellAttributes(); ?>></td>
<?php } ?>
<?php if ($Page->IuranNama2->Visible) { ?>
		<td data-field="IuranNama2"<?php echo $Page->IuranNama2->cellAttributes(); ?>></td>
<?php } ?>
<?php if ($Page->Jumlah->Visible) { ?>
		<td data-field="Jumlah"<?php echo $Page->Jumlah->cellAttributes(); ?>><span class="ew-group-toggle icon-collapse"></span></td>
<?php } ?>
		<td data-field="Jumlah" colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount - 3) ?>"<?php echo $Page->Jumlah->cellAttributes() ?>>
<?php if ($Page->Export <> "" || $Page->DrillDown) { ?>
		<span class="ew-summary-caption r102_lap_tunggak_Jumlah"><span class="ew-table-header-caption"><?php echo $Page->Jumlah->caption() ?></span></span>
<?php } else { ?>
	<?php if ($Page->sortUrl($Page->Jumlah) == "") { ?>
		<span class="ew-summary-caption r102_lap_tunggak_Jumlah">
			<span class="ew-table-header-caption"><?php echo $Page->Jumlah->caption() ?></span>
		</span>
	<?php } else { ?>
		<span class="ew-table-header-btn ew-pointer ew-summary-caption r102_lap_tunggak_Jumlah" onclick="ew.sort(event,'<?php echo $Page->sortUrl($Page->Jumlah) ?>',2);">
			<span class="ew-table-header-caption"><?php echo $Page->Jumlah->caption() ?></span>
			<span class="ew-table-header-sort"><?php if ($Page->Jumlah->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($Page->Jumlah->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span>
		</span>
	<?php } ?>
<?php } ?>
		<?php echo $ReportLanguage->phrase("SummaryColon") ?>
<span data-class="tpx<?php echo $Page->GroupCount ?>_<?php echo $Page->GroupCounter[0] ?>_<?php echo $Page->GroupCounter[1] ?>_r102_lap_tunggak_Jumlah"<?php echo $Page->Jumlah->viewAttributes() ?>><?php echo $Page->Jumlah->GroupViewValue ?></span>
		<span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $ReportLanguage->phrase("RptCnt") ?></span><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($Page->Jumlah->Count,0,-2,-2,-2) ?></span>)</span>
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
<?php if ($Page->keterangan->Visible) { ?>
	<?php if ($Page->keterangan->ShowGroupHeaderAsRow) { ?>
		<td data-field="keterangan"<?php echo $Page->keterangan->cellAttributes(); ?>>&nbsp;</td>
	<?php } else { ?>
		<td data-field="keterangan"<?php echo $Page->keterangan->cellAttributes(); ?>>
<span data-class="tpx<?php echo $Page->GroupCount ?>_r102_lap_tunggak_keterangan"<?php echo $Page->keterangan->viewAttributes() ?>><?php echo $Page->keterangan->GroupViewValue ?></span></td>
	<?php } ?>
<?php } ?>
<?php if ($Page->IuranNama2->Visible) { ?>
	<?php if ($Page->IuranNama2->ShowGroupHeaderAsRow) { ?>
		<td data-field="IuranNama2"<?php echo $Page->IuranNama2->cellAttributes(); ?>>&nbsp;</td>
	<?php } else { ?>
		<td data-field="IuranNama2"<?php echo $Page->IuranNama2->cellAttributes(); ?>>
<span data-class="tpx<?php echo $Page->GroupCount ?>_<?php echo $Page->GroupCounter[0] ?>_r102_lap_tunggak_IuranNama2"<?php echo $Page->IuranNama2->viewAttributes() ?>><?php echo $Page->IuranNama2->GroupViewValue ?></span></td>
	<?php } ?>
<?php } ?>
<?php if ($Page->Jumlah->Visible) { ?>
	<?php if ($Page->Jumlah->ShowGroupHeaderAsRow) { ?>
		<td data-field="Jumlah"<?php echo $Page->Jumlah->cellAttributes(); ?>>&nbsp;</td>
	<?php } else { ?>
		<td data-field="Jumlah"<?php echo $Page->Jumlah->cellAttributes(); ?>>
<span data-class="tpx<?php echo $Page->GroupCount ?>_<?php echo $Page->GroupCounter[0] ?>_<?php echo $Page->GroupCounter[1] ?>_r102_lap_tunggak_Jumlah"<?php echo $Page->Jumlah->viewAttributes() ?>><?php echo $Page->Jumlah->GroupViewValue ?></span></td>
	<?php } ?>
<?php } ?>
<?php if ($Page->TahunAjaran->Visible) { ?>
		<td data-field="TahunAjaran"<?php echo $Page->TahunAjaran->cellAttributes() ?>>
<span<?php echo $Page->TahunAjaran->viewAttributes() ?>><?php echo $Page->TahunAjaran->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->SekolahNama->Visible) { ?>
		<td data-field="SekolahNama"<?php echo $Page->SekolahNama->cellAttributes() ?>>
<span<?php echo $Page->SekolahNama->viewAttributes() ?>><?php echo $Page->SekolahNama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->KelasNama->Visible) { ?>
		<td data-field="KelasNama"<?php echo $Page->KelasNama->cellAttributes() ?>>
<span<?php echo $Page->KelasNama->viewAttributes() ?>><?php echo $Page->KelasNama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->NomorInduk->Visible) { ?>
		<td data-field="NomorInduk"<?php echo $Page->NomorInduk->cellAttributes() ?>>
<span<?php echo $Page->NomorInduk->viewAttributes() ?>><?php echo $Page->NomorInduk->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->SiswaNama->Visible) { ?>
		<td data-field="SiswaNama"<?php echo $Page->SiswaNama->cellAttributes() ?>>
<span<?php echo $Page->SiswaNama->viewAttributes() ?>><?php echo $Page->SiswaNama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
		<td data-field="iuran_id"<?php echo $Page->iuran_id->cellAttributes() ?>>
<span<?php echo $Page->iuran_id->viewAttributes() ?>><?php echo $Page->iuran_id->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->IuranNama->Visible) { ?>
		<td data-field="IuranNama"<?php echo $Page->IuranNama->cellAttributes() ?>>
<span<?php echo $Page->IuranNama->viewAttributes() ?>><?php echo $Page->IuranNama->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->Periode->Visible) { ?>
		<td data-field="Periode"<?php echo $Page->Periode->cellAttributes() ?>>
<span<?php echo $Page->Periode->viewAttributes() ?>><?php echo $Page->Periode->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->PeriodeBulan->Visible) { ?>
		<td data-field="PeriodeBulan"<?php echo $Page->PeriodeBulan->cellAttributes() ?>>
<span<?php echo $Page->PeriodeBulan->viewAttributes() ?>><?php echo $Page->PeriodeBulan->getViewValue() ?></span></td>
<?php } ?>
<?php if ($Page->JumlahBayar->Visible) { ?>
		<td data-field="JumlahBayar"<?php echo $Page->JumlahBayar->cellAttributes() ?>>
<span<?php echo $Page->JumlahBayar->viewAttributes() ?>><?php echo $Page->JumlahBayar->getViewValue() ?></span></td>
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
	$Page->GroupCounter[1] = 1;
	$Page->GroupCounter[0] = 1;

	// Handle EOF
	if (!$Page->GroupRecordset || $Page->GroupRecordset->EOF)
		$Page->ShowHeader = FALSE;
} // End while
?>
<?php if ($Page->TotalGroups > 0) { ?>
</tbody>
<tfoot>
<?php
	$Page->JumlahBayar->Count = $Page->GrandCounts[10];
	$Page->JumlahBayar->SumValue = $Page->GrandSummaries[10]; // Load SUM
	$Page->resetAttributes();
	$Page->RowType = ROWTYPE_TOTAL;
	$Page->RowTotalType = ROWTOTAL_GRAND;
	$Page->RowTotalSubType = ROWTOTAL_FOOTER;
	$Page->RowAttrs["class"] = "ew-rpt-grand-summary";
	$Page->renderRow();
?>
<?php if ($Page->Jumlah->ShowCompactSummaryFooter) { ?>
	<tr<?php echo $Page->rowAttributes() ?>><td colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount) ?>"><?php echo $ReportLanguage->Phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<span class="ew-aggregate-caption"><?php echo $ReportLanguage->phrase("RptCnt") ?></span><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span class="ew-aggregate-value"><?php echo FormatNumber($Page->TotalCount,0,-2,-2,-2) ?></span>)</span></td></tr>
	<tr<?php echo $Page->rowAttributes() ?>>
<?php if ($Page->GroupColumnCount > 0) { ?>
		<td colspan="<?php echo $Page->GroupColumnCount ?>" class="ew-rpt-grp-aggregate">&nbsp;</td>
<?php } ?>
<?php if ($Page->TahunAjaran->Visible) { ?>
		<td data-field="TahunAjaran"<?php echo $Page->TahunAjaran->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->SekolahNama->Visible) { ?>
		<td data-field="SekolahNama"<?php echo $Page->SekolahNama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->KelasNama->Visible) { ?>
		<td data-field="KelasNama"<?php echo $Page->KelasNama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->NomorInduk->Visible) { ?>
		<td data-field="NomorInduk"<?php echo $Page->NomorInduk->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->SiswaNama->Visible) { ?>
		<td data-field="SiswaNama"<?php echo $Page->SiswaNama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
		<td data-field="iuran_id"<?php echo $Page->iuran_id->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->IuranNama->Visible) { ?>
		<td data-field="IuranNama"<?php echo $Page->IuranNama->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->Periode->Visible) { ?>
		<td data-field="Periode"<?php echo $Page->Periode->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->PeriodeBulan->Visible) { ?>
		<td data-field="PeriodeBulan"<?php echo $Page->PeriodeBulan->cellAttributes() ?>></td>
<?php } ?>
<?php if ($Page->JumlahBayar->Visible) { ?>
		<td data-field="JumlahBayar"<?php echo $Page->JumlahBayar->cellAttributes() ?>><?php echo $ReportLanguage->phrase("RptSum") ?><?php echo $ReportLanguage->phrase("AggregateEqual") ?><span<?php echo $Page->JumlahBayar->viewAttributes() ?>><?php echo $Page->JumlahBayar->SumViewValue ?></span></td>
<?php } ?>
	</tr>
<?php } else { ?>
	<tr<?php echo $Page->rowAttributes() ?>><td colspan="<?php echo ($Page->GroupColumnCount + $Page->DetailColumnCount) ?>"><?php echo $ReportLanguage->Phrase("RptGrandSummary") ?> <span class="ew-summary-count">(<?php echo FormatNumber($Page->TotalCount,0,-2,-2,-2); ?><?php echo $ReportLanguage->Phrase("RptDtlRec") ?>)</span></td></tr>
	<tr<?php echo $Page->rowAttributes() ?>>
<?php if ($Page->GroupColumnCount > 0) { ?>
		<td colspan="<?php echo $Page->GroupColumnCount ?>" class="ew-rpt-grp-aggregate"><?php echo $ReportLanguage->phrase("RptSum") ?></td>
<?php } ?>
<?php if ($Page->TahunAjaran->Visible) { ?>
		<td data-field="TahunAjaran"<?php echo $Page->TahunAjaran->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->SekolahNama->Visible) { ?>
		<td data-field="SekolahNama"<?php echo $Page->SekolahNama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->KelasNama->Visible) { ?>
		<td data-field="KelasNama"<?php echo $Page->KelasNama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->NomorInduk->Visible) { ?>
		<td data-field="NomorInduk"<?php echo $Page->NomorInduk->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->SiswaNama->Visible) { ?>
		<td data-field="SiswaNama"<?php echo $Page->SiswaNama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->iuran_id->Visible) { ?>
		<td data-field="iuran_id"<?php echo $Page->iuran_id->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->IuranNama->Visible) { ?>
		<td data-field="IuranNama"<?php echo $Page->IuranNama->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->Periode->Visible) { ?>
		<td data-field="Periode"<?php echo $Page->Periode->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->PeriodeBulan->Visible) { ?>
		<td data-field="PeriodeBulan"<?php echo $Page->PeriodeBulan->cellAttributes() ?>>&nbsp;</td>
<?php } ?>
<?php if ($Page->JumlahBayar->Visible) { ?>
		<td data-field="JumlahBayar"<?php echo $Page->JumlahBayar->cellAttributes() ?>>
<span<?php echo $Page->JumlahBayar->viewAttributes() ?>><?php echo $Page->JumlahBayar->SumViewValue ?></span></td>
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
<div id="gmp_r102_lap_tunggak" class="<?php if (IsResponsiveLayout()) { echo "table-responsive "; } ?>ew-grid-middle-panel">
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
<?php include "r102_lap_tunggak_pager.php" ?>
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