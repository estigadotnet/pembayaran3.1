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
$t004_siswa_list = new t004_siswa_list();

// Run the page
$t004_siswa_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t004_siswa_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t004_siswa->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var ft004_siswalist = currentForm = new ew.Form("ft004_siswalist", "list");
ft004_siswalist.formKeyCountName = '<?php echo $t004_siswa_list->FormKeyCountName ?>';

// Form_CustomValidate event
ft004_siswalist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft004_siswalist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

var ft004_siswalistsrch = currentSearchForm = new ew.Form("ft004_siswalistsrch");

// Validate function for search
ft004_siswalistsrch.validate = function(fobj) {
	if (!this.validateRequired)
		return true; // Ignore validation
	fobj = fobj || this._form;
	var infix = "";

	// Fire Form_CustomValidate event
	if (!this.Form_CustomValidate(fobj))
		return false;
	return true;
}

// Form_CustomValidate event
ft004_siswalistsrch.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft004_siswalistsrch.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Filters

ft004_siswalistsrch.filterList = <?php echo $t004_siswa_list->getFilterList() ?>;
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
<?php if (!$t004_siswa->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t004_siswa_list->TotalRecs > 0 && $t004_siswa_list->ExportOptions->visible()) { ?>
<?php $t004_siswa_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t004_siswa_list->ImportOptions->visible()) { ?>
<?php $t004_siswa_list->ImportOptions->render("body") ?>
<?php } ?>
<?php if ($t004_siswa_list->SearchOptions->visible()) { ?>
<?php $t004_siswa_list->SearchOptions->render("body") ?>
<?php } ?>
<?php if ($t004_siswa_list->FilterOptions->visible()) { ?>
<?php $t004_siswa_list->FilterOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t004_siswa_list->renderOtherOptions();
?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$t004_siswa->isExport() && !$t004_siswa->CurrentAction) { ?>
<form name="ft004_siswalistsrch" id="ft004_siswalistsrch" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($t004_siswa_list->SearchWhere <> "") ? " show" : " show"; ?>
<div id="ft004_siswalistsrch-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="t004_siswa">
	<div class="ew-basic-search">
<?php
if ($SearchError == "")
	$t004_siswa_list->LoadAdvancedSearch(); // Load advanced search

// Render for search
$t004_siswa->RowType = ROWTYPE_SEARCH;

// Render row
$t004_siswa->resetAttributes();
$t004_siswa_list->renderRow();
?>
<div id="xsr_1" class="ew-row d-sm-flex">
<?php if ($t004_siswa->NomorInduk->Visible) { // NomorInduk ?>
	<div id="xsc_NomorInduk" class="ew-cell form-group">
		<label for="x_NomorInduk" class="ew-search-caption ew-label"><?php echo $t004_siswa->NomorInduk->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("LIKE") ?><input type="hidden" name="z_NomorInduk" id="z_NomorInduk" value="LIKE"></span>
		<span class="ew-search-field">
<input type="text" data-table="t004_siswa" data-field="x_NomorInduk" name="x_NomorInduk" id="x_NomorInduk" size="30" maxlength="25" placeholder="<?php echo HtmlEncode($t004_siswa->NomorInduk->getPlaceHolder()) ?>" value="<?php echo $t004_siswa->NomorInduk->EditValue ?>"<?php echo $t004_siswa->NomorInduk->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_2" class="ew-row d-sm-flex">
<?php if ($t004_siswa->Nama->Visible) { // Nama ?>
	<div id="xsc_Nama" class="ew-cell form-group">
		<label for="x_Nama" class="ew-search-caption ew-label"><?php echo $t004_siswa->Nama->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("LIKE") ?><input type="hidden" name="z_Nama" id="z_Nama" value="LIKE"></span>
		<span class="ew-search-field">
<input type="text" data-table="t004_siswa" data-field="x_Nama" name="x_Nama" id="x_Nama" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($t004_siswa->Nama->getPlaceHolder()) ?>" value="<?php echo $t004_siswa->Nama->EditValue ?>"<?php echo $t004_siswa->Nama->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_3" class="ew-row d-sm-flex">
	<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit"><?php echo $Language->phrase("SearchBtn") ?></button>
</div>
	</div>
</div>
</form>
<?php } ?>
<?php } ?>
<?php $t004_siswa_list->showPageHeader(); ?>
<?php
$t004_siswa_list->showMessage();
?>
<?php if ($t004_siswa_list->TotalRecs > 0 || $t004_siswa->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t004_siswa_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t004_siswa">
<form name="ft004_siswalist" id="ft004_siswalist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t004_siswa_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t004_siswa_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t004_siswa">
<div id="gmp_t004_siswa" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($t004_siswa_list->TotalRecs > 0 || $t004_siswa->isGridEdit()) { ?>
<table id="tbl_t004_siswalist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t004_siswa_list->RowType = ROWTYPE_HEADER;

// Render list options
$t004_siswa_list->renderListOptions();

// Render list options (header, left)
$t004_siswa_list->ListOptions->render("header", "left");
?>
<?php if ($t004_siswa->NomorInduk->Visible) { // NomorInduk ?>
	<?php if ($t004_siswa->sortUrl($t004_siswa->NomorInduk) == "") { ?>
		<th data-name="NomorInduk" class="<?php echo $t004_siswa->NomorInduk->headerCellClass() ?>"><div id="elh_t004_siswa_NomorInduk" class="t004_siswa_NomorInduk"><div class="ew-table-header-caption"><?php echo $t004_siswa->NomorInduk->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="NomorInduk" class="<?php echo $t004_siswa->NomorInduk->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t004_siswa->SortUrl($t004_siswa->NomorInduk) ?>',2);"><div id="elh_t004_siswa_NomorInduk" class="t004_siswa_NomorInduk">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t004_siswa->NomorInduk->caption() ?></span><span class="ew-table-header-sort"><?php if ($t004_siswa->NomorInduk->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t004_siswa->NomorInduk->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t004_siswa->Nama->Visible) { // Nama ?>
	<?php if ($t004_siswa->sortUrl($t004_siswa->Nama) == "") { ?>
		<th data-name="Nama" class="<?php echo $t004_siswa->Nama->headerCellClass() ?>"><div id="elh_t004_siswa_Nama" class="t004_siswa_Nama"><div class="ew-table-header-caption"><?php echo $t004_siswa->Nama->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Nama" class="<?php echo $t004_siswa->Nama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t004_siswa->SortUrl($t004_siswa->Nama) ?>',2);"><div id="elh_t004_siswa_Nama" class="t004_siswa_Nama">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t004_siswa->Nama->caption() ?></span><span class="ew-table-header-sort"><?php if ($t004_siswa->Nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t004_siswa->Nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t004_siswa_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t004_siswa->ExportAll && $t004_siswa->isExport()) {
	$t004_siswa_list->StopRec = $t004_siswa_list->TotalRecs;
} else {

	// Set the last record to display
	if ($t004_siswa_list->TotalRecs > $t004_siswa_list->StartRec + $t004_siswa_list->DisplayRecs - 1)
		$t004_siswa_list->StopRec = $t004_siswa_list->StartRec + $t004_siswa_list->DisplayRecs - 1;
	else
		$t004_siswa_list->StopRec = $t004_siswa_list->TotalRecs;
}
$t004_siswa_list->RecCnt = $t004_siswa_list->StartRec - 1;
if ($t004_siswa_list->Recordset && !$t004_siswa_list->Recordset->EOF) {
	$t004_siswa_list->Recordset->moveFirst();
	$selectLimit = $t004_siswa_list->UseSelectLimit;
	if (!$selectLimit && $t004_siswa_list->StartRec > 1)
		$t004_siswa_list->Recordset->move($t004_siswa_list->StartRec - 1);
} elseif (!$t004_siswa->AllowAddDeleteRow && $t004_siswa_list->StopRec == 0) {
	$t004_siswa_list->StopRec = $t004_siswa->GridAddRowCount;
}

// Initialize aggregate
$t004_siswa->RowType = ROWTYPE_AGGREGATEINIT;
$t004_siswa->resetAttributes();
$t004_siswa_list->renderRow();
while ($t004_siswa_list->RecCnt < $t004_siswa_list->StopRec) {
	$t004_siswa_list->RecCnt++;
	if ($t004_siswa_list->RecCnt >= $t004_siswa_list->StartRec) {
		$t004_siswa_list->RowCnt++;

		// Set up key count
		$t004_siswa_list->KeyCount = $t004_siswa_list->RowIndex;

		// Init row class and style
		$t004_siswa->resetAttributes();
		$t004_siswa->CssClass = "";
		if ($t004_siswa->isGridAdd()) {
		} else {
			$t004_siswa_list->loadRowValues($t004_siswa_list->Recordset); // Load row values
		}
		$t004_siswa->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t004_siswa->RowAttrs = array_merge($t004_siswa->RowAttrs, array('data-rowindex'=>$t004_siswa_list->RowCnt, 'id'=>'r' . $t004_siswa_list->RowCnt . '_t004_siswa', 'data-rowtype'=>$t004_siswa->RowType));

		// Render row
		$t004_siswa_list->renderRow();

		// Render list options
		$t004_siswa_list->renderListOptions();
?>
	<tr<?php echo $t004_siswa->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t004_siswa_list->ListOptions->render("body", "left", $t004_siswa_list->RowCnt);
?>
	<?php if ($t004_siswa->NomorInduk->Visible) { // NomorInduk ?>
		<td data-name="NomorInduk"<?php echo $t004_siswa->NomorInduk->cellAttributes() ?>>
<span id="el<?php echo $t004_siswa_list->RowCnt ?>_t004_siswa_NomorInduk" class="t004_siswa_NomorInduk">
<span<?php echo $t004_siswa->NomorInduk->viewAttributes() ?>>
<?php echo $t004_siswa->NomorInduk->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t004_siswa->Nama->Visible) { // Nama ?>
		<td data-name="Nama"<?php echo $t004_siswa->Nama->cellAttributes() ?>>
<span id="el<?php echo $t004_siswa_list->RowCnt ?>_t004_siswa_Nama" class="t004_siswa_Nama">
<span<?php echo $t004_siswa->Nama->viewAttributes() ?>>
<?php echo $t004_siswa->Nama->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t004_siswa_list->ListOptions->render("body", "right", $t004_siswa_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$t004_siswa->isGridAdd())
		$t004_siswa_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$t004_siswa->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t004_siswa_list->Recordset)
	$t004_siswa_list->Recordset->Close();
?>
<?php if (!$t004_siswa->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t004_siswa->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($t004_siswa_list->Pager)) $t004_siswa_list->Pager = new PrevNextPager($t004_siswa_list->StartRec, $t004_siswa_list->DisplayRecs, $t004_siswa_list->TotalRecs, $t004_siswa_list->AutoHidePager) ?>
<?php if ($t004_siswa_list->Pager->RecordCount > 0 && $t004_siswa_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($t004_siswa_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $t004_siswa_list->pageUrl() ?>start=<?php echo $t004_siswa_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($t004_siswa_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $t004_siswa_list->pageUrl() ?>start=<?php echo $t004_siswa_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $t004_siswa_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($t004_siswa_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $t004_siswa_list->pageUrl() ?>start=<?php echo $t004_siswa_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($t004_siswa_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $t004_siswa_list->pageUrl() ?>start=<?php echo $t004_siswa_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $t004_siswa_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($t004_siswa_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t004_siswa_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t004_siswa_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t004_siswa_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($t004_siswa_list->TotalRecs > 0 && (!$t004_siswa_list->AutoHidePageSizeSelector || $t004_siswa_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="t004_siswa">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($t004_siswa_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($t004_siswa_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="30"<?php if ($t004_siswa_list->DisplayRecs == 30) { ?> selected<?php } ?>>30</option>
<option value="50"<?php if ($t004_siswa_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($t004_siswa_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($t004_siswa->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t004_siswa_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t004_siswa_list->TotalRecs == 0 && !$t004_siswa->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t004_siswa_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t004_siswa_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t004_siswa->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t004_siswa_list->terminate();
?>