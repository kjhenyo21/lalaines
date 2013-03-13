<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('customers_db');
		$this->load->model('account');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {
		///$profile = new profile_db();
		if ($this->session->userdata('status') == 'authorizedAdmin') {
			header("location:".$this->config->item('base_url')."admin");
		} else if ($this->session->userdata('status') == 'authorizedCashier') {
			header("location:".$this->config->item('base_url')."cashier");
		}
		else {
			$data['current_url'] = $this->config->item('base_url')."admin";
			$user_id = $this->session->userdata('id');
			if (!empty($_GET['response'])) {
				$this->mysmarty->assign('response', $_GET['response']);
			} else $this->mysmarty->assign('response', "");
			
			
			if (!empty($_GET['status'])) {
				$this->mysmarty->assign('accessStatus', $_GET['status']);
			} else $this->mysmarty->assign('accessStatus', "");
			//$this->mysmarty->assign('error_c_new_pass', form_error('c_new_pas'));
			//$this->mysmarty->assign('profile', $profile->getProfile($user_id));
			
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			//$this->mysmarty->assign('profile', $profile->getProfile($user_id));
			//$this->mysmarty->assign('adminID', $this->session->userdata('id'));
			$this->mysmarty->display('index.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>