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
$v102_daf_kelas_siswa_list = new v102_daf_kelas_siswa_list();

// Run the page
$v102_daf_kelas_siswa_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$v102_daf_kelas_siswa_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$v102_daf_kelas_siswa->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var fv102_daf_kelas_siswalist = currentForm = new ew.Form("fv102_daf_kelas_siswalist", "list");
fv102_daf_kelas_siswalist.formKeyCountName = '<?php echo $v102_daf_kelas_siswa_list->FormKeyCountName ?>';

// Form_CustomValidate event
fv102_daf_kelas_siswalist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
fv102_daf_kelas_siswalist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
fv102_daf_kelas_siswalist.lists["x_daf_kelas_id"] = <?php echo $v102_daf_kelas_siswa_list->daf_kelas_id->Lookup->toClientList() ?>;
fv102_daf_kelas_siswalist.lists["x_daf_kelas_id"].options = <?php echo JsonEncode($v102_daf_kelas_siswa_list->daf_kelas_id->lookupOptions()) ?>;
fv102_daf_kelas_siswalist.lists["x_siswa_id"] = <?php echo $v102_daf_kelas_siswa_list->siswa_id->Lookup->toClientList() ?>;
fv102_daf_kelas_siswalist.lists["x_siswa_id"].options = <?php echo JsonEncode($v102_daf_kelas_siswa_list->siswa_id->lookupOptions()) ?>;

// Form object for search
var fv102_daf_kelas_siswalistsrch = currentSearchForm = new ew.Form("fv102_daf_kelas_siswalistsrch");

// Validate function for search
fv102_daf_kelas_siswalistsrch.validate = function(fobj) {
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
fv102_daf_kelas_siswalistsrch.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
fv102_daf_kelas_siswalistsrch.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
fv102_daf_kelas_siswalistsrch.lists["x_daf_kelas_id"] = <?php echo $v102_daf_kelas_siswa_list->daf_kelas_id->Lookup->toClientList() ?>;
fv102_daf_kelas_siswalistsrch.lists["x_daf_kelas_id"].options = <?php echo JsonEncode($v102_daf_kelas_siswa_list->daf_kelas_id->lookupOptions()) ?>;
fv102_daf_kelas_siswalistsrch.lists["x_siswa_id"] = <?php echo $v102_daf_kelas_siswa_list->siswa_id->Lookup->toClientList() ?>;
fv102_daf_kelas_siswalistsrch.lists["x_siswa_id"].options = <?php echo JsonEncode($v102_daf_kelas_siswa_list->siswa_id->lookupOptions()) ?>;

// Filters
fv102_daf_kelas_siswalistsrch.filterList = <?php echo $v102_daf_kelas_siswa_list->getFilterList() ?>;
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
<?php if (!$v102_daf_kelas_siswa->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($v102_daf_kelas_siswa_list->TotalRecs > 0 && $v102_daf_kelas_siswa_list->ExportOptions->visible()) { ?>
<?php $v102_daf_kelas_siswa_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->ImportOptions->visible()) { ?>
<?php $v102_daf_kelas_siswa_list->ImportOptions->render("body") ?>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->SearchOptions->visible()) { ?>
<?php $v102_daf_kelas_siswa_list->SearchOptions->render("body") ?>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->FilterOptions->visible()) { ?>
<?php $v102_daf_kelas_siswa_list->FilterOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$v102_daf_kelas_siswa_list->renderOtherOptions();
?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$v102_daf_kelas_siswa->isExport() && !$v102_daf_kelas_siswa->CurrentAction) { ?>
<form name="fv102_daf_kelas_siswalistsrch" id="fv102_daf_kelas_siswalistsrch" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($v102_daf_kelas_siswa_list->SearchWhere <> "") ? " show" : " show"; ?>
<div id="fv102_daf_kelas_siswalistsrch-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="v102_daf_kelas_siswa">
	<div class="ew-basic-search">
<?php
if ($SearchError == "")
	$v102_daf_kelas_siswa_list->LoadAdvancedSearch(); // Load advanced search

// Render for search
$v102_daf_kelas_siswa->RowType = ROWTYPE_SEARCH;

// Render row
$v102_daf_kelas_siswa->resetAttributes();
$v102_daf_kelas_siswa_list->renderRow();
?>
<div id="xsr_1" class="ew-row d-sm-flex">
<?php if ($v102_daf_kelas_siswa->daf_kelas_id->Visible) { // daf_kelas_id ?>
	<div id="xsc_daf_kelas_id" class="ew-cell form-group">
		<label for="x_daf_kelas_id" class="ew-search-caption ew-label"><?php echo $v102_daf_kelas_siswa->daf_kelas_id->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_daf_kelas_id" id="z_daf_kelas_id" value="="></span>
		<span class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_daf_kelas_id"><?php echo strval($v102_daf_kelas_siswa->daf_kelas_id->AdvancedSearch->ViewValue) == "" ? $Language->phrase("PleaseSelect") : (REMOVE_XSS ? HtmlDecode($v102_daf_kelas_siswa->daf_kelas_id->AdvancedSearch->ViewValue) : $v102_daf_kelas_siswa->daf_kelas_id->AdvancedSearch->ViewValue) ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($v102_daf_kelas_siswa->daf_kelas_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo (($v102_daf_kelas_siswa->daf_kelas_id->ReadOnly || $v102_daf_kelas_siswa->daf_kelas_id->Disabled) ? " disabled" : "")?> onclick="ew.modalLookupShow({lnk:this,el:'x_daf_kelas_id',m:0,n:10});"><i class="fa fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $v102_daf_kelas_siswa->daf_kelas_id->Lookup->getParamTag("p_x_daf_kelas_id") ?>
<input type="hidden" data-table="v102_daf_kelas_siswa" data-field="x_daf_kelas_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $v102_daf_kelas_siswa->daf_kelas_id->displayValueSeparatorAttribute() ?>" name="x_daf_kelas_id" id="x_daf_kelas_id" value="<?php echo $v102_daf_kelas_siswa->daf_kelas_id->AdvancedSearch->SearchValue ?>"<?php echo $v102_daf_kelas_siswa->daf_kelas_id->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_2" class="ew-row d-sm-flex">
<?php if ($v102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
	<div id="xsc_siswa_id" class="ew-cell form-group">
		<label for="x_siswa_id" class="ew-search-caption ew-label"><?php echo $v102_daf_kelas_siswa->siswa_id->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_siswa_id" id="z_siswa_id" value="="></span>
		<span class="ew-search-field">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_siswa_id"><?php echo strval($v102_daf_kelas_siswa->siswa_id->AdvancedSearch->ViewValue) == "" ? $Language->phrase("PleaseSelect") : (REMOVE_XSS ? HtmlDecode($v102_daf_kelas_siswa->siswa_id->AdvancedSearch->ViewValue) : $v102_daf_kelas_siswa->siswa_id->AdvancedSearch->ViewValue) ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($v102_daf_kelas_siswa->siswa_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo (($v102_daf_kelas_siswa->siswa_id->ReadOnly || $v102_daf_kelas_siswa->siswa_id->Disabled) ? " disabled" : "")?> onclick="ew.modalLookupShow({lnk:this,el:'x_siswa_id',m:0,n:10});"><i class="fa fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $v102_daf_kelas_siswa->siswa_id->Lookup->getParamTag("p_x_siswa_id") ?>
<input type="hidden" data-table="v102_daf_kelas_siswa" data-field="x_siswa_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $v102_daf_kelas_siswa->siswa_id->displayValueSeparatorAttribute() ?>" name="x_siswa_id" id="x_siswa_id" value="<?php echo $v102_daf_kelas_siswa->siswa_id->AdvancedSearch->SearchValue ?>"<?php echo $v102_daf_kelas_siswa->siswa_id->editAttributes() ?>>
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
<?php $v102_daf_kelas_siswa_list->showPageHeader(); ?>
<?php
$v102_daf_kelas_siswa_list->showMessage();
?>
<?php if ($v102_daf_kelas_siswa_list->TotalRecs > 0 || $v102_daf_kelas_siswa->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($v102_daf_kelas_siswa_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> v102_daf_kelas_siswa">
<form name="fv102_daf_kelas_siswalist" id="fv102_daf_kelas_siswalist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($v102_daf_kelas_siswa_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $v102_daf_kelas_siswa_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="v102_daf_kelas_siswa">
<div id="gmp_v102_daf_kelas_siswa" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($v102_daf_kelas_siswa_list->TotalRecs > 0 || $v102_daf_kelas_siswa->isGridEdit()) { ?>
<table id="tbl_v102_daf_kelas_siswalist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$v102_daf_kelas_siswa_list->RowType = ROWTYPE_HEADER;

// Render list options
$v102_daf_kelas_siswa_list->renderListOptions();

// Render list options (header, left)
$v102_daf_kelas_siswa_list->ListOptions->render("header", "left");
?>
<?php if ($v102_daf_kelas_siswa->daf_kelas_id->Visible) { // daf_kelas_id ?>
	<?php if ($v102_daf_kelas_siswa->sortUrl($v102_daf_kelas_siswa->daf_kelas_id) == "") { ?>
		<th data-name="daf_kelas_id" class="<?php echo $v102_daf_kelas_siswa->daf_kelas_id->headerCellClass() ?>"><div id="elh_v102_daf_kelas_siswa_daf_kelas_id" class="v102_daf_kelas_siswa_daf_kelas_id"><div class="ew-table-header-caption"><?php echo $v102_daf_kelas_siswa->daf_kelas_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="daf_kelas_id" class="<?php echo $v102_daf_kelas_siswa->daf_kelas_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v102_daf_kelas_siswa->SortUrl($v102_daf_kelas_siswa->daf_kelas_id) ?>',2);"><div id="elh_v102_daf_kelas_siswa_daf_kelas_id" class="v102_daf_kelas_siswa_daf_kelas_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v102_daf_kelas_siswa->daf_kelas_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($v102_daf_kelas_siswa->daf_kelas_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v102_daf_kelas_siswa->daf_kelas_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
	<?php if ($v102_daf_kelas_siswa->sortUrl($v102_daf_kelas_siswa->siswa_id) == "") { ?>
		<th data-name="siswa_id" class="<?php echo $v102_daf_kelas_siswa->siswa_id->headerCellClass() ?>"><div id="elh_v102_daf_kelas_siswa_siswa_id" class="v102_daf_kelas_siswa_siswa_id"><div class="ew-table-header-caption"><?php echo $v102_daf_kelas_siswa->siswa_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="siswa_id" class="<?php echo $v102_daf_kelas_siswa->siswa_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v102_daf_kelas_siswa->SortUrl($v102_daf_kelas_siswa->siswa_id) ?>',2);"><div id="elh_v102_daf_kelas_siswa_siswa_id" class="v102_daf_kelas_siswa_siswa_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v102_daf_kelas_siswa->siswa_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($v102_daf_kelas_siswa->siswa_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v102_daf_kelas_siswa->siswa_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$v102_daf_kelas_siswa_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($v102_daf_kelas_siswa->ExportAll && $v102_daf_kelas_siswa->isExport()) {
	$v102_daf_kelas_siswa_list->StopRec = $v102_daf_kelas_siswa_list->TotalRecs;
} else {

	// Set the last record to display
	if ($v102_daf_kelas_siswa_list->TotalRecs > $v102_daf_kelas_siswa_list->StartRec + $v102_daf_kelas_siswa_list->DisplayRecs - 1)
		$v102_daf_kelas_siswa_list->StopRec = $v102_daf_kelas_siswa_list->StartRec + $v102_daf_kelas_siswa_list->DisplayRecs - 1;
	else
		$v102_daf_kelas_siswa_list->StopRec = $v102_daf_kelas_siswa_list->TotalRecs;
}
$v102_daf_kelas_siswa_list->RecCnt = $v102_daf_kelas_siswa_list->StartRec - 1;
if ($v102_daf_kelas_siswa_list->Recordset && !$v102_daf_kelas_siswa_list->Recordset->EOF) {
	$v102_daf_kelas_siswa_list->Recordset->moveFirst();
	$selectLimit = $v102_daf_kelas_siswa_list->UseSelectLimit;
	if (!$selectLimit && $v102_daf_kelas_siswa_list->StartRec > 1)
		$v102_daf_kelas_siswa_list->Recordset->move($v102_daf_kelas_siswa_list->StartRec - 1);
} elseif (!$v102_daf_kelas_siswa->AllowAddDeleteRow && $v102_daf_kelas_siswa_list->StopRec == 0) {
	$v102_daf_kelas_siswa_list->StopRec = $v102_daf_kelas_siswa->GridAddRowCount;
}

// Initialize aggregate
$v102_daf_kelas_siswa->RowType = ROWTYPE_AGGREGATEINIT;
$v102_daf_kelas_siswa->resetAttributes();
$v102_daf_kelas_siswa_list->renderRow();
while ($v102_daf_kelas_siswa_list->RecCnt < $v102_daf_kelas_siswa_list->StopRec) {
	$v102_daf_kelas_siswa_list->RecCnt++;
	if ($v102_daf_kelas_siswa_list->RecCnt >= $v102_daf_kelas_siswa_list->StartRec) {
		$v102_daf_kelas_siswa_list->RowCnt++;

		// Set up key count
		$v102_daf_kelas_siswa_list->KeyCount = $v102_daf_kelas_siswa_list->RowIndex;

		// Init row class and style
		$v102_daf_kelas_siswa->resetAttributes();
		$v102_daf_kelas_siswa->CssClass = "";
		if ($v102_daf_kelas_siswa->isGridAdd()) {
		} else {
			$v102_daf_kelas_siswa_list->loadRowValues($v102_daf_kelas_siswa_list->Recordset); // Load row values
		}
		$v102_daf_kelas_siswa->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$v102_daf_kelas_siswa->RowAttrs = array_merge($v102_daf_kelas_siswa->RowAttrs, array('data-rowindex'=>$v102_daf_kelas_siswa_list->RowCnt, 'id'=>'r' . $v102_daf_kelas_siswa_list->RowCnt . '_v102_daf_kelas_siswa', 'data-rowtype'=>$v102_daf_kelas_siswa->RowType));

		// Render row
		$v102_daf_kelas_siswa_list->renderRow();

		// Render list options
		$v102_daf_kelas_siswa_list->renderListOptions();
?>
	<tr<?php echo $v102_daf_kelas_siswa->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v102_daf_kelas_siswa_list->ListOptions->render("body", "left", $v102_daf_kelas_siswa_list->RowCnt);
?>
	<?php if ($v102_daf_kelas_siswa->daf_kelas_id->Visible) { // daf_kelas_id ?>
		<td data-name="daf_kelas_id"<?php echo $v102_daf_kelas_siswa->daf_kelas_id->cellAttributes() ?>>
<span id="el<?php echo $v102_daf_kelas_siswa_list->RowCnt ?>_v102_daf_kelas_siswa_daf_kelas_id" class="v102_daf_kelas_siswa_daf_kelas_id">
<span<?php echo $v102_daf_kelas_siswa->daf_kelas_id->viewAttributes() ?>>
<?php echo $v102_daf_kelas_siswa->daf_kelas_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
		<td data-name="siswa_id"<?php echo $v102_daf_kelas_siswa->siswa_id->cellAttributes() ?>>
<span id="el<?php echo $v102_daf_kelas_siswa_list->RowCnt ?>_v102_daf_kelas_siswa_siswa_id" class="v102_daf_kelas_siswa_siswa_id">
<span<?php echo $v102_daf_kelas_siswa->siswa_id->viewAttributes() ?>>
<?php echo $v102_daf_kelas_siswa->siswa_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$v102_daf_kelas_siswa_list->ListOptions->render("body", "right", $v102_daf_kelas_siswa_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$v102_daf_kelas_siswa->isGridAdd())
		$v102_daf_kelas_siswa_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$v102_daf_kelas_siswa->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($v102_daf_kelas_siswa_list->Recordset)
	$v102_daf_kelas_siswa_list->Recordset->Close();
?>
<?php if (!$v102_daf_kelas_siswa->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$v102_daf_kelas_siswa->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($v102_daf_kelas_siswa_list->Pager)) $v102_daf_kelas_siswa_list->Pager = new PrevNextPager($v102_daf_kelas_siswa_list->StartRec, $v102_daf_kelas_siswa_list->DisplayRecs, $v102_daf_kelas_siswa_list->TotalRecs, $v102_daf_kelas_siswa_list->AutoHidePager) ?>
<?php if ($v102_daf_kelas_siswa_list->Pager->RecordCount > 0 && $v102_daf_kelas_siswa_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($v102_daf_kelas_siswa_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $v102_daf_kelas_siswa_list->pageUrl() ?>start=<?php echo $v102_daf_kelas_siswa_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($v102_daf_kelas_siswa_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $v102_daf_kelas_siswa_list->pageUrl() ?>start=<?php echo $v102_daf_kelas_siswa_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $v102_daf_kelas_siswa_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($v102_daf_kelas_siswa_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $v102_daf_kelas_siswa_list->pageUrl() ?>start=<?php echo $v102_daf_kelas_siswa_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($v102_daf_kelas_siswa_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $v102_daf_kelas_siswa_list->pageUrl() ?>start=<?php echo $v102_daf_kelas_siswa_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $v102_daf_kelas_siswa_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $v102_daf_kelas_siswa_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $v102_daf_kelas_siswa_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $v102_daf_kelas_siswa_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->TotalRecs > 0 && (!$v102_daf_kelas_siswa_list->AutoHidePageSizeSelector || $v102_daf_kelas_siswa_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="v102_daf_kelas_siswa">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($v102_daf_kelas_siswa_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($v102_daf_kelas_siswa_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="30"<?php if ($v102_daf_kelas_siswa_list->DisplayRecs == 30) { ?> selected<?php } ?>>30</option>
<option value="50"<?php if ($v102_daf_kelas_siswa_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($v102_daf_kelas_siswa_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($v102_daf_kelas_siswa->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v102_daf_kelas_siswa_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($v102_daf_kelas_siswa_list->TotalRecs == 0 && !$v102_daf_kelas_siswa->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $v102_daf_kelas_siswa_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$v102_daf_kelas_siswa_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$v102_daf_kelas_siswa->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$v102_daf_kelas_siswa_list->terminate();
?>