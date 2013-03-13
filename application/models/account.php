<?php
class Account extends CI_Model {
	function validateUser($id, $pwd) {
		$this->load->model('login_db');
		$this->load->library('session');
		$mysql = new login_db();
		$ensure_credentials = $mysql->verifyUser($id, $pwd);
		
		
		if($ensure_credentials['validity'] == "valid") {
			//$id = $mysql->getID($studno);
			if($ensure_credentials['role'] == 'admin'){
				$newdata = array(
							'status' => 'authorizedAdmin',
							'id' => $id
							);
				$this->session->set_userdata($newdata);
				
				header("location:".$this->config->item('base_url')."admin");
			} else if($ensure_credentials['role'] == 'cashier'){
				$newdata = array(
							'status' => 'authorizedCashier',
							'id' => $id
							);
				$this->session->set_userdata($newdata);
				header("location:".$this->config->item('base_url')."cashier");
			} else if($ensure_credentials['role'] == 'io'){
				$newdata = array(
							'status' => 'authorizedInventoryOfficer',
							'id' => $id
							);
				$this->session->set_userdata($newdata);
				header("location:".$this->config->item('base_url')."inventory");
			}
		}

		else if ($ensure_credentials['validity'] == "not") {
			$data['message'] = "Enter user credentials to log in.";
			$data['error'] = true;
			return $data;
		}
		
		else if ($ensure_credentials['validity'] == "invalid") {
			$data['message'] = "Please enter a correct ID number and password.";
			$data['error'] = true;
			return $data;
		}
	}
	
	function logOut() {
		$this->load->library('session');
		$this->session->sess_destroy();		
		if(($this->session->userdata('status'))) {
			
			if(isset($_COOKIE[session_name()]))
				setcookie(session_name(), '', time() - 1000);
				$this->session->sess_destroy();
		}
		header("location:".$this->config->item('base_url'));
	}
}

?>