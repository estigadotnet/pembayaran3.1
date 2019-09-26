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
echo $sideMenu->toScript();
?>