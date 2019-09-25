<?php
namespace PHPMaker2019\p_pembayaran3_1;

/**
 * Page class
 */
class t103_daf_kelas_siswa_iuran_view extends t103_daf_kelas_siswa_iuran
{

	// Page ID
	public $PageID = "view";

	// Project ID
	public $ProjectID = "{D97AB052-DD0F-4E43-8766-C499FD89B1B8}";

	// Table name
	public $TableName = 't103_daf_kelas_siswa_iuran';

	// Page object name
	public $PageObjName = "t103_daf_kelas_siswa_iuran_view";

	// Page URLs
	public $AddUrl;
	public $EditUrl;
	public $CopyUrl;
	public $DeleteUrl;
	public $ViewUrl;
	public $ListUrl;
	public $CancelUrl;

	// Export URLs
	public $ExportPrintUrl;
	public $ExportHtmlUrl;
	public $ExportExcelUrl;
	public $ExportWordUrl;
	public $ExportXmlUrl;
	public $ExportCsvUrl;
	public $ExportPdfUrl;

	// Custom export
	public $ExportExcelCustom = FALSE;
	public $ExportWordCustom = FALSE;
	public $ExportPdfCustom = FALSE;
	public $ExportEmailCustom = FALSE;

	// Update URLs
	public $InlineAddUrl;
	public $InlineCopyUrl;
	public $InlineEditUrl;
	public $GridAddUrl;
	public $GridEditUrl;
	public $MultiDeleteUrl;
	public $MultiUpdateUrl;

	// Audit Trail
	public $AuditTrailOnAdd = TRUE;
	public $AuditTrailOnEdit = TRUE;
	public $AuditTrailOnDelete = TRUE;
	public $AuditTrailOnView = FALSE;
	public $AuditTrailOnViewData = FALSE;
	public $AuditTrailOnSearch = FALSE;

	// Page headings
	public $Heading = "";
	public $Subheading = "";
	public $PageHeader;
	public $PageFooter;

	// Token
	public $Token = "";
	public $TokenTimeout = 0;
	public $CheckToken = CHECK_TOKEN;

	// Messages
	private $_message = "";
	private $_failureMessage = "";
	private $_successMessage = "";
	private $_warningMessage = "";

	// Page URL
	private $_pageUrl = "";

	// Page heading
	public function pageHeading()
	{
		global $Language;
		if ($this->Heading <> "")
			return $this->Heading;
		if (method_exists($this, "tableCaption"))
			return $this->tableCaption();
		return "";
	}

	// Page subheading
	public function pageSubheading()
	{
		global $Language;
		if ($this->Subheading <> "")
			return $this->Subheading;
		if ($this->TableName)
			return $Language->phrase($this->PageID);
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
		if ($this->_pageUrl == "") {
			$this->_pageUrl = CurrentPageName() . "?";
			if ($this->UseTokenInUrl)
				$this->_pageUrl .= "t=" . $this->TableVar . "&"; // Add page token
		}
		return $this->_pageUrl;
	}

	// Get message
	public function getMessage()
	{
		return isset($_SESSION[SESSION_MESSAGE]) ? $_SESSION[SESSION_MESSAGE] : $this->_message;
	}

	// Set message
	public function setMessage($v)
	{
		AddMessage($this->_message, $v);
		$_SESSION[SESSION_MESSAGE] = $this->_message;
	}

	// Get failure message
	public function getFailureMessage()
	{
		return isset($_SESSION[SESSION_FAILURE_MESSAGE]) ? $_SESSION[SESSION_FAILURE_MESSAGE] : $this->_failureMessage;
	}

	// Set failure message
	public function setFailureMessage($v)
	{
		AddMessage($this->_failureMessage, $v);
		$_SESSION[SESSION_FAILURE_MESSAGE] = $this->_failureMessage;
	}

	// Get success message
	public function getSuccessMessage()
	{
		return isset($_SESSION[SESSION_SUCCESS_MESSAGE]) ? $_SESSION[SESSION_SUCCESS_MESSAGE] : $this->_successMessage;
	}

	// Set success message
	public function setSuccessMessage($v)
	{
		AddMessage($this->_successMessage, $v);
		$_SESSION[SESSION_SUCCESS_MESSAGE] = $this->_successMessage;
	}

	// Get warning message
	public function getWarningMessage()
	{
		return isset($_SESSION[SESSION_WARNING_MESSAGE]) ? $_SESSION[SESSION_WARNING_MESSAGE] : $this->_warningMessage;
	}

	// Set warning message
	public function setWarningMessage($v)
	{
		AddMessage($this->_warningMessage, $v);
		$_SESSION[SESSION_WARNING_MESSAGE] = $this->_warningMessage;
	}

	// Clear message
	public function clearMessage()
	{
		$this->_message = "";
		$_SESSION[SESSION_MESSAGE] = "";
	}

	// Clear failure message
	public function clearFailureMessage()
	{
		$this->_failureMessage = "";
		$_SESSION[SESSION_FAILURE_MESSAGE] = "";
	}

	// Clear success message
	public function clearSuccessMessage()
	{
		$this->_successMessage = "";
		$_SESSION[SESSION_SUCCESS_MESSAGE] = "";
	}

	// Clear warning message
	public function clearWarningMessage()
	{
		$this->_warningMessage = "";
		$_SESSION[SESSION_WARNING_MESSAGE] = "";
	}

	// Clear messages
	public function clearMessages()
	{
		$this->clearMessage();
		$this->clearFailureMessage();
		$this->clearSuccessMessage();
		$this->clearWarningMessage();
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

	// Get message as array
	public function getMessages()
	{
		$ar = array();

		// Message
		$message = $this->getMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($message, "");

		if ($message <> "") { // Message in Session, display
			$ar["message"] = $message;
			$_SESSION[SESSION_MESSAGE] = ""; // Clear message in Session
		}

		// Warning message
		$warningMessage = $this->getWarningMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($warningMessage, "warning");

		if ($warningMessage <> "") { // Message in Session, display
			$ar["warningMessage"] = $warningMessage;
			$_SESSION[SESSION_WARNING_MESSAGE] = ""; // Clear message in Session
		}

		// Success message
		$successMessage = $this->getSuccessMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($successMessage, "success");

		if ($successMessage <> "") { // Message in Session, display
			$ar["successMessage"] = $successMessage;
			$_SESSION[SESSION_SUCCESS_MESSAGE] = ""; // Clear message in Session
		}

		// Failure message
		$failureMessage = $this->getFailureMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($failureMessage, "failure");

		if ($failureMessage <> "") { // Message in Session, display
			$ar["failureMessage"] = $failureMessage;
			$_SESSION[SESSION_FAILURE_MESSAGE] = ""; // Clear message in Session
		}
		return $ar;
	}

	// Show Page Header
	public function showPageHeader()
	{
		$header = $this->PageHeader;
		$this->Page_DataRendering($header);
		if ($header <> "") { // Header exists, display
			echo '<p id="ew-page-header">' . $header . '</p>';
		}
	}

	// Show Page Footer
	public function showPageFooter()
	{
		$footer = $this->PageFooter;
		$this->Page_DataRendered($footer);
		if ($footer <> "") { // Footer exists, display
			echo '<p id="ew-page-footer">' . $footer . '</p>';
		}
	}

	// Validate page request
	protected function isPageRequest()
	{
		global $CurrentForm;
		if ($this->UseTokenInUrl) {
			if ($CurrentForm)
				return ($this->TableVar == $CurrentForm->getValue("t"));
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
		global $Language, $COMPOSITE_KEY_SEPARATOR;
		global $UserTable, $UserTableConn;

		// Initialize
		$GLOBALS["Page"] = &$this;
		$this->TokenTimeout = SessionTimeoutTime();

		// Language object
		if (!isset($Language))
			$Language = new Language();

		// Parent constuctor
		parent::__construct();

		// Table object (t103_daf_kelas_siswa_iuran)
		if (!isset($GLOBALS["t103_daf_kelas_siswa_iuran"]) || get_class($GLOBALS["t103_daf_kelas_siswa_iuran"]) == PROJECT_NAMESPACE . "t103_daf_kelas_siswa_iuran") {
			$GLOBALS["t103_daf_kelas_siswa_iuran"] = &$this;
			$GLOBALS["Table"] = &$GLOBALS["t103_daf_kelas_siswa_iuran"];
		}
		$keyUrl = "";
		if (Get("id") !== NULL) {
			$this->RecKey["id"] = Get("id");
			$keyUrl .= "&amp;id=" . urlencode($this->RecKey["id"]);
		}
		$this->ExportPrintUrl = $this->pageUrl() . "export=print" . $keyUrl;
		$this->ExportHtmlUrl = $this->pageUrl() . "export=html" . $keyUrl;
		$this->ExportExcelUrl = $this->pageUrl() . "export=excel" . $keyUrl;
		$this->ExportWordUrl = $this->pageUrl() . "export=word" . $keyUrl;
		$this->ExportXmlUrl = $this->pageUrl() . "export=xml" . $keyUrl;
		$this->ExportCsvUrl = $this->pageUrl() . "export=csv" . $keyUrl;
		$this->ExportPdfUrl = $this->pageUrl() . "export=pdf" . $keyUrl;
		$this->CancelUrl = $this->pageUrl() . "action=cancel";

		// Table object (t301_employees)
		if (!isset($GLOBALS['t301_employees']))
			$GLOBALS['t301_employees'] = new t301_employees();

		// Table object (v102_daf_kelas_siswa)
		if (!isset($GLOBALS['v102_daf_kelas_siswa']))
			$GLOBALS['v102_daf_kelas_siswa'] = new v102_daf_kelas_siswa();

		// Page ID
		if (!defined(PROJECT_NAMESPACE . "PAGE_ID"))
			define(PROJECT_NAMESPACE . "PAGE_ID", 'view');

		// Table name (for backward compatibility)
		if (!defined(PROJECT_NAMESPACE . "TABLE_NAME"))
			define(PROJECT_NAMESPACE . "TABLE_NAME", 't103_daf_kelas_siswa_iuran');

		// Start timer
		if (!isset($GLOBALS["DebugTimer"]))
			$GLOBALS["DebugTimer"] = new Timer();

		// Debug message
		LoadDebugMessage();

		// Open connection
		if (!isset($GLOBALS["Conn"]))
			$GLOBALS["Conn"] = &$this->getConnection();

		// User table object (t301_employees)
		if (!isset($UserTable)) {
			$UserTable = new t301_employees();
			$UserTableConn = Conn($UserTable->Dbid);
		}

		// Export options
		$this->ExportOptions = new ListOptions();
		$this->ExportOptions->Tag = "div";
		$this->ExportOptions->TagClassName = "ew-export-option";

		// Other options
		if (!$this->OtherOptions)
			$this->OtherOptions = new ListOptionsArray();
		$this->OtherOptions["action"] = new ListOptions();
		$this->OtherOptions["action"]->Tag = "div";
		$this->OtherOptions["action"]->TagClassName = "ew-action-option";
		$this->OtherOptions["detail"] = new ListOptions();
		$this->OtherOptions["detail"]->Tag = "div";
		$this->OtherOptions["detail"]->TagClassName = "ew-detail-option";
	}

	// Terminate page
	public function terminate($url = "")
	{
		global $ExportFileName, $TempImages;

		// Page Unload event
		$this->Page_Unload();

		// Global Page Unloaded event (in userfn*.php)
		Page_Unloaded();

		// Export
		global $EXPORT, $t103_daf_kelas_siswa_iuran;
		if ($this->CustomExport && $this->CustomExport == $this->Export && array_key_exists($this->CustomExport, $EXPORT)) {
				$content = ob_get_contents();
			if ($ExportFileName == "")
				$ExportFileName = $this->TableVar;
			$class = PROJECT_NAMESPACE . $EXPORT[$this->CustomExport];
			if (class_exists($class)) {
				$doc = new $class($t103_daf_kelas_siswa_iuran);
				$doc->Text = @$content;
				if ($this->isExport("email"))
					echo $this->exportEmail($doc->Text);
				else
					$doc->export();
				DeleteTempImages(); // Delete temp images
				exit();
			}
		}
		if (!IsApi())
			$this->Page_Redirecting($url);

		// Close connection
		CloseConnections();

		// Return for API
		if (IsApi()) {
			$res = $url === TRUE;
			if (!$res) // Show error
				WriteJson(array_merge(["success" => FALSE], $this->getMessages()));
			return;
		}

		// Go to URL if specified
		if ($url <> "") {
			if (!DEBUG_ENABLED && ob_get_length())
				ob_end_clean();

			// Handle modal response
			if ($this->IsModal) { // Show as modal
				$row = array("url" => $url, "modal" => "1");
				$pageName = GetPageName($url);
				if ($pageName != $this->getListUrl()) { // Not List page
					$row["caption"] = $this->getModalCaption($pageName);
					if ($pageName == "t103_daf_kelas_siswa_iuranview.php")
						$row["view"] = "1";
				} else { // List page should not be shown as modal => error
					$row["error"] = $this->getFailureMessage();
					$this->clearFailureMessage();
				}
				WriteJson($row);
			} else {
				SaveDebugMessage();
				AddHeader("Location", $url);
			}
		}
		exit();
	}

	// Get records from recordset
	protected function getRecordsFromRecordset($rs, $current = FALSE)
	{
		$rows = array();
		if (is_object($rs)) { // Recordset
			while ($rs && !$rs->EOF) {
				$this->loadRowValues($rs); // Set up DbValue/CurrentValue
				$row = $this->getRecordFromArray($rs->fields);
				if ($current)
					return $row;
				else
					$rows[] = $row;
				$rs->moveNext();
			}
		} elseif (is_array($rs)) {
			foreach ($rs as $ar) {
				$row = $this->getRecordFromArray($ar);
				if ($current)
					return $row;
				else
					$rows[] = $row;
			}
		}
		return $rows;
	}

	// Get record from array
	protected function getRecordFromArray($ar)
	{
		$row = array();
		if (is_array($ar)) {
			foreach ($ar as $fldname => $val) {
				if (array_key_exists($fldname, $this->fields) && ($this->fields[$fldname]->Visible || $this->fields[$fldname]->IsPrimaryKey)) { // Primary key or Visible
					$fld = &$this->fields[$fldname];
					if ($fld->HtmlTag == "FILE") { // Upload field
						if (EmptyValue($val)) {
							$row[$fldname] = NULL;
						} else {
							if ($fld->DataType == DATATYPE_BLOB) {

								//$url = FullUrl($fld->TableVar . "/" . API_FILE_ACTION . "/" . $fld->Param . "/" . rawurlencode($this->getRecordKeyValue($ar))); // URL rewrite format
								$url = FullUrl(GetPageName(API_URL) . "?" . API_OBJECT_NAME . "=" . $fld->TableVar . "&" . API_ACTION_NAME . "=" . API_FILE_ACTION . "&" . API_FIELD_NAME . "=" . $fld->Param . "&" . API_KEY_NAME . "=" . rawurlencode($this->getRecordKeyValue($ar))); // Query string format
								$row[$fldname] = ["mimeType" => ContentType($val), "url" => $url];
							} elseif (!$fld->UploadMultiple || !ContainsString($val, MULTIPLE_UPLOAD_SEPARATOR)) { // Single file
								$row[$fldname] = ["mimeType" => MimeContentType($val), "url" => FullUrl($fld->hrefPath() . $val)];
							} else { // Multiple files
								$files = explode(MULTIPLE_UPLOAD_SEPARATOR, $val);
								$ar = [];
								foreach ($files as $file) {
									if (!EmptyValue($file))
										$ar[] = ["type" => MimeContentType($file), "url" => FullUrl($fld->hrefPath() . $file)];
								}
								$row[$fldname] = $ar;
							}
						}
					} else {
						$row[$fldname] = $val;
					}
				}
			}
		}
		return $row;
	}

	// Get record key value from array
	protected function getRecordKeyValue($ar)
	{
		global $COMPOSITE_KEY_SEPARATOR;
		$key = "";
		if (is_array($ar)) {
			$key .= @$ar['id'];
		}
		return $key;
	}

	/**
	 * Hide fields for add/edit
	 *
	 * @return void
	 */
	protected function hideFieldsForAddEdit()
	{
		if ($this->isAdd() || $this->isCopy() || $this->isGridAdd())
			$this->id->Visible = FALSE;
	}
	public $ExportOptions; // Export options
	public $OtherOptions; // Other options
	public $DisplayRecs = 1;
	public $DbMasterFilter;
	public $DbDetailFilter;
	public $StartRec;
	public $StopRec;
	public $TotalRecs = 0;
	public $RecRange = 10;
	public $RecCnt;
	public $RecKey = array();
	public $IsModal = FALSE;

	//
	// Page run
	//

	public function run()
	{
		global $ExportType, $CustomExportType, $ExportFileName, $UserProfile, $Language, $Security, $RequestSecurity, $CurrentForm,
			$SkipHeaderFooter, $EXPORT;

		// Init Session data for API request if token found
		if (IsApi() && session_status() !== PHP_SESSION_ACTIVE) {
			$func = PROJECT_NAMESPACE . CHECK_TOKEN_FUNC;
			if (is_callable($func) && Param(TOKEN_NAME) !== NULL && $func(Param(TOKEN_NAME), SessionTimeoutTime()))
				session_start();
		}

		// Is modal
		$this->IsModal = (Param("modal") == "1");

		// User profile
		$UserProfile = new UserProfile();

		// Security
		$Security = new AdvancedSecurity();
		$validRequest = FALSE;

		// Check security for API request
		If (IsApi()) {

			// Check token first
			$func = PROJECT_NAMESPACE . CHECK_TOKEN_FUNC;
			if (is_callable($func) && Post(TOKEN_NAME) !== NULL)
				$validRequest = $func(Post(TOKEN_NAME), SessionTimeoutTime());
			elseif (is_array($RequestSecurity) && @$RequestSecurity["username"] <> "") // Login user for API request
				$Security->loginUser(@$RequestSecurity["username"], @$RequestSecurity["userid"], @$RequestSecurity["parentuserid"], @$RequestSecurity["userlevelid"]);
		}
		if (!$validRequest) {
			if (!$Security->isLoggedIn())
				$Security->autoLogin();
			if ($Security->isLoggedIn())
				$Security->TablePermission_Loading();
			$Security->loadCurrentUserLevel($this->ProjectID . $this->TableName);
			if ($Security->isLoggedIn())
				$Security->TablePermission_Loaded();
			if (!$Security->canView()) {
				$Security->saveLastUrl();
				$this->setFailureMessage(DeniedMessage()); // Set no permission
				if ($Security->canList())
					$this->terminate(GetUrl("t103_daf_kelas_siswa_iuranlist.php"));
				else
					$this->terminate(GetUrl("login.php"));
				return;
			}
			if ($Security->isLoggedIn()) {
				$Security->UserID_Loading();
				$Security->loadUserID();
				$Security->UserID_Loaded();
			}
		}
		$this->CurrentAction = Param("action"); // Set up current action
		$this->id->Visible = FALSE;
		$this->daf_kelas_siswa_id->Visible = FALSE;
		$this->iuran_id->setVisibility();
		$this->Jumlah->setVisibility();
		$this->byr01->setVisibility();
		$this->jml01->setVisibility();
		$this->tgl01->setVisibility();
		$this->byr02->setVisibility();
		$this->jml02->setVisibility();
		$this->tgl02->setVisibility();
		$this->byr03->setVisibility();
		$this->jml03->setVisibility();
		$this->tgl03->setVisibility();
		$this->byr04->setVisibility();
		$this->jml04->setVisibility();
		$this->tgl04->setVisibility();
		$this->byr05->setVisibility();
		$this->jml05->setVisibility();
		$this->tgl05->setVisibility();
		$this->byr06->setVisibility();
		$this->jml06->setVisibility();
		$this->tgl06->setVisibility();
		$this->byr07->setVisibility();
		$this->jml07->setVisibility();
		$this->tgl07->setVisibility();
		$this->byr08->setVisibility();
		$this->jml08->setVisibility();
		$this->tgl08->setVisibility();
		$this->byr09->setVisibility();
		$this->jml09->setVisibility();
		$this->tgl09->setVisibility();
		$this->byr10->setVisibility();
		$this->jml10->setVisibility();
		$this->tgl10->setVisibility();
		$this->byr11->setVisibility();
		$this->jml11->setVisibility();
		$this->tgl11->setVisibility();
		$this->byr12->setVisibility();
		$this->jml12->setVisibility();
		$this->tgl12->setVisibility();
		$this->hideFieldsForAddEdit();

		// Do not use lookup cache
		$this->setUseLookupCache(FALSE);

		// Global Page Loading event (in userfn*.php)
		Page_Loading();

		// Page Load event
		$this->Page_Load();

		// Check token
		if (!$this->validPost()) {
			Write($Language->phrase("InvalidPostRequest"));
			$this->terminate();
		}

		// Create Token
		$this->createToken();

		// Set up lookup cache
		$this->setupLookupOptions($this->iuran_id);

		// Check modal
		if ($this->IsModal)
			$SkipHeaderFooter = TRUE;
		$returnUrl = "";
		$matchRecord = FALSE;

		// Set up master/detail parameters
		$this->setupMasterParms();
		if ($this->isPageRequest()) { // Validate request
			if (Get("id") !== NULL) {
				$this->id->setQueryStringValue(Get("id"));
				$this->RecKey["id"] = $this->id->QueryStringValue;
			} elseif (IsApi() && Key(0) != NULL) {
				$this->id->setQueryStringValue(Key(0));
				$this->RecKey["id"] = $this->id->QueryStringValue;
			} elseif (Post("id") !== NULL) {
				$this->id->setFormValue(Post("id"));
				$this->RecKey["id"] = $this->id->FormValue;
			} elseif (IsApi() && Route(2) != NULL) {
				$this->id->setFormValue(Route(2));
				$this->RecKey["id"] = $this->id->FormValue;
			} else {
				$returnUrl = "t103_daf_kelas_siswa_iuranlist.php"; // Return to list
			}

			// Get action
			$this->CurrentAction = "show"; // Display
			switch ($this->CurrentAction) {
				case "show": // Get a record to display

					// Load record based on key
					if (IsApi()) {
						$filter = $this->getRecordFilter();
						$this->CurrentFilter = $filter;
						$sql = $this->getCurrentSql();
						$conn = &$this->getConnection();
						$this->Recordset = LoadRecordset($sql, $conn);
						$res = $this->Recordset && !$this->Recordset->EOF;
					} else {
						$res = $this->loadRow();
					}
					if (!$res) { // Load record based on key
						if ($this->getSuccessMessage() == "" && $this->getFailureMessage() == "")
							$this->setFailureMessage($Language->phrase("NoRecord")); // Set no record message
						$returnUrl = "t103_daf_kelas_siswa_iuranlist.php"; // No matching record, return to list
					}
			}
		} else {
			$returnUrl = "t103_daf_kelas_siswa_iuranlist.php"; // Not page request, return to list
		}
		if ($returnUrl <> "") {
			$this->terminate($returnUrl);
			return;
		}

		// Set up Breadcrumb
		if (!$this->isExport())
			$this->setupBreadcrumb();

		// Render row
		$this->RowType = ROWTYPE_VIEW;
		$this->resetAttributes();
		$this->renderRow();

		// Normal return
		if (IsApi()) {
			$rows = $this->getRecordsFromRecordset($this->Recordset, TRUE); // Get current record only
			$this->Recordset->close();
			WriteJson(["success" => TRUE, $this->TableVar => $rows]);
			$this->terminate(TRUE);
		}
	}

	// Set up other options
	protected function setupOtherOptions()
	{
		global $Language, $Security;
		$options = &$this->OtherOptions;
		$option = &$options["action"];

		// Add
		$item = &$option->add("add");
		$addcaption = HtmlTitle($Language->phrase("ViewPageAddLink"));
		if ($this->IsModal) // Modal
			$item->Body = "<a class=\"ew-action ew-add\" title=\"" . $addcaption . "\" data-caption=\"" . $addcaption . "\" href=\"javascript:void(0);\" onclick=\"ew.modalDialogShow({lnk:this,url:'" . HtmlEncode($this->AddUrl) . "'});\">" . $Language->phrase("ViewPageAddLink") . "</a>";
		else
			$item->Body = "<a class=\"ew-action ew-add\" title=\"" . $addcaption . "\" data-caption=\"" . $addcaption . "\" href=\"" . HtmlEncode($this->AddUrl) . "\">" . $Language->phrase("ViewPageAddLink") . "</a>";
		$item->Visible = ($this->AddUrl <> "" && $Security->canAdd());

		// Edit
		$item = &$option->add("edit");
		$editcaption = HtmlTitle($Language->phrase("ViewPageEditLink"));
		if ($this->IsModal) // Modal
			$item->Body = "<a class=\"ew-action ew-edit\" title=\"" . $editcaption . "\" data-caption=\"" . $editcaption . "\" href=\"javascript:void(0);\" onclick=\"ew.modalDialogShow({lnk:this,url:'" . HtmlEncode($this->EditUrl) . "'});\">" . $Language->phrase("ViewPageEditLink") . "</a>";
		else
			$item->Body = "<a class=\"ew-action ew-edit\" title=\"" . $editcaption . "\" data-caption=\"" . $editcaption . "\" href=\"" . HtmlEncode($this->EditUrl) . "\">" . $Language->phrase("ViewPageEditLink") . "</a>";
		$item->Visible = ($this->EditUrl <> "" && $Security->canEdit());

		// Copy
		$item = &$option->add("copy");
		$copycaption = HtmlTitle($Language->phrase("ViewPageCopyLink"));
		if ($this->IsModal) // Modal
			$item->Body = "<a class=\"ew-action ew-copy\" title=\"" . $copycaption . "\" data-caption=\"" . $copycaption . "\" href=\"javascript:void(0);\" onclick=\"ew.modalDialogShow({lnk:this,btn:'AddBtn',url:'" . HtmlEncode($this->CopyUrl) . "'});\">" . $Language->phrase("ViewPageCopyLink") . "</a>";
		else
			$item->Body = "<a class=\"ew-action ew-copy\" title=\"" . $copycaption . "\" data-caption=\"" . $copycaption . "\" href=\"" . HtmlEncode($this->CopyUrl) . "\">" . $Language->phrase("ViewPageCopyLink") . "</a>";
		$item->Visible = ($this->CopyUrl <> "" && $Security->canAdd());

		// Delete
		$item = &$option->add("delete");
		if ($this->IsModal) // Handle as inline delete
			$item->Body = "<a onclick=\"return ew.confirmDelete(this);\" class=\"ew-action ew-delete\" title=\"" . HtmlTitle($Language->phrase("ViewPageDeleteLink")) . "\" data-caption=\"" . HtmlTitle($Language->phrase("ViewPageDeleteLink")) . "\" href=\"" . HtmlEncode(UrlAddQuery($this->DeleteUrl, "action=1")) . "\">" . $Language->phrase("ViewPageDeleteLink") . "</a>";
		else
			$item->Body = "<a class=\"ew-action ew-delete\" title=\"" . HtmlTitle($Language->phrase("ViewPageDeleteLink")) . "\" data-caption=\"" . HtmlTitle($Language->phrase("ViewPageDeleteLink")) . "\" href=\"" . HtmlEncode($this->DeleteUrl) . "\">" . $Language->phrase("ViewPageDeleteLink") . "</a>";
		$item->Visible = ($this->DeleteUrl <> "" && $Security->canDelete());

		// Set up action default
		$option = &$options["action"];
		$option->DropDownButtonPhrase = $Language->phrase("ButtonActions");
		$option->UseDropDownButton = FALSE;
		$option->UseButtonGroup = TRUE;
		$item = &$option->add($option->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;
	}

	// Set up starting record parameters
	public function setupStartRec()
	{
		if ($this->DisplayRecs == 0)
			return;
		if ($this->isPageRequest()) { // Validate request
			if (Get(TABLE_START_REC) !== NULL) { // Check for "start" parameter
				$this->StartRec = Get(TABLE_START_REC);
				$this->setStartRecordNumber($this->StartRec);
			} elseif (Get(TABLE_PAGE_NO) !== NULL) {
				$pageNo = Get(TABLE_PAGE_NO);
				if (is_numeric($pageNo)) {
					$this->StartRec = ($pageNo - 1) * $this->DisplayRecs + 1;
					if ($this->StartRec <= 0) {
						$this->StartRec = 1;
					} elseif ($this->StartRec >= (int)(($this->TotalRecs - 1)/$this->DisplayRecs) * $this->DisplayRecs + 1) {
						$this->StartRec = (int)(($this->TotalRecs - 1)/$this->DisplayRecs) * $this->DisplayRecs + 1;
					}
					$this->setStartRecordNumber($this->StartRec);
				}
			}
		}
		$this->StartRec = $this->getStartRecordNumber();

		// Check if correct start record counter
		if (!is_numeric($this->StartRec) || $this->StartRec == "") { // Avoid invalid start record counter
			$this->StartRec = 1; // Reset start record counter
			$this->setStartRecordNumber($this->StartRec);
		} elseif ($this->StartRec > $this->TotalRecs) { // Avoid starting record > total records
			$this->StartRec = (int)(($this->TotalRecs - 1)/$this->DisplayRecs) * $this->DisplayRecs + 1; // Point to last page first record
			$this->setStartRecordNumber($this->StartRec);
		} elseif (($this->StartRec - 1) % $this->DisplayRecs <> 0) {
			$this->StartRec = (int)(($this->StartRec - 1)/$this->DisplayRecs) * $this->DisplayRecs + 1; // Point to page boundary
			$this->setStartRecordNumber($this->StartRec);
		}
	}

	// Load row based on key values
	public function loadRow()
	{
		global $Security, $Language;
		$filter = $this->getRecordFilter();

		// Call Row Selecting event
		$this->Row_Selecting($filter);

		// Load SQL based on filter
		$this->CurrentFilter = $filter;
		$sql = $this->getCurrentSql();
		$conn = &$this->getConnection();
		$res = FALSE;
		$rs = LoadRecordset($sql, $conn);
		if ($rs && !$rs->EOF) {
			$res = TRUE;
			$this->loadRowValues($rs); // Load row values
			$rs->close();
		}
		return $res;
	}

	// Load row values from recordset
	public function loadRowValues($rs = NULL)
	{
		if ($rs && !$rs->EOF)
			$row = $rs->fields;
		else
			$row = $this->newRow();

		// Call Row Selected event
		$this->Row_Selected($row);
		if (!$rs || $rs->EOF)
			return;
		if ($this->AuditTrailOnView)
			$this->writeAuditTrailOnView($row);
		$this->id->setDbValue($row['id']);
		$this->daf_kelas_siswa_id->setDbValue($row['daf_kelas_siswa_id']);
		$this->iuran_id->setDbValue($row['iuran_id']);
		$this->Jumlah->setDbValue($row['Jumlah']);
		$this->byr01->setDbValue($row['byr01']);
		$this->jml01->setDbValue($row['jml01']);
		$this->tgl01->setDbValue($row['tgl01']);
		$this->byr02->setDbValue($row['byr02']);
		$this->jml02->setDbValue($row['jml02']);
		$this->tgl02->setDbValue($row['tgl02']);
		$this->byr03->setDbValue($row['byr03']);
		$this->jml03->setDbValue($row['jml03']);
		$this->tgl03->setDbValue($row['tgl03']);
		$this->byr04->setDbValue($row['byr04']);
		$this->jml04->setDbValue($row['jml04']);
		$this->tgl04->setDbValue($row['tgl04']);
		$this->byr05->setDbValue($row['byr05']);
		$this->jml05->setDbValue($row['jml05']);
		$this->tgl05->setDbValue($row['tgl05']);
		$this->byr06->setDbValue($row['byr06']);
		$this->jml06->setDbValue($row['jml06']);
		$this->tgl06->setDbValue($row['tgl06']);
		$this->byr07->setDbValue($row['byr07']);
		$this->jml07->setDbValue($row['jml07']);
		$this->tgl07->setDbValue($row['tgl07']);
		$this->byr08->setDbValue($row['byr08']);
		$this->jml08->setDbValue($row['jml08']);
		$this->tgl08->setDbValue($row['tgl08']);
		$this->byr09->setDbValue($row['byr09']);
		$this->jml09->setDbValue($row['jml09']);
		$this->tgl09->setDbValue($row['tgl09']);
		$this->byr10->setDbValue($row['byr10']);
		$this->jml10->setDbValue($row['jml10']);
		$this->tgl10->setDbValue($row['tgl10']);
		$this->byr11->setDbValue($row['byr11']);
		$this->jml11->setDbValue($row['jml11']);
		$this->tgl11->setDbValue($row['tgl11']);
		$this->byr12->setDbValue($row['byr12']);
		$this->jml12->setDbValue($row['jml12']);
		$this->tgl12->setDbValue($row['tgl12']);
	}

	// Return a row with default values
	protected function newRow()
	{
		$row = [];
		$row['id'] = NULL;
		$row['daf_kelas_siswa_id'] = NULL;
		$row['iuran_id'] = NULL;
		$row['Jumlah'] = NULL;
		$row['byr01'] = NULL;
		$row['jml01'] = NULL;
		$row['tgl01'] = NULL;
		$row['byr02'] = NULL;
		$row['jml02'] = NULL;
		$row['tgl02'] = NULL;
		$row['byr03'] = NULL;
		$row['jml03'] = NULL;
		$row['tgl03'] = NULL;
		$row['byr04'] = NULL;
		$row['jml04'] = NULL;
		$row['tgl04'] = NULL;
		$row['byr05'] = NULL;
		$row['jml05'] = NULL;
		$row['tgl05'] = NULL;
		$row['byr06'] = NULL;
		$row['jml06'] = NULL;
		$row['tgl06'] = NULL;
		$row['byr07'] = NULL;
		$row['jml07'] = NULL;
		$row['tgl07'] = NULL;
		$row['byr08'] = NULL;
		$row['jml08'] = NULL;
		$row['tgl08'] = NULL;
		$row['byr09'] = NULL;
		$row['jml09'] = NULL;
		$row['tgl09'] = NULL;
		$row['byr10'] = NULL;
		$row['jml10'] = NULL;
		$row['tgl10'] = NULL;
		$row['byr11'] = NULL;
		$row['jml11'] = NULL;
		$row['tgl11'] = NULL;
		$row['byr12'] = NULL;
		$row['jml12'] = NULL;
		$row['tgl12'] = NULL;
		return $row;
	}

	// Render row values based on field settings
	public function renderRow()
	{
		global $Security, $Language, $CurrentLanguage;

		// Initialize URLs
		$this->AddUrl = $this->getAddUrl();
		$this->EditUrl = $this->getEditUrl();
		$this->CopyUrl = $this->getCopyUrl();
		$this->DeleteUrl = $this->getDeleteUrl();
		$this->ListUrl = $this->getListUrl();
		$this->setupOtherOptions();

		// Convert decimal values if posted back
		if ($this->Jumlah->FormValue == $this->Jumlah->CurrentValue && is_numeric(ConvertToFloatString($this->Jumlah->CurrentValue)))
			$this->Jumlah->CurrentValue = ConvertToFloatString($this->Jumlah->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml01->FormValue == $this->jml01->CurrentValue && is_numeric(ConvertToFloatString($this->jml01->CurrentValue)))
			$this->jml01->CurrentValue = ConvertToFloatString($this->jml01->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml02->FormValue == $this->jml02->CurrentValue && is_numeric(ConvertToFloatString($this->jml02->CurrentValue)))
			$this->jml02->CurrentValue = ConvertToFloatString($this->jml02->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml03->FormValue == $this->jml03->CurrentValue && is_numeric(ConvertToFloatString($this->jml03->CurrentValue)))
			$this->jml03->CurrentValue = ConvertToFloatString($this->jml03->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml04->FormValue == $this->jml04->CurrentValue && is_numeric(ConvertToFloatString($this->jml04->CurrentValue)))
			$this->jml04->CurrentValue = ConvertToFloatString($this->jml04->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml05->FormValue == $this->jml05->CurrentValue && is_numeric(ConvertToFloatString($this->jml05->CurrentValue)))
			$this->jml05->CurrentValue = ConvertToFloatString($this->jml05->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml06->FormValue == $this->jml06->CurrentValue && is_numeric(ConvertToFloatString($this->jml06->CurrentValue)))
			$this->jml06->CurrentValue = ConvertToFloatString($this->jml06->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml07->FormValue == $this->jml07->CurrentValue && is_numeric(ConvertToFloatString($this->jml07->CurrentValue)))
			$this->jml07->CurrentValue = ConvertToFloatString($this->jml07->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml08->FormValue == $this->jml08->CurrentValue && is_numeric(ConvertToFloatString($this->jml08->CurrentValue)))
			$this->jml08->CurrentValue = ConvertToFloatString($this->jml08->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml09->FormValue == $this->jml09->CurrentValue && is_numeric(ConvertToFloatString($this->jml09->CurrentValue)))
			$this->jml09->CurrentValue = ConvertToFloatString($this->jml09->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml10->FormValue == $this->jml10->CurrentValue && is_numeric(ConvertToFloatString($this->jml10->CurrentValue)))
			$this->jml10->CurrentValue = ConvertToFloatString($this->jml10->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml11->FormValue == $this->jml11->CurrentValue && is_numeric(ConvertToFloatString($this->jml11->CurrentValue)))
			$this->jml11->CurrentValue = ConvertToFloatString($this->jml11->CurrentValue);

		// Convert decimal values if posted back
		if ($this->jml12->FormValue == $this->jml12->CurrentValue && is_numeric(ConvertToFloatString($this->jml12->CurrentValue)))
			$this->jml12->CurrentValue = ConvertToFloatString($this->jml12->CurrentValue);

		// Call Row_Rendering event
		$this->Row_Rendering();

		// Common render codes for all row types
		// id
		// daf_kelas_siswa_id
		// iuran_id
		// Jumlah
		// byr01
		// jml01
		// tgl01
		// byr02
		// jml02
		// tgl02
		// byr03
		// jml03
		// tgl03
		// byr04
		// jml04
		// tgl04
		// byr05
		// jml05
		// tgl05
		// byr06
		// jml06
		// tgl06
		// byr07
		// jml07
		// tgl07
		// byr08
		// jml08
		// tgl08
		// byr09
		// jml09
		// tgl09
		// byr10
		// jml10
		// tgl10
		// byr11
		// jml11
		// tgl11
		// byr12
		// jml12
		// tgl12

		if ($this->RowType == ROWTYPE_VIEW) { // View row

			// id
			$this->id->ViewValue = $this->id->CurrentValue;
			$this->id->ViewCustomAttributes = "";

			// daf_kelas_siswa_id
			$this->daf_kelas_siswa_id->ViewValue = $this->daf_kelas_siswa_id->CurrentValue;
			$this->daf_kelas_siswa_id->ViewValue = FormatNumber($this->daf_kelas_siswa_id->ViewValue, 0, -2, -2, -2);
			$this->daf_kelas_siswa_id->ViewCustomAttributes = "";

			// iuran_id
			$curVal = strval($this->iuran_id->CurrentValue);
			if ($curVal <> "") {
				$this->iuran_id->ViewValue = $this->iuran_id->lookupCacheOption($curVal);
				if ($this->iuran_id->ViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->iuran_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = array();
						$arwrk[1] = $rswrk->fields('df');
						$this->iuran_id->ViewValue = $this->iuran_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->iuran_id->ViewValue = $this->iuran_id->CurrentValue;
					}
				}
			} else {
				$this->iuran_id->ViewValue = NULL;
			}
			$this->iuran_id->ViewCustomAttributes = "";

			// Jumlah
			$this->Jumlah->ViewValue = $this->Jumlah->CurrentValue;
			$this->Jumlah->ViewValue = FormatNumber($this->Jumlah->ViewValue, 0, -2, -2, -2);
			$this->Jumlah->CellCssStyle .= "text-align: right;";
			$this->Jumlah->ViewCustomAttributes = "";

			// byr01
			if (ConvertToBool($this->byr01->CurrentValue)) {
				$this->byr01->ViewValue = $this->byr01->tagCaption(2) <> "" ? $this->byr01->tagCaption(2) : "1";
			} else {
				$this->byr01->ViewValue = $this->byr01->tagCaption(1) <> "" ? $this->byr01->tagCaption(1) : "0";
			}
			$this->byr01->ViewCustomAttributes = "";

			// jml01
			$this->jml01->ViewValue = $this->jml01->CurrentValue;
			$this->jml01->ViewValue = FormatNumber($this->jml01->ViewValue, 0, -2, -2, -2);
			$this->jml01->CellCssStyle .= "text-align: right;";
			$this->jml01->ViewCustomAttributes = "";

			// tgl01
			$this->tgl01->ViewValue = $this->tgl01->CurrentValue;
			$this->tgl01->ViewValue = FormatDateTime($this->tgl01->ViewValue, 7);
			$this->tgl01->ViewCustomAttributes = "";

			// byr02
			if (ConvertToBool($this->byr02->CurrentValue)) {
				$this->byr02->ViewValue = $this->byr02->tagCaption(2) <> "" ? $this->byr02->tagCaption(2) : "1";
			} else {
				$this->byr02->ViewValue = $this->byr02->tagCaption(1) <> "" ? $this->byr02->tagCaption(1) : "0";
			}
			$this->byr02->ViewCustomAttributes = "";

			// jml02
			$this->jml02->ViewValue = $this->jml02->CurrentValue;
			$this->jml02->ViewValue = FormatNumber($this->jml02->ViewValue, 0, -2, -2, -2);
			$this->jml02->CellCssStyle .= "text-align: right;";
			$this->jml02->ViewCustomAttributes = "";

			// tgl02
			$this->tgl02->ViewValue = $this->tgl02->CurrentValue;
			$this->tgl02->ViewValue = FormatDateTime($this->tgl02->ViewValue, 7);
			$this->tgl02->ViewCustomAttributes = "";

			// byr03
			if (ConvertToBool($this->byr03->CurrentValue)) {
				$this->byr03->ViewValue = $this->byr03->tagCaption(2) <> "" ? $this->byr03->tagCaption(2) : "1";
			} else {
				$this->byr03->ViewValue = $this->byr03->tagCaption(1) <> "" ? $this->byr03->tagCaption(1) : "0";
			}
			$this->byr03->ViewCustomAttributes = "";

			// jml03
			$this->jml03->ViewValue = $this->jml03->CurrentValue;
			$this->jml03->ViewValue = FormatNumber($this->jml03->ViewValue, 0, -2, -2, -2);
			$this->jml03->CellCssStyle .= "text-align: right;";
			$this->jml03->ViewCustomAttributes = "";

			// tgl03
			$this->tgl03->ViewValue = $this->tgl03->CurrentValue;
			$this->tgl03->ViewValue = FormatDateTime($this->tgl03->ViewValue, 7);
			$this->tgl03->ViewCustomAttributes = "";

			// byr04
			if (ConvertToBool($this->byr04->CurrentValue)) {
				$this->byr04->ViewValue = $this->byr04->tagCaption(2) <> "" ? $this->byr04->tagCaption(2) : "1";
			} else {
				$this->byr04->ViewValue = $this->byr04->tagCaption(1) <> "" ? $this->byr04->tagCaption(1) : "0";
			}
			$this->byr04->ViewCustomAttributes = "";

			// jml04
			$this->jml04->ViewValue = $this->jml04->CurrentValue;
			$this->jml04->ViewValue = FormatNumber($this->jml04->ViewValue, 0, -2, -2, -2);
			$this->jml04->CellCssStyle .= "text-align: right;";
			$this->jml04->ViewCustomAttributes = "";

			// tgl04
			$this->tgl04->ViewValue = $this->tgl04->CurrentValue;
			$this->tgl04->ViewValue = FormatDateTime($this->tgl04->ViewValue, 7);
			$this->tgl04->ViewCustomAttributes = "";

			// byr05
			if (ConvertToBool($this->byr05->CurrentValue)) {
				$this->byr05->ViewValue = $this->byr05->tagCaption(2) <> "" ? $this->byr05->tagCaption(2) : "1";
			} else {
				$this->byr05->ViewValue = $this->byr05->tagCaption(1) <> "" ? $this->byr05->tagCaption(1) : "0";
			}
			$this->byr05->ViewCustomAttributes = "";

			// jml05
			$this->jml05->ViewValue = $this->jml05->CurrentValue;
			$this->jml05->ViewValue = FormatNumber($this->jml05->ViewValue, 0, -2, -2, -2);
			$this->jml05->CellCssStyle .= "text-align: right;";
			$this->jml05->ViewCustomAttributes = "";

			// tgl05
			$this->tgl05->ViewValue = $this->tgl05->CurrentValue;
			$this->tgl05->ViewValue = FormatDateTime($this->tgl05->ViewValue, 7);
			$this->tgl05->ViewCustomAttributes = "";

			// byr06
			if (ConvertToBool($this->byr06->CurrentValue)) {
				$this->byr06->ViewValue = $this->byr06->tagCaption(2) <> "" ? $this->byr06->tagCaption(2) : "1";
			} else {
				$this->byr06->ViewValue = $this->byr06->tagCaption(1) <> "" ? $this->byr06->tagCaption(1) : "0";
			}
			$this->byr06->ViewCustomAttributes = "";

			// jml06
			$this->jml06->ViewValue = $this->jml06->CurrentValue;
			$this->jml06->ViewValue = FormatNumber($this->jml06->ViewValue, 0, -2, -2, -2);
			$this->jml06->CellCssStyle .= "text-align: right;";
			$this->jml06->ViewCustomAttributes = "";

			// tgl06
			$this->tgl06->ViewValue = $this->tgl06->CurrentValue;
			$this->tgl06->ViewValue = FormatDateTime($this->tgl06->ViewValue, 7);
			$this->tgl06->ViewCustomAttributes = "";

			// byr07
			if (ConvertToBool($this->byr07->CurrentValue)) {
				$this->byr07->ViewValue = $this->byr07->tagCaption(2) <> "" ? $this->byr07->tagCaption(2) : "1";
			} else {
				$this->byr07->ViewValue = $this->byr07->tagCaption(1) <> "" ? $this->byr07->tagCaption(1) : "0";
			}
			$this->byr07->ViewCustomAttributes = "";

			// jml07
			$this->jml07->ViewValue = $this->jml07->CurrentValue;
			$this->jml07->ViewValue = FormatNumber($this->jml07->ViewValue, 0, -2, -2, -2);
			$this->jml07->CellCssStyle .= "text-align: right;";
			$this->jml07->ViewCustomAttributes = "";

			// tgl07
			$this->tgl07->ViewValue = $this->tgl07->CurrentValue;
			$this->tgl07->ViewValue = FormatDateTime($this->tgl07->ViewValue, 7);
			$this->tgl07->ViewCustomAttributes = "";

			// byr08
			if (ConvertToBool($this->byr08->CurrentValue)) {
				$this->byr08->ViewValue = $this->byr08->tagCaption(2) <> "" ? $this->byr08->tagCaption(2) : "1";
			} else {
				$this->byr08->ViewValue = $this->byr08->tagCaption(1) <> "" ? $this->byr08->tagCaption(1) : "0";
			}
			$this->byr08->ViewCustomAttributes = "";

			// jml08
			$this->jml08->ViewValue = $this->jml08->CurrentValue;
			$this->jml08->ViewValue = FormatNumber($this->jml08->ViewValue, 0, -2, -2, -2);
			$this->jml08->CellCssStyle .= "text-align: right;";
			$this->jml08->ViewCustomAttributes = "";

			// tgl08
			$this->tgl08->ViewValue = $this->tgl08->CurrentValue;
			$this->tgl08->ViewValue = FormatDateTime($this->tgl08->ViewValue, 7);
			$this->tgl08->ViewCustomAttributes = "";

			// byr09
			if (ConvertToBool($this->byr09->CurrentValue)) {
				$this->byr09->ViewValue = $this->byr09->tagCaption(2) <> "" ? $this->byr09->tagCaption(2) : "1";
			} else {
				$this->byr09->ViewValue = $this->byr09->tagCaption(1) <> "" ? $this->byr09->tagCaption(1) : "0";
			}
			$this->byr09->ViewCustomAttributes = "";

			// jml09
			$this->jml09->ViewValue = $this->jml09->CurrentValue;
			$this->jml09->ViewValue = FormatNumber($this->jml09->ViewValue, 0, -2, -2, -2);
			$this->jml09->CellCssStyle .= "text-align: right;";
			$this->jml09->ViewCustomAttributes = "";

			// tgl09
			$this->tgl09->ViewValue = $this->tgl09->CurrentValue;
			$this->tgl09->ViewValue = FormatDateTime($this->tgl09->ViewValue, 7);
			$this->tgl09->ViewCustomAttributes = "";

			// byr10
			if (ConvertToBool($this->byr10->CurrentValue)) {
				$this->byr10->ViewValue = $this->byr10->tagCaption(2) <> "" ? $this->byr10->tagCaption(2) : "1";
			} else {
				$this->byr10->ViewValue = $this->byr10->tagCaption(1) <> "" ? $this->byr10->tagCaption(1) : "0";
			}
			$this->byr10->ViewCustomAttributes = "";

			// jml10
			$this->jml10->ViewValue = $this->jml10->CurrentValue;
			$this->jml10->ViewValue = FormatNumber($this->jml10->ViewValue, 0, -2, -2, -2);
			$this->jml10->CellCssStyle .= "text-align: right;";
			$this->jml10->ViewCustomAttributes = "";

			// tgl10
			$this->tgl10->ViewValue = $this->tgl10->CurrentValue;
			$this->tgl10->ViewValue = FormatDateTime($this->tgl10->ViewValue, 7);
			$this->tgl10->ViewCustomAttributes = "";

			// byr11
			if (ConvertToBool($this->byr11->CurrentValue)) {
				$this->byr11->ViewValue = $this->byr11->tagCaption(2) <> "" ? $this->byr11->tagCaption(2) : "1";
			} else {
				$this->byr11->ViewValue = $this->byr11->tagCaption(1) <> "" ? $this->byr11->tagCaption(1) : "0";
			}
			$this->byr11->ViewCustomAttributes = "";

			// jml11
			$this->jml11->ViewValue = $this->jml11->CurrentValue;
			$this->jml11->ViewValue = FormatNumber($this->jml11->ViewValue, 0, -2, -2, -2);
			$this->jml11->CellCssStyle .= "text-align: right;";
			$this->jml11->ViewCustomAttributes = "";

			// tgl11
			$this->tgl11->ViewValue = $this->tgl11->CurrentValue;
			$this->tgl11->ViewValue = FormatDateTime($this->tgl11->ViewValue, 7);
			$this->tgl11->ViewCustomAttributes = "";

			// byr12
			if (ConvertToBool($this->byr12->CurrentValue)) {
				$this->byr12->ViewValue = $this->byr12->tagCaption(2) <> "" ? $this->byr12->tagCaption(2) : "1";
			} else {
				$this->byr12->ViewValue = $this->byr12->tagCaption(1) <> "" ? $this->byr12->tagCaption(1) : "0";
			}
			$this->byr12->ViewCustomAttributes = "";

			// jml12
			$this->jml12->ViewValue = $this->jml12->CurrentValue;
			$this->jml12->ViewValue = FormatNumber($this->jml12->ViewValue, 0, -2, -2, -2);
			$this->jml12->CellCssStyle .= "text-align: right;";
			$this->jml12->ViewCustomAttributes = "";

			// tgl12
			$this->tgl12->ViewValue = $this->tgl12->CurrentValue;
			$this->tgl12->ViewValue = FormatDateTime($this->tgl12->ViewValue, 7);
			$this->tgl12->ViewCustomAttributes = "";

			// iuran_id
			$this->iuran_id->LinkCustomAttributes = "";
			$this->iuran_id->HrefValue = "";
			$this->iuran_id->TooltipValue = "";

			// Jumlah
			$this->Jumlah->LinkCustomAttributes = "";
			$this->Jumlah->HrefValue = "";
			$this->Jumlah->TooltipValue = "";

			// byr01
			$this->byr01->LinkCustomAttributes = "";
			$this->byr01->HrefValue = "";
			$this->byr01->TooltipValue = "";

			// jml01
			$this->jml01->LinkCustomAttributes = "";
			$this->jml01->HrefValue = "";
			$this->jml01->TooltipValue = "";

			// tgl01
			$this->tgl01->LinkCustomAttributes = "";
			$this->tgl01->HrefValue = "";
			$this->tgl01->TooltipValue = "";

			// byr02
			$this->byr02->LinkCustomAttributes = "";
			$this->byr02->HrefValue = "";
			$this->byr02->TooltipValue = "";

			// jml02
			$this->jml02->LinkCustomAttributes = "";
			$this->jml02->HrefValue = "";
			$this->jml02->TooltipValue = "";

			// tgl02
			$this->tgl02->LinkCustomAttributes = "";
			$this->tgl02->HrefValue = "";
			$this->tgl02->TooltipValue = "";

			// byr03
			$this->byr03->LinkCustomAttributes = "";
			$this->byr03->HrefValue = "";
			$this->byr03->TooltipValue = "";

			// jml03
			$this->jml03->LinkCustomAttributes = "";
			$this->jml03->HrefValue = "";
			$this->jml03->TooltipValue = "";

			// tgl03
			$this->tgl03->LinkCustomAttributes = "";
			$this->tgl03->HrefValue = "";
			$this->tgl03->TooltipValue = "";

			// byr04
			$this->byr04->LinkCustomAttributes = "";
			$this->byr04->HrefValue = "";
			$this->byr04->TooltipValue = "";

			// jml04
			$this->jml04->LinkCustomAttributes = "";
			$this->jml04->HrefValue = "";
			$this->jml04->TooltipValue = "";

			// tgl04
			$this->tgl04->LinkCustomAttributes = "";
			$this->tgl04->HrefValue = "";
			$this->tgl04->TooltipValue = "";

			// byr05
			$this->byr05->LinkCustomAttributes = "";
			$this->byr05->HrefValue = "";
			$this->byr05->TooltipValue = "";

			// jml05
			$this->jml05->LinkCustomAttributes = "";
			$this->jml05->HrefValue = "";
			$this->jml05->TooltipValue = "";

			// tgl05
			$this->tgl05->LinkCustomAttributes = "";
			$this->tgl05->HrefValue = "";
			$this->tgl05->TooltipValue = "";

			// byr06
			$this->byr06->LinkCustomAttributes = "";
			$this->byr06->HrefValue = "";
			$this->byr06->TooltipValue = "";

			// jml06
			$this->jml06->LinkCustomAttributes = "";
			$this->jml06->HrefValue = "";
			$this->jml06->TooltipValue = "";

			// tgl06
			$this->tgl06->LinkCustomAttributes = "";
			$this->tgl06->HrefValue = "";
			$this->tgl06->TooltipValue = "";

			// byr07
			$this->byr07->LinkCustomAttributes = "";
			$this->byr07->HrefValue = "";
			$this->byr07->TooltipValue = "";

			// jml07
			$this->jml07->LinkCustomAttributes = "";
			$this->jml07->HrefValue = "";
			$this->jml07->TooltipValue = "";

			// tgl07
			$this->tgl07->LinkCustomAttributes = "";
			$this->tgl07->HrefValue = "";
			$this->tgl07->TooltipValue = "";

			// byr08
			$this->byr08->LinkCustomAttributes = "";
			$this->byr08->HrefValue = "";
			$this->byr08->TooltipValue = "";

			// jml08
			$this->jml08->LinkCustomAttributes = "";
			$this->jml08->HrefValue = "";
			$this->jml08->TooltipValue = "";

			// tgl08
			$this->tgl08->LinkCustomAttributes = "";
			$this->tgl08->HrefValue = "";
			$this->tgl08->TooltipValue = "";

			// byr09
			$this->byr09->LinkCustomAttributes = "";
			$this->byr09->HrefValue = "";
			$this->byr09->TooltipValue = "";

			// jml09
			$this->jml09->LinkCustomAttributes = "";
			$this->jml09->HrefValue = "";
			$this->jml09->TooltipValue = "";

			// tgl09
			$this->tgl09->LinkCustomAttributes = "";
			$this->tgl09->HrefValue = "";
			$this->tgl09->TooltipValue = "";

			// byr10
			$this->byr10->LinkCustomAttributes = "";
			$this->byr10->HrefValue = "";
			$this->byr10->TooltipValue = "";

			// jml10
			$this->jml10->LinkCustomAttributes = "";
			$this->jml10->HrefValue = "";
			$this->jml10->TooltipValue = "";

			// tgl10
			$this->tgl10->LinkCustomAttributes = "";
			$this->tgl10->HrefValue = "";
			$this->tgl10->TooltipValue = "";

			// byr11
			$this->byr11->LinkCustomAttributes = "";
			$this->byr11->HrefValue = "";
			$this->byr11->TooltipValue = "";

			// jml11
			$this->jml11->LinkCustomAttributes = "";
			$this->jml11->HrefValue = "";
			$this->jml11->TooltipValue = "";

			// tgl11
			$this->tgl11->LinkCustomAttributes = "";
			$this->tgl11->HrefValue = "";
			$this->tgl11->TooltipValue = "";

			// byr12
			$this->byr12->LinkCustomAttributes = "";
			$this->byr12->HrefValue = "";
			$this->byr12->TooltipValue = "";

			// jml12
			$this->jml12->LinkCustomAttributes = "";
			$this->jml12->HrefValue = "";
			$this->jml12->TooltipValue = "";

			// tgl12
			$this->tgl12->LinkCustomAttributes = "";
			$this->tgl12->HrefValue = "";
			$this->tgl12->TooltipValue = "";
		}

		// Call Row Rendered event
		if ($this->RowType <> ROWTYPE_AGGREGATEINIT)
			$this->Row_Rendered();
	}

	// Set up master/detail based on QueryString
	protected function setupMasterParms()
	{
		$validMaster = FALSE;

		// Get the keys for master table
		if (Get(TABLE_SHOW_MASTER) !== NULL) {
			$masterTblVar = Get(TABLE_SHOW_MASTER);
			if ($masterTblVar == "") {
				$validMaster = TRUE;
				$this->DbMasterFilter = "";
				$this->DbDetailFilter = "";
			}
			if ($masterTblVar == "v102_daf_kelas_siswa") {
				$validMaster = TRUE;
				if (Get("fk_id") !== NULL) {
					$this->daf_kelas_siswa_id->setQueryStringValue(Get("fk_id"));
					$this->daf_kelas_siswa_id->setSessionValue($this->daf_kelas_siswa_id->QueryStringValue);
					if (!is_numeric($this->daf_kelas_siswa_id->QueryStringValue))
						$validMaster = FALSE;
				} else {
					$validMaster = FALSE;
				}
			}
		} elseif (Post(TABLE_SHOW_MASTER) !== NULL) {
			$masterTblVar = Post(TABLE_SHOW_MASTER);
			if ($masterTblVar == "") {
				$validMaster = TRUE;
				$this->DbMasterFilter = "";
				$this->DbDetailFilter = "";
			}
			if ($masterTblVar == "v102_daf_kelas_siswa") {
				$validMaster = TRUE;
				if (Post("fk_id") !== NULL) {
					$this->daf_kelas_siswa_id->setFormValue(Post("fk_id"));
					$this->daf_kelas_siswa_id->setSessionValue($this->daf_kelas_siswa_id->FormValue);
					if (!is_numeric($this->daf_kelas_siswa_id->FormValue))
						$validMaster = FALSE;
				} else {
					$validMaster = FALSE;
				}
			}
		}
		if ($validMaster) {

			// Save current master table
			$this->setCurrentMasterTable($masterTblVar);
			$this->setSessionWhere($this->getDetailFilter());

			// Reset start record counter (new master key)
			if (!$this->isAddOrEdit()) {
				$this->StartRec = 1;
				$this->setStartRecordNumber($this->StartRec);
			}

			// Clear previous master key from Session
			if ($masterTblVar <> "v102_daf_kelas_siswa") {
				if ($this->daf_kelas_siswa_id->CurrentValue == "")
					$this->daf_kelas_siswa_id->setSessionValue("");
			}
		}
		$this->DbMasterFilter = $this->getMasterFilter(); // Get master filter
		$this->DbDetailFilter = $this->getDetailFilter(); // Get detail filter
	}

	// Set up Breadcrumb
	protected function setupBreadcrumb()
	{
		global $Breadcrumb, $Language;
		$Breadcrumb = new Breadcrumb();
		$url = substr(CurrentUrl(), strrpos(CurrentUrl(), "/")+1);
		$Breadcrumb->add("list", $this->TableVar, $this->addMasterUrl("t103_daf_kelas_siswa_iuranlist.php"), "", $this->TableVar, TRUE);
		$pageId = "view";
		$Breadcrumb->add("view", $pageId, $url);
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
			if ($fld->UseLookupCache && $sql <> "" && count($fld->Lookup->ParentFields) == 0 && count($fld->Lookup->Options) == 0) {
				$conn = &$this->getConnection();
				$totalCnt = $this->getRecordCount($sql);
				if ($totalCnt > $fld->LookupCacheCount) // Total count > cache count, do not cache
					return;
				$rs = $conn->execute($sql);
				$ar = [];
				while ($rs && !$rs->EOF) {
					$row = &$rs->fields;

					// Format the field values
					switch ($fld->FieldVar) {
						case "x_iuran_id":
							break;
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

	// Page Load event
	function Page_Load() {

		//echo "Page Load";
	}

	// Page Unload event
	function Page_Unload() {

		//echo "Page Unload";
	}

	// Page Redirecting event
	function Page_Redirecting(&$url) {

		// Example:
		//$url = "your URL";

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

	}

	// Page Data Rendered event
	function Page_DataRendered(&$footer) {

		// Example:
		//$footer = "your footer";

	}

	// Page Exporting event
	// $this->ExportDoc = export document object
	function Page_Exporting() {

		//$this->ExportDoc->Text = "my header"; // Export header
		//return FALSE; // Return FALSE to skip default export and use Row_Export event

		return TRUE; // Return TRUE to use default export and skip Row_Export event
	}

	// Row Export event
	// $this->ExportDoc = export document object
	function Row_Export($rs) {

		//$this->ExportDoc->Text .= "my content"; // Build HTML with field value: $rs["MyField"] or $this->MyField->ViewValue
	}

	// Page Exported event
	// $this->ExportDoc = export document object
	function Page_Exported() {

		//$this->ExportDoc->Text .= "my footer"; // Export footer
		//echo $this->ExportDoc->Text;

	}
}
?>