<?php

include "conn.php";

/**
 * XLS parsing uses php-excel-reader from http://code.google.com/p/php-excel-reader/
 */
	//header('Content-Type: text/plain');

	if (isset($argv[1]))
	{
		$Filepath = $argv[1];
	}
	elseif (isset($_GET['File']))
	{
		$Filepath = $_GET['File'];
	}
	else
	{
		if (php_sapi_name() == 'cli')
		{
			echo 'Please specify filename as the first argument'.PHP_EOL;
		}
		else
		{
			echo 'Please specify filename as a HTTP GET parameter "File", e.g., "/test.php?File=test.xlsx"';
		}
		exit;
	}

	// Excel reader from http://code.google.com/p/php-excel-reader/
	require('php-excel-reader/excel_reader2.php');
	require('SpreadsheetReader.php');

	date_default_timezone_set('UTC');

	$StartMem = memory_get_usage();
	/*echo '---------------------------------'.PHP_EOL;
	echo 'Starting memory: '.$StartMem.PHP_EOL;
	echo '---------------------------------'.PHP_EOL;*/

	try
	{
		$Spreadsheet = new SpreadsheetReader($Filepath);
		$BaseMem = memory_get_usage();
		
		//$jumlah_baris = $Spreadsheet->rowcount($sheet_index=0);
		//echo "$jumlah_baris";

		$Sheets = $Spreadsheet -> Sheets();

		/*echo '---------------------------------'.PHP_EOL;
		echo 'Spreadsheets:'.PHP_EOL;*/
		//print_r($Sheets);
		/*echo '---------------------------------'.PHP_EOL;
		echo '---------------------------------'.PHP_EOL;*/

		foreach ($Sheets as $Index => $Name)
		{
			/*echo '---------------------------------'.PHP_EOL;
			echo '*** Sheet '.$Name.' ***'.PHP_EOL;
			echo '---------------------------------'.PHP_EOL;*/

			//$Time = microtime(true);

			$Spreadsheet -> ChangeSheet($Index);

			foreach ($Spreadsheet as $Key => $Row)
			{
				//echo $Key.': ';
				if ($Key == 0) {
					
				}
				else {
				if ($Row)
				{
					//print_r($Row); //echo "a"."<br/>";
					//foreach($Row as $row) {
						//$i = 0;
						//echo $row."\n"; //$i++;
					//}
					//for ($i = 0; $i < count($Row); $i++) {
						//echo $Row[$i]."<br/>";
					//}
					$id                 = $Row[ 0];
					$daf_kelas_siswa_id = $Row[ 1];
					$iuran_id           = $Row[ 2];
					$jumlah             = $Row[ 3];
					$byr01              = $Row[ 4];
					$jml01              = $Row[ 5];
					$tgl01              = $Row[ 6];
					$byr02              = $Row[ 7];
					$jml02              = $Row[ 8];
					$tgl02              = $Row[ 9];
					$byr03              = $Row[10];
					$jml03              = $Row[11];
					$tgl03              = $Row[12];
					$byr04              = $Row[13];
					$jml04              = $Row[14];
					$tgl04              = $Row[15];
					$byr05              = $Row[16];
					$jml05              = $Row[17];
					$tgl05              = $Row[18];
					$byr06              = $Row[19];
					$jml06              = $Row[20];
					$tgl06              = $Row[21];
					$byr07              = $Row[22];
					$jml07              = $Row[23];
					$tgl07              = $Row[24];
					$byr08              = $Row[25];
					$jml08              = $Row[26];
					$tgl08              = $Row[27];
					$byr09              = $Row[28];
					$jml09              = $Row[29];
					$tgl09              = $Row[30];
					$byr10              = $Row[31];
					$jml10              = $Row[32];
					$tgl10              = $Row[33];
					$byr11              = $Row[34];
					$jml11              = $Row[35];
					$tgl11              = $Row[36];
					$byr12              = $Row[37];
					$jml12              = $Row[38];
					$tgl12              = $Row[39];
					$q = "
						insert into t103_daf_kelas_siswa_iuran
						values
						('".$id."',
						'".$daf_kelas_siswa_id."',
						'".$iuran_id."',
						'".$jumlah."',
						'".$byr01."',
						'".$jml01."',
						'".$tgl01."',
						'".$byr02."',
						'".$jml02."',
						'".$tgl02."',
						'".$byr03."',
						'".$jml03."',
						'".$tgl03."',
						'".$byr04."',
						'".$jml04."',
						'".$tgl04."',
						'".$byr05."',
						'".$jml05."',
						'".$tgl05."',
						'".$byr06."',
						'".$jml06."',
						'".$tgl06."',
						'".$byr07."',
						'".$jml07."',
						'".$tgl07."',
						'".$byr08."',
						'".$jml08."',
						'".$tgl08."',
						'".$byr09."',
						'".$jml09."',
						'".$tgl09."',
						'".$byr10."',
						'".$jml10."',
						'".$tgl10."',
						'".$byr11."',
						'".$jml11."',
						'".$tgl11."',
						'".$byr12."',
						'".$jml12."',
						'".$tgl12."'
						)
					";
					//$db->Execute($q);
					mysqli_query($conn, $q);
				}
				else
				{
					//var_dump($Row); //echo "b"."<br/>";
				}
				}
				//$CurrentMem = memory_get_usage();
		
				/*echo 'Memory: '.($CurrentMem - $BaseMem).' current, '.$CurrentMem.' base'.PHP_EOL;
				echo '---------------------------------'.PHP_EOL;*/
		
				/*if ($Key && ($Key % 500 == 0))
				{
					echo '---------------------------------'.PHP_EOL;
					echo 'Time: '.(microtime(true) - $Time);
					echo '---------------------------------'.PHP_EOL;
				}*/
			}
		
			/*echo PHP_EOL.'---------------------------------'.PHP_EOL;
			echo 'Time: '.(microtime(true) - $Time);
			echo PHP_EOL;

			echo '---------------------------------'.PHP_EOL;
			echo '*** End of sheet '.$Name.' ***'.PHP_EOL;
			echo '---------------------------------'.PHP_EOL;*/
		}
		
	}
	catch (Exception $E)
	{
		echo $E -> getMessage();
	}
	
	header("location: http://localhost:8080/pembayaran3.1/c303_import.php?ok=1");
?>