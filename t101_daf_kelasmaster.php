<?php
namespace PHPMaker2019\p_pembayaran3_1;
?>
<?php if ($t101_daf_kelas->Visible) { ?>
<div class="ew-master-div">
<table id="tbl_t101_daf_kelasmaster" class="table ew-view-table ew-master-table ew-vertical">
	<tbody>
<?php if ($t101_daf_kelas->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
		<tr id="r_tahun_ajaran_id">
			<td class="<?php echo $t101_daf_kelas->TableLeftColumnClass ?>"><?php echo $t101_daf_kelas->tahun_ajaran_id->caption() ?></td>
			<td<?php echo $t101_daf_kelas->tahun_ajaran_id->cellAttributes() ?>>
<span id="el_t101_daf_kelas_tahun_ajaran_id">
<span<?php echo $t101_daf_kelas->tahun_ajaran_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->tahun_ajaran_id->getViewValue() ?></span>
</span>
</td>
		</tr>
<?php } ?>
<?php if ($t101_daf_kelas->sekolah_id->Visible) { // sekolah_id ?>
		<tr id="r_sekolah_id">
			<td class="<?php echo $t101_daf_kelas->TableLeftColumnClass ?>"><?php echo $t101_daf_kelas->sekolah_id->caption() ?></td>
			<td<?php echo $t101_daf_kelas->sekolah_id->cellAttributes() ?>>
<span id="el_t101_daf_kelas_sekolah_id">
<span<?php echo $t101_daf_kelas->sekolah_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->sekolah_id->getViewValue() ?></span>
</span>
</td>
		</tr>
<?php } ?>
<?php if ($t101_daf_kelas->kelas_id->Visible) { // kelas_id ?>
		<tr id="r_kelas_id">
			<td class="<?php echo $t101_daf_kelas->TableLeftColumnClass ?>"><?php echo $t101_daf_kelas->kelas_id->caption() ?></td>
			<td<?php echo $t101_daf_kelas->kelas_id->cellAttributes() ?>>
<span id="el_t101_daf_kelas_kelas_id">
<span<?php echo $t101_daf_kelas->kelas_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->kelas_id->getViewValue() ?></span>
</span>
</td>
		</tr>
<?php } ?>
	</tbody>
</table>
</div>
<?php } ?>