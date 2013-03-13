<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice_Remove_Modal extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('customers_db');
		$this->load->model('cashier_db');
		//$this->load->model('account');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->library('form_validation');
    }
	
	public function index() {
		$customers = new customers_db();
		$temp_inv = new cashier_db();
		$temp_inv_no = $_GET['no'];
		$temp_items = $temp_inv->getTempItems($temp_inv_no);
		$this->mysmarty->assign('status', $this->session->userdata('status'));
		$this->mysmarty->assign('temp_inv_no', $temp_inv_no);
		$this->mysmarty->assign('items', $temp_items);

		$this->mysmarty->display('cashier/invoice_remove_modal.tpl');
	}
}

?>
