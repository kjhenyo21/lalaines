<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('customers_db');
		$this->load->model('cashier_db');
		$this->load->model('inventory_db');
		//$this->load->model('account');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->library('form_validation');
    }
	
	public function index() {
		$customers = new customers_db();
		$temp_inv = new cashier_db();
		$user_id = $this->session->userdata('id');
		$temp_inv_no = $_GET['no'];
		//$cust_no = $_GET['customer'];
		$temp_items = $temp_inv->getTempItems($temp_inv_no);
		$total_qty = 0;
		$total_amt = 0.00;
		

		/**$profile = new profile_db();
		if ($this->session->userdata('status') != 'authorizedAdmin') {
			header("location:".$this->config->item('base_url')."index.php?status=unauthorizedAccess");
		}
		else {
			$data['current_url'] = $this->config->item('base_url')."admin";
			$user_id = $this->session->userdata('id');
			$this->mysmarty->assign('error_old_pass', form_error('old_pass'));
			$this->mysmarty->assign('error_new_pass', form_error('new_pass'));
			$this->mysmarty->assign('error_c_new_pass', form_error('c_new_pas'));
			$this->mysmarty->assign('profile', $profile->getProfile($user_id));
			$this->mysmarty->assign('adminID', $this->session->userdata('id'));*/
			
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('cashier_no', $user_id);
			$this->mysmarty->assign('temp_inv_no', $temp_inv_no);
			//$this->mysmarty->assign('customer_no', $cust_no);
			//$this->mysmarty->assign('customer', $customers->getCustomerByNo($cust_no));
			//$this->mysmarty->assign('search_res', $customers->searchCustomers($txt));
			$this->mysmarty->assign('items', $temp_items);
			//$this->mysmarty->assign('profile', $profile->getProfile($user_id));
			//$this->mysmarty->assign('adminID', $this->session->userdata('id'));
			
			if ($temp_items) {
				foreach($temp_items as $items) {
					$total_qty += $items['quantity'];
					$total_amt += $items['amount'];
				}
			}
				$vatable_amt = $total_amt / (1 + 0.12); //make VAT% dynamic
				$vat_amt = $total_amt - $vatable_amt;
			
			
			$this->mysmarty->assign('total_qty', $total_qty);
			$this->mysmarty->assign('total_amt', $total_amt);
			$this->mysmarty->assign('vatable_amt', $vatable_amt);
			$this->mysmarty->assign('vat_amt', $vat_amt);
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('cashier/invoice.tpl');
		//}
	}
	
	public function searchCustomers() {
		$customers = new customers_db();
		$lname = $this->input->post('search');
		$data = $customers->searchCustomers($lname);
		echo json_encode($data);
	}
	
	public function getCustomerInfo() {
		$customers = new customers_db();
		$cust_id = $this->input->post('search');
		$data = $customers->getCustomerInfo($cust_id);
		echo json_encode($data);
	}
		
	public function addItem() {
		$invoice = new cashier_db();
		//$cust_no = $_GET['customer'];
		$temp_inv_no = $this->security->xss_clean($this->input->post('temp_inv_no'));
		$i['temp_inv_no'] = $temp_inv_no;
		//$i['temp_inv_no'] = $_GET['invoice'];
		$i['item_code'] = $this->security->xss_clean($this->input->post('item_code'));
		$i['quantity'] = $this->security->xss_clean($this->input->post('qty'));
		$invoice->addTempItem($i);
		echo json_encode($temp_inv_no);
		//header("location: ".$this->config->item('base_url')."cashier/invoice?no=".$temp_inv_no);		
	}
	
	public function removeItem() {
		$invoice = new cashier_db();
		$temp_inv_no = $_GET['invoice'];
		$id = $_GET['id'];
		$invoice->removeTempItem($id);
		$data['id'] = $id;		
		$data['temp_inv_no'] = $temp_inv_no;		
		echo json_encode($data);
		//header("location: ".$this->config->item('base_url')."cashier/invoice?customer=".$cust_no."&invoice=".$temp_inv_no);
	}
	
	public function placeInvoice() {
		//create invoice first
		$invoice = new cashier_db();
		$inventory = new inventory_db();
		$amount_due = 0.00;
		$info['user_id'] = $this->security->xss_clean($this->input->post('user_id'));
		$info['cust_id'] = $this->security->xss_clean($this->input->post('cust_id'));
		$info['cust_name'] = $this->security->xss_clean($this->input->post('cust_name'));
		
		$si_info = $invoice->createInvoice($info);
		//echo $si_info['invoice_no'];
		//echo $si_info['date_time'];
		
		//update inventory_trans_file from invoice_temp
		//transfer data from invoice_temp to sales invoice details
		//update inventory_master_file by updating quantity on hand per item affected
		$temp_items = $invoice->getAllTempItems();
		if ($temp_items) {
			foreach($temp_items as $items) {
				$si_info['item_code'] = $items['item_code'];
				$si_info['units_sold'] = $items['quantity'];
				$si_info['price'] = $items['price'];
				$si_info['amount'] = $items['amount'];
				$si_info['inventory_no'] = $inventory->updateInventory($si_info);				
				$amount_due += $si_info['amount'];
				$invoice->updateSalesInvoiceDetails($si_info);
				$inventory->updateInventoryMasterFile($si_info);
				//echo $inventory_no;
			}
		}
		
		//update sales_invoice by updating total amount_due
		$si_info['amount_due'] = $amount_due;
		$invoice->updateAmountDue($si_info);
		
		//remove data from invoice_temp
		$invoice->emptyTempInvoices();
		$temp_inv_no = random_string('numeric', 8);
		header("location: ".$this->config->item('base_url')."cashier/invoice?no=".$temp_inv_no);

	}
	
	public function reset() {
		$invoice = new cashier_db();
		$temp_inv_no = $_GET['no'];
		$invoice->emptyTempInvoices();
		echo json_encode($temp_inv_no);
		//header("location: ".$this->config->item('base_url')."cashier/invoice?no=".$temp_inv_no);		
	}
	public function editProfile() {
		$profile = new profile_db();
		$m['id'] = $this->security->xss_clean($this->input->post('id'));
		$m['studno'] = $this->security->xss_clean($this->input->post('studno'));
		$m['lname'] = $this->security->xss_clean($this->input->post('lname'));
		$m['fname'] = $this->security->xss_clean($this->input->post('fname'));
		$m['mname'] = $this->security->xss_clean($this->input->post('mname'));
		$m['mail'] = $this->security->xss_clean($this->input->post('mail'));
		$m['sex'] = $this->security->xss_clean($this->input->post('sex'));
		$m['bdate'] = $this->security->xss_clean($this->input->post('bdate'));
		$m['address'] = $this->security->xss_clean($this->input->post('address'));
		$m['phone'] = $this->security->xss_clean($this->input->post('phone'));		
		$m['year'] = $this->security->xss_clean($this->input->post('year'));		
		$m['block'] = $this->security->xss_clean($this->input->post('block'));		
			//$m['password'] = $this->security->xss_clean($this->input->post('password'));
		$profile->updateProfile($m);
		header("location: ".$this->config->item('base_url')."admin?status=saved");		
	}
	
	public function changePass() {
		$profile = new profile_db();
		$user_id = $this->session->userdata('id');
		$old_pass = $profile->getPassword($user_id);
		$m['id'] = $user_id;
		$id = $this->security->xss_clean($this->input->post('id'));
		$m['old_pass'] = $this->security->xss_clean($this->input->post('old_pass'));
		$m['new_pass'] = $this->security->xss_clean($this->input->post('new_pass'));
		$m['c_new_pass'] = $this->security->xss_clean($this->input->post('c_new_pass'));
		$this->form_validation->set_rules('old_pass', 'Old Password', 'required');
		$this->form_validation->set_rules('new_pass', 'New Password', 'required');
		$this->form_validation->set_rules('c_new_pass', 'Password Confirmation', 'required|matches[new_pass]');

		if ($this->form_validation->run() == FALSE) {
			$this->mysmarty->assign('error_old_pass', form_error('old_pass'));
			$this->mysmarty->assign('error_new_pass', form_error('new_pass'));
			$this->mysmarty->assign('error_c_new_pass', form_error('c_new_pass'));
			$this->mysmarty->assign('profile', $profile->getProfile($user_id));
			$this->mysmarty->assign('adminID', $this->session->userdata('id'));
			$this->mysmarty->display('admin/index.tpl');
			echo "<script>";
			echo "$('#changePass$id').show();";
			echo "</script>";
		} else {
			if ($old_pass == $m['old_pass']) {
				$profile->updatePassword($m);
				echo "<script>";
				echo "$('#changePass$id').hide();";
				echo "</script>";
				header("location: ".$this->config->item('base_url')."admin?status=passChanged");
			} else {
				$this->mysmarty->assign('error_old_pass', 'Invalid password!');
				$this->mysmarty->assign('error_new_pass', form_error('new_pass'));
				$this->mysmarty->assign('error_c_new_pass', form_error('c_new_pas'));
				$this->mysmarty->assign('profile', $profile->getProfile($user_id));
				$this->mysmarty->assign('adminID', $this->session->userdata('id'));
				$this->mysmarty->display('admin/index.tpl');
				echo "<script>";
				echo "$('#changePass$id').show();";
				echo "</script>";
			}
		}
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>