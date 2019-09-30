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
$v110_bukti_master_list = new v110_bukti_master_list();

// Run the page
$v110_bukti_master_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$v110_bukti_master_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$v110_bukti_master->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var fv110_bukti_masterlist = currentForm = new ew.Form("fv110_bukti_masterlist", "list");
fv110_bukti_masterlist.formKeyCountName = '<?php echo $v110_bukti_master_list->FormKeyCountName ?>';

// Form_CustomValidate event
fv110_bukti_masterlist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
fv110_bukti_masterlist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<style type="text/css">
.ew-table-preview-row { /* main table preview row color */
	background-color: #FFFFFF; /* preview row color */
}
.ew-table-preview-row .ew-grid {
	display: table;
}
</style>
<div id="ew-preview" class="d-none"><!-- preview -->
	<div class="ew-nav-tabs"><!-- .ew-nav-tabs -->
		<ul class="nav nav-tabs"></ul>
		<div class="tab-content"><!-- .tab-content -->
			<div class="tab-pane fade active show"></div>
		</div><!-- /.tab-content -->
	</div><!-- /.ew-nav-tabs -->
</div><!-- /preview -->
<script src="phpjs/ewpreview.js"></script>
<script>
ew.PREVIEW_PLACEMENT = ew.CSS_FLIP ? "left" : "right";
ew.PREVIEW_SINGLE_ROW = false;
ew.PREVIEW_OVERLAY = false;
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$v110_bukti_master->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($v110_bukti_master_list->TotalRecs > 0 && $v110_bukti_master_list->ExportOptions->visible()) { ?>
<?php $v110_bukti_master_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($v110_bukti_master_list->ImportOptions->visible()) { ?>
<?php $v110_bukti_master_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if (!$v110_bukti_master->isExport() || EXPORT_MASTER_RECORD && $v110_bukti_master->isExport("print")) { ?>
<?php
if ($v110_bukti_master_list->DbMasterFilter <> "" && $v110_bukti_master->getCurrentMasterTable() == "v102_daf_kelas_siswa") {
	if ($v110_bukti_master_list->MasterRecordExists) {
		include_once "v102_daf_kelas_siswamaster.php";
	}
}
?>
<?php } ?>
<?php
$v110_bukti_master_list->renderOtherOptions();
?>
<?php $v110_bukti_master_list->showPageHeader(); ?>
<?php
$v110_bukti_master_list->showMessage();
?>
<?php if ($v110_bukti_master_list->TotalRecs > 0 || $v110_bukti_master->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($v110_bukti_master_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> v110_bukti_master">
<form name="fv110_bukti_masterlist" id="fv110_bukti_masterlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($v110_bukti_master_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $v110_bukti_master_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="v110_bukti_master">
<?php if ($v110_bukti_master->getCurrentMasterTable() == "v102_daf_kelas_siswa" && $v110_bukti_master->CurrentAction) { ?>
<input type="hidden" name="<?php echo TABLE_SHOW_MASTER ?>" value="v102_daf_kelas_siswa">
<input type="hidden" name="fk_id" value="<?php echo $v110_bukti_master->daf_kelas_siswa_id->getSessionValue() ?>">
<?php } ?>
<div id="gmp_v110_bukti_master" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($v110_bukti_master_list->TotalRecs > 0 || $v110_bukti_master->isGridEdit()) { ?>
<table id="tbl_v110_bukti_masterlist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$v110_bukti_master_list->RowType = ROWTYPE_HEADER;

// Render list options
$v110_bukti_master_list->renderListOptions();

// Render list options (header, left)
$v110_bukti_master_list->ListOptions->render("header", "left");
?>
<?php if ($v110_bukti_master->periodebulan->Visible) { // periodebulan ?>
	<?php if ($v110_bukti_master->sortUrl($v110_bukti_master->periodebulan) == "") { ?>
		<th data-name="periodebulan" class="<?php echo $v110_bukti_master->periodebulan->headerCellClass() ?>"><div id="elh_v110_bukti_master_periodebulan" class="v110_bukti_master_periodebulan"><div class="ew-table-header-caption"><?php echo $v110_bukti_master->periodebulan->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="periodebulan" class="<?php echo $v110_bukti_master->periodebulan->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v110_bukti_master->SortUrl($v110_bukti_master->periodebulan) ?>',2);"><div id="elh_v110_bukti_master_periodebulan" class="v110_bukti_master_periodebulan">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v110_bukti_master->periodebulan->caption() ?></span><span class="ew-table-header-sort"><?php if ($v110_bukti_master->periodebulan->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v110_bukti_master->periodebulan->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v110_bukti_master->tglbayar->Visible) { // tglbayar ?>
	<?php if ($v110_bukti_master->sortUrl($v110_bukti_master->tglbayar) == "") { ?>
		<th data-name="tglbayar" class="<?php echo $v110_bukti_master->tglbayar->headerCellClass() ?>"><div id="elh_v110_bukti_master_tglbayar" class="v110_bukti_master_tglbayar"><div class="ew-table-header-caption"><?php echo $v110_bukti_master->tglbayar->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tglbayar" class="<?php echo $v110_bukti_master->tglbayar->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v110_bukti_master->SortUrl($v110_bukti_master->tglbayar) ?>',2);"><div id="elh_v110_bukti_master_tglbayar" class="v110_bukti_master_tglbayar">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v110_bukti_master->tglbayar->caption() ?></span><span class="ew-table-header-sort"><?php if ($v110_bukti_master->tglbayar->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v110_bukti_master->tglbayar->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v110_bukti_master->totalbayar->Visible) { // totalbayar ?>
	<?php if ($v110_bukti_master->sortUrl($v110_bukti_master->totalbayar) == "") { ?>
		<th data-name="totalbayar" class="<?php echo $v110_bukti_master->totalbayar->headerCellClass() ?>"><div id="elh_v110_bukti_master_totalbayar" class="v110_bukti_master_totalbayar"><div class="ew-table-header-caption"><?php echo $v110_bukti_master->totalbayar->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="totalbayar" class="<?php echo $v110_bukti_master->totalbayar->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v110_bukti_master->SortUrl($v110_bukti_master->totalbayar) ?>',2);"><div id="elh_v110_bukti_master_totalbayar" class="v110_bukti_master_totalbayar">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v110_bukti_master->totalbayar->caption() ?></span><span class="ew-table-header-sort"><?php if ($v110_bukti_master->totalbayar->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v110_bukti_master->totalbayar->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$v110_bukti_master_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($v110_bukti_master->ExportAll && $v110_bukti_master->isExport()) {
	$v110_bukti_master_list->StopRec = $v110_bukti_master_list->TotalRecs;
} else {

	// Set the last record to display
	if ($v110_bukti_master_list->TotalRecs > $v110_bukti_master_list->StartRec + $v110_bukti_master_list->DisplayRecs - 1)
		$v110_bukti_master_list->StopRec = $v110_bukti_master_list->StartRec + $v110_bukti_master_list->DisplayRecs - 1;
	else
		$v110_bukti_master_list->StopRec = $v110_bukti_master_list->TotalRecs;
}
$v110_bukti_master_list->RecCnt = $v110_bukti_master_list->StartRec - 1;
if ($v110_bukti_master_list->Recordset && !$v110_bukti_master_list->Recordset->EOF) {
	$v110_bukti_master_list->Recordset->moveFirst();
	$selectLimit = $v110_bukti_master_list->UseSelectLimit;
	if (!$selectLimit && $v110_bukti_master_list->StartRec > 1)
		$v110_bukti_master_list->Recordset->move($v110_bukti_master_list->StartRec - 1);
} elseif (!$v110_bukti_master->AllowAddDeleteRow && $v110_bukti_master_list->StopRec == 0) {
	$v110_bukti_master_list->StopRec = $v110_bukti_master->GridAddRowCount;
}

// Initialize aggregate
$v110_bukti_master->RowType = ROWTYPE_AGGREGATEINIT;
$v110_bukti_master->resetAttributes();
$v110_bukti_master_list->renderRow();
while ($v110_bukti_master_list->RecCnt < $v110_bukti_master_list->StopRec) {
	$v110_bukti_master_list->RecCnt++;
	if ($v110_bukti_master_list->RecCnt >= $v110_bukti_master_list->StartRec) {
		$v110_bukti_master_list->RowCnt++;

		// Set up key count
		$v110_bukti_master_list->KeyCount = $v110_bukti_master_list->RowIndex;

		// Init row class and style
		$v110_bukti_master->resetAttributes();
		$v110_bukti_master->CssClass = "";
		if ($v110_bukti_master->isGridAdd()) {
		} else {
			$v110_bukti_master_list->loadRowValues($v110_bukti_master_list->Recordset); // Load row values
		}
		$v110_bukti_master->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$v110_bukti_master->RowAttrs = array_merge($v110_bukti_master->RowAttrs, array('data-rowindex'=>$v110_bukti_master_list->RowCnt, 'id'=>'r' . $v110_bukti_master_list->RowCnt . '_v110_bukti_master', 'data-rowtype'=>$v110_bukti_master->RowType));

		// Render row
		$v110_bukti_master_list->renderRow();

		// Render list options
		$v110_bukti_master_list->renderListOptions();
?>
	<tr<?php echo $v110_bukti_master->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v110_bukti_master_list->ListOptions->render("body", "left", $v110_bukti_master_list->RowCnt);
?>
	<?php if ($v110_bukti_master->periodebulan->Visible) { // periodebulan ?>
		<td data-name="periodebulan"<?php echo $v110_bukti_master->periodebulan->cellAttributes() ?>>
<span id="el<?php echo $v110_bukti_master_list->RowCnt ?>_v110_bukti_master_periodebulan" class="v110_bukti_master_periodebulan">
<span<?php echo $v110_bukti_master->periodebulan->viewAttributes() ?>>
<?php echo $v110_bukti_master->periodebulan->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v110_bukti_master->tglbayar->Visible) { // tglbayar ?>
		<td data-name="tglbayar"<?php echo $v110_bukti_master->tglbayar->cellAttributes() ?>>
<span id="el<?php echo $v110_bukti_master_list->RowCnt ?>_v110_bukti_master_tglbayar" class="v110_bukti_master_tglbayar">
<span<?php echo $v110_bukti_master->tglbayar->viewAttributes() ?>>
<?php echo $v110_bukti_master->tglbayar->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v110_bukti_master->totalbayar->Visible) { // totalbayar ?>
		<td data-name="totalbayar"<?php echo $v110_bukti_master->totalbayar->cellAttributes() ?>>
<span id="el<?php echo $v110_bukti_master_list->RowCnt ?>_v110_bukti_master_totalbayar" class="v110_bukti_master_totalbayar">
<span<?php echo $v110_bukti_master->totalbayar->viewAttributes() ?>>
<?php echo $v110_bukti_master->totalbayar->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$v110_bukti_master_list->ListOptions->render("body", "right", $v110_bukti_master_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$v110_bukti_master->isGridAdd())
		$v110_bukti_master_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$v110_bukti_master->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($v110_bukti_master_list->Recordset)
	$v110_bukti_master_list->Recordset->Close();
?>
<?php if (!$v110_bukti_master->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$v110_bukti_master->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($v110_bukti_master_list->Pager)) $v110_bukti_master_list->Pager = new PrevNextPager($v110_bukti_master_list->StartRec, $v110_bukti_master_list->DisplayRecs, $v110_bukti_master_list->TotalRecs, $v110_bukti_master_list->AutoHidePager) ?>
<?php if ($v110_bukti_master_list->Pager->RecordCount > 0 && $v110_bukti_master_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($v110_bukti_master_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $v110_bukti_master_list->pageUrl() ?>start=<?php echo $v110_bukti_master_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($v110_bukti_master_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $v110_bukti_master_list->pageUrl() ?>start=<?php echo $v110_bukti_master_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $v110_bukti_master_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($v110_bukti_master_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $v110_bukti_master_list->pageUrl() ?>start=<?php echo $v110_bukti_master_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($v110_bukti_master_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $v110_bukti_master_list->pageUrl() ?>start=<?php echo $v110_bukti_master_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $v110_bukti_master_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($v110_bukti_master_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $v110_bukti_master_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $v110_bukti_master_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $v110_bukti_master_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($v110_bukti_master_list->TotalRecs > 0 && (!$v110_bukti_master_list->AutoHidePageSizeSelector || $v110_bukti_master_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="v110_bukti_master">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($v110_bukti_master_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($v110_bukti_master_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="30"<?php if ($v110_bukti_master_list->DisplayRecs == 30) { ?> selected<?php } ?>>30</option>
<option value="50"<?php if ($v110_bukti_master_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($v110_bukti_master_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($v110_bukti_master->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v110_bukti_master_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($v110_bukti_master_list->TotalRecs == 0 && !$v110_bukti_master->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $v110_bukti_master_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$v110_bukti_master_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$v110_bukti_master->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$v110_bukti_master_list->terminate();
?>