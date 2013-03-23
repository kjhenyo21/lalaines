<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup_Preferences extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('setup_db');
		//$this->load->model('account');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	public function index() {
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('setup_preferences.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function saveUserInfo() {
		$setup = new $setup_db();
		$info['id'] = $this->security->xss_clean($this->input->post('id'));
		$info['lname'] = $this->security->xss_clean($this->input->post('lname'));
		$info['fname'] = $this->input->post('fname');
		$info['mname'] = $this->security->xss_clean($this->input->post('mname'));
		$info['sex'] = $this->security->xss_clean($this->input->post('sex'));
		$info['bdate'] = $this->security->xss_clean($this->input->post('bdate'));
		$info['address'] = $this->input->post('address');
		$info['contact'] = $this->security->xss_clean($this->input->post('contact'));		
		$info['email'] = $this->security->xss_clean($this->input->post('email'));	
		$info['license_no'] = $this->security->xss_clean($this->input->post('license_no'));	
		$info['cname'] = $this->security->xss_clean($this->input->post('cname'));	
		$info['caddress'] = $this->input->post('caddress');		
		$info['position'] = $this->security->xss_clean($this->input->post('email'));	
		$info['uname'] = $this->security->xss_clean($this->input->post('uname'));
		$info['password'] = $this->security->xss_clean($this->input->post('password'));
		
		//$setup->saveUserInfo($info);
	}
	
	public function savePreferences() {
		//$path = $this->input->post('theFile');
		//echo $path;
		//return $path;
				header("location: ".$this->config->item('base_url')."audit_trail");
	}
}