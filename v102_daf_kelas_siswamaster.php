<?php
namespace PHPMaker2019\p_pembayaran3_1;
?>
<?php if ($v102_daf_kelas_siswa->Visible) { ?>
<div class="ew-master-div">
<table id="tbl_v102_daf_kelas_siswamaster" class="table ew-view-table ew-master-table ew-vertical">
	<tbody>
<?php if ($v102_daf_kelas_siswa->tsk->Visible) { // tsk ?>
		<tr id="r_tsk">
			<td class="<?php echo $v102_daf_kelas_siswa->TableLeftColumnClass ?>"><?php echo $v102_daf_kelas_siswa->tsk->caption() ?></td>
			<td<?php echo $v102_daf_kelas_siswa->tsk->cellAttributes() ?>>
<span id="el_v102_daf_kelas_siswa_tsk">
<span<?php echo $v102_daf_kelas_siswa->tsk->viewAttributes() ?>>
<?php echo $v102_daf_kelas_siswa->tsk->getViewValue() ?></span>
</span>
</td>
		</tr>
<?php } ?>
<?php if ($v102_daf_kelas_siswa->siswa->Visible) { // siswa ?>
		<tr id="r_siswa">
			<td class="<?php echo $v102_daf_kelas_siswa->TableLeftColumnClass ?>"><?php echo $v102_daf_kelas_siswa->siswa->caption() ?></td>
			<td<?php echo $v102_daf_kelas_siswa->siswa->cellAttributes() ?>>
<span id="el_v102_daf_kelas_siswa_siswa">
<span<?php echo $v102_daf_kelas_siswa->siswa->viewAttributes() ?>>
<?php echo $v102_daf_kelas_siswa->siswa->getViewValue() ?></span>
</span>
</td>
		</tr>
<?php } ?>
	</tbody>
</table>
</div>
<?php } ?>