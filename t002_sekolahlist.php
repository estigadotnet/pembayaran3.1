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
$t002_sekolah_list = new t002_sekolah_list();

// Run the page
$t002_sekolah_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t002_sekolah_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t002_sekolah->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var ft002_sekolahlist = currentForm = new ew.Form("ft002_sekolahlist", "list");
ft002_sekolahlist.formKeyCountName = '<?php echo $t002_sekolah_list->FormKeyCountName ?>';

// Form_CustomValidate event
ft002_sekolahlist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft002_sekolahlist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

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
<?php if (!$t002_sekolah->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t002_sekolah_list->TotalRecs > 0 && $t002_sekolah_list->ExportOptions->visible()) { ?>
<?php $t002_sekolah_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t002_sekolah_list->ImportOptions->visible()) { ?>
<?php $t002_sekolah_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t002_sekolah_list->renderOtherOptions();
?>
<?php $t002_sekolah_list->showPageHeader(); ?>
<?php
$t002_sekolah_list->showMessage();
?>
<?php if ($t002_sekolah_list->TotalRecs > 0 || $t002_sekolah->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t002_sekolah_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t002_sekolah">
<form name="ft002_sekolahlist" id="ft002_sekolahlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t002_sekolah_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t002_sekolah_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t002_sekolah">
<div id="gmp_t002_sekolah" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($t002_sekolah_list->TotalRecs > 0 || $t002_sekolah->isGridEdit()) { ?>
<table id="tbl_t002_sekolahlist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t002_sekolah_list->RowType = ROWTYPE_HEADER;

// Render list options
$t002_sekolah_list->renderListOptions();

// Render list options (header, left)
$t002_sekolah_list->ListOptions->render("header", "left");
?>
<?php if ($t002_sekolah->Nama->Visible) { // Nama ?>
	<?php if ($t002_sekolah->sortUrl($t002_sekolah->Nama) == "") { ?>
		<th data-name="Nama" class="<?php echo $t002_sekolah->Nama->headerCellClass() ?>"><div id="elh_t002_sekolah_Nama" class="t002_sekolah_Nama"><div class="ew-table-header-caption"><?php echo $t002_sekolah->Nama->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Nama" class="<?php echo $t002_sekolah->Nama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t002_sekolah->SortUrl($t002_sekolah->Nama) ?>',2);"><div id="elh_t002_sekolah_Nama" class="t002_sekolah_Nama">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t002_sekolah->Nama->caption() ?></span><span class="ew-table-header-sort"><?php if ($t002_sekolah->Nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t002_sekolah->Nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t002_sekolah->Alamat->Visible) { // Alamat ?>
	<?php if ($t002_sekolah->sortUrl($t002_sekolah->Alamat) == "") { ?>
		<th data-name="Alamat" class="<?php echo $t002_sekolah->Alamat->headerCellClass() ?>"><div id="elh_t002_sekolah_Alamat" class="t002_sekolah_Alamat"><div class="ew-table-header-caption"><?php echo $t002_sekolah->Alamat->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Alamat" class="<?php echo $t002_sekolah->Alamat->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t002_sekolah->SortUrl($t002_sekolah->Alamat) ?>',2);"><div id="elh_t002_sekolah_Alamat" class="t002_sekolah_Alamat">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t002_sekolah->Alamat->caption() ?></span><span class="ew-table-header-sort"><?php if ($t002_sekolah->Alamat->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t002_sekolah->Alamat->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t002_sekolah_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t002_sekolah->ExportAll && $t002_sekolah->isExport()) {
	$t002_sekolah_list->StopRec = $t002_sekolah_list->TotalRecs;
} else {

	// Set the last record to display
	if ($t002_sekolah_list->TotalRecs > $t002_sekolah_list->StartRec + $t002_sekolah_list->DisplayRecs - 1)
		$t002_sekolah_list->StopRec = $t002_sekolah_list->StartRec + $t002_sekolah_list->DisplayRecs - 1;
	else
		$t002_sekolah_list->StopRec = $t002_sekolah_list->TotalRecs;
}
$t002_sekolah_list->RecCnt = $t002_sekolah_list->StartRec - 1;
if ($t002_sekolah_list->Recordset && !$t002_sekolah_list->Recordset->EOF) {
	$t002_sekolah_list->Recordset->moveFirst();
	$selectLimit = $t002_sekolah_list->UseSelectLimit;
	if (!$selectLimit && $t002_sekolah_list->StartRec > 1)
		$t002_sekolah_list->Recordset->move($t002_sekolah_list->StartRec - 1);
} elseif (!$t002_sekolah->AllowAddDeleteRow && $t002_sekolah_list->StopRec == 0) {
	$t002_sekolah_list->StopRec = $t002_sekolah->GridAddRowCount;
}

// Initialize aggregate
$t002_sekolah->RowType = ROWTYPE_AGGREGATEINIT;
$t002_sekolah->resetAttributes();
$t002_sekolah_list->renderRow();
while ($t002_sekolah_list->RecCnt < $t002_sekolah_list->StopRec) {
	$t002_sekolah_list->RecCnt++;
	if ($t002_sekolah_list->RecCnt >= $t002_sekolah_list->StartRec) {
		$t002_sekolah_list->RowCnt++;

		// Set up key count
		$t002_sekolah_list->KeyCount = $t002_sekolah_list->RowIndex;

		// Init row class and style
		$t002_sekolah->resetAttributes();
		$t002_sekolah->CssClass = "";
		if ($t002_sekolah->isGridAdd()) {
		} else {
			$t002_sekolah_list->loadRowValues($t002_sekolah_list->Recordset); // Load row values
		}
		$t002_sekolah->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t002_sekolah->RowAttrs = array_merge($t002_sekolah->RowAttrs, array('data-rowindex'=>$t002_sekolah_list->RowCnt, 'id'=>'r' . $t002_sekolah_list->RowCnt . '_t002_sekolah', 'data-rowtype'=>$t002_sekolah->RowType));

		// Render row
		$t002_sekolah_list->renderRow();

		// Render list options
		$t002_sekolah_list->renderListOptions();
?>
	<tr<?php echo $t002_sekolah->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t002_sekolah_list->ListOptions->render("body", "left", $t002_sekolah_list->RowCnt);
?>
	<?php if ($t002_sekolah->Nama->Visible) { // Nama ?>
		<td data-name="Nama"<?php echo $t002_sekolah->Nama->cellAttributes() ?>>
<span id="el<?php echo $t002_sekolah_list->RowCnt ?>_t002_sekolah_Nama" class="t002_sekolah_Nama">
<span<?php echo $t002_sekolah->Nama->viewAttributes() ?>>
<?php echo $t002_sekolah->Nama->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t002_sekolah->Alamat->Visible) { // Alamat ?>
		<td data-name="Alamat"<?php echo $t002_sekolah->Alamat->cellAttributes() ?>>
<span id="el<?php echo $t002_sekolah_list->RowCnt ?>_t002_sekolah_Alamat" class="t002_sekolah_Alamat">
<span<?php echo $t002_sekolah->Alamat->viewAttributes() ?>>
<?php echo $t002_sekolah->Alamat->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t002_sekolah_list->ListOptions->render("body", "right", $t002_sekolah_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$t002_sekolah->isGridAdd())
		$t002_sekolah_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$t002_sekolah->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t002_sekolah_list->Recordset)
	$t002_sekolah_list->Recordset->Close();
?>
<?php if (!$t002_sekolah->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t002_sekolah->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($t002_sekolah_list->Pager)) $t002_sekolah_list->Pager = new PrevNextPager($t002_sekolah_list->StartRec, $t002_sekolah_list->DisplayRecs, $t002_sekolah_list->TotalRecs, $t002_sekolah_list->AutoHidePager) ?>
<?php if ($t002_sekolah_list->Pager->RecordCount > 0 && $t002_sekolah_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($t002_sekolah_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $t002_sekolah_list->pageUrl() ?>start=<?php echo $t002_sekolah_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($t002_sekolah_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $t002_sekolah_list->pageUrl() ?>start=<?php echo $t002_sekolah_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $t002_sekolah_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($t002_sekolah_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $t002_sekolah_list->pageUrl() ?>start=<?php echo $t002_sekolah_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($t002_sekolah_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $t002_sekolah_list->pageUrl() ?>start=<?php echo $t002_sekolah_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $t002_sekolah_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($t002_sekolah_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t002_sekolah_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t002_sekolah_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t002_sekolah_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($t002_sekolah_list->TotalRecs > 0 && (!$t002_sekolah_list->AutoHidePageSizeSelector || $t002_sekolah_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="t002_sekolah">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($t002_sekolah_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($t002_sekolah_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="30"<?php if ($t002_sekolah_list->DisplayRecs == 30) { ?> selected<?php } ?>>30</option>
<option value="50"<?php if ($t002_sekolah_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($t002_sekolah_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($t002_sekolah->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t002_sekolah_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t002_sekolah_list->TotalRecs == 0 && !$t002_sekolah->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t002_sekolah_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t002_sekolah_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t002_sekolah->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t002_sekolah_list->terminate();
?>