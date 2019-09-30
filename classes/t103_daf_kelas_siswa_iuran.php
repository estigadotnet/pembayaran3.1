<?php
namespace PHPMaker2019\p_pembayaran3_1;

/**
 * Table class for t103_daf_kelas_siswa_iuran
 */
class t103_daf_kelas_siswa_iuran extends DbTable
{
	protected $SqlFrom = "";
	protected $SqlSelect = "";
	protected $SqlSelectList = "";
	protected $SqlWhere = "";
	protected $SqlGroupBy = "";
	protected $SqlHaving = "";
	protected $SqlOrderBy = "";
	public $UseSessionForListSql = TRUE;

	// Column CSS classes
	public $LeftColumnClass = "col-sm-2 col-form-label ew-label";
	public $RightColumnClass = "col-sm-10";
	public $OffsetColumnClass = "col-sm-10 offset-sm-2";
	public $TableLeftColumnClass = "w-col-2";

	// Audit trail
	public $AuditTrailOnAdd = TRUE;
	public $AuditTrailOnEdit = TRUE;
	public $AuditTrailOnDelete = TRUE;
	public $AuditTrailOnView = FALSE;
	public $AuditTrailOnViewData = FALSE;
	public $AuditTrailOnSearch = FALSE;

	// Export
	public $ExportDoc;

	// Fields
	public $id;
	public $daf_kelas_siswa_id;
	public $iuran_id;
	public $Jumlah;
	public $byr01;
	public $jml01;
	public $tgl01;
	public $byr02;
	public $jml02;
	public $tgl02;
	public $byr03;
	public $jml03;
	public $tgl03;
	public $byr04;
	public $jml04;
	public $tgl04;
	public $byr05;
	public $jml05;
	public $tgl05;
	public $byr06;
	public $jml06;
	public $tgl06;
	public $byr07;
	public $jml07;
	public $tgl07;
	public $byr08;
	public $jml08;
	public $tgl08;
	public $byr09;
	public $jml09;
	public $tgl09;
	public $byr10;
	public $jml10;
	public $tgl10;
	public $byr11;
	public $jml11;
	public $tgl11;
	public $byr12;
	public $jml12;
	public $tgl12;

	// Constructor
	public function __construct()
	{
		global $Language, $CurrentLanguage;

		// Language object
		if (!isset($Language))
			$Language = new Language();
		$this->TableVar = 't103_daf_kelas_siswa_iuran';
		$this->TableName = 't103_daf_kelas_siswa_iuran';
		$this->TableType = 'TABLE';

		// Update Table
		$this->UpdateTable = "`t103_daf_kelas_siswa_iuran`";
		$this->Dbid = 'DB';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0; // Page break per every n record (PDF only)
		$this->ExportPageOrientation = "portrait"; // Page orientation (PDF only)
		$this->ExportPageSize = "a4"; // Page size (PDF only)
		$this->ExportExcelPageOrientation = ""; // Page orientation (PhpSpreadsheet only)
		$this->ExportExcelPageSize = ""; // Page size (PhpSpreadsheet only)
		$this->ExportWordPageOrientation = "portrait"; // Page orientation (PHPWord only)
		$this->ExportWordColumnWidth = NULL; // Cell width (PHPWord only)
		$this->DetailAdd = TRUE; // Allow detail add
		$this->DetailEdit = FALSE; // Allow detail edit
		$this->DetailView = FALSE; // Allow detail view
		$this->ShowMultipleDetails = FALSE; // Show multiple details
		$this->GridAddRowCount = 1;
		$this->AllowAddDeleteRow = TRUE; // Allow add/delete row
		$this->UserIDAllowSecurity = 0; // User ID Allow
		$this->BasicSearch = new BasicSearch($this->TableVar);

		// id
		$this->id = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_id', 'id', '`id`', '`id`', 3, -1, FALSE, '`id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'NO');
		$this->id->IsAutoIncrement = TRUE; // Autoincrement field
		$this->id->IsPrimaryKey = TRUE; // Primary key field
		$this->id->Sortable = TRUE; // Allow sort
		$this->id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['id'] = &$this->id;

		// daf_kelas_siswa_id
		$this->daf_kelas_siswa_id = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_daf_kelas_siswa_id', 'daf_kelas_siswa_id', '`daf_kelas_siswa_id`', '`daf_kelas_siswa_id`', 3, -1, FALSE, '`daf_kelas_siswa_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->daf_kelas_siswa_id->IsForeignKey = TRUE; // Foreign key field
		$this->daf_kelas_siswa_id->Nullable = FALSE; // NOT NULL field
		$this->daf_kelas_siswa_id->Required = TRUE; // Required field
		$this->daf_kelas_siswa_id->Sortable = TRUE; // Allow sort
		$this->daf_kelas_siswa_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['daf_kelas_siswa_id'] = &$this->daf_kelas_siswa_id;

		// iuran_id
		$this->iuran_id = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_iuran_id', 'iuran_id', '`iuran_id`', '`iuran_id`', 3, -1, FALSE, '`iuran_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->iuran_id->Nullable = FALSE; // NOT NULL field
		$this->iuran_id->Required = TRUE; // Required field
		$this->iuran_id->Sortable = TRUE; // Allow sort
		$this->iuran_id->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->iuran_id->PleaseSelectText = $Language->phrase("PleaseSelect"); // PleaseSelect text
		$this->iuran_id->Lookup = new Lookup('iuran_id', 't005_iuran', FALSE, 'id', ["Nama","","",""], [], [], [], [], [], [], '', '');
		$this->iuran_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['iuran_id'] = &$this->iuran_id;

		// Jumlah
		$this->Jumlah = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_Jumlah', 'Jumlah', '`Jumlah`', '`Jumlah`', 4, -1, FALSE, '`Jumlah`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Jumlah->Nullable = FALSE; // NOT NULL field
		$this->Jumlah->Required = TRUE; // Required field
		$this->Jumlah->Sortable = TRUE; // Allow sort
		$this->Jumlah->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['Jumlah'] = &$this->Jumlah;

		// byr01
		$this->byr01 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr01', 'byr01', '`byr01`', '`byr01`', 202, -1, FALSE, '`byr01`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr01->Nullable = FALSE; // NOT NULL field
		$this->byr01->Sortable = TRUE; // Allow sort
		$this->byr01->DataType = DATATYPE_BOOLEAN;
		$this->byr01->Lookup = new Lookup('byr01', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr01->OptionCount = 2;
		$this->fields['byr01'] = &$this->byr01;

		// jml01
		$this->jml01 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml01', 'jml01', '`jml01`', '`jml01`', 4, -1, FALSE, '`jml01`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml01->Nullable = FALSE; // NOT NULL field
		$this->jml01->Required = TRUE; // Required field
		$this->jml01->Sortable = TRUE; // Allow sort
		$this->jml01->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml01'] = &$this->jml01;

		// tgl01
		$this->tgl01 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl01', 'tgl01', '`tgl01`', CastDateFieldForLike('`tgl01`', 7, "DB"), 133, 7, FALSE, '`tgl01`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl01->Sortable = TRUE; // Allow sort
		$this->tgl01->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl01'] = &$this->tgl01;

		// byr02
		$this->byr02 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr02', 'byr02', '`byr02`', '`byr02`', 202, -1, FALSE, '`byr02`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr02->Nullable = FALSE; // NOT NULL field
		$this->byr02->Sortable = TRUE; // Allow sort
		$this->byr02->DataType = DATATYPE_BOOLEAN;
		$this->byr02->Lookup = new Lookup('byr02', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr02->OptionCount = 2;
		$this->fields['byr02'] = &$this->byr02;

		// jml02
		$this->jml02 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml02', 'jml02', '`jml02`', '`jml02`', 4, -1, FALSE, '`jml02`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml02->Nullable = FALSE; // NOT NULL field
		$this->jml02->Required = TRUE; // Required field
		$this->jml02->Sortable = TRUE; // Allow sort
		$this->jml02->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml02'] = &$this->jml02;

		// tgl02
		$this->tgl02 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl02', 'tgl02', '`tgl02`', CastDateFieldForLike('`tgl02`', 7, "DB"), 133, 7, FALSE, '`tgl02`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl02->Sortable = TRUE; // Allow sort
		$this->tgl02->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl02'] = &$this->tgl02;

		// byr03
		$this->byr03 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr03', 'byr03', '`byr03`', '`byr03`', 202, -1, FALSE, '`byr03`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr03->Nullable = FALSE; // NOT NULL field
		$this->byr03->Sortable = TRUE; // Allow sort
		$this->byr03->DataType = DATATYPE_BOOLEAN;
		$this->byr03->Lookup = new Lookup('byr03', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr03->OptionCount = 2;
		$this->fields['byr03'] = &$this->byr03;

		// jml03
		$this->jml03 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml03', 'jml03', '`jml03`', '`jml03`', 4, -1, FALSE, '`jml03`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml03->Nullable = FALSE; // NOT NULL field
		$this->jml03->Required = TRUE; // Required field
		$this->jml03->Sortable = TRUE; // Allow sort
		$this->jml03->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml03'] = &$this->jml03;

		// tgl03
		$this->tgl03 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl03', 'tgl03', '`tgl03`', CastDateFieldForLike('`tgl03`', 7, "DB"), 133, 7, FALSE, '`tgl03`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl03->Sortable = TRUE; // Allow sort
		$this->tgl03->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl03'] = &$this->tgl03;

		// byr04
		$this->byr04 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr04', 'byr04', '`byr04`', '`byr04`', 202, -1, FALSE, '`byr04`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr04->Nullable = FALSE; // NOT NULL field
		$this->byr04->Sortable = TRUE; // Allow sort
		$this->byr04->DataType = DATATYPE_BOOLEAN;
		$this->byr04->Lookup = new Lookup('byr04', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr04->OptionCount = 2;
		$this->fields['byr04'] = &$this->byr04;

		// jml04
		$this->jml04 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml04', 'jml04', '`jml04`', '`jml04`', 4, -1, FALSE, '`jml04`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml04->Nullable = FALSE; // NOT NULL field
		$this->jml04->Required = TRUE; // Required field
		$this->jml04->Sortable = TRUE; // Allow sort
		$this->jml04->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml04'] = &$this->jml04;

		// tgl04
		$this->tgl04 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl04', 'tgl04', '`tgl04`', CastDateFieldForLike('`tgl04`', 7, "DB"), 133, 7, FALSE, '`tgl04`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl04->Sortable = TRUE; // Allow sort
		$this->tgl04->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl04'] = &$this->tgl04;

		// byr05
		$this->byr05 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr05', 'byr05', '`byr05`', '`byr05`', 202, -1, FALSE, '`byr05`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr05->Nullable = FALSE; // NOT NULL field
		$this->byr05->Sortable = TRUE; // Allow sort
		$this->byr05->DataType = DATATYPE_BOOLEAN;
		$this->byr05->Lookup = new Lookup('byr05', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr05->OptionCount = 2;
		$this->fields['byr05'] = &$this->byr05;

		// jml05
		$this->jml05 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml05', 'jml05', '`jml05`', '`jml05`', 4, -1, FALSE, '`jml05`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml05->Nullable = FALSE; // NOT NULL field
		$this->jml05->Required = TRUE; // Required field
		$this->jml05->Sortable = TRUE; // Allow sort
		$this->jml05->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml05'] = &$this->jml05;

		// tgl05
		$this->tgl05 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl05', 'tgl05', '`tgl05`', CastDateFieldForLike('`tgl05`', 7, "DB"), 133, 7, FALSE, '`tgl05`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl05->Sortable = TRUE; // Allow sort
		$this->tgl05->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl05'] = &$this->tgl05;

		// byr06
		$this->byr06 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr06', 'byr06', '`byr06`', '`byr06`', 202, -1, FALSE, '`byr06`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr06->Nullable = FALSE; // NOT NULL field
		$this->byr06->Sortable = TRUE; // Allow sort
		$this->byr06->DataType = DATATYPE_BOOLEAN;
		$this->byr06->Lookup = new Lookup('byr06', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr06->OptionCount = 2;
		$this->fields['byr06'] = &$this->byr06;

		// jml06
		$this->jml06 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml06', 'jml06', '`jml06`', '`jml06`', 4, -1, FALSE, '`jml06`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml06->Nullable = FALSE; // NOT NULL field
		$this->jml06->Required = TRUE; // Required field
		$this->jml06->Sortable = TRUE; // Allow sort
		$this->jml06->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml06'] = &$this->jml06;

		// tgl06
		$this->tgl06 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl06', 'tgl06', '`tgl06`', CastDateFieldForLike('`tgl06`', 7, "DB"), 133, 7, FALSE, '`tgl06`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl06->Sortable = TRUE; // Allow sort
		$this->tgl06->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl06'] = &$this->tgl06;

		// byr07
		$this->byr07 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr07', 'byr07', '`byr07`', '`byr07`', 202, -1, FALSE, '`byr07`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr07->Nullable = FALSE; // NOT NULL field
		$this->byr07->Sortable = TRUE; // Allow sort
		$this->byr07->DataType = DATATYPE_BOOLEAN;
		$this->byr07->Lookup = new Lookup('byr07', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr07->OptionCount = 2;
		$this->fields['byr07'] = &$this->byr07;

		// jml07
		$this->jml07 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml07', 'jml07', '`jml07`', '`jml07`', 4, -1, FALSE, '`jml07`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml07->Nullable = FALSE; // NOT NULL field
		$this->jml07->Required = TRUE; // Required field
		$this->jml07->Sortable = TRUE; // Allow sort
		$this->jml07->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml07'] = &$this->jml07;

		// tgl07
		$this->tgl07 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl07', 'tgl07', '`tgl07`', CastDateFieldForLike('`tgl07`', 7, "DB"), 133, 7, FALSE, '`tgl07`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl07->Sortable = TRUE; // Allow sort
		$this->tgl07->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl07'] = &$this->tgl07;

		// byr08
		$this->byr08 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr08', 'byr08', '`byr08`', '`byr08`', 202, -1, FALSE, '`byr08`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr08->Nullable = FALSE; // NOT NULL field
		$this->byr08->Sortable = TRUE; // Allow sort
		$this->byr08->DataType = DATATYPE_BOOLEAN;
		$this->byr08->Lookup = new Lookup('byr08', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr08->OptionCount = 2;
		$this->fields['byr08'] = &$this->byr08;

		// jml08
		$this->jml08 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml08', 'jml08', '`jml08`', '`jml08`', 4, -1, FALSE, '`jml08`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml08->Nullable = FALSE; // NOT NULL field
		$this->jml08->Required = TRUE; // Required field
		$this->jml08->Sortable = TRUE; // Allow sort
		$this->jml08->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml08'] = &$this->jml08;

		// tgl08
		$this->tgl08 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl08', 'tgl08', '`tgl08`', CastDateFieldForLike('`tgl08`', 7, "DB"), 133, 7, FALSE, '`tgl08`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl08->Sortable = TRUE; // Allow sort
		$this->tgl08->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl08'] = &$this->tgl08;

		// byr09
		$this->byr09 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr09', 'byr09', '`byr09`', '`byr09`', 202, -1, FALSE, '`byr09`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr09->Nullable = FALSE; // NOT NULL field
		$this->byr09->Sortable = TRUE; // Allow sort
		$this->byr09->DataType = DATATYPE_BOOLEAN;
		$this->byr09->Lookup = new Lookup('byr09', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr09->OptionCount = 2;
		$this->fields['byr09'] = &$this->byr09;

		// jml09
		$this->jml09 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml09', 'jml09', '`jml09`', '`jml09`', 4, -1, FALSE, '`jml09`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml09->Nullable = FALSE; // NOT NULL field
		$this->jml09->Required = TRUE; // Required field
		$this->jml09->Sortable = TRUE; // Allow sort
		$this->jml09->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml09'] = &$this->jml09;

		// tgl09
		$this->tgl09 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl09', 'tgl09', '`tgl09`', CastDateFieldForLike('`tgl09`', 7, "DB"), 133, 7, FALSE, '`tgl09`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl09->Sortable = TRUE; // Allow sort
		$this->tgl09->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl09'] = &$this->tgl09;

		// byr10
		$this->byr10 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr10', 'byr10', '`byr10`', '`byr10`', 202, -1, FALSE, '`byr10`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr10->Nullable = FALSE; // NOT NULL field
		$this->byr10->Sortable = TRUE; // Allow sort
		$this->byr10->DataType = DATATYPE_BOOLEAN;
		$this->byr10->Lookup = new Lookup('byr10', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr10->OptionCount = 2;
		$this->fields['byr10'] = &$this->byr10;

		// jml10
		$this->jml10 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml10', 'jml10', '`jml10`', '`jml10`', 4, -1, FALSE, '`jml10`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml10->Nullable = FALSE; // NOT NULL field
		$this->jml10->Required = TRUE; // Required field
		$this->jml10->Sortable = TRUE; // Allow sort
		$this->jml10->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml10'] = &$this->jml10;

		// tgl10
		$this->tgl10 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl10', 'tgl10', '`tgl10`', CastDateFieldForLike('`tgl10`', 7, "DB"), 133, 7, FALSE, '`tgl10`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl10->Sortable = TRUE; // Allow sort
		$this->tgl10->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl10'] = &$this->tgl10;

		// byr11
		$this->byr11 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr11', 'byr11', '`byr11`', '`byr11`', 202, -1, FALSE, '`byr11`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr11->Nullable = FALSE; // NOT NULL field
		$this->byr11->Sortable = TRUE; // Allow sort
		$this->byr11->DataType = DATATYPE_BOOLEAN;
		$this->byr11->Lookup = new Lookup('byr11', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr11->OptionCount = 2;
		$this->fields['byr11'] = &$this->byr11;

		// jml11
		$this->jml11 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml11', 'jml11', '`jml11`', '`jml11`', 4, -1, FALSE, '`jml11`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml11->Nullable = FALSE; // NOT NULL field
		$this->jml11->Required = TRUE; // Required field
		$this->jml11->Sortable = TRUE; // Allow sort
		$this->jml11->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml11'] = &$this->jml11;

		// tgl11
		$this->tgl11 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl11', 'tgl11', '`tgl11`', CastDateFieldForLike('`tgl11`', 7, "DB"), 133, 7, FALSE, '`tgl11`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl11->Sortable = TRUE; // Allow sort
		$this->tgl11->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl11'] = &$this->tgl11;

		// byr12
		$this->byr12 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_byr12', 'byr12', '`byr12`', '`byr12`', 202, -1, FALSE, '`byr12`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'CHECKBOX');
		$this->byr12->Nullable = FALSE; // NOT NULL field
		$this->byr12->Sortable = TRUE; // Allow sort
		$this->byr12->DataType = DATATYPE_BOOLEAN;
		$this->byr12->Lookup = new Lookup('byr12', 't103_daf_kelas_siswa_iuran', FALSE, '', ["","","",""], [], [], [], [], [], [], '', '');
		$this->byr12->OptionCount = 2;
		$this->fields['byr12'] = &$this->byr12;

		// jml12
		$this->jml12 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_jml12', 'jml12', '`jml12`', '`jml12`', 4, -1, FALSE, '`jml12`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->jml12->Nullable = FALSE; // NOT NULL field
		$this->jml12->Required = TRUE; // Required field
		$this->jml12->Sortable = TRUE; // Allow sort
		$this->jml12->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['jml12'] = &$this->jml12;

		// tgl12
		$this->tgl12 = new DbField('t103_daf_kelas_siswa_iuran', 't103_daf_kelas_siswa_iuran', 'x_tgl12', 'tgl12', '`tgl12`', CastDateFieldForLike('`tgl12`', 7, "DB"), 133, 7, FALSE, '`tgl12`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->tgl12->Sortable = TRUE; // Allow sort
		$this->tgl12->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['tgl12'] = &$this->tgl12;
	}

	// Field Visibility
	public function getFieldVisibility($fldParm)
	{
		global $Security;
		return $this->$fldParm->Visible; // Returns original value
	}

	// Set left column class (must be predefined col-*-* classes of Bootstrap grid system)
	function setLeftColumnClass($class)
	{
		if (preg_match('/^col\-(\w+)\-(\d+)$/', $class, $match)) {
			$this->LeftColumnClass = $class . " col-form-label ew-label";
			$this->RightColumnClass = "col-" . $match[1] . "-" . strval(12 - (int)$match[2]);
			$this->OffsetColumnClass = $this->RightColumnClass . " " . str_replace("col-", "offset-", $class);
			$this->TableLeftColumnClass = preg_replace('/^col-\w+-(\d+)$/', "w-col-$1", $class); // Change to w-col-*
		}
	}

	// Multiple column sort
	public function updateSort(&$fld, $ctrl)
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
			if ($ctrl) {
				$orderBy = $this->getSessionOrderBy();
				if (ContainsString($orderBy, $sortField . " " . $lastSort)) {
					$orderBy = str_replace($sortField . " " . $lastSort, $sortField . " " . $thisSort, $orderBy);
				} else {
					if ($orderBy <> "")
						$orderBy .= ", ";
					$orderBy .= $sortField . " " . $thisSort;
				}
				$this->setSessionOrderBy($orderBy); // Save to Session
			} else {
				$this->setSessionOrderBy($sortField . " " . $thisSort); // Save to Session
			}
		} else {
			if (!$ctrl)
				$fld->setSort("");
		}
	}

	// Current master table name
	public function getCurrentMasterTable()
	{
		return @$_SESSION[PROJECT_NAME . "_" . $this->TableVar . "_" . TABLE_MASTER_TABLE];
	}
	public function setCurrentMasterTable($v)
	{
		$_SESSION[PROJECT_NAME . "_" . $this->TableVar . "_" . TABLE_MASTER_TABLE] = $v;
	}

	// Session master WHERE clause
	public function getMasterFilter()
	{

		// Master filter
		$masterFilter = "";
		if ($this->getCurrentMasterTable() == "v102_daf_kelas_siswa") {
			if ($this->daf_kelas_siswa_id->getSessionValue() <> "")
				$masterFilter .= "`id`=" . QuotedValue($this->daf_kelas_siswa_id->getSessionValue(), DATATYPE_NUMBER, "DB");
			else
				return "";
		}
		return $masterFilter;
	}

	// Session detail WHERE clause
	public function getDetailFilter()
	{

		// Detail filter
		$detailFilter = "";
		if ($this->getCurrentMasterTable() == "v102_daf_kelas_siswa") {
			if ($this->daf_kelas_siswa_id->getSessionValue() <> "")
				$detailFilter .= "`daf_kelas_siswa_id`=" . QuotedValue($this->daf_kelas_siswa_id->getSessionValue(), DATATYPE_NUMBER, "DB");
			else
				return "";
		}
		return $detailFilter;
	}

	// Master filter
	public function sqlMasterFilter_v102_daf_kelas_siswa()
	{
		return "`id`=@id@";
	}

	// Detail filter
	public function sqlDetailFilter_v102_daf_kelas_siswa()
	{
		return "`daf_kelas_siswa_id`=@daf_kelas_siswa_id@";
	}

	// Table level SQL
	public function getSqlFrom() // From
	{
		return ($this->SqlFrom <> "") ? $this->SqlFrom : "`t103_daf_kelas_siswa_iuran`";
	}
	public function sqlFrom() // For backward compatibility
	{
		return $this->getSqlFrom();
	}
	public function setSqlFrom($v)
	{
		$this->SqlFrom = $v;
	}
	public function getSqlSelect() // Select
	{
		return ($this->SqlSelect <> "") ? $this->SqlSelect : "SELECT * FROM " . $this->getSqlFrom();
	}
	public function sqlSelect() // For backward compatibility
	{
		return $this->getSqlSelect();
	}
	public function setSqlSelect($v)
	{
		$this->SqlSelect = $v;
	}
	public function getSqlWhere() // Where
	{
		$where = ($this->SqlWhere <> "") ? $this->SqlWhere : "";
		$this->TableFilter = "";
		AddFilter($where, $this->TableFilter);
		return $where;
	}
	public function sqlWhere() // For backward compatibility
	{
		return $this->getSqlWhere();
	}
	public function setSqlWhere($v)
	{
		$this->SqlWhere = $v;
	}
	public function getSqlGroupBy() // Group By
	{
		return ($this->SqlGroupBy <> "") ? $this->SqlGroupBy : "";
	}
	public function sqlGroupBy() // For backward compatibility
	{
		return $this->getSqlGroupBy();
	}
	public function setSqlGroupBy($v)
	{
		$this->SqlGroupBy = $v;
	}
	public function getSqlHaving() // Having
	{
		return ($this->SqlHaving <> "") ? $this->SqlHaving : "";
	}
	public function sqlHaving() // For backward compatibility
	{
		return $this->getSqlHaving();
	}
	public function setSqlHaving($v)
	{
		$this->SqlHaving = $v;
	}
	public function getSqlOrderBy() // Order By
	{
		return ($this->SqlOrderBy <> "") ? $this->SqlOrderBy : "`iuran_id` ASC";
	}
	public function sqlOrderBy() // For backward compatibility
	{
		return $this->getSqlOrderBy();
	}
	public function setSqlOrderBy($v)
	{
		$this->SqlOrderBy = $v;
	}

	// Apply User ID filters
	public function applyUserIDFilters($filter)
	{
		return $filter;
	}

	// Check if User ID security allows view all
	public function userIDAllow($id = "")
	{
		$allow = USER_ID_ALLOW;
		switch ($id) {
			case "add":
			case "copy":
			case "gridadd":
			case "register":
			case "addopt":
				return (($allow & 1) == 1);
			case "edit":
			case "gridedit":
			case "update":
			case "changepwd":
			case "forgotpwd":
				return (($allow & 4) == 4);
			case "delete":
				return (($allow & 2) == 2);
			case "view":
				return (($allow & 32) == 32);
			case "search":
				return (($allow & 64) == 64);
			default:
				return (($allow & 8) == 8);
		}
	}

	// Get SQL
	public function getSql($where, $orderBy = "")
	{
		return BuildSelectSql($this->getSqlSelect(), $this->getSqlWhere(),
			$this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderBy(),
			$where, $orderBy);
	}

	// Table SQL
	public function getCurrentSql()
	{
		$filter = $this->CurrentFilter;
		$filter = $this->applyUserIDFilters($filter);
		$sort = $this->getSessionOrderBy();
		return $this->getSql($filter, $sort);
	}

	// Table SQL with List page filter
	public function getListSql()
	{
		$filter = $this->UseSessionForListSql ? $this->getSessionWhere() : "";
		AddFilter($filter, $this->CurrentFilter);
		$filter = $this->applyUserIDFilters($filter);
		$this->Recordset_Selecting($filter);
		$select = $this->getSqlSelect();
		$sort = $this->UseSessionForListSql ? $this->getSessionOrderBy() : "";
		return BuildSelectSql($select, $this->getSqlWhere(), $this->getSqlGroupBy(),
			$this->getSqlHaving(), $this->getSqlOrderBy(), $filter, $sort);
	}

	// Get ORDER BY clause
	public function getOrderBy()
	{
		$sort = $this->getSessionOrderBy();
		return BuildSelectSql("", "", "", "", $this->getSqlOrderBy(), "", $sort);
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

	// Get record count based on filter (for detail record count in master table pages)
	public function loadRecordCount($filter)
	{
		$origFilter = $this->CurrentFilter;
		$this->CurrentFilter = $filter;
		$this->Recordset_Selecting($this->CurrentFilter);
		$select = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlSelect() : "SELECT * FROM " . $this->getSqlFrom();
		$groupBy = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlGroupBy() : "";
		$having = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlHaving() : "";
		$sql = BuildSelectSql($select, $this->getSqlWhere(), $groupBy, $having, "", $this->CurrentFilter, "");
		$cnt = $this->getRecordCount($sql);
		$this->CurrentFilter = $origFilter;
		return $cnt;
	}

	// Get record count (for current List page)
	public function listRecordCount()
	{
		$filter = $this->getSessionWhere();
		AddFilter($filter, $this->CurrentFilter);
		$filter = $this->applyUserIDFilters($filter);
		$this->Recordset_Selecting($filter);
		$select = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlSelect() : "SELECT * FROM " . $this->getSqlFrom();
		$groupBy = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlGroupBy() : "";
		$having = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlHaving() : "";
		$sql = BuildSelectSql($select, $this->getSqlWhere(), $groupBy, $having, "", $filter, "");
		$cnt = $this->getRecordCount($sql);
		return $cnt;
	}

	// INSERT statement
	protected function insertSql(&$rs)
	{
		$names = "";
		$values = "";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]) || $this->fields[$name]->IsCustom)
				continue;
			$names .= $this->fields[$name]->Expression . ",";
			$values .= QuotedValue($value, $this->fields[$name]->DataType, $this->Dbid) . ",";
		}
		$names = preg_replace('/,+$/', "", $names);
		$values = preg_replace('/,+$/', "", $values);
		return "INSERT INTO " . $this->UpdateTable . " ($names) VALUES ($values)";
	}

	// Insert
	public function insert(&$rs)
	{
		$conn = &$this->getConnection();
		$success = $conn->execute($this->insertSql($rs));
		if ($success) {

			// Get insert id if necessary
			$this->id->setDbValue($conn->insert_ID());
			$rs['id'] = $this->id->DbValue;
			if ($this->AuditTrailOnAdd)
				$this->writeAuditTrailOnAdd($rs);
		}
		return $success;
	}

	// UPDATE statement
	protected function updateSql(&$rs, $where = "", $curfilter = TRUE)
	{
		$sql = "UPDATE " . $this->UpdateTable . " SET ";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]) || $this->fields[$name]->IsCustom || $this->fields[$name]->IsPrimaryKey)
				continue;
			$sql .= $this->fields[$name]->Expression . "=";
			$sql .= QuotedValue($value, $this->fields[$name]->DataType, $this->Dbid) . ",";
		}
		$sql = preg_replace('/,+$/', "", $sql);
		$filter = ($curfilter) ? $this->CurrentFilter : "";
		if (is_array($where))
			$where = $this->arrayToFilter($where);
		AddFilter($filter, $where);
		if ($filter <> "")
			$sql .= " WHERE " . $filter;
		return $sql;
	}

	// Update
	public function update(&$rs, $where = "", $rsold = NULL, $curfilter = TRUE)
	{
		$conn = &$this->getConnection();
		$success = $conn->execute($this->updateSql($rs, $where, $curfilter));
		if ($success && $this->AuditTrailOnEdit && $rsold) {
			$rsaudit = $rs;
			$fldname = 'id';
			if (!array_key_exists($fldname, $rsaudit))
				$rsaudit[$fldname] = $rsold[$fldname];
			$this->writeAuditTrailOnEdit($rsold, $rsaudit);
		}
		return $success;
	}

	// DELETE statement
	protected function deleteSql(&$rs, $where = "", $curfilter = TRUE)
	{
		$sql = "DELETE FROM " . $this->UpdateTable . " WHERE ";
		if (is_array($where))
			$where = $this->arrayToFilter($where);
		if ($rs) {
			if (array_key_exists('id', $rs))
				AddFilter($where, QuotedName('id', $this->Dbid) . '=' . QuotedValue($rs['id'], $this->id->DataType, $this->Dbid));
		}
		$filter = ($curfilter) ? $this->CurrentFilter : "";
		AddFilter($filter, $where);
		if ($filter <> "")
			$sql .= $filter;
		else
			$sql .= "0=1"; // Avoid delete
		return $sql;
	}

	// Delete
	public function delete(&$rs, $where = "", $curfilter = FALSE)
	{
		$success = TRUE;
		$conn = &$this->getConnection();
		if ($success)
			$success = $conn->execute($this->deleteSql($rs, $where, $curfilter));
		if ($success && $this->AuditTrailOnDelete)
			$this->writeAuditTrailOnDelete($rs);
		return $success;
	}

	// Load DbValue from recordset or array
	protected function loadDbValues(&$rs)
	{
		if (!$rs || !is_array($rs) && $rs->EOF)
			return;
		$row = is_array($rs) ? $rs : $rs->fields;
		$this->id->DbValue = $row['id'];
		$this->daf_kelas_siswa_id->DbValue = $row['daf_kelas_siswa_id'];
		$this->iuran_id->DbValue = $row['iuran_id'];
		$this->Jumlah->DbValue = $row['Jumlah'];
		$this->byr01->DbValue = $row['byr01'];
		$this->jml01->DbValue = $row['jml01'];
		$this->tgl01->DbValue = $row['tgl01'];
		$this->byr02->DbValue = $row['byr02'];
		$this->jml02->DbValue = $row['jml02'];
		$this->tgl02->DbValue = $row['tgl02'];
		$this->byr03->DbValue = $row['byr03'];
		$this->jml03->DbValue = $row['jml03'];
		$this->tgl03->DbValue = $row['tgl03'];
		$this->byr04->DbValue = $row['byr04'];
		$this->jml04->DbValue = $row['jml04'];
		$this->tgl04->DbValue = $row['tgl04'];
		$this->byr05->DbValue = $row['byr05'];
		$this->jml05->DbValue = $row['jml05'];
		$this->tgl05->DbValue = $row['tgl05'];
		$this->byr06->DbValue = $row['byr06'];
		$this->jml06->DbValue = $row['jml06'];
		$this->tgl06->DbValue = $row['tgl06'];
		$this->byr07->DbValue = $row['byr07'];
		$this->jml07->DbValue = $row['jml07'];
		$this->tgl07->DbValue = $row['tgl07'];
		$this->byr08->DbValue = $row['byr08'];
		$this->jml08->DbValue = $row['jml08'];
		$this->tgl08->DbValue = $row['tgl08'];
		$this->byr09->DbValue = $row['byr09'];
		$this->jml09->DbValue = $row['jml09'];
		$this->tgl09->DbValue = $row['tgl09'];
		$this->byr10->DbValue = $row['byr10'];
		$this->jml10->DbValue = $row['jml10'];
		$this->tgl10->DbValue = $row['tgl10'];
		$this->byr11->DbValue = $row['byr11'];
		$this->jml11->DbValue = $row['jml11'];
		$this->tgl11->DbValue = $row['tgl11'];
		$this->byr12->DbValue = $row['byr12'];
		$this->jml12->DbValue = $row['jml12'];
		$this->tgl12->DbValue = $row['tgl12'];
	}

	// Delete uploaded files
	public function deleteUploadedFiles($row)
	{
		$this->loadDbValues($row);
	}

	// Record filter WHERE clause
	protected function sqlKeyFilter()
	{
		return "`id` = @id@";
	}

	// Get record filter
	public function getRecordFilter($row = NULL)
	{
		$keyFilter = $this->sqlKeyFilter();
		$val = is_array($row) ? (array_key_exists('id', $row) ? $row['id'] : NULL) : $this->id->CurrentValue;
		if (!is_numeric($val))
			return "0=1"; // Invalid key
		if ($val == NULL)
			return "0=1"; // Invalid key
		else
			$keyFilter = str_replace("@id@", AdjustSql($val, $this->Dbid), $keyFilter); // Replace key value
		return $keyFilter;
	}

	// Return page URL
	public function getReturnUrl()
	{
		$name = PROJECT_NAME . "_" . $this->TableVar . "_" . TABLE_RETURN_URL;

		// Get referer URL automatically
		if (ServerVar("HTTP_REFERER") <> "" && ReferPageName() <> CurrentPageName() && ReferPageName() <> "login.php") // Referer not same page or login page
			$_SESSION[$name] = ServerVar("HTTP_REFERER"); // Save to Session
		if (@$_SESSION[$name] <> "") {
			return $_SESSION[$name];
		} else {
			return "t103_daf_kelas_siswa_iuranlist.php";
		}
	}
	public function setReturnUrl($v)
	{
		$_SESSION[PROJECT_NAME . "_" . $this->TableVar . "_" . TABLE_RETURN_URL] = $v;
	}

	// Get modal caption
	public function getModalCaption($pageName)
	{
		global $Language;
		if ($pageName == "t103_daf_kelas_siswa_iuranview.php")
			return $Language->phrase("View");
		elseif ($pageName == "t103_daf_kelas_siswa_iuranedit.php")
			return $Language->phrase("Edit");
		elseif ($pageName == "t103_daf_kelas_siswa_iuranadd.php")
			return $Language->phrase("Add");
		else
			return "";
	}

	// List URL
	public function getListUrl()
	{
		return "t103_daf_kelas_siswa_iuranlist.php";
	}

	// View URL
	public function getViewUrl($parm = "")
	{
		if ($parm <> "")
			$url = $this->keyUrl("t103_daf_kelas_siswa_iuranview.php", $this->getUrlParm($parm));
		else
			$url = $this->keyUrl("t103_daf_kelas_siswa_iuranview.php", $this->getUrlParm(TABLE_SHOW_DETAIL . "="));
		return $this->addMasterUrl($url);
	}

	// Add URL
	public function getAddUrl($parm = "")
	{
		if ($parm <> "")
			$url = "t103_daf_kelas_siswa_iuranadd.php?" . $this->getUrlParm($parm);
		else
			$url = "t103_daf_kelas_siswa_iuranadd.php";
		return $this->addMasterUrl($url);
	}

	// Edit URL
	public function getEditUrl($parm = "")
	{
		$url = $this->keyUrl("t103_daf_kelas_siswa_iuranedit.php", $this->getUrlParm($parm));
		return $this->addMasterUrl($url);
	}

	// Inline edit URL
	public function getInlineEditUrl()
	{
		$url = $this->keyUrl(CurrentPageName(), $this->getUrlParm("action=edit"));
		return $this->addMasterUrl($url);
	}

	// Copy URL
	public function getCopyUrl($parm = "")
	{
		$url = $this->keyUrl("t103_daf_kelas_siswa_iuranadd.php", $this->getUrlParm($parm));
		return $this->addMasterUrl($url);
	}

	// Inline copy URL
	public function getInlineCopyUrl()
	{
		$url = $this->keyUrl(CurrentPageName(), $this->getUrlParm("action=copy"));
		return $this->addMasterUrl($url);
	}

	// Delete URL
	public function getDeleteUrl()
	{
		return $this->keyUrl("t103_daf_kelas_siswa_iurandelete.php", $this->getUrlParm());
	}

	// Add master url
	public function addMasterUrl($url)
	{
		if ($this->getCurrentMasterTable() == "v102_daf_kelas_siswa" && !ContainsString($url, TABLE_SHOW_MASTER . "=")) {
			$url .= (ContainsString($url, "?") ? "&" : "?") . TABLE_SHOW_MASTER . "=" . $this->getCurrentMasterTable();
			$url .= "&fk_id=" . urlencode($this->daf_kelas_siswa_id->CurrentValue);
		}
		return $url;
	}
	public function keyToJson($htmlEncode = FALSE)
	{
		$json = "";
		$json .= "id:" . JsonEncode($this->id->CurrentValue, "number");
		$json = "{" . $json . "}";
		if ($htmlEncode)
			$json = HtmlEncode($json);
		return $json;
	}

	// Add key value to URL
	public function keyUrl($url, $parm = "")
	{
		$url = $url . "?";
		if ($parm <> "")
			$url .= $parm . "&";
		if ($this->id->CurrentValue != NULL) {
			$url .= "id=" . urlencode($this->id->CurrentValue);
		} else {
			return "javascript:ew.alert(ew.language.phrase('InvalidRecord'));";
		}
		return $url;
	}

	// Sort URL
	public function sortUrl(&$fld)
	{
		if ($this->CurrentAction || $this->isExport() ||
			in_array($fld->Type, array(128, 204, 205))) { // Unsortable data type
				return "";
		} elseif ($fld->Sortable) {
			$urlParm = $this->getUrlParm("order=" . urlencode($fld->Name) . "&amp;ordertype=" . $fld->reverseSort());
			return $this->addMasterUrl(CurrentPageName() . "?" . $urlParm);
		} else {
			return "";
		}
	}

	// Get record keys from Post/Get/Session
	public function getRecordKeys()
	{
		global $COMPOSITE_KEY_SEPARATOR;
		$arKeys = array();
		$arKey = array();
		if (Param("key_m") !== NULL) {
			$arKeys = Param("key_m");
			$cnt = count($arKeys);
		} else {
			if (Param("id") !== NULL)
				$arKeys[] = Param("id");
			elseif (IsApi() && Key(0) !== NULL)
				$arKeys[] = Key(0);
			elseif (IsApi() && Route(2) !== NULL)
				$arKeys[] = Route(2);
			else
				$arKeys = NULL; // Do not setup

			//return $arKeys; // Do not return yet, so the values will also be checked by the following code
		}

		// Check keys
		$ar = array();
		if (is_array($arKeys)) {
			foreach ($arKeys as $key) {
				if (!is_numeric($key))
					continue;
				$ar[] = $key;
			}
		}
		return $ar;
	}

	// Get filter from record keys
	public function getFilterFromRecordKeys()
	{
		$arKeys = $this->getRecordKeys();
		$keyFilter = "";
		foreach ($arKeys as $key) {
			if ($keyFilter <> "") $keyFilter .= " OR ";
			$this->id->CurrentValue = $key;
			$keyFilter .= "(" . $this->getRecordFilter() . ")";
		}
		return $keyFilter;
	}

	// Load rows based on filter
	public function &loadRs($filter)
	{

		// Set up filter (WHERE Clause)
		$sql = $this->getSql($filter);
		$conn = &$this->getConnection();
		$rs = $conn->execute($sql);
		return $rs;
	}

	// Load row values from recordset
	public function loadListRowValues(&$rs)
	{
		$this->id->setDbValue($rs->fields('id'));
		$this->daf_kelas_siswa_id->setDbValue($rs->fields('daf_kelas_siswa_id'));
		$this->iuran_id->setDbValue($rs->fields('iuran_id'));
		$this->Jumlah->setDbValue($rs->fields('Jumlah'));
		$this->byr01->setDbValue($rs->fields('byr01'));
		$this->jml01->setDbValue($rs->fields('jml01'));
		$this->tgl01->setDbValue($rs->fields('tgl01'));
		$this->byr02->setDbValue($rs->fields('byr02'));
		$this->jml02->setDbValue($rs->fields('jml02'));
		$this->tgl02->setDbValue($rs->fields('tgl02'));
		$this->byr03->setDbValue($rs->fields('byr03'));
		$this->jml03->setDbValue($rs->fields('jml03'));
		$this->tgl03->setDbValue($rs->fields('tgl03'));
		$this->byr04->setDbValue($rs->fields('byr04'));
		$this->jml04->setDbValue($rs->fields('jml04'));
		$this->tgl04->setDbValue($rs->fields('tgl04'));
		$this->byr05->setDbValue($rs->fields('byr05'));
		$this->jml05->setDbValue($rs->fields('jml05'));
		$this->tgl05->setDbValue($rs->fields('tgl05'));
		$this->byr06->setDbValue($rs->fields('byr06'));
		$this->jml06->setDbValue($rs->fields('jml06'));
		$this->tgl06->setDbValue($rs->fields('tgl06'));
		$this->byr07->setDbValue($rs->fields('byr07'));
		$this->jml07->setDbValue($rs->fields('jml07'));
		$this->tgl07->setDbValue($rs->fields('tgl07'));
		$this->byr08->setDbValue($rs->fields('byr08'));
		$this->jml08->setDbValue($rs->fields('jml08'));
		$this->tgl08->setDbValue($rs->fields('tgl08'));
		$this->byr09->setDbValue($rs->fields('byr09'));
		$this->jml09->setDbValue($rs->fields('jml09'));
		$this->tgl09->setDbValue($rs->fields('tgl09'));
		$this->byr10->setDbValue($rs->fields('byr10'));
		$this->jml10->setDbValue($rs->fields('jml10'));
		$this->tgl10->setDbValue($rs->fields('tgl10'));
		$this->byr11->setDbValue($rs->fields('byr11'));
		$this->jml11->setDbValue($rs->fields('jml11'));
		$this->tgl11->setDbValue($rs->fields('tgl11'));
		$this->byr12->setDbValue($rs->fields('byr12'));
		$this->jml12->setDbValue($rs->fields('jml12'));
		$this->tgl12->setDbValue($rs->fields('tgl12'));
	}

	// Render list row values
	public function renderListRow()
	{
		global $Security, $CurrentLanguage, $Language;

		// Call Row Rendering event
		$this->Row_Rendering();

		// Common render codes
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

		// id
		$this->id->LinkCustomAttributes = "";
		$this->id->HrefValue = "";
		$this->id->TooltipValue = "";

		// daf_kelas_siswa_id
		$this->daf_kelas_siswa_id->LinkCustomAttributes = "";
		$this->daf_kelas_siswa_id->HrefValue = "";
		$this->daf_kelas_siswa_id->TooltipValue = "";

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

		// Call Row Rendered event
		$this->Row_Rendered();

		// Save data for Custom Template
		$this->Rows[] = $this->customTemplateFieldValues();
	}

	// Render edit row values
	public function renderEditRow()
	{
		global $Security, $CurrentLanguage, $Language;

		// Call Row Rendering event
		$this->Row_Rendering();

		// id
		$this->id->EditAttrs["class"] = "form-control";
		$this->id->EditCustomAttributes = "";
		$this->id->EditValue = $this->id->CurrentValue;
		$this->id->ViewCustomAttributes = "";

		// daf_kelas_siswa_id
		$this->daf_kelas_siswa_id->EditAttrs["class"] = "form-control";
		$this->daf_kelas_siswa_id->EditCustomAttributes = "";
		if ($this->daf_kelas_siswa_id->getSessionValue() <> "") {
			$this->daf_kelas_siswa_id->CurrentValue = $this->daf_kelas_siswa_id->getSessionValue();
		$this->daf_kelas_siswa_id->ViewValue = $this->daf_kelas_siswa_id->CurrentValue;
		$this->daf_kelas_siswa_id->ViewValue = FormatNumber($this->daf_kelas_siswa_id->ViewValue, 0, -2, -2, -2);
		$this->daf_kelas_siswa_id->ViewCustomAttributes = "";
		} else {
		$this->daf_kelas_siswa_id->EditValue = $this->daf_kelas_siswa_id->CurrentValue;
		$this->daf_kelas_siswa_id->PlaceHolder = RemoveHtml($this->daf_kelas_siswa_id->caption());
		}

		// iuran_id
		$this->iuran_id->EditAttrs["class"] = "form-control";
		$this->iuran_id->EditCustomAttributes = "";

		// Jumlah
		$this->Jumlah->EditAttrs["class"] = "form-control";
		$this->Jumlah->EditCustomAttributes = "";
		$this->Jumlah->EditValue = $this->Jumlah->CurrentValue;
		$this->Jumlah->PlaceHolder = RemoveHtml($this->Jumlah->caption());
		if (strval($this->Jumlah->EditValue) <> "" && is_numeric($this->Jumlah->EditValue))
			$this->Jumlah->EditValue = FormatNumber($this->Jumlah->EditValue, -2, -2, -2, -2);

		// byr01
		$this->byr01->EditCustomAttributes = "";
		$this->byr01->EditValue = $this->byr01->options(FALSE);

		// jml01
		$this->jml01->EditAttrs["class"] = "form-control";
		$this->jml01->EditCustomAttributes = "";
		$this->jml01->EditValue = $this->jml01->CurrentValue;
		$this->jml01->PlaceHolder = RemoveHtml($this->jml01->caption());
		if (strval($this->jml01->EditValue) <> "" && is_numeric($this->jml01->EditValue))
			$this->jml01->EditValue = FormatNumber($this->jml01->EditValue, -2, -2, -2, -2);

		// tgl01
		$this->tgl01->EditAttrs["class"] = "form-control";
		$this->tgl01->EditCustomAttributes = "";
		$this->tgl01->EditValue = FormatDateTime($this->tgl01->CurrentValue, 7);
		$this->tgl01->PlaceHolder = RemoveHtml($this->tgl01->caption());

		// byr02
		$this->byr02->EditCustomAttributes = "";
		$this->byr02->EditValue = $this->byr02->options(FALSE);

		// jml02
		$this->jml02->EditAttrs["class"] = "form-control";
		$this->jml02->EditCustomAttributes = "";
		$this->jml02->EditValue = $this->jml02->CurrentValue;
		$this->jml02->PlaceHolder = RemoveHtml($this->jml02->caption());
		if (strval($this->jml02->EditValue) <> "" && is_numeric($this->jml02->EditValue))
			$this->jml02->EditValue = FormatNumber($this->jml02->EditValue, -2, -2, -2, -2);

		// tgl02
		$this->tgl02->EditAttrs["class"] = "form-control";
		$this->tgl02->EditCustomAttributes = "";
		$this->tgl02->EditValue = FormatDateTime($this->tgl02->CurrentValue, 7);
		$this->tgl02->PlaceHolder = RemoveHtml($this->tgl02->caption());

		// byr03
		$this->byr03->EditCustomAttributes = "";
		$this->byr03->EditValue = $this->byr03->options(FALSE);

		// jml03
		$this->jml03->EditAttrs["class"] = "form-control";
		$this->jml03->EditCustomAttributes = "";
		$this->jml03->EditValue = $this->jml03->CurrentValue;
		$this->jml03->PlaceHolder = RemoveHtml($this->jml03->caption());
		if (strval($this->jml03->EditValue) <> "" && is_numeric($this->jml03->EditValue))
			$this->jml03->EditValue = FormatNumber($this->jml03->EditValue, -2, -2, -2, -2);

		// tgl03
		$this->tgl03->EditAttrs["class"] = "form-control";
		$this->tgl03->EditCustomAttributes = "";
		$this->tgl03->EditValue = FormatDateTime($this->tgl03->CurrentValue, 7);
		$this->tgl03->PlaceHolder = RemoveHtml($this->tgl03->caption());

		// byr04
		$this->byr04->EditCustomAttributes = "";
		$this->byr04->EditValue = $this->byr04->options(FALSE);

		// jml04
		$this->jml04->EditAttrs["class"] = "form-control";
		$this->jml04->EditCustomAttributes = "";
		$this->jml04->EditValue = $this->jml04->CurrentValue;
		$this->jml04->PlaceHolder = RemoveHtml($this->jml04->caption());
		if (strval($this->jml04->EditValue) <> "" && is_numeric($this->jml04->EditValue))
			$this->jml04->EditValue = FormatNumber($this->jml04->EditValue, -2, -2, -2, -2);

		// tgl04
		$this->tgl04->EditAttrs["class"] = "form-control";
		$this->tgl04->EditCustomAttributes = "";
		$this->tgl04->EditValue = FormatDateTime($this->tgl04->CurrentValue, 7);
		$this->tgl04->PlaceHolder = RemoveHtml($this->tgl04->caption());

		// byr05
		$this->byr05->EditCustomAttributes = "";
		$this->byr05->EditValue = $this->byr05->options(FALSE);

		// jml05
		$this->jml05->EditAttrs["class"] = "form-control";
		$this->jml05->EditCustomAttributes = "";
		$this->jml05->EditValue = $this->jml05->CurrentValue;
		$this->jml05->PlaceHolder = RemoveHtml($this->jml05->caption());
		if (strval($this->jml05->EditValue) <> "" && is_numeric($this->jml05->EditValue))
			$this->jml05->EditValue = FormatNumber($this->jml05->EditValue, -2, -2, -2, -2);

		// tgl05
		$this->tgl05->EditAttrs["class"] = "form-control";
		$this->tgl05->EditCustomAttributes = "";
		$this->tgl05->EditValue = FormatDateTime($this->tgl05->CurrentValue, 7);
		$this->tgl05->PlaceHolder = RemoveHtml($this->tgl05->caption());

		// byr06
		$this->byr06->EditCustomAttributes = "";
		$this->byr06->EditValue = $this->byr06->options(FALSE);

		// jml06
		$this->jml06->EditAttrs["class"] = "form-control";
		$this->jml06->EditCustomAttributes = "";
		$this->jml06->EditValue = $this->jml06->CurrentValue;
		$this->jml06->PlaceHolder = RemoveHtml($this->jml06->caption());
		if (strval($this->jml06->EditValue) <> "" && is_numeric($this->jml06->EditValue))
			$this->jml06->EditValue = FormatNumber($this->jml06->EditValue, -2, -2, -2, -2);

		// tgl06
		$this->tgl06->EditAttrs["class"] = "form-control";
		$this->tgl06->EditCustomAttributes = "";
		$this->tgl06->EditValue = FormatDateTime($this->tgl06->CurrentValue, 7);
		$this->tgl06->PlaceHolder = RemoveHtml($this->tgl06->caption());

		// byr07
		$this->byr07->EditCustomAttributes = "";
		$this->byr07->EditValue = $this->byr07->options(FALSE);

		// jml07
		$this->jml07->EditAttrs["class"] = "form-control";
		$this->jml07->EditCustomAttributes = "";
		$this->jml07->EditValue = $this->jml07->CurrentValue;
		$this->jml07->PlaceHolder = RemoveHtml($this->jml07->caption());
		if (strval($this->jml07->EditValue) <> "" && is_numeric($this->jml07->EditValue))
			$this->jml07->EditValue = FormatNumber($this->jml07->EditValue, -2, -2, -2, -2);

		// tgl07
		$this->tgl07->EditAttrs["class"] = "form-control";
		$this->tgl07->EditCustomAttributes = "";
		$this->tgl07->EditValue = FormatDateTime($this->tgl07->CurrentValue, 7);
		$this->tgl07->PlaceHolder = RemoveHtml($this->tgl07->caption());

		// byr08
		$this->byr08->EditCustomAttributes = "";
		$this->byr08->EditValue = $this->byr08->options(FALSE);

		// jml08
		$this->jml08->EditAttrs["class"] = "form-control";
		$this->jml08->EditCustomAttributes = "";
		$this->jml08->EditValue = $this->jml08->CurrentValue;
		$this->jml08->PlaceHolder = RemoveHtml($this->jml08->caption());
		if (strval($this->jml08->EditValue) <> "" && is_numeric($this->jml08->EditValue))
			$this->jml08->EditValue = FormatNumber($this->jml08->EditValue, -2, -2, -2, -2);

		// tgl08
		$this->tgl08->EditAttrs["class"] = "form-control";
		$this->tgl08->EditCustomAttributes = "";
		$this->tgl08->EditValue = FormatDateTime($this->tgl08->CurrentValue, 7);
		$this->tgl08->PlaceHolder = RemoveHtml($this->tgl08->caption());

		// byr09
		$this->byr09->EditCustomAttributes = "";
		$this->byr09->EditValue = $this->byr09->options(FALSE);

		// jml09
		$this->jml09->EditAttrs["class"] = "form-control";
		$this->jml09->EditCustomAttributes = "";
		$this->jml09->EditValue = $this->jml09->CurrentValue;
		$this->jml09->PlaceHolder = RemoveHtml($this->jml09->caption());
		if (strval($this->jml09->EditValue) <> "" && is_numeric($this->jml09->EditValue))
			$this->jml09->EditValue = FormatNumber($this->jml09->EditValue, -2, -2, -2, -2);

		// tgl09
		$this->tgl09->EditAttrs["class"] = "form-control";
		$this->tgl09->EditCustomAttributes = "";
		$this->tgl09->EditValue = FormatDateTime($this->tgl09->CurrentValue, 7);
		$this->tgl09->PlaceHolder = RemoveHtml($this->tgl09->caption());

		// byr10
		$this->byr10->EditCustomAttributes = "";
		$this->byr10->EditValue = $this->byr10->options(FALSE);

		// jml10
		$this->jml10->EditAttrs["class"] = "form-control";
		$this->jml10->EditCustomAttributes = "";
		$this->jml10->EditValue = $this->jml10->CurrentValue;
		$this->jml10->PlaceHolder = RemoveHtml($this->jml10->caption());
		if (strval($this->jml10->EditValue) <> "" && is_numeric($this->jml10->EditValue))
			$this->jml10->EditValue = FormatNumber($this->jml10->EditValue, -2, -2, -2, -2);

		// tgl10
		$this->tgl10->EditAttrs["class"] = "form-control";
		$this->tgl10->EditCustomAttributes = "";
		$this->tgl10->EditValue = FormatDateTime($this->tgl10->CurrentValue, 7);
		$this->tgl10->PlaceHolder = RemoveHtml($this->tgl10->caption());

		// byr11
		$this->byr11->EditCustomAttributes = "";
		$this->byr11->EditValue = $this->byr11->options(FALSE);

		// jml11
		$this->jml11->EditAttrs["class"] = "form-control";
		$this->jml11->EditCustomAttributes = "";
		$this->jml11->EditValue = $this->jml11->CurrentValue;
		$this->jml11->PlaceHolder = RemoveHtml($this->jml11->caption());
		if (strval($this->jml11->EditValue) <> "" && is_numeric($this->jml11->EditValue))
			$this->jml11->EditValue = FormatNumber($this->jml11->EditValue, -2, -2, -2, -2);

		// tgl11
		$this->tgl11->EditAttrs["class"] = "form-control";
		$this->tgl11->EditCustomAttributes = "";
		$this->tgl11->EditValue = FormatDateTime($this->tgl11->CurrentValue, 7);
		$this->tgl11->PlaceHolder = RemoveHtml($this->tgl11->caption());

		// byr12
		$this->byr12->EditCustomAttributes = "";
		$this->byr12->EditValue = $this->byr12->options(FALSE);

		// jml12
		$this->jml12->EditAttrs["class"] = "form-control";
		$this->jml12->EditCustomAttributes = "";
		$this->jml12->EditValue = $this->jml12->CurrentValue;
		$this->jml12->PlaceHolder = RemoveHtml($this->jml12->caption());
		if (strval($this->jml12->EditValue) <> "" && is_numeric($this->jml12->EditValue))
			$this->jml12->EditValue = FormatNumber($this->jml12->EditValue, -2, -2, -2, -2);

		// tgl12
		$this->tgl12->EditAttrs["class"] = "form-control";
		$this->tgl12->EditCustomAttributes = "";
		$this->tgl12->EditValue = FormatDateTime($this->tgl12->CurrentValue, 7);
		$this->tgl12->PlaceHolder = RemoveHtml($this->tgl12->caption());

		// Call Row Rendered event
		$this->Row_Rendered();
	}

	// Aggregate list row values
	public function aggregateListRowValues()
	{
	}

	// Aggregate list row (for rendering)
	public function aggregateListRow()
	{

		// Call Row Rendered event
		$this->Row_Rendered();
	}

	// Export data in HTML/CSV/Word/Excel/Email/PDF format
	public function exportDocument($doc, $recordset, $startRec = 1, $stopRec = 1, $exportPageType = "")
	{
		if (!$recordset || !$doc)
			return;
		if (!$doc->ExportCustom) {

			// Write header
			$doc->exportTableHeader();
			if ($doc->Horizontal) { // Horizontal format, write header
				$doc->beginExportRow();
				if ($exportPageType == "view") {
					$doc->exportCaption($this->iuran_id);
					$doc->exportCaption($this->Jumlah);
					$doc->exportCaption($this->byr01);
					$doc->exportCaption($this->jml01);
					$doc->exportCaption($this->tgl01);
					$doc->exportCaption($this->byr02);
					$doc->exportCaption($this->jml02);
					$doc->exportCaption($this->tgl02);
					$doc->exportCaption($this->byr03);
					$doc->exportCaption($this->jml03);
					$doc->exportCaption($this->tgl03);
					$doc->exportCaption($this->byr04);
					$doc->exportCaption($this->jml04);
					$doc->exportCaption($this->tgl04);
					$doc->exportCaption($this->byr05);
					$doc->exportCaption($this->jml05);
					$doc->exportCaption($this->tgl05);
					$doc->exportCaption($this->byr06);
					$doc->exportCaption($this->jml06);
					$doc->exportCaption($this->tgl06);
					$doc->exportCaption($this->byr07);
					$doc->exportCaption($this->jml07);
					$doc->exportCaption($this->tgl07);
					$doc->exportCaption($this->byr08);
					$doc->exportCaption($this->jml08);
					$doc->exportCaption($this->tgl08);
					$doc->exportCaption($this->byr09);
					$doc->exportCaption($this->jml09);
					$doc->exportCaption($this->tgl09);
					$doc->exportCaption($this->byr10);
					$doc->exportCaption($this->jml10);
					$doc->exportCaption($this->tgl10);
					$doc->exportCaption($this->byr11);
					$doc->exportCaption($this->jml11);
					$doc->exportCaption($this->tgl11);
					$doc->exportCaption($this->byr12);
					$doc->exportCaption($this->jml12);
					$doc->exportCaption($this->tgl12);
				} else {
					$doc->exportCaption($this->id);
					$doc->exportCaption($this->daf_kelas_siswa_id);
					$doc->exportCaption($this->iuran_id);
					$doc->exportCaption($this->Jumlah);
					$doc->exportCaption($this->byr01);
					$doc->exportCaption($this->jml01);
					$doc->exportCaption($this->tgl01);
					$doc->exportCaption($this->byr02);
					$doc->exportCaption($this->jml02);
					$doc->exportCaption($this->tgl02);
					$doc->exportCaption($this->byr03);
					$doc->exportCaption($this->jml03);
					$doc->exportCaption($this->tgl03);
					$doc->exportCaption($this->byr04);
					$doc->exportCaption($this->jml04);
					$doc->exportCaption($this->tgl04);
					$doc->exportCaption($this->byr05);
					$doc->exportCaption($this->jml05);
					$doc->exportCaption($this->tgl05);
					$doc->exportCaption($this->byr06);
					$doc->exportCaption($this->jml06);
					$doc->exportCaption($this->tgl06);
					$doc->exportCaption($this->byr07);
					$doc->exportCaption($this->jml07);
					$doc->exportCaption($this->tgl07);
					$doc->exportCaption($this->byr08);
					$doc->exportCaption($this->jml08);
					$doc->exportCaption($this->tgl08);
					$doc->exportCaption($this->byr09);
					$doc->exportCaption($this->jml09);
					$doc->exportCaption($this->tgl09);
					$doc->exportCaption($this->byr10);
					$doc->exportCaption($this->jml10);
					$doc->exportCaption($this->tgl10);
					$doc->exportCaption($this->byr11);
					$doc->exportCaption($this->jml11);
					$doc->exportCaption($this->tgl11);
					$doc->exportCaption($this->byr12);
					$doc->exportCaption($this->jml12);
					$doc->exportCaption($this->tgl12);
				}
				$doc->endExportRow();
			}
		}

		// Move to first record
		$recCnt = $startRec - 1;
		if (!$recordset->EOF) {
			$recordset->moveFirst();
			if ($startRec > 1)
				$recordset->move($startRec - 1);
		}
		while (!$recordset->EOF && $recCnt < $stopRec) {
			$recCnt++;
			if ($recCnt >= $startRec) {
				$rowCnt = $recCnt - $startRec + 1;

				// Page break
				if ($this->ExportPageBreakCount > 0) {
					if ($rowCnt > 1 && ($rowCnt - 1) % $this->ExportPageBreakCount == 0)
						$doc->exportPageBreak();
				}
				$this->loadListRowValues($recordset);

				// Render row
				$this->RowType = ROWTYPE_VIEW; // Render view
				$this->resetAttributes();
				$this->renderListRow();
				if (!$doc->ExportCustom) {
					$doc->beginExportRow($rowCnt); // Allow CSS styles if enabled
					if ($exportPageType == "view") {
						$doc->exportField($this->iuran_id);
						$doc->exportField($this->Jumlah);
						$doc->exportField($this->byr01);
						$doc->exportField($this->jml01);
						$doc->exportField($this->tgl01);
						$doc->exportField($this->byr02);
						$doc->exportField($this->jml02);
						$doc->exportField($this->tgl02);
						$doc->exportField($this->byr03);
						$doc->exportField($this->jml03);
						$doc->exportField($this->tgl03);
						$doc->exportField($this->byr04);
						$doc->exportField($this->jml04);
						$doc->exportField($this->tgl04);
						$doc->exportField($this->byr05);
						$doc->exportField($this->jml05);
						$doc->exportField($this->tgl05);
						$doc->exportField($this->byr06);
						$doc->exportField($this->jml06);
						$doc->exportField($this->tgl06);
						$doc->exportField($this->byr07);
						$doc->exportField($this->jml07);
						$doc->exportField($this->tgl07);
						$doc->exportField($this->byr08);
						$doc->exportField($this->jml08);
						$doc->exportField($this->tgl08);
						$doc->exportField($this->byr09);
						$doc->exportField($this->jml09);
						$doc->exportField($this->tgl09);
						$doc->exportField($this->byr10);
						$doc->exportField($this->jml10);
						$doc->exportField($this->tgl10);
						$doc->exportField($this->byr11);
						$doc->exportField($this->jml11);
						$doc->exportField($this->tgl11);
						$doc->exportField($this->byr12);
						$doc->exportField($this->jml12);
						$doc->exportField($this->tgl12);
					} else {
						$doc->exportField($this->id);
						$doc->exportField($this->daf_kelas_siswa_id);
						$doc->exportField($this->iuran_id);
						$doc->exportField($this->Jumlah);
						$doc->exportField($this->byr01);
						$doc->exportField($this->jml01);
						$doc->exportField($this->tgl01);
						$doc->exportField($this->byr02);
						$doc->exportField($this->jml02);
						$doc->exportField($this->tgl02);
						$doc->exportField($this->byr03);
						$doc->exportField($this->jml03);
						$doc->exportField($this->tgl03);
						$doc->exportField($this->byr04);
						$doc->exportField($this->jml04);
						$doc->exportField($this->tgl04);
						$doc->exportField($this->byr05);
						$doc->exportField($this->jml05);
						$doc->exportField($this->tgl05);
						$doc->exportField($this->byr06);
						$doc->exportField($this->jml06);
						$doc->exportField($this->tgl06);
						$doc->exportField($this->byr07);
						$doc->exportField($this->jml07);
						$doc->exportField($this->tgl07);
						$doc->exportField($this->byr08);
						$doc->exportField($this->jml08);
						$doc->exportField($this->tgl08);
						$doc->exportField($this->byr09);
						$doc->exportField($this->jml09);
						$doc->exportField($this->tgl09);
						$doc->exportField($this->byr10);
						$doc->exportField($this->jml10);
						$doc->exportField($this->tgl10);
						$doc->exportField($this->byr11);
						$doc->exportField($this->jml11);
						$doc->exportField($this->tgl11);
						$doc->exportField($this->byr12);
						$doc->exportField($this->jml12);
						$doc->exportField($this->tgl12);
					}
					$doc->endExportRow($rowCnt);
				}
			}

			// Call Row Export server event
			if ($doc->ExportCustom)
				$this->Row_Export($recordset->fields);
			$recordset->moveNext();
		}
		if (!$doc->ExportCustom) {
			$doc->exportTableFooter();
		}
	}

	// Lookup data from table
	public function lookup()
	{
		global $Language, $LANGUAGE_FOLDER, $PROJECT_ID;
		if (!isset($Language))
			$Language = new Language($LANGUAGE_FOLDER, Post("language", ""));
		global $Security, $RequestSecurity;

		// Check token first
		$func = PROJECT_NAMESPACE . "CheckToken";
		$validRequest = FALSE;
		if (is_callable($func) && Post(TOKEN_NAME) !== NULL) {
			$validRequest = $func(Post(TOKEN_NAME), SessionTimeoutTime());
			if ($validRequest) {
				if (!isset($Security)) {
					if (session_status() !== PHP_SESSION_ACTIVE)
						session_start(); // Init session data
					$Security = new AdvancedSecurity();
					if ($Security->isLoggedIn()) $Security->TablePermission_Loading();
					$Security->loadCurrentUserLevel($PROJECT_ID . $this->TableName);
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
			$Security->loadCurrentUserLevel(CurrentProjectID() . $this->TableName);
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
		$keys = Post("keys");

		// Selected records from modal, skip parent/filter fields and show all records
		if ($keys !== NULL) {
			$parentFields = [];
			$filterFields = [];
			$filterFieldVars = [];
			$offset = 0;
			$pageSize = 0;
		}

		// Create lookup object and output JSON
		$lookup = new Lookup($linkField, $this->TableVar, $distinct, $linkField, $displayFields, $parentFields, $childFields, $filterFields, $filterFieldVars, $autoFillSourceFields);
		foreach ($filterFields as $i => $filterField) { // Set up filter operators
			if (@$filterOperators[$i] <> "")
				$lookup->setFilterOperator($filterField, $filterOperators[$i]);
		}
		$lookup->LookupType = $lookupType; // Lookup type
		if ($keys !== NULL) { // Selected records from modal
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

	// Write Audit Trail start/end for grid update
	public function writeAuditTrailDummy($typ)
	{
		$table = 't103_daf_kelas_siswa_iuran';
		$usr = CurrentUserID();
		WriteAuditTrail("log", DbCurrentDateTime(), ScriptName(), $usr, $typ, $table, "", "", "", "");
	}

	// Write Audit Trail (add page)
	public function writeAuditTrailOnAdd(&$rs)
	{
		global $Language;
		if (!$this->AuditTrailOnAdd)
			return;
		$table = 't103_daf_kelas_siswa_iuran';

		// Get key value
		$key = "";
		if ($key <> "")
			$key .= $GLOBALS["COMPOSITE_KEY_SEPARATOR"];
		$key .= $rs['id'];

		// Write Audit Trail
		$dt = DbCurrentDateTime();
		$id = ScriptName();
		$usr = CurrentUserID();
		foreach (array_keys($rs) as $fldname) {
			if (array_key_exists($fldname, $this->fields) && $this->fields[$fldname]->DataType <> DATATYPE_BLOB) { // Ignore BLOB fields
				if ($this->fields[$fldname]->HtmlTag == "PASSWORD") {
					$newvalue = $Language->phrase("PasswordMask"); // Password Field
				} elseif ($this->fields[$fldname]->DataType == DATATYPE_MEMO) {
					if (AUDIT_TRAIL_TO_DATABASE)
						$newvalue = $rs[$fldname];
					else
						$newvalue = "[MEMO]"; // Memo Field
				} elseif ($this->fields[$fldname]->DataType == DATATYPE_XML) {
					$newvalue = "[XML]"; // XML Field
				} else {
					$newvalue = $rs[$fldname];
				}
				WriteAuditTrail("log", $dt, $id, $usr, "A", $table, $fldname, $key, "", $newvalue);
			}
		}
	}

	// Write Audit Trail (edit page)
	public function writeAuditTrailOnEdit(&$rsold, &$rsnew)
	{
		global $Language;
		if (!$this->AuditTrailOnEdit)
			return;
		$table = 't103_daf_kelas_siswa_iuran';

		// Get key value
		$key = "";
		if ($key <> "")
			$key .= $GLOBALS["COMPOSITE_KEY_SEPARATOR"];
		$key .= $rsold['id'];

		// Write Audit Trail
		$dt = DbCurrentDateTime();
		$id = ScriptName();
		$usr = CurrentUserID();
		foreach (array_keys($rsnew) as $fldname) {
			if (array_key_exists($fldname, $this->fields) && array_key_exists($fldname, $rsold) && $this->fields[$fldname]->DataType <> DATATYPE_BLOB) { // Ignore BLOB fields
				if ($this->fields[$fldname]->DataType == DATATYPE_DATE) { // DateTime field
					$modified = (FormatDateTime($rsold[$fldname], 0) <> FormatDateTime($rsnew[$fldname], 0));
				} else {
					$modified = !CompareValue($rsold[$fldname], $rsnew[$fldname]);
				}
				if ($modified) {
					if ($this->fields[$fldname]->HtmlTag == "PASSWORD") { // Password Field
						$oldvalue = $Language->phrase("PasswordMask");
						$newvalue = $Language->phrase("PasswordMask");
					} elseif ($this->fields[$fldname]->DataType == DATATYPE_MEMO) { // Memo field
						if (AUDIT_TRAIL_TO_DATABASE) {
							$oldvalue = $rsold[$fldname];
							$newvalue = $rsnew[$fldname];
						} else {
							$oldvalue = "[MEMO]";
							$newvalue = "[MEMO]";
						}
					} elseif ($this->fields[$fldname]->DataType == DATATYPE_XML) { // XML field
						$oldvalue = "[XML]";
						$newvalue = "[XML]";
					} else {
						$oldvalue = $rsold[$fldname];
						$newvalue = $rsnew[$fldname];
					}
					WriteAuditTrail("log", $dt, $id, $usr, "U", $table, $fldname, $key, $oldvalue, $newvalue);
				}
			}
		}
	}

	// Write Audit Trail (delete page)
	public function writeAuditTrailOnDelete(&$rs)
	{
		global $Language;
		if (!$this->AuditTrailOnDelete)
			return;
		$table = 't103_daf_kelas_siswa_iuran';

		// Get key value
		$key = "";
		if ($key <> "")
			$key .= $GLOBALS["COMPOSITE_KEY_SEPARATOR"];
		$key .= $rs['id'];

		// Write Audit Trail
		$dt = DbCurrentDateTime();
		$id = ScriptName();
		$curUser = CurrentUserID();
		foreach (array_keys($rs) as $fldname) {
			if (array_key_exists($fldname, $this->fields) && $this->fields[$fldname]->DataType <> DATATYPE_BLOB) { // Ignore BLOB fields
				if ($this->fields[$fldname]->HtmlTag == "PASSWORD") {
					$oldvalue = $Language->phrase("PasswordMask"); // Password Field
				} elseif ($this->fields[$fldname]->DataType == DATATYPE_MEMO) {
					if (AUDIT_TRAIL_TO_DATABASE)
						$oldvalue = $rs[$fldname];
					else
						$oldvalue = "[MEMO]"; // Memo field
				} elseif ($this->fields[$fldname]->DataType == DATATYPE_XML) {
					$oldvalue = "[XML]"; // XML field
				} else {
					$oldvalue = $rs[$fldname];
				}
				WriteAuditTrail("log", $dt, $id, $curUser, "D", $table, $fldname, $key, $oldvalue, "");
			}
		}
	}

	// Table level events
	// Recordset Selecting event
	function Recordset_Selecting(&$filter) {

		// Enter your code here
	}

	// Recordset Selected event
	function Recordset_Selected(&$rs) {

		//echo "Recordset Selected";
	}

	// Recordset Search Validated event
	function Recordset_SearchValidated() {

		// Example:
		//$this->MyField1->AdvancedSearch->SearchValue = "your search criteria"; // Search value

	}

	// Recordset Searching event
	function Recordset_Searching(&$filter) {

		// Enter your code here
	}

	// Row_Selecting event
	function Row_Selecting(&$filter) {

		// Enter your code here
	}

	// Row Selected event
	function Row_Selected(&$rs) {

		//echo "Row Selected";
	}

	// Row Inserting event
	function Row_Inserting($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE
		// isi secara ostosmastis => field jml01 hingga jml12, dengan nilai Jumlah Iuran

		$rsnew["jml01"] = $rsnew["Jumlah"];
		$rsnew["jml02"] = $rsnew["Jumlah"];
		$rsnew["jml03"] = $rsnew["Jumlah"];
		$rsnew["jml04"] = $rsnew["Jumlah"];
		$rsnew["jml05"] = $rsnew["Jumlah"];
		$rsnew["jml06"] = $rsnew["Jumlah"];
		$rsnew["jml07"] = $rsnew["Jumlah"];
		$rsnew["jml08"] = $rsnew["Jumlah"];
		$rsnew["jml09"] = $rsnew["Jumlah"];
		$rsnew["jml10"] = $rsnew["Jumlah"];
		$rsnew["jml11"] = $rsnew["Jumlah"];
		$rsnew["jml12"] = $rsnew["Jumlah"];
		return TRUE;
	}

	// Row Inserted event
	function Row_Inserted($rsold, &$rsnew) {

		//echo "Row Inserted"
	}

	// Row Updating event
	function Row_Updating($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE

		return TRUE;
	}

	// Row Updated event
	function Row_Updated($rsold, &$rsnew) {

		//echo "Row Updated";
	}

	// Row Update Conflict event
	function Row_UpdateConflict($rsold, &$rsnew) {

		// Enter your code here
		// To ignore conflict, set return value to FALSE

		return TRUE;
	}

	// Grid Inserting event
	function Grid_Inserting() {

		// Enter your code here
		// To reject grid insert, set return value to FALSE

		return TRUE;
	}

	// Grid Inserted event
	function Grid_Inserted($rsnew) {

		//echo "Grid Inserted";
	}

	// Grid Updating event
	function Grid_Updating($rsold) {

		// Enter your code here
		// To reject grid update, set return value to FALSE

		return TRUE;
	}

	// Grid Updated event
	function Grid_Updated($rsold, $rsnew) {

		//echo "Grid Updated";
	}

	// Row Deleting event
	function Row_Deleting(&$rs) {

		// Enter your code here
		// To cancel, set return value to False

		return TRUE;
	}

	// Row Deleted event
	function Row_Deleted(&$rs) {

		//echo "Row Deleted";
	}

	// Email Sending event
	function Email_Sending($email, &$args) {

		//var_dump($email); var_dump($args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		//var_dump($fld->Name, $fld->Lookup, $filter); // Uncomment to view the filter
		// Enter your code here

	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here
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
}
?>