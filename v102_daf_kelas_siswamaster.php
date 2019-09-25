<?php
namespace PHPMaker2019\p_pembayaran3_1;
?>
<?php if ($v102_daf_kelas_siswa->Visible) { ?>
<div class="ew-master-div">
<table id="tbl_v102_daf_kelas_siswamaster" class="table ew-view-table ew-master-table ew-vertical">
	<tbody>
<?php if ($v102_daf_kelas_siswa->id->Visible) { // id ?>
		<tr id="r_id">
			<td class="<?php echo $v102_daf_kelas_siswa->TableLeftColumnClass ?>"><?php echo $v102_daf_kelas_siswa->id->caption() ?></td>
			<td<?php echo $v102_daf_kelas_siswa->id->cellAttributes() ?>>
<span id="el_v102_daf_kelas_siswa_id">
<span<?php echo $v102_daf_kelas_siswa->id->viewAttributes() ?>>
<?php echo $v102_daf_kelas_siswa->id->getViewValue() ?></span>
</span>
</td>
		</tr>
<?php } ?>
<?php if ($v102_daf_kelas_siswa->daf_kelas_id->Visible) { // daf_kelas_id ?>
		<tr id="r_daf_kelas_id">
			<td class="<?php echo $v102_daf_kelas_siswa->TableLeftColumnClass ?>"><?php echo $v102_daf_kelas_siswa->daf_kelas_id->caption() ?></td>
			<td<?php echo $v102_daf_kelas_siswa->daf_kelas_id->cellAttributes() ?>>
<span id="el_v102_daf_kelas_siswa_daf_kelas_id">
<span<?php echo $v102_daf_kelas_siswa->daf_kelas_id->viewAttributes() ?>>
<?php echo $v102_daf_kelas_siswa->daf_kelas_id->getViewValue() ?></span>
</span>
</td>
		</tr>
<?php } ?>
<?php if ($v102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
		<tr id="r_siswa_id">
			<td class="<?php echo $v102_daf_kelas_siswa->TableLeftColumnClass ?>"><?php echo $v102_daf_kelas_siswa->siswa_id->caption() ?></td>
			<td<?php echo $v102_daf_kelas_siswa->siswa_id->cellAttributes() ?>>
<span id="el_v102_daf_kelas_siswa_siswa_id">
<span<?php echo $v102_daf_kelas_siswa->siswa_id->viewAttributes() ?>>
<?php echo $v102_daf_kelas_siswa->siswa_id->getViewValue() ?></span>
</span>
</td>
		</tr>
<?php } ?>
	</tbody>
</table>
</div>
<?php } ?>