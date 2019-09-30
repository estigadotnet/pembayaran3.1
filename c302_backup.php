<?php
namespace PHPMaker2019\p_pembayaran3_1;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start(); 
?>
<?php include_once "autoload.php" ?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$c302_backup = new c302_backup();

// Run the page
$c302_backup->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();
?>
<?php include_once "header.php" ?>
<div class="ewContentColumn">

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$database = 'db_pembayaran3';
$user = 'root';
$pass = 'admin';
$host = 'localhost';
$port = '3307';
$dir = "c:\\backup\\backup-v3.1-".date("Ymd-His").".sql";

echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";

exec("mysqldump --user={$user} --password={$pass} --host={$host} --port={$port} {$database} --result-file={$dir} 2>&1", $output);

//var_dump($output);

echo "<p>&nbsp;</p>";

CurrentPage()->setSuccessMessage("Successfully backed up");
CurrentPage()->ShowMessage();

?>

<p>&nbsp;</p>
<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit" onclick="window.location.href='.'">Selesai</button>

</div>
<?php if (DEBUG_ENABLED) echo GetDebugMessage(); ?>
<?php include_once "footer.php" ?>
<?php
$c302_backup->terminate();
?>