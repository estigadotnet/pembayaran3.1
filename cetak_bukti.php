<?php
//session_start();
//if(isset($_SESSION['login'])){
	include "koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Bukti Pembayaran</title>
	<style type="text/css">
		body{
			font-family: Consolas;
			font-size: 10pt;
		}
		
		@media print{
			.no-print{
				display: none;
			}
		}
		
		table{
			border-collapse: collapse;
		}	
	</style>
</head>
<body>
	
	<?php
		$q = "
SELECT *,kls.Nama as KelasNama,sis.Nama as SiswaNama, iur.Nama as IuranNama,
sklh.Nama as SekolahNama, ta.Mulai, ta.Selesai
FROM 
v104_pembayaran byr left join t005_iuran iur on byr.iuran_id = iur.id 
left join t102_daf_kelas_siswa dks on byr.daf_kelas_siswa_id = dks.id 
left join t004_siswa sis on dks.siswa_id = sis.id 
left join t101_daf_kelas dk on dks.daf_kelas_id = dk.id 
left join t003_kelas kls on dk.kelas_id = kls.id 
left join t002_sekolah sklh on dk.sekolah_id = sklh.id
left join t001_tahun_ajaran ta on dk.tahun_ajaran_id = ta.id
		WHERE daf_kelas_siswa_id=".$_GET["daf_kelas_siswa_id"]." and periode='".$_GET["periode"]."' order by iur.id";
		$res=mysqli_query($konek, $q); //var_dump($res);
		$row = mysqli_fetch_array($res); //echo $q;
		//$sqlBayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa WHERE idspp='$_GET[id]' ORDER BY nobayar ASC");
		//$sqlBayar = mysqli_query($konek, "select * from");
		//$d=mysqli_fetch_array($sqlBayar);
		//$total = 0;
		//$total +=$row['JumlahBayar']; //+$d['byrcatering'];
	?>
	<h3 align="center">BUKTI PEMBAYARAN BIAYA SEKOLAH<br/><?php echo $row["SekolahNama"]?> BOJONEGORO<br/>TAHUN AJARAN <?php echo $row["Mulai"]."/".$row["Selesai"]?></h3>
	<hr/>
	<table cellspacing="0" cellpadding="4">
		<tr>
			<td width="200">Nama Siswa</td>
			<td width="5">:</td>
			<td width="350"><?php echo $row['SiswaNama']; ?></td>
			<td width="200">Tanggal Bayar</td>
			<td width="5">:</td>
			<td width="250"><?php $date=date_create($row["TglBayar"]); echo date_format($date, "d-m-Y") ?></td>
		</tr>
		<tr>
			<td width="200">No Induk</td>
			<td width="5">:</td>
			<td width="350"><?php echo $row['NomorInduk']; ?></td>
			<td width="200">Periode</td>
			<td width="5">:</td>
			<td width="250"><?php echo $row['PeriodeBulan'].($row["Periode"]<7 ? $row["Mulai"] : $row["Selesai"]); ?></td>
		</tr>
		<tr>
			<td width="200">Kelas</td>
			<td width="5">:</td>
			<td width="250"><?php echo $row['KelasNama']; ?></td>
			<td width="200">&nbsp;</td>
			<td width="5">&nbsp;</td>
			<td width="250"><?php //echo $row['PeriodeBulan'].($row["Periode"]<7 ? $row["Mulai"] : $row["Selesai"]); ?></td>
		</tr>
	</table>
	
	<hr/>
	
	<table cellspacing="0" cellpadding="4">
		<tr>
			<td width="455">Item Pembayaran</td>
			<td align="right" colspan="3">Nominal</td>			
		</tr>
		<tr>
			<td width="455"></td>
			<td align="right" colspan="3"></td>			
		</tr>
		<?php
		$total = 0;
		$res2=mysqli_query($konek, $q); //var_dump($res);
		while($row2 = mysqli_fetch_array($res2)) {
		?>
		<tr>
			<td width="455">Biaya <?php echo $row2["IuranNama"]?></td>
			<td width="0">:</td>
			<td width="5">RP.</td>
			<td align="right" width="155"><?php echo number_format($row2['JumlahBayar']); ?></td>
		</tr>
		<?php
			
			$total +=$row2['JumlahBayar']; //+$d['byrcatering'];
		}
		?>
				
		<tr>
			<td align="right" width="455">Total</td>
			<td width="0">:</td>
			<td width="5">RP.</td>
			<td align="right" width="155"><b><?php echo number_format($total); ?></b></td>
		</tr>
	</table>
	
	<br><hr/>
	
	<table>
		<tr>
			<td></td>
			<td width="400px">
				<p>Bojonegoro, <?php echo date('d-m-Y'); ?><br/>
				Petugas</p>
				<br/>
				<br/>
				<p>____________________</p>
			</td>
		</tr>
	</table>
	
	
	<a href="#" class="no-print" onclick="window.print();">Cetak / Print</a>	
</body>
</html>

<?php
/*}
else{
	header('location:login.php');
}*/
?>