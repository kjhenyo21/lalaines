<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trail_Transactions extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('customers_db');
		//$this->load->model('account');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {
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
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			//$this->mysmarty->assign('profile', $profile->getProfile($user_id));
			//$this->mysmarty->assign('adminID', $this->session->userdata('id'));
			$this->mysmarty->display('audit_trail/trail_transactions.tpl');
		//}
	}
	
	public function readFile() {
		$lines = file($this->input->post('file_path'));
		foreach ($lines as $line_num => $line) {
			echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}
	}
	
	public function trail_ag() {
		
	}
	public function searchCustomerInvoice() {
		$customers = new customers_db();
		$temp_inv_no = random_string('numeric', 10);
		$cust_no = $this->security->xss_clean($this->input->post('cust_acct_no'));
		header("location: ".$this->config->item('base_url')."cashier/invoice?customer=".$cust_no."&invoice=".$temp_inv_no);
	}
	
	public function addItem() {
		$items = new cashier_db();
		$facs = new fac_db();
		$i['item_code'] = $this->security->xss_clean($this->input->post('or'));
		$items->addItem($i);
		header("location: ".$this->config->item('base_url')."cashier");			
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