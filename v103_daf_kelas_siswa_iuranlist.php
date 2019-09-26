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
$v103_daf_kelas_siswa_iuran_list = new v103_daf_kelas_siswa_iuran_list();

// Run the page
$v103_daf_kelas_siswa_iuran_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$v103_daf_kelas_siswa_iuran_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$v103_daf_kelas_siswa_iuran->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var fv103_daf_kelas_siswa_iuranlist = currentForm = new ew.Form("fv103_daf_kelas_siswa_iuranlist", "list");
fv103_daf_kelas_siswa_iuranlist.formKeyCountName = '<?php echo $v103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>';

// Form_CustomValidate event
fv103_daf_kelas_siswa_iuranlist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
fv103_daf_kelas_siswa_iuranlist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

var fv103_daf_kelas_siswa_iuranlistsrch = currentSearchForm = new ew.Form("fv103_daf_kelas_siswa_iuranlistsrch");

// Validate function for search
fv103_daf_kelas_siswa_iuranlistsrch.validate = function(fobj) {
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
fv103_daf_kelas_siswa_iuranlistsrch.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
fv103_daf_kelas_siswa_iuranlistsrch.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Filters

fv103_daf_kelas_siswa_iuranlistsrch.filterList = <?php echo $v103_daf_kelas_siswa_iuran_list->getFilterList() ?>;
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
<?php if (!$v103_daf_kelas_siswa_iuran->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($v103_daf_kelas_siswa_iuran_list->TotalRecs > 0 && $v103_daf_kelas_siswa_iuran_list->ExportOptions->visible()) { ?>
<?php $v103_daf_kelas_siswa_iuran_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->ImportOptions->visible()) { ?>
<?php $v103_daf_kelas_siswa_iuran_list->ImportOptions->render("body") ?>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->SearchOptions->visible()) { ?>
<?php $v103_daf_kelas_siswa_iuran_list->SearchOptions->render("body") ?>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->FilterOptions->visible()) { ?>
<?php $v103_daf_kelas_siswa_iuran_list->FilterOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$v103_daf_kelas_siswa_iuran_list->renderOtherOptions();
?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$v103_daf_kelas_siswa_iuran->isExport() && !$v103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<form name="fv103_daf_kelas_siswa_iuranlistsrch" id="fv103_daf_kelas_siswa_iuranlistsrch" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($v103_daf_kelas_siswa_iuran_list->SearchWhere <> "") ? " show" : " show"; ?>
<div id="fv103_daf_kelas_siswa_iuranlistsrch-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="v103_daf_kelas_siswa_iuran">
	<div class="ew-basic-search">
<?php
if ($SearchError == "")
	$v103_daf_kelas_siswa_iuran_list->LoadAdvancedSearch(); // Load advanced search

// Render for search
$v103_daf_kelas_siswa_iuran->RowType = ROWTYPE_SEARCH;

// Render row
$v103_daf_kelas_siswa_iuran->resetAttributes();
$v103_daf_kelas_siswa_iuran_list->renderRow();
?>
<div id="xsr_1" class="ew-row d-sm-flex">
<?php if ($v103_daf_kelas_siswa_iuran->NomorInduk->Visible) { // NomorInduk ?>
	<div id="xsc_NomorInduk" class="ew-cell form-group">
		<label for="x_NomorInduk" class="ew-search-caption ew-label"><?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("LIKE") ?><input type="hidden" name="z_NomorInduk" id="z_NomorInduk" value="LIKE"></span>
		<span class="ew-search-field">
<input type="text" data-table="v103_daf_kelas_siswa_iuran" data-field="x_NomorInduk" name="x_NomorInduk" id="x_NomorInduk" size="30" maxlength="25" placeholder="<?php echo HtmlEncode($v103_daf_kelas_siswa_iuran->NomorInduk->getPlaceHolder()) ?>" value="<?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->EditValue ?>"<?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_2" class="ew-row d-sm-flex">
<?php if ($v103_daf_kelas_siswa_iuran->Nama->Visible) { // Nama ?>
	<div id="xsc_Nama" class="ew-cell form-group">
		<label for="x_Nama" class="ew-search-caption ew-label"><?php echo $v103_daf_kelas_siswa_iuran->Nama->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("LIKE") ?><input type="hidden" name="z_Nama" id="z_Nama" value="LIKE"></span>
		<span class="ew-search-field">
<input type="text" data-table="v103_daf_kelas_siswa_iuran" data-field="x_Nama" name="x_Nama" id="x_Nama" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($v103_daf_kelas_siswa_iuran->Nama->getPlaceHolder()) ?>" value="<?php echo $v103_daf_kelas_siswa_iuran->Nama->EditValue ?>"<?php echo $v103_daf_kelas_siswa_iuran->Nama->editAttributes() ?>>
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
<?php $v103_daf_kelas_siswa_iuran_list->showPageHeader(); ?>
<?php
$v103_daf_kelas_siswa_iuran_list->showMessage();
?>
<?php if ($v103_daf_kelas_siswa_iuran_list->TotalRecs > 0 || $v103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($v103_daf_kelas_siswa_iuran_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> v103_daf_kelas_siswa_iuran">
<form name="fv103_daf_kelas_siswa_iuranlist" id="fv103_daf_kelas_siswa_iuranlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($v103_daf_kelas_siswa_iuran_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $v103_daf_kelas_siswa_iuran_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="v103_daf_kelas_siswa_iuran">
<div id="gmp_v103_daf_kelas_siswa_iuran" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($v103_daf_kelas_siswa_iuran_list->TotalRecs > 0 || $v103_daf_kelas_siswa_iuran->isGridEdit()) { ?>
<table id="tbl_v103_daf_kelas_siswa_iuranlist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$v103_daf_kelas_siswa_iuran_list->RowType = ROWTYPE_HEADER;

// Render list options
$v103_daf_kelas_siswa_iuran_list->renderListOptions();

// Render list options (header, left)
$v103_daf_kelas_siswa_iuran_list->ListOptions->render("header", "left");
?>
<?php if ($v103_daf_kelas_siswa_iuran->NomorInduk->Visible) { // NomorInduk ?>
	<?php if ($v103_daf_kelas_siswa_iuran->sortUrl($v103_daf_kelas_siswa_iuran->NomorInduk) == "") { ?>
		<th data-name="NomorInduk" class="<?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->headerCellClass() ?>"><div id="elh_v103_daf_kelas_siswa_iuran_NomorInduk" class="v103_daf_kelas_siswa_iuran_NomorInduk"><div class="ew-table-header-caption"><?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="NomorInduk" class="<?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v103_daf_kelas_siswa_iuran->SortUrl($v103_daf_kelas_siswa_iuran->NomorInduk) ?>',2);"><div id="elh_v103_daf_kelas_siswa_iuran_NomorInduk" class="v103_daf_kelas_siswa_iuran_NomorInduk">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->caption() ?></span><span class="ew-table-header-sort"><?php if ($v103_daf_kelas_siswa_iuran->NomorInduk->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v103_daf_kelas_siswa_iuran->NomorInduk->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran->Nama->Visible) { // Nama ?>
	<?php if ($v103_daf_kelas_siswa_iuran->sortUrl($v103_daf_kelas_siswa_iuran->Nama) == "") { ?>
		<th data-name="Nama" class="<?php echo $v103_daf_kelas_siswa_iuran->Nama->headerCellClass() ?>"><div id="elh_v103_daf_kelas_siswa_iuran_Nama" class="v103_daf_kelas_siswa_iuran_Nama"><div class="ew-table-header-caption"><?php echo $v103_daf_kelas_siswa_iuran->Nama->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Nama" class="<?php echo $v103_daf_kelas_siswa_iuran->Nama->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v103_daf_kelas_siswa_iuran->SortUrl($v103_daf_kelas_siswa_iuran->Nama) ?>',2);"><div id="elh_v103_daf_kelas_siswa_iuran_Nama" class="v103_daf_kelas_siswa_iuran_Nama">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v103_daf_kelas_siswa_iuran->Nama->caption() ?></span><span class="ew-table-header-sort"><?php if ($v103_daf_kelas_siswa_iuran->Nama->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v103_daf_kelas_siswa_iuran->Nama->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$v103_daf_kelas_siswa_iuran_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($v103_daf_kelas_siswa_iuran->ExportAll && $v103_daf_kelas_siswa_iuran->isExport()) {
	$v103_daf_kelas_siswa_iuran_list->StopRec = $v103_daf_kelas_siswa_iuran_list->TotalRecs;
} else {

	// Set the last record to display
	if ($v103_daf_kelas_siswa_iuran_list->TotalRecs > $v103_daf_kelas_siswa_iuran_list->StartRec + $v103_daf_kelas_siswa_iuran_list->DisplayRecs - 1)
		$v103_daf_kelas_siswa_iuran_list->StopRec = $v103_daf_kelas_siswa_iuran_list->StartRec + $v103_daf_kelas_siswa_iuran_list->DisplayRecs - 1;
	else
		$v103_daf_kelas_siswa_iuran_list->StopRec = $v103_daf_kelas_siswa_iuran_list->TotalRecs;
}
$v103_daf_kelas_siswa_iuran_list->RecCnt = $v103_daf_kelas_siswa_iuran_list->StartRec - 1;
if ($v103_daf_kelas_siswa_iuran_list->Recordset && !$v103_daf_kelas_siswa_iuran_list->Recordset->EOF) {
	$v103_daf_kelas_siswa_iuran_list->Recordset->moveFirst();
	$selectLimit = $v103_daf_kelas_siswa_iuran_list->UseSelectLimit;
	if (!$selectLimit && $v103_daf_kelas_siswa_iuran_list->StartRec > 1)
		$v103_daf_kelas_siswa_iuran_list->Recordset->move($v103_daf_kelas_siswa_iuran_list->StartRec - 1);
} elseif (!$v103_daf_kelas_siswa_iuran->AllowAddDeleteRow && $v103_daf_kelas_siswa_iuran_list->StopRec == 0) {
	$v103_daf_kelas_siswa_iuran_list->StopRec = $v103_daf_kelas_siswa_iuran->GridAddRowCount;
}

// Initialize aggregate
$v103_daf_kelas_siswa_iuran->RowType = ROWTYPE_AGGREGATEINIT;
$v103_daf_kelas_siswa_iuran->resetAttributes();
$v103_daf_kelas_siswa_iuran_list->renderRow();
while ($v103_daf_kelas_siswa_iuran_list->RecCnt < $v103_daf_kelas_siswa_iuran_list->StopRec) {
	$v103_daf_kelas_siswa_iuran_list->RecCnt++;
	if ($v103_daf_kelas_siswa_iuran_list->RecCnt >= $v103_daf_kelas_siswa_iuran_list->StartRec) {
		$v103_daf_kelas_siswa_iuran_list->RowCnt++;

		// Set up key count
		$v103_daf_kelas_siswa_iuran_list->KeyCount = $v103_daf_kelas_siswa_iuran_list->RowIndex;

		// Init row class and style
		$v103_daf_kelas_siswa_iuran->resetAttributes();
		$v103_daf_kelas_siswa_iuran->CssClass = "";
		if ($v103_daf_kelas_siswa_iuran->isGridAdd()) {
		} else {
			$v103_daf_kelas_siswa_iuran_list->loadRowValues($v103_daf_kelas_siswa_iuran_list->Recordset); // Load row values
		}
		$v103_daf_kelas_siswa_iuran->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$v103_daf_kelas_siswa_iuran->RowAttrs = array_merge($v103_daf_kelas_siswa_iuran->RowAttrs, array('data-rowindex'=>$v103_daf_kelas_siswa_iuran_list->RowCnt, 'id'=>'r' . $v103_daf_kelas_siswa_iuran_list->RowCnt . '_v103_daf_kelas_siswa_iuran', 'data-rowtype'=>$v103_daf_kelas_siswa_iuran->RowType));

		// Render row
		$v103_daf_kelas_siswa_iuran_list->renderRow();

		// Render list options
		$v103_daf_kelas_siswa_iuran_list->renderListOptions();
?>
	<tr<?php echo $v103_daf_kelas_siswa_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "left", $v103_daf_kelas_siswa_iuran_list->RowCnt);
?>
	<?php if ($v103_daf_kelas_siswa_iuran->NomorInduk->Visible) { // NomorInduk ?>
		<td data-name="NomorInduk"<?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->cellAttributes() ?>>
<span id="el<?php echo $v103_daf_kelas_siswa_iuran_list->RowCnt ?>_v103_daf_kelas_siswa_iuran_NomorInduk" class="v103_daf_kelas_siswa_iuran_NomorInduk">
<span<?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->viewAttributes() ?>>
<?php echo $v103_daf_kelas_siswa_iuran->NomorInduk->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v103_daf_kelas_siswa_iuran->Nama->Visible) { // Nama ?>
		<td data-name="Nama"<?php echo $v103_daf_kelas_siswa_iuran->Nama->cellAttributes() ?>>
<span id="el<?php echo $v103_daf_kelas_siswa_iuran_list->RowCnt ?>_v103_daf_kelas_siswa_iuran_Nama" class="v103_daf_kelas_siswa_iuran_Nama">
<span<?php echo $v103_daf_kelas_siswa_iuran->Nama->viewAttributes() ?>>
<?php echo $v103_daf_kelas_siswa_iuran->Nama->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$v103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "right", $v103_daf_kelas_siswa_iuran_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$v103_daf_kelas_siswa_iuran->isGridAdd())
		$v103_daf_kelas_siswa_iuran_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$v103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($v103_daf_kelas_siswa_iuran_list->Recordset)
	$v103_daf_kelas_siswa_iuran_list->Recordset->Close();
?>
<?php if (!$v103_daf_kelas_siswa_iuran->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$v103_daf_kelas_siswa_iuran->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($v103_daf_kelas_siswa_iuran_list->Pager)) $v103_daf_kelas_siswa_iuran_list->Pager = new PrevNextPager($v103_daf_kelas_siswa_iuran_list->StartRec, $v103_daf_kelas_siswa_iuran_list->DisplayRecs, $v103_daf_kelas_siswa_iuran_list->TotalRecs, $v103_daf_kelas_siswa_iuran_list->AutoHidePager) ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->Pager->RecordCount > 0 && $v103_daf_kelas_siswa_iuran_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($v103_daf_kelas_siswa_iuran_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $v103_daf_kelas_siswa_iuran_list->pageUrl() ?>start=<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($v103_daf_kelas_siswa_iuran_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $v103_daf_kelas_siswa_iuran_list->pageUrl() ?>start=<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($v103_daf_kelas_siswa_iuran_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $v103_daf_kelas_siswa_iuran_list->pageUrl() ?>start=<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($v103_daf_kelas_siswa_iuran_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $v103_daf_kelas_siswa_iuran_list->pageUrl() ?>start=<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $v103_daf_kelas_siswa_iuran_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->TotalRecs > 0 && (!$v103_daf_kelas_siswa_iuran_list->AutoHidePageSizeSelector || $v103_daf_kelas_siswa_iuran_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="v103_daf_kelas_siswa_iuran">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($v103_daf_kelas_siswa_iuran_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($v103_daf_kelas_siswa_iuran_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="50"<?php if ($v103_daf_kelas_siswa_iuran_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($v103_daf_kelas_siswa_iuran_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($v103_daf_kelas_siswa_iuran->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v103_daf_kelas_siswa_iuran_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($v103_daf_kelas_siswa_iuran_list->TotalRecs == 0 && !$v103_daf_kelas_siswa_iuran->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $v103_daf_kelas_siswa_iuran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$v103_daf_kelas_siswa_iuran_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$v103_daf_kelas_siswa_iuran->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$v103_daf_kelas_siswa_iuran_list->terminate();
?>