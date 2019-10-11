<?php
namespace PHPMaker2019\p_pembayaran3_1;

/**
 * Table class for r106_daf_kelas_siswa_iuran
 */
class r106_daf_kelas_siswa_iuran extends ReportTable
{
	public $ShowGroupHeaderAsRow = TRUE;
	public $ShowCompactSummaryFooter = FALSE;
	public $tahun_ajaran;
	public $sekolah_nama;
	public $kelas_nama;
	public $nomorinduk;
	public $siswa_nama;
	public $iuran_id;
	public $iuran_nama;
	public $tsk;
	public $ns;
	public $jumlah;
	public $tabel_kelas_id;
	public $tahun_ajaran_id;
	public $sekolah_id;
	public $kelas_id;
	public $tabel_siswa_id;
	public $siswa_id;
	public $tabel_iuran_id;

	// Constructor
	public function __construct()
	{
		global $ReportLanguage, $CurrentLanguage;

		// Language object
		if (!isset($ReportLanguage))
			$ReportLanguage = new ReportLanguage();
		$this->TableVar = 'r106_daf_kelas_siswa_iuran';
		$this->TableName = 'r106_daf_kelas_siswa_iuran';
		$this->TableType = 'REPORT';
		$this->TableReportType = 'summary';
		$this->SourceTableIsCustomView = FALSE;
		$this->Dbid = 'DB';
		$this->ExportAll = FALSE;
		$this->ExportPageBreakCount = 0;

		// tahun_ajaran
		$this->tahun_ajaran = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_tahun_ajaran', 'tahun_ajaran', '`tahun_ajaran`', 200, -1, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->tahun_ajaran->Sortable = TRUE; // Allow sort
		$this->tahun_ajaran->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->tahun_ajaran->PleaseSelectText = $ReportLanguage->phrase("PleaseSelect"); // PleaseSelect text
		$this->tahun_ajaran->DateFilter = "";
		$this->tahun_ajaran->Lookup = new ReportLookup('tahun_ajaran', 'r106_daf_kelas_siswa_iuran', TRUE, 'tahun_ajaran', ["tahun_ajaran","","",""], [], [], [], [], [], [], '`tahun_ajaran` ASC', '');
		$this->tahun_ajaran->Lookup->RenderViewFunc = "renderLookup";
		$this->fields['tahun_ajaran'] = &$this->tahun_ajaran;

		// sekolah_nama
		$this->sekolah_nama = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_sekolah_nama', 'sekolah_nama', '`sekolah_nama`', 200, -1, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->sekolah_nama->Sortable = TRUE; // Allow sort
		$this->sekolah_nama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->sekolah_nama->PleaseSelectText = $ReportLanguage->phrase("PleaseSelect"); // PleaseSelect text
		$this->sekolah_nama->DateFilter = "";
		$this->sekolah_nama->Lookup = new ReportLookup('sekolah_nama', 'r106_daf_kelas_siswa_iuran', TRUE, 'sekolah_nama', ["sekolah_nama","","",""], [], [], [], [], [], [], '`sekolah_nama` ASC', '');
		$this->sekolah_nama->Lookup->RenderViewFunc = "renderLookup";
		$this->fields['sekolah_nama'] = &$this->sekolah_nama;

		// kelas_nama
		$this->kelas_nama = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_kelas_nama', 'kelas_nama', '`kelas_nama`', 200, -1, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->kelas_nama->Sortable = TRUE; // Allow sort
		$this->kelas_nama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->kelas_nama->PleaseSelectText = $ReportLanguage->phrase("PleaseSelect"); // PleaseSelect text
		$this->kelas_nama->DateFilter = "";
		$this->kelas_nama->Lookup = new ReportLookup('kelas_nama', 'r106_daf_kelas_siswa_iuran', TRUE, 'kelas_nama', ["kelas_nama","","",""], [], [], [], [], [], [], '`kelas_nama` ASC', '');
		$this->kelas_nama->Lookup->RenderViewFunc = "renderLookup";
		$this->fields['kelas_nama'] = &$this->kelas_nama;

		// nomorinduk
		$this->nomorinduk = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_nomorinduk', 'nomorinduk', '`nomorinduk`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->nomorinduk->Sortable = TRUE; // Allow sort
		$this->nomorinduk->DateFilter = "";
		$this->fields['nomorinduk'] = &$this->nomorinduk;

		// siswa_nama
		$this->siswa_nama = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_siswa_nama', 'siswa_nama', '`siswa_nama`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->siswa_nama->Sortable = TRUE; // Allow sort
		$this->siswa_nama->DateFilter = "";
		$this->fields['siswa_nama'] = &$this->siswa_nama;

		// iuran_id
		$this->iuran_id = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_iuran_id', 'iuran_id', '`iuran_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->iuran_id->Sortable = TRUE; // Allow sort
		$this->iuran_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->iuran_id->DateFilter = "";
		$this->fields['iuran_id'] = &$this->iuran_id;

		// iuran_nama
		$this->iuran_nama = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_iuran_nama', 'iuran_nama', '`iuran_nama`', 200, -1, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->iuran_nama->Sortable = TRUE; // Allow sort
		$this->iuran_nama->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->iuran_nama->PleaseSelectText = $ReportLanguage->phrase("PleaseSelect"); // PleaseSelect text
		$this->iuran_nama->DateFilter = "";
		$this->iuran_nama->Lookup = new ReportLookup('iuran_nama', 'r106_daf_kelas_siswa_iuran', TRUE, 'iuran_nama', ["iuran_nama","","",""], [], [], [], [], [], [], '`iuran_nama` ASC', '');
		$this->iuran_nama->Lookup->RenderViewFunc = "renderLookup";
		$this->fields['iuran_nama'] = &$this->iuran_nama;

		// tsk
		$this->tsk = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_tsk', 'tsk', '`tsk`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tsk->Sortable = TRUE; // Allow sort
		$this->tsk->GroupingFieldId = 1;
		$this->tsk->ShowGroupHeaderAsRow = $this->ShowGroupHeaderAsRow;
		$this->tsk->ShowCompactSummaryFooter = $this->ShowCompactSummaryFooter;
		$this->tsk->DateFilter = "";
		$this->tsk->GroupByType = "";
		$this->tsk->GroupInterval = "0";
		$this->tsk->GroupSql = "";
		$this->fields['tsk'] = &$this->tsk;

		// ns
		$this->ns = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_ns', 'ns', '`ns`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->ns->Sortable = TRUE; // Allow sort
		$this->ns->GroupingFieldId = 2;
		$this->ns->ShowGroupHeaderAsRow = $this->ShowGroupHeaderAsRow;
		$this->ns->ShowCompactSummaryFooter = $this->ShowCompactSummaryFooter;
		$this->ns->DateFilter = "";
		$this->ns->GroupByType = "";
		$this->ns->GroupInterval = "0";
		$this->ns->GroupSql = "";
		$this->fields['ns'] = &$this->ns;

		// jumlah
		$this->jumlah = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_jumlah', 'jumlah', '`jumlah`', 4, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jumlah->Sortable = TRUE; // Allow sort
		$this->jumlah->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectFloat");
		$this->jumlah->DateFilter = "";
		$this->fields['jumlah'] = &$this->jumlah;

		// tabel_kelas_id
		$this->tabel_kelas_id = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_tabel_kelas_id', 'tabel_kelas_id', '`tabel_kelas_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'NO');
		$this->tabel_kelas_id->Sortable = TRUE; // Allow sort
		$this->tabel_kelas_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->tabel_kelas_id->DateFilter = "";
		$this->fields['tabel_kelas_id'] = &$this->tabel_kelas_id;

		// tahun_ajaran_id
		$this->tahun_ajaran_id = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_tahun_ajaran_id', 'tahun_ajaran_id', '`tahun_ajaran_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tahun_ajaran_id->Sortable = TRUE; // Allow sort
		$this->tahun_ajaran_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->tahun_ajaran_id->DateFilter = "";
		$this->fields['tahun_ajaran_id'] = &$this->tahun_ajaran_id;

		// sekolah_id
		$this->sekolah_id = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_sekolah_id', 'sekolah_id', '`sekolah_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->sekolah_id->Sortable = TRUE; // Allow sort
		$this->sekolah_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->sekolah_id->DateFilter = "";
		$this->fields['sekolah_id'] = &$this->sekolah_id;

		// kelas_id
		$this->kelas_id = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_kelas_id', 'kelas_id', '`kelas_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->kelas_id->Sortable = TRUE; // Allow sort
		$this->kelas_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->kelas_id->DateFilter = "";
		$this->fields['kelas_id'] = &$this->kelas_id;

		// tabel_siswa_id
		$this->tabel_siswa_id = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_tabel_siswa_id', 'tabel_siswa_id', '`tabel_siswa_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'NO');
		$this->tabel_siswa_id->Sortable = TRUE; // Allow sort
		$this->tabel_siswa_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->tabel_siswa_id->DateFilter = "";
		$this->fields['tabel_siswa_id'] = &$this->tabel_siswa_id;

		// siswa_id
		$this->siswa_id = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_siswa_id', 'siswa_id', '`siswa_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->siswa_id->Sortable = TRUE; // Allow sort
		$this->siswa_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->siswa_id->DateFilter = "";
		$this->fields['siswa_id'] = &$this->siswa_id;

		// tabel_iuran_id
		$this->tabel_iuran_id = new ReportField('r106_daf_kelas_siswa_iuran', 'r106_daf_kelas_siswa_iuran', 'x_tabel_iuran_id', 'tabel_iuran_id', '`tabel_iuran_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'NO');
		$this->tabel_iuran_id->Sortable = TRUE; // Allow sort
		$this->tabel_iuran_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->tabel_iuran_id->DateFilter = "";
		$this->fields['tabel_iuran_id'] = &$this->tabel_iuran_id;
	}

	// Render for popup
	public function renderPopup()
	{
		global $ReportLanguage;
	}

	// Render for lookup
	public function renderLookup()
	{
		$this->tahun_ajaran->ViewValue = GetDropDownDisplayValue($this->tahun_ajaran->CurrentValue, "", 0);
		$this->sekolah_nama->ViewValue = GetDropDownDisplayValue($this->sekolah_nama->CurrentValue, "", 0);
		$this->kelas_nama->ViewValue = GetDropDownDisplayValue($this->kelas_nama->CurrentValue, "", 0);
		$this->nomorinduk->ViewValue = $this->nomorinduk->CurrentValue;
		$this->siswa_nama->ViewValue = $this->siswa_nama->CurrentValue;
		$this->iuran_nama->ViewValue = GetDropDownDisplayValue($this->iuran_nama->CurrentValue, "", 0);
	}

	// Get Field Visibility
	public function getFieldVisibility($fldparm)
	{
		global $Security;
		return $this->$fldparm->Visible; // Returns original value
	}

	// Multiple column sort
	protected function updateSort(&$fld, $ctrl)
	{
		if ($this->CurrentOrder == $fld->Name) {
			$sortField = $fld->Expression;
			$lastSort = $fld->getSort();
			if ($this->CurrentOrderType == "ASC" || $this->CurrentOrderType == "DESC") {
				$thisSort = $this->CurrentOrderType;
			} else {
				$thisSort = ($lastSort == "ASC") ? "DESC" : "ASC";
			}
			$fld->setSort($thisSort);
			if ($fld->GroupingFieldId == 0) {
				if ($ctrl) {
					$orderBy = $this->getDetailOrderBy();
					if (strpos($orderBy, $sortField . " " . $lastSort) !== FALSE) {
						$orderBy = str_replace($sortField . " " . $lastSort, $sortField . " " . $thisSort, $orderBy);
					} else {
						if ($orderBy <> "") $orderBy .= ", ";
						$orderBy .= $sortField . " " . $thisSort;
					}
					$this->setDetailOrderBy($orderBy); // Save to Session
				} else {
					$this->setDetailOrderBy($sortField . " " . $thisSort); // Save to Session
				}
			}
		} else {
			if ($fld->GroupingFieldId == 0 && !$ctrl) $fld->setSort("");
		}
	}

	// Get Sort SQL
	protected function sortSql()
	{
		$dtlSortSql = $this->getDetailOrderBy(); // Get ORDER BY for detail fields from session
		$argrps = [];
		foreach ($this->fields as $fld) {
			if ($fld->getSort() <> "") {
				$fldsql = $fld->Expression;
				if ($fld->GroupingFieldId > 0) {
					if ($fld->GroupSql <> "")
						$argrps[$fld->GroupingFieldId] = str_replace("%s", $fldsql, $fld->GroupSql) . " " . $fld->getSort();
					else
						$argrps[$fld->GroupingFieldId] = $fldsql . " " . $fld->getSort();
				}
			}
		}
		$sortSql = "";
		foreach ($argrps as $grp) {
			if ($sortSql <> "") $sortSql .= ", ";
			$sortSql .= $grp;
		}
		if ($dtlSortSql <> "") {
			if ($sortSql <> "") $sortSql .= ", ";
			$sortSql .= $dtlSortSql;
		}
		return $sortSql;
	}

	// Table level SQL
	private $_sqlFrom = "";
	private $_sqlSelect = "";
	private $_sqlWhere = "";
	private $_sqlGroupBy = "";
	private $_sqlHaving = "";
	private $_sqlOrderBy = "";

	// From
	public function getSqlFrom()
	{
		return ($this->_sqlFrom <> "") ? $this->_sqlFrom : "`v112_daf_kelas_siswa_iuran`";
	}
	public function setSqlFrom($v)
	{
		$this->_sqlFrom = $v;
	}

	// Select
	public function getSqlSelect()
	{
		return ($this->_sqlSelect <> "") ? $this->_sqlSelect : "SELECT * FROM " . $this->getSqlFrom();
	}
	public function setSqlSelect($v)
	{
		$this->_sqlSelect = $v;
	}

	// Where
	public function getSqlWhere()
	{
		$where = ($this->_sqlWhere <> "") ? $this->_sqlWhere : "";
		$filter = "";
		AddFilter($where, $filter);
		return $where;
	}
	public function setSqlWhere($v)
	{
		$this->_sqlWhere = $v;
	}

	// Group By
	public function getSqlGroupBy()
	{
		return ($this->_sqlGroupBy <> "") ? $this->_sqlGroupBy : "";
	}
	public function setSqlGroupBy($v)
	{
		$this->_sqlGroupBy = $v;
	}

	// Having
	public function getSqlHaving()
	{
		return ($this->_sqlHaving <> "") ? $this->_sqlHaving : "";
	}
	public function setSqlHaving($v)
	{
		$this->_sqlHaving = $v;
	}

	// Order By
	public function getSqlOrderBy()
	{
		return ($this->_sqlOrderBy <> "") ? $this->_sqlOrderBy : "`tsk` ASC, `ns` ASC";
	}
	public function setSqlOrderBy($v)
	{
		$this->_sqlOrderBy = $v;
	}

	// Get SQL
	public function getSql($where, $orderBy = "")
	{
		return BuildReportSql($this->getSqlSelect(), $this->getSqlWhere(),
			$this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderBy(),
			$where, $orderBy);
	}

	// Table Level Group SQL
	private $_sqlFirstGroupField = "";
	private $_sqlSelectGroup = "";
	private $_sqlOrderByGroup = "";

	// First Group Field
	public function getSqlFirstGroupField()
	{
		return ($this->_sqlFirstGroupField <> "") ? $this->_sqlFirstGroupField : "`tsk`";
	}
	public function setSqlFirstGroupField($v)
	{
		$this->_sqlFirstGroupField = $v;
	}

	// Select Group
	public function getSqlSelectGroup()
	{
		return ($this->_sqlSelectGroup <> "") ? $this->_sqlSelectGroup : "SELECT DISTINCT " . $this->getSqlFirstGroupField() . " FROM " . $this->getSqlFrom();
	}
	public function setSqlSelectGroup($v)
	{
		$this->_sqlSelectGroup = $v;
	}

	// Order By Group
	public function getSqlOrderByGroup()
	{
		return ($this->_sqlOrderByGroup <> "") ? $this->_sqlOrderByGroup : "`tsk` ASC";
	}
	public function setSqlOrderByGroup($v)
	{
		$this->_sqlOrderByGroup = $v;
	}

	// Summary properties
	private $_sqlSelectAggregate = "";
	private $_sqlAggregatePrefix = "";
	private $_sqlAggregateSuffix = "";
	private $_sqlSelectCount = "";

	// Select Aggregate
	public function getSqlSelectAggregate()
	{
		return ($this->_sqlSelectAggregate <> "") ? $this->_sqlSelectAggregate : "SELECT * FROM " . $this->getSqlFrom();
	}
	public function setSqlSelectAggregate($v)
	{
		$this->_sqlSelectAggregate = $v;
	}

	// Aggregate Prefix
	public function getSqlAggregatePrefix()
	{
		return ($this->_sqlAggregatePrefix <> "") ? $this->_sqlAggregatePrefix : "";
	}
	public function setSqlAggregatePrefix($v)
	{
		$this->_sqlAggregatePrefix = $v;
	}

	// Aggregate Suffix
	public function getSqlAggregateSuffix()
	{
		return ($this->_sqlAggregateSuffix <> "") ? $this->_sqlAggregateSuffix : "";
	}
	public function setSqlAggregateSuffix($v)
	{
		$this->_sqlAggregateSuffix = $v;
	}

	// Select Count
	public function getSqlSelectCount()
	{
		return ($this->_sqlSelectCount <> "") ? $this->_sqlSelectCount : "SELECT COUNT(*) FROM " . $this->getSqlFrom();
	}
	public function setSqlSelectCount($v)
	{
		$this->_sqlSelectCount = $v;
	}

	// Get record count
	public function getRecordCount($sql)
	{
		$cnt = -1;
		$rs = NULL;
		$sql = preg_replace('/\/\*BeginOrderBy\*\/[\s\S]+\/\*EndOrderBy\*\//', "", $sql); // Remove ORDER BY clause (MSSQL)
		$pattern = '/^SELECT\s([\s\S]+)\sFROM\s/i';

		// Skip Custom View / SubQuery and SELECT DISTINCT
		if (($this->TableType == 'TABLE' || $this->TableType == 'VIEW' || $this->TableType == 'LINKTABLE') &&
			preg_match($pattern, $sql) && !preg_match('/\(\s*(SELECT[^)]+)\)/i', $sql) && !preg_match('/^\s*select\s+distinct\s+/i', $sql)) {
			$sqlwrk = "SELECT COUNT(*) FROM " . preg_replace($pattern, "", $sql);
		} else {
			$sqlwrk = "SELECT COUNT(*) FROM (" . $sql . ") COUNT_TABLE";
		}
		$conn = &$this->getConnection();
		if ($rs = $conn->execute($sqlwrk)) {
			if (!$rs->EOF && $rs->FieldCount() > 0) {
				$cnt = $rs->fields[0];
				$rs->close();
			}
			return (int)$cnt;
		}

		// Unable to get count, get record count directly
		if ($rs = $conn->execute($sql)) {
			$cnt = $rs->RecordCount();
			$rs->close();
			return (int)$cnt;
		}
		return $cnt;
	}

	// Get recordset
	public function getRecordset($sql, $rowcnt = -1, $offset = -1)
	{
		$conn = &$this->getConnection();
		$conn->raiseErrorFn = $GLOBALS["ERROR_FUNC"];
		$rs = $conn->selectLimit($sql, $rowcnt, $offset);
		$conn->raiseErrorFn = '';
		return $rs;
	}

	// Sort URL
	public function sortUrl(&$fld)
	{
		global $DashboardReport;
		if ($this->isExport() || $DashboardReport ||
			in_array($fld->Type, [128, 204, 205])) { // Unsortable data type
				return "";
		} elseif ($fld->Sortable) {

			//$urlParm = "order=" . urlencode($fld->Name) . "&ordertype=" . $fld->reverseSort();
			$urlParm = "order=" . urlencode($fld->Name) . "&amp;ordertype=" . $fld->reverseSort();
			return CurrentPageName() . "?" . $urlParm;
		} else {
			return "";
		}
	}

	// Lookup data from table
	public function lookup()
	{
		global $Security, $RequestSecurity, $PROJECT_ID, $RELATED_PROJECT_ID;
		$projectId = $RELATED_PROJECT_ID;

		// Check token first
		$func = PROJECT_NAMESPACE . CHECK_TOKEN_FUNC;
		$validRequest = FALSE;
		if (is_callable($func) && Post(TOKEN_NAME) !== NULL) {
			$validRequest = $func(Post(TOKEN_NAME), SessionTimeoutTime());
			if ($validRequest) {
				if (!isset($Security)) {
					if (session_status() !== PHP_SESSION_ACTIVE)
						session_start(); // Init session data
					$Security = new AdvancedSecurity();
					if ($Security->isLoggedIn()) $Security->TablePermission_Loading();
					$Security->loadCurrentUserLevel($projectId . $this->TableName);
					if ($Security->isLoggedIn()) $Security->TablePermission_Loaded();
					$validRequest = $Security->canList(); // List permission
					if ($validRequest) {
						$Security->UserID_Loading();
						$Security->loadUserID();
						$Security->UserID_Loaded();
					}
				}
			}
		} else {

			// User profile
			$UserProfile = new UserProfile();

			// Security
			$Security = new AdvancedSecurity();
			if (is_array($RequestSecurity)) // Login user for API request
				$Security->loginUser(@$RequestSecurity["username"], @$RequestSecurity["userid"], @$RequestSecurity["parentuserid"], @$RequestSecurity["userlevelid"]);
			$Security->TablePermission_Loading();
			$Security->loadCurrentUserLevel($projectId . $this->TableName);
			$Security->TablePermission_Loaded();
			$validRequest = $Security->canList(); // List permission
		}

		// Reject invalid request
		if (!$validRequest)
			return FALSE;

		// Load lookup parameters
		$distinct = ConvertToBool(Post("distinct"));
		$linkField = Post("linkField");
		$displayFields = Post("displayFields");
		$parentFields = Post("parentFields");
		if (!is_array($parentFields))
			$parentFields = [];
		$childFields = Post("childFields");
		if (!is_array($childFields))
			$childFields = [];
		$filterFields = Post("filterFields");
		if (!is_array($filterFields))
			$filterFields = [];
		$filterFieldVars = Post("filterFieldVars");
		if (!is_array($filterFieldVars))
			$filterFieldVars = [];
		$filterOperators = Post("filterOperators");
		if (!is_array($filterOperators))
			$filterOperators = [];
		$autoFillSourceFields = Post("autoFillSourceFields");
		if (!is_array($autoFillSourceFields))
			$autoFillSourceFields = [];
		$formatAutoFill = FALSE;
		$lookupType = Post("ajax", "unknown");
		$pageSize = -1;
		$offset = -1;
		$searchValue = "";
		if (SameText($lookupType, "modal")) {
			$searchValue = Post("sv", "");
			$pageSize = Post("recperpage", 10);
			$offset = Post("start", 0);
		} elseif (SameText($lookupType, "autosuggest")) {
			$searchValue = Get("q", "");
			$pageSize = Param("n", -1);
			$pageSize = is_numeric($pageSize) ? (int)$pageSize : -1;
			if ($pageSize <= 0)
				$pageSize = AUTO_SUGGEST_MAX_ENTRIES;
			$start = Param("start", -1);
			$start = is_numeric($start) ? (int)$start : -1;
			$page = Param("page", -1);
			$page = is_numeric($page) ? (int)$page : -1;
			$offset = $start >= 0 ? $start : ($page > 0 && $pageSize > 0 ? ($page - 1) * $pageSize : 0);
		}
		$userSelect = Decrypt(Post("s", ""));
		$userFilter = Decrypt(Post("f", ""));
		$userOrderBy = Decrypt(Post("o", ""));

		// Create lookup object and output JSON
		$lookup = new ReportLookup($linkField, $this->TableVar, $distinct, $linkField, $displayFields, $parentFields, $childFields, $filterFields, $filterFieldVars, $autoFillSourceFields);
		foreach ($filterFields as $i => $filterField) { // Set up filter operators
			if (@$filterOperators[$i] <> "")
				$lookup->setFilterOperator($filterField, $filterOperators[$i]);
		}
		$lookup->LookupType = $lookupType; // Lookup type
		if (Post("keys") !== NULL) { // Selected records from modal
			$keys = Post("keys");
			if (is_array($keys))
				$keys = implode(LOOKUP_FILTER_VALUE_SEPARATOR, $keys);
			$lookup->FilterValues[] = $keys; // Lookup values
		} else { // Lookup values
			$lookup->FilterValues[] = Post("v0", Post("lookupValue", ""));
		}
		$cnt = is_array($filterFields) ? count($filterFields) : 0;
		for ($i = 1; $i <= $cnt; $i++)
			$lookup->FilterValues[] = Post("v" . $i, "");
		$lookup->SearchValue = $searchValue;
		$lookup->PageSize = $pageSize;
		$lookup->Offset = $offset;
		if ($userSelect <> "")
			$lookup->UserSelect = $userSelect;
		if ($userFilter <> "")
			$lookup->UserFilter = $userFilter;
		if ($userOrderBy <> "")
			$lookup->UserOrderBy = $userOrderBy;
		$lookup->toJson();
	}

	// Get file data
	public function getFileData($fldparm, $key, $resize, $width = THUMBNAIL_DEFAULT_WIDTH, $height = THUMBNAIL_DEFAULT_HEIGHT)
	{

		// No binary fields
		return FALSE;
	}

	// Table level events
	// Page Selecting event
	function Page_Selecting(&$filter) {

		// Enter your code here
	}

	// Page Breaking event
	function Page_Breaking(&$break, &$content) {

		// Example:
		//$break = FALSE; // Skip page break, or
		//$content = "<div style=\"page-break-after:always;\">&nbsp;</div>"; // Modify page break content

	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here
	}

	// Cell Rendered event
	function Cell_Rendered(&$Field, $CurrentValue, &$ViewValue, &$ViewAttrs, &$CellAttrs, &$HrefValue, &$LinkAttrs) {

		//$ViewValue = "xxx";
		//$ViewAttrs["class"] = "xxx";

	}

	// Row Rendered event
	function Row_Rendered() {

		// To view properties of field class, use:
		//var_dump($this-><FieldName>);

	}

	// User ID Filtering event
	function UserID_Filtering(&$filter) {

		// Enter your code here
	}

	// Load Filters event
	function Page_FilterLoad() {

		// Enter your code here
		// Example: Register/Unregister Custom Extended Filter
		//RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A', PROJECT_NAMESPACE . 'GetStartsWithAFilter'); // With function, or
		//RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A'); // No function, use Page_Filtering event
		//UnregisterFilter($this-><Field>, 'StartsWithA');

	}

	// Page Filter Validated event
	function Page_FilterValidated() {

		// Example:
		//$this->MyField1->AdvancedSearch->SearchValue = "your search criteria"; // Search value

	}

	// Page Filtering event
	function Page_Filtering(&$fld, &$filter, $typ, $opr = "", $val = "", $cond = "", $opr2 = "", $val2 = "") {

		// Note: ALWAYS CHECK THE FILTER TYPE ($typ)! Example:
		//if ($typ == "dropdown" && $fld->Name == "MyField") // Dropdown filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "extended" && $fld->Name == "MyField") // Extended filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "popup" && $fld->Name == "MyField") // Popup filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "custom" && $opr == "..." && $fld->Name == "MyField") // Custom filter, $opr is the custom filter ID
		//	$filter = "..."; // Modify the filter

	}

	// Email Sending event
	function Email_Sending(&$email, &$args) {

		//var_dump($email); var_dump($args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		// Enter your code here
	}
}
?>