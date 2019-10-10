<?php
namespace PHPMaker2019\p_pembayaran3_1;
?>
<?php
namespace PHPMaker2019\p_pembayaran3_1;

// Menu Language
if ($Language && $Language->LanguageFolder == $LANGUAGE_FOLDER)
	$MenuLanguage = &$Language;
else
	$MenuLanguage = new Language();

// Navbar menu
$topMenu = new Menu("navbar", TRUE, TRUE);
echo $topMenu->toScript();

// Sidebar menu
$sideMenu = new Menu("menu", TRUE, FALSE);
$sideMenu->addMenuItem(18, "mi_r101_lap_bayar", $ReportLanguage->phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->menuPhrase("18", "MenuText") . $ReportLanguage->phrase("DetailSummaryReportMenuItemSuffix"), "r101_lap_bayarsmry.php", -1, "", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r101_lap_bayar'), FALSE, FALSE, "", "", FALSE);
$sideMenu->addMenuItem(21, "mi_r102_lap_tunggak", $ReportLanguage->phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->menuPhrase("21", "MenuText") . $ReportLanguage->phrase("DetailSummaryReportMenuItemSuffix"), "r102_lap_tunggaksmry.php", -1, "", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r102_lap_tunggak'), FALSE, FALSE, "", "", FALSE);
$sideMenu->addMenuItem(26, "mi_r103_lap_um", $ReportLanguage->phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->menuPhrase("26", "MenuText") . $ReportLanguage->phrase("DetailSummaryReportMenuItemSuffix"), "r103_lap_umsmry.php", -1, "", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r103_lap_um'), FALSE, FALSE, "", "", FALSE);
$sideMenu->addMenuItem(27, "mi_r104_lap_pum", $ReportLanguage->phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->menuPhrase("27", "MenuText") . $ReportLanguage->phrase("DetailSummaryReportMenuItemSuffix"), "r104_lap_pumsmry.php", -1, "", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r104_lap_pum'), FALSE, FALSE, "", "", FALSE);
$sideMenu->addMenuItem(34, "mi_r105_daf_kelas_iuran", $ReportLanguage->phrase("DetailSummaryReportMenuItemPrefix") . $ReportLanguage->menuPhrase("34", "MenuText") . $ReportLanguage->phrase("DetailSummaryReportMenuItemSuffix"), "r105_daf_kelas_iuransmry.php", -1, "", AllowListMenu('{5ED375BE-ECE4-4069-8E33-06727256BDB4}r105_daf_kelas_iuran'), FALSE, FALSE, "", "", FALSE);
echo $sideMenu->toScript();
?>