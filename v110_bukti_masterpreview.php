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
$v110_bukti_master_preview = new v110_bukti_master_preview();

// Run the page
$v110_bukti_master_preview->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$v110_bukti_master_preview->Page_Render();
?>
<?php $v110_bukti_master_preview->showPageHeader(); ?>
<div class="card ew-grid v110_bukti_master"><!-- .card -->
<?php if ($v110_bukti_master_preview->TotalRecs > 0) { ?>
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel"><!-- .table-responsive -->
<table class="table ew-table ew-preview-table"><!-- .table -->
	<thead><!-- Table header -->
		<tr class="ew-table-header">
<?php

// Render list options
$v110_bukti_master_preview->renderListOptions();

// Render list options (header, left)
$v110_bukti_master_preview->ListOptions->render("header", "left");
?>
<?php if ($v110_bukti_master->periodebulan->Visible) { // periodebulan ?>
	<?php if ($v110_bukti_master->SortUrl($v110_bukti_master->periodebulan) == "") { ?>
		<th class="<?php echo $v110_bukti_master->periodebulan->headerCellClass() ?>"><?php echo $v110_bukti_master->periodebulan->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $v110_bukti_master->periodebulan->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $v110_bukti_master->periodebulan->Name ?>" data-sort-order="<?php echo $v110_bukti_master_preview->SortField == $v110_bukti_master->periodebulan->Name && $v110_bukti_master_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $v110_bukti_master->periodebulan->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($v110_bukti_master_preview->SortField == $v110_bukti_master->periodebulan->Name) { ?><?php if ($v110_bukti_master_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($v110_bukti_master_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v110_bukti_master->tglbayar->Visible) { // tglbayar ?>
	<?php if ($v110_bukti_master->SortUrl($v110_bukti_master->tglbayar) == "") { ?>
		<th class="<?php echo $v110_bukti_master->tglbayar->headerCellClass() ?>"><?php echo $v110_bukti_master->tglbayar->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $v110_bukti_master->tglbayar->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $v110_bukti_master->tglbayar->Name ?>" data-sort-order="<?php echo $v110_bukti_master_preview->SortField == $v110_bukti_master->tglbayar->Name && $v110_bukti_master_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $v110_bukti_master->tglbayar->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($v110_bukti_master_preview->SortField == $v110_bukti_master->tglbayar->Name) { ?><?php if ($v110_bukti_master_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($v110_bukti_master_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($v110_bukti_master->totalbayar->Visible) { // totalbayar ?>
	<?php if ($v110_bukti_master->SortUrl($v110_bukti_master->totalbayar) == "") { ?>
		<th class="<?php echo $v110_bukti_master->totalbayar->headerCellClass() ?>"><?php echo $v110_bukti_master->totalbayar->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $v110_bukti_master->totalbayar->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $v110_bukti_master->totalbayar->Name ?>" data-sort-order="<?php echo $v110_bukti_master_preview->SortField == $v110_bukti_master->totalbayar->Name && $v110_bukti_master_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $v110_bukti_master->totalbayar->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($v110_bukti_master_preview->SortField == $v110_bukti_master->totalbayar->Name) { ?><?php if ($v110_bukti_master_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($v110_bukti_master_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$v110_bukti_master_preview->ListOptions->render("header", "right");
?>
		</tr>
	</thead>
	<tbody><!-- Table body -->
<?php
$v110_bukti_master_preview->RecCount = 0;
$v110_bukti_master_preview->RowCnt = 0;
while ($v110_bukti_master_preview->Recordset && !$v110_bukti_master_preview->Recordset->EOF) {

	// Init row class and style
	$v110_bukti_master_preview->RecCount++;
	$v110_bukti_master_preview->RowCnt++;
	$v110_bukti_master_preview->CssStyle = "";
	$v110_bukti_master_preview->loadListRowValues($v110_bukti_master_preview->Recordset);

	// Render row
	$v110_bukti_master_preview->RowType = ROWTYPE_PREVIEW; // Preview record
	$v110_bukti_master_preview->resetAttributes();
	$v110_bukti_master_preview->renderListRow();

	// Render list options
	$v110_bukti_master_preview->renderListOptions();
?>
	<tr<?php echo $v110_bukti_master_preview->rowAttributes() ?>>
<?php

// Render list options (body, left)
$v110_bukti_master_preview->ListOptions->render("body", "left", $v110_bukti_master_preview->RowCnt);
?>
<?php if ($v110_bukti_master->periodebulan->Visible) { // periodebulan ?>
		<!-- periodebulan -->
		<td<?php echo $v110_bukti_master->periodebulan->cellAttributes() ?>>
<span<?php echo $v110_bukti_master->periodebulan->viewAttributes() ?>>
<?php echo $v110_bukti_master->periodebulan->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($v110_bukti_master->tglbayar->Visible) { // tglbayar ?>
		<!-- tglbayar -->
		<td<?php echo $v110_bukti_master->tglbayar->cellAttributes() ?>>
<span<?php echo $v110_bukti_master->tglbayar->viewAttributes() ?>>
<?php echo $v110_bukti_master->tglbayar->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($v110_bukti_master->totalbayar->Visible) { // totalbayar ?>
		<!-- totalbayar -->
		<td<?php echo $v110_bukti_master->totalbayar->cellAttributes() ?>>
<span<?php echo $v110_bukti_master->totalbayar->viewAttributes() ?>>
<?php echo $v110_bukti_master->totalbayar->getViewValue() ?></span>
</td>
<?php } ?>
<?php

// Render list options (body, right)
$v110_bukti_master_preview->ListOptions->render("body", "right", $v110_bukti_master_preview->RowCnt);
?>
	</tr>
<?php
	$v110_bukti_master_preview->Recordset->MoveNext();
}
?>
	</tbody>
</table><!-- /.table -->
</div><!-- /.table-responsive -->
<?php } ?>
<div class="card-footer ew-grid-lower-panel ew-preview-lower-panel"><!-- .card-footer -->
<?php if ($v110_bukti_master_preview->TotalRecs > 0) { ?>
<?php if (!isset($v110_bukti_master_preview->Pager)) $v110_bukti_master_preview->Pager = new PrevNextPager($v110_bukti_master_preview->StartRec, $v110_bukti_master_preview->DisplayRecs, $v110_bukti_master_preview->TotalRecs) ?>
<?php if ($v110_bukti_master_preview->Pager->RecordCount > 0 && $v110_bukti_master_preview->Pager->Visible) { ?>
<div class="ew-pager"><div class="ew-prev-next"><div class="btn-group btn-group-sm ew-btn-group">
<!--first page button-->
	<?php if ($v110_bukti_master_preview->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerFirst") ?>" data-start="<?php echo $v110_bukti_master_preview->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!--previous page button-->
	<?php if ($v110_bukti_master_preview->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerPrevious") ?>" data-start="<?php echo $v110_bukti_master_preview->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
<!--next page button-->
	<?php if ($v110_bukti_master_preview->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerNext") ?>" data-start="<?php echo $v110_bukti_master_preview->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!--last page button-->
	<?php if ($v110_bukti_master_preview->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerLast") ?>" data-start="<?php echo $v110_bukti_master_preview->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div></div></div>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $v110_bukti_master_preview->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $v110_bukti_master_preview->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $v110_bukti_master_preview->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php } else { ?>
<div class="ew-detail-count"><?php echo $Language->Phrase("NoRecord") ?></div>
<?php } ?>
<div class="ew-preview-other-options">
<?php
	foreach ($v110_bukti_master_preview->OtherOptions as &$option)
		$option->render("body");
?>
</div>
<div class="clearfix"></div>
</div><!-- /.card-footer -->
</div><!-- /.card -->
<?php
$v110_bukti_master_preview->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php
if ($v110_bukti_master_preview->Recordset)
	$v110_bukti_master_preview->Recordset->Close();

// Output
$content = ob_get_contents();
ob_end_clean();
echo ConvertToUtf8($content);
?>
<?php
$v110_bukti_master_preview->terminate();
?>