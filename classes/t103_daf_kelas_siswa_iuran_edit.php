<?php
namespace PHPMaker2019\p_pembayaran3_1;

/**
 * Page class
 */
class t103_daf_kelas_siswa_iuran_edit extends t103_daf_kelas_siswa_iuran
{

	// Page ID
	public $PageID = "edit";

	// Project ID
	public $ProjectID = "{D97AB052-DD0F-4E43-8766-C499FD89B1B8}";

	// Table name
	public $TableName = 't103_daf_kelas_siswa_iuran';

	// Page object name
	public $PageObjName = "t103_daf_kelas_siswa_iuran_edit";

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
		$this->CancelUrl = $this->pageUrl() . "action=cancel";

		// Table object (t301_employees)
		if (!isset($GLOBALS['t301_employees']))
			$GLOBALS['t301_employees'] = new t301_employees();

		// Table object (v102_daf_kelas_siswa)
		if (!isset($GLOBALS['v102_daf_kelas_siswa']))
			$GLOBALS['v102_daf_kelas_siswa'] = new v102_daf_kelas_siswa();

		// Page ID
		if (!defined(PROJECT_NAMESPACE . "PAGE_ID"))
			define(PROJECT_NAMESPACE . "PAGE_ID", 'edit');

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
	public $FormClassName = "ew-horizontal ew-form ew-edit-form";
	public $IsModal = FALSE;
	public $IsMobileOrModal = FALSE;
	public $DbMasterFilter;
	public $DbDetailFilter;

	//
	// Page run
	//

	public function run()
	{
		global $ExportType, $CustomExportType, $ExportFileName, $UserProfile, $Language, $Security, $RequestSecurity, $CurrentForm,
			$FormError, $SkipHeaderFooter;

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
			if (!$Security->canEdit()) {
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

		// Create form object
		$CurrentForm = new HttpForm();
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
		$this->IsMobileOrModal = IsMobile() || $this->IsModal;
		$this->FormClassName = "ew-form ew-edit-form ew-horizontal";
		$loaded = FALSE;
		$postBack = FALSE;

		// Set up current action and primary key
		if (IsApi()) {
			$this->CurrentAction = "update"; // Update record directly
			$postBack = TRUE;
		} elseif (Post("action") !== NULL) {
			$this->CurrentAction = Post("action"); // Get action code
			if (!$this->isShow()) // Not reload record, handle as postback
				$postBack = TRUE;

			// Load key from Form
			if ($CurrentForm->hasValue("x_id")) {
				$this->id->setFormValue($CurrentForm->getValue("x_id"));
			}
		} else {
			$this->CurrentAction = "show"; // Default action is display

			// Load key from QueryString
			$loadByQuery = FALSE;
			if (Get("id") !== NULL) {
				$this->id->setQueryStringValue(Get("id"));
				$loadByQuery = TRUE;
			} else {
				$this->id->CurrentValue = NULL;
			}
		}

		// Set up master detail parameters
		$this->setupMasterParms();

		// Load current record
		$loaded = $this->loadRow();

		// Process form if post back
		if ($postBack) {
			$this->loadFormValues(); // Get form values
		}

		// Validate form if post back
		if ($postBack) {
			if (!$this->validateForm()) {
				$this->setFailureMessage($FormError);
				$this->EventCancelled = TRUE; // Event cancelled
				$this->restoreFormValues();
				if (IsApi()) {
					$this->terminate();
					return;
				} else {
					$this->CurrentAction = ""; // Form error, reset action
				}
			}
		}

		// Perform current action
		switch ($this->CurrentAction) {
			case "show": // Get a record to display
				if (!$loaded) { // Load record based on key
					if ($this->getFailureMessage() == "")
						$this->setFailureMessage($Language->phrase("NoRecord")); // No record found
					$this->terminate("t103_daf_kelas_siswa_iuranlist.php"); // No matching record, return to list
				}
				break;
			case "update": // Update
				$returnUrl = $this->getReturnUrl();
				if (GetPageName($returnUrl) == "t103_daf_kelas_siswa_iuranlist.php")
					$returnUrl = $this->addMasterUrl($returnUrl); // List page, return to List page with correct master key if necessary
				$this->SendEmail = TRUE; // Send email on update success
				if ($this->editRow()) { // Update record based on key
					if ($this->getSuccessMessage() == "")
						$this->setSuccessMessage($Language->phrase("UpdateSuccess")); // Update success
					if (IsApi()) {
						$this->terminate(TRUE);
						return;
					} else {
						$this->terminate($returnUrl); // Return to caller
					}
				} elseif (IsApi()) { // API request, return
					$this->terminate();
					return;
				} elseif ($this->getFailureMessage() == $Language->phrase("NoRecord")) {
					$this->terminate($returnUrl); // Return to caller
				} else {
					$this->EventCancelled = TRUE; // Event cancelled
					$this->restoreFormValues(); // Restore form values if update failed
				}
		}

		// Set up Breadcrumb
		$this->setupBreadcrumb();

		// Render the record
		$this->RowType = ROWTYPE_EDIT; // Render as Edit
		$this->resetAttributes();
		$this->renderRow();
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

	// Get upload files
	protected function getUploadFiles()
	{
		global $CurrentForm, $Language;
	}

	// Load form values
	protected function loadFormValues()
	{

		// Load from form
		global $CurrentForm;

		// Check field name 'iuran_id' first before field var 'x_iuran_id'
		$val = $CurrentForm->hasValue("iuran_id") ? $CurrentForm->getValue("iuran_id") : $CurrentForm->getValue("x_iuran_id");
		if (!$this->iuran_id->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->iuran_id->Visible = FALSE; // Disable update for API request
			else
				$this->iuran_id->setFormValue($val);
		}

		// Check field name 'Jumlah' first before field var 'x_Jumlah'
		$val = $CurrentForm->hasValue("Jumlah") ? $CurrentForm->getValue("Jumlah") : $CurrentForm->getValue("x_Jumlah");
		if (!$this->Jumlah->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->Jumlah->Visible = FALSE; // Disable update for API request
			else
				$this->Jumlah->setFormValue($val);
		}

		// Check field name 'byr01' first before field var 'x_byr01'
		$val = $CurrentForm->hasValue("byr01") ? $CurrentForm->getValue("byr01") : $CurrentForm->getValue("x_byr01");
		if (!$this->byr01->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr01->Visible = FALSE; // Disable update for API request
			else
				$this->byr01->setFormValue($val);
		}

		// Check field name 'jml01' first before field var 'x_jml01'
		$val = $CurrentForm->hasValue("jml01") ? $CurrentForm->getValue("jml01") : $CurrentForm->getValue("x_jml01");
		if (!$this->jml01->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml01->Visible = FALSE; // Disable update for API request
			else
				$this->jml01->setFormValue($val);
		}

		// Check field name 'tgl01' first before field var 'x_tgl01'
		$val = $CurrentForm->hasValue("tgl01") ? $CurrentForm->getValue("tgl01") : $CurrentForm->getValue("x_tgl01");
		if (!$this->tgl01->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl01->Visible = FALSE; // Disable update for API request
			else
				$this->tgl01->setFormValue($val);
			$this->tgl01->CurrentValue = UnFormatDateTime($this->tgl01->CurrentValue, 7);
		}

		// Check field name 'byr02' first before field var 'x_byr02'
		$val = $CurrentForm->hasValue("byr02") ? $CurrentForm->getValue("byr02") : $CurrentForm->getValue("x_byr02");
		if (!$this->byr02->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr02->Visible = FALSE; // Disable update for API request
			else
				$this->byr02->setFormValue($val);
		}

		// Check field name 'jml02' first before field var 'x_jml02'
		$val = $CurrentForm->hasValue("jml02") ? $CurrentForm->getValue("jml02") : $CurrentForm->getValue("x_jml02");
		if (!$this->jml02->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml02->Visible = FALSE; // Disable update for API request
			else
				$this->jml02->setFormValue($val);
		}

		// Check field name 'tgl02' first before field var 'x_tgl02'
		$val = $CurrentForm->hasValue("tgl02") ? $CurrentForm->getValue("tgl02") : $CurrentForm->getValue("x_tgl02");
		if (!$this->tgl02->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl02->Visible = FALSE; // Disable update for API request
			else
				$this->tgl02->setFormValue($val);
			$this->tgl02->CurrentValue = UnFormatDateTime($this->tgl02->CurrentValue, 7);
		}

		// Check field name 'byr03' first before field var 'x_byr03'
		$val = $CurrentForm->hasValue("byr03") ? $CurrentForm->getValue("byr03") : $CurrentForm->getValue("x_byr03");
		if (!$this->byr03->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr03->Visible = FALSE; // Disable update for API request
			else
				$this->byr03->setFormValue($val);
		}

		// Check field name 'jml03' first before field var 'x_jml03'
		$val = $CurrentForm->hasValue("jml03") ? $CurrentForm->getValue("jml03") : $CurrentForm->getValue("x_jml03");
		if (!$this->jml03->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml03->Visible = FALSE; // Disable update for API request
			else
				$this->jml03->setFormValue($val);
		}

		// Check field name 'tgl03' first before field var 'x_tgl03'
		$val = $CurrentForm->hasValue("tgl03") ? $CurrentForm->getValue("tgl03") : $CurrentForm->getValue("x_tgl03");
		if (!$this->tgl03->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl03->Visible = FALSE; // Disable update for API request
			else
				$this->tgl03->setFormValue($val);
			$this->tgl03->CurrentValue = UnFormatDateTime($this->tgl03->CurrentValue, 7);
		}

		// Check field name 'byr04' first before field var 'x_byr04'
		$val = $CurrentForm->hasValue("byr04") ? $CurrentForm->getValue("byr04") : $CurrentForm->getValue("x_byr04");
		if (!$this->byr04->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr04->Visible = FALSE; // Disable update for API request
			else
				$this->byr04->setFormValue($val);
		}

		// Check field name 'jml04' first before field var 'x_jml04'
		$val = $CurrentForm->hasValue("jml04") ? $CurrentForm->getValue("jml04") : $CurrentForm->getValue("x_jml04");
		if (!$this->jml04->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml04->Visible = FALSE; // Disable update for API request
			else
				$this->jml04->setFormValue($val);
		}

		// Check field name 'tgl04' first before field var 'x_tgl04'
		$val = $CurrentForm->hasValue("tgl04") ? $CurrentForm->getValue("tgl04") : $CurrentForm->getValue("x_tgl04");
		if (!$this->tgl04->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl04->Visible = FALSE; // Disable update for API request
			else
				$this->tgl04->setFormValue($val);
			$this->tgl04->CurrentValue = UnFormatDateTime($this->tgl04->CurrentValue, 7);
		}

		// Check field name 'byr05' first before field var 'x_byr05'
		$val = $CurrentForm->hasValue("byr05") ? $CurrentForm->getValue("byr05") : $CurrentForm->getValue("x_byr05");
		if (!$this->byr05->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr05->Visible = FALSE; // Disable update for API request
			else
				$this->byr05->setFormValue($val);
		}

		// Check field name 'jml05' first before field var 'x_jml05'
		$val = $CurrentForm->hasValue("jml05") ? $CurrentForm->getValue("jml05") : $CurrentForm->getValue("x_jml05");
		if (!$this->jml05->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml05->Visible = FALSE; // Disable update for API request
			else
				$this->jml05->setFormValue($val);
		}

		// Check field name 'tgl05' first before field var 'x_tgl05'
		$val = $CurrentForm->hasValue("tgl05") ? $CurrentForm->getValue("tgl05") : $CurrentForm->getValue("x_tgl05");
		if (!$this->tgl05->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl05->Visible = FALSE; // Disable update for API request
			else
				$this->tgl05->setFormValue($val);
			$this->tgl05->CurrentValue = UnFormatDateTime($this->tgl05->CurrentValue, 7);
		}

		// Check field name 'byr06' first before field var 'x_byr06'
		$val = $CurrentForm->hasValue("byr06") ? $CurrentForm->getValue("byr06") : $CurrentForm->getValue("x_byr06");
		if (!$this->byr06->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr06->Visible = FALSE; // Disable update for API request
			else
				$this->byr06->setFormValue($val);
		}

		// Check field name 'jml06' first before field var 'x_jml06'
		$val = $CurrentForm->hasValue("jml06") ? $CurrentForm->getValue("jml06") : $CurrentForm->getValue("x_jml06");
		if (!$this->jml06->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml06->Visible = FALSE; // Disable update for API request
			else
				$this->jml06->setFormValue($val);
		}

		// Check field name 'tgl06' first before field var 'x_tgl06'
		$val = $CurrentForm->hasValue("tgl06") ? $CurrentForm->getValue("tgl06") : $CurrentForm->getValue("x_tgl06");
		if (!$this->tgl06->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl06->Visible = FALSE; // Disable update for API request
			else
				$this->tgl06->setFormValue($val);
			$this->tgl06->CurrentValue = UnFormatDateTime($this->tgl06->CurrentValue, 7);
		}

		// Check field name 'byr07' first before field var 'x_byr07'
		$val = $CurrentForm->hasValue("byr07") ? $CurrentForm->getValue("byr07") : $CurrentForm->getValue("x_byr07");
		if (!$this->byr07->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr07->Visible = FALSE; // Disable update for API request
			else
				$this->byr07->setFormValue($val);
		}

		// Check field name 'jml07' first before field var 'x_jml07'
		$val = $CurrentForm->hasValue("jml07") ? $CurrentForm->getValue("jml07") : $CurrentForm->getValue("x_jml07");
		if (!$this->jml07->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml07->Visible = FALSE; // Disable update for API request
			else
				$this->jml07->setFormValue($val);
		}

		// Check field name 'tgl07' first before field var 'x_tgl07'
		$val = $CurrentForm->hasValue("tgl07") ? $CurrentForm->getValue("tgl07") : $CurrentForm->getValue("x_tgl07");
		if (!$this->tgl07->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl07->Visible = FALSE; // Disable update for API request
			else
				$this->tgl07->setFormValue($val);
			$this->tgl07->CurrentValue = UnFormatDateTime($this->tgl07->CurrentValue, 7);
		}

		// Check field name 'byr08' first before field var 'x_byr08'
		$val = $CurrentForm->hasValue("byr08") ? $CurrentForm->getValue("byr08") : $CurrentForm->getValue("x_byr08");
		if (!$this->byr08->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr08->Visible = FALSE; // Disable update for API request
			else
				$this->byr08->setFormValue($val);
		}

		// Check field name 'jml08' first before field var 'x_jml08'
		$val = $CurrentForm->hasValue("jml08") ? $CurrentForm->getValue("jml08") : $CurrentForm->getValue("x_jml08");
		if (!$this->jml08->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml08->Visible = FALSE; // Disable update for API request
			else
				$this->jml08->setFormValue($val);
		}

		// Check field name 'tgl08' first before field var 'x_tgl08'
		$val = $CurrentForm->hasValue("tgl08") ? $CurrentForm->getValue("tgl08") : $CurrentForm->getValue("x_tgl08");
		if (!$this->tgl08->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl08->Visible = FALSE; // Disable update for API request
			else
				$this->tgl08->setFormValue($val);
			$this->tgl08->CurrentValue = UnFormatDateTime($this->tgl08->CurrentValue, 7);
		}

		// Check field name 'byr09' first before field var 'x_byr09'
		$val = $CurrentForm->hasValue("byr09") ? $CurrentForm->getValue("byr09") : $CurrentForm->getValue("x_byr09");
		if (!$this->byr09->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr09->Visible = FALSE; // Disable update for API request
			else
				$this->byr09->setFormValue($val);
		}

		// Check field name 'jml09' first before field var 'x_jml09'
		$val = $CurrentForm->hasValue("jml09") ? $CurrentForm->getValue("jml09") : $CurrentForm->getValue("x_jml09");
		if (!$this->jml09->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml09->Visible = FALSE; // Disable update for API request
			else
				$this->jml09->setFormValue($val);
		}

		// Check field name 'tgl09' first before field var 'x_tgl09'
		$val = $CurrentForm->hasValue("tgl09") ? $CurrentForm->getValue("tgl09") : $CurrentForm->getValue("x_tgl09");
		if (!$this->tgl09->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl09->Visible = FALSE; // Disable update for API request
			else
				$this->tgl09->setFormValue($val);
			$this->tgl09->CurrentValue = UnFormatDateTime($this->tgl09->CurrentValue, 7);
		}

		// Check field name 'byr10' first before field var 'x_byr10'
		$val = $CurrentForm->hasValue("byr10") ? $CurrentForm->getValue("byr10") : $CurrentForm->getValue("x_byr10");
		if (!$this->byr10->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr10->Visible = FALSE; // Disable update for API request
			else
				$this->byr10->setFormValue($val);
		}

		// Check field name 'jml10' first before field var 'x_jml10'
		$val = $CurrentForm->hasValue("jml10") ? $CurrentForm->getValue("jml10") : $CurrentForm->getValue("x_jml10");
		if (!$this->jml10->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml10->Visible = FALSE; // Disable update for API request
			else
				$this->jml10->setFormValue($val);
		}

		// Check field name 'tgl10' first before field var 'x_tgl10'
		$val = $CurrentForm->hasValue("tgl10") ? $CurrentForm->getValue("tgl10") : $CurrentForm->getValue("x_tgl10");
		if (!$this->tgl10->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl10->Visible = FALSE; // Disable update for API request
			else
				$this->tgl10->setFormValue($val);
			$this->tgl10->CurrentValue = UnFormatDateTime($this->tgl10->CurrentValue, 7);
		}

		// Check field name 'byr11' first before field var 'x_byr11'
		$val = $CurrentForm->hasValue("byr11") ? $CurrentForm->getValue("byr11") : $CurrentForm->getValue("x_byr11");
		if (!$this->byr11->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr11->Visible = FALSE; // Disable update for API request
			else
				$this->byr11->setFormValue($val);
		}

		// Check field name 'jml11' first before field var 'x_jml11'
		$val = $CurrentForm->hasValue("jml11") ? $CurrentForm->getValue("jml11") : $CurrentForm->getValue("x_jml11");
		if (!$this->jml11->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml11->Visible = FALSE; // Disable update for API request
			else
				$this->jml11->setFormValue($val);
		}

		// Check field name 'tgl11' first before field var 'x_tgl11'
		$val = $CurrentForm->hasValue("tgl11") ? $CurrentForm->getValue("tgl11") : $CurrentForm->getValue("x_tgl11");
		if (!$this->tgl11->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl11->Visible = FALSE; // Disable update for API request
			else
				$this->tgl11->setFormValue($val);
			$this->tgl11->CurrentValue = UnFormatDateTime($this->tgl11->CurrentValue, 7);
		}

		// Check field name 'byr12' first before field var 'x_byr12'
		$val = $CurrentForm->hasValue("byr12") ? $CurrentForm->getValue("byr12") : $CurrentForm->getValue("x_byr12");
		if (!$this->byr12->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->byr12->Visible = FALSE; // Disable update for API request
			else
				$this->byr12->setFormValue($val);
		}

		// Check field name 'jml12' first before field var 'x_jml12'
		$val = $CurrentForm->hasValue("jml12") ? $CurrentForm->getValue("jml12") : $CurrentForm->getValue("x_jml12");
		if (!$this->jml12->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->jml12->Visible = FALSE; // Disable update for API request
			else
				$this->jml12->setFormValue($val);
		}

		// Check field name 'tgl12' first before field var 'x_tgl12'
		$val = $CurrentForm->hasValue("tgl12") ? $CurrentForm->getValue("tgl12") : $CurrentForm->getValue("x_tgl12");
		if (!$this->tgl12->IsDetailKey) {
			if (IsApi() && $val == NULL)
				$this->tgl12->Visible = FALSE; // Disable update for API request
			else
				$this->tgl12->setFormValue($val);
			$this->tgl12->CurrentValue = UnFormatDateTime($this->tgl12->CurrentValue, 7);
		}

		// Check field name 'id' first before field var 'x_id'
		$val = $CurrentForm->hasValue("id") ? $CurrentForm->getValue("id") : $CurrentForm->getValue("x_id");
		if (!$this->id->IsDetailKey)
			$this->id->setFormValue($val);
	}

	// Restore form values
	public function restoreFormValues()
	{
		global $CurrentForm;
		$this->id->CurrentValue = $this->id->FormValue;
		$this->iuran_id->CurrentValue = $this->iuran_id->FormValue;
		$this->Jumlah->CurrentValue = $this->Jumlah->FormValue;
		$this->byr01->CurrentValue = $this->byr01->FormValue;
		$this->jml01->CurrentValue = $this->jml01->FormValue;
		$this->tgl01->CurrentValue = $this->tgl01->FormValue;
		$this->tgl01->CurrentValue = UnFormatDateTime($this->tgl01->CurrentValue, 7);
		$this->byr02->CurrentValue = $this->byr02->FormValue;
		$this->jml02->CurrentValue = $this->jml02->FormValue;
		$this->tgl02->CurrentValue = $this->tgl02->FormValue;
		$this->tgl02->CurrentValue = UnFormatDateTime($this->tgl02->CurrentValue, 7);
		$this->byr03->CurrentValue = $this->byr03->FormValue;
		$this->jml03->CurrentValue = $this->jml03->FormValue;
		$this->tgl03->CurrentValue = $this->tgl03->FormValue;
		$this->tgl03->CurrentValue = UnFormatDateTime($this->tgl03->CurrentValue, 7);
		$this->byr04->CurrentValue = $this->byr04->FormValue;
		$this->jml04->CurrentValue = $this->jml04->FormValue;
		$this->tgl04->CurrentValue = $this->tgl04->FormValue;
		$this->tgl04->CurrentValue = UnFormatDateTime($this->tgl04->CurrentValue, 7);
		$this->byr05->CurrentValue = $this->byr05->FormValue;
		$this->jml05->CurrentValue = $this->jml05->FormValue;
		$this->tgl05->CurrentValue = $this->tgl05->FormValue;
		$this->tgl05->CurrentValue = UnFormatDateTime($this->tgl05->CurrentValue, 7);
		$this->byr06->CurrentValue = $this->byr06->FormValue;
		$this->jml06->CurrentValue = $this->jml06->FormValue;
		$this->tgl06->CurrentValue = $this->tgl06->FormValue;
		$this->tgl06->CurrentValue = UnFormatDateTime($this->tgl06->CurrentValue, 7);
		$this->byr07->CurrentValue = $this->byr07->FormValue;
		$this->jml07->CurrentValue = $this->jml07->FormValue;
		$this->tgl07->CurrentValue = $this->tgl07->FormValue;
		$this->tgl07->CurrentValue = UnFormatDateTime($this->tgl07->CurrentValue, 7);
		$this->byr08->CurrentValue = $this->byr08->FormValue;
		$this->jml08->CurrentValue = $this->jml08->FormValue;
		$this->tgl08->CurrentValue = $this->tgl08->FormValue;
		$this->tgl08->CurrentValue = UnFormatDateTime($this->tgl08->CurrentValue, 7);
		$this->byr09->CurrentValue = $this->byr09->FormValue;
		$this->jml09->CurrentValue = $this->jml09->FormValue;
		$this->tgl09->CurrentValue = $this->tgl09->FormValue;
		$this->tgl09->CurrentValue = UnFormatDateTime($this->tgl09->CurrentValue, 7);
		$this->byr10->CurrentValue = $this->byr10->FormValue;
		$this->jml10->CurrentValue = $this->jml10->FormValue;
		$this->tgl10->CurrentValue = $this->tgl10->FormValue;
		$this->tgl10->CurrentValue = UnFormatDateTime($this->tgl10->CurrentValue, 7);
		$this->byr11->CurrentValue = $this->byr11->FormValue;
		$this->jml11->CurrentValue = $this->jml11->FormValue;
		$this->tgl11->CurrentValue = $this->tgl11->FormValue;
		$this->tgl11->CurrentValue = UnFormatDateTime($this->tgl11->CurrentValue, 7);
		$this->byr12->CurrentValue = $this->byr12->FormValue;
		$this->jml12->CurrentValue = $this->jml12->FormValue;
		$this->tgl12->CurrentValue = $this->tgl12->FormValue;
		$this->tgl12->CurrentValue = UnFormatDateTime($this->tgl12->CurrentValue, 7);
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

	// Load old record
	protected function loadOldRecord()
	{

		// Load key values from Session
		$validKey = TRUE;
		if (strval($this->getKey("id")) <> "")
			$this->id->CurrentValue = $this->getKey("id"); // id
		else
			$validKey = FALSE;

		// Load old record
		$this->OldRecordset = NULL;
		if ($validKey) {
			$this->CurrentFilter = $this->getRecordFilter();
			$sql = $this->getCurrentSql();
			$conn = &$this->getConnection();
			$this->OldRecordset = LoadRecordset($sql, $conn);
		}
		$this->loadRowValues($this->OldRecordset); // Load row values
		return $validKey;
	}

	// Render row values based on field settings
	public function renderRow()
	{
		global $Security, $Language, $CurrentLanguage;

		// Initialize URLs
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
		} elseif ($this->RowType == ROWTYPE_EDIT) { // Edit row

			// iuran_id
			$this->iuran_id->EditAttrs["class"] = "form-control";
			$this->iuran_id->EditCustomAttributes = "";
			$curVal = trim(strval($this->iuran_id->CurrentValue));
			if ($curVal <> "")
				$this->iuran_id->ViewValue = $this->iuran_id->lookupCacheOption($curVal);
			else
				$this->iuran_id->ViewValue = $this->iuran_id->Lookup !== NULL && is_array($this->iuran_id->Lookup->Options) ? $curVal : NULL;
			if ($this->iuran_id->ViewValue !== NULL) { // Load from cache
				$this->iuran_id->EditValue = array_values($this->iuran_id->Lookup->Options);
			} else { // Lookup from database
				if ($curVal == "") {
					$filterWrk = "0=1";
				} else {
					$filterWrk = "`id`" . SearchString("=", $this->iuran_id->CurrentValue, DATATYPE_NUMBER, "");
				}
				$sqlWrk = $this->iuran_id->Lookup->getSql(TRUE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				$arwrk = ($rswrk) ? $rswrk->GetRows() : array();
				if ($rswrk) $rswrk->Close();
				$this->iuran_id->EditValue = $arwrk;
			}

			// Jumlah
			$this->Jumlah->EditAttrs["class"] = "form-control";
			$this->Jumlah->EditCustomAttributes = "";
			$this->Jumlah->EditValue = HtmlEncode($this->Jumlah->CurrentValue);
			$this->Jumlah->PlaceHolder = RemoveHtml($this->Jumlah->caption());
			if (strval($this->Jumlah->EditValue) <> "" && is_numeric($this->Jumlah->EditValue))
				$this->Jumlah->EditValue = FormatNumber($this->Jumlah->EditValue, -2, -2, -2, -2);

			// byr01
			$this->byr01->EditCustomAttributes = "";
			$this->byr01->EditValue = $this->byr01->options(FALSE);

			// jml01
			$this->jml01->EditAttrs["class"] = "form-control";
			$this->jml01->EditCustomAttributes = "";
			$this->jml01->EditValue = HtmlEncode($this->jml01->CurrentValue);
			$this->jml01->PlaceHolder = RemoveHtml($this->jml01->caption());
			if (strval($this->jml01->EditValue) <> "" && is_numeric($this->jml01->EditValue))
				$this->jml01->EditValue = FormatNumber($this->jml01->EditValue, -2, -2, -2, -2);

			// tgl01
			$this->tgl01->EditAttrs["class"] = "form-control";
			$this->tgl01->EditCustomAttributes = "";
			$this->tgl01->EditValue = HtmlEncode(FormatDateTime($this->tgl01->CurrentValue, 7));
			$this->tgl01->PlaceHolder = RemoveHtml($this->tgl01->caption());

			// byr02
			$this->byr02->EditCustomAttributes = "";
			$this->byr02->EditValue = $this->byr02->options(FALSE);

			// jml02
			$this->jml02->EditAttrs["class"] = "form-control";
			$this->jml02->EditCustomAttributes = "";
			$this->jml02->EditValue = HtmlEncode($this->jml02->CurrentValue);
			$this->jml02->PlaceHolder = RemoveHtml($this->jml02->caption());
			if (strval($this->jml02->EditValue) <> "" && is_numeric($this->jml02->EditValue))
				$this->jml02->EditValue = FormatNumber($this->jml02->EditValue, -2, -2, -2, -2);

			// tgl02
			$this->tgl02->EditAttrs["class"] = "form-control";
			$this->tgl02->EditCustomAttributes = "";
			$this->tgl02->EditValue = HtmlEncode(FormatDateTime($this->tgl02->CurrentValue, 7));
			$this->tgl02->PlaceHolder = RemoveHtml($this->tgl02->caption());

			// byr03
			$this->byr03->EditCustomAttributes = "";
			$this->byr03->EditValue = $this->byr03->options(FALSE);

			// jml03
			$this->jml03->EditAttrs["class"] = "form-control";
			$this->jml03->EditCustomAttributes = "";
			$this->jml03->EditValue = HtmlEncode($this->jml03->CurrentValue);
			$this->jml03->PlaceHolder = RemoveHtml($this->jml03->caption());
			if (strval($this->jml03->EditValue) <> "" && is_numeric($this->jml03->EditValue))
				$this->jml03->EditValue = FormatNumber($this->jml03->EditValue, -2, -2, -2, -2);

			// tgl03
			$this->tgl03->EditAttrs["class"] = "form-control";
			$this->tgl03->EditCustomAttributes = "";
			$this->tgl03->EditValue = HtmlEncode(FormatDateTime($this->tgl03->CurrentValue, 7));
			$this->tgl03->PlaceHolder = RemoveHtml($this->tgl03->caption());

			// byr04
			$this->byr04->EditCustomAttributes = "";
			$this->byr04->EditValue = $this->byr04->options(FALSE);

			// jml04
			$this->jml04->EditAttrs["class"] = "form-control";
			$this->jml04->EditCustomAttributes = "";
			$this->jml04->EditValue = HtmlEncode($this->jml04->CurrentValue);
			$this->jml04->PlaceHolder = RemoveHtml($this->jml04->caption());
			if (strval($this->jml04->EditValue) <> "" && is_numeric($this->jml04->EditValue))
				$this->jml04->EditValue = FormatNumber($this->jml04->EditValue, -2, -2, -2, -2);

			// tgl04
			$this->tgl04->EditAttrs["class"] = "form-control";
			$this->tgl04->EditCustomAttributes = "";
			$this->tgl04->EditValue = HtmlEncode(FormatDateTime($this->tgl04->CurrentValue, 7));
			$this->tgl04->PlaceHolder = RemoveHtml($this->tgl04->caption());

			// byr05
			$this->byr05->EditCustomAttributes = "";
			$this->byr05->EditValue = $this->byr05->options(FALSE);

			// jml05
			$this->jml05->EditAttrs["class"] = "form-control";
			$this->jml05->EditCustomAttributes = "";
			$this->jml05->EditValue = HtmlEncode($this->jml05->CurrentValue);
			$this->jml05->PlaceHolder = RemoveHtml($this->jml05->caption());
			if (strval($this->jml05->EditValue) <> "" && is_numeric($this->jml05->EditValue))
				$this->jml05->EditValue = FormatNumber($this->jml05->EditValue, -2, -2, -2, -2);

			// tgl05
			$this->tgl05->EditAttrs["class"] = "form-control";
			$this->tgl05->EditCustomAttributes = "";
			$this->tgl05->EditValue = HtmlEncode(FormatDateTime($this->tgl05->CurrentValue, 7));
			$this->tgl05->PlaceHolder = RemoveHtml($this->tgl05->caption());

			// byr06
			$this->byr06->EditCustomAttributes = "";
			$this->byr06->EditValue = $this->byr06->options(FALSE);

			// jml06
			$this->jml06->EditAttrs["class"] = "form-control";
			$this->jml06->EditCustomAttributes = "";
			$this->jml06->EditValue = HtmlEncode($this->jml06->CurrentValue);
			$this->jml06->PlaceHolder = RemoveHtml($this->jml06->caption());
			if (strval($this->jml06->EditValue) <> "" && is_numeric($this->jml06->EditValue))
				$this->jml06->EditValue = FormatNumber($this->jml06->EditValue, -2, -2, -2, -2);

			// tgl06
			$this->tgl06->EditAttrs["class"] = "form-control";
			$this->tgl06->EditCustomAttributes = "";
			$this->tgl06->EditValue = HtmlEncode(FormatDateTime($this->tgl06->CurrentValue, 7));
			$this->tgl06->PlaceHolder = RemoveHtml($this->tgl06->caption());

			// byr07
			$this->byr07->EditCustomAttributes = "";
			$this->byr07->EditValue = $this->byr07->options(FALSE);

			// jml07
			$this->jml07->EditAttrs["class"] = "form-control";
			$this->jml07->EditCustomAttributes = "";
			$this->jml07->EditValue = HtmlEncode($this->jml07->CurrentValue);
			$this->jml07->PlaceHolder = RemoveHtml($this->jml07->caption());
			if (strval($this->jml07->EditValue) <> "" && is_numeric($this->jml07->EditValue))
				$this->jml07->EditValue = FormatNumber($this->jml07->EditValue, -2, -2, -2, -2);

			// tgl07
			$this->tgl07->EditAttrs["class"] = "form-control";
			$this->tgl07->EditCustomAttributes = "";
			$this->tgl07->EditValue = HtmlEncode(FormatDateTime($this->tgl07->CurrentValue, 7));
			$this->tgl07->PlaceHolder = RemoveHtml($this->tgl07->caption());

			// byr08
			$this->byr08->EditCustomAttributes = "";
			$this->byr08->EditValue = $this->byr08->options(FALSE);

			// jml08
			$this->jml08->EditAttrs["class"] = "form-control";
			$this->jml08->EditCustomAttributes = "";
			$this->jml08->EditValue = HtmlEncode($this->jml08->CurrentValue);
			$this->jml08->PlaceHolder = RemoveHtml($this->jml08->caption());
			if (strval($this->jml08->EditValue) <> "" && is_numeric($this->jml08->EditValue))
				$this->jml08->EditValue = FormatNumber($this->jml08->EditValue, -2, -2, -2, -2);

			// tgl08
			$this->tgl08->EditAttrs["class"] = "form-control";
			$this->tgl08->EditCustomAttributes = "";
			$this->tgl08->EditValue = HtmlEncode(FormatDateTime($this->tgl08->CurrentValue, 7));
			$this->tgl08->PlaceHolder = RemoveHtml($this->tgl08->caption());

			// byr09
			$this->byr09->EditCustomAttributes = "";
			$this->byr09->EditValue = $this->byr09->options(FALSE);

			// jml09
			$this->jml09->EditAttrs["class"] = "form-control";
			$this->jml09->EditCustomAttributes = "";
			$this->jml09->EditValue = HtmlEncode($this->jml09->CurrentValue);
			$this->jml09->PlaceHolder = RemoveHtml($this->jml09->caption());
			if (strval($this->jml09->EditValue) <> "" && is_numeric($this->jml09->EditValue))
				$this->jml09->EditValue = FormatNumber($this->jml09->EditValue, -2, -2, -2, -2);

			// tgl09
			$this->tgl09->EditAttrs["class"] = "form-control";
			$this->tgl09->EditCustomAttributes = "";
			$this->tgl09->EditValue = HtmlEncode(FormatDateTime($this->tgl09->CurrentValue, 7));
			$this->tgl09->PlaceHolder = RemoveHtml($this->tgl09->caption());

			// byr10
			$this->byr10->EditCustomAttributes = "";
			$this->byr10->EditValue = $this->byr10->options(FALSE);

			// jml10
			$this->jml10->EditAttrs["class"] = "form-control";
			$this->jml10->EditCustomAttributes = "";
			$this->jml10->EditValue = HtmlEncode($this->jml10->CurrentValue);
			$this->jml10->PlaceHolder = RemoveHtml($this->jml10->caption());
			if (strval($this->jml10->EditValue) <> "" && is_numeric($this->jml10->EditValue))
				$this->jml10->EditValue = FormatNumber($this->jml10->EditValue, -2, -2, -2, -2);

			// tgl10
			$this->tgl10->EditAttrs["class"] = "form-control";
			$this->tgl10->EditCustomAttributes = "";
			$this->tgl10->EditValue = HtmlEncode(FormatDateTime($this->tgl10->CurrentValue, 7));
			$this->tgl10->PlaceHolder = RemoveHtml($this->tgl10->caption());

			// byr11
			$this->byr11->EditCustomAttributes = "";
			$this->byr11->EditValue = $this->byr11->options(FALSE);

			// jml11
			$this->jml11->EditAttrs["class"] = "form-control";
			$this->jml11->EditCustomAttributes = "";
			$this->jml11->EditValue = HtmlEncode($this->jml11->CurrentValue);
			$this->jml11->PlaceHolder = RemoveHtml($this->jml11->caption());
			if (strval($this->jml11->EditValue) <> "" && is_numeric($this->jml11->EditValue))
				$this->jml11->EditValue = FormatNumber($this->jml11->EditValue, -2, -2, -2, -2);

			// tgl11
			$this->tgl11->EditAttrs["class"] = "form-control";
			$this->tgl11->EditCustomAttributes = "";
			$this->tgl11->EditValue = HtmlEncode(FormatDateTime($this->tgl11->CurrentValue, 7));
			$this->tgl11->PlaceHolder = RemoveHtml($this->tgl11->caption());

			// byr12
			$this->byr12->EditCustomAttributes = "";
			$this->byr12->EditValue = $this->byr12->options(FALSE);

			// jml12
			$this->jml12->EditAttrs["class"] = "form-control";
			$this->jml12->EditCustomAttributes = "";
			$this->jml12->EditValue = HtmlEncode($this->jml12->CurrentValue);
			$this->jml12->PlaceHolder = RemoveHtml($this->jml12->caption());
			if (strval($this->jml12->EditValue) <> "" && is_numeric($this->jml12->EditValue))
				$this->jml12->EditValue = FormatNumber($this->jml12->EditValue, -2, -2, -2, -2);

			// tgl12
			$this->tgl12->EditAttrs["class"] = "form-control";
			$this->tgl12->EditCustomAttributes = "";
			$this->tgl12->EditValue = HtmlEncode(FormatDateTime($this->tgl12->CurrentValue, 7));
			$this->tgl12->PlaceHolder = RemoveHtml($this->tgl12->caption());

			// Edit refer script
			// iuran_id

			$this->iuran_id->LinkCustomAttributes = "";
			$this->iuran_id->HrefValue = "";

			// Jumlah
			$this->Jumlah->LinkCustomAttributes = "";
			$this->Jumlah->HrefValue = "";

			// byr01
			$this->byr01->LinkCustomAttributes = "";
			$this->byr01->HrefValue = "";

			// jml01
			$this->jml01->LinkCustomAttributes = "";
			$this->jml01->HrefValue = "";

			// tgl01
			$this->tgl01->LinkCustomAttributes = "";
			$this->tgl01->HrefValue = "";

			// byr02
			$this->byr02->LinkCustomAttributes = "";
			$this->byr02->HrefValue = "";

			// jml02
			$this->jml02->LinkCustomAttributes = "";
			$this->jml02->HrefValue = "";

			// tgl02
			$this->tgl02->LinkCustomAttributes = "";
			$this->tgl02->HrefValue = "";

			// byr03
			$this->byr03->LinkCustomAttributes = "";
			$this->byr03->HrefValue = "";

			// jml03
			$this->jml03->LinkCustomAttributes = "";
			$this->jml03->HrefValue = "";

			// tgl03
			$this->tgl03->LinkCustomAttributes = "";
			$this->tgl03->HrefValue = "";

			// byr04
			$this->byr04->LinkCustomAttributes = "";
			$this->byr04->HrefValue = "";

			// jml04
			$this->jml04->LinkCustomAttributes = "";
			$this->jml04->HrefValue = "";

			// tgl04
			$this->tgl04->LinkCustomAttributes = "";
			$this->tgl04->HrefValue = "";

			// byr05
			$this->byr05->LinkCustomAttributes = "";
			$this->byr05->HrefValue = "";

			// jml05
			$this->jml05->LinkCustomAttributes = "";
			$this->jml05->HrefValue = "";

			// tgl05
			$this->tgl05->LinkCustomAttributes = "";
			$this->tgl05->HrefValue = "";

			// byr06
			$this->byr06->LinkCustomAttributes = "";
			$this->byr06->HrefValue = "";

			// jml06
			$this->jml06->LinkCustomAttributes = "";
			$this->jml06->HrefValue = "";

			// tgl06
			$this->tgl06->LinkCustomAttributes = "";
			$this->tgl06->HrefValue = "";

			// byr07
			$this->byr07->LinkCustomAttributes = "";
			$this->byr07->HrefValue = "";

			// jml07
			$this->jml07->LinkCustomAttributes = "";
			$this->jml07->HrefValue = "";

			// tgl07
			$this->tgl07->LinkCustomAttributes = "";
			$this->tgl07->HrefValue = "";

			// byr08
			$this->byr08->LinkCustomAttributes = "";
			$this->byr08->HrefValue = "";

			// jml08
			$this->jml08->LinkCustomAttributes = "";
			$this->jml08->HrefValue = "";

			// tgl08
			$this->tgl08->LinkCustomAttributes = "";
			$this->tgl08->HrefValue = "";

			// byr09
			$this->byr09->LinkCustomAttributes = "";
			$this->byr09->HrefValue = "";

			// jml09
			$this->jml09->LinkCustomAttributes = "";
			$this->jml09->HrefValue = "";

			// tgl09
			$this->tgl09->LinkCustomAttributes = "";
			$this->tgl09->HrefValue = "";

			// byr10
			$this->byr10->LinkCustomAttributes = "";
			$this->byr10->HrefValue = "";

			// jml10
			$this->jml10->LinkCustomAttributes = "";
			$this->jml10->HrefValue = "";

			// tgl10
			$this->tgl10->LinkCustomAttributes = "";
			$this->tgl10->HrefValue = "";

			// byr11
			$this->byr11->LinkCustomAttributes = "";
			$this->byr11->HrefValue = "";

			// jml11
			$this->jml11->LinkCustomAttributes = "";
			$this->jml11->HrefValue = "";

			// tgl11
			$this->tgl11->LinkCustomAttributes = "";
			$this->tgl11->HrefValue = "";

			// byr12
			$this->byr12->LinkCustomAttributes = "";
			$this->byr12->HrefValue = "";

			// jml12
			$this->jml12->LinkCustomAttributes = "";
			$this->jml12->HrefValue = "";

			// tgl12
			$this->tgl12->LinkCustomAttributes = "";
			$this->tgl12->HrefValue = "";
		}
		if ($this->RowType == ROWTYPE_ADD || $this->RowType == ROWTYPE_EDIT || $this->RowType == ROWTYPE_SEARCH) // Add/Edit/Search row
			$this->setupFieldTitles();

		// Call Row Rendered event
		if ($this->RowType <> ROWTYPE_AGGREGATEINIT)
			$this->Row_Rendered();
	}

	// Validate form
	protected function validateForm()
	{
		global $Language, $FormError;

		// Initialize form error message
		$FormError = "";

		// Check if validation required
		if (!SERVER_VALIDATE)
			return ($FormError == "");
		if ($this->id->Required) {
			if (!$this->id->IsDetailKey && $this->id->FormValue != NULL && $this->id->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->id->caption(), $this->id->RequiredErrorMessage));
			}
		}
		if ($this->daf_kelas_siswa_id->Required) {
			if (!$this->daf_kelas_siswa_id->IsDetailKey && $this->daf_kelas_siswa_id->FormValue != NULL && $this->daf_kelas_siswa_id->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->daf_kelas_siswa_id->caption(), $this->daf_kelas_siswa_id->RequiredErrorMessage));
			}
		}
		if ($this->iuran_id->Required) {
			if (!$this->iuran_id->IsDetailKey && $this->iuran_id->FormValue != NULL && $this->iuran_id->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->iuran_id->caption(), $this->iuran_id->RequiredErrorMessage));
			}
		}
		if ($this->Jumlah->Required) {
			if (!$this->Jumlah->IsDetailKey && $this->Jumlah->FormValue != NULL && $this->Jumlah->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->Jumlah->caption(), $this->Jumlah->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->Jumlah->FormValue)) {
			AddMessage($FormError, $this->Jumlah->errorMessage());
		}
		if ($this->byr01->Required) {
			if ($this->byr01->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr01->caption(), $this->byr01->RequiredErrorMessage));
			}
		}
		if ($this->jml01->Required) {
			if (!$this->jml01->IsDetailKey && $this->jml01->FormValue != NULL && $this->jml01->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml01->caption(), $this->jml01->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml01->FormValue)) {
			AddMessage($FormError, $this->jml01->errorMessage());
		}
		if ($this->tgl01->Required) {
			if (!$this->tgl01->IsDetailKey && $this->tgl01->FormValue != NULL && $this->tgl01->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl01->caption(), $this->tgl01->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl01->FormValue)) {
			AddMessage($FormError, $this->tgl01->errorMessage());
		}
		if ($this->byr02->Required) {
			if ($this->byr02->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr02->caption(), $this->byr02->RequiredErrorMessage));
			}
		}
		if ($this->jml02->Required) {
			if (!$this->jml02->IsDetailKey && $this->jml02->FormValue != NULL && $this->jml02->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml02->caption(), $this->jml02->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml02->FormValue)) {
			AddMessage($FormError, $this->jml02->errorMessage());
		}
		if ($this->tgl02->Required) {
			if (!$this->tgl02->IsDetailKey && $this->tgl02->FormValue != NULL && $this->tgl02->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl02->caption(), $this->tgl02->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl02->FormValue)) {
			AddMessage($FormError, $this->tgl02->errorMessage());
		}
		if ($this->byr03->Required) {
			if ($this->byr03->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr03->caption(), $this->byr03->RequiredErrorMessage));
			}
		}
		if ($this->jml03->Required) {
			if (!$this->jml03->IsDetailKey && $this->jml03->FormValue != NULL && $this->jml03->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml03->caption(), $this->jml03->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml03->FormValue)) {
			AddMessage($FormError, $this->jml03->errorMessage());
		}
		if ($this->tgl03->Required) {
			if (!$this->tgl03->IsDetailKey && $this->tgl03->FormValue != NULL && $this->tgl03->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl03->caption(), $this->tgl03->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl03->FormValue)) {
			AddMessage($FormError, $this->tgl03->errorMessage());
		}
		if ($this->byr04->Required) {
			if ($this->byr04->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr04->caption(), $this->byr04->RequiredErrorMessage));
			}
		}
		if ($this->jml04->Required) {
			if (!$this->jml04->IsDetailKey && $this->jml04->FormValue != NULL && $this->jml04->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml04->caption(), $this->jml04->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml04->FormValue)) {
			AddMessage($FormError, $this->jml04->errorMessage());
		}
		if ($this->tgl04->Required) {
			if (!$this->tgl04->IsDetailKey && $this->tgl04->FormValue != NULL && $this->tgl04->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl04->caption(), $this->tgl04->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl04->FormValue)) {
			AddMessage($FormError, $this->tgl04->errorMessage());
		}
		if ($this->byr05->Required) {
			if ($this->byr05->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr05->caption(), $this->byr05->RequiredErrorMessage));
			}
		}
		if ($this->jml05->Required) {
			if (!$this->jml05->IsDetailKey && $this->jml05->FormValue != NULL && $this->jml05->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml05->caption(), $this->jml05->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml05->FormValue)) {
			AddMessage($FormError, $this->jml05->errorMessage());
		}
		if ($this->tgl05->Required) {
			if (!$this->tgl05->IsDetailKey && $this->tgl05->FormValue != NULL && $this->tgl05->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl05->caption(), $this->tgl05->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl05->FormValue)) {
			AddMessage($FormError, $this->tgl05->errorMessage());
		}
		if ($this->byr06->Required) {
			if ($this->byr06->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr06->caption(), $this->byr06->RequiredErrorMessage));
			}
		}
		if ($this->jml06->Required) {
			if (!$this->jml06->IsDetailKey && $this->jml06->FormValue != NULL && $this->jml06->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml06->caption(), $this->jml06->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml06->FormValue)) {
			AddMessage($FormError, $this->jml06->errorMessage());
		}
		if ($this->tgl06->Required) {
			if (!$this->tgl06->IsDetailKey && $this->tgl06->FormValue != NULL && $this->tgl06->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl06->caption(), $this->tgl06->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl06->FormValue)) {
			AddMessage($FormError, $this->tgl06->errorMessage());
		}
		if ($this->byr07->Required) {
			if ($this->byr07->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr07->caption(), $this->byr07->RequiredErrorMessage));
			}
		}
		if ($this->jml07->Required) {
			if (!$this->jml07->IsDetailKey && $this->jml07->FormValue != NULL && $this->jml07->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml07->caption(), $this->jml07->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml07->FormValue)) {
			AddMessage($FormError, $this->jml07->errorMessage());
		}
		if ($this->tgl07->Required) {
			if (!$this->tgl07->IsDetailKey && $this->tgl07->FormValue != NULL && $this->tgl07->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl07->caption(), $this->tgl07->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl07->FormValue)) {
			AddMessage($FormError, $this->tgl07->errorMessage());
		}
		if ($this->byr08->Required) {
			if ($this->byr08->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr08->caption(), $this->byr08->RequiredErrorMessage));
			}
		}
		if ($this->jml08->Required) {
			if (!$this->jml08->IsDetailKey && $this->jml08->FormValue != NULL && $this->jml08->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml08->caption(), $this->jml08->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml08->FormValue)) {
			AddMessage($FormError, $this->jml08->errorMessage());
		}
		if ($this->tgl08->Required) {
			if (!$this->tgl08->IsDetailKey && $this->tgl08->FormValue != NULL && $this->tgl08->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl08->caption(), $this->tgl08->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl08->FormValue)) {
			AddMessage($FormError, $this->tgl08->errorMessage());
		}
		if ($this->byr09->Required) {
			if ($this->byr09->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr09->caption(), $this->byr09->RequiredErrorMessage));
			}
		}
		if ($this->jml09->Required) {
			if (!$this->jml09->IsDetailKey && $this->jml09->FormValue != NULL && $this->jml09->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml09->caption(), $this->jml09->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml09->FormValue)) {
			AddMessage($FormError, $this->jml09->errorMessage());
		}
		if ($this->tgl09->Required) {
			if (!$this->tgl09->IsDetailKey && $this->tgl09->FormValue != NULL && $this->tgl09->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl09->caption(), $this->tgl09->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl09->FormValue)) {
			AddMessage($FormError, $this->tgl09->errorMessage());
		}
		if ($this->byr10->Required) {
			if ($this->byr10->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr10->caption(), $this->byr10->RequiredErrorMessage));
			}
		}
		if ($this->jml10->Required) {
			if (!$this->jml10->IsDetailKey && $this->jml10->FormValue != NULL && $this->jml10->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml10->caption(), $this->jml10->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml10->FormValue)) {
			AddMessage($FormError, $this->jml10->errorMessage());
		}
		if ($this->tgl10->Required) {
			if (!$this->tgl10->IsDetailKey && $this->tgl10->FormValue != NULL && $this->tgl10->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl10->caption(), $this->tgl10->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl10->FormValue)) {
			AddMessage($FormError, $this->tgl10->errorMessage());
		}
		if ($this->byr11->Required) {
			if ($this->byr11->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr11->caption(), $this->byr11->RequiredErrorMessage));
			}
		}
		if ($this->jml11->Required) {
			if (!$this->jml11->IsDetailKey && $this->jml11->FormValue != NULL && $this->jml11->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml11->caption(), $this->jml11->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml11->FormValue)) {
			AddMessage($FormError, $this->jml11->errorMessage());
		}
		if ($this->tgl11->Required) {
			if (!$this->tgl11->IsDetailKey && $this->tgl11->FormValue != NULL && $this->tgl11->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl11->caption(), $this->tgl11->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl11->FormValue)) {
			AddMessage($FormError, $this->tgl11->errorMessage());
		}
		if ($this->byr12->Required) {
			if ($this->byr12->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->byr12->caption(), $this->byr12->RequiredErrorMessage));
			}
		}
		if ($this->jml12->Required) {
			if (!$this->jml12->IsDetailKey && $this->jml12->FormValue != NULL && $this->jml12->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->jml12->caption(), $this->jml12->RequiredErrorMessage));
			}
		}
		if (!CheckNumber($this->jml12->FormValue)) {
			AddMessage($FormError, $this->jml12->errorMessage());
		}
		if ($this->tgl12->Required) {
			if (!$this->tgl12->IsDetailKey && $this->tgl12->FormValue != NULL && $this->tgl12->FormValue == "") {
				AddMessage($FormError, str_replace("%s", $this->tgl12->caption(), $this->tgl12->RequiredErrorMessage));
			}
		}
		if (!CheckEuroDate($this->tgl12->FormValue)) {
			AddMessage($FormError, $this->tgl12->errorMessage());
		}

		// Return validate result
		$validateForm = ($FormError == "");

		// Call Form_CustomValidate event
		$formCustomError = "";
		$validateForm = $validateForm && $this->Form_CustomValidate($formCustomError);
		if ($formCustomError <> "") {
			AddMessage($FormError, $formCustomError);
		}
		return $validateForm;
	}

	// Update record based on key values
	protected function editRow()
	{
		global $Security, $Language;
		$filter = $this->getRecordFilter();
		$filter = $this->applyUserIDFilters($filter);
		$conn = &$this->getConnection();
		$this->CurrentFilter = $filter;
		$sql = $this->getCurrentSql();
		$conn->raiseErrorFn = $GLOBALS["ERROR_FUNC"];
		$rs = $conn->execute($sql);
		$conn->raiseErrorFn = '';
		if ($rs === FALSE)
			return FALSE;
		if ($rs->EOF) {
			$this->setFailureMessage($Language->phrase("NoRecord")); // Set no record message
			$editRow = FALSE; // Update Failed
		} else {

			// Save old values
			$rsold = &$rs->fields;
			$this->loadDbValues($rsold);
			$rsnew = [];

			// iuran_id
			$this->iuran_id->setDbValueDef($rsnew, $this->iuran_id->CurrentValue, 0, $this->iuran_id->ReadOnly);

			// Jumlah
			$this->Jumlah->setDbValueDef($rsnew, $this->Jumlah->CurrentValue, 0, $this->Jumlah->ReadOnly);

			// byr01
			$tmpBool = $this->byr01->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr01->setDbValueDef($rsnew, $tmpBool, 0, $this->byr01->ReadOnly);

			// jml01
			$this->jml01->setDbValueDef($rsnew, $this->jml01->CurrentValue, 0, $this->jml01->ReadOnly);

			// tgl01
			$this->tgl01->setDbValueDef($rsnew, UnFormatDateTime($this->tgl01->CurrentValue, 7), NULL, $this->tgl01->ReadOnly);

			// byr02
			$tmpBool = $this->byr02->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr02->setDbValueDef($rsnew, $tmpBool, 0, $this->byr02->ReadOnly);

			// jml02
			$this->jml02->setDbValueDef($rsnew, $this->jml02->CurrentValue, 0, $this->jml02->ReadOnly);

			// tgl02
			$this->tgl02->setDbValueDef($rsnew, UnFormatDateTime($this->tgl02->CurrentValue, 7), NULL, $this->tgl02->ReadOnly);

			// byr03
			$tmpBool = $this->byr03->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr03->setDbValueDef($rsnew, $tmpBool, 0, $this->byr03->ReadOnly);

			// jml03
			$this->jml03->setDbValueDef($rsnew, $this->jml03->CurrentValue, 0, $this->jml03->ReadOnly);

			// tgl03
			$this->tgl03->setDbValueDef($rsnew, UnFormatDateTime($this->tgl03->CurrentValue, 7), NULL, $this->tgl03->ReadOnly);

			// byr04
			$tmpBool = $this->byr04->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr04->setDbValueDef($rsnew, $tmpBool, 0, $this->byr04->ReadOnly);

			// jml04
			$this->jml04->setDbValueDef($rsnew, $this->jml04->CurrentValue, 0, $this->jml04->ReadOnly);

			// tgl04
			$this->tgl04->setDbValueDef($rsnew, UnFormatDateTime($this->tgl04->CurrentValue, 7), NULL, $this->tgl04->ReadOnly);

			// byr05
			$tmpBool = $this->byr05->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr05->setDbValueDef($rsnew, $tmpBool, 0, $this->byr05->ReadOnly);

			// jml05
			$this->jml05->setDbValueDef($rsnew, $this->jml05->CurrentValue, 0, $this->jml05->ReadOnly);

			// tgl05
			$this->tgl05->setDbValueDef($rsnew, UnFormatDateTime($this->tgl05->CurrentValue, 7), NULL, $this->tgl05->ReadOnly);

			// byr06
			$tmpBool = $this->byr06->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr06->setDbValueDef($rsnew, $tmpBool, 0, $this->byr06->ReadOnly);

			// jml06
			$this->jml06->setDbValueDef($rsnew, $this->jml06->CurrentValue, 0, $this->jml06->ReadOnly);

			// tgl06
			$this->tgl06->setDbValueDef($rsnew, UnFormatDateTime($this->tgl06->CurrentValue, 7), NULL, $this->tgl06->ReadOnly);

			// byr07
			$tmpBool = $this->byr07->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr07->setDbValueDef($rsnew, $tmpBool, 0, $this->byr07->ReadOnly);

			// jml07
			$this->jml07->setDbValueDef($rsnew, $this->jml07->CurrentValue, 0, $this->jml07->ReadOnly);

			// tgl07
			$this->tgl07->setDbValueDef($rsnew, UnFormatDateTime($this->tgl07->CurrentValue, 7), NULL, $this->tgl07->ReadOnly);

			// byr08
			$tmpBool = $this->byr08->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr08->setDbValueDef($rsnew, $tmpBool, 0, $this->byr08->ReadOnly);

			// jml08
			$this->jml08->setDbValueDef($rsnew, $this->jml08->CurrentValue, 0, $this->jml08->ReadOnly);

			// tgl08
			$this->tgl08->setDbValueDef($rsnew, UnFormatDateTime($this->tgl08->CurrentValue, 7), NULL, $this->tgl08->ReadOnly);

			// byr09
			$tmpBool = $this->byr09->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr09->setDbValueDef($rsnew, $tmpBool, 0, $this->byr09->ReadOnly);

			// jml09
			$this->jml09->setDbValueDef($rsnew, $this->jml09->CurrentValue, 0, $this->jml09->ReadOnly);

			// tgl09
			$this->tgl09->setDbValueDef($rsnew, UnFormatDateTime($this->tgl09->CurrentValue, 7), NULL, $this->tgl09->ReadOnly);

			// byr10
			$tmpBool = $this->byr10->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr10->setDbValueDef($rsnew, $tmpBool, 0, $this->byr10->ReadOnly);

			// jml10
			$this->jml10->setDbValueDef($rsnew, $this->jml10->CurrentValue, 0, $this->jml10->ReadOnly);

			// tgl10
			$this->tgl10->setDbValueDef($rsnew, UnFormatDateTime($this->tgl10->CurrentValue, 7), NULL, $this->tgl10->ReadOnly);

			// byr11
			$tmpBool = $this->byr11->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr11->setDbValueDef($rsnew, $tmpBool, 0, $this->byr11->ReadOnly);

			// jml11
			$this->jml11->setDbValueDef($rsnew, $this->jml11->CurrentValue, 0, $this->jml11->ReadOnly);

			// tgl11
			$this->tgl11->setDbValueDef($rsnew, UnFormatDateTime($this->tgl11->CurrentValue, 7), NULL, $this->tgl11->ReadOnly);

			// byr12
			$tmpBool = $this->byr12->CurrentValue;
			if ($tmpBool <> "1" && $tmpBool <> "0")
				$tmpBool = !empty($tmpBool) ? "1" : "0";
			$this->byr12->setDbValueDef($rsnew, $tmpBool, 0, $this->byr12->ReadOnly);

			// jml12
			$this->jml12->setDbValueDef($rsnew, $this->jml12->CurrentValue, 0, $this->jml12->ReadOnly);

			// tgl12
			$this->tgl12->setDbValueDef($rsnew, UnFormatDateTime($this->tgl12->CurrentValue, 7), NULL, $this->tgl12->ReadOnly);

			// Check referential integrity for master table 'v102_daf_kelas_siswa'
			$validMasterRecord = TRUE;
			$masterFilter = $this->sqlMasterFilter_v102_daf_kelas_siswa();
			$keyValue = isset($rsnew['daf_kelas_siswa_id']) ? $rsnew['daf_kelas_siswa_id'] : $rsold['daf_kelas_siswa_id'];
			if (strval($keyValue) <> "") {
				$masterFilter = str_replace("@id@", AdjustSql($keyValue), $masterFilter);
			} else {
				$validMasterRecord = FALSE;
			}
			if ($validMasterRecord) {
				if (!isset($GLOBALS["v102_daf_kelas_siswa"]))
					$GLOBALS["v102_daf_kelas_siswa"] = new v102_daf_kelas_siswa();
				$rsmaster = $GLOBALS["v102_daf_kelas_siswa"]->loadRs($masterFilter);
				$validMasterRecord = ($rsmaster && !$rsmaster->EOF);
				$rsmaster->close();
			}
			if (!$validMasterRecord) {
				$relatedRecordMsg = str_replace("%t", "v102_daf_kelas_siswa", $Language->phrase("RelatedRecordRequired"));
				$this->setFailureMessage($relatedRecordMsg);
				$rs->close();
				return FALSE;
			}

			// Call Row Updating event
			$updateRow = $this->Row_Updating($rsold, $rsnew);
			if ($updateRow) {
				$conn->raiseErrorFn = $GLOBALS["ERROR_FUNC"];
				if (count($rsnew) > 0)
					$editRow = $this->update($rsnew, "", $rsold);
				else
					$editRow = TRUE; // No field to update
				$conn->raiseErrorFn = '';
				if ($editRow) {
				}
			} else {
				if ($this->getSuccessMessage() <> "" || $this->getFailureMessage() <> "") {

					// Use the message, do nothing
				} elseif ($this->CancelMessage <> "") {
					$this->setFailureMessage($this->CancelMessage);
					$this->CancelMessage = "";
				} else {
					$this->setFailureMessage($Language->phrase("UpdateCancelled"));
				}
				$editRow = FALSE;
			}
		}

		// Call Row_Updated event
		if ($editRow)
			$this->Row_Updated($rsold, $rsnew);
		$rs->close();

		// Write JSON for API request
		if (IsApi() && $editRow) {
			$row = $this->getRecordsFromRecordset([$rsnew], TRUE);
			WriteJson(["success" => TRUE, $this->TableVar => $row]);
		}
		return $editRow;
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
		$pageId = "edit";
		$Breadcrumb->add("edit", $pageId, $url);
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

	// Form Custom Validate event
	function Form_CustomValidate(&$customError) {

		// Return error message in CustomError
		return TRUE;
	}
}
?>