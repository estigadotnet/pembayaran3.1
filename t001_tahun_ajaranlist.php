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
$t001_tahun_ajaran_list = new t001_tahun_ajaran_list();

// Run the page
$t001_tahun_ajaran_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t001_tahun_ajaran_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t001_tahun_ajaran->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var ft001_tahun_ajaranlist = currentForm = new ew.Form("ft001_tahun_ajaranlist", "list");
ft001_tahun_ajaranlist.formKeyCountName = '<?php echo $t001_tahun_ajaran_list->FormKeyCountName ?>';

// Form_CustomValidate event
ft001_tahun_ajaranlist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft001_tahun_ajaranlist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft001_tahun_ajaranlist.lists["x_Aktif[]"] = <?php echo $t001_tahun_ajaran_list->Aktif->Lookup->toClientList() ?>;
ft001_tahun_ajaranlist.lists["x_Aktif[]"].options = <?php echo JsonEncode($t001_tahun_ajaran_list->Aktif->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script src="phpjs/ewscrolltable.js"></script>
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
<?php if (!$t001_tahun_ajaran->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t001_tahun_ajaran_list->TotalRecs > 0 && $t001_tahun_ajaran_list->ExportOptions->visible()) { ?>
<?php $t001_tahun_ajaran_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t001_tahun_ajaran_list->ImportOptions->visible()) { ?>
<?php $t001_tahun_ajaran_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t001_tahun_ajaran_list->renderOtherOptions();
?>
<?php $t001_tahun_ajaran_list->showPageHeader(); ?>
<?php
$t001_tahun_ajaran_list->showMessage();
?>
<?php if ($t001_tahun_ajaran_list->TotalRecs > 0 || $t001_tahun_ajaran->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t001_tahun_ajaran_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t001_tahun_ajaran">
<form name="ft001_tahun_ajaranlist" id="ft001_tahun_ajaranlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t001_tahun_ajaran_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t001_tahun_ajaran_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t001_tahun_ajaran">
<div id="gmp_t001_tahun_ajaran" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($t001_tahun_ajaran_list->TotalRecs > 0 || $t001_tahun_ajaran->isGridEdit()) { ?>
<table id="tbl_t001_tahun_ajaranlist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t001_tahun_ajaran_list->RowType = ROWTYPE_HEADER;

// Render list options
$t001_tahun_ajaran_list->renderListOptions();

// Render list options (header, left)
$t001_tahun_ajaran_list->ListOptions->render("header", "left");
?>
<?php if ($t001_tahun_ajaran->Mulai->Visible) { // Mulai ?>
	<?php if ($t001_tahun_ajaran->sortUrl($t001_tahun_ajaran->Mulai) == "") { ?>
		<th data-name="Mulai" class="<?php echo $t001_tahun_ajaran->Mulai->headerCellClass() ?>"><div id="elh_t001_tahun_ajaran_Mulai" class="t001_tahun_ajaran_Mulai"><div class="ew-table-header-caption"><?php echo $t001_tahun_ajaran->Mulai->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Mulai" class="<?php echo $t001_tahun_ajaran->Mulai->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t001_tahun_ajaran->SortUrl($t001_tahun_ajaran->Mulai) ?>',2);"><div id="elh_t001_tahun_ajaran_Mulai" class="t001_tahun_ajaran_Mulai">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t001_tahun_ajaran->Mulai->caption() ?></span><span class="ew-table-header-sort"><?php if ($t001_tahun_ajaran->Mulai->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t001_tahun_ajaran->Mulai->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t001_tahun_ajaran->Selesai->Visible) { // Selesai ?>
	<?php if ($t001_tahun_ajaran->sortUrl($t001_tahun_ajaran->Selesai) == "") { ?>
		<th data-name="Selesai" class="<?php echo $t001_tahun_ajaran->Selesai->headerCellClass() ?>"><div id="elh_t001_tahun_ajaran_Selesai" class="t001_tahun_ajaran_Selesai"><div class="ew-table-header-caption"><?php echo $t001_tahun_ajaran->Selesai->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Selesai" class="<?php echo $t001_tahun_ajaran->Selesai->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t001_tahun_ajaran->SortUrl($t001_tahun_ajaran->Selesai) ?>',2);"><div id="elh_t001_tahun_ajaran_Selesai" class="t001_tahun_ajaran_Selesai">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t001_tahun_ajaran->Selesai->caption() ?></span><span class="ew-table-header-sort"><?php if ($t001_tahun_ajaran->Selesai->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t001_tahun_ajaran->Selesai->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t001_tahun_ajaran->Aktif->Visible) { // Aktif ?>
	<?php if ($t001_tahun_ajaran->sortUrl($t001_tahun_ajaran->Aktif) == "") { ?>
		<th data-name="Aktif" class="<?php echo $t001_tahun_ajaran->Aktif->headerCellClass() ?>"><div id="elh_t001_tahun_ajaran_Aktif" class="t001_tahun_ajaran_Aktif"><div class="ew-table-header-caption"><?php echo $t001_tahun_ajaran->Aktif->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Aktif" class="<?php echo $t001_tahun_ajaran->Aktif->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t001_tahun_ajaran->SortUrl($t001_tahun_ajaran->Aktif) ?>',2);"><div id="elh_t001_tahun_ajaran_Aktif" class="t001_tahun_ajaran_Aktif">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t001_tahun_ajaran->Aktif->caption() ?></span><span class="ew-table-header-sort"><?php if ($t001_tahun_ajaran->Aktif->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t001_tahun_ajaran->Aktif->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t001_tahun_ajaran_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t001_tahun_ajaran->ExportAll && $t001_tahun_ajaran->isExport()) {
	$t001_tahun_ajaran_list->StopRec = $t001_tahun_ajaran_list->TotalRecs;
} else {

	// Set the last record to display
	if ($t001_tahun_ajaran_list->TotalRecs > $t001_tahun_ajaran_list->StartRec + $t001_tahun_ajaran_list->DisplayRecs - 1)
		$t001_tahun_ajaran_list->StopRec = $t001_tahun_ajaran_list->StartRec + $t001_tahun_ajaran_list->DisplayRecs - 1;
	else
		$t001_tahun_ajaran_list->StopRec = $t001_tahun_ajaran_list->TotalRecs;
}
$t001_tahun_ajaran_list->RecCnt = $t001_tahun_ajaran_list->StartRec - 1;
if ($t001_tahun_ajaran_list->Recordset && !$t001_tahun_ajaran_list->Recordset->EOF) {
	$t001_tahun_ajaran_list->Recordset->moveFirst();
	$selectLimit = $t001_tahun_ajaran_list->UseSelectLimit;
	if (!$selectLimit && $t001_tahun_ajaran_list->StartRec > 1)
		$t001_tahun_ajaran_list->Recordset->move($t001_tahun_ajaran_list->StartRec - 1);
} elseif (!$t001_tahun_ajaran->AllowAddDeleteRow && $t001_tahun_ajaran_list->StopRec == 0) {
	$t001_tahun_ajaran_list->StopRec = $t001_tahun_ajaran->GridAddRowCount;
}

// Initialize aggregate
$t001_tahun_ajaran->RowType = ROWTYPE_AGGREGATEINIT;
$t001_tahun_ajaran->resetAttributes();
$t001_tahun_ajaran_list->renderRow();
while ($t001_tahun_ajaran_list->RecCnt < $t001_tahun_ajaran_list->StopRec) {
	$t001_tahun_ajaran_list->RecCnt++;
	if ($t001_tahun_ajaran_list->RecCnt >= $t001_tahun_ajaran_list->StartRec) {
		$t001_tahun_ajaran_list->RowCnt++;

		// Set up key count
		$t001_tahun_ajaran_list->KeyCount = $t001_tahun_ajaran_list->RowIndex;

		// Init row class and style
		$t001_tahun_ajaran->resetAttributes();
		$t001_tahun_ajaran->CssClass = "";
		if ($t001_tahun_ajaran->isGridAdd()) {
		} else {
			$t001_tahun_ajaran_list->loadRowValues($t001_tahun_ajaran_list->Recordset); // Load row values
		}
		$t001_tahun_ajaran->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t001_tahun_ajaran->RowAttrs = array_merge($t001_tahun_ajaran->RowAttrs, array('data-rowindex'=>$t001_tahun_ajaran_list->RowCnt, 'id'=>'r' . $t001_tahun_ajaran_list->RowCnt . '_t001_tahun_ajaran', 'data-rowtype'=>$t001_tahun_ajaran->RowType));

		// Render row
		$t001_tahun_ajaran_list->renderRow();

		// Render list options
		$t001_tahun_ajaran_list->renderListOptions();
?>
	<tr<?php echo $t001_tahun_ajaran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t001_tahun_ajaran_list->ListOptions->render("body", "left", $t001_tahun_ajaran_list->RowCnt);
?>
	<?php if ($t001_tahun_ajaran->Mulai->Visible) { // Mulai ?>
		<td data-name="Mulai"<?php echo $t001_tahun_ajaran->Mulai->cellAttributes() ?>>
<span id="el<?php echo $t001_tahun_ajaran_list->RowCnt ?>_t001_tahun_ajaran_Mulai" class="t001_tahun_ajaran_Mulai">
<span<?php echo $t001_tahun_ajaran->Mulai->viewAttributes() ?>>
<?php echo $t001_tahun_ajaran->Mulai->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t001_tahun_ajaran->Selesai->Visible) { // Selesai ?>
		<td data-name="Selesai"<?php echo $t001_tahun_ajaran->Selesai->cellAttributes() ?>>
<span id="el<?php echo $t001_tahun_ajaran_list->RowCnt ?>_t001_tahun_ajaran_Selesai" class="t001_tahun_ajaran_Selesai">
<span<?php echo $t001_tahun_ajaran->Selesai->viewAttributes() ?>>
<?php echo $t001_tahun_ajaran->Selesai->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t001_tahun_ajaran->Aktif->Visible) { // Aktif ?>
		<td data-name="Aktif"<?php echo $t001_tahun_ajaran->Aktif->cellAttributes() ?>>
<span id="el<?php echo $t001_tahun_ajaran_list->RowCnt ?>_t001_tahun_ajaran_Aktif" class="t001_tahun_ajaran_Aktif">
<span<?php echo $t001_tahun_ajaran->Aktif->viewAttributes() ?>>
<?php if (ConvertToBool($t001_tahun_ajaran->Aktif->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t001_tahun_ajaran->Aktif->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t001_tahun_ajaran->Aktif->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t001_tahun_ajaran_list->ListOptions->render("body", "right", $t001_tahun_ajaran_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$t001_tahun_ajaran->isGridAdd())
		$t001_tahun_ajaran_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$t001_tahun_ajaran->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t001_tahun_ajaran_list->Recordset)
	$t001_tahun_ajaran_list->Recordset->Close();
?>
<?php if (!$t001_tahun_ajaran->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t001_tahun_ajaran->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($t001_tahun_ajaran_list->Pager)) $t001_tahun_ajaran_list->Pager = new PrevNextPager($t001_tahun_ajaran_list->StartRec, $t001_tahun_ajaran_list->DisplayRecs, $t001_tahun_ajaran_list->TotalRecs, $t001_tahun_ajaran_list->AutoHidePager) ?>
<?php if ($t001_tahun_ajaran_list->Pager->RecordCount > 0 && $t001_tahun_ajaran_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($t001_tahun_ajaran_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $t001_tahun_ajaran_list->pageUrl() ?>start=<?php echo $t001_tahun_ajaran_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($t001_tahun_ajaran_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $t001_tahun_ajaran_list->pageUrl() ?>start=<?php echo $t001_tahun_ajaran_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $t001_tahun_ajaran_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($t001_tahun_ajaran_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $t001_tahun_ajaran_list->pageUrl() ?>start=<?php echo $t001_tahun_ajaran_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($t001_tahun_ajaran_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $t001_tahun_ajaran_list->pageUrl() ?>start=<?php echo $t001_tahun_ajaran_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $t001_tahun_ajaran_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($t001_tahun_ajaran_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t001_tahun_ajaran_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t001_tahun_ajaran_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t001_tahun_ajaran_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($t001_tahun_ajaran_list->TotalRecs > 0 && (!$t001_tahun_ajaran_list->AutoHidePageSizeSelector || $t001_tahun_ajaran_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="t001_tahun_ajaran">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($t001_tahun_ajaran_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($t001_tahun_ajaran_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="50"<?php if ($t001_tahun_ajaran_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($t001_tahun_ajaran_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($t001_tahun_ajaran->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t001_tahun_ajaran_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t001_tahun_ajaran_list->TotalRecs == 0 && !$t001_tahun_ajaran->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t001_tahun_ajaran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t001_tahun_ajaran_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t001_tahun_ajaran->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php if (!$t001_tahun_ajaran->isExport()) { ?>
<script>
ew.scrollableTable("gmp_t001_tahun_ajaran", "100%", "100%");
</script>
<?php } ?>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t001_tahun_ajaran_list->terminate();
?>