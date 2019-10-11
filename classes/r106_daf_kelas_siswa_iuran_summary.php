<?php
namespace PHPMaker2019\p_pembayaran3_1;

/**
 * Page class (r106_daf_kelas_siswa_iuran_summary)
 */
class r106_daf_kelas_siswa_iuran_summary extends r106_daf_kelas_siswa_iuran
{

	// Page ID
	public $PageID = 'summary';

	// Project ID
	public $ProjectID = "{5ED375BE-ECE4-4069-8E33-06727256BDB4}";

	// Page object name
	public $PageObjName = 'r106_daf_kelas_siswa_iuran_summary';
	public $Token = "";
	public $TokenTimeout = 0;
	public $CheckToken = CHECK_TOKEN;

	// Page headings
	public $Heading = '';
	public $Subheading = '';
	public $PageHeader;
	public $PageFooter;

	// Export URLs
	public $ExportPrintUrl;
	public $ExportExcelUrl;
	public $ExportWordUrl;
	public $ExportPdfUrl;
	public $ExportEmailUrl;

	// CSS
	public $ReportTableClass = "";
	public $ReportTableStyle = "";

	// Custom export
	public $ExportPrintCustom = FALSE;
	public $ExportExcelCustom = FALSE;
	public $ExportWordCustom = FALSE;
	public $ExportPdfCustom = FALSE;
	public $ExportEmailCustom = FALSE;

	// Page heading
	public function pageHeading()
	{
		global $ReportLanguage;
		if ($this->Heading <> "")
			return $this->Heading;
		if (method_exists($this, "TableCaption"))
			return $this->tableCaption();
		return "";
	}

	// Page subheading
	public function pageSubheading()
	{
		global $ReportLanguage;
		if ($this->Subheading <> "")
			return $this->Subheading;
		return "";
	}

	// Page name
	public function pageName()
	{
		return CurrentPageName();
	}

	// Page URL
	public function pageUrl()
	{
		$pageUrl = CurrentPageName() . "?";
		if ($this->UseTokenInUrl) $pageUrl .= "t=" . $this->TableVar . "&"; // Add page token
		return $pageUrl;
	}

	// Get message
	public function getMessage()
	{
		return @$_SESSION[SESSION_MESSAGE];
	}

	// Set message
	public function setMessage($v)
	{
		AddMessage($_SESSION[SESSION_MESSAGE], $v);
	}

	// Get failure message
	public function getFailureMessage()
	{
		return @$_SESSION[SESSION_FAILURE_MESSAGE];
	}

	// Set failure message
	public function setFailureMessage($v)
	{
		AddMessage($_SESSION[SESSION_FAILURE_MESSAGE], $v);
	}

	// Get success message
	public function getSuccessMessage()
	{
		return @$_SESSION[SESSION_SUCCESS_MESSAGE];
	}

	// Set success message
	public function setSuccessMessage($v)
	{
		AddMessage($_SESSION[SESSION_SUCCESS_MESSAGE], $v);
	}

	// Get warning message
	public function getWarningMessage()
	{
		return @$_SESSION[SESSION_WARNING_MESSAGE];
	}

	// Set warning message
	public function setWarningMessage($v)
	{
		AddMessage($_SESSION[SESSION_WARNING_MESSAGE], $v);
	}

	// Clear message
	public function clearMessage()
	{
		$_SESSION[SESSION_MESSAGE] = "";
	}

	// Clear failure message
	public function clearFailureMessage()
	{
		$_SESSION[SESSION_FAILURE_MESSAGE] = "";
	}

	// Clear success message
	public function clearSuccessMessage()
	{
		$_SESSION[SESSION_SUCCESS_MESSAGE] = "";
	}

	// Clear warning message
	public function clearWarningMessage()
	{
		$_SESSION[SESSION_WARNING_MESSAGE] = "";
	}

	// Clear messages
	public function clearMessages()
	{
		$_SESSION[SESSION_MESSAGE] = "";
		$_SESSION[SESSION_FAILURE_MESSAGE] = "";
		$_SESSION[SESSION_SUCCESS_MESSAGE] = "";
		$_SESSION[SESSION_WARNING_MESSAGE] = "";
	}

	// Show message
	public function showMessage()
	{
		$hidden = FALSE;
		$html = "";

		// Message
		$message = $this->getMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($message, "");
		if ($message <> "") { // Message in Session, display
			if (!$hidden)
				$message = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $message;
			$html .= '<div class="alert alert-info alert-dismissible ew-info"><i class="icon fa fa-info"></i>' . $message . '</div>';
			$_SESSION[SESSION_MESSAGE] = ""; // Clear message in Session
		}

		// Warning message
		$warningMessage = $this->getWarningMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($warningMessage, "warning");
		if ($warningMessage <> "") { // Message in Session, display
			if (!$hidden)
				$warningMessage = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $warningMessage;
			$html .= '<div class="alert alert-warning alert-dismissible ew-warning"><i class="icon fa fa-warning"></i>' . $warningMessage . '</div>';
			$_SESSION[SESSION_WARNING_MESSAGE] = ""; // Clear message in Session
		}

		// Success message
		$successMessage = $this->getSuccessMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($successMessage, "success");
		if ($successMessage <> "") { // Message in Session, display
			if (!$hidden)
				$successMessage = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $successMessage;
			$html .= '<div class="alert alert-success alert-dismissible ew-success"><i class="icon fa fa-check"></i>' . $successMessage . '</div>';
			$_SESSION[SESSION_SUCCESS_MESSAGE] = ""; // Clear message in Session
		}

		// Failure message
		$errorMessage = $this->getFailureMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($errorMessage, "failure");
		if ($errorMessage <> "") { // Message in Session, display
			if (!$hidden)
				$errorMessage = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $errorMessage;
			$html .= '<div class="alert alert-danger alert-dismissible ew-error"><i class="icon fa fa-ban"></i>' . $errorMessage . '</div>';
			$_SESSION[SESSION_FAILURE_MESSAGE] = ""; // Clear message in Session
		}
		echo '<div class="ew-message-dialog' . (($hidden) ? ' d-none' : "") . '">' . $html . '</div>';
	}

	// Show Page Header
	public function showPageHeader()
	{
		$header = $this->PageHeader;
		$this->Page_DataRendering($header);
		if ($header <> "") // Header exists, display
			echo '<p id="ew-page-header">' . $header . '</p>';
	}

	// Show Page Footer
	public function showPageFooter()
	{
		$footer = $this->PageFooter;
		$this->Page_DataRendered($footer);
		if ($footer <> "") // Fotoer exists, display
			echo '<p id="ew-page-footer">' . $footer . '</p>';
	}

	// Validate page request
	public function isPageRequest()
	{
		if ($this->UseTokenInUrl) {
			if (IsPost())
				return ($this->TableVar == Post("t"));
			if (Get("t") !== NULL)
				return ($this->TableVar == Get("t"));
		}
		return TRUE;
	}

	// Valid Post
	protected function validPost()
	{
		if (!$this->CheckToken || !IsPost() || IsApi())
			return TRUE;
		if (Post(TOKEN_NAME) === NULL)
			return FALSE;
		$fn = PROJECT_NAMESPACE . CHECK_TOKEN_FUNC;
		if (is_callable($fn))
			return $fn(Post(TOKEN_NAME), $this->TokenTimeout);
		return FALSE;
	}

	// Create Token
	public function createToken()
	{
		global $CurrentToken;
		$fn = PROJECT_NAMESPACE . CREATE_TOKEN_FUNC; // Always create token, required by API file/lookup request
		if ($this->Token == "" && is_callable($fn)) // Create token
			$this->Token = $fn();
		$CurrentToken = $this->Token; // Save to global variable
	}

	// Constructor
	public function __construct()
	{
		global $Language, $ReportLanguage, $DashboardReport;
		global $UserTable, $UserTableConn;

		// Initialize
		if (!$DashboardReport)
			$GLOBALS["Page"] = &$this;
		$this->TokenTimeout = SessionTimeoutTime();

		// Language object
		$ReportLanguage = new ReportLanguage();
		if ($Language === NULL)
			$Language = $ReportLanguage;

		// Parent constuctor
		parent::__construct();

		// Table object (r106_daf_kelas_siswa_iuran)
		if (!isset($GLOBALS["r106_daf_kelas_siswa_iuran"])) {
			$GLOBALS["r106_daf_kelas_siswa_iuran"] = &$this;
			$GLOBALS["Table"] = &$GLOBALS["r106_daf_kelas_siswa_iuran"];
		}

		// Initialize URLs
		$this->ExportPrintUrl = $this->pageUrl() . "export=print";
		$this->ExportExcelUrl = $this->pageUrl() . "export=excel";
		$this->ExportWordUrl = $this->pageUrl() . "export=word";
		$this->ExportPdfUrl = $this->pageUrl() . "export=pdf";
		$this->ExportEmailUrl = $this->pageUrl() . "export=email";

		// Page ID
		if (!defined(PROJECT_NAMESPACE . "PAGE_ID"))
			define(PROJECT_NAMESPACE . "PAGE_ID", 'summary');

		// Table name (for backward compatibility)
		if (!defined(PROJECT_NAMESPACE . "TABLE_NAME"))
			define(PROJECT_NAMESPACE . "TABLE_NAME", 'r106_daf_kelas_siswa_iuran');

		// Start timer
		if (!isset($GLOBALS["DebugTimer"]))
			$GLOBALS["DebugTimer"] = new Timer();

		// Debug message
		LoadDebugMessage();

		// Open connection
		if (!isset($GLOBALS["Conn"]))
			$GLOBALS["Conn"] = &$this->getConnection();

		// User table object (t301_employees_base)
		if (!isset($UserTable)) {
			$UserTable = new t301_employees_base();
			$UserTableConn = Conn($UserTable->Dbid);
		}

		// Export options
		$this->ExportOptions = new ListOptions();
		$this->ExportOptions->Tag = "div";
		$this->ExportOptions->TagClassName = "ew-export-option";

		// Search options
		$this->SearchOptions = new ListOptions();
		$this->SearchOptions->Tag = "div";
		$this->SearchOptions->TagClassName = "ew-search-option";

		// Filter options
		$this->FilterOptions = new ListOptions();
		$this->FilterOptions->Tag = "div";
		$this->FilterOptions->TagClassName = "ew-filter-option fr106_daf_kelas_siswa_iuransummary";

		// Generate report options
		$this->GenerateOptions = new ListOptions();
		$this->GenerateOptions->Tag = "div";
		$this->GenerateOptions->TagClassName = "ew-generate-option";
	}

	// Get export HTML tag
	public function getExportTag($type, $custom = FALSE)
	{
		global $ReportLanguage;
		$exportId = session_id();
		if (SameText($type, "excel")) {
			if ($custom)
				return "<a class=\"ew-export-link ew-excel\" title=\"" . HtmlEncode($ReportLanguage->phrase("ExportToExcel", TRUE)) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("ExportToExcel", TRUE)) . "\" href=\"javascript:void(0);\" onclick=\"ew.exportWithCharts(event, '" . $this->ExportExcelUrl . "', '" . $exportId . "');\">" . $ReportLanguage->phrase("ExportToExcel") . "</a>";
			else
				return "<a class=\"ew-export-link ew-excel\" title=\"" . HtmlEncode($ReportLanguage->phrase("ExportToExcel", TRUE)) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("ExportToExcel", TRUE)) . "\" href=\"" . $this->ExportExcelUrl . "\">" . $ReportLanguage->phrase("ExportToExcel") . "</a>";
		} elseif (SameText($type, "word")) {
			if ($custom)
				return "<a class=\"ew-export-link ew-word\" title=\"" . HtmlEncode($ReportLanguage->phrase("ExportToWord", TRUE)) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("ExportToWord", TRUE)) . "\" href=\"javascript:void(0);\" onclick=\"ew.exportWithCharts(event, '" . $this->ExportWordUrl . "', '" . $exportId . "');\">" . $ReportLanguage->phrase("ExportToWord") . "</a>";
			else
				return "<a class=\"ew-export-link ew-word\" title=\"" . HtmlEncode($ReportLanguage->phrase("ExportToWord", TRUE)) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("ExportToWord", TRUE)) . "\" href=\"" . $this->ExportWordUrl . "\">" . $ReportLanguage->phrase("ExportToWord") . "</a>";
		} elseif (SameText($type, "print")) {
			if ($custom)
				return "<a class=\"ew-export-link ew-print\" title=\"" . HtmlEncode($ReportLanguage->phrase("PrinterFriendly", TRUE)) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("PrinterFriendly", TRUE)) . "\" href=\"javascript:void(0);\" onclick=\"ew.exportWithCharts(event, '" . $this->ExportPrintUrl . "', '" . $exportId . "');\">" . $ReportLanguage->phrase("PrinterFriendly") . "</a>";
			else
				return "<a class=\"ew-export-link ew-print\" title=\"" . HtmlEncode($ReportLanguage->phrase("PrinterFriendly"), TRUE) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("PrinterFriendly", TRUE)) . "\" href=\"" . $this->ExportPrintUrl . "\">" . $ReportLanguage->phrase("PrinterFriendly") . "</a>";
		} elseif (SameText($type, "pdf")) {
			return "<a class=\"ew-export-link ew-pdf\" title=\"" . HtmlEncode($ReportLanguage->phrase("ExportToPDF", TRUE)) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("ExportToPDF", TRUE)) . "\" href=\"" . $this->ExportPdfUrl . "\">" . $ReportLanguage->phrase("ExportToPDF") . "</a>";
		} elseif (SameText($type, "email")) {
			return "<a class=\"ew-export-link ew-email\" title=\"" . HtmlEncode($ReportLanguage->phrase("ExportToEmail", TRUE)) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("ExportToEmail", TRUE)) . "\" id=\"emf_r106_daf_kelas_siswa_iuran\" href=\"#\" onclick=\"ew.emailDialogShow({ lnk: 'emf_r106_daf_kelas_siswa_iuran', hdr: ew.language.phrase('ExportToEmail'), url: '$this->ExportEmailUrl', exportid: '$exportId', el: this }); return false;\">" . $ReportLanguage->phrase("ExportToEmail") . "</a>";
		}
	}

	// Set up export options
	protected function setupExportOptions()
	{
		global $Security, $ReportLanguage, $ReportOptions;
		$exportId = session_id();
		$reportTypes = [];

		// Printer friendly
		$item = &$this->ExportOptions->add("print");
		$item->Body = $this->getExportTag("print");
		$item->Visible = TRUE;
		$reportTypes["print"] = $item->Visible ? $ReportLanguage->phrase("ReportFormPrint") : "";

		// Export to Excel
		$item = &$this->ExportOptions->add("excel");
		$item->Body = $this->getExportTag("excel");
		$item->Visible = TRUE;
		$reportTypes["excel"] = $item->Visible ? $ReportLanguage->phrase("ReportFormExcel") : "";

		// Export to Word
		$item = &$this->ExportOptions->add("word");
		$item->Body = $this->getExportTag("word");
		$item->Visible = FALSE;
		$reportTypes["word"] = $item->Visible ? $ReportLanguage->phrase("ReportFormWord") : "";

		// Export to Pdf
		$item = &$this->ExportOptions->add("pdf");
		$item->Body = $this->getExportTag("pdf");
		$item->Visible = FALSE;
		$item->Visible = TRUE;
		$reportTypes["pdf"] = $item->Visible ? $ReportLanguage->phrase("ReportFormPdf") : "";

		// Export to Email
		$item = &$this->ExportOptions->add("email");
		$item->Body = $this->getExportTag("email");
		$item->Visible = FALSE;
		$reportTypes["email"] = $item->Visible ? $ReportLanguage->phrase("ReportFormEmail") : "";

		// Report types
		$ReportOptions["ReportTypes"] = $reportTypes;

		// Drop down button for export
		$this->ExportOptions->UseDropDownButton = FALSE;
		$this->ExportOptions->UseButtonGroup = TRUE;
		$this->ExportOptions->UseImageAndText = $this->ExportOptions->UseDropDownButton;
		$this->ExportOptions->DropDownButtonPhrase = $ReportLanguage->phrase("ButtonExport");

		// Add group option item
		$item = &$this->ExportOptions->add($this->ExportOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;

		// Filter button
		$item = &$this->FilterOptions->add("savecurrentfilter");
		$item->Body = "<a class=\"ew-save-filter\" data-form=\"fr106_daf_kelas_siswa_iuransummary\" href=\"#\">" . $ReportLanguage->phrase("SaveCurrentFilter") . "</a>";
		$item->Visible = TRUE;
		$item = &$this->FilterOptions->add("deletefilter");
		$item->Body = "<a class=\"ew-delete-filter\" data-form=\"fr106_daf_kelas_siswa_iuransummary\" href=\"#\">" . $ReportLanguage->phrase("DeleteFilter") . "</a>";
		$item->Visible = TRUE;
		$this->FilterOptions->UseDropDownButton = TRUE;
		$this->FilterOptions->UseButtonGroup = !$this->FilterOptions->UseDropDownButton; // v8
		$this->FilterOptions->DropDownButtonPhrase = $ReportLanguage->phrase("Filters");

		// Add group option item
		$item = &$this->FilterOptions->add($this->FilterOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;

		// Set up export options (extended)
		$this->setupExportOptionsExt();

		// Hide options for export
		if ($this->isExport()) {
			$this->ExportOptions->hideAllOptions();
			$this->FilterOptions->hideAllOptions();
		}

		// Set up table class
		if ($this->isExport("word") || $this->isExport("excel") || $this->isExport("pdf"))
			$this->ReportTableClass = "ew-table";
		else
			$this->ReportTableClass = "table ew-table";
	}

	// Set up search options
	protected function setupSearchOptions()
	{
		global $ReportLanguage;

		// Filter panel button
		$item = &$this->SearchOptions->add("searchtoggle");
		$searchToggleClass = $this->FilterApplied ? " active" : " active";
		$item->Body = "<button type=\"button\" class=\"btn btn-default ew-search-toggle" . $searchToggleClass . "\" title=\"" . $ReportLanguage->phrase("SearchBtn", TRUE) . "\" data-caption=\"" . $ReportLanguage->phrase("SearchBtn", TRUE) . "\" data-toggle=\"button\" data-form=\"fr106_daf_kelas_siswa_iuransummary\">" . $ReportLanguage->phrase("SearchBtn") . "</button>";
		$item->Visible = TRUE;

		// Reset filter
		$item = &$this->SearchOptions->add("resetfilter");
		$item->Body = "<button type=\"button\" class=\"btn btn-default\" title=\"" . HtmlEncode($ReportLanguage->phrase("ResetAllFilter", TRUE)) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("ResetAllFilter", TRUE)) . "\" onclick=\"location='" . CurrentPageName() . "?cmd=reset'\">" . $ReportLanguage->phrase("ResetAllFilter") . "</button>";
		$item->Visible = TRUE && $this->FilterApplied;

		// Button group for reset filter
		$this->SearchOptions->UseButtonGroup = TRUE;

		// Add group option item
		$item = &$this->SearchOptions->add($this->SearchOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;

		// Hide options for export
		if ($this->isExport())
			$this->SearchOptions->hideAllOptions();
	}

	// Terminate page
	public function terminate($url = "")
	{
		global $ReportLanguage, $EXPORT_REPORT, $ExportFileName, $DashboardReport;

		// Page Unload event
		$this->Page_Unload();

		// Global Page Unloaded event (in userfn*.php)
		Page_Unloaded();

		// Export
		if ($this->isExport() && array_key_exists($this->Export, $EXPORT_REPORT)) {
			$content = ob_get_contents();
			if (ob_get_length())
				ob_end_clean();

			// Remove all <div data-tagid="..." id="orig..." class="hide">...</div> (for customviewtag export, except "googlemaps")
			if (preg_match_all('/<div\s+data-tagid=[\'"]([\s\S]*?)[\'"]\s+id=[\'"]orig([\s\S]*?)[\'"]\s+class\s*=\s*[\'"]hide[\'"]>([\s\S]*?)<\/div\s*>/i', $content, $divmatches, PREG_SET_ORDER)) {
				foreach ($divmatches as $divmatch) {
					if ($divmatch[1] <> "googlemaps")
						$content = str_replace($divmatch[0], "", $content);
				}
			}
			$fn = $EXPORT_REPORT[$this->Export];
			$saveResponse = $this->$fn($content);
			if (ReportParam("generaterequest") === TRUE) { // Generate report request
				$this->writeGenResponse($saveResponse);
				$url = ""; // Avoid redirect
			}
		}

		// Close connection if not in dashboard
		if (!$DashboardReport)
			CloseConnections();

		// Go to URL if specified
		if ($url <> "") {
			if (!DEBUG_ENABLED && ob_get_length())
				ob_end_clean();
			SaveDebugMessage();
			header("Location: " . $url);
		}
		if (!$DashboardReport)
			exit();
	}

	// Initialize common variables
	public $ExportOptions; // Export options
	public $SearchOptions; // Search options
	public $FilterOptions; // Filter options

	// Recordset
	public $GroupRecordset = NULL;
	public $Recordset = NULL;
	public $DetailRecordCount = 0;

	// Paging variables
	public $RecordIndex = 0; // Record index
	public $RecordCount = 0; // Record count
	public $StartGroup = 0; // Start group
	public $StopGroup = 0; // Stop group
	public $TotalGroups = 0; // Total groups
	public $GroupCount = 0; // Group count
	public $GroupCounter = []; // Group counter
	public $DisplayGroups = 30; // Groups per page
	public $GroupRange = 10;
	public $Sort = "";
	public $Filter = "";
	public $PageFirstGroupFilter = "";
	public $UserIDFilter = "";
	public $DrillDown = FALSE;
	public $DrillDownInPanel = FALSE;
	public $DrillDownList = "";

	// Clear field for ext filter
	public $ExpiredExtendedFilter = "";
	public $PopupName = "";
	public $PopupValue = "";
	public $FilterApplied;
	public $SearchCommand = FALSE;
	public $ShowHeader;
	public $GroupColumnCount = 0;
	public $SubGroupColumnCount = 0;
	public $DetailColumnCount = 0;
	public $Counts;
	public $Columns;
	public $Values;
	public $Summaries;
	public $Minimums;
	public $Maximums;
	public $GrandCounts;
	public $GrandSummaries;
	public $GrandMinimums;
	public $GrandMaximums;
	public $TotalCount;
	public $GrandSummarySetup = FALSE;
	public $GroupIndexes;
	public $DetailRows = [];
	public $TopContentClass = "col-sm-12 ew-top";
	public $LeftContentClass = "ew-left";
	public $CenterContentClass = "col-sm-12 ew-center";
	public $RightContentClass = "ew-right";
	public $BottomContentClass = "col-sm-12 ew-bottom";

	//
	// Page run
	//

	public function run()
	{
		global $ExportType, $ExportFileName, $ReportLanguage, $Security, $UserProfile,
			$Security, $FormError, $DrillDownInPanel, $Breadcrumb, $ReportLanguage,
			$DashboardReport, $CustomExportType;
		global $ReportLanguage;

		// User profile
		$UserProfile = new UserProfile();

		// Security
		$Security = new AdvancedSecurity();
		if (!$Security->isLoggedIn()) $Security->autoLogin(); // Auto login
		$Security->TablePermission_Loading();
		$Security->loadCurrentUserLevel($this->ProjectID . 'r106_daf_kelas_siswa_iuran');
		$Security->TablePermission_Loaded();
		if (!$Security->canList()) {
			$Security->saveLastUrl();
			$this->setFailureMessage(DeniedMessage()); // Set no permission
			$this->terminate(GetUrl("index.php"));
		}
		$Security->UserID_Loading();
		if ($Security->isLoggedIn()) $Security->loadUserID();
		$Security->UserID_Loaded();
		if ($Security->isLoggedIn() && strval($Security->currentUserID()) == "") {
			$Security->saveLastUrl();
			$this->setFailureMessage(DeniedMessage()); // Set no permission
			$this->terminate(GetUrl("login.php"));
		}

		// Get export parameters
		if (ReportParam("export") !== NULL)
			$this->Export = strtolower(ReportParam("export"));
		$ExportType = $this->Export; // Get export parameter, used in header
		$ExportFileName = $this->TableVar; // Get export file, used in header

		// Setup placeholder
		$this->nomorinduk->PlaceHolder = $this->nomorinduk->caption();
		$this->siswa_nama->PlaceHolder = $this->siswa_nama->caption();

		// Setup export options
		$this->setupExportOptions();

		// Global Page Loading event (in userfn*.php)
		Page_Loading();

		// Page Load event
		$this->Page_Load();

		// Check token
		if (!$this->validPost()) {
			echo $ReportLanguage->phrase("InvalidPostRequest");
			$this->terminate();
			exit();
		}

		// Create Token
		$this->createToken();

		// Set up lookup cache
		$this->setupLookupOptions($this->tahun_ajaran);
		$this->setupLookupOptions($this->sekolah_nama);
		$this->setupLookupOptions($this->kelas_nama);
		$this->setupLookupOptions($this->iuran_nama);

		// Set field visibility for detail fields
		$this->tahun_ajaran->setVisibility();
		$this->sekolah_nama->setVisibility();
		$this->kelas_nama->setVisibility();
		$this->nomorinduk->setVisibility();
		$this->siswa_nama->setVisibility();
		$this->iuran_id->setVisibility();
		$this->iuran_nama->setVisibility();
		$this->jumlah->setVisibility();

		// Aggregate variables
		// 1st dimension = no of groups (level 0 used for grand total)
		// 2nd dimension = no of fields

		$fieldCount = 9;
		$groupCount = 3;
		$this->Values = &InitArray($fieldCount, 0);
		$this->Counts = &Init2DArray($groupCount, $fieldCount, 0);
		$this->Summaries = &Init2DArray($groupCount, $fieldCount, 0);
		$this->Minimums = &Init2DArray($groupCount, $fieldCount, NULL);
		$this->Maximums = &Init2DArray($groupCount, $fieldCount, NULL);
		$this->GrandCounts = &InitArray($fieldCount, 0);
		$this->GrandSummaries = &InitArray($fieldCount, 0);
		$this->GrandMinimums = &InitArray($fieldCount, NULL);
		$this->GrandMaximums = &InitArray($fieldCount, NULL);

		// Set up array if accumulation required: [Accum, SkipNullOrZero]
		$this->Columns = [[FALSE, FALSE], [FALSE,FALSE], [FALSE,FALSE], [FALSE,FALSE], [FALSE,FALSE], [FALSE,FALSE], [FALSE,FALSE], [FALSE,FALSE], [FALSE,FALSE]];

		// Set up groups per page dynamically
		$this->setupDisplayGroups();

		// Set up Breadcrumb
		if (!$this->isExport())
			$this->setupBreadcrumb();

		// Check if search command
		$this->SearchCommand = (Get("cmd", "") == "search");

		// Load default filter values
		$this->loadDefaultFilters();

		// Load custom filters
		$this->Page_FilterLoad();

		// Set up popup filter
		$this->setupPopup();

		// Load group db values if necessary
		$this->loadGroupDbValues();

		// Extended filter
		$extendedFilter = "";

		// Restore filter list
		$this->restoreFilterList();

		// Build extended filter
		$extendedFilter = $this->getExtendedFilter();
		AddFilter($this->Filter, $extendedFilter);

		// Build popup filter
		$popupFilter = $this->getPopupFilter();
		AddFilter($this->Filter, $popupFilter);

		// Check if filter applied
		$this->FilterApplied = $this->checkFilter();

		// Call Page Selecting event
		$this->Page_Selecting($this->Filter);

		// Requires search criteria
		if (($this->Filter == $this->UserIDFilter || $FormError != "") && !$this->DrillDown)
			$this->Filter = "0=101";

		// Search options
		$this->setupSearchOptions();

		// Get sort
		$this->Sort = $this->getSort();

		// Get total group count
		$sql = BuildReportSql($this->getSqlSelectGroup(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
		$this->TotalGroups = $this->getRecordCount($sql);
		if ($this->DisplayGroups <= 0 || $this->DrillDown || $DashboardReport) // Display all groups
			$this->DisplayGroups = $this->TotalGroups;
		$this->StartGroup = 1;

		// Show header
		$this->ShowHeader = ($this->TotalGroups > 0);

		// Set up start position if not export all
		if ($this->ExportAll && $this->isExport())
			$this->DisplayGroups = $this->TotalGroups;
		else
			$this->setupStartGroup();

		// Set no record found message
		if ($this->TotalGroups == 0) {
			if ($Security->canList()) {
				if ($this->Filter == "0=101") {
					$this->setWarningMessage($ReportLanguage->phrase("EnterSearchCriteria"));
				} else {
					$this->setWarningMessage($ReportLanguage->phrase("NoRecord"));
				}
			} else {
				$this->setWarningMessage(DeniedMessage());
			}
		}

		// Hide export options if export/dashboard report
		if ($this->isExport() || $DashboardReport)
			$this->ExportOptions->hideAllOptions();

		// Hide search/filter options if export/drilldown/dashboard report
		if ($this->isExport() || $this->DrillDown || $DashboardReport) {
			$this->SearchOptions->hideAllOptions();
			$this->FilterOptions->hideAllOptions();
			$this->GenerateOptions->hideAllOptions();
		}

		// Get current page groups
		$grpSort = UpdateSortFields($this->getSqlOrderByGroup(), $this->Sort, 2); // Get grouping field only
		$sql = BuildReportSql($this->getSqlSelectGroup(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderByGroup(), $this->Filter, $grpSort);
		$this->GroupRecordset = $this->getRecordset($sql, $this->DisplayGroups, $this->StartGroup - 1);

		// Init detail recordset
		$this->Recordset = NULL;
		$this->setupFieldCount();
	}

	// Get summary count
	public function getSummaryCount($lvl, $curValue = TRUE)
	{
		$cnt = 0;
		foreach ($this->DetailRows as $row) {
			$wrktsk = $row["tsk"];
			$wrkns = $row["ns"];
			if ($lvl >= 1) {
				$val = $curValue ? $this->tsk->CurrentValue : $this->tsk->OldValue;
				$grpval = $curValue ? $this->tsk->groupValue() : $this->tsk->groupOldValue();
				if ($val === NULL && $wrktsk !== NULL || $val !== NULL && $wrktsk === NULL ||
					$grpval <> $this->tsk->getGroupValueBase($wrktsk))
				continue;
			}
			if ($lvl >= 2) {
				$val = $curValue ? $this->ns->CurrentValue : $this->ns->OldValue;
				$grpval = $curValue ? $this->ns->groupValue() : $this->ns->groupOldValue();
				if ($val === NULL && $wrkns !== NULL || $val !== NULL && $wrkns === NULL ||
					$grpval <> $this->ns->getGroupValueBase($wrkns))
				continue;
			}
			$cnt++;
		}
		return $cnt;
	}

	// Check level break
	public function checkLevelBreak($lvl)
	{
		switch ($lvl) {
			case 1:
				return ($this->tsk->CurrentValue === NULL && $this->tsk->OldValue !== NULL) ||
					($this->tsk->CurrentValue !== NULL && $this->tsk->OldValue === NULL) ||
					($this->tsk->groupValue() <> $this->tsk->groupOldValue());
			case 2:
				return ($this->ns->CurrentValue === NULL && $this->ns->OldValue !== NULL) ||
					($this->ns->CurrentValue !== NULL && $this->ns->OldValue === NULL) ||
					($this->ns->groupValue() <> $this->ns->groupOldValue()) || $this->checkLevelBreak(1); // Recurse upper level
		}
	}

	// Accummulate summary
	public function accumulateSummary()
	{
		$cntx = count($this->Summaries);
		for ($ix = 0; $ix < $cntx; $ix++) {
			$cnty = count($this->Summaries[$ix]);
			for ($iy = 1; $iy < $cnty; $iy++) {
				if ($this->Columns[$iy][0]) { // Accumulate required
					$valwrk = $this->Values[$iy];
					if ($valwrk === NULL) {
						if (!$this->Columns[$iy][1])
							$this->Counts[$ix][$iy]++;
					} else {
						$accum = (!$this->Columns[$iy][1] || !is_numeric($valwrk) || $valwrk <> 0);
						if ($accum) {
							$this->Counts[$ix][$iy]++;
							if (is_numeric($valwrk)) {
								$this->Summaries[$ix][$iy] += $valwrk;
								if ($this->Minimums[$ix][$iy] === NULL) {
									$this->Minimums[$ix][$iy] = $valwrk;
									$this->Maximums[$ix][$iy] = $valwrk;
								} else {
									if ($this->Minimums[$ix][$iy] > $valwrk)
										$this->Minimums[$ix][$iy] = $valwrk;
									if ($this->Maximums[$ix][$iy] < $valwrk)
										$this->Maximums[$ix][$iy] = $valwrk;
								}
							}
						}
					}
				}
			}
		}
		$cntx = count($this->Summaries);
		for ($ix = 0; $ix < $cntx; $ix++)
			$this->Counts[$ix][0]++;
	}

	// Reset level summary
	public function resetLevelSummary($lvl)
	{

		// Clear summary values
		$cntx = count($this->Summaries);
		for ($ix = $lvl; $ix < $cntx; $ix++) {
			$cnty = count($this->Summaries[$ix]);
			for ($iy = 1; $iy < $cnty; $iy++) {
				$this->Counts[$ix][$iy] = 0;
				if ($this->Columns[$iy][0]) {
					$this->Summaries[$ix][$iy] = 0;
					$this->Minimums[$ix][$iy] = NULL;
					$this->Maximums[$ix][$iy] = NULL;
				}
			}
		}
		$cntx = count($this->Summaries);
		for ($ix = $lvl; $ix < $cntx; $ix++)
			$this->Counts[$ix][0] = 0;

		// Reset record count
		$this->RecordCount = 0;
	}

	// Load group row values
	public function loadGroupRowValues($firstRow = FALSE)
	{
		if (!$this->GroupRecordset)
			return;
		if ($firstRow) // Get first group

			//$this->GroupRecordset->moveFirst(); // NOTE: no need to move position
			$this->tsk->setDbValue(""); // Init first value
		else // Get next group
			$this->GroupRecordset->moveNext();
		if (!$this->GroupRecordset->EOF)
			$this->tsk->setDbValue($this->GroupRecordset->fields[0]);
		else
			$this->tsk->setDbValue("");
	}

	// Load row values
	public function loadRowValues($firstRow = FALSE)
	{
		if (!$this->Recordset)
			return;
		if ($firstRow) { // Get first row
			$this->Recordset->moveFirst(); // Move first
			if ($this->GroupCount == 1) {
				$this->FirstRowData = [];
				$this->FirstRowData["tahun_ajaran"] = $this->Recordset->fields('tahun_ajaran');
				$this->FirstRowData["sekolah_nama"] = $this->Recordset->fields('sekolah_nama');
				$this->FirstRowData["kelas_nama"] = $this->Recordset->fields('kelas_nama');
				$this->FirstRowData["nomorinduk"] = $this->Recordset->fields('nomorinduk');
				$this->FirstRowData["siswa_nama"] = $this->Recordset->fields('siswa_nama');
				$this->FirstRowData["iuran_id"] = $this->Recordset->fields('iuran_id');
				$this->FirstRowData["iuran_nama"] = $this->Recordset->fields('iuran_nama');
				$this->FirstRowData["tsk"] = $this->Recordset->fields('tsk');
				$this->FirstRowData["ns"] = $this->Recordset->fields('ns');
				$this->FirstRowData["jumlah"] = $this->Recordset->fields('jumlah');
				$this->FirstRowData["tabel_kelas_id"] = $this->Recordset->fields('tabel_kelas_id');
				$this->FirstRowData["tahun_ajaran_id"] = $this->Recordset->fields('tahun_ajaran_id');
				$this->FirstRowData["sekolah_id"] = $this->Recordset->fields('sekolah_id');
				$this->FirstRowData["kelas_id"] = $this->Recordset->fields('kelas_id');
				$this->FirstRowData["tabel_siswa_id"] = $this->Recordset->fields('tabel_siswa_id');
				$this->FirstRowData["siswa_id"] = $this->Recordset->fields('siswa_id');
				$this->FirstRowData["tabel_iuran_id"] = $this->Recordset->fields('tabel_iuran_id');
			}
		} else { // Get next row
			$this->Recordset->moveNext();
		}
		if (!$this->Recordset->EOF) {
			$this->tahun_ajaran->setDbValue($this->Recordset->fields('tahun_ajaran'));
			$this->sekolah_nama->setDbValue($this->Recordset->fields('sekolah_nama'));
			$this->kelas_nama->setDbValue($this->Recordset->fields('kelas_nama'));
			$this->nomorinduk->setDbValue($this->Recordset->fields('nomorinduk'));
			$this->siswa_nama->setDbValue($this->Recordset->fields('siswa_nama'));
			$this->iuran_id->setDbValue($this->Recordset->fields('iuran_id'));
			$this->iuran_nama->setDbValue($this->Recordset->fields('iuran_nama'));
			if (!$firstRow) {
				if (is_array($this->tsk->GroupDbValues))
					$this->tsk->setDbValue(@$this->tsk->GroupDbValues[$this->Recordset->fields('tsk')]);
				else
					$this->tsk->setDbValue(GroupValue($this->tsk, $this->Recordset->fields('tsk')));
			}
			$this->ns->setDbValue($this->Recordset->fields('ns'));
			$this->jumlah->setDbValue($this->Recordset->fields('jumlah'));
			$this->tabel_kelas_id->setDbValue($this->Recordset->fields('tabel_kelas_id'));
			$this->tahun_ajaran_id->setDbValue($this->Recordset->fields('tahun_ajaran_id'));
			$this->sekolah_id->setDbValue($this->Recordset->fields('sekolah_id'));
			$this->kelas_id->setDbValue($this->Recordset->fields('kelas_id'));
			$this->tabel_siswa_id->setDbValue($this->Recordset->fields('tabel_siswa_id'));
			$this->siswa_id->setDbValue($this->Recordset->fields('siswa_id'));
			$this->tabel_iuran_id->setDbValue($this->Recordset->fields('tabel_iuran_id'));
			$this->Values[1] = $this->tahun_ajaran->CurrentValue;
			$this->Values[2] = $this->sekolah_nama->CurrentValue;
			$this->Values[3] = $this->kelas_nama->CurrentValue;
			$this->Values[4] = $this->nomorinduk->CurrentValue;
			$this->Values[5] = $this->siswa_nama->CurrentValue;
			$this->Values[6] = $this->iuran_id->CurrentValue;
			$this->Values[7] = $this->iuran_nama->CurrentValue;
			$this->Values[8] = $this->jumlah->CurrentValue;
		} else {
			$this->tahun_ajaran->setDbValue("");
			$this->sekolah_nama->setDbValue("");
			$this->kelas_nama->setDbValue("");
			$this->nomorinduk->setDbValue("");
			$this->siswa_nama->setDbValue("");
			$this->iuran_id->setDbValue("");
			$this->iuran_nama->setDbValue("");
			$this->tsk->setDbValue("");
			$this->ns->setDbValue("");
			$this->jumlah->setDbValue("");
			$this->tabel_kelas_id->setDbValue("");
			$this->tahun_ajaran_id->setDbValue("");
			$this->sekolah_id->setDbValue("");
			$this->kelas_id->setDbValue("");
			$this->tabel_siswa_id->setDbValue("");
			$this->siswa_id->setDbValue("");
			$this->tabel_iuran_id->setDbValue("");
		}
	}

	// Render row
	public function renderRow()
	{
		global $Security, $ReportLanguage, $Language;
		$conn = &$this->getConnection();
		if (!$this->GrandSummarySetup) { // Get Grand total
			$hasCount = FALSE;
			$hasSummary = FALSE;

			// Get total count from SQL directly
			$sql = BuildReportSql($this->getSqlSelectCount(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
			$rstot = $conn->execute($sql);
			if ($rstot) {
				$this->TotalCount = ($rstot->recordCount() > 1) ? $rstot->recordCount() : $rstot->fields[0];
				$rstot->close();
				$hasCount = TRUE;
			} else {
				$this->TotalCount = 0;
			}
			$hasSummary = TRUE;

			// Accumulate grand summary from detail records
			if (!$hasCount || !$hasSummary) {
				$sql = BuildReportSql($this->getSqlSelect(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
				$this->Recordset = $conn->execute($sql);
				if ($this->Recordset) {
					$this->loadRowValues(TRUE);
					while (!$this->Recordset->EOF) {
						$this->accumulateGrandSummary();
						$this->loadRowValues();
					}
					$this->Recordset->close();
				}
			}
			$this->GrandSummarySetup = TRUE; // No need to set up again
		}

		// Call Row_Rendering event
		$this->Row_Rendering();
		if ($this->RowType == ROWTYPE_SEARCH) { // Search row
			$ar = [];
			if (is_array($this->tahun_ajaran->AdvancedFilters)) {
				foreach ($this->tahun_ajaran->AdvancedFilters as $filter)
					if ($filter->Enabled)
						$ar[] = [$filter->ID, $filter->Name];
			}
			if (is_array($this->tahun_ajaran->DropDownList)) {
				foreach ($this->tahun_ajaran->DropDownList as $val)
					$ar[] = [$val, GetDropDownDisplayValue($val, "", 0)];
			}
			$this->tahun_ajaran->EditValue = $ar;
			$this->tahun_ajaran->AdvancedSearch->SearchValue = is_array($this->tahun_ajaran->DropDownValue) ? implode(",", $this->tahun_ajaran->DropDownValue) : $this->tahun_ajaran->DropDownValue;
			$ar = [];
			if (is_array($this->sekolah_nama->AdvancedFilters)) {
				foreach ($this->sekolah_nama->AdvancedFilters as $filter)
					if ($filter->Enabled)
						$ar[] = [$filter->ID, $filter->Name];
			}
			if (is_array($this->sekolah_nama->DropDownList)) {
				foreach ($this->sekolah_nama->DropDownList as $val)
					$ar[] = [$val, GetDropDownDisplayValue($val, "", 0)];
			}
			$this->sekolah_nama->EditValue = $ar;
			$this->sekolah_nama->AdvancedSearch->SearchValue = is_array($this->sekolah_nama->DropDownValue) ? implode(",", $this->sekolah_nama->DropDownValue) : $this->sekolah_nama->DropDownValue;
			$ar = [];
			if (is_array($this->kelas_nama->AdvancedFilters)) {
				foreach ($this->kelas_nama->AdvancedFilters as $filter)
					if ($filter->Enabled)
						$ar[] = [$filter->ID, $filter->Name];
			}
			if (is_array($this->kelas_nama->DropDownList)) {
				foreach ($this->kelas_nama->DropDownList as $val)
					$ar[] = [$val, GetDropDownDisplayValue($val, "", 0)];
			}
			$this->kelas_nama->EditValue = $ar;
			$this->kelas_nama->AdvancedSearch->SearchValue = is_array($this->kelas_nama->DropDownValue) ? implode(",", $this->kelas_nama->DropDownValue) : $this->kelas_nama->DropDownValue;
			$ar = [];
			if (is_array($this->iuran_nama->AdvancedFilters)) {
				foreach ($this->iuran_nama->AdvancedFilters as $filter)
					if ($filter->Enabled)
						$ar[] = [$filter->ID, $filter->Name];
			}
			if (is_array($this->iuran_nama->DropDownList)) {
				foreach ($this->iuran_nama->DropDownList as $val)
					$ar[] = [$val, GetDropDownDisplayValue($val, "", 0)];
			}
			$this->iuran_nama->EditValue = $ar;
			$this->iuran_nama->AdvancedSearch->SearchValue = is_array($this->iuran_nama->DropDownValue) ? implode(",", $this->iuran_nama->DropDownValue) : $this->iuran_nama->DropDownValue;
		} elseif ($this->RowType == ROWTYPE_TOTAL && !($this->RowTotalType == ROWTOTAL_GROUP && $this->RowTotalSubType == ROWTOTAL_HEADER)) { // Summary row
			PrependClass($this->RowAttrs["class"], ($this->RowTotalType == ROWTOTAL_PAGE || $this->RowTotalType == ROWTOTAL_GRAND) ? "ew-rpt-grp-aggregate" : ""); // Set up row class
			if ($this->RowTotalType == ROWTOTAL_GROUP) $this->RowAttrs["data-group"] = $this->tsk->groupOldValue(); // Set up group attribute
			if ($this->RowTotalType == ROWTOTAL_GROUP && $this->RowGroupLevel >= 2) $this->RowAttrs["data-group-2"] = $this->ns->groupOldValue(); // Set up group attribute 2

			// tsk
			$this->tsk->GroupViewValue = $this->tsk->groupOldValue();
			$this->tsk->CellAttrs["class"] = ($this->RowGroupLevel == 1 ? "ew-rpt-grp-summary-1" : "ew-rpt-grp-field-1");
			$this->tsk->GroupViewValue = DisplayGroupValue($this->tsk, $this->tsk->GroupViewValue);
			$this->tsk->GroupSummaryOldValue = $this->tsk->GroupSummaryValue;
			$this->tsk->GroupSummaryValue = $this->tsk->GroupViewValue;
			$this->tsk->GroupSummaryViewValue = ($this->tsk->GroupSummaryOldValue <> $this->tsk->GroupSummaryValue) ? $this->tsk->GroupSummaryValue : "&nbsp;";

			// ns
			$this->ns->GroupViewValue = $this->ns->groupOldValue();
			$this->ns->CellAttrs["class"] = ($this->RowGroupLevel == 2 ? "ew-rpt-grp-summary-2" : "ew-rpt-grp-field-2");
			$this->ns->GroupViewValue = DisplayGroupValue($this->ns, $this->ns->GroupViewValue);
			$this->ns->GroupSummaryOldValue = $this->ns->GroupSummaryValue;
			$this->ns->GroupSummaryValue = $this->ns->GroupViewValue;
			$this->ns->GroupSummaryViewValue = ($this->ns->GroupSummaryOldValue <> $this->ns->GroupSummaryValue) ? $this->ns->GroupSummaryValue : "&nbsp;";

			// tsk
			$this->tsk->HrefValue = "";

			// ns
			$this->ns->HrefValue = "";

			// tahun_ajaran
			$this->tahun_ajaran->HrefValue = "";

			// sekolah_nama
			$this->sekolah_nama->HrefValue = "";

			// kelas_nama
			$this->kelas_nama->HrefValue = "";

			// nomorinduk
			$this->nomorinduk->HrefValue = "";

			// siswa_nama
			$this->siswa_nama->HrefValue = "";

			// iuran_id
			$this->iuran_id->HrefValue = "";

			// iuran_nama
			$this->iuran_nama->HrefValue = "";

			// jumlah
			$this->jumlah->HrefValue = "";
		} else {
			if ($this->RowTotalType == ROWTOTAL_GROUP && $this->RowTotalSubType == ROWTOTAL_HEADER) {
			$this->RowAttrs["data-group"] = $this->tsk->groupValue(); // Set up group attribute
			if ($this->RowGroupLevel >= 2) $this->RowAttrs["data-group-2"] = $this->ns->groupValue(); // Set up group attribute 2
			} else {
			$this->RowAttrs["data-group"] = $this->tsk->groupValue(); // Set up group attribute
			$this->RowAttrs["data-group-2"] = $this->ns->groupValue(); // Set up group attribute 2
			}

			// tsk
			$this->tsk->GroupViewValue = $this->tsk->groupValue();
			$this->tsk->CellAttrs["class"] = "ew-rpt-grp-field-1";
			$this->tsk->GroupViewValue = DisplayGroupValue($this->tsk, $this->tsk->GroupViewValue);
			if ($this->tsk->groupValue() == $this->tsk->groupOldValue() && !$this->checkLevelBreak(1))
				$this->tsk->GroupViewValue = "&nbsp;";

			// ns
			$this->ns->GroupViewValue = $this->ns->groupValue();
			$this->ns->CellAttrs["class"] = "ew-rpt-grp-field-2";
			$this->ns->GroupViewValue = DisplayGroupValue($this->ns, $this->ns->GroupViewValue);
			if ($this->ns->groupValue() == $this->ns->groupOldValue() && !$this->checkLevelBreak(2))
				$this->ns->GroupViewValue = "&nbsp;";

			// tahun_ajaran
			$this->tahun_ajaran->ViewValue = $this->tahun_ajaran->CurrentValue;
			$this->tahun_ajaran->CellAttrs["class"] = ($this->RecordCount % 2 <> 1 ? "ew-table-alt-row" : "ew-table-row");

			// sekolah_nama
			$this->sekolah_nama->ViewValue = $this->sekolah_nama->CurrentValue;
			$this->sekolah_nama->CellAttrs["class"] = ($this->RecordCount % 2 <> 1 ? "ew-table-alt-row" : "ew-table-row");

			// kelas_nama
			$this->kelas_nama->ViewValue = $this->kelas_nama->CurrentValue;
			$this->kelas_nama->CellAttrs["class"] = ($this->RecordCount % 2 <> 1 ? "ew-table-alt-row" : "ew-table-row");

			// nomorinduk
			$this->nomorinduk->ViewValue = $this->nomorinduk->CurrentValue;
			$this->nomorinduk->CellAttrs["class"] = ($this->RecordCount % 2 <> 1 ? "ew-table-alt-row" : "ew-table-row");

			// siswa_nama
			$this->siswa_nama->ViewValue = $this->siswa_nama->CurrentValue;
			$this->siswa_nama->CellAttrs["class"] = ($this->RecordCount % 2 <> 1 ? "ew-table-alt-row" : "ew-table-row");

			// iuran_id
			$this->iuran_id->ViewValue = $this->iuran_id->CurrentValue;
			$this->iuran_id->ViewValue = FormatNumber($this->iuran_id->ViewValue, 0, -2, -2, -2);
			$this->iuran_id->CellAttrs["class"] = ($this->RecordCount % 2 <> 1 ? "ew-table-alt-row" : "ew-table-row");

			// iuran_nama
			$this->iuran_nama->ViewValue = $this->iuran_nama->CurrentValue;
			$this->iuran_nama->CellAttrs["class"] = ($this->RecordCount % 2 <> 1 ? "ew-table-alt-row" : "ew-table-row");

			// jumlah
			$this->jumlah->ViewValue = $this->jumlah->CurrentValue;
			$this->jumlah->ViewValue = FormatNumber($this->jumlah->ViewValue, 0, -2, -2, -2);
			$this->jumlah->CellAttrs["class"] = "text-right " . ($this->RecordCount % 2 <> 1 ? "ew-table-alt-row" : "ew-table-row");

			// tsk
			$this->tsk->HrefValue = "";

			// ns
			$this->ns->HrefValue = "";

			// tahun_ajaran
			$this->tahun_ajaran->HrefValue = "";

			// sekolah_nama
			$this->sekolah_nama->HrefValue = "";

			// kelas_nama
			$this->kelas_nama->HrefValue = "";

			// nomorinduk
			$this->nomorinduk->HrefValue = "";

			// siswa_nama
			$this->siswa_nama->HrefValue = "";

			// iuran_id
			$this->iuran_id->HrefValue = "";

			// iuran_nama
			$this->iuran_nama->HrefValue = "";

			// jumlah
			$this->jumlah->HrefValue = "";
		}

		// Call Cell_Rendered event
		if ($this->RowType == ROWTYPE_TOTAL) { // Summary row

			// tsk
			$currentValue = $this->tsk->GroupViewValue;
			$viewValue = &$this->tsk->GroupViewValue;
			$viewAttrs = &$this->tsk->ViewAttrs;
			$cellAttrs = &$this->tsk->CellAttrs;
			$hrefValue = &$this->tsk->HrefValue;
			$linkAttrs = &$this->tsk->LinkAttrs;
			$this->Cell_Rendered($this->tsk, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// ns
			$currentValue = $this->ns->GroupViewValue;
			$viewValue = &$this->ns->GroupViewValue;
			$viewAttrs = &$this->ns->ViewAttrs;
			$cellAttrs = &$this->ns->CellAttrs;
			$hrefValue = &$this->ns->HrefValue;
			$linkAttrs = &$this->ns->LinkAttrs;
			$this->Cell_Rendered($this->ns, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);
		} else {

			// tsk
			$currentValue = $this->tsk->groupValue();
			$viewValue = &$this->tsk->GroupViewValue;
			$viewAttrs = &$this->tsk->ViewAttrs;
			$cellAttrs = &$this->tsk->CellAttrs;
			$hrefValue = &$this->tsk->HrefValue;
			$linkAttrs = &$this->tsk->LinkAttrs;
			$this->Cell_Rendered($this->tsk, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// ns
			$currentValue = $this->ns->groupValue();
			$viewValue = &$this->ns->GroupViewValue;
			$viewAttrs = &$this->ns->ViewAttrs;
			$cellAttrs = &$this->ns->CellAttrs;
			$hrefValue = &$this->ns->HrefValue;
			$linkAttrs = &$this->ns->LinkAttrs;
			$this->Cell_Rendered($this->ns, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// tahun_ajaran
			$currentValue = $this->tahun_ajaran->CurrentValue;
			$viewValue = &$this->tahun_ajaran->ViewValue;
			$viewAttrs = &$this->tahun_ajaran->ViewAttrs;
			$cellAttrs = &$this->tahun_ajaran->CellAttrs;
			$hrefValue = &$this->tahun_ajaran->HrefValue;
			$linkAttrs = &$this->tahun_ajaran->LinkAttrs;
			$this->Cell_Rendered($this->tahun_ajaran, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// sekolah_nama
			$currentValue = $this->sekolah_nama->CurrentValue;
			$viewValue = &$this->sekolah_nama->ViewValue;
			$viewAttrs = &$this->sekolah_nama->ViewAttrs;
			$cellAttrs = &$this->sekolah_nama->CellAttrs;
			$hrefValue = &$this->sekolah_nama->HrefValue;
			$linkAttrs = &$this->sekolah_nama->LinkAttrs;
			$this->Cell_Rendered($this->sekolah_nama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// kelas_nama
			$currentValue = $this->kelas_nama->CurrentValue;
			$viewValue = &$this->kelas_nama->ViewValue;
			$viewAttrs = &$this->kelas_nama->ViewAttrs;
			$cellAttrs = &$this->kelas_nama->CellAttrs;
			$hrefValue = &$this->kelas_nama->HrefValue;
			$linkAttrs = &$this->kelas_nama->LinkAttrs;
			$this->Cell_Rendered($this->kelas_nama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// nomorinduk
			$currentValue = $this->nomorinduk->CurrentValue;
			$viewValue = &$this->nomorinduk->ViewValue;
			$viewAttrs = &$this->nomorinduk->ViewAttrs;
			$cellAttrs = &$this->nomorinduk->CellAttrs;
			$hrefValue = &$this->nomorinduk->HrefValue;
			$linkAttrs = &$this->nomorinduk->LinkAttrs;
			$this->Cell_Rendered($this->nomorinduk, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// siswa_nama
			$currentValue = $this->siswa_nama->CurrentValue;
			$viewValue = &$this->siswa_nama->ViewValue;
			$viewAttrs = &$this->siswa_nama->ViewAttrs;
			$cellAttrs = &$this->siswa_nama->CellAttrs;
			$hrefValue = &$this->siswa_nama->HrefValue;
			$linkAttrs = &$this->siswa_nama->LinkAttrs;
			$this->Cell_Rendered($this->siswa_nama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// iuran_id
			$currentValue = $this->iuran_id->CurrentValue;
			$viewValue = &$this->iuran_id->ViewValue;
			$viewAttrs = &$this->iuran_id->ViewAttrs;
			$cellAttrs = &$this->iuran_id->CellAttrs;
			$hrefValue = &$this->iuran_id->HrefValue;
			$linkAttrs = &$this->iuran_id->LinkAttrs;
			$this->Cell_Rendered($this->iuran_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// iuran_nama
			$currentValue = $this->iuran_nama->CurrentValue;
			$viewValue = &$this->iuran_nama->ViewValue;
			$viewAttrs = &$this->iuran_nama->ViewAttrs;
			$cellAttrs = &$this->iuran_nama->CellAttrs;
			$hrefValue = &$this->iuran_nama->HrefValue;
			$linkAttrs = &$this->iuran_nama->LinkAttrs;
			$this->Cell_Rendered($this->iuran_nama, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// jumlah
			$currentValue = $this->jumlah->CurrentValue;
			$viewValue = &$this->jumlah->ViewValue;
			$viewAttrs = &$this->jumlah->ViewAttrs;
			$cellAttrs = &$this->jumlah->CellAttrs;
			$hrefValue = &$this->jumlah->HrefValue;
			$linkAttrs = &$this->jumlah->LinkAttrs;
			$this->Cell_Rendered($this->jumlah, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);
		}

		// Call Row_Rendered event
		$this->Row_Rendered();
		$this->setupFieldCount();
	}

	// Accummulate grand summary
	protected function accumulateGrandSummary()
	{
		$this->TotalCount++;
		$cntgs = count($this->GrandSummaries);
		for ($iy = 1; $iy < $cntgs; $iy++) {
			if ($this->Columns[$iy][0]) {
				$valwrk = $this->Values[$iy];
				if ($valwrk === NULL || !is_numeric($valwrk)) {
					if (!$this->Columns[$iy][1])
						$this->GrandCounts[$iy]++;
				} else {
					if (!$this->Columns[$iy][1] || $valwrk <> 0) {
						$this->GrandCounts[$iy]++;
						$this->GrandSummaries[$iy] += $valwrk;
						if ($this->GrandMinimums[$iy] === NULL) {
							$this->GrandMinimums[$iy] = $valwrk;
							$this->GrandMaximums[$iy] = $valwrk;
						} else {
							if ($this->GrandMinimums[$iy] > $valwrk)
								$this->GrandMinimums[$iy] = $valwrk;
							if ($this->GrandMaximums[$iy] < $valwrk)
								$this->GrandMaximums[$iy] = $valwrk;
						}
					}
				}
			}
		}
	}

	// Load group db values if necessary
	protected function loadGroupDbValues()
	{
		$conn = &$this->getConnection();
	}

	// Set up popup
	protected function setupPopup()
	{
		global $ReportLanguage;
		$conn = &$this->getConnection();
		if ($this->DrillDown)
			return;

		// Process post back form
		if (IsPost()) {
			$name = Post("popup", ""); // Get popup form name
			if ($name <> "") {
				$arValues = Post("sel_$name");
				$cntValues = is_array($arValues) ? count($arValues) : 0;
				if ($cntValues > 0) {
					if (trim($arValues[0]) == "") // Select all
						$arValues = INIT_VALUE;
					$this->PopupName = $name;
					if (IsAdvancedFilterValue($arValues) || $arValues == INIT_VALUE)
						$this->PopupValue = $arValues;
					if (!MatchedArray($arValues, @$_SESSION["sel_$name"])) {
						if ($this->hasSessionFilterValues($name))
							$this->ExpiredExtendedFilter = $name; // Clear extended filter for this field
					}
					$_SESSION["sel_$name"] = $arValues;
					$_SESSION["rf_$name"] = Post("rf_$name", "");
					$_SESSION["rt_$name"] = Post("rt_$name", "");
					$this->resetPager();
				}
			}

		// Get 'reset' command
		} elseif (Get("cmd") !== NULL) {
			$cmd = Get("cmd");
			if (SameText($cmd, "reset")) {
				$this->resetPager();
			}
		}

		// Load selection criteria to array
	}

	// Setup field count
	protected function setupFieldCount()
	{
		$this->GroupColumnCount = 0;
		$this->SubGroupColumnCount = 0;
		$this->DetailColumnCount = 0;
		if ($this->tsk->Visible)
			$this->GroupColumnCount += 1;
		if ($this->ns->Visible) {
			$this->GroupColumnCount += 1;
			$this->SubGroupColumnCount += 1;
		}
		if ($this->tahun_ajaran->Visible)
			$this->DetailColumnCount += 1;
		if ($this->sekolah_nama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->kelas_nama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->nomorinduk->Visible)
			$this->DetailColumnCount += 1;
		if ($this->siswa_nama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->iuran_id->Visible)
			$this->DetailColumnCount += 1;
		if ($this->iuran_nama->Visible)
			$this->DetailColumnCount += 1;
		if ($this->jumlah->Visible)
			$this->DetailColumnCount += 1;
	}

	// Set up Breadcrumb
	protected function setupBreadcrumb()
	{
		global $Breadcrumb;
		$Breadcrumb = new Breadcrumb();
		$url = substr(CurrentUrl(), strrpos(CurrentUrl(), "/") + 1);
		$url = preg_replace('/\?cmd=reset(all){0,1}$/i', "", $url); // Remove cmd=reset / cmd=resetall
		$Breadcrumb->add("summary", $this->TableVar, $url, "", $this->TableVar, TRUE);
	}

	// Set up export options (extended)
	protected function setupExportOptionsExt()
	{
		global $ReportLanguage, $ReportOptions;
		$reportTypes = $ReportOptions["ReportTypes"];
		$item = &$this->ExportOptions->getItem("pdf");
		$item->Visible = TRUE;
		if ($item->Visible)
			$reportTypes["pdf"] = $ReportLanguage->phrase("ReportFormPdf");
		$item->Body = "<a class=\"ew-export-link ew-pdf\" title=\"" . HtmlEncode($ReportLanguage->phrase("ExportToPDF", TRUE)) . "\" data-caption=\"" . HtmlEncode($ReportLanguage->phrase("ExportToPDF", TRUE)) . "\" href=\"javascript:void(0);\" onclick=\"ew.exportWithCharts(event, '" . $this->ExportPdfUrl . "', '" . session_id() . "');\">" . $ReportLanguage->phrase("ExportToPDF") . "</a>";
		$ReportOptions["ReportTypes"] = $reportTypes;
	}

	// Export to HTML
	public function exportHtml($html)
	{

		//global $ExportFileName;
		//header('Content-Type: text/html' . (PROJECT_CHARSET <> '' ? ';charset=' . PROJECT_CHARSET : ''));
		//header('Content-Disposition: attachment; filename=' . $ExportFileName . '.html');

		$folder = ReportParam("folder", "");
		$fileName = ReportParam("filename", "");
		$responseType = ReportParam("responsetype", "");
		$saveToFile = "";

		// Save generate file for print
		if ($folder <> "" && $fileName <> "" && ($responseType == "json" || $responseType == "file" && REPORT_SAVE_OUTPUT_ON_SERVER)) {
			$baseTag = "<base href=\"" . BaseUrl() . "\">";
			$html = preg_replace('/<head>/', '<head>' . $baseTag, $html);
			SaveFile($folder, $fileName, $html);
			$saveToFile = UploadPath(FALSE, $folder) . $fileName;
		}
		if ($saveToFile == "" || $responseType == "file")
			Write($html);
		return $saveToFile;
	}

	// Export to Excel
	public function exportExcel($html)
	{
		global $ExportFileName;
		$folder = ReportParam("folder", "");
		$fileName = ReportParam("filename", "");
		$responseType = ReportParam("responsetype", "");
		$saveToFile = "";
		if ($folder <> "" && $fileName <> "" && ($responseType == "json" || $responseType == "file" && REPORT_SAVE_OUTPUT_ON_SERVER)) {
		 	SaveFile(ServerMapPath($folder), $fileName, $html);
			$saveToFile = UploadPath(FALSE, $folder) . $fileName;
		}
		if ($saveToFile == "" || $responseType == "file") {
			AddHeader('Set-Cookie', 'fileDownload=true; path=/');
			AddHeader('Content-Type', 'application/vnd.ms-excel' . (PROJECT_CHARSET <> '' ? ';charset=' . PROJECT_CHARSET : ''));
			AddHeader('Content-Disposition', 'attachment; filename=' . $ExportFileName . '.xls');
			Write($html);
		}
		return $saveToFile;
	}

	// Export PDF
	public function exportPdf($html)
	{
		global $ExportFileName, $PDF_MEMORY_LIMIT, $PDF_TIME_LIMIT, $PDF_IMAGE_SCALE_FACTOR;
		@ini_set("memory_limit", $PDF_MEMORY_LIMIT);
		set_time_limit($PDF_TIME_LIMIT);
		$html = CheckHtml($html);
		if (DEBUG_ENABLED) // Add debug message
			$html = str_replace("</body>", GetDebugMessage() . "</body>", $html);
		$dompdf = new \Dompdf\Dompdf(["pdf_backend" => "Cpdf"]);
		$doc = new \DOMDocument("1.0", "utf-8");
		@$doc->loadHTML('<?xml encoding="uft-8">' . ConvertToUtf8($html)); // Convert to utf-8
		$spans = $doc->getElementsByTagName("span");
		foreach ($spans as $span) {
			$classNames = $span->getAttribute("class");
			if ($classNames == "ew-filter-caption") // Insert colon
				$span->parentNode->insertBefore($doc->createElement("span", ":&nbsp;"), $span->nextSibling);
			elseif (preg_match('/\bicon\-\w+\b/', $classNames)) // Remove icons
				$span->parentNode->removeChild($span);
		}
		$images = $doc->getElementsByTagName("img");
		$pageSize = "a4";
		$pageOrientation = "portrait";
		$this->ExportPageOrientation = $pageOrientation;
		$portrait = SameText($pageOrientation, "portrait");
		foreach ($images as $image) {
			$imagefn = $image->getAttribute("src");
			if (file_exists($imagefn)) {
				$imagefn = realpath($imagefn);
				$size = getimagesize($imagefn); // Get image size
				if ($size[0] <> 0) {
					if (SameText($pageSize, "letter")) { // Letter paper (8.5 in. by 11 in.)
						$w = $portrait ? 216 : 279;
					} elseif (SameText($pageSize, "legal")) { // Legal paper (8.5 in. by 14 in.)
						$w = $portrait ? 216 : 356;
					} else {
						$w = $portrait ? 210 : 297; // A4 paper (210 mm by 297 mm)
					}
					$w = min($size[0], ($w - 20 * 2) / 25.4 * 72 * $PDF_IMAGE_SCALE_FACTOR); // Resize image, adjust the scale factor if necessary
					$h = $w / $size[0] * $size[1];
					$image->setAttribute("width", $w);
					$image->setAttribute("height", $h);
				}
			}
		}
		$html = $doc->saveHTML();
		$html = ConvertFromUtf8($html);
		$dompdf->load_html($html);
		$dompdf->set_paper($pageSize, $pageOrientation);
		$dompdf->render();
		$folder = ReportParam("folder", "");
		$fileName = ReportParam("filename", "");
		$responseType = ReportParam("responsetype", "");
		$saveToFile = "";
		if ($folder <> "" && $fileName <> "" && ($responseType == "json" || $responseType == "file" && REPORT_SAVE_OUTPUT_ON_SERVER)) {
			SaveFile(ServerMapPath($folder), $fileName, $dompdf->output());
			$saveToFile = UploadPath(FALSE, $folder) . $fileName;
		}
		if ($saveToFile == "" || $responseType == "file") {
			AddHeader('Set-Cookie', 'fileDownload=true; path=/');
			$exportFile = EndsText(".pdf", $ExportFileName) ? $ExportFileName : $ExportFileName . ".pdf";
			$dompdf->stream($exportFile, ["Attachment" => 1]); // 0 to open in browser, 1 to download
		}
		DeleteTempImages($html);
		return $saveToFile;
	}

	// Set up starting group
	protected function setupStartGroup()
	{

		// Exit if no groups
		if ($this->DisplayGroups == 0)
			return;
		$startGrp = ReportParam(TABLE_START_GROUP, "");
		$pageNo = ReportParam("pageno", "");

		// Check for a 'start' parameter
		if ($startGrp != "") {
			$this->StartGroup = $startGrp;
			$this->setStartGroup($this->StartGroup);
		} elseif ($pageNo != "") {
			if (is_numeric($pageNo)) {
				$this->StartGroup = ($pageNo - 1) * $this->DisplayGroups + 1;
				if ($this->StartGroup <= 0) {
					$this->StartGroup = 1;
				} elseif ($this->StartGroup >= intval(($this->TotalGroups - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1) {
					$this->StartGroup = intval(($this->TotalGroups - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1;
				}
				$this->setStartGroup($this->StartGroup);
			} else {
				$this->StartGroup = $this->getStartGroup();
			}
		} else {
			$this->StartGroup = $this->getStartGroup();
		}

		// Check if correct start group counter
		if (!is_numeric($this->StartGroup) || $this->StartGroup == "") { // Avoid invalid start group counter
			$this->StartGroup = 1; // Reset start group counter
			$this->setStartGroup($this->StartGroup);
		} elseif (intval($this->StartGroup) > intval($this->TotalGroups)) { // Avoid starting group > total groups
			$this->StartGroup = intval(($this->TotalGroups - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1; // Point to last page first group
			$this->setStartGroup($this->StartGroup);
		} elseif (($this->StartGroup-1) % $this->DisplayGroups <> 0) {
			$this->StartGroup = intval(($this->StartGroup - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1; // Point to page boundary
			$this->setStartGroup($this->StartGroup);
		}
	}

	// Reset pager
	protected function resetPager()
	{

		// Reset start position (reset command)
		$this->StartGroup = 1;
		$this->setStartGroup($this->StartGroup);
	}

	// Set up number of groups displayed per page
	protected function setupDisplayGroups()
	{
		if (ReportParam(TABLE_GROUP_PER_PAGE) !== NULL) {
			$wrk = ReportParam(TABLE_GROUP_PER_PAGE);
			if (is_numeric($wrk)) {
				$this->DisplayGroups = intval($wrk);
			} else {
				if (strtoupper($wrk) == "ALL") { // Display all groups
					$this->DisplayGroups = -1;
				} else {
					$this->DisplayGroups = 30; // Non-numeric, load default
				}
			}
			$this->setGroupPerPage($this->DisplayGroups); // Save to session

			// Reset start position (reset command)
			$this->StartGroup = 1;
			$this->setStartGroup($this->StartGroup);
		} else {
			if ($this->getGroupPerPage() <> "") {
				$this->DisplayGroups = $this->getGroupPerPage(); // Restore from session
			} else {
				$this->DisplayGroups = 30; // Load default
			}
		}
	}

	// Get sort parameters based on sort links clicked
	protected function getSort()
	{
		if ($this->DrillDown)
			return "`iuran_id` ASC";
		$resetSort = ReportParam("cmd") === "resetsort";
		$orderBy = ReportParam("order", "");
		$orderType = ReportParam("ordertype", "");

		// Check for Ctrl pressed
		$ctrl = (ReportParam("ctrl") !== NULL);

		// Check for a resetsort command
		if ($resetSort) {
			$this->setOrderBy("");
			$this->setStartGroup(1);
			$this->tsk->setSort("");
			$this->ns->setSort("");
			$this->tahun_ajaran->setSort("");
			$this->sekolah_nama->setSort("");
			$this->kelas_nama->setSort("");
			$this->nomorinduk->setSort("");
			$this->siswa_nama->setSort("");
			$this->iuran_id->setSort("");
			$this->iuran_nama->setSort("");
			$this->jumlah->setSort("");

		// Check for an Order parameter
		} elseif ($orderBy <> "") {
			$this->CurrentOrder = $orderBy;
			$this->CurrentOrderType = $orderType;
			$this->updateSort($this->tsk, $ctrl); // tsk
			$this->updateSort($this->ns, $ctrl); // ns
			$this->updateSort($this->tahun_ajaran, $ctrl); // tahun_ajaran
			$this->updateSort($this->sekolah_nama, $ctrl); // sekolah_nama
			$this->updateSort($this->kelas_nama, $ctrl); // kelas_nama
			$this->updateSort($this->nomorinduk, $ctrl); // nomorinduk
			$this->updateSort($this->siswa_nama, $ctrl); // siswa_nama
			$this->updateSort($this->iuran_id, $ctrl); // iuran_id
			$this->updateSort($this->iuran_nama, $ctrl); // iuran_nama
			$this->updateSort($this->jumlah, $ctrl); // jumlah
			$sortSql = $this->sortSql();
			$this->setOrderBy($sortSql);
			$this->setStartGroup(1);
		}

		// Set up default sort
		if ($this->getOrderBy() == "") {
			$this->setOrderBy("`iuran_id` ASC");
			$this->iuran_id->setSort("ASC");
		}
		return $this->getOrderBy();
	}

	// Return extended filter
	protected function getExtendedFilter()
	{
		global $FormError;
		$filter = "";
		if ($this->DrillDown)
			return "";
		$postBack = IsPost();
		$restoreSession = TRUE;
		$setupFilter = FALSE;

		// Reset extended filter if filter changed
		if ($postBack) {

		// Reset search command
		} elseif (Get("cmd", "") == "reset") {

			// Load default values
			$this->setSessionDropDownValue($this->tahun_ajaran->DropDownValue, $this->tahun_ajaran->AdvancedSearch->SearchOperator, "tahun_ajaran"); // Field tahun_ajaran
			$this->setSessionDropDownValue($this->sekolah_nama->DropDownValue, $this->sekolah_nama->AdvancedSearch->SearchOperator, "sekolah_nama"); // Field sekolah_nama
			$this->setSessionDropDownValue($this->kelas_nama->DropDownValue, $this->kelas_nama->AdvancedSearch->SearchOperator, "kelas_nama"); // Field kelas_nama
			$this->setSessionFilterValues($this->nomorinduk->AdvancedSearch->SearchValue, $this->nomorinduk->AdvancedSearch->SearchOperator, $this->nomorinduk->AdvancedSearch->SearchCondition, $this->nomorinduk->AdvancedSearch->SearchValue2, $this->nomorinduk->AdvancedSearch->SearchOperator2, "nomorinduk"); // Field nomorinduk
			$this->setSessionFilterValues($this->siswa_nama->AdvancedSearch->SearchValue, $this->siswa_nama->AdvancedSearch->SearchOperator, $this->siswa_nama->AdvancedSearch->SearchCondition, $this->siswa_nama->AdvancedSearch->SearchValue2, $this->siswa_nama->AdvancedSearch->SearchOperator2, "siswa_nama"); // Field siswa_nama
			$this->setSessionDropDownValue($this->iuran_nama->DropDownValue, $this->iuran_nama->AdvancedSearch->SearchOperator, "iuran_nama"); // Field iuran_nama

			//$setupFilter = TRUE; // No need to set up, just use default
		} else {
			$restoreSession = !$this->SearchCommand;

			// Field tahun_ajaran
			if ($this->getDropDownValue($this->tahun_ajaran)) {
				$setupFilter = TRUE;
			} elseif ($this->tahun_ajaran->DropDownValue <> INIT_VALUE && !isset($_SESSION["x_r106_daf_kelas_siswa_iuran_tahun_ajaran"])) {
				$setupFilter = TRUE;
			}

			// Field sekolah_nama
			if ($this->getDropDownValue($this->sekolah_nama)) {
				$setupFilter = TRUE;
			} elseif ($this->sekolah_nama->DropDownValue <> INIT_VALUE && !isset($_SESSION["x_r106_daf_kelas_siswa_iuran_sekolah_nama"])) {
				$setupFilter = TRUE;
			}

			// Field kelas_nama
			if ($this->getDropDownValue($this->kelas_nama)) {
				$setupFilter = TRUE;
			} elseif ($this->kelas_nama->DropDownValue <> INIT_VALUE && !isset($_SESSION["x_r106_daf_kelas_siswa_iuran_kelas_nama"])) {
				$setupFilter = TRUE;
			}

			// Field nomorinduk
			if ($this->getFilterValues($this->nomorinduk)) {
				$setupFilter = TRUE;
			}

			// Field siswa_nama
			if ($this->getFilterValues($this->siswa_nama)) {
				$setupFilter = TRUE;
			}

			// Field iuran_nama
			if ($this->getDropDownValue($this->iuran_nama)) {
				$setupFilter = TRUE;
			} elseif ($this->iuran_nama->DropDownValue <> INIT_VALUE && !isset($_SESSION["x_r106_daf_kelas_siswa_iuran_iuran_nama"])) {
				$setupFilter = TRUE;
			}
			if (!$this->validateForm()) {
				$this->setFailureMessage($FormError);
				return $filter;
			}
		}

		// Restore session
		if ($restoreSession) {
			$this->getSessionDropDownValue($this->tahun_ajaran); // Field tahun_ajaran
			$this->getSessionDropDownValue($this->sekolah_nama); // Field sekolah_nama
			$this->getSessionDropDownValue($this->kelas_nama); // Field kelas_nama
			$this->getSessionFilterValues($this->nomorinduk); // Field nomorinduk
			$this->getSessionFilterValues($this->siswa_nama); // Field siswa_nama
			$this->getSessionDropDownValue($this->iuran_nama); // Field iuran_nama
		}

		// Call page filter validated event
		$this->Page_FilterValidated();

		// Build SQL
		$this->buildDropDownFilter($this->tahun_ajaran, $filter, $this->tahun_ajaran->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field tahun_ajaran
		$this->buildDropDownFilter($this->sekolah_nama, $filter, $this->sekolah_nama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field sekolah_nama
		$this->buildDropDownFilter($this->kelas_nama, $filter, $this->kelas_nama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field kelas_nama
		$this->buildExtendedFilter($this->nomorinduk, $filter, FALSE, TRUE); // Field nomorinduk
		$this->buildExtendedFilter($this->siswa_nama, $filter, FALSE, TRUE); // Field siswa_nama
		$this->buildDropDownFilter($this->iuran_nama, $filter, $this->iuran_nama->AdvancedSearch->SearchOperator, FALSE, TRUE); // Field iuran_nama

		// Save parms to session
		$this->setSessionDropDownValue($this->tahun_ajaran->DropDownValue, $this->tahun_ajaran->AdvancedSearch->SearchOperator, "tahun_ajaran"); // Field tahun_ajaran
		$this->setSessionDropDownValue($this->sekolah_nama->DropDownValue, $this->sekolah_nama->AdvancedSearch->SearchOperator, "sekolah_nama"); // Field sekolah_nama
		$this->setSessionDropDownValue($this->kelas_nama->DropDownValue, $this->kelas_nama->AdvancedSearch->SearchOperator, "kelas_nama"); // Field kelas_nama
		$this->setSessionFilterValues($this->nomorinduk->AdvancedSearch->SearchValue, $this->nomorinduk->AdvancedSearch->SearchOperator, $this->nomorinduk->AdvancedSearch->SearchCondition, $this->nomorinduk->AdvancedSearch->SearchValue2, $this->nomorinduk->AdvancedSearch->SearchOperator2, "nomorinduk"); // Field nomorinduk
		$this->setSessionFilterValues($this->siswa_nama->AdvancedSearch->SearchValue, $this->siswa_nama->AdvancedSearch->SearchOperator, $this->siswa_nama->AdvancedSearch->SearchCondition, $this->siswa_nama->AdvancedSearch->SearchValue2, $this->siswa_nama->AdvancedSearch->SearchOperator2, "siswa_nama"); // Field siswa_nama
		$this->setSessionDropDownValue($this->iuran_nama->DropDownValue, $this->iuran_nama->AdvancedSearch->SearchOperator, "iuran_nama"); // Field iuran_nama

		// Setup filter
		if ($setupFilter) {
		}

		// Field tahun_ajaran
		LoadDropDownList($this->tahun_ajaran->DropDownList, $this->tahun_ajaran->DropDownValue);

		// Field sekolah_nama
		LoadDropDownList($this->sekolah_nama->DropDownList, $this->sekolah_nama->DropDownValue);

		// Field kelas_nama
		LoadDropDownList($this->kelas_nama->DropDownList, $this->kelas_nama->DropDownValue);

		// Field iuran_nama
		LoadDropDownList($this->iuran_nama->DropDownList, $this->iuran_nama->DropDownValue);
		return $filter;
	}

	// Build dropdown filter
	protected function buildDropDownFilter(&$fld, &$filterClause, $fldOpr, $default = FALSE, $saveFilter = FALSE)
	{
		$fldVal = ($default) ? $fld->DefaultDropDownValue : $fld->DropDownValue;
		$sql = "";
		if (is_array($fldVal)) {
			foreach ($fldVal as $val) {
				$wrk = $this->getDropDownFilter($fld, $val, $fldOpr);

				// Call Page Filtering event
				if (!StartsString("@@", $val))
					$this->Page_Filtering($fld, $wrk, "dropdown", $fldOpr, $val);
				if ($wrk <> "") {
					if ($sql <> "")
						$sql .= " OR " . $wrk;
					else
						$sql = $wrk;
				}
			}
		} else {
			$sql = $this->getDropDownFilter($fld, $fldVal, $fldOpr);

			// Call Page Filtering event
			if (!StartsString("@@", $fldVal))
				$this->Page_Filtering($fld, $sql, "dropdown", $fldOpr, $fldVal);
		}
		if ($sql <> "") {
			AddFilter($filterClause, $sql);
			if ($saveFilter) $fld->CurrentFilter = $sql;
		}
	}

	// Get dropdown filter
	protected function getDropDownFilter(&$fld, $fldVal, $fldOpr)
	{
		$fldName = $fld->Name;
		$fldExpression = $fld->Expression;
		$fldDataType = $fld->DataType;
		$fldDelimiter = $fld->Delimiter;
		$fldVal = strval($fldVal);
		if ($fldOpr == "") $fldOpr = "=";
		$wrk = "";
		if (SameString($fldVal, NULL_VALUE)) {
			$wrk = $fldExpression . " IS NULL";
		} elseif (SameString($fldVal, NOT_NULL_VALUE)) {
			$wrk = $fldExpression . " IS NOT NULL";
		} elseif (SameString($fldVal, EMPTY_VALUE)) {
			$wrk = $fldExpression . " = ''";
		} elseif (SameString($fldVal, ALL_VALUE)) {
			$wrk = "1 = 1";
		} else {
			if (StartsString("@@", $fldVal)) {
				$wrk = $this->getCustomFilter($fld, $fldVal, $this->Dbid);
			} elseif ($fldDelimiter <> "" && trim($fldVal) <> "" && ($fldDataType == DATATYPE_STRING || $fldDataType == DATATYPE_MEMO)) {
				$wrk = GetMultiValueSearchSql($fldExpression, trim($fldVal), $this->Dbid);
			} else {
				if ($fldVal <> "" && $fldVal <> INIT_VALUE) {
					if ($fldDataType == DATATYPE_DATE && $fldOpr <> "") {
						$wrk = GetDateFilterSql($fldExpression, $fldOpr, $fldVal, $fldDataType, $this->Dbid);
					} else {
						$wrk = GetFilterSql($fldOpr, $fldVal, $fldDataType, $this->Dbid);
						if ($wrk <> "") $wrk = $fldExpression . $wrk;
					}
				}
			}
		}
		return $wrk;
	}

	// Get custom filter
	protected function getCustomFilter(&$fld, $fldVal, $dbid = 0)
	{
		$wrk = "";
		if (is_array($fld->AdvancedFilters)) {
			foreach ($fld->AdvancedFilters as $filter) {
				if ($filter->ID == $fldVal && $filter->Enabled) {
					$fldExpr = $fld->Expression;
					$fn = $filter->FunctionName;
					$wrkid = StartsString("@@", $filter->ID) ? substr($filter->ID, 2) : $filter->ID;
					if ($fn <> "") {
						$fn = PROJECT_NAMESPACE . $fn;
						$wrk = $fn($fldExpr, $dbid);
					} else
						$wrk = "";
					$this->Page_Filtering($fld, $wrk, "custom", $wrkid);
					break;
				}
			}
		}
		return $wrk;
	}

	// Build extended filter
	protected function buildExtendedFilter(&$fld, &$filterClause, $default = FALSE, $saveFilter = FALSE)
	{
		$wrk = GetExtendedFilter($fld, $default, $this->Dbid);
		if (!$default)
			$this->Page_Filtering($fld, $wrk, "extended", $fld->AdvancedSearch->SearchOperator, $fld->AdvancedSearch->SearchValue, $fld->AdvancedSearch->SearchCondition, $fld->AdvancedSearch->SearchOperator2, $fld->AdvancedSearch->SearchValue2);
		if ($wrk <> "") {
			AddFilter($filterClause, $wrk);
			if ($saveFilter) $fld->CurrentFilter = $wrk;
		}
	}

	// Get drop down value from querystring
	protected function getDropDownValue(&$fld)
	{
		$parm = substr($fld->FieldVar, 2);
		if (IsPost())
			return FALSE; // Skip post back
		$opr = Get("z_$parm");
		if ($opr !== NULL)
			$fld->AdvancedSearch->SearchOperator = $opr;
		$val = Get("x_$parm");
		if ($val !== NULL) {
			if ($fld->isMultiSelect() && !is_array($val)) // Split values for modal lookup
				$fld->DropDownValue = explode(LOOKUP_FILTER_VALUE_SEPARATOR, $val);
			else
				$fld->DropDownValue = $val;
			return TRUE;
		}
		return FALSE;
	}

	// Get filter values from querystring
	protected function getFilterValues(&$fld)
	{
		$parm = substr($fld->FieldVar, 2);
		if (IsPost())
			return; // Skip post back
		$got = FALSE;
		if (Get("x_$parm") !== NULL) {
			$fld->AdvancedSearch->SearchValue = Get("x_$parm");
			$got = TRUE;
		}
		if (Get("z_$parm") !== NULL) {
			$fld->AdvancedSearch->SearchOperator = Get("z_$parm");
			$got = TRUE;
		}
		if (Get("v_$parm") !== NULL) {
			$fld->AdvancedSearch->SearchCondition = Get("v_$parm");
			$got = TRUE;
		}
		if (Get("y_$parm") !== NULL) {
			$fld->AdvancedSearch->SearchValue2 = Get("y_$parm");
			$got = TRUE;
		}
		if (Get("w_$parm") !== NULL) {
			$fld->AdvancedSearch->SearchOperator2 = Get("w_$parm");
			$got = TRUE;
		}
		return $got;
	}

	// Set default ext filter
	protected function setDefaultExtFilter(&$fld, $so1, $sv1, $sc, $so2, $sv2)
	{
		$fld->AdvancedSearch->SearchValueDefault = $sv1; // Default ext filter value 1
		$fld->AdvancedSearch->SearchValue2Default = $sv2; // Default ext filter value 2 (if operator 2 is enabled)
		$fld->AdvancedSearch->SearchOperatorDefault = $so1; // Default search operator 1
		$fld->AdvancedSearch->SearchOperator2Default = $so2; // Default search operator 2 (if operator 2 is enabled)
		$fld->AdvancedSearch->SearchConditionDefault = $sc; // Default search condition (if operator 2 is enabled)
	}

	// Apply default ext filter
	protected function applyDefaultExtFilter(&$fld)
	{
		$fld->AdvancedSearch->SearchValue = $fld->AdvancedSearch->SearchValueDefault;
		$fld->AdvancedSearch->SearchValue2 = $fld->AdvancedSearch->SearchValue2Default;
		$fld->AdvancedSearch->SearchOperator = $fld->AdvancedSearch->SearchOperatorDefault;
		$fld->AdvancedSearch->SearchOperator2 = $fld->AdvancedSearch->SearchOperator2Default;
		$fld->AdvancedSearch->SearchCondition = $fld->AdvancedSearch->SearchConditionDefault;
	}

	// Check if Text Filter applied
	protected function textFilterApplied(&$fld)
	{
		return (strval($fld->AdvancedSearch->SearchValue) <> strval($fld->AdvancedSearch->SearchValueDefault) ||
			strval($fld->AdvancedSearch->SearchValue2) <> strval($fld->AdvancedSearch->SearchValue2Default) ||
			(strval($fld->AdvancedSearch->SearchValue) <> "" &&
				strval($fld->AdvancedSearch->SearchOperator) <> strval($fld->AdvancedSearch->SearchOperatorDefault)) ||
			(strval($fld->AdvancedSearch->SearchValue2) <> "" &&
				strval($fld->AdvancedSearch->SearchOperator2) <> strval($fld->AdvancedSearch->SearchOperator2Default)) ||
			strval($fld->AdvancedSearch->SearchCondition) <> strval($fld->AdvancedSearch->SearchConditionDefault));
	}

	// Check if Non-Text Filter applied
	protected function nonTextFilterApplied(&$fld)
	{
		if (is_array($fld->DropDownValue)) {
			if (is_array($fld->DefaultDropDownValue)) {
				if (count($fld->DefaultDropDownValue) <> count($fld->DropDownValue))
					return TRUE;
				else
					return (count(array_diff($fld->DefaultDropDownValue, $fld->DropDownValue)) <> 0);
			} else {
				return TRUE;
			}
		} else {
			if (is_array($fld->DefaultDropDownValue))
				return TRUE;
			else
				$v1 = strval($fld->DefaultDropDownValue);
			if ($v1 == INIT_VALUE)
				$v1 = "";
			$v2 = strval($fld->DropDownValue);
			if ($v2 == INIT_VALUE || $v2 == ALL_VALUE)
				$v2 = "";
			return ($v1 <> $v2);
		}
	}

	// Get dropdown value from session
	protected function getSessionDropDownValue(&$fld)
	{
		$parm = substr($fld->FieldVar, 2);
		$this->getSessionValue($fld->DropDownValue, 'x_r106_daf_kelas_siswa_iuran_' . $parm);
		$this->getSessionValue($fld->AdvancedSearch->SearchOperator, 'z_r106_daf_kelas_siswa_iuran_' . $parm);
	}

	// Get filter values from session
	protected function getSessionFilterValues(&$fld)
	{
		$parm = substr($fld->FieldVar, 2);
		$this->getSessionValue($fld->AdvancedSearch->SearchValue, 'x_r106_daf_kelas_siswa_iuran_' . $parm);
		$this->getSessionValue($fld->AdvancedSearch->SearchOperator, 'z_r106_daf_kelas_siswa_iuran_' . $parm);
		$this->getSessionValue($fld->AdvancedSearch->SearchCondition, 'v_r106_daf_kelas_siswa_iuran_' . $parm);
		$this->getSessionValue($fld->AdvancedSearch->SearchValue2, 'y_r106_daf_kelas_siswa_iuran_' . $parm);
		$this->getSessionValue($fld->AdvancedSearch->SearchOperator2, 'w_r106_daf_kelas_siswa_iuran_' . $parm);
	}

	// Get value from session
	protected function getSessionValue(&$sv, $sn)
	{
		if (array_key_exists($sn, $_SESSION))
			$sv = $_SESSION[$sn];
	}

	// Set dropdown value to session
	protected function setSessionDropDownValue($sv, $so, $parm)
	{
		$_SESSION['x_r106_daf_kelas_siswa_iuran_' . $parm] = $sv;
		$_SESSION['z_r106_daf_kelas_siswa_iuran_' . $parm] = $so;
	}

	// Set filter values to session
	protected function setSessionFilterValues($sv1, $so1, $sc, $sv2, $so2, $parm)
	{
		$_SESSION['x_r106_daf_kelas_siswa_iuran_' . $parm] = $sv1;
		$_SESSION['z_r106_daf_kelas_siswa_iuran_' . $parm] = $so1;
		$_SESSION['v_r106_daf_kelas_siswa_iuran_' . $parm] = $sc;
		$_SESSION['y_r106_daf_kelas_siswa_iuran_' . $parm] = $sv2;
		$_SESSION['w_r106_daf_kelas_siswa_iuran_' . $parm] = $so2;
	}

	// Check if has session filter values
	protected function hasSessionFilterValues($parm)
	{
		return (@$_SESSION['x_' . $parm] <> "" && @$_SESSION['x_' . $parm] <> INIT_VALUE ||
			@$_SESSION['x_' . $parm] <> "" && @$_SESSION['x_' . $parm] <> INIT_VALUE ||
			@$_SESSION['y_' . $parm] <> "" && @$_SESSION['y_' . $parm] <> INIT_VALUE);
	}

	// Dropdown filter exist
	protected function dropDownFilterExist(&$fld, $fldOpr)
	{
		$wrk = "";
		$this->buildDropDownFilter($fld, $wrk, $fldOpr);
		return ($wrk <> "");
	}

	// Extended filter exist
	protected function extendedFilterExist(&$fld)
	{
		$extWrk = "";
		$this->buildExtendedFilter($fld, $extWrk);
		return ($extWrk <> "");
	}

	// Validate form
	protected function validateForm()
	{
		global $ReportLanguage, $FormError;

		// Initialize form error message
		$FormError = "";

		// Check if validation required
		if (!SERVER_VALIDATE)
			return ($FormError == "");

		// Return validate result
		$validateForm = ($FormError == "");

		// Call Form_CustomValidate event
		$formCustomError = "";
		$validateForm = $validateForm && $this->Form_CustomValidate($formCustomError);
		if ($formCustomError <> "") {
			$FormError .= ($FormError <> "") ? "<p>&nbsp;</p>" : "";
			$FormError .= $formCustomError;
		}
		return $validateForm;
	}

	// Clear selection stored in session
	protected function clearSessionSelection($parm)
	{
		$_SESSION["sel_r106_daf_kelas_siswa_iuran_$parm"] = "";
		$_SESSION["rf_r106_daf_kelas_siswa_iuran_$parm"] = "";
		$_SESSION["rt_r106_daf_kelas_siswa_iuran_$parm"] = "";
	}

	// Load selection from session
	protected function loadSelectionFromSession($parm)
	{
		foreach ($this->fields as $fld) {
			if ($fld->Param == $parm) {
				$fld->SelectionList = @$_SESSION["sel_r106_daf_kelas_siswa_iuran_$parm"];
				$fld->RangeFrom = @$_SESSION["rf_r106_daf_kelas_siswa_iuran_$parm"];
				$fld->RangeTo = @$_SESSION["rt_r106_daf_kelas_siswa_iuran_$parm"];
				break;
			}
		}
	}

	// Load default value for filters
	protected function loadDefaultFilters()
	{

		/**
		* Set up default values for non Text filters
		*/
		// Field tahun_ajaran

		$this->tahun_ajaran->DefaultDropDownValue = INIT_VALUE;
		if (!$this->SearchCommand)
			$this->tahun_ajaran->DropDownValue = $this->tahun_ajaran->DefaultDropDownValue;

		// Field sekolah_nama
		$this->sekolah_nama->DefaultDropDownValue = INIT_VALUE;
		if (!$this->SearchCommand)
			$this->sekolah_nama->DropDownValue = $this->sekolah_nama->DefaultDropDownValue;

		// Field kelas_nama
		$this->kelas_nama->DefaultDropDownValue = INIT_VALUE;
		if (!$this->SearchCommand)
			$this->kelas_nama->DropDownValue = $this->kelas_nama->DefaultDropDownValue;

		// Field iuran_nama
		$this->iuran_nama->DefaultDropDownValue = INIT_VALUE;
		if (!$this->SearchCommand)
			$this->iuran_nama->DropDownValue = $this->iuran_nama->DefaultDropDownValue;

		/**
		* Set up default values for extended filters
		* function setDefaultExtFilter(&$fld, $so1, $sv1, $sc, $so2, $sv2)
		* Parameters:
		* $fld - Field object
		* $so1 - Default search operator 1
		* $sv1 - Default ext filter value 1
		* $sc - Default search condition (if operator 2 is enabled)
		* $so2 - Default search operator 2 (if operator 2 is enabled)
		* $sv2 - Default ext filter value 2 (if operator 2 is enabled)
		*/
		// Field nomorinduk

		$this->setDefaultExtFilter($this->nomorinduk, "LIKE", NULL, 'AND', "=", NULL);
		if (!$this->SearchCommand)
			$this->applyDefaultExtFilter($this->nomorinduk);

		// Field siswa_nama
		$this->setDefaultExtFilter($this->siswa_nama, "LIKE", NULL, 'AND', "=", NULL);
		if (!$this->SearchCommand)
			$this->applyDefaultExtFilter($this->siswa_nama);

		/**
		* Set up default values for popup filters
		*/
	}

	// Check if filter applied
	protected function checkFilter()
	{

		// Check tahun_ajaran extended filter
		if ($this->nonTextFilterApplied($this->tahun_ajaran))
			return TRUE;

		// Check sekolah_nama extended filter
		if ($this->nonTextFilterApplied($this->sekolah_nama))
			return TRUE;

		// Check kelas_nama extended filter
		if ($this->nonTextFilterApplied($this->kelas_nama))
			return TRUE;

		// Check nomorinduk text filter
		if ($this->textFilterApplied($this->nomorinduk))
			return TRUE;

		// Check siswa_nama text filter
		if ($this->textFilterApplied($this->siswa_nama))
			return TRUE;

		// Check iuran_nama extended filter
		if ($this->nonTextFilterApplied($this->iuran_nama))
			return TRUE;
		return FALSE;
	}

	// Show list of filters
	public function showFilterList($showDate = FALSE)
	{
		global $ReportLanguage;

		// Initialize
		$filterList = "";
		$captionClass = $this->isExport("email") ? "ew-filter-caption-email" : "ew-filter-caption";
		$captionSuffix = $this->isExport("email") ? ": " : "";

		// Field tahun_ajaran
		$extWrk = "";
		$wrk = "";
		$this->buildDropDownFilter($this->tahun_ajaran, $extWrk, $this->tahun_ajaran->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		elseif ($wrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$wrk</span>";
		if ($filter <> "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->tahun_ajaran->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field sekolah_nama
		$extWrk = "";
		$wrk = "";
		$this->buildDropDownFilter($this->sekolah_nama, $extWrk, $this->sekolah_nama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		elseif ($wrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$wrk</span>";
		if ($filter <> "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->sekolah_nama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field kelas_nama
		$extWrk = "";
		$wrk = "";
		$this->buildDropDownFilter($this->kelas_nama, $extWrk, $this->kelas_nama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		elseif ($wrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$wrk</span>";
		if ($filter <> "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->kelas_nama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field nomorinduk
		$extWrk = "";
		$wrk = "";
		$this->buildExtendedFilter($this->nomorinduk, $extWrk);
		$filter = "";
		if ($extWrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		elseif ($wrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$wrk</span>";
		if ($filter <> "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->nomorinduk->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field siswa_nama
		$extWrk = "";
		$wrk = "";
		$this->buildExtendedFilter($this->siswa_nama, $extWrk);
		$filter = "";
		if ($extWrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		elseif ($wrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$wrk</span>";
		if ($filter <> "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->siswa_nama->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field iuran_nama
		$extWrk = "";
		$wrk = "";
		$this->buildDropDownFilter($this->iuran_nama, $extWrk, $this->iuran_nama->AdvancedSearch->SearchOperator);
		$filter = "";
		if ($extWrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		elseif ($wrk <> "")
			$filter .= "<span class=\"ew-filter-value\">$wrk</span>";
		if ($filter <> "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->iuran_nama->caption() . "</span>" . $captionSuffix . $filter . "</div>";
		$divdataclass = "";

		// Show Filters
		if ($filterList <> "" || $showDate) {
			$message = "<div" . $divdataclass . "><div id=\"ew-filter-list\" class=\"alert alert-info d-table\">";
			if ($showDate)
				$message .= "<div id=\"ew-current-date\">" . $ReportLanguage->phrase("ReportGeneratedDate") . FormatDateTime(date("Y-m-d H:i:s"), 1) . "</div>";
			if ($filterList <> "")
				$message .= "<div id=\"ew-current-filters\">" . $ReportLanguage->phrase("CurrentFilters") . "</div>" . $filterList;
			$message .= "</div></div>";
			$this->Message_Showing($message, "");
			Write($message);
		}
	}

	// Get list of filters
	public function getFilterList()
	{

		// Initialize
		$filterList = "";

		// Field tahun_ajaran
		$wrk = "";
		$wrk = ($this->tahun_ajaran->DropDownValue <> INIT_VALUE) ? $this->tahun_ajaran->DropDownValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk <> "")
			$wrk = "\"x_tahun_ajaran\":\"" . JsEncode($wrk) . "\"";
		if ($wrk <> "") {
			if ($filterList <> "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field sekolah_nama
		$wrk = "";
		$wrk = ($this->sekolah_nama->DropDownValue <> INIT_VALUE) ? $this->sekolah_nama->DropDownValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk <> "")
			$wrk = "\"x_sekolah_nama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk <> "") {
			if ($filterList <> "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field kelas_nama
		$wrk = "";
		$wrk = ($this->kelas_nama->DropDownValue <> INIT_VALUE) ? $this->kelas_nama->DropDownValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk <> "")
			$wrk = "\"x_kelas_nama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk <> "") {
			if ($filterList <> "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field nomorinduk
		$wrk = "";
		if ($this->nomorinduk->AdvancedSearch->SearchValue <> "" || $this->nomorinduk->AdvancedSearch->SearchValue2 <> "") {
			$wrk = "\"x_nomorinduk\":\"" . JsEncode($this->nomorinduk->AdvancedSearch->SearchValue) . "\"," .
				"\"z_nomorinduk\":\"" . JsEncode($this->nomorinduk->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_nomorinduk\":\"" . JsEncode($this->nomorinduk->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_nomorinduk\":\"" . JsEncode($this->nomorinduk->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_nomorinduk\":\"" . JsEncode($this->nomorinduk->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk <> "") {
			if ($filterList <> "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field siswa_nama
		$wrk = "";
		if ($this->siswa_nama->AdvancedSearch->SearchValue <> "" || $this->siswa_nama->AdvancedSearch->SearchValue2 <> "") {
			$wrk = "\"x_siswa_nama\":\"" . JsEncode($this->siswa_nama->AdvancedSearch->SearchValue) . "\"," .
				"\"z_siswa_nama\":\"" . JsEncode($this->siswa_nama->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_siswa_nama\":\"" . JsEncode($this->siswa_nama->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_siswa_nama\":\"" . JsEncode($this->siswa_nama->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_siswa_nama\":\"" . JsEncode($this->siswa_nama->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk <> "") {
			if ($filterList <> "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field iuran_nama
		$wrk = "";
		$wrk = ($this->iuran_nama->DropDownValue <> INIT_VALUE) ? $this->iuran_nama->DropDownValue : "";
		if (is_array($wrk))
			$wrk = implode("||", $wrk);
		if ($wrk <> "")
			$wrk = "\"x_iuran_nama\":\"" . JsEncode($wrk) . "\"";
		if ($wrk <> "") {
			if ($filterList <> "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Return filter list in json
		if ($filterList <> "")
			return "{\"data\":{" . $filterList . "}}";
		else
			return "null";
	}

	// Restore list of filters
	protected function restoreFilterList()
	{

		// Return if not reset filter
		if (Post("cmd", "") <> "resetfilter")
			return FALSE;
		$filter = json_decode(Post("filter", ""), TRUE);
		return $this->setupFilterList($filter);
	}

	// Setup list of filters
	protected function setupFilterList($filter)
	{
		if (!is_array($filter))
			return FALSE;

		// Field tahun_ajaran
		$restoreFilter = FALSE;
		if (array_key_exists("x_tahun_ajaran", $filter)) {
			$wrk = $filter["x_tahun_ajaran"];
			if (strpos($wrk, "||") !== FALSE)
				$wrk = explode("||", $wrk);
			$this->setSessionDropDownValue($wrk, @$filter["z_tahun_ajaran"], "tahun_ajaran");
			$restoreFilter = TRUE;
		}
		if (!$restoreFilter) { // Clear filter
			$this->setSessionDropDownValue(INIT_VALUE, "", "tahun_ajaran");
		}

		// Field sekolah_nama
		$restoreFilter = FALSE;
		if (array_key_exists("x_sekolah_nama", $filter)) {
			$wrk = $filter["x_sekolah_nama"];
			if (strpos($wrk, "||") !== FALSE)
				$wrk = explode("||", $wrk);
			$this->setSessionDropDownValue($wrk, @$filter["z_sekolah_nama"], "sekolah_nama");
			$restoreFilter = TRUE;
		}
		if (!$restoreFilter) { // Clear filter
			$this->setSessionDropDownValue(INIT_VALUE, "", "sekolah_nama");
		}

		// Field kelas_nama
		$restoreFilter = FALSE;
		if (array_key_exists("x_kelas_nama", $filter)) {
			$wrk = $filter["x_kelas_nama"];
			if (strpos($wrk, "||") !== FALSE)
				$wrk = explode("||", $wrk);
			$this->setSessionDropDownValue($wrk, @$filter["z_kelas_nama"], "kelas_nama");
			$restoreFilter = TRUE;
		}
		if (!$restoreFilter) { // Clear filter
			$this->setSessionDropDownValue(INIT_VALUE, "", "kelas_nama");
		}

		// Field nomorinduk
		$restoreFilter = FALSE;
		if (array_key_exists("x_nomorinduk", $filter) || array_key_exists("z_nomorinduk", $filter) ||
			array_key_exists("v_nomorinduk", $filter) ||
			array_key_exists("y_nomorinduk", $filter) || array_key_exists("w_nomorinduk", $filter)) {
			$this->setSessionFilterValues(@$filter["x_nomorinduk"], @$filter["z_nomorinduk"], @$filter["v_nomorinduk"], @$filter["y_nomorinduk"], @$filter["w_nomorinduk"], "nomorinduk");
			$restoreFilter = TRUE;
		}
		if (!$restoreFilter) { // Clear filter
			$this->setSessionFilterValues("", "=", "AND", "", "=", "nomorinduk");
		}

		// Field siswa_nama
		$restoreFilter = FALSE;
		if (array_key_exists("x_siswa_nama", $filter) || array_key_exists("z_siswa_nama", $filter) ||
			array_key_exists("v_siswa_nama", $filter) ||
			array_key_exists("y_siswa_nama", $filter) || array_key_exists("w_siswa_nama", $filter)) {
			$this->setSessionFilterValues(@$filter["x_siswa_nama"], @$filter["z_siswa_nama"], @$filter["v_siswa_nama"], @$filter["y_siswa_nama"], @$filter["w_siswa_nama"], "siswa_nama");
			$restoreFilter = TRUE;
		}
		if (!$restoreFilter) { // Clear filter
			$this->setSessionFilterValues("", "=", "AND", "", "=", "siswa_nama");
		}

		// Field iuran_nama
		$restoreFilter = FALSE;
		if (array_key_exists("x_iuran_nama", $filter)) {
			$wrk = $filter["x_iuran_nama"];
			if (strpos($wrk, "||") !== FALSE)
				$wrk = explode("||", $wrk);
			$this->setSessionDropDownValue($wrk, @$filter["z_iuran_nama"], "iuran_nama");
			$restoreFilter = TRUE;
		}
		if (!$restoreFilter) { // Clear filter
			$this->setSessionDropDownValue(INIT_VALUE, "", "iuran_nama");
		}
		return TRUE;
	}

	// Setup lookup options
	public function setupLookupOptions($fld)
	{
		if ($fld->Lookup !== NULL && $fld->Lookup->Options === NULL) {

			// No need to check any more
			$fld->Lookup->Options = [];

			// Set up lookup SQL
			switch ($fld->FieldVar) {
				default:
					$lookupFilter = "";
					break;
			}

			// Always call to Lookup->getSql so that user can setup Lookup->Options in Lookup_Selecting server event
			$sql = $fld->Lookup->getSql(FALSE, "", $lookupFilter, $this);

			// Set up lookup cache
			if ($fld->UseLookupCache && $sql <> "" && count($fld->Lookup->Options) == 0) {
				$conn = &$this->getConnection();
				$totalCnt = $this->getRecordCount($sql);
				if ($totalCnt > $fld->LookupCacheCount) // Total count > cache count, do not cache
					return;
				$rs = $conn->execute($sql);
				$ar = [];
				while ($rs && !$rs->EOF) {
					$row = &$rs->fields;

					// Render lookup
					$this->RowType == ROWTYPE_VIEW;
					$fn = $fld->Lookup->RenderViewFunc;
					$render = method_exists($this, $fn);

					// Format the field values
					$fld->setDbValue($row[1]);
					if ($render) {
						$this->$fn();
						$row[1] = $fld->ViewValue;
						$row['df'] = $row[1];
					} elseif ($fld->isEncrypt()) {
						$row[1] = $fld->CurrentValue;
					}
					$ar[strval($row[0])] = $row;
					$rs->moveNext();
				}
				if ($rs)
					$rs->close();
				$fld->Lookup->Options = $ar;
			}
		}
	}

	// Return popup filter
	protected function getPopupFilter()
	{
		$wrk = "";
		if ($this->DrillDown)
			return "";
		return $wrk;
	}

	// Page Load event
	function Page_Load() {

		//echo "Page Load";
	}

	// Page Unload event
	function Page_Unload() {

		//echo "Page Unload";
	}

	// Message Showing event
	// $type = ''|'success'|'failure'|'warning'
	function Message_Showing(&$msg, $type) {
		if ($type == 'success') {

			//$msg = "your success message";
		} elseif ($type == 'failure') {

			//$msg = "your failure message";
		} elseif ($type == 'warning') {

			//$msg = "your warning message";
		} else {

			//$msg = "your message";
		}
	}

	// Page Render event
	function Page_Render() {

		//echo "Page Render";
	}

	// Page Data Rendering event
	function Page_DataRendering(&$header) {

		// Example:
		//$header = "your header";
		// sembunyikan kolom

		$this->tahun_ajaran->Visible = false;
		$this->sekolah_nama->Visible = false;
		$this->kelas_nama->Visible = false;
		$this->nomorinduk->Visible = false;
		$this->siswa_nama->Visible = false;
		$this->iuran_id->Visible = false;
	}

	// Page Data Rendered event
	function Page_DataRendered(&$footer) {

		// Example:
		//$footer = "your footer";

	}

	// Form Custom Validate event
	function Form_CustomValidate(&$CustomError) {

		// Return error message in CustomError
		return TRUE;
	}
}
?>