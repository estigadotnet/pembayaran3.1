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
$t101_daf_kelas_list = new t101_daf_kelas_list();

// Run the page
$t101_daf_kelas_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t101_daf_kelas_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t101_daf_kelas->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var ft101_daf_kelaslist = currentForm = new ew.Form("ft101_daf_kelaslist", "list");
ft101_daf_kelaslist.formKeyCountName = '<?php echo $t101_daf_kelas_list->FormKeyCountName ?>';

// Form_CustomValidate event
ft101_daf_kelaslist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft101_daf_kelaslist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft101_daf_kelaslist.lists["x_tahun_ajaran_id"] = <?php echo $t101_daf_kelas_list->tahun_ajaran_id->Lookup->toClientList() ?>;
ft101_daf_kelaslist.lists["x_tahun_ajaran_id"].options = <?php echo JsonEncode($t101_daf_kelas_list->tahun_ajaran_id->lookupOptions()) ?>;
ft101_daf_kelaslist.lists["x_sekolah_id"] = <?php echo $t101_daf_kelas_list->sekolah_id->Lookup->toClientList() ?>;
ft101_daf_kelaslist.lists["x_sekolah_id"].options = <?php echo JsonEncode($t101_daf_kelas_list->sekolah_id->lookupOptions()) ?>;
ft101_daf_kelaslist.lists["x_kelas_id"] = <?php echo $t101_daf_kelas_list->kelas_id->Lookup->toClientList() ?>;
ft101_daf_kelaslist.lists["x_kelas_id"].options = <?php echo JsonEncode($t101_daf_kelas_list->kelas_id->lookupOptions()) ?>;

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
<?php if (!$t101_daf_kelas->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t101_daf_kelas_list->TotalRecs > 0 && $t101_daf_kelas_list->ExportOptions->visible()) { ?>
<?php $t101_daf_kelas_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t101_daf_kelas_list->ImportOptions->visible()) { ?>
<?php $t101_daf_kelas_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t101_daf_kelas_list->renderOtherOptions();
?>
<?php $t101_daf_kelas_list->showPageHeader(); ?>
<?php
$t101_daf_kelas_list->showMessage();
?>
<?php if ($t101_daf_kelas_list->TotalRecs > 0 || $t101_daf_kelas->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t101_daf_kelas_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t101_daf_kelas">
<form name="ft101_daf_kelaslist" id="ft101_daf_kelaslist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t101_daf_kelas_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t101_daf_kelas_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t101_daf_kelas">
<div id="gmp_t101_daf_kelas" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($t101_daf_kelas_list->TotalRecs > 0 || $t101_daf_kelas->isGridEdit()) { ?>
<table id="tbl_t101_daf_kelaslist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t101_daf_kelas_list->RowType = ROWTYPE_HEADER;

// Render list options
$t101_daf_kelas_list->renderListOptions();

// Render list options (header, left)
$t101_daf_kelas_list->ListOptions->render("header", "left");
?>
<?php if ($t101_daf_kelas->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
	<?php if ($t101_daf_kelas->sortUrl($t101_daf_kelas->tahun_ajaran_id) == "") { ?>
		<th data-name="tahun_ajaran_id" class="<?php echo $t101_daf_kelas->tahun_ajaran_id->headerCellClass() ?>"><div id="elh_t101_daf_kelas_tahun_ajaran_id" class="t101_daf_kelas_tahun_ajaran_id"><div class="ew-table-header-caption"><?php echo $t101_daf_kelas->tahun_ajaran_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tahun_ajaran_id" class="<?php echo $t101_daf_kelas->tahun_ajaran_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t101_daf_kelas->SortUrl($t101_daf_kelas->tahun_ajaran_id) ?>',2);"><div id="elh_t101_daf_kelas_tahun_ajaran_id" class="t101_daf_kelas_tahun_ajaran_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t101_daf_kelas->tahun_ajaran_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t101_daf_kelas->tahun_ajaran_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t101_daf_kelas->tahun_ajaran_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t101_daf_kelas->sekolah_id->Visible) { // sekolah_id ?>
	<?php if ($t101_daf_kelas->sortUrl($t101_daf_kelas->sekolah_id) == "") { ?>
		<th data-name="sekolah_id" class="<?php echo $t101_daf_kelas->sekolah_id->headerCellClass() ?>"><div id="elh_t101_daf_kelas_sekolah_id" class="t101_daf_kelas_sekolah_id"><div class="ew-table-header-caption"><?php echo $t101_daf_kelas->sekolah_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="sekolah_id" class="<?php echo $t101_daf_kelas->sekolah_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t101_daf_kelas->SortUrl($t101_daf_kelas->sekolah_id) ?>',2);"><div id="elh_t101_daf_kelas_sekolah_id" class="t101_daf_kelas_sekolah_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t101_daf_kelas->sekolah_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t101_daf_kelas->sekolah_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t101_daf_kelas->sekolah_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t101_daf_kelas->kelas_id->Visible) { // kelas_id ?>
	<?php if ($t101_daf_kelas->sortUrl($t101_daf_kelas->kelas_id) == "") { ?>
		<th data-name="kelas_id" class="<?php echo $t101_daf_kelas->kelas_id->headerCellClass() ?>"><div id="elh_t101_daf_kelas_kelas_id" class="t101_daf_kelas_kelas_id"><div class="ew-table-header-caption"><?php echo $t101_daf_kelas->kelas_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="kelas_id" class="<?php echo $t101_daf_kelas->kelas_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t101_daf_kelas->SortUrl($t101_daf_kelas->kelas_id) ?>',2);"><div id="elh_t101_daf_kelas_kelas_id" class="t101_daf_kelas_kelas_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t101_daf_kelas->kelas_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t101_daf_kelas->kelas_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t101_daf_kelas->kelas_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t101_daf_kelas_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t101_daf_kelas->ExportAll && $t101_daf_kelas->isExport()) {
	$t101_daf_kelas_list->StopRec = $t101_daf_kelas_list->TotalRecs;
} else {

	// Set the last record to display
	if ($t101_daf_kelas_list->TotalRecs > $t101_daf_kelas_list->StartRec + $t101_daf_kelas_list->DisplayRecs - 1)
		$t101_daf_kelas_list->StopRec = $t101_daf_kelas_list->StartRec + $t101_daf_kelas_list->DisplayRecs - 1;
	else
		$t101_daf_kelas_list->StopRec = $t101_daf_kelas_list->TotalRecs;
}
$t101_daf_kelas_list->RecCnt = $t101_daf_kelas_list->StartRec - 1;
if ($t101_daf_kelas_list->Recordset && !$t101_daf_kelas_list->Recordset->EOF) {
	$t101_daf_kelas_list->Recordset->moveFirst();
	$selectLimit = $t101_daf_kelas_list->UseSelectLimit;
	if (!$selectLimit && $t101_daf_kelas_list->StartRec > 1)
		$t101_daf_kelas_list->Recordset->move($t101_daf_kelas_list->StartRec - 1);
} elseif (!$t101_daf_kelas->AllowAddDeleteRow && $t101_daf_kelas_list->StopRec == 0) {
	$t101_daf_kelas_list->StopRec = $t101_daf_kelas->GridAddRowCount;
}

// Initialize aggregate
$t101_daf_kelas->RowType = ROWTYPE_AGGREGATEINIT;
$t101_daf_kelas->resetAttributes();
$t101_daf_kelas_list->renderRow();
while ($t101_daf_kelas_list->RecCnt < $t101_daf_kelas_list->StopRec) {
	$t101_daf_kelas_list->RecCnt++;
	if ($t101_daf_kelas_list->RecCnt >= $t101_daf_kelas_list->StartRec) {
		$t101_daf_kelas_list->RowCnt++;

		// Set up key count
		$t101_daf_kelas_list->KeyCount = $t101_daf_kelas_list->RowIndex;

		// Init row class and style
		$t101_daf_kelas->resetAttributes();
		$t101_daf_kelas->CssClass = "";
		if ($t101_daf_kelas->isGridAdd()) {
		} else {
			$t101_daf_kelas_list->loadRowValues($t101_daf_kelas_list->Recordset); // Load row values
		}
		$t101_daf_kelas->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t101_daf_kelas->RowAttrs = array_merge($t101_daf_kelas->RowAttrs, array('data-rowindex'=>$t101_daf_kelas_list->RowCnt, 'id'=>'r' . $t101_daf_kelas_list->RowCnt . '_t101_daf_kelas', 'data-rowtype'=>$t101_daf_kelas->RowType));

		// Render row
		$t101_daf_kelas_list->renderRow();

		// Render list options
		$t101_daf_kelas_list->renderListOptions();
?>
	<tr<?php echo $t101_daf_kelas->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t101_daf_kelas_list->ListOptions->render("body", "left", $t101_daf_kelas_list->RowCnt);
?>
	<?php if ($t101_daf_kelas->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
		<td data-name="tahun_ajaran_id"<?php echo $t101_daf_kelas->tahun_ajaran_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_list->RowCnt ?>_t101_daf_kelas_tahun_ajaran_id" class="t101_daf_kelas_tahun_ajaran_id">
<span<?php echo $t101_daf_kelas->tahun_ajaran_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->tahun_ajaran_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t101_daf_kelas->sekolah_id->Visible) { // sekolah_id ?>
		<td data-name="sekolah_id"<?php echo $t101_daf_kelas->sekolah_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_list->RowCnt ?>_t101_daf_kelas_sekolah_id" class="t101_daf_kelas_sekolah_id">
<span<?php echo $t101_daf_kelas->sekolah_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->sekolah_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t101_daf_kelas->kelas_id->Visible) { // kelas_id ?>
		<td data-name="kelas_id"<?php echo $t101_daf_kelas->kelas_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_list->RowCnt ?>_t101_daf_kelas_kelas_id" class="t101_daf_kelas_kelas_id">
<span<?php echo $t101_daf_kelas->kelas_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->kelas_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t101_daf_kelas_list->ListOptions->render("body", "right", $t101_daf_kelas_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$t101_daf_kelas->isGridAdd())
		$t101_daf_kelas_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$t101_daf_kelas->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t101_daf_kelas_list->Recordset)
	$t101_daf_kelas_list->Recordset->Close();
?>
<?php if (!$t101_daf_kelas->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t101_daf_kelas->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($t101_daf_kelas_list->Pager)) $t101_daf_kelas_list->Pager = new PrevNextPager($t101_daf_kelas_list->StartRec, $t101_daf_kelas_list->DisplayRecs, $t101_daf_kelas_list->TotalRecs, $t101_daf_kelas_list->AutoHidePager) ?>
<?php if ($t101_daf_kelas_list->Pager->RecordCount > 0 && $t101_daf_kelas_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($t101_daf_kelas_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $t101_daf_kelas_list->pageUrl() ?>start=<?php echo $t101_daf_kelas_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($t101_daf_kelas_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $t101_daf_kelas_list->pageUrl() ?>start=<?php echo $t101_daf_kelas_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $t101_daf_kelas_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($t101_daf_kelas_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $t101_daf_kelas_list->pageUrl() ?>start=<?php echo $t101_daf_kelas_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($t101_daf_kelas_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $t101_daf_kelas_list->pageUrl() ?>start=<?php echo $t101_daf_kelas_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $t101_daf_kelas_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($t101_daf_kelas_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t101_daf_kelas_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t101_daf_kelas_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t101_daf_kelas_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($t101_daf_kelas_list->TotalRecs > 0 && (!$t101_daf_kelas_list->AutoHidePageSizeSelector || $t101_daf_kelas_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="t101_daf_kelas">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($t101_daf_kelas_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($t101_daf_kelas_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="30"<?php if ($t101_daf_kelas_list->DisplayRecs == 30) { ?> selected<?php } ?>>30</option>
<option value="50"<?php if ($t101_daf_kelas_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($t101_daf_kelas_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($t101_daf_kelas->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t101_daf_kelas_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t101_daf_kelas_list->TotalRecs == 0 && !$t101_daf_kelas->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t101_daf_kelas_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t101_daf_kelas_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t101_daf_kelas->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t101_daf_kelas_list->terminate();
?>