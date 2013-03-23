<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Summary extends CI_Controller {

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
		$or_no = $_GET['or_no'];
		$ref = $_GET['ref'];
		$fs = $_GET['fs'];
		$ledger = $_GET['ledger'];
		$journal = $_GET['journal'];
		$trans = $_GET['trans'];
		$date_temp = explode("-", $ref);
		$month_num = trim($date_temp[1]);
		$month = date("F", mktime(0, 0, 0, $month_num, 10));
		$year = trim($date_temp[2]);
		$row = 0;
		$info = $database->getTransactionByOR($or_no);
		
		$this->mysmarty->assign('status', $this->session->userdata('status'));
		$this->mysmarty->assign('base_url', $this->config->item('base_url'));
		$this->mysmarty->assign('month', $month);
		$this->mysmarty->assign('year', $year);
		//$this->mysmarty->assign('source', $path['full_path']);
		$this->mysmarty->assign('fs', $fs);
		$this->mysmarty->assign('ledger', $ledger);
		$this->mysmarty->assign('journal', $journal);
		$this->mysmarty->assign('trans', $trans);
		$this->mysmarty->assign('acct', $account);
		$this->mysmarty->assign('info', $info);
		//$this->mysmarty->assign('doc', $path['doc']);
		$this->mysmarty->assign('ref', $ref);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('audit_trail/summary.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function save() {
		header("Content-type: text/html");
header("Content-Disposition: attachment; Filename=SaveAsWordDoc.doc");
	}
	
	public function saveImage() {
	//Show the image
echo '<img src="'.$_POST['img_val'].'" />';
 
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
 
//Decode the string
$unencodedData=base64_decode($filteredData);
 
//Save the image
file_put_contents('img.png', $unencodedData);
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}
?>