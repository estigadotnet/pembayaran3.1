select sis.*, dks.*, dksi.* from t103_daf_kelas_siswa_iuran dksi left join t102_daf_kelas_siswa dks on dksi.daf_kelas_siswa_id = dks.id
left join t004_siswa sis on dks.siswa_id = sis.id;

select sis.nis, spp.tglbayar from 
minukarakter.spp spp
left join minukarakter.siswa sis on spp.idsiswa = sis.idsiswa
where month(spp.tglbayar) = 7 and bulan like 'Juli%'
;

update
t103_daf_kelas_siswa_iuran dksix inner join (
select dksi.daf_kelas_siswa_id, minuspp.tglbayar from 
t103_daf_kelas_siswa_iuran dksi 
left join t102_daf_kelas_siswa dks on dksi.daf_kelas_siswa_id = dks.id
left join t004_siswa sis on dks.siswa_id = sis.id
inner join (select sis.nis, spp.tglbayar from 
minukarakter.spp spp
left join minukarakter.siswa sis on spp.idsiswa = sis.idsiswa
where month(spp.tglbayar) = 9 and bulan like 'Desember%') minuspp on sis.NomorInduk = minuspp.nis 
) minu on dksix.daf_kelas_siswa_id = minu.daf_kelas_siswa_id
set byr06 = '1', tgl06 = tglbayar
;