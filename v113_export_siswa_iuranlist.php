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
$v113_export_siswa_iuran_list = new v113_export_siswa_iuran_list();

// Run the page
$v113_export_siswa_iuran_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$v113_export_siswa_iuran_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$v113_export_siswa_iuran->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var fv113_export_siswa_iuranlist = currentForm = new ew.Form("fv113_export_siswa_iuranlist", "list");
fv113_export_siswa_iuranlist.formKeyCountName = '<?php echo $v113_export_siswa_iuran_list->FormKeyCountName ?>';

// Form_CustomValidate event
fv113_export_siswa_iuranlist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
fv113_export_siswa_iuranlist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
fv113_export_siswa_iuranlist.lists["x_byr01[]"] = <?php echo $v113_export_siswa_iuran_list->byr01->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr01[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr01->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr02[]"] = <?php echo $v113_export_siswa_iuran_list->byr02->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr02[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr02->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr03[]"] = <?php echo $v113_export_siswa_iuran_list->byr03->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr03[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr03->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr04[]"] = <?php echo $v113_export_siswa_iuran_list->byr04->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr04[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr04->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr05[]"] = <?php echo $v113_export_siswa_iuran_list->byr05->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr05[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr05->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr06[]"] = <?php echo $v113_export_siswa_iuran_list->byr06->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr06[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr06->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr07[]"] = <?php echo $v113_export_siswa_iuran_list->byr07->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr07[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr07->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr08[]"] = <?php echo $v113_export_siswa_iuran_list->byr08->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr08[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr08->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr09[]"] = <?php echo $v113_export_siswa_iuran_list->byr09->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr09[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr09->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr10[]"] = <?php echo $v113_export_siswa_iuran_list->byr10->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr10[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr10->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr11[]"] = <?php echo $v113_export_siswa_iuran_list->byr11->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr11[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr11->options(FALSE, TRUE)) ?>;
fv113_export_siswa_iuranlist.lists["x_byr12[]"] = <?php echo $v113_export_siswa_iuran_list->byr12->Lookup->toClientList() ?>;
fv113_export_siswa_iuranlist.lists["x_byr12[]"].options = <?php echo JsonEncode($v113_export_siswa_iuran_list->byr12->options(FALSE, TRUE)) ?>;

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
<?php if (!$v113_export_siswa_iuran->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($v113_export_siswa_iuran_list->TotalRecs > 0 && $v113_export_siswa_iuran_list->ExportOptions->visible()) { ?>
<?php $v113_export_siswa_iuran_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran_list->ImportOptions->visible()) { ?>
<?php $v113_export_siswa_iuran_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$v113_export_siswa_iuran_list->renderOtherOptions();
?>
<?php $v113_export_siswa_iuran_list->showPageHeader(); ?>
<?php
$v113_export_siswa_iuran_list->showMessage();
?>
<?php if ($v113_export_siswa_iuran_list->TotalRecs > 0 || $v113_export_siswa_iuran->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($v113_export_siswa_iuran_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> v113_export_siswa_iuran">
<form name="fv113_export_siswa_iuranlist" id="fv113_export_siswa_iuranlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($v113_export_siswa_iuran_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $v113_export_siswa_iuran_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="v113_export_siswa_iuran">
<div id="gmp_v113_export_siswa_iuran" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($v113_export_siswa_iuran_list->TotalRecs > 0 || $v113_export_siswa_iuran->isGridEdit()) { ?>
<table id="tbl_v113_export_siswa_iuranlist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$v113_export_siswa_iuran_list->RowType = ROWTYPE_HEADER;

// Render list options
$v113_export_siswa_iuran_list->renderListOptions();

// Render list options (header, left)
$v113_export_siswa_iuran_list->ListOptions->render("header", "left");
?>
<?php if ($v113_export_siswa_iuran->id->Visible) { // id ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->id) == "") { ?>
		<th data-name="id" class="<?php echo $v113_export_siswa_iuran->id->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_id" class="v113_export_siswa_iuran_id"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="id" class="<?php echo $v113_export_siswa_iuran->id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->id) ?>',2);"><div id="elh_v113_export_siswa_iuran_id" class="v113_export_siswa_iuran_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->id->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->daf_kelas_siswa_id) == "") { ?>
		<th data-name="daf_kelas_siswa_id" class="<?php echo $v113_export_siswa_iuran->daf_kelas_siswa_id->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_daf_kelas_siswa_id" class="v113_export_siswa_iuran_daf_kelas_siswa_id"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->daf_kelas_siswa_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="daf_kelas_siswa_id" class="<?php echo $v113_export_siswa_iuran->daf_kelas_siswa_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->daf_kelas_siswa_id) ?>',2);"><div id="elh_v113_export_siswa_iuran_daf_kelas_siswa_id" class="v113_export_siswa_iuran_daf_kelas_siswa_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->daf_kelas_siswa_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->daf_kelas_siswa_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->daf_kelas_siswa_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->iuran_id) == "") { ?>
		<th data-name="iuran_id" class="<?php echo $v113_export_siswa_iuran->iuran_id->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_iuran_id" class="v113_export_siswa_iuran_iuran_id"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->iuran_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="iuran_id" class="<?php echo $v113_export_siswa_iuran->iuran_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->iuran_id) ?>',2);"><div id="elh_v113_export_siswa_iuran_iuran_id" class="v113_export_siswa_iuran_iuran_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->iuran_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->iuran_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->iuran_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->Jumlah) == "") { ?>
		<th data-name="Jumlah" class="<?php echo $v113_export_siswa_iuran->Jumlah->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_Jumlah" class="v113_export_siswa_iuran_Jumlah"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->Jumlah->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Jumlah" class="<?php echo $v113_export_siswa_iuran->Jumlah->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->Jumlah) ?>',2);"><div id="elh_v113_export_siswa_iuran_Jumlah" class="v113_export_siswa_iuran_Jumlah">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->Jumlah->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->Jumlah->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->Jumlah->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr01->Visible) { // byr01 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr01) == "") { ?>
		<th data-name="byr01" class="<?php echo $v113_export_siswa_iuran->byr01->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr01" class="v113_export_siswa_iuran_byr01"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr01->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr01" class="<?php echo $v113_export_siswa_iuran->byr01->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr01) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr01" class="v113_export_siswa_iuran_byr01">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr01->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr01->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr01->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml01->Visible) { // jml01 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml01) == "") { ?>
		<th data-name="jml01" class="<?php echo $v113_export_siswa_iuran->jml01->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml01" class="v113_export_siswa_iuran_jml01"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml01->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml01" class="<?php echo $v113_export_siswa_iuran->jml01->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml01) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml01" class="v113_export_siswa_iuran_jml01">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml01->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml01->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml01->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl01->Visible) { // tgl01 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl01) == "") { ?>
		<th data-name="tgl01" class="<?php echo $v113_export_siswa_iuran->tgl01->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl01" class="v113_export_siswa_iuran_tgl01"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl01->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl01" class="<?php echo $v113_export_siswa_iuran->tgl01->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl01) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl01" class="v113_export_siswa_iuran_tgl01">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl01->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl01->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl01->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr02->Visible) { // byr02 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr02) == "") { ?>
		<th data-name="byr02" class="<?php echo $v113_export_siswa_iuran->byr02->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr02" class="v113_export_siswa_iuran_byr02"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr02->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr02" class="<?php echo $v113_export_siswa_iuran->byr02->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr02) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr02" class="v113_export_siswa_iuran_byr02">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr02->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr02->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr02->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml02->Visible) { // jml02 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml02) == "") { ?>
		<th data-name="jml02" class="<?php echo $v113_export_siswa_iuran->jml02->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml02" class="v113_export_siswa_iuran_jml02"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml02->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml02" class="<?php echo $v113_export_siswa_iuran->jml02->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml02) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml02" class="v113_export_siswa_iuran_jml02">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml02->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml02->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml02->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl02->Visible) { // tgl02 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl02) == "") { ?>
		<th data-name="tgl02" class="<?php echo $v113_export_siswa_iuran->tgl02->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl02" class="v113_export_siswa_iuran_tgl02"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl02->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl02" class="<?php echo $v113_export_siswa_iuran->tgl02->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl02) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl02" class="v113_export_siswa_iuran_tgl02">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl02->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl02->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl02->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr03->Visible) { // byr03 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr03) == "") { ?>
		<th data-name="byr03" class="<?php echo $v113_export_siswa_iuran->byr03->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr03" class="v113_export_siswa_iuran_byr03"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr03->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr03" class="<?php echo $v113_export_siswa_iuran->byr03->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr03) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr03" class="v113_export_siswa_iuran_byr03">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr03->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr03->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr03->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml03->Visible) { // jml03 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml03) == "") { ?>
		<th data-name="jml03" class="<?php echo $v113_export_siswa_iuran->jml03->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml03" class="v113_export_siswa_iuran_jml03"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml03->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml03" class="<?php echo $v113_export_siswa_iuran->jml03->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml03) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml03" class="v113_export_siswa_iuran_jml03">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml03->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml03->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml03->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl03->Visible) { // tgl03 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl03) == "") { ?>
		<th data-name="tgl03" class="<?php echo $v113_export_siswa_iuran->tgl03->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl03" class="v113_export_siswa_iuran_tgl03"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl03->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl03" class="<?php echo $v113_export_siswa_iuran->tgl03->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl03) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl03" class="v113_export_siswa_iuran_tgl03">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl03->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl03->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl03->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr04->Visible) { // byr04 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr04) == "") { ?>
		<th data-name="byr04" class="<?php echo $v113_export_siswa_iuran->byr04->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr04" class="v113_export_siswa_iuran_byr04"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr04->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr04" class="<?php echo $v113_export_siswa_iuran->byr04->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr04) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr04" class="v113_export_siswa_iuran_byr04">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr04->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr04->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr04->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml04->Visible) { // jml04 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml04) == "") { ?>
		<th data-name="jml04" class="<?php echo $v113_export_siswa_iuran->jml04->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml04" class="v113_export_siswa_iuran_jml04"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml04->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml04" class="<?php echo $v113_export_siswa_iuran->jml04->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml04) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml04" class="v113_export_siswa_iuran_jml04">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml04->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml04->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml04->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl04->Visible) { // tgl04 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl04) == "") { ?>
		<th data-name="tgl04" class="<?php echo $v113_export_siswa_iuran->tgl04->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl04" class="v113_export_siswa_iuran_tgl04"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl04->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl04" class="<?php echo $v113_export_siswa_iuran->tgl04->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl04) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl04" class="v113_export_siswa_iuran_tgl04">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl04->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl04->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl04->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr05->Visible) { // byr05 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr05) == "") { ?>
		<th data-name="byr05" class="<?php echo $v113_export_siswa_iuran->byr05->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr05" class="v113_export_siswa_iuran_byr05"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr05->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr05" class="<?php echo $v113_export_siswa_iuran->byr05->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr05) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr05" class="v113_export_siswa_iuran_byr05">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr05->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr05->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr05->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml05->Visible) { // jml05 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml05) == "") { ?>
		<th data-name="jml05" class="<?php echo $v113_export_siswa_iuran->jml05->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml05" class="v113_export_siswa_iuran_jml05"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml05->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml05" class="<?php echo $v113_export_siswa_iuran->jml05->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml05) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml05" class="v113_export_siswa_iuran_jml05">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml05->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml05->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml05->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl05->Visible) { // tgl05 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl05) == "") { ?>
		<th data-name="tgl05" class="<?php echo $v113_export_siswa_iuran->tgl05->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl05" class="v113_export_siswa_iuran_tgl05"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl05->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl05" class="<?php echo $v113_export_siswa_iuran->tgl05->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl05) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl05" class="v113_export_siswa_iuran_tgl05">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl05->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl05->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl05->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr06->Visible) { // byr06 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr06) == "") { ?>
		<th data-name="byr06" class="<?php echo $v113_export_siswa_iuran->byr06->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr06" class="v113_export_siswa_iuran_byr06"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr06->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr06" class="<?php echo $v113_export_siswa_iuran->byr06->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr06) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr06" class="v113_export_siswa_iuran_byr06">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr06->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr06->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr06->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml06->Visible) { // jml06 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml06) == "") { ?>
		<th data-name="jml06" class="<?php echo $v113_export_siswa_iuran->jml06->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml06" class="v113_export_siswa_iuran_jml06"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml06->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml06" class="<?php echo $v113_export_siswa_iuran->jml06->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml06) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml06" class="v113_export_siswa_iuran_jml06">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml06->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml06->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml06->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl06->Visible) { // tgl06 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl06) == "") { ?>
		<th data-name="tgl06" class="<?php echo $v113_export_siswa_iuran->tgl06->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl06" class="v113_export_siswa_iuran_tgl06"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl06->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl06" class="<?php echo $v113_export_siswa_iuran->tgl06->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl06) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl06" class="v113_export_siswa_iuran_tgl06">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl06->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl06->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl06->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr07->Visible) { // byr07 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr07) == "") { ?>
		<th data-name="byr07" class="<?php echo $v113_export_siswa_iuran->byr07->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr07" class="v113_export_siswa_iuran_byr07"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr07->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr07" class="<?php echo $v113_export_siswa_iuran->byr07->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr07) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr07" class="v113_export_siswa_iuran_byr07">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr07->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr07->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr07->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml07->Visible) { // jml07 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml07) == "") { ?>
		<th data-name="jml07" class="<?php echo $v113_export_siswa_iuran->jml07->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml07" class="v113_export_siswa_iuran_jml07"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml07->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml07" class="<?php echo $v113_export_siswa_iuran->jml07->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml07) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml07" class="v113_export_siswa_iuran_jml07">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml07->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml07->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml07->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl07->Visible) { // tgl07 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl07) == "") { ?>
		<th data-name="tgl07" class="<?php echo $v113_export_siswa_iuran->tgl07->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl07" class="v113_export_siswa_iuran_tgl07"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl07->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl07" class="<?php echo $v113_export_siswa_iuran->tgl07->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl07) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl07" class="v113_export_siswa_iuran_tgl07">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl07->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl07->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl07->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr08->Visible) { // byr08 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr08) == "") { ?>
		<th data-name="byr08" class="<?php echo $v113_export_siswa_iuran->byr08->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr08" class="v113_export_siswa_iuran_byr08"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr08->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr08" class="<?php echo $v113_export_siswa_iuran->byr08->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr08) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr08" class="v113_export_siswa_iuran_byr08">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr08->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr08->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr08->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml08->Visible) { // jml08 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml08) == "") { ?>
		<th data-name="jml08" class="<?php echo $v113_export_siswa_iuran->jml08->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml08" class="v113_export_siswa_iuran_jml08"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml08->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml08" class="<?php echo $v113_export_siswa_iuran->jml08->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml08) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml08" class="v113_export_siswa_iuran_jml08">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml08->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml08->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml08->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl08->Visible) { // tgl08 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl08) == "") { ?>
		<th data-name="tgl08" class="<?php echo $v113_export_siswa_iuran->tgl08->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl08" class="v113_export_siswa_iuran_tgl08"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl08->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl08" class="<?php echo $v113_export_siswa_iuran->tgl08->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl08) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl08" class="v113_export_siswa_iuran_tgl08">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl08->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl08->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl08->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr09->Visible) { // byr09 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr09) == "") { ?>
		<th data-name="byr09" class="<?php echo $v113_export_siswa_iuran->byr09->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr09" class="v113_export_siswa_iuran_byr09"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr09->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr09" class="<?php echo $v113_export_siswa_iuran->byr09->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr09) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr09" class="v113_export_siswa_iuran_byr09">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr09->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr09->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr09->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml09->Visible) { // jml09 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml09) == "") { ?>
		<th data-name="jml09" class="<?php echo $v113_export_siswa_iuran->jml09->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml09" class="v113_export_siswa_iuran_jml09"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml09->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml09" class="<?php echo $v113_export_siswa_iuran->jml09->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml09) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml09" class="v113_export_siswa_iuran_jml09">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml09->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml09->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml09->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl09->Visible) { // tgl09 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl09) == "") { ?>
		<th data-name="tgl09" class="<?php echo $v113_export_siswa_iuran->tgl09->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl09" class="v113_export_siswa_iuran_tgl09"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl09->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl09" class="<?php echo $v113_export_siswa_iuran->tgl09->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl09) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl09" class="v113_export_siswa_iuran_tgl09">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl09->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl09->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl09->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr10->Visible) { // byr10 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr10) == "") { ?>
		<th data-name="byr10" class="<?php echo $v113_export_siswa_iuran->byr10->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr10" class="v113_export_siswa_iuran_byr10"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr10->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr10" class="<?php echo $v113_export_siswa_iuran->byr10->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr10) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr10" class="v113_export_siswa_iuran_byr10">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr10->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr10->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr10->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml10->Visible) { // jml10 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml10) == "") { ?>
		<th data-name="jml10" class="<?php echo $v113_export_siswa_iuran->jml10->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml10" class="v113_export_siswa_iuran_jml10"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml10->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml10" class="<?php echo $v113_export_siswa_iuran->jml10->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml10) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml10" class="v113_export_siswa_iuran_jml10">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml10->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml10->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml10->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl10->Visible) { // tgl10 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl10) == "") { ?>
		<th data-name="tgl10" class="<?php echo $v113_export_siswa_iuran->tgl10->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl10" class="v113_export_siswa_iuran_tgl10"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl10->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl10" class="<?php echo $v113_export_siswa_iuran->tgl10->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl10) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl10" class="v113_export_siswa_iuran_tgl10">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl10->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl10->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl10->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr11->Visible) { // byr11 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr11) == "") { ?>
		<th data-name="byr11" class="<?php echo $v113_export_siswa_iuran->byr11->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr11" class="v113_export_siswa_iuran_byr11"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr11->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr11" class="<?php echo $v113_export_siswa_iuran->byr11->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr11) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr11" class="v113_export_siswa_iuran_byr11">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr11->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr11->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr11->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml11->Visible) { // jml11 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml11) == "") { ?>
		<th data-name="jml11" class="<?php echo $v113_export_siswa_iuran->jml11->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml11" class="v113_export_siswa_iuran_jml11"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml11->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml11" class="<?php echo $v113_export_siswa_iuran->jml11->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml11) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml11" class="v113_export_siswa_iuran_jml11">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml11->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml11->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml11->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl11->Visible) { // tgl11 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl11) == "") { ?>
		<th data-name="tgl11" class="<?php echo $v113_export_siswa_iuran->tgl11->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl11" class="v113_export_siswa_iuran_tgl11"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl11->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl11" class="<?php echo $v113_export_siswa_iuran->tgl11->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl11) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl11" class="v113_export_siswa_iuran_tgl11">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl11->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl11->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl11->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->byr12->Visible) { // byr12 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->byr12) == "") { ?>
		<th data-name="byr12" class="<?php echo $v113_export_siswa_iuran->byr12->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_byr12" class="v113_export_siswa_iuran_byr12"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr12->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr12" class="<?php echo $v113_export_siswa_iuran->byr12->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->byr12) ?>',2);"><div id="elh_v113_export_siswa_iuran_byr12" class="v113_export_siswa_iuran_byr12">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->byr12->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->byr12->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->byr12->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->jml12->Visible) { // jml12 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->jml12) == "") { ?>
		<th data-name="jml12" class="<?php echo $v113_export_siswa_iuran->jml12->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_jml12" class="v113_export_siswa_iuran_jml12"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml12->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml12" class="<?php echo $v113_export_siswa_iuran->jml12->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->jml12) ?>',2);"><div id="elh_v113_export_siswa_iuran_jml12" class="v113_export_siswa_iuran_jml12">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->jml12->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->jml12->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->jml12->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v113_export_siswa_iuran->tgl12->Visible) { // tgl12 ?>
	<?php if ($v113_export_siswa_iuran->sortUrl($v113_export_siswa_iuran->tgl12) == "") { ?>
		<th data-name="tgl12" class="<?php echo $v113_export_siswa_iuran->tgl12->headerCellClass() ?>"><div id="elh_v113_export_siswa_iuran_tgl12" class="v113_export_siswa_iuran_tgl12"><div class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl12->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl12" class="<?php echo $v113_export_siswa_iuran->tgl12->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $v113_export_siswa_iuran->SortUrl($v113_export_siswa_iuran->tgl12) ?>',2);"><div id="elh_v113_export_siswa_iuran_tgl12" class="v113_export_siswa_iuran_tgl12">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $v113_export_siswa_iuran->tgl12->caption() ?></span><span class="ew-table-header-sort"><?php if ($v113_export_siswa_iuran->tgl12->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($v113_export_siswa_iuran->tgl12->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$v113_export_siswa_iuran_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($v113_export_siswa_iuran->ExportAll && $v113_export_siswa_iuran->isExport()) {
	$v113_export_siswa_iuran_list->StopRec = $v113_export_siswa_iuran_list->TotalRecs;
} else {

	// Set the last record to display
	if ($v113_export_siswa_iuran_list->TotalRecs > $v113_export_siswa_iuran_list->StartRec + $v113_export_siswa_iuran_list->DisplayRecs - 1)
		$v113_export_siswa_iuran_list->StopRec = $v113_export_siswa_iuran_list->StartRec + $v113_export_siswa_iuran_list->DisplayRecs - 1;
	else
		$v113_export_siswa_iuran_list->StopRec = $v113_export_siswa_iuran_list->TotalRecs;
}
$v113_export_siswa_iuran_list->RecCnt = $v113_export_siswa_iuran_list->StartRec - 1;
if ($v113_export_siswa_iuran_list->Recordset && !$v113_export_siswa_iuran_list->Recordset->EOF) {
	$v113_export_siswa_iuran_list->Recordset->moveFirst();
	$selectLimit = $v113_export_siswa_iuran_list->UseSelectLimit;
	if (!$selectLimit && $v113_export_siswa_iuran_list->StartRec > 1)
		$v113_export_siswa_iuran_list->Recordset->move($v113_export_siswa_iuran_list->StartRec - 1);
} elseif (!$v113_export_siswa_iuran->AllowAddDeleteRow && $v113_export_siswa_iuran_list->StopRec == 0) {
	$v113_export_siswa_iuran_list->StopRec = $v113_export_siswa_iuran->GridAddRowCount;
}

// Initialize aggregate
$v113_export_siswa_iuran->RowType = ROWTYPE_AGGREGATEINIT;
$v113_export_siswa_iuran->resetAttributes();
$v113_export_siswa_iuran_list->renderRow();
while ($v113_export_siswa_iuran_list->RecCnt < $v113_export_siswa_iuran_list->StopRec) {
	$v113_export_siswa_iuran_list->RecCnt++;
	if ($v113_export_siswa_iuran_list->RecCnt >= $v113_export_siswa_iuran_list->StartRec) {
		$v113_export_siswa_iuran_list->RowCnt++;

		// Set up key count
		$v113_export_siswa_iuran_list->KeyCount = $v113_export_siswa_iuran_list->RowIndex;

		// Init row class and style
		$v113_export_siswa_iuran->resetAttributes();
		$v113_export_siswa_iuran->CssClass = "";
		if ($v113_export_siswa_iuran->isGridAdd()) {
		} else {
			$v113_export_siswa_iuran_list->loadRowValues($v113_export_siswa_iuran_list->Recordset); // Load row values
		}
		$v113_export_siswa_iuran->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$v113_export_siswa_iuran->RowAttrs = array_merge($v113_export_siswa_iuran->RowAttrs, array('data-rowindex'=>$v113_export_siswa_iuran_list->RowCnt, 'id'=>'r' . $v113_export_siswa_iuran_list->RowCnt . '_v113_export_siswa_iuran', 'data-rowtype'=>$v113_export_siswa_iuran->RowType));

		// Render row
		$v113_export_siswa_iuran_list->renderRow();

		// Render list options
		$v113_export_siswa_iuran_list->renderListOptions();
?>
	<tr<?php echo $v113_export_siswa_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v113_export_siswa_iuran_list->ListOptions->render("body", "left", $v113_export_siswa_iuran_list->RowCnt);
?>
	<?php if ($v113_export_siswa_iuran->id->Visible) { // id ?>
		<td data-name="id"<?php echo $v113_export_siswa_iuran->id->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_id" class="v113_export_siswa_iuran_id">
<span<?php echo $v113_export_siswa_iuran->id->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
		<td data-name="daf_kelas_siswa_id"<?php echo $v113_export_siswa_iuran->daf_kelas_siswa_id->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_daf_kelas_siswa_id" class="v113_export_siswa_iuran_daf_kelas_siswa_id">
<span<?php echo $v113_export_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->daf_kelas_siswa_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
		<td data-name="iuran_id"<?php echo $v113_export_siswa_iuran->iuran_id->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_iuran_id" class="v113_export_siswa_iuran_iuran_id">
<span<?php echo $v113_export_siswa_iuran->iuran_id->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->iuran_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
		<td data-name="Jumlah"<?php echo $v113_export_siswa_iuran->Jumlah->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_Jumlah" class="v113_export_siswa_iuran_Jumlah">
<span<?php echo $v113_export_siswa_iuran->Jumlah->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->Jumlah->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr01->Visible) { // byr01 ?>
		<td data-name="byr01"<?php echo $v113_export_siswa_iuran->byr01->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr01" class="v113_export_siswa_iuran_byr01">
<span<?php echo $v113_export_siswa_iuran->byr01->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr01->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr01->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr01->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml01->Visible) { // jml01 ?>
		<td data-name="jml01"<?php echo $v113_export_siswa_iuran->jml01->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml01" class="v113_export_siswa_iuran_jml01">
<span<?php echo $v113_export_siswa_iuran->jml01->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml01->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl01->Visible) { // tgl01 ?>
		<td data-name="tgl01"<?php echo $v113_export_siswa_iuran->tgl01->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl01" class="v113_export_siswa_iuran_tgl01">
<span<?php echo $v113_export_siswa_iuran->tgl01->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl01->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr02->Visible) { // byr02 ?>
		<td data-name="byr02"<?php echo $v113_export_siswa_iuran->byr02->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr02" class="v113_export_siswa_iuran_byr02">
<span<?php echo $v113_export_siswa_iuran->byr02->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr02->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr02->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr02->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml02->Visible) { // jml02 ?>
		<td data-name="jml02"<?php echo $v113_export_siswa_iuran->jml02->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml02" class="v113_export_siswa_iuran_jml02">
<span<?php echo $v113_export_siswa_iuran->jml02->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml02->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl02->Visible) { // tgl02 ?>
		<td data-name="tgl02"<?php echo $v113_export_siswa_iuran->tgl02->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl02" class="v113_export_siswa_iuran_tgl02">
<span<?php echo $v113_export_siswa_iuran->tgl02->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl02->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr03->Visible) { // byr03 ?>
		<td data-name="byr03"<?php echo $v113_export_siswa_iuran->byr03->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr03" class="v113_export_siswa_iuran_byr03">
<span<?php echo $v113_export_siswa_iuran->byr03->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr03->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr03->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr03->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml03->Visible) { // jml03 ?>
		<td data-name="jml03"<?php echo $v113_export_siswa_iuran->jml03->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml03" class="v113_export_siswa_iuran_jml03">
<span<?php echo $v113_export_siswa_iuran->jml03->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml03->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl03->Visible) { // tgl03 ?>
		<td data-name="tgl03"<?php echo $v113_export_siswa_iuran->tgl03->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl03" class="v113_export_siswa_iuran_tgl03">
<span<?php echo $v113_export_siswa_iuran->tgl03->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl03->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr04->Visible) { // byr04 ?>
		<td data-name="byr04"<?php echo $v113_export_siswa_iuran->byr04->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr04" class="v113_export_siswa_iuran_byr04">
<span<?php echo $v113_export_siswa_iuran->byr04->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr04->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr04->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr04->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml04->Visible) { // jml04 ?>
		<td data-name="jml04"<?php echo $v113_export_siswa_iuran->jml04->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml04" class="v113_export_siswa_iuran_jml04">
<span<?php echo $v113_export_siswa_iuran->jml04->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml04->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl04->Visible) { // tgl04 ?>
		<td data-name="tgl04"<?php echo $v113_export_siswa_iuran->tgl04->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl04" class="v113_export_siswa_iuran_tgl04">
<span<?php echo $v113_export_siswa_iuran->tgl04->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl04->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr05->Visible) { // byr05 ?>
		<td data-name="byr05"<?php echo $v113_export_siswa_iuran->byr05->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr05" class="v113_export_siswa_iuran_byr05">
<span<?php echo $v113_export_siswa_iuran->byr05->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr05->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr05->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr05->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml05->Visible) { // jml05 ?>
		<td data-name="jml05"<?php echo $v113_export_siswa_iuran->jml05->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml05" class="v113_export_siswa_iuran_jml05">
<span<?php echo $v113_export_siswa_iuran->jml05->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml05->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl05->Visible) { // tgl05 ?>
		<td data-name="tgl05"<?php echo $v113_export_siswa_iuran->tgl05->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl05" class="v113_export_siswa_iuran_tgl05">
<span<?php echo $v113_export_siswa_iuran->tgl05->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl05->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr06->Visible) { // byr06 ?>
		<td data-name="byr06"<?php echo $v113_export_siswa_iuran->byr06->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr06" class="v113_export_siswa_iuran_byr06">
<span<?php echo $v113_export_siswa_iuran->byr06->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr06->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr06->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr06->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml06->Visible) { // jml06 ?>
		<td data-name="jml06"<?php echo $v113_export_siswa_iuran->jml06->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml06" class="v113_export_siswa_iuran_jml06">
<span<?php echo $v113_export_siswa_iuran->jml06->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml06->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl06->Visible) { // tgl06 ?>
		<td data-name="tgl06"<?php echo $v113_export_siswa_iuran->tgl06->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl06" class="v113_export_siswa_iuran_tgl06">
<span<?php echo $v113_export_siswa_iuran->tgl06->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl06->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr07->Visible) { // byr07 ?>
		<td data-name="byr07"<?php echo $v113_export_siswa_iuran->byr07->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr07" class="v113_export_siswa_iuran_byr07">
<span<?php echo $v113_export_siswa_iuran->byr07->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr07->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr07->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr07->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml07->Visible) { // jml07 ?>
		<td data-name="jml07"<?php echo $v113_export_siswa_iuran->jml07->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml07" class="v113_export_siswa_iuran_jml07">
<span<?php echo $v113_export_siswa_iuran->jml07->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml07->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl07->Visible) { // tgl07 ?>
		<td data-name="tgl07"<?php echo $v113_export_siswa_iuran->tgl07->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl07" class="v113_export_siswa_iuran_tgl07">
<span<?php echo $v113_export_siswa_iuran->tgl07->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl07->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr08->Visible) { // byr08 ?>
		<td data-name="byr08"<?php echo $v113_export_siswa_iuran->byr08->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr08" class="v113_export_siswa_iuran_byr08">
<span<?php echo $v113_export_siswa_iuran->byr08->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr08->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr08->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr08->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml08->Visible) { // jml08 ?>
		<td data-name="jml08"<?php echo $v113_export_siswa_iuran->jml08->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml08" class="v113_export_siswa_iuran_jml08">
<span<?php echo $v113_export_siswa_iuran->jml08->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml08->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl08->Visible) { // tgl08 ?>
		<td data-name="tgl08"<?php echo $v113_export_siswa_iuran->tgl08->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl08" class="v113_export_siswa_iuran_tgl08">
<span<?php echo $v113_export_siswa_iuran->tgl08->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl08->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr09->Visible) { // byr09 ?>
		<td data-name="byr09"<?php echo $v113_export_siswa_iuran->byr09->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr09" class="v113_export_siswa_iuran_byr09">
<span<?php echo $v113_export_siswa_iuran->byr09->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr09->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr09->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr09->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml09->Visible) { // jml09 ?>
		<td data-name="jml09"<?php echo $v113_export_siswa_iuran->jml09->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml09" class="v113_export_siswa_iuran_jml09">
<span<?php echo $v113_export_siswa_iuran->jml09->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml09->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl09->Visible) { // tgl09 ?>
		<td data-name="tgl09"<?php echo $v113_export_siswa_iuran->tgl09->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl09" class="v113_export_siswa_iuran_tgl09">
<span<?php echo $v113_export_siswa_iuran->tgl09->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl09->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr10->Visible) { // byr10 ?>
		<td data-name="byr10"<?php echo $v113_export_siswa_iuran->byr10->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr10" class="v113_export_siswa_iuran_byr10">
<span<?php echo $v113_export_siswa_iuran->byr10->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr10->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr10->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr10->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml10->Visible) { // jml10 ?>
		<td data-name="jml10"<?php echo $v113_export_siswa_iuran->jml10->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml10" class="v113_export_siswa_iuran_jml10">
<span<?php echo $v113_export_siswa_iuran->jml10->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml10->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl10->Visible) { // tgl10 ?>
		<td data-name="tgl10"<?php echo $v113_export_siswa_iuran->tgl10->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl10" class="v113_export_siswa_iuran_tgl10">
<span<?php echo $v113_export_siswa_iuran->tgl10->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl10->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr11->Visible) { // byr11 ?>
		<td data-name="byr11"<?php echo $v113_export_siswa_iuran->byr11->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr11" class="v113_export_siswa_iuran_byr11">
<span<?php echo $v113_export_siswa_iuran->byr11->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr11->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr11->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr11->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml11->Visible) { // jml11 ?>
		<td data-name="jml11"<?php echo $v113_export_siswa_iuran->jml11->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml11" class="v113_export_siswa_iuran_jml11">
<span<?php echo $v113_export_siswa_iuran->jml11->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml11->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl11->Visible) { // tgl11 ?>
		<td data-name="tgl11"<?php echo $v113_export_siswa_iuran->tgl11->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl11" class="v113_export_siswa_iuran_tgl11">
<span<?php echo $v113_export_siswa_iuran->tgl11->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl11->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->byr12->Visible) { // byr12 ?>
		<td data-name="byr12"<?php echo $v113_export_siswa_iuran->byr12->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_byr12" class="v113_export_siswa_iuran_byr12">
<span<?php echo $v113_export_siswa_iuran->byr12->viewAttributes() ?>>
<?php if (ConvertToBool($v113_export_siswa_iuran->byr12->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr12->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $v113_export_siswa_iuran->byr12->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->jml12->Visible) { // jml12 ?>
		<td data-name="jml12"<?php echo $v113_export_siswa_iuran->jml12->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_jml12" class="v113_export_siswa_iuran_jml12">
<span<?php echo $v113_export_siswa_iuran->jml12->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->jml12->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($v113_export_siswa_iuran->tgl12->Visible) { // tgl12 ?>
		<td data-name="tgl12"<?php echo $v113_export_siswa_iuran->tgl12->cellAttributes() ?>>
<span id="el<?php echo $v113_export_siswa_iuran_list->RowCnt ?>_v113_export_siswa_iuran_tgl12" class="v113_export_siswa_iuran_tgl12">
<span<?php echo $v113_export_siswa_iuran->tgl12->viewAttributes() ?>>
<?php echo $v113_export_siswa_iuran->tgl12->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$v113_export_siswa_iuran_list->ListOptions->render("body", "right", $v113_export_siswa_iuran_list->RowCnt);
?>
	</tr>
<?php
	}
	if (!$v113_export_siswa_iuran->isGridAdd())
		$v113_export_siswa_iuran_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if (!$v113_export_siswa_iuran->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($v113_export_siswa_iuran_list->Recordset)
	$v113_export_siswa_iuran_list->Recordset->Close();
?>
<?php if (!$v113_export_siswa_iuran->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$v113_export_siswa_iuran->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($v113_export_siswa_iuran_list->Pager)) $v113_export_siswa_iuran_list->Pager = new PrevNextPager($v113_export_siswa_iuran_list->StartRec, $v113_export_siswa_iuran_list->DisplayRecs, $v113_export_siswa_iuran_list->TotalRecs, $v113_export_siswa_iuran_list->AutoHidePager) ?>
<?php if ($v113_export_siswa_iuran_list->Pager->RecordCount > 0 && $v113_export_siswa_iuran_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($v113_export_siswa_iuran_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $v113_export_siswa_iuran_list->pageUrl() ?>start=<?php echo $v113_export_siswa_iuran_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($v113_export_siswa_iuran_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $v113_export_siswa_iuran_list->pageUrl() ?>start=<?php echo $v113_export_siswa_iuran_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $v113_export_siswa_iuran_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($v113_export_siswa_iuran_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $v113_export_siswa_iuran_list->pageUrl() ?>start=<?php echo $v113_export_siswa_iuran_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($v113_export_siswa_iuran_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $v113_export_siswa_iuran_list->pageUrl() ?>start=<?php echo $v113_export_siswa_iuran_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $v113_export_siswa_iuran_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($v113_export_siswa_iuran_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $v113_export_siswa_iuran_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $v113_export_siswa_iuran_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $v113_export_siswa_iuran_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($v113_export_siswa_iuran_list->TotalRecs > 0 && (!$v113_export_siswa_iuran_list->AutoHidePageSizeSelector || $v113_export_siswa_iuran_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="v113_export_siswa_iuran">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($v113_export_siswa_iuran_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($v113_export_siswa_iuran_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="30"<?php if ($v113_export_siswa_iuran_list->DisplayRecs == 30) { ?> selected<?php } ?>>30</option>
<option value="50"<?php if ($v113_export_siswa_iuran_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($v113_export_siswa_iuran_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($v113_export_siswa_iuran->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $v113_export_siswa_iuran_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($v113_export_siswa_iuran_list->TotalRecs == 0 && !$v113_export_siswa_iuran->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $v113_export_siswa_iuran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$v113_export_siswa_iuran_list->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$v113_export_siswa_iuran->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$v113_export_siswa_iuran_list->terminate();
?>