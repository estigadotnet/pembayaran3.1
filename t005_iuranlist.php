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
$t005_iuran_list = new t005_iuran_list();

// Run the page
$t005_iuran_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t005_iuran_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t005_iuran->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var ft005_iuranlist = currentForm = new ew.Form("ft005_iuranlist", "list");
ft005_iuranlist.formKeyCountName = '<?php echo $t005_iuran_list->FormKeyCountName ?>';

// Form_CustomValidate event
ft005_iuranlist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft005_iuranlist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft005_iuranlist.lists["x_Jenis"] = <?php echo $t005_iuran_list->Jenis->Lookup->toClientList() ?>;
ft005_iuranlist.lists["x_Jenis"].options = <?php echo JsonEncode($t005_iuran_list->Jenis->options(FALSE, TRUE)) ?>;

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
<?php if (!$t005_iuran->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t005_iuran_list->TotalRecs > 0 && $t005_iuran_list->ExportOptions->visible()) { ?>
<?php $t005_iuran_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t005_iuran_list->ImportOptions->visible()) { ?>
<?php $t005_iuran_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t005_iuran_list->renderOtherOptions();
?>
<?php $t005_iuran_list->showPageHeader(); ?>
<?php
$t005_iuran_list->showMessage();
?>
<?php if ($t005_iuran_list->TotalRecs > 0 || $t005_iuran->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t005_iuran_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t005_iuran">
<form name="ft005_iuranlist" id="ft005_iuranlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t005_iuran_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t005_iuran_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t005_iuran">
<div id="gmp_t005_iuran" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($t005_iuran_list->TotalRecs > 0 || $t005_iuran->isGridEdit()) { ?>
<table id="tbl_t005_iuranlist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t005_iuran_list->RowType = ROWTYPE_HEADER;

// Render list options
$t005_iuran_list->renderListOptions();

// Render list options (header, left)
$t005_iuran_list->ListOptions->render("header", "left");
?>
<?php if ($t005_iuran->Nama->Visible) { // Nama ?>
	<?php if ($t005_iuran->sortUrl($t005_iuran->Nama) == "") { ?>
		<th data-name="Nama" class="<?php echo $t005_iuran->Nama->headerCellClass() ?>"><div id="elh_t005_iuran_Nama" class="t005_iuran_Nama"><div class="ew-table-header-caption"><?php echo $t005_iuran->Nama->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Nama" class="<?php echo $t005_iuran->Nama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t005_iuran->SortUrl($t005_iuran->Nama) ?>',2);"><div id="elh_t005_iuran_Nama" class="t005_iuran_Nama">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t005_iuran->Nama->caption() ?></span><span class="ew-table-header-sort"><?php if ($t005_iuran->Nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t005_iuran->Nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t005_iuran->Jenis->Visible) { // Jenis ?>
	<?php if ($t005_iuran->sortUrl($t005_iuran->Jenis) == "") { ?>
		<th data-name="Jenis" class="<?php echo $t005_iuran->Jenis->headerCellClass() ?>"><div id="elh_t005_iuran_Jenis" class="t005_iuran_Jenis"><div class="ew-table-header-caption"><?php echo $t005_iuran->Jenis->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Jenis" class="<?php echo $t005_iuran->Jenis->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t005_iuran->SortUrl($t005_iuran->Jenis) ?>',2);"><div id="elh_t005_iuran_Jenis" class="t005_iuran_Jenis">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t005_iuran->Jenis->caption() ?></span><span class="ew-table-header-sort"><?php if ($t005_iuran->Jenis->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t005_iuran->Jenis->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t005_iuran_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t005_iuran->ExportAll && $t005_iuran->isExport()) {
	$t005_iuran_list->StopRec = $t005_iuran_list->TotalRecs;
} else {

	// Set the last record to display
	if ($t005_iuran_list->TotalRecs > $t005_iuran_list->StartRec + $t005_iuran_list->DisplayRecs - 1)
		$t005_iuran_list->StopRec = $t005_iuran_list->StartRec + $t005_iuran_list->DisplayRecs - 1;
	else
		$t005_iuran_list->StopRec = $t005_iuran_list->TotalRecs;
}
$t005_iuran_list->RecCnt = $t005_iuran_list->StartRec - 1;
if ($t005_iuran_list->Recordset && !$t005_iuran_list->Recordset->EOF) {
	$t005_iuran_list->Recordset->moveFirst();
	$selectLimit = $t005_iuran_list->UseSelectLimit;
	if (!$selectLimit && $t005_iuran_list->StartRec > 1)
		$t005_iuran_list->Recordset->move($t005_iuran_list->StartRec - 1);
} elseif (!$t005_iuran->AllowAddDeleteRow && $t005_iuran_list->StopRec == 0) {
	$t005_iuran_list->StopRec = $t005_iuran->GridAddRowCount;
}

// Initialize aggregate
$t005_iuran->RowType = ROWTYPE_AGGREGATEINIT;
$t005_iuran->resetAttributes();
$t005_iuran_list->renderRow();
while ($t005_iuran_list->RecCnt < $t005_iuran_list->StopRec) {
	$t005_iuran_list->RecCnt++;
	if ($t005_iuran_list->RecCnt >= $t005_iuran_list->StartRec) {
		$t005_iuran_list->RowCnt++;

		// Set up key count
		$t005_iuran_list->KeyCount = $t005_iuran_list->RowIndex;

		// Init row class and style
		$t005_iuran->resetAttributes();
		$t005_iuran->CssClass = "";
		if ($t005_iuran->isGridAdd()) {
		} else {
			$t005_iuran_list->loadRowValues($t005_iuran_list->Recordset); // Load row values
		}
		$t005_iuran->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t005_iuran->RowAttrs = array_merge($t005_iuran->RowAttrs, array('data-rowindex'=>$t005_iuran_list->RowCnt, 'id'=>'r' . $t005_iuran_list->RowCnt . '_t005_iuran', 'data-rowtype'=>$t005_iuran->RowType));

		// Render row
		$t005_iuran_list->renderRow();

		// Render list options
		$t005_iuran_list->renderListOptions();
?>
	<tr<?php echo $t005_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t005_iuran_list->ListOptions->render("body", "left", $t005_iuran_list->RowCnt);
?>
	<?php if ($t005_iuran->Nama->Visible) { // Nama ?>
		<td data-name="Nama"<?php echo $t005_iuran->Nama->cellAttributes() ?>>
<span id="el<?php echo $t005_iuran_list->RowCnt ?>_t005_iuran_Nama" class="t005_iuran_Nama">
<span<?php echo $t005_iuran->Nama->viewAttributes() ?>>
<?php echo $t005_iuran->Nama->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t005_iuran->Jenis->Visible) { // Jenis ?>
		<td data-name="Jenis"<?php echo $t005_iuran->Jenis->cellAttributes() ?>>
<span id="el<?php echo $t005_iuran_list->RowCnt ?>_t005_iuran_Jenis" class="t005_iuran_Jenis">
<span<?php echo $t005_iuran->Jenis->viewAttributes() ?>>
<?php echo $t005_iuran->Jenis->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t005_iuran_list->ListOptions->render("body", "right", $t005_iuran_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$t005_iuran->isGridAdd())
		$t005_iuran_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$t005_iuran->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t005_iuran_list->Recordset)
	$t005_iuran_list->Recordset->Close();
?>
<?php if (!$t005_iuran->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t005_iuran->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($t005_iuran_list->Pager)) $t005_iuran_list->Pager = new PrevNextPager($t005_iuran_list->StartRec, $t005_iuran_list->DisplayRecs, $t005_iuran_list->TotalRecs, $t005_iuran_list->AutoHidePager) ?>
<?php if ($t005_iuran_list->Pager->RecordCount > 0 && $t005_iuran_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($t005_iuran_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $t005_iuran_list->pageUrl() ?>start=<?php echo $t005_iuran_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($t005_iuran_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $t005_iuran_list->pageUrl() ?>start=<?php echo $t005_iuran_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $t005_iuran_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($t005_iuran_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $t005_iuran_list->pageUrl() ?>start=<?php echo $t005_iuran_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($t005_iuran_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $t005_iuran_list->pageUrl() ?>start=<?php echo $t005_iuran_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $t005_iuran_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($t005_iuran_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t005_iuran_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t005_iuran_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t005_iuran_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($t005_iuran_list->TotalRecs > 0 && (!$t005_iuran_list->AutoHidePageSizeSelector || $t005_iuran_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="t005_iuran">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($t005_iuran_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($t005_iuran_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="30"<?php if ($t005_iuran_list->DisplayRecs == 30) { ?> selected<?php } ?>>30</option>
<option value="50"<?php if ($t005_iuran_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($t005_iuran_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($t005_iuran->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t005_iuran_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t005_iuran_list->TotalRecs == 0 && !$t005_iuran->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t005_iuran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t005_iuran_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t005_iuran->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t005_iuran_list->terminate();
?>