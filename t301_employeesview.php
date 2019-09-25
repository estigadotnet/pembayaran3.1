<?php
namespace PHPMaker2019\p_pembayaran3_1;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start(); 

// Autoload
include_once "autoload.php";
?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$t301_employees_view = new t301_employees_view();

// Run the page
$t301_employees_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t301_employees_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t301_employees->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft301_employeesview = currentForm = new ew.Form("ft301_employeesview", "view");

// Form_CustomValidate event
ft301_employeesview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft301_employeesview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft301_employeesview.lists["x_UserLevel"] = <?php echo $t301_employees_view->UserLevel->Lookup->toClientList() ?>;
ft301_employeesview.lists["x_UserLevel"].options = <?php echo JsonEncode($t301_employees_view->UserLevel->lookupOptions()) ?>;
ft301_employeesview.lists["x_Activated[]"] = <?php echo $t301_employees_view->Activated->Lookup->toClientList() ?>;
ft301_employeesview.lists["x_Activated[]"].options = <?php echo JsonEncode($t301_employees_view->Activated->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t301_employees->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t301_employees_view->ExportOptions->render("body") ?>
<?php $t301_employees_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t301_employees_view->showPageHeader(); ?>
<?php
$t301_employees_view->showMessage();
?>
<form name="ft301_employeesview" id="ft301_employeesview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t301_employees_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t301_employees_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t301_employees">
<input type="hidden" name="modal" value="<?php echo (int)$t301_employees_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t301_employees->EmployeeID->Visible) { // EmployeeID ?>
	<tr id="r_EmployeeID">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_EmployeeID"><?php echo $t301_employees->EmployeeID->caption() ?></span></td>
		<td data-name="EmployeeID"<?php echo $t301_employees->EmployeeID->cellAttributes() ?>>
<span id="el_t301_employees_EmployeeID">
<span<?php echo $t301_employees->EmployeeID->viewAttributes() ?>>
<?php echo $t301_employees->EmployeeID->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->LastName->Visible) { // LastName ?>
	<tr id="r_LastName">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_LastName"><?php echo $t301_employees->LastName->caption() ?></span></td>
		<td data-name="LastName"<?php echo $t301_employees->LastName->cellAttributes() ?>>
<span id="el_t301_employees_LastName">
<span<?php echo $t301_employees->LastName->viewAttributes() ?>>
<?php echo $t301_employees->LastName->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->FirstName->Visible) { // FirstName ?>
	<tr id="r_FirstName">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_FirstName"><?php echo $t301_employees->FirstName->caption() ?></span></td>
		<td data-name="FirstName"<?php echo $t301_employees->FirstName->cellAttributes() ?>>
<span id="el_t301_employees_FirstName">
<span<?php echo $t301_employees->FirstName->viewAttributes() ?>>
<?php echo $t301_employees->FirstName->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Title->Visible) { // Title ?>
	<tr id="r_Title">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Title"><?php echo $t301_employees->Title->caption() ?></span></td>
		<td data-name="Title"<?php echo $t301_employees->Title->cellAttributes() ?>>
<span id="el_t301_employees_Title">
<span<?php echo $t301_employees->Title->viewAttributes() ?>>
<?php echo $t301_employees->Title->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->TitleOfCourtesy->Visible) { // TitleOfCourtesy ?>
	<tr id="r_TitleOfCourtesy">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_TitleOfCourtesy"><?php echo $t301_employees->TitleOfCourtesy->caption() ?></span></td>
		<td data-name="TitleOfCourtesy"<?php echo $t301_employees->TitleOfCourtesy->cellAttributes() ?>>
<span id="el_t301_employees_TitleOfCourtesy">
<span<?php echo $t301_employees->TitleOfCourtesy->viewAttributes() ?>>
<?php echo $t301_employees->TitleOfCourtesy->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->BirthDate->Visible) { // BirthDate ?>
	<tr id="r_BirthDate">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_BirthDate"><?php echo $t301_employees->BirthDate->caption() ?></span></td>
		<td data-name="BirthDate"<?php echo $t301_employees->BirthDate->cellAttributes() ?>>
<span id="el_t301_employees_BirthDate">
<span<?php echo $t301_employees->BirthDate->viewAttributes() ?>>
<?php echo $t301_employees->BirthDate->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->HireDate->Visible) { // HireDate ?>
	<tr id="r_HireDate">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_HireDate"><?php echo $t301_employees->HireDate->caption() ?></span></td>
		<td data-name="HireDate"<?php echo $t301_employees->HireDate->cellAttributes() ?>>
<span id="el_t301_employees_HireDate">
<span<?php echo $t301_employees->HireDate->viewAttributes() ?>>
<?php echo $t301_employees->HireDate->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Address->Visible) { // Address ?>
	<tr id="r_Address">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Address"><?php echo $t301_employees->Address->caption() ?></span></td>
		<td data-name="Address"<?php echo $t301_employees->Address->cellAttributes() ?>>
<span id="el_t301_employees_Address">
<span<?php echo $t301_employees->Address->viewAttributes() ?>>
<?php echo $t301_employees->Address->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->City->Visible) { // City ?>
	<tr id="r_City">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_City"><?php echo $t301_employees->City->caption() ?></span></td>
		<td data-name="City"<?php echo $t301_employees->City->cellAttributes() ?>>
<span id="el_t301_employees_City">
<span<?php echo $t301_employees->City->viewAttributes() ?>>
<?php echo $t301_employees->City->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Region->Visible) { // Region ?>
	<tr id="r_Region">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Region"><?php echo $t301_employees->Region->caption() ?></span></td>
		<td data-name="Region"<?php echo $t301_employees->Region->cellAttributes() ?>>
<span id="el_t301_employees_Region">
<span<?php echo $t301_employees->Region->viewAttributes() ?>>
<?php echo $t301_employees->Region->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->PostalCode->Visible) { // PostalCode ?>
	<tr id="r_PostalCode">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_PostalCode"><?php echo $t301_employees->PostalCode->caption() ?></span></td>
		<td data-name="PostalCode"<?php echo $t301_employees->PostalCode->cellAttributes() ?>>
<span id="el_t301_employees_PostalCode">
<span<?php echo $t301_employees->PostalCode->viewAttributes() ?>>
<?php echo $t301_employees->PostalCode->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Country->Visible) { // Country ?>
	<tr id="r_Country">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Country"><?php echo $t301_employees->Country->caption() ?></span></td>
		<td data-name="Country"<?php echo $t301_employees->Country->cellAttributes() ?>>
<span id="el_t301_employees_Country">
<span<?php echo $t301_employees->Country->viewAttributes() ?>>
<?php echo $t301_employees->Country->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->HomePhone->Visible) { // HomePhone ?>
	<tr id="r_HomePhone">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_HomePhone"><?php echo $t301_employees->HomePhone->caption() ?></span></td>
		<td data-name="HomePhone"<?php echo $t301_employees->HomePhone->cellAttributes() ?>>
<span id="el_t301_employees_HomePhone">
<span<?php echo $t301_employees->HomePhone->viewAttributes() ?>>
<?php echo $t301_employees->HomePhone->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Extension->Visible) { // Extension ?>
	<tr id="r_Extension">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Extension"><?php echo $t301_employees->Extension->caption() ?></span></td>
		<td data-name="Extension"<?php echo $t301_employees->Extension->cellAttributes() ?>>
<span id="el_t301_employees_Extension">
<span<?php echo $t301_employees->Extension->viewAttributes() ?>>
<?php echo $t301_employees->Extension->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->_Email->Visible) { // Email ?>
	<tr id="r__Email">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees__Email"><?php echo $t301_employees->_Email->caption() ?></span></td>
		<td data-name="_Email"<?php echo $t301_employees->_Email->cellAttributes() ?>>
<span id="el_t301_employees__Email">
<span<?php echo $t301_employees->_Email->viewAttributes() ?>>
<?php echo $t301_employees->_Email->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Photo->Visible) { // Photo ?>
	<tr id="r_Photo">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Photo"><?php echo $t301_employees->Photo->caption() ?></span></td>
		<td data-name="Photo"<?php echo $t301_employees->Photo->cellAttributes() ?>>
<span id="el_t301_employees_Photo">
<span<?php echo $t301_employees->Photo->viewAttributes() ?>>
<?php echo $t301_employees->Photo->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Notes->Visible) { // Notes ?>
	<tr id="r_Notes">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Notes"><?php echo $t301_employees->Notes->caption() ?></span></td>
		<td data-name="Notes"<?php echo $t301_employees->Notes->cellAttributes() ?>>
<span id="el_t301_employees_Notes">
<span<?php echo $t301_employees->Notes->viewAttributes() ?>>
<?php echo $t301_employees->Notes->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->ReportsTo->Visible) { // ReportsTo ?>
	<tr id="r_ReportsTo">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_ReportsTo"><?php echo $t301_employees->ReportsTo->caption() ?></span></td>
		<td data-name="ReportsTo"<?php echo $t301_employees->ReportsTo->cellAttributes() ?>>
<span id="el_t301_employees_ReportsTo">
<span<?php echo $t301_employees->ReportsTo->viewAttributes() ?>>
<?php echo $t301_employees->ReportsTo->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Password->Visible) { // Password ?>
	<tr id="r_Password">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Password"><?php echo $t301_employees->Password->caption() ?></span></td>
		<td data-name="Password"<?php echo $t301_employees->Password->cellAttributes() ?>>
<span id="el_t301_employees_Password">
<span<?php echo $t301_employees->Password->viewAttributes() ?>>
<?php echo $t301_employees->Password->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->UserLevel->Visible) { // UserLevel ?>
	<tr id="r_UserLevel">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_UserLevel"><?php echo $t301_employees->UserLevel->caption() ?></span></td>
		<td data-name="UserLevel"<?php echo $t301_employees->UserLevel->cellAttributes() ?>>
<span id="el_t301_employees_UserLevel">
<span<?php echo $t301_employees->UserLevel->viewAttributes() ?>>
<?php echo $t301_employees->UserLevel->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Username->Visible) { // Username ?>
	<tr id="r_Username">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Username"><?php echo $t301_employees->Username->caption() ?></span></td>
		<td data-name="Username"<?php echo $t301_employees->Username->cellAttributes() ?>>
<span id="el_t301_employees_Username">
<span<?php echo $t301_employees->Username->viewAttributes() ?>>
<?php echo $t301_employees->Username->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Activated->Visible) { // Activated ?>
	<tr id="r_Activated">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Activated"><?php echo $t301_employees->Activated->caption() ?></span></td>
		<td data-name="Activated"<?php echo $t301_employees->Activated->cellAttributes() ?>>
<span id="el_t301_employees_Activated">
<span<?php echo $t301_employees->Activated->viewAttributes() ?>>
<?php if (ConvertToBool($t301_employees->Activated->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t301_employees->Activated->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t301_employees->Activated->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t301_employees->Profile->Visible) { // Profile ?>
	<tr id="r_Profile">
		<td class="<?php echo $t301_employees_view->TableLeftColumnClass ?>"><span id="elh_t301_employees_Profile"><?php echo $t301_employees->Profile->caption() ?></span></td>
		<td data-name="Profile"<?php echo $t301_employees->Profile->cellAttributes() ?>>
<span id="el_t301_employees_Profile">
<span<?php echo $t301_employees->Profile->viewAttributes() ?>>
<?php echo $t301_employees->Profile->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</form>
<?php
$t301_employees_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t301_employees->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t301_employees_view->terminate();
?>