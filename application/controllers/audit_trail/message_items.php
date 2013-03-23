<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_Items extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('messages_db');
		$this->load->model('database_db');
		//$this->load->model('account');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {
		$messages = new messages_db();
		$allMessages = $messages->getMessages();
			
		$this->mysmarty->assign('status', $this->session->userdata('status'));
		$this->mysmarty->assign('base_url', $this->config->item('base_url'));
		//$this->mysmarty->assign('profile', $profile->getProfile($user_id));
		$this->mysmarty->assign('messages', $allMessages);
		$this->mysmarty->display('audit_trail/message_items.tpl');
	}
}