<?php
namespace PHPMaker2019\p_pembayaran3_1;

// Menu Language
if ($Language && $Language->LanguageFolder == $LANGUAGE_FOLDER)
	$MenuLanguage = &$Language;
else
	$MenuLanguage = new Language();

// Navbar menu
$topMenu = new Menu("navbar", TRUE, TRUE);
$topMenu->addMenuItem(18, "mi_c301_home", $MenuLanguage->MenuPhrase("18", "MenuText"), "c301_home.php", -1, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c301_home.php'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(17, "mci_Setup", $MenuLanguage->MenuPhrase("17", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$topMenu->addMenuItem(1, "mi_t001_tahun_ajaran", $MenuLanguage->MenuPhrase("1", "MenuText"), "t001_tahun_ajaranlist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t001_tahun_ajaran'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(2, "mi_t002_sekolah", $MenuLanguage->MenuPhrase("2", "MenuText"), "t002_sekolahlist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t002_sekolah'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(3, "mi_t003_kelas", $MenuLanguage->MenuPhrase("3", "MenuText"), "t003_kelaslist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t003_kelas'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(4, "mi_t004_siswa", $MenuLanguage->MenuPhrase("4", "MenuText"), "t004_siswalist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t004_siswa'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(5, "mi_t005_iuran", $MenuLanguage->MenuPhrase("5", "MenuText"), "t005_iuranlist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t005_iuran'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(20, "mci_Daftar", $MenuLanguage->MenuPhrase("20", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$topMenu->addMenuItem(6, "mi_t101_daf_kelas", $MenuLanguage->MenuPhrase("6", "MenuText"), "t101_daf_kelaslist.php", 20, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t101_daf_kelas'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(13, "mi_v102_daf_kelas_siswa", $MenuLanguage->MenuPhrase("13", "MenuText"), "v102_daf_kelas_siswalist.php", 20, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v102_daf_kelas_siswa'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(14, "mi_v103_daf_kelas_siswa_iuran", $MenuLanguage->MenuPhrase("14", "MenuText"), "v103_daf_kelas_siswa_iuranlist.php", -1, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v103_daf_kelas_siswa_iuran'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(10019, "mci_Laporan", $MenuLanguage->MenuPhrase("10019", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$topMenu->addMenuItem(10018, "mri_r101_lap_bayar", $MenuLanguage->MenuPhrase("10018", "MenuText"), "r101_lap_bayarsmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r101_lap_bayar'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(10021, "mri_r102_lap_tunggak", $MenuLanguage->MenuPhrase("10021", "MenuText"), "r102_lap_tunggaksmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r102_lap_tunggak'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(10023, "mri_r103_lap_um", $MenuLanguage->MenuPhrase("10023", "MenuText"), "r103_lap_umsmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r103_lap_um'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(10024, "mri_r104_lap_pum", $MenuLanguage->MenuPhrase("10024", "MenuText"), "r104_lap_pumsmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r104_lap_pum'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(10034, "mri_r105_daf_kelas_iuran", $MenuLanguage->MenuPhrase("10034", "MenuText"), "r105_daf_kelas_iuransmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r105_daf_kelas_iuran'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(10042, "mri_r106_daf_kelas_siswa_iuran", $MenuLanguage->MenuPhrase("10042", "MenuText"), "r106_daf_kelas_siswa_iuransmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r106_daf_kelas_siswa_iuran'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(21, "mci_General", $MenuLanguage->MenuPhrase("21", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$topMenu->addMenuItem(10030, "mi_c302_backup", $MenuLanguage->MenuPhrase("10030", "MenuText"), "c302_backup.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c302_backup.php'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(10098, "mi_c303_import", $MenuLanguage->MenuPhrase("10098", "MenuText"), "c303_import.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c303_import.php'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(9, "mi_t301_employees", $MenuLanguage->MenuPhrase("9", "MenuText"), "t301_employeeslist.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t301_employees'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(10, "mi_t302_userlevels", $MenuLanguage->MenuPhrase("10", "MenuText"), "t302_userlevelslist.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t302_userlevels'), FALSE, FALSE, "", "", TRUE);
$topMenu->addMenuItem(22, "mi_t304_audit_trail", $MenuLanguage->MenuPhrase("22", "MenuText"), "t304_audit_traillist.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t304_audit_trail'), FALSE, FALSE, "", "", TRUE);
echo $topMenu->toScript();

// Sidebar menu
$sideMenu = new Menu("menu", TRUE, FALSE);
$sideMenu->addMenuItem(18, "mi_c301_home", $MenuLanguage->MenuPhrase("18", "MenuText"), "c301_home.php", -1, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c301_home.php'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(17, "mci_Setup", $MenuLanguage->MenuPhrase("17", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$sideMenu->addMenuItem(1, "mi_t001_tahun_ajaran", $MenuLanguage->MenuPhrase("1", "MenuText"), "t001_tahun_ajaranlist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t001_tahun_ajaran'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(2, "mi_t002_sekolah", $MenuLanguage->MenuPhrase("2", "MenuText"), "t002_sekolahlist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t002_sekolah'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(3, "mi_t003_kelas", $MenuLanguage->MenuPhrase("3", "MenuText"), "t003_kelaslist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t003_kelas'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(4, "mi_t004_siswa", $MenuLanguage->MenuPhrase("4", "MenuText"), "t004_siswalist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t004_siswa'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(5, "mi_t005_iuran", $MenuLanguage->MenuPhrase("5", "MenuText"), "t005_iuranlist.php", 17, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t005_iuran'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(20, "mci_Daftar", $MenuLanguage->MenuPhrase("20", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$sideMenu->addMenuItem(6, "mi_t101_daf_kelas", $MenuLanguage->MenuPhrase("6", "MenuText"), "t101_daf_kelaslist.php", 20, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t101_daf_kelas'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(13, "mi_v102_daf_kelas_siswa", $MenuLanguage->MenuPhrase("13", "MenuText"), "v102_daf_kelas_siswalist.php", 20, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v102_daf_kelas_siswa'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(14, "mi_v103_daf_kelas_siswa_iuran", $MenuLanguage->MenuPhrase("14", "MenuText"), "v103_daf_kelas_siswa_iuranlist.php", -1, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v103_daf_kelas_siswa_iuran'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(10019, "mci_Laporan", $MenuLanguage->MenuPhrase("10019", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$sideMenu->addMenuItem(10018, "mri_r101_lap_bayar", $MenuLanguage->MenuPhrase("10018", "MenuText"), "r101_lap_bayarsmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r101_lap_bayar'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(10021, "mri_r102_lap_tunggak", $MenuLanguage->MenuPhrase("10021", "MenuText"), "r102_lap_tunggaksmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r102_lap_tunggak'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(10023, "mri_r103_lap_um", $MenuLanguage->MenuPhrase("10023", "MenuText"), "r103_lap_umsmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r103_lap_um'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(10024, "mri_r104_lap_pum", $MenuLanguage->MenuPhrase("10024", "MenuText"), "r104_lap_pumsmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r104_lap_pum'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(10034, "mri_r105_daf_kelas_iuran", $MenuLanguage->MenuPhrase("10034", "MenuText"), "r105_daf_kelas_iuransmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r105_daf_kelas_iuran'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(10042, "mri_r106_daf_kelas_siswa_iuran", $MenuLanguage->MenuPhrase("10042", "MenuText"), "r106_daf_kelas_siswa_iuransmry.php", 10019, "{5ED375BE-ECE4-4069-8E33-06727256BDB4}", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r106_daf_kelas_siswa_iuran'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(21, "mci_General", $MenuLanguage->MenuPhrase("21", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE, "", "", TRUE);
$sideMenu->addMenuItem(10030, "mi_c302_backup", $MenuLanguage->MenuPhrase("10030", "MenuText"), "c302_backup.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c302_backup.php'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(10098, "mi_c303_import", $MenuLanguage->MenuPhrase("10098", "MenuText"), "c303_import.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c303_import.php'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(9, "mi_t301_employees", $MenuLanguage->MenuPhrase("9", "MenuText"), "t301_employeeslist.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t301_employees'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(10, "mi_t302_userlevels", $MenuLanguage->MenuPhrase("10", "MenuText"), "t302_userlevelslist.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t302_userlevels'), FALSE, FALSE, "", "", TRUE);
$sideMenu->addMenuItem(22, "mi_t304_audit_trail", $MenuLanguage->MenuPhrase("22", "MenuText"), "t304_audit_traillist.php", 21, "", AllowListMenu('{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t304_audit_trail'), FALSE, FALSE, "", "", TRUE);
echo $sideMenu->toScript();
?>