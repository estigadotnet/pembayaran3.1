<?php
namespace PHPMaker2019\p_pembayaran3_1;

/**
 * Table class for r102_lap_tunggak
 */
class r102_lap_tunggak extends ReportTable
{
	public $ShowGroupHeaderAsRow = FALSE;
	public $ShowCompactSummaryFooter = TRUE;
	public $TahunAjaran;
	public $SekolahNama;
	public $KelasNama;
	public $NomorInduk;
	public $SiswaNama;
	public $iuran_id;
	public $IuranNama;
	public $Jumlah;
	public $Periode;
	public $PeriodeBulan;
	public $JumlahBayar;
	public $dk_id;
	public $daf_kelas_siswa_id;
	public $tahun_ajaran_id;
	public $sekolah_id;
	public $kelas_id;
	public $siswa_id;
	public $TglBayar;
	public $StatusBayar;
	public $PeriodeNow;

	// Constructor
	public function __construct()
	{
		global $ReportLanguage, $CurrentLanguage;

		// Language object
		if (!isset($ReportLanguage))
			$ReportLanguage = new ReportLanguage();
		$this->TableVar = 'r102_lap_tunggak';
		$this->TableName = 'r102_lap_tunggak';
		$this->TableType = 'REPORT';
		$this->TableReportType = 'summary';
		$this->SourceTableIsCustomView = FALSE;
		$this->Dbid = 'DB';
		$this->ExportAll = FALSE;
		$this->ExportPageBreakCount = 0;

		// TahunAjaran
		$this->TahunAjaran = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_TahunAjaran', 'TahunAjaran', '`TahunAjaran`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->TahunAjaran->Sortable = TRUE; // Allow sort
		$this->TahunAjaran->DateFilter = "";
		$this->fields['TahunAjaran'] = &$this->TahunAjaran;

		// SekolahNama
		$this->SekolahNama = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_SekolahNama', 'SekolahNama', '`SekolahNama`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->SekolahNama->Sortable = TRUE; // Allow sort
		$this->SekolahNama->DateFilter = "";
		$this->fields['SekolahNama'] = &$this->SekolahNama;

		// KelasNama
		$this->KelasNama = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_KelasNama', 'KelasNama', '`KelasNama`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->KelasNama->Sortable = TRUE; // Allow sort
		$this->KelasNama->DateFilter = "";
		$this->fields['KelasNama'] = &$this->KelasNama;

		// NomorInduk
		$this->NomorInduk = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_NomorInduk', 'NomorInduk', '`NomorInduk`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->NomorInduk->Sortable = TRUE; // Allow sort
		$this->NomorInduk->DateFilter = "";
		$this->fields['NomorInduk'] = &$this->NomorInduk;

		// SiswaNama
		$this->SiswaNama = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_SiswaNama', 'SiswaNama', '`SiswaNama`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->SiswaNama->Sortable = TRUE; // Allow sort
		$this->SiswaNama->DateFilter = "";
		$this->fields['SiswaNama'] = &$this->SiswaNama;

		// iuran_id
		$this->iuran_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_iuran_id', 'iuran_id', '`iuran_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->iuran_id->Sortable = TRUE; // Allow sort
		$this->iuran_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->iuran_id->DateFilter = "";
		$this->fields['iuran_id'] = &$this->iuran_id;

		// IuranNama
		$this->IuranNama = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_IuranNama', 'IuranNama', '`IuranNama`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->IuranNama->Sortable = TRUE; // Allow sort
		$this->IuranNama->DateFilter = "";
		$this->fields['IuranNama'] = &$this->IuranNama;

		// Jumlah
		$this->Jumlah = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_Jumlah', 'Jumlah', '`Jumlah`', 4, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Jumlah->Sortable = TRUE; // Allow sort
		$this->Jumlah->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectFloat");
		$this->Jumlah->DateFilter = "";
		$this->fields['Jumlah'] = &$this->Jumlah;

		// Periode
		$this->Periode = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_Periode', 'Periode', '`Periode`', 3, -1, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->Periode->Sortable = TRUE; // Allow sort
		$this->Periode->SelectMultiple = TRUE; // Multiple select
		$this->Periode->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->Periode->DateFilter = "";
		$this->Periode->Lookup = new ReportLookup('Periode', 'r102_lap_tunggak', TRUE, 'Periode', ["Periode","","",""], [], [], [], [], [], [], '`Periode` ASC', '');
		$this->Periode->Lookup->RenderViewFunc = "renderLookup";
		$this->fields['Periode'] = &$this->Periode;

		// PeriodeBulan
		$this->PeriodeBulan = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_PeriodeBulan', 'PeriodeBulan', '`PeriodeBulan`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PeriodeBulan->Sortable = TRUE; // Allow sort
		$this->PeriodeBulan->DateFilter = "";
		$this->fields['PeriodeBulan'] = &$this->PeriodeBulan;

		// JumlahBayar
		$this->JumlahBayar = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_JumlahBayar', 'JumlahBayar', '`JumlahBayar`', 4, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->JumlahBayar->Sortable = TRUE; // Allow sort
		$this->JumlahBayar->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectFloat");
		$this->JumlahBayar->DateFilter = "";
		$this->fields['JumlahBayar'] = &$this->JumlahBayar;

		// dk_id
		$this->dk_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_dk_id', 'dk_id', '`dk_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'NO');
		$this->dk_id->Sortable = TRUE; // Allow sort
		$this->dk_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->dk_id->DateFilter = "";
		$this->fields['dk_id'] = &$this->dk_id;

		// daf_kelas_siswa_id
		$this->daf_kelas_siswa_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_daf_kelas_siswa_id', 'daf_kelas_siswa_id', '`daf_kelas_siswa_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->daf_kelas_siswa_id->Sortable = TRUE; // Allow sort
		$this->daf_kelas_siswa_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->daf_kelas_siswa_id->DateFilter = "";
		$this->fields['daf_kelas_siswa_id'] = &$this->daf_kelas_siswa_id;

		// tahun_ajaran_id
		$this->tahun_ajaran_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_tahun_ajaran_id', 'tahun_ajaran_id', '`tahun_ajaran_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tahun_ajaran_id->Sortable = TRUE; // Allow sort
		$this->tahun_ajaran_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->tahun_ajaran_id->DateFilter = "";
		$this->fields['tahun_ajaran_id'] = &$this->tahun_ajaran_id;

		// sekolah_id
		$this->sekolah_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_sekolah_id', 'sekolah_id', '`sekolah_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->sekolah_id->Sortable = TRUE; // Allow sort
		$this->sekolah_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->sekolah_id->DateFilter = "";
		$this->fields['sekolah_id'] = &$this->sekolah_id;

		// kelas_id
		$this->kelas_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_kelas_id', 'kelas_id', '`kelas_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->kelas_id->Sortable = TRUE; // Allow sort
		$this->kelas_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->kelas_id->DateFilter = "";
		$this->fields['kelas_id'] = &$this->kelas_id;

		// siswa_id
		$this->siswa_id = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_siswa_id', 'siswa_id', '`siswa_id`', 3, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->siswa_id->Sortable = TRUE; // Allow sort
		$this->siswa_id->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->siswa_id->DateFilter = "";
		$this->fields['siswa_id'] = &$this->siswa_id;

		// TglBayar
		$this->TglBayar = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_TglBayar', 'TglBayar', '`TglBayar`', 133, 0, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->TglBayar->Sortable = TRUE; // Allow sort
		$this->TglBayar->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_FORMAT"], $ReportLanguage->phrase("IncorrectDate"));
		$this->TglBayar->DateFilter = "";
		$this->fields['TglBayar'] = &$this->TglBayar;

		// StatusBayar
		$this->StatusBayar = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_StatusBayar', 'StatusBayar', '`StatusBayar`', 200, -1, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->StatusBayar->Sortable = TRUE; // Allow sort
		$this->StatusBayar->DateFilter = "";
		$this->fields['StatusBayar'] = &$this->StatusBayar;

		// PeriodeNow
		$this->PeriodeNow = new ReportField('r102_lap_tunggak', 'r102_lap_tunggak', 'x_PeriodeNow', 'PeriodeNow', '`PeriodeNow`', 3, -1, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->PeriodeNow->Sortable = TRUE; // Allow sort
		$this->PeriodeNow->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->PeriodeNow->PleaseSelectText = $ReportLanguage->phrase("PleaseSelect"); // PleaseSelect text
		$this->PeriodeNow->DefaultErrorMessage = $ReportLanguage->phrase("IncorrectInteger");
		$this->PeriodeNow->DateFilter = "";
		$this->fields['PeriodeNow'] = &$this->PeriodeNow;
	}

	// Render for popup
	public function renderPopup()
	{
		global $ReportLanguage;
	}

	// Render for lookup
	public function renderLookup()
	{
		$this->NomorInduk->ViewValue = $this->NomorInduk->CurrentValue;
		$this->SiswaNama->ViewValue = $this->SiswaNama->CurrentValue;
		$this->Periode->ViewValue = GetDropDownDisplayValue($this->Periode->CurrentValue, "", 0);
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
		return ($this->_sqlFrom <> "") ? $this->_sqlFrom : "`v107_lap_tunggak`";
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
		return ($this->_sqlOrderBy <> "") ? $this->_sqlOrderBy : "";
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
		return ($this->_sqlFirstGroupField <> "") ? $this->_sqlFirstGroupField : "";
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
		return ($this->_sqlOrderByGroup <> "") ? $this->_sqlOrderByGroup : "";
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