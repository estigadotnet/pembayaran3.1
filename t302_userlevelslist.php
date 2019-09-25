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
$t302_userlevels_list = new t302_userlevels_list();

// Run the page
$t302_userlevels_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t302_userlevels_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t302_userlevels->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var ft302_userlevelslist = currentForm = new ew.Form("ft302_userlevelslist", "list");
ft302_userlevelslist.formKeyCountName = '<?php echo $t302_userlevels_list->FormKeyCountName ?>';

// Form_CustomValidate event
ft302_userlevelslist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft302_userlevelslist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
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
<?php if (!$t302_userlevels->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t302_userlevels_list->TotalRecs > 0 && $t302_userlevels_list->ExportOptions->visible()) { ?>
<?php $t302_userlevels_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t302_userlevels_list->ImportOptions->visible()) { ?>
<?php $t302_userlevels_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t302_userlevels_list->renderOtherOptions();
?>
<?php $t302_userlevels_list->showPageHeader(); ?>
<?php
$t302_userlevels_list->showMessage();
?>
<?php if ($t302_userlevels_list->TotalRecs > 0 || $t302_userlevels->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t302_userlevels_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t302_userlevels">
<form name="ft302_userlevelslist" id="ft302_userlevelslist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t302_userlevels_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t302_userlevels_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t302_userlevels">
<div id="gmp_t302_userlevels" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($t302_userlevels_list->TotalRecs > 0 || $t302_userlevels->isGridEdit()) { ?>
<table id="tbl_t302_userlevelslist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t302_userlevels_list->RowType = ROWTYPE_HEADER;

// Render list options
$t302_userlevels_list->renderListOptions();

// Render list options (header, left)
$t302_userlevels_list->ListOptions->render("header", "left");
?>
<?php if ($t302_userlevels->userlevelid->Visible) { // userlevelid ?>
	<?php if ($t302_userlevels->sortUrl($t302_userlevels->userlevelid) == "") { ?>
		<th data-name="userlevelid" class="<?php echo $t302_userlevels->userlevelid->headerCellClass() ?>"><div id="elh_t302_userlevels_userlevelid" class="t302_userlevels_userlevelid"><div class="ew-table-header-caption"><?php echo $t302_userlevels->userlevelid->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="userlevelid" class="<?php echo $t302_userlevels->userlevelid->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t302_userlevels->SortUrl($t302_userlevels->userlevelid) ?>',2);"><div id="elh_t302_userlevels_userlevelid" class="t302_userlevels_userlevelid">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t302_userlevels->userlevelid->caption() ?></span><span class="ew-table-header-sort"><?php if ($t302_userlevels->userlevelid->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t302_userlevels->userlevelid->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t302_userlevels->userlevelname->Visible) { // userlevelname ?>
	<?php if ($t302_userlevels->sortUrl($t302_userlevels->userlevelname) == "") { ?>
		<th data-name="userlevelname" class="<?php echo $t302_userlevels->userlevelname->headerCellClass() ?>"><div id="elh_t302_userlevels_userlevelname" class="t302_userlevels_userlevelname"><div class="ew-table-header-caption"><?php echo $t302_userlevels->userlevelname->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="userlevelname" class="<?php echo $t302_userlevels->userlevelname->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t302_userlevels->SortUrl($t302_userlevels->userlevelname) ?>',2);"><div id="elh_t302_userlevels_userlevelname" class="t302_userlevels_userlevelname">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t302_userlevels->userlevelname->caption() ?></span><span class="ew-table-header-sort"><?php if ($t302_userlevels->userlevelname->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t302_userlevels->userlevelname->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t302_userlevels_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t302_userlevels->ExportAll && $t302_userlevels->isExport()) {
	$t302_userlevels_list->StopRec = $t302_userlevels_list->TotalRecs;
} else {

	// Set the last record to display
	if ($t302_userlevels_list->TotalRecs > $t302_userlevels_list->StartRec + $t302_userlevels_list->DisplayRecs - 1)
		$t302_userlevels_list->StopRec = $t302_userlevels_list->StartRec + $t302_userlevels_list->DisplayRecs - 1;
	else
		$t302_userlevels_list->StopRec = $t302_userlevels_list->TotalRecs;
}
$t302_userlevels_list->RecCnt = $t302_userlevels_list->StartRec - 1;
if ($t302_userlevels_list->Recordset && !$t302_userlevels_list->Recordset->EOF) {
	$t302_userlevels_list->Recordset->moveFirst();
	$selectLimit = $t302_userlevels_list->UseSelectLimit;
	if (!$selectLimit && $t302_userlevels_list->StartRec > 1)
		$t302_userlevels_list->Recordset->move($t302_userlevels_list->StartRec - 1);
} elseif (!$t302_userlevels->AllowAddDeleteRow && $t302_userlevels_list->StopRec == 0) {
	$t302_userlevels_list->StopRec = $t302_userlevels->GridAddRowCount;
}

// Initialize aggregate
$t302_userlevels->RowType = ROWTYPE_AGGREGATEINIT;
$t302_userlevels->resetAttributes();
$t302_userlevels_list->renderRow();
while ($t302_userlevels_list->RecCnt < $t302_userlevels_list->StopRec) {
	$t302_userlevels_list->RecCnt++;
	if ($t302_userlevels_list->RecCnt >= $t302_userlevels_list->StartRec) {
		$t302_userlevels_list->RowCnt++;

		// Set up key count
		$t302_userlevels_list->KeyCount = $t302_userlevels_list->RowIndex;

		// Init row class and style
		$t302_userlevels->resetAttributes();
		$t302_userlevels->CssClass = "";
		if ($t302_userlevels->isGridAdd()) {
		} else {
			$t302_userlevels_list->loadRowValues($t302_userlevels_list->Recordset); // Load row values
		}
		$t302_userlevels->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t302_userlevels->RowAttrs = array_merge($t302_userlevels->RowAttrs, array('data-rowindex'=>$t302_userlevels_list->RowCnt, 'id'=>'r' . $t302_userlevels_list->RowCnt . '_t302_userlevels', 'data-rowtype'=>$t302_userlevels->RowType));

		// Render row
		$t302_userlevels_list->renderRow();

		// Render list options
		$t302_userlevels_list->renderListOptions();
?>
	<tr<?php echo $t302_userlevels->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t302_userlevels_list->ListOptions->render("body", "left", $t302_userlevels_list->RowCnt);
?>
	<?php if ($t302_userlevels->userlevelid->Visible) { // userlevelid ?>
		<td data-name="userlevelid"<?php echo $t302_userlevels->userlevelid->cellAttributes() ?>>
<span id="el<?php echo $t302_userlevels_list->RowCnt ?>_t302_userlevels_userlevelid" class="t302_userlevels_userlevelid">
<span<?php echo $t302_userlevels->userlevelid->viewAttributes() ?>>
<?php echo $t302_userlevels->userlevelid->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t302_userlevels->userlevelname->Visible) { // userlevelname ?>
		<td data-name="userlevelname"<?php echo $t302_userlevels->userlevelname->cellAttributes() ?>>
<span id="el<?php echo $t302_userlevels_list->RowCnt ?>_t302_userlevels_userlevelname" class="t302_userlevels_userlevelname">
<span<?php echo $t302_userlevels->userlevelname->viewAttributes() ?>>
<?php echo $t302_userlevels->userlevelname->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t302_userlevels_list->ListOptions->render("body", "right", $t302_userlevels_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$t302_userlevels->isGridAdd())
		$t302_userlevels_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$t302_userlevels->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t302_userlevels_list->Recordset)
	$t302_userlevels_list->Recordset->Close();
?>
<?php if (!$t302_userlevels->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t302_userlevels->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($t302_userlevels_list->Pager)) $t302_userlevels_list->Pager = new PrevNextPager($t302_userlevels_list->StartRec, $t302_userlevels_list->DisplayRecs, $t302_userlevels_list->TotalRecs, $t302_userlevels_list->AutoHidePager) ?>
<?php if ($t302_userlevels_list->Pager->RecordCount > 0 && $t302_userlevels_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($t302_userlevels_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $t302_userlevels_list->pageUrl() ?>start=<?php echo $t302_userlevels_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($t302_userlevels_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $t302_userlevels_list->pageUrl() ?>start=<?php echo $t302_userlevels_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $t302_userlevels_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($t302_userlevels_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $t302_userlevels_list->pageUrl() ?>start=<?php echo $t302_userlevels_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($t302_userlevels_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $t302_userlevels_list->pageUrl() ?>start=<?php echo $t302_userlevels_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $t302_userlevels_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($t302_userlevels_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t302_userlevels_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t302_userlevels_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t302_userlevels_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($t302_userlevels_list->TotalRecs > 0 && (!$t302_userlevels_list->AutoHidePageSizeSelector || $t302_userlevels_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="t302_userlevels">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($t302_userlevels_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($t302_userlevels_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="50"<?php if ($t302_userlevels_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($t302_userlevels_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($t302_userlevels->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t302_userlevels_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t302_userlevels_list->TotalRecs == 0 && !$t302_userlevels->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t302_userlevels_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t302_userlevels_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t302_userlevels->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php if (!$t302_userlevels->isExport()) { ?>
<script>
ew.scrollableTable("gmp_t302_userlevels", "100%", "100%");
</script>
<?php } ?>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t302_userlevels_list->terminate();
?>