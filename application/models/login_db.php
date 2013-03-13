<?php
class Login_DB extends CI_Model {
	function __construct() {
		$this->conn = $this->load->database();
		$this->load->library('encrypt');
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}

	function verifyUser($id, $pwd) {
		//$pwd = $this->prep_password($pwd);
		$query = $this->db->query("SELECT * 
						FROM user_accounts u, user_roles r 
						WHERE employee_id = '$id'
						AND u.role_id=r.id");
		
		if ($query->result()) {
			$result = $query->row_array(0);
			$employee_id = $result['employee_id'];
			$pass = $result['password'];
			//$pass = $this->encrypt->decode($pass);
			$role = $result['role'];
			$data = array();
			
			if ($role=="admin") {
				if(($employee_id==$id && $pass==$pwd)) {
					$data['validity'] = "valid";
					$data['role'] = "admin";
					return $data;
				}
				else  {
					$data['validity'] = "invalid";
					return $data;
				}
			} else if ($role=="cashier") {				
				if(($employee_id==$id && $pass==$pwd)) {
					$data['validity'] = "valid";
					$data['role'] = "cashier";
					return $data;
				}
				else  {
					$data['validity'] = "invalid";
					return $data;
				}				
			} else if ($role=="io") {				
				if(($employee_id==$id && $pass==$pwd)) {
					$data['validity'] = "valid";
					$data['role'] = "io";
					return $data;
				}
				else  {
					$data['validity'] = "invalid";
					return $data;
				}				
			}			
		}			
		else  {
			$data['validity'] = "not";
			return $data;
		}	
	}
/**	
	function getID($id) {
		$query = $this->db->query("SELECT id
									FROM user_account
									WHERE studno = $studno");
		$row = $query->row(); 
		$id = $row->id;
		return $id;
	}
	*/
}
?>