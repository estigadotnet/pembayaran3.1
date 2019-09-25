<?php
namespace PHPMaker2019\p_pembayaran3_1;

// Write header
WriteHeader(FALSE);

// Create page object
if (!isset($t102_daf_kelas_siswa_grid))
	$t102_daf_kelas_siswa_grid = new t102_daf_kelas_siswa_grid();

// Run the page
$t102_daf_kelas_siswa_grid->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_daf_kelas_siswa_grid->Page_Render();
?>
<?php if (!$t102_daf_kelas_siswa->isExport()) { ?>
<script>

// Form object
var ft102_daf_kelas_siswagrid = new ew.Form("ft102_daf_kelas_siswagrid", "grid");
ft102_daf_kelas_siswagrid.formKeyCountName = '<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>';

// Validate form
ft102_daf_kelas_siswagrid.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj);
	if ($fobj.find("#confirm").val() == "F")
		return true;
	var elm, felm, uelm, addcnt = 0;
	var $k = $fobj.find("#" + this.formKeyCountName); // Get key_count
	var rowcnt = ($k[0]) ? parseInt($k.val(), 10) : 1;
	var startcnt = (rowcnt == 0) ? 0 : 1; // Check rowcnt == 0 => Inline-Add
	var gridinsert = ["insert", "gridinsert"].includes($fobj.find("#action").val()) && $k[0];
	for (var i = startcnt; i <= rowcnt; i++) {
		var infix = ($k[0]) ? String(i) : "";
		$fobj.data("rowindex", infix);
		var checkrow = (gridinsert) ? !this.emptyRow(infix) : true;
		if (checkrow) {
			addcnt++;
		<?php if ($t102_daf_kelas_siswa_grid->siswa_id->Required) { ?>
			elm = this.getElements("x" + infix + "_siswa_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t102_daf_kelas_siswa->siswa_id->caption(), $t102_daf_kelas_siswa->siswa_id->RequiredErrorMessage)) ?>");
		<?php } ?>

			// Fire Form_CustomValidate event
			if (!this.Form_CustomValidate(fobj))
				return false;
		} // End Grid Add checking
	}
	return true;
}

// Check empty row
ft102_daf_kelas_siswagrid.emptyRow = function(infix) {
	var fobj = this._form;
	if (ew.valueChanged(fobj, infix, "siswa_id", false)) return false;
	return true;
}

// Form_CustomValidate event
ft102_daf_kelas_siswagrid.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft102_daf_kelas_siswagrid.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft102_daf_kelas_siswagrid.lists["x_siswa_id"] = <?php echo $t102_daf_kelas_siswa_grid->siswa_id->Lookup->toClientList() ?>;
ft102_daf_kelas_siswagrid.lists["x_siswa_id"].options = <?php echo JsonEncode($t102_daf_kelas_siswa_grid->siswa_id->lookupOptions()) ?>;

// Form object for search
</script>
<?php } ?>
<?php
$t102_daf_kelas_siswa_grid->renderOtherOptions();
?>
<?php $t102_daf_kelas_siswa_grid->showPageHeader(); ?>
<?php
$t102_daf_kelas_siswa_grid->showMessage();
?>
<?php if ($t102_daf_kelas_siswa_grid->TotalRecs > 0 || $t102_daf_kelas_siswa->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t102_daf_kelas_siswa_grid->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t102_daf_kelas_siswa">
<div id="ft102_daf_kelas_siswagrid" class="ew-form ew-list-form form-inline">
<div id="gmp_t102_daf_kelas_siswa" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<table id="tbl_t102_daf_kelas_siswagrid" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t102_daf_kelas_siswa_grid->RowType = ROWTYPE_HEADER;

// Render list options
$t102_daf_kelas_siswa_grid->renderListOptions();

// Render list options (header, left)
$t102_daf_kelas_siswa_grid->ListOptions->render("header", "left");
?>
<?php if ($t102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
	<?php if ($t102_daf_kelas_siswa->sortUrl($t102_daf_kelas_siswa->siswa_id) == "") { ?>
		<th data-name="siswa_id" class="<?php echo $t102_daf_kelas_siswa->siswa_id->headerCellClass() ?>"><div id="elh_t102_daf_kelas_siswa_siswa_id" class="t102_daf_kelas_siswa_siswa_id"><div class="ew-table-header-caption"><?php echo $t102_daf_kelas_siswa->siswa_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="siswa_id" class="<?php echo $t102_daf_kelas_siswa->siswa_id->headerCellClass() ?>"><div><div id="elh_t102_daf_kelas_siswa_siswa_id" class="t102_daf_kelas_siswa_siswa_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t102_daf_kelas_siswa->siswa_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t102_daf_kelas_siswa->siswa_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t102_daf_kelas_siswa->siswa_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t102_daf_kelas_siswa_grid->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
$t102_daf_kelas_siswa_grid->StartRec = 1;
$t102_daf_kelas_siswa_grid->StopRec = $t102_daf_kelas_siswa_grid->TotalRecs; // Show all records

// Restore number of post back records
if ($CurrentForm && $t102_daf_kelas_siswa_grid->EventCancelled) {
	$CurrentForm->Index = -1;
	if ($CurrentForm->hasValue($t102_daf_kelas_siswa_grid->FormKeyCountName) && ($t102_daf_kelas_siswa->isGridAdd() || $t102_daf_kelas_siswa->isGridEdit() || $t102_daf_kelas_siswa->isConfirm())) {
		$t102_daf_kelas_siswa_grid->KeyCount = $CurrentForm->getValue($t102_daf_kelas_siswa_grid->FormKeyCountName);
		$t102_daf_kelas_siswa_grid->StopRec = $t102_daf_kelas_siswa_grid->StartRec + $t102_daf_kelas_siswa_grid->KeyCount - 1;
	}
}
$t102_daf_kelas_siswa_grid->RecCnt = $t102_daf_kelas_siswa_grid->StartRec - 1;
if ($t102_daf_kelas_siswa_grid->Recordset && !$t102_daf_kelas_siswa_grid->Recordset->EOF) {
	$t102_daf_kelas_siswa_grid->Recordset->moveFirst();
	$selectLimit = $t102_daf_kelas_siswa_grid->UseSelectLimit;
	if (!$selectLimit && $t102_daf_kelas_siswa_grid->StartRec > 1)
		$t102_daf_kelas_siswa_grid->Recordset->move($t102_daf_kelas_siswa_grid->StartRec - 1);
} elseif (!$t102_daf_kelas_siswa->AllowAddDeleteRow && $t102_daf_kelas_siswa_grid->StopRec == 0) {
	$t102_daf_kelas_siswa_grid->StopRec = $t102_daf_kelas_siswa->GridAddRowCount;
}

// Initialize aggregate
$t102_daf_kelas_siswa->RowType = ROWTYPE_AGGREGATEINIT;
$t102_daf_kelas_siswa->resetAttributes();
$t102_daf_kelas_siswa_grid->renderRow();
if ($t102_daf_kelas_siswa->isGridAdd())
	$t102_daf_kelas_siswa_grid->RowIndex = 0;
if ($t102_daf_kelas_siswa->isGridEdit())
	$t102_daf_kelas_siswa_grid->RowIndex = 0;
while ($t102_daf_kelas_siswa_grid->RecCnt < $t102_daf_kelas_siswa_grid->StopRec) {
	$t102_daf_kelas_siswa_grid->RecCnt++;
	if ($t102_daf_kelas_siswa_grid->RecCnt >= $t102_daf_kelas_siswa_grid->StartRec) {
		$t102_daf_kelas_siswa_grid->RowCnt++;
		if ($t102_daf_kelas_siswa->isGridAdd() || $t102_daf_kelas_siswa->isGridEdit() || $t102_daf_kelas_siswa->isConfirm()) {
			$t102_daf_kelas_siswa_grid->RowIndex++;
			$CurrentForm->Index = $t102_daf_kelas_siswa_grid->RowIndex;
			if ($CurrentForm->hasValue($t102_daf_kelas_siswa_grid->FormActionName) && $t102_daf_kelas_siswa_grid->EventCancelled)
				$t102_daf_kelas_siswa_grid->RowAction = strval($CurrentForm->getValue($t102_daf_kelas_siswa_grid->FormActionName));
			elseif ($t102_daf_kelas_siswa->isGridAdd())
				$t102_daf_kelas_siswa_grid->RowAction = "insert";
			else
				$t102_daf_kelas_siswa_grid->RowAction = "";
		}

		// Set up key count
		$t102_daf_kelas_siswa_grid->KeyCount = $t102_daf_kelas_siswa_grid->RowIndex;

		// Init row class and style
		$t102_daf_kelas_siswa->resetAttributes();
		$t102_daf_kelas_siswa->CssClass = "";
		if ($t102_daf_kelas_siswa->isGridAdd()) {
			if ($t102_daf_kelas_siswa->CurrentMode == "copy") {
				$t102_daf_kelas_siswa_grid->loadRowValues($t102_daf_kelas_siswa_grid->Recordset); // Load row values
				$t102_daf_kelas_siswa_grid->setRecordKey($t102_daf_kelas_siswa_grid->RowOldKey, $t102_daf_kelas_siswa_grid->Recordset); // Set old record key
			} else {
				$t102_daf_kelas_siswa_grid->loadRowValues(); // Load default values
				$t102_daf_kelas_siswa_grid->RowOldKey = ""; // Clear old key value
			}
		} else {
			$t102_daf_kelas_siswa_grid->loadRowValues($t102_daf_kelas_siswa_grid->Recordset); // Load row values
		}
		$t102_daf_kelas_siswa->RowType = ROWTYPE_VIEW; // Render view
		if ($t102_daf_kelas_siswa->isGridAdd()) // Grid add
			$t102_daf_kelas_siswa->RowType = ROWTYPE_ADD; // Render add
		if ($t102_daf_kelas_siswa->isGridAdd() && $t102_daf_kelas_siswa->EventCancelled && !$CurrentForm->hasValue("k_blankrow")) // Insert failed
			$t102_daf_kelas_siswa_grid->restoreCurrentRowFormValues($t102_daf_kelas_siswa_grid->RowIndex); // Restore form values
		if ($t102_daf_kelas_siswa->isGridEdit()) { // Grid edit
			if ($t102_daf_kelas_siswa->EventCancelled)
				$t102_daf_kelas_siswa_grid->restoreCurrentRowFormValues($t102_daf_kelas_siswa_grid->RowIndex); // Restore form values
			if ($t102_daf_kelas_siswa_grid->RowAction == "insert")
				$t102_daf_kelas_siswa->RowType = ROWTYPE_ADD; // Render add
			else
				$t102_daf_kelas_siswa->RowType = ROWTYPE_EDIT; // Render edit
		}
		if ($t102_daf_kelas_siswa->isGridEdit() && ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT || $t102_daf_kelas_siswa->RowType == ROWTYPE_ADD) && $t102_daf_kelas_siswa->EventCancelled) // Update failed
			$t102_daf_kelas_siswa_grid->restoreCurrentRowFormValues($t102_daf_kelas_siswa_grid->RowIndex); // Restore form values
		if ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT) // Edit row
			$t102_daf_kelas_siswa_grid->EditRowCnt++;
		if ($t102_daf_kelas_siswa->isConfirm()) // Confirm row
			$t102_daf_kelas_siswa_grid->restoreCurrentRowFormValues($t102_daf_kelas_siswa_grid->RowIndex); // Restore form values

		// Set up row id / data-rowindex
		$t102_daf_kelas_siswa->RowAttrs = array_merge($t102_daf_kelas_siswa->RowAttrs, array('data-rowindex'=>$t102_daf_kelas_siswa_grid->RowCnt, 'id'=>'r' . $t102_daf_kelas_siswa_grid->RowCnt . '_t102_daf_kelas_siswa', 'data-rowtype'=>$t102_daf_kelas_siswa->RowType));

		// Render row
		$t102_daf_kelas_siswa_grid->renderRow();

		// Render list options
		$t102_daf_kelas_siswa_grid->renderListOptions();

		// Skip delete row / empty row for confirm page
		if ($t102_daf_kelas_siswa_grid->RowAction <> "delete" && $t102_daf_kelas_siswa_grid->RowAction <> "insertdelete" && !($t102_daf_kelas_siswa_grid->RowAction == "insert" && $t102_daf_kelas_siswa->isConfirm() && $t102_daf_kelas_siswa_grid->emptyRow())) {
?>
	<tr<?php echo $t102_daf_kelas_siswa->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t102_daf_kelas_siswa_grid->ListOptions->render("body", "left", $t102_daf_kelas_siswa_grid->RowCnt);
?>
	<?php if ($t102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
		<td data-name="siswa_id"<?php echo $t102_daf_kelas_siswa->siswa_id->cellAttributes() ?>>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t102_daf_kelas_siswa_grid->RowCnt ?>_t102_daf_kelas_siswa_siswa_id" class="form-group t102_daf_kelas_siswa_siswa_id">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-value-separator="<?php echo $t102_daf_kelas_siswa->siswa_id->displayValueSeparatorAttribute() ?>" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id"<?php echo $t102_daf_kelas_siswa->siswa_id->editAttributes() ?>>
		<?php echo $t102_daf_kelas_siswa->siswa_id->selectOptionListHtml("x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id") ?>
	</select>
</div>
<?php echo $t102_daf_kelas_siswa->siswa_id->Lookup->getParamTag("p_x" . $t102_daf_kelas_siswa_grid->RowIndex . "_siswa_id") ?>
</span>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->siswa_id->OldValue) ?>">
<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t102_daf_kelas_siswa_grid->RowCnt ?>_t102_daf_kelas_siswa_siswa_id" class="form-group t102_daf_kelas_siswa_siswa_id">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-value-separator="<?php echo $t102_daf_kelas_siswa->siswa_id->displayValueSeparatorAttribute() ?>" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id"<?php echo $t102_daf_kelas_siswa->siswa_id->editAttributes() ?>>
		<?php echo $t102_daf_kelas_siswa->siswa_id->selectOptionListHtml("x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id") ?>
	</select>
</div>
<?php echo $t102_daf_kelas_siswa->siswa_id->Lookup->getParamTag("p_x" . $t102_daf_kelas_siswa_grid->RowIndex . "_siswa_id") ?>
</span>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t102_daf_kelas_siswa_grid->RowCnt ?>_t102_daf_kelas_siswa_siswa_id" class="t102_daf_kelas_siswa_siswa_id">
<span<?php echo $t102_daf_kelas_siswa->siswa_id->viewAttributes() ?>>
<?php echo $t102_daf_kelas_siswa->siswa_id->getViewValue() ?></span>
</span>
<?php if (!$t102_daf_kelas_siswa->isConfirm()) { ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->siswa_id->FormValue) ?>">
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->siswa_id->OldValue) ?>">
<?php } else { ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="ft102_daf_kelas_siswagrid$x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="ft102_daf_kelas_siswagrid$x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->siswa_id->FormValue) ?>">
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="ft102_daf_kelas_siswagrid$o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="ft102_daf_kelas_siswagrid$o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->siswa_id->OldValue) ?>">
<?php } ?>
<?php } ?>
</td>
	<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_ADD) { // Add record ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->id->CurrentValue) ?>">
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_id" name="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" id="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->id->OldValue) ?>">
<?php } ?>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT || $t102_daf_kelas_siswa->CurrentMode == "edit") { ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->id->CurrentValue) ?>">
<?php } ?>
<?php

// Render list options (body, right)
$t102_daf_kelas_siswa_grid->ListOptions->render("body", "right", $t102_daf_kelas_siswa_grid->RowCnt);
?>
	</tr>
<?php if ($t102_daf_kelas_siswa->RowType == ROWTYPE_ADD || $t102_daf_kelas_siswa->RowType == ROWTYPE_EDIT) { ?>
<script>
ft102_daf_kelas_siswagrid.updateLists(<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>);
</script>
<?php } ?>
<?php
	}
	} // End delete row checking
	if (!$t102_daf_kelas_siswa->isGridAdd() || $t102_daf_kelas_siswa->CurrentMode == "copy")
		if (!$t102_daf_kelas_siswa_grid->Recordset->EOF)
			$t102_daf_kelas_siswa_grid->Recordset->moveNext();
}
?>
<?php
	if ($t102_daf_kelas_siswa->CurrentMode == "add" || $t102_daf_kelas_siswa->CurrentMode == "copy" || $t102_daf_kelas_siswa->CurrentMode == "edit") {
		$t102_daf_kelas_siswa_grid->RowIndex = '$rowindex$';
		$t102_daf_kelas_siswa_grid->loadRowValues();

		// Set row properties
		$t102_daf_kelas_siswa->resetAttributes();
		$t102_daf_kelas_siswa->RowAttrs = array_merge($t102_daf_kelas_siswa->RowAttrs, array('data-rowindex'=>$t102_daf_kelas_siswa_grid->RowIndex, 'id'=>'r0_t102_daf_kelas_siswa', 'data-rowtype'=>ROWTYPE_ADD));
		AppendClass($t102_daf_kelas_siswa->RowAttrs["class"], "ew-template");
		$t102_daf_kelas_siswa->RowType = ROWTYPE_ADD;

		// Render row
		$t102_daf_kelas_siswa_grid->renderRow();

		// Render list options
		$t102_daf_kelas_siswa_grid->renderListOptions();
		$t102_daf_kelas_siswa_grid->StartRowCnt = 0;
?>
	<tr<?php echo $t102_daf_kelas_siswa->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t102_daf_kelas_siswa_grid->ListOptions->render("body", "left", $t102_daf_kelas_siswa_grid->RowIndex);
?>
	<?php if ($t102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
		<td data-name="siswa_id">
<?php if (!$t102_daf_kelas_siswa->isConfirm()) { ?>
<span id="el$rowindex$_t102_daf_kelas_siswa_siswa_id" class="form-group t102_daf_kelas_siswa_siswa_id">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-value-separator="<?php echo $t102_daf_kelas_siswa->siswa_id->displayValueSeparatorAttribute() ?>" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id"<?php echo $t102_daf_kelas_siswa->siswa_id->editAttributes() ?>>
		<?php echo $t102_daf_kelas_siswa->siswa_id->selectOptionListHtml("x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id") ?>
	</select>
</div>
<?php echo $t102_daf_kelas_siswa->siswa_id->Lookup->getParamTag("p_x" . $t102_daf_kelas_siswa_grid->RowIndex . "_siswa_id") ?>
</span>
<?php } else { ?>
<span id="el$rowindex$_t102_daf_kelas_siswa_siswa_id" class="form-group t102_daf_kelas_siswa_siswa_id">
<span<?php echo $t102_daf_kelas_siswa->siswa_id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($t102_daf_kelas_siswa->siswa_id->ViewValue) ?>"></span>
</span>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="x<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->siswa_id->FormValue) ?>">
<?php } ?>
<input type="hidden" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" name="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" id="o<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>_siswa_id" value="<?php echo HtmlEncode($t102_daf_kelas_siswa->siswa_id->OldValue) ?>">
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t102_daf_kelas_siswa_grid->ListOptions->render("body", "right", $t102_daf_kelas_siswa_grid->RowIndex);
?>
<script>
ft102_daf_kelas_siswagrid.updateLists(<?php echo $t102_daf_kelas_siswa_grid->RowIndex ?>);
</script>
	</tr>
<?php
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php if ($t102_daf_kelas_siswa->CurrentMode == "add" || $t102_daf_kelas_siswa->CurrentMode == "copy") { ?>
<input type="hidden" name="<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>" id="<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>" value="<?php echo $t102_daf_kelas_siswa_grid->KeyCount ?>">
<?php echo $t102_daf_kelas_siswa_grid->MultiSelectKey ?>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->CurrentMode == "edit") { ?>
<input type="hidden" name="<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>" id="<?php echo $t102_daf_kelas_siswa_grid->FormKeyCountName ?>" value="<?php echo $t102_daf_kelas_siswa_grid->KeyCount ?>">
<?php echo $t102_daf_kelas_siswa_grid->MultiSelectKey ?>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->CurrentMode == "") { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
<input type="hidden" name="detailpage" value="ft102_daf_kelas_siswagrid">
</div><!-- /.ew-grid-middle-panel -->
<?php

// Close recordset
if ($t102_daf_kelas_siswa_grid->Recordset)
	$t102_daf_kelas_siswa_grid->Recordset->Close();
?>
</div>
<?php if ($t102_daf_kelas_siswa_grid->ShowOtherOptions) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php $t102_daf_kelas_siswa_grid->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t102_daf_kelas_siswa_grid->TotalRecs == 0 && !$t102_daf_kelas_siswa->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t102_daf_kelas_siswa_grid->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t102_daf_kelas_siswa_grid->terminate();
?>