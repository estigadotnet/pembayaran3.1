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
$t102_daf_kelas_siswa_preview = new t102_daf_kelas_siswa_preview();

// Run the page
$t102_daf_kelas_siswa_preview->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_daf_kelas_siswa_preview->Page_Render();
?>
<?php $t102_daf_kelas_siswa_preview->showPageHeader(); ?>
<div class="card ew-grid t102_daf_kelas_siswa"><!-- .card -->
<?php if ($t102_daf_kelas_siswa_preview->TotalRecs > 0) { ?>
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel"><!-- .table-responsive -->
<table class="table ew-table ew-preview-table"><!-- .table -->
	<thead><!-- Table header -->
		<tr class="ew-table-header">
<?php

// Render list options
$t102_daf_kelas_siswa_preview->renderListOptions();

// Render list options (header, left)
$t102_daf_kelas_siswa_preview->ListOptions->render("header", "left");
?>
<?php if ($t102_daf_kelas_siswa->id->Visible) { // id ?>
	<?php if ($t102_daf_kelas_siswa->SortUrl($t102_daf_kelas_siswa->id) == "") { ?>
		<th class="<?php echo $t102_daf_kelas_siswa->id->headerCellClass() ?>"><?php echo $t102_daf_kelas_siswa->id->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t102_daf_kelas_siswa->id->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t102_daf_kelas_siswa->id->Name ?>" data-sort-order="<?php echo $t102_daf_kelas_siswa_preview->SortField == $t102_daf_kelas_siswa->id->Name && $t102_daf_kelas_siswa_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t102_daf_kelas_siswa->id->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t102_daf_kelas_siswa_preview->SortField == $t102_daf_kelas_siswa->id->Name) { ?><?php if ($t102_daf_kelas_siswa_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t102_daf_kelas_siswa_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
	<?php if ($t102_daf_kelas_siswa->SortUrl($t102_daf_kelas_siswa->siswa_id) == "") { ?>
		<th class="<?php echo $t102_daf_kelas_siswa->siswa_id->headerCellClass() ?>"><?php echo $t102_daf_kelas_siswa->siswa_id->caption() ?></th>
	<?php } else { ?>
		<th class="<?php echo $t102_daf_kelas_siswa->siswa_id->headerCellClass() ?>"><div class="ew-pointer" data-sort="<?php echo $t102_daf_kelas_siswa->siswa_id->Name ?>" data-sort-order="<?php echo $t102_daf_kelas_siswa_preview->SortField == $t102_daf_kelas_siswa->siswa_id->Name && $t102_daf_kelas_siswa_preview->SortOrder == "ASC" ? "DESC" : "ASC" ?>"><div class="ew-table-header-btn">
		<span class="ew-table-header-caption"><?php echo $t102_daf_kelas_siswa->siswa_id->caption() ?></span>
		<span class="ew-table-header-sort"><?php if ($t102_daf_kelas_siswa_preview->SortField == $t102_daf_kelas_siswa->siswa_id->Name) { ?><?php if ($t102_daf_kelas_siswa_preview->SortOrder == "ASC") { ?><i class="fa fa-sort-up ew-sort-up"></span><?php } elseif ($t102_daf_kelas_siswa_preview->SortOrder == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?><?php } ?></span>
	</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t102_daf_kelas_siswa_preview->ListOptions->render("header", "right");
?>
		</tr>
	</thead>
	<tbody><!-- Table body -->
<?php
$t102_daf_kelas_siswa_preview->RecCount = 0;
$t102_daf_kelas_siswa_preview->RowCnt = 0;
while ($t102_daf_kelas_siswa_preview->Recordset && !$t102_daf_kelas_siswa_preview->Recordset->EOF) {

	// Init row class and style
	$t102_daf_kelas_siswa_preview->RecCount++;
	$t102_daf_kelas_siswa_preview->RowCnt++;
	$t102_daf_kelas_siswa_preview->CssStyle = "";
	$t102_daf_kelas_siswa_preview->loadListRowValues($t102_daf_kelas_siswa_preview->Recordset);

	// Render row
	$t102_daf_kelas_siswa_preview->RowType = ROWTYPE_PREVIEW; // Preview record
	$t102_daf_kelas_siswa_preview->resetAttributes();
	$t102_daf_kelas_siswa_preview->renderListRow();

	// Render list options
	$t102_daf_kelas_siswa_preview->renderListOptions();
?>
	<tr<?php echo $t102_daf_kelas_siswa_preview->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t102_daf_kelas_siswa_preview->ListOptions->render("body", "left", $t102_daf_kelas_siswa_preview->RowCnt);
?>
<?php if ($t102_daf_kelas_siswa->id->Visible) { // id ?>
		<!-- id -->
		<td<?php echo $t102_daf_kelas_siswa->id->cellAttributes() ?>>
<span<?php echo $t102_daf_kelas_siswa->id->viewAttributes() ?>>
<?php echo $t102_daf_kelas_siswa->id->getViewValue() ?></span>
</td>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
		<!-- siswa_id -->
		<td<?php echo $t102_daf_kelas_siswa->siswa_id->cellAttributes() ?>>
<span<?php echo $t102_daf_kelas_siswa->siswa_id->viewAttributes() ?>>
<?php echo $t102_daf_kelas_siswa->siswa_id->getViewValue() ?></span>
</td>
<?php } ?>
<?php

// Render list options (body, right)
$t102_daf_kelas_siswa_preview->ListOptions->render("body", "right", $t102_daf_kelas_siswa_preview->RowCnt);
?>
	</tr>
<?php
	$t102_daf_kelas_siswa_preview->Recordset->MoveNext();
}
?>
	</tbody>
</table><!-- /.table -->
</div><!-- /.table-responsive -->
<?php } ?>
<div class="card-footer ew-grid-lower-panel ew-preview-lower-panel"><!-- .card-footer -->
<?php if ($t102_daf_kelas_siswa_preview->TotalRecs > 0) { ?>
<?php if (!isset($t102_daf_kelas_siswa_preview->Pager)) $t102_daf_kelas_siswa_preview->Pager = new PrevNextPager($t102_daf_kelas_siswa_preview->StartRec, $t102_daf_kelas_siswa_preview->DisplayRecs, $t102_daf_kelas_siswa_preview->TotalRecs) ?>
<?php if ($t102_daf_kelas_siswa_preview->Pager->RecordCount > 0 && $t102_daf_kelas_siswa_preview->Pager->Visible) { ?>
<div class="ew-pager"><div class="ew-prev-next"><div class="btn-group btn-group-sm ew-btn-group">
<!--first page button-->
	<?php if ($t102_daf_kelas_siswa_preview->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerFirst") ?>" data-start="<?php echo $t102_daf_kelas_siswa_preview->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!--previous page button-->
	<?php if ($t102_daf_kelas_siswa_preview->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerPrevious") ?>" data-start="<?php echo $t102_daf_kelas_siswa_preview->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
<!--next page button-->
	<?php if ($t102_daf_kelas_siswa_preview->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerNext") ?>" data-start="<?php echo $t102_daf_kelas_siswa_preview->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!--last page button-->
	<?php if ($t102_daf_kelas_siswa_preview->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->Phrase("PagerLast") ?>" data-start="<?php echo $t102_daf_kelas_siswa_preview->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->Phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div></div></div>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t102_daf_kelas_siswa_preview->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t102_daf_kelas_siswa_preview->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t102_daf_kelas_siswa_preview->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php } else { ?>
<div class="ew-detail-count"><?php echo $Language->Phrase("NoRecord") ?></div>
<?php } ?>
<div class="ew-preview-other-options">
<?php
	foreach ($t102_daf_kelas_siswa_preview->OtherOptions as &$option)
		$option->render("body");
?>
</div>
<div class="clearfix"></div>
</div><!-- /.card-footer -->
</div><!-- /.card -->
<?php
$t102_daf_kelas_siswa_preview->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php
if ($t102_daf_kelas_siswa_preview->Recordset)
	$t102_daf_kelas_siswa_preview->Recordset->Close();

// Output
$content = ob_get_contents();
ob_end_clean();
echo ConvertToUtf8($content);
?>
<?php
$t102_daf_kelas_siswa_preview->terminate();
?>