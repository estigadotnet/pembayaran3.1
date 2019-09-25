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
WriteHeader(FALSE, "utf-8");

// Create page object
$t103_daf_kelas_siswa_iuran_preview = new t103_daf_kelas_siswa_iuran_preview();

// Run the page
$t103_daf_kelas_siswa_iuran_preview->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_daf_kelas_siswa_iuran_preview->Page_Render();
?>
<?php $t103_daf_kelas_siswa_iuran_preview->showPageHeader(); ?>
<div class="card ew-grid t103_daf_kelas_siswa_iuran"><!-- .card -->
<?php if ($t103_daf_kelas_siswa_iuran_preview->TotalRecs > 0) { ?>
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel"><!-- .table-responsive -->
<table class="table ew-table ew-preview-table"><!-- .table -->
	<thead><!-- Table header -->
		<tr class="ew-table-header">
<?php

// Render list options
$t103_daf_kelas_siswa_iuran_preview->renderListOptions();

// Render list options (header, left)
$t103_daf_kelas_siswa_iuran_preview->ListOptions->render("header", "left");
?>
<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->id) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->id->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->id->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->id->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->id->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->id->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->id->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->id->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->iuran_id) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->iuran_id->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->iuran_id->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->iuran_id->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->iuran_id->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->Jumlah) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->Jumlah->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->Jumlah->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->Jumlah->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->Jumlah->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr01) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr01->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr01->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr01->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr01->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr01->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr01->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr01->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml01) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml01->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml01->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml01->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml01->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml01->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml01->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml01->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl01) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl01->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl01->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl01->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl01->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr02) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr02->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr02->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr02->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr02->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr02->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr02->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr02->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml02) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml02->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml02->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml02->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml02->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml02->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml02->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml02->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl02) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl02->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl02->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl02->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl02->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr03) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr03->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr03->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr03->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr03->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr03->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr03->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr03->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml03) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml03->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml03->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml03->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml03->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml03->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml03->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml03->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl03) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl03->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl03->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl03->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl03->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr04) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr04->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr04->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr04->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr04->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr04->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr04->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr04->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml04) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml04->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml04->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml04->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml04->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml04->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml04->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml04->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl04) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl04->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl04->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl04->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl04->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr05) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr05->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr05->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr05->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr05->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr05->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr05->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr05->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml05) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml05->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml05->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml05->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml05->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml05->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml05->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml05->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl05) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl05->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl05->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl05->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl05->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr06) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr06->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr06->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr06->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr06->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr06->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr06->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr06->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml06) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml06->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml06->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml06->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml06->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml06->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml06->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml06->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl06) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl06->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl06->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl06->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl06->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr07) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr07->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr07->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr07->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr07->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr07->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr07->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr07->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml07) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml07->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml07->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml07->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml07->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml07->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml07->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml07->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl07) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl07->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl07->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl07->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl07->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr08) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr08->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr08->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr08->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr08->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr08->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr08->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr08->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml08) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml08->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml08->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml08->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml08->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml08->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml08->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml08->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl08) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl08->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl08->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl08->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl08->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr09) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr09->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr09->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr09->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr09->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr09->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr09->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr09->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml09) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml09->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml09->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml09->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml09->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml09->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml09->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml09->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl09) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl09->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl09->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl09->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl09->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr10) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr10->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr10->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr10->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr10->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr10->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr10->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr10->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml10) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml10->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml10->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml10->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml10->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml10->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml10->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml10->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl10) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl10->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl10->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl10->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl10->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr11) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr11->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr11->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr11->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr11->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr11->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr11->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr11->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml11) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml11->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml11->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml11->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml11->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml11->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml11->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml11->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl11) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl11->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl11->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl11->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl11->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr12) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr12->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr12->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr12->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->byr12->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr12->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr12->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->byr12->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml12) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml12->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml12->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml12->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->jml12->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml12->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml12->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->jml12->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl12) == "") { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->headerCellClass() ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl12->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->Name ?>" data-sort-order="<?php echo $t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl12->Name && $t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl12->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran_preview->SortField == $t103_daf_kelas_siswa_iuran->tgl12->Name) { ?><?php if ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t103_daf_kelas_siswa_iuran_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t103_daf_kelas_siswa_iuran_preview->ListOptions->render("header", "right");
?>
		</tr>
	</thead>
	<tbody><!-- Table body -->
<?php
$t103_daf_kelas_siswa_iuran_preview->RecCount = 0;
$t103_daf_kelas_siswa_iuran_preview->RowCnt = 0;
while ($t103_daf_kelas_siswa_iuran_preview->Recordset && !$t103_daf_kelas_siswa_iuran_preview->Recordset->EOF) {

	// Init row class and style
	$t103_daf_kelas_siswa_iuran_preview->RecCount++;
	$t103_daf_kelas_siswa_iuran_preview->RowCnt++;
	$t103_daf_kelas_siswa_iuran_preview->CssStyle = "";
	$t103_daf_kelas_siswa_iuran_preview->loadListRowValues($t103_daf_kelas_siswa_iuran_preview->Recordset);

	// Render row
	$t103_daf_kelas_siswa_iuran_preview->RowType = ROWTYPE_PREVIEW; // Preview record
	$t103_daf_kelas_siswa_iuran_preview->resetAttributes();
	$t103_daf_kelas_siswa_iuran_preview->renderListRow();

	// Render list options
	$t103_daf_kelas_siswa_iuran_preview->renderListOptions();
?>
	<tr<?php echo $t103_daf_kelas_siswa_iuran_preview->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t103_daf_kelas_siswa_iuran_preview->ListOptions->render("body", "left", $t103_daf_kelas_siswa_iuran_preview->RowCnt);
?>
<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
		<!-- id -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->id->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->id->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
		<!-- daf_kelas_siswa_id -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
		<!-- iuran_id -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
		<!-- Jumlah -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
		<!-- byr01 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr01->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr01->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr01->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr01->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
		<!-- jml01 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml01->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml01->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml01->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
		<!-- tgl01 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl01->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl01->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl01->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
		<!-- byr02 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr02->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr02->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr02->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr02->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
		<!-- jml02 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml02->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml02->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml02->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
		<!-- tgl02 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl02->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl02->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl02->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
		<!-- byr03 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr03->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr03->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr03->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr03->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
		<!-- jml03 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml03->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml03->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml03->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
		<!-- tgl03 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl03->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl03->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl03->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
		<!-- byr04 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr04->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr04->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr04->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr04->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
		<!-- jml04 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml04->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml04->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml04->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
		<!-- tgl04 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl04->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl04->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl04->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
		<!-- byr05 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr05->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr05->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr05->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr05->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
		<!-- jml05 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml05->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml05->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml05->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
		<!-- tgl05 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl05->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl05->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl05->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
		<!-- byr06 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr06->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr06->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr06->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr06->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
		<!-- jml06 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml06->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml06->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml06->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
		<!-- tgl06 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl06->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl06->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl06->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
		<!-- byr07 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr07->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr07->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr07->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr07->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
		<!-- jml07 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml07->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml07->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml07->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
		<!-- tgl07 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl07->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl07->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl07->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
		<!-- byr08 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr08->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr08->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr08->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr08->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
		<!-- jml08 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml08->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml08->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml08->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
		<!-- tgl08 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl08->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl08->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl08->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
		<!-- byr09 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr09->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr09->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr09->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr09->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
		<!-- jml09 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml09->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml09->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml09->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
		<!-- tgl09 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl09->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl09->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl09->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
		<!-- byr10 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr10->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr10->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr10->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr10->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
		<!-- jml10 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml10->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml10->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml10->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
		<!-- tgl10 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl10->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl10->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl10->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
		<!-- byr11 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr11->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr11->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr11->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr11->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
		<!-- jml11 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml11->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml11->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml11->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
		<!-- tgl11 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl11->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl11->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl11->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
		<!-- byr12 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr12->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->byr12->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr12->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr12->getViewValue() ?>" disabled>
<?php } ?>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
		<!-- jml12 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml12->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->jml12->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml12->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
		<!-- tgl12 -->
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl12->cellAttributes() ?>>
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl12->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl12->getViewValue() ?></span>
</td>
<?php } ?>
<?php

// Render list options (body, right)
$t103_daf_kelas_siswa_iuran_preview->ListOptions->render("body", "right", $t103_daf_kelas_siswa_iuran_preview->RowCnt);
?>
	</tr>
<?php
	$t103_daf_kelas_siswa_iuran_preview->Recordset->MoveNext();
}
?>
	</tbody>
</table><!-- /.table -->
</div><!-- /.table-responsive -->
<?php } ?>
<div class="card-footer ew-grid-lower-panel ew-preview-lower-panel"><!-- .card-footer -->
<?php if ($t103_daf_kelas_siswa_iuran_preview->TotalRecs > 0) { ?>
<?php if (!isset($t103_daf_kelas_siswa_iuran_preview->Pager)) $t103_daf_kelas_siswa_iuran_preview->Pager = new PrevNextPager($t103_daf_kelas_siswa_iuran_preview->StartRec, $t103_daf_kelas_siswa_iuran_preview->DisplayRecs, $t103_daf_kelas_siswa_iuran_preview->TotalRecs) ?>
<?php if ($t103_daf_kelas_siswa_iuran_preview->Pager->RecordCount > 0 && $t103_daf_kelas_siswa_iuran_preview->Pager->Visible) { ?>
<div class="ew-pager"><div class="ew-prev-next"><div class="btn-group btn-group-sm ew-btn-group">
<!--first page button-->
	<?php if ($t103_daf_kelas_siswa_iuran_preview->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerFirst") ?>" data-start="<?php echo $t103_daf_kelas_siswa_iuran_preview->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!--previous page button-->
	<?php if ($t103_daf_kelas_siswa_iuran_preview->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerPrevious") ?>" data-start="<?php echo $t103_daf_kelas_siswa_iuran_preview->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
<!--next page button-->
	<?php if ($t103_daf_kelas_siswa_iuran_preview->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerNext") ?>" data-start="<?php echo $t103_daf_kelas_siswa_iuran_preview->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!--last page button-->
	<?php if ($t103_daf_kelas_siswa_iuran_preview->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerLast") ?>" data-start="<?php echo $t103_daf_kelas_siswa_iuran_preview->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div></div></div>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t103_daf_kelas_siswa_iuran_preview->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t103_daf_kelas_siswa_iuran_preview->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t103_daf_kelas_siswa_iuran_preview->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php } else { ?>
<div class="ew-detail-count"><?php echo $Language->Phrase("NoRecord") ?></div>
<?php } ?>
<div class="ew-preview-other-options">
<?php
	foreach ($t103_daf_kelas_siswa_iuran_preview->OtherOptions as &$option)
		$option->render("body");
?>
</div>
<div class="clearfix"></div>
</div><!-- /.card-footer -->
</div><!-- /.card -->
<?php
$t103_daf_kelas_siswa_iuran_preview->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php
if ($t103_daf_kelas_siswa_iuran_preview->Recordset)
	$t103_daf_kelas_siswa_iuran_preview->Recordset->Close();

// Output
$content = ob_get_contents();
ob_end_clean();
echo ConvertToUtf8($content);
?>
<?php
$t103_daf_kelas_siswa_iuran_preview->terminate();
?>