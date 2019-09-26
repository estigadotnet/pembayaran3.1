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
$c301_home = new c301_home();

// Run the page
$c301_home->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();
?>
<?php include_once "header.php" ?>
<?php
//echo "this is a default page";
?>

<div class="card">
	<div class="card-header">Latest news</div>
	<div class="card-body">
		<!-- <p>PHPMaker 2019 is released</p> -->
		<pre><?php $lines=file('01, log.txt');foreach ($lines as $line_num => $line){echo $line;}?></pre>
	</div>
</div>
<?php if (DEBUG_ENABLED) echo GetDebugMessage(); ?>
<?php include_once "footer.php" ?>
<?php
$c301_home->terminate();
?>