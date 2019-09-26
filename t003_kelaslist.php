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
$t003_kelas_list = new t003_kelas_list();

// Run the page
$t003_kelas_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t003_kelas_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t003_kelas->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var ft003_kelaslist = currentForm = new ew.Form("ft003_kelaslist", "list");
ft003_kelaslist.formKeyCountName = '<?php echo $t003_kelas_list->FormKeyCountName ?>';

// Form_CustomValidate event
ft003_kelaslist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft003_kelaslist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

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
<?php if (!$t003_kelas->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t003_kelas_list->TotalRecs > 0 && $t003_kelas_list->ExportOptions->visible()) { ?>
<?php $t003_kelas_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t003_kelas_list->ImportOptions->visible()) { ?>
<?php $t003_kelas_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t003_kelas_list->renderOtherOptions();
?>
<?php $t003_kelas_list->showPageHeader(); ?>
<?php
$t003_kelas_list->showMessage();
?>
<?php if ($t003_kelas_list->TotalRecs > 0 || $t003_kelas->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t003_kelas_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t003_kelas">
<form name="ft003_kelaslist" id="ft003_kelaslist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t003_kelas_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t003_kelas_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t003_kelas">
<div id="gmp_t003_kelas" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($t003_kelas_list->TotalRecs > 0 || $t003_kelas->isGridEdit()) { ?>
<table id="tbl_t003_kelaslist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t003_kelas_list->RowType = ROWTYPE_HEADER;

// Render list options
$t003_kelas_list->renderListOptions();

// Render list options (header, left)
$t003_kelas_list->ListOptions->render("header", "left");
?>
<?php if ($t003_kelas->Nama->Visible) { // Nama ?>
	<?php if ($t003_kelas->sortUrl($t003_kelas->Nama) == "") { ?>
		<th data-name="Nama" class="<?php echo $t003_kelas->Nama->headerCellClass() ?>"><div id="elh_t003_kelas_Nama" class="t003_kelas_Nama"><div class="ew-table-header-caption"><?php echo $t003_kelas->Nama->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Nama" class="<?php echo $t003_kelas->Nama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t003_kelas->SortUrl($t003_kelas->Nama) ?>',2);"><div id="elh_t003_kelas_Nama" class="t003_kelas_Nama">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t003_kelas->Nama->caption() ?></span><span class="ew-table-header-sort"><?php if ($t003_kelas->Nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t003_kelas->Nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t003_kelas_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t003_kelas->ExportAll && $t003_kelas->isExport()) {
	$t003_kelas_list->StopRec = $t003_kelas_list->TotalRecs;
} else {

	// Set the last record to display
	if ($t003_kelas_list->TotalRecs > $t003_kelas_list->StartRec + $t003_kelas_list->DisplayRecs - 1)
		$t003_kelas_list->StopRec = $t003_kelas_list->StartRec + $t003_kelas_list->DisplayRecs - 1;
	else
		$t003_kelas_list->StopRec = $t003_kelas_list->TotalRecs;
}
$t003_kelas_list->RecCnt = $t003_kelas_list->StartRec - 1;
if ($t003_kelas_list->Recordset && !$t003_kelas_list->Recordset->EOF) {
	$t003_kelas_list->Recordset->moveFirst();
	$selectLimit = $t003_kelas_list->UseSelectLimit;
	if (!$selectLimit && $t003_kelas_list->StartRec > 1)
		$t003_kelas_list->Recordset->move($t003_kelas_list->StartRec - 1);
} elseif (!$t003_kelas->AllowAddDeleteRow && $t003_kelas_list->StopRec == 0) {
	$t003_kelas_list->StopRec = $t003_kelas->GridAddRowCount;
}

// Initialize aggregate
$t003_kelas->RowType = ROWTYPE_AGGREGATEINIT;
$t003_kelas->resetAttributes();
$t003_kelas_list->renderRow();
while ($t003_kelas_list->RecCnt < $t003_kelas_list->StopRec) {
	$t003_kelas_list->RecCnt++;
	if ($t003_kelas_list->RecCnt >= $t003_kelas_list->StartRec) {
		$t003_kelas_list->RowCnt++;

		// Set up key count
		$t003_kelas_list->KeyCount = $t003_kelas_list->RowIndex;

		// Init row class and style
		$t003_kelas->resetAttributes();
		$t003_kelas->CssClass = "";
		if ($t003_kelas->isGridAdd()) {
		} else {
			$t003_kelas_list->loadRowValues($t003_kelas_list->Recordset); // Load row values
		}
		$t003_kelas->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t003_kelas->RowAttrs = array_merge($t003_kelas->RowAttrs, array('data-rowindex'=>$t003_kelas_list->RowCnt, 'id'=>'r' . $t003_kelas_list->RowCnt . '_t003_kelas', 'data-rowtype'=>$t003_kelas->RowType));

		// Render row
		$t003_kelas_list->renderRow();

		// Render list options
		$t003_kelas_list->renderListOptions();
?>
	<tr<?php echo $t003_kelas->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t003_kelas_list->ListOptions->render("body", "left", $t003_kelas_list->RowCnt);
?>
	<?php if ($t003_kelas->Nama->Visible) { // Nama ?>
		<td data-name="Nama"<?php echo $t003_kelas->Nama->cellAttributes() ?>>
<span id="el<?php echo $t003_kelas_list->RowCnt ?>_t003_kelas_Nama" class="t003_kelas_Nama">
<span<?php echo $t003_kelas->Nama->viewAttributes() ?>>
<?php echo $t003_kelas->Nama->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t003_kelas_list->ListOptions->render("body", "right", $t003_kelas_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$t003_kelas->isGridAdd())
		$t003_kelas_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$t003_kelas->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t003_kelas_list->Recordset)
	$t003_kelas_list->Recordset->Close();
?>
<?php if (!$t003_kelas->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t003_kelas->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($t003_kelas_list->Pager)) $t003_kelas_list->Pager = new PrevNextPager($t003_kelas_list->StartRec, $t003_kelas_list->DisplayRecs, $t003_kelas_list->TotalRecs, $t003_kelas_list->AutoHidePager) ?>
<?php if ($t003_kelas_list->Pager->RecordCount > 0 && $t003_kelas_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($t003_kelas_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $t003_kelas_list->pageUrl() ?>start=<?php echo $t003_kelas_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($t003_kelas_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $t003_kelas_list->pageUrl() ?>start=<?php echo $t003_kelas_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $t003_kelas_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($t003_kelas_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $t003_kelas_list->pageUrl() ?>start=<?php echo $t003_kelas_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($t003_kelas_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $t003_kelas_list->pageUrl() ?>start=<?php echo $t003_kelas_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $t003_kelas_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($t003_kelas_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t003_kelas_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t003_kelas_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t003_kelas_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($t003_kelas_list->TotalRecs > 0 && (!$t003_kelas_list->AutoHidePageSizeSelector || $t003_kelas_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="t003_kelas">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($t003_kelas_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($t003_kelas_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="50"<?php if ($t003_kelas_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($t003_kelas_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($t003_kelas->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t003_kelas_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t003_kelas_list->TotalRecs == 0 && !$t003_kelas->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t003_kelas_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t003_kelas_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t003_kelas->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t003_kelas_list->terminate();
?>