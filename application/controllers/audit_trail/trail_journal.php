<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trail_Journal extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('files_db');
		//$this->load->model('account');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {
		$files = new files_db();
		$doc_type = "Journals";
		$error_msg = false;
		$ref = $_GET['ref'];
		$account = $_GET['acct'];
		$fs = $_GET['fs'];
		$ledger = $_GET['ledger'];
		$date_temp = explode("-", $ref);
		$month_num = trim($date_temp[1]);
		$month = date("F", mktime(0, 0, 0, $month_num, 10));
		$year = trim($date_temp[2]);
		
		$path = $files->getFilePathByReference($doc_type, $ref);
		if($path) {
			//echo $path['path'];
			//echo $path['full_path'];
			//echo $path['doc'];
		} else $error_msg = "File not found!";

		$lines = file($path['full_path']);
		foreach ($lines as $line) {
			$temp = explode(",", $line);
			$size = sizeOf($temp);
			
			if ($size > 1) {
				//echo "date: ".trim($temp[0]);
				$date = explode("-", trim($temp[0]));
				$day = $date[2];
				if (strcasecmp($path['doc'], "cash receipts journal") == 0) {
					$info[] = array(
						'day' => $day,
						'desc' => trim($temp[1]),
						'ref' => trim($temp[2]),
						'cash' => trim($temp[3]),
						'other' => trim($temp[4]),
						'sales' => trim($temp[5])
					);
				} else if (strcasecmp($path['doc'], "cash disbursements journal") == 0) {
					$info[] = array(
						'day' => $day,
						'desc' => trim($temp[1]),
						'ref' => trim($temp[2]),
						'cosg' => trim($temp[3]),
						'other' => trim($temp[4]),
						'cash' => trim($temp[5])
					);
				}
			}
		}

		$this->mysmarty->assign('status', $this->session->userdata('status'));
		$this->mysmarty->assign('base_url', $this->config->item('base_url'));
		$this->mysmarty->assign('month', $month);
		$this->mysmarty->assign('year', $year);
		$this->mysmarty->assign('info', $info);
		$this->mysmarty->assign('acct', $account);
		$this->mysmarty->assign('source', $path['full_path']);
		$this->mysmarty->assign('fs', $fs);
		$this->mysmarty->assign('ledger', $ledger);
		$this->mysmarty->assign('doc', $path['doc']);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('audit_trail/trail_journal.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}
?>