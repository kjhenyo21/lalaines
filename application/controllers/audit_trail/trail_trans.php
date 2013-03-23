<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trail_Trans extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('files_db');
		$this->load->model('database_db');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {
		$files = new files_db();
		$database = new database_db();
		$doc_type = "Transaction Files";
		$error_msg = false;
		$account = $_GET['acct'];
		$ref = $_GET['ref'];
		$fs = $_GET['fs'];
		$ledger = $_GET['ledger'];
		$journal = $_GET['journal'];
		$date_temp = explode("-", $ref);
		$month_num = trim($date_temp[1]);
		$month = date("F", mktime(0, 0, 0, $month_num, 10));
		$year = trim($date_temp[2]);
		$row = 0;
		
		$path = $files->getFilePathByReference($doc_type, $ref);
		if($path) {
			//echo $path['path'];
			//echo $path['full_path'];
		} else $error_msg = "File not found!";

		//path of transaction details
		$temp_ref = explode("-", $ref);
		$filename = trim($temp_ref[0])."D";
		$detailsRef = $filename."-".trim($temp_ref[1])."-".trim($temp_ref[2]);
		//echo $detailsRef;
		$detailsPath = $files->getFilePathByReference($doc_type, $detailsRef);
		if($path) {
			//echo $detailsPath['path'];
			//echo $detailsPath['full_path'];
		} else $error_msg = "File not found!";

		
		$lines = file($path['full_path']);
		foreach ($lines as $line) {
			$temp = explode(",", $line);
			$size = sizeOf($temp);

			if ($row == 0) {
				//echo "hey";
				foreach ($temp as $heading) {
					$headings[] = $heading;
				}
			} else {
				if ($size > 1) {
					if (strcasecmp($path['doc'], "sale transactions") == 0) {
						$info[] = array(
							0 => trim($temp[0]),
							1 => trim($temp[1]),
							2 => trim($temp[2]),
							3 => trim($temp[3]),
							4 => trim($temp[4]),
							5 => trim($temp[5]),
							6 => trim($temp[6])
						);
					} else if (strcasecmp($path['doc'], "purchase transactions") == 0) {
						$info[] = array(
							0 => trim($temp[0]),
							1 => trim($temp[1]),
							2 => trim($temp[2]),
							3 => trim($temp[3]),
							4 => trim($temp[4]),
							5 => trim($temp[5]),
							6 => trim($temp[6])
						);
					}
				}
			}
			$row++;
		}

		//for transaction details
		$row = 0;
		$lines = file($detailsPath['full_path']);
		foreach ($lines as $line) {
			$temp = explode(",", $line);
			$size = sizeOf($temp);
			if ($row == 0) {
				//echo "heyz";
				foreach ($temp as $heading) {
					$detHeadings[] = $heading;
				}
			} else {
				if ($size > 1) {
					if (strcasecmp($detailsPath['doc'], "sale transactions") == 0) {
						$detInfo[] = array(
							0 => trim($temp[0]),
							1 => trim($temp[1]),
							2 => trim($temp[2]),
							3 => trim($temp[3]),
							4 => trim($temp[4]),
							5 => trim($temp[5])
						);
					} else if (strcasecmp($detailsPath['doc'], "purchase transactions") == 0) {
						$detInfo[] = array(
							0 => trim($temp[0]),
							1 => trim($temp[1]),
							2 => trim($temp[2]),
							3 => trim($temp[3]),
							4 => trim($temp[4]),
							5 => trim($temp[5])
						);
					}
				}
			}
			$row++;
		}
		
		if (!$database->tableExists('transactions'))
			$database->createTransactionsTable($headings);
		else "EXISTS";
		$database->addTransactions($headings, $info);
		
		if (!$database->tableExists('transaction_details'))
			$database->createTransactionDetailsTable($detHeadings);
		$database->addTransactionDetails($detHeadings, $detInfo);
		
		$sizeOfTrans = sizeOf($info);
		$min = 8;
		if ($sizeOfTrans > $min)
			$info = $database->getSamples($sizeOfTrans, $info);
		$messages = $database->getIgnoredMessages();
		$this->mysmarty->assign('messages', $messages);
		$this->mysmarty->assign('status', $this->session->userdata('status'));
		$this->mysmarty->assign('base_url', $this->config->item('base_url'));
		$this->mysmarty->assign('month', $month);
		$this->mysmarty->assign('year', $year);
		$this->mysmarty->assign('headings', $headings);
		$this->mysmarty->assign('info', $info);
		$this->mysmarty->assign('details', $detInfo);
		$this->mysmarty->assign('source', $path['full_path']);
		$this->mysmarty->assign('fs', $fs);
		$this->mysmarty->assign('ledger', $ledger);
		$this->mysmarty->assign('journal', $journal);
		$this->mysmarty->assign('doc', $path['doc']);
		$this->mysmarty->assign('ref', $ref);
		$this->mysmarty->assign('acct', $account);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('audit_trail/trail_transactions.tpl');
		$this->mysmarty->display('audit_trail/message.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function getTransDetails() {
		$database = new database_db();
		$or_no = $_GET['or_no'];
		$details = $database->getTransactionDetailsByOR($or_no);
		foreach ($details as $d) {
			$data[] = array(
				0 => $d[0],
				1 => $d[1],
				2 => $d[2],
				3 => $d[3],
				4 => $d[4],
				5 => $d[5]
			);
		}
		//echo json_encode($data);
		echo $data;
	}
	
	public function call() {
		/**$fp = fopen ("COM5:", "wb+");
		if (!$fp) {
			echo "Not open";
		} else {
			echo "Open";
		}*/
		
		$device = "COM4";

		exec("mode $device BAUD=9600 PARITY=n DATA=8 STOP=1 xon=off octs=off rts=on");

		$comport = fopen($device, "r+b");

		if ($comport === false) {
		die ("Failed opening com port");
		} else {
		echo "Com Port Open";
		}

		stream_set_blocking($comport, 0);

		$atcmd = "ATDT+639336925206;"; // dial fake number
		echo fwrite($comport, $atcmd );
		//$atcmd = "AT+CSMP?"; // dial fake number
		//echo fwrite($comport, $atcmd );
		//$atcmd = "AT+CMGS=\"+639336925206\"\rHello"; // dial fake number
		/**if (fwrite($comport, $atcmd ) === false) {
		die ("Failed writing to com port"); 
		} else {
		echo "Wrote $atcmd to com port";
		}*/

		//sleep(10); // added fix to make program work, was closing port too soon for it to dial

		//fclose($comport);



	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}
?>