<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('inventory_db');
		//$this->load->model('account');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->library('form_validation');
    }
	
	public function index() {
	}
	
	public function getQtyOnHand() {
		$inventory = new inventory_db();
		$item_code = $this->input->post('search');
		$data = $inventory->getQtyOnHand($item_code);
		echo json_encode($data);
	}
}