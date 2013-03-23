<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ignored_Messages extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('database_db');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {
		$database = new database_db();
		$messages = $database->getIgnoredMessages();
		$this->mysmarty->assign('messages', $messages);
		$this->mysmarty->display('audit_trail/message.tpl');
		$this->mysmarty->display('footer.tpl');
	}
}
?>