<?php
class Profile_DB extends CI_Model {
	function __construct() {
		$this->conn = $this->load->database();
		$this->load->library('encrypt');
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}
	
	function getProfile($id) {
		$query = $this->db->query("SELECT * 
						FROM member m, user_account u
						WHERE u.id = $id
							AND u.studno = m.studno");
		$member = array();
 
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$member[] = array(
					'studno' => $row->studno,
					'lname' => $row->lname,
					'fname' => $row->fname,
					'mname' => $row->mname,
					'sex' => $row->sex,
					'bdate' => $row->bdate,
					'mail' => $row->mail,
					'phone' => $row->phone,
					'address' => $row->address,
					'year' => $row->year,
					'block' => $row->block,
					'password'  => $this->encrypt->decode($row->password)
				);
			}
			return $member;
		} else return false;
	}
	
	function updateProfile($m) {
		$member = array(
			'lname' => $m['lname'],
			'fname' => $m['fname'],
			'mname' => $m['mname'],
			'sex' => $m['sex'],
			'bdate' => $m['bdate'],
			'mail' => $m['mail'],
			'phone' => $m['phone'],
			'address' => $m['address'],
			'year' => $m['year'],
			'block' => $m['block']
        );
		$account = array(
			'mail' => $m['mail']
			//'password' => $this->prep_password($m['password'])
		);
		
		$this->db->where('id', $m['id']);
		$this->db->update('user_account', $account);
		
		$this->db->where('studno', $m['studno']);
		$this->db->update('member', $member);
	}
	
	function getPassword($id) {
		$query = $this->db->query("SELECT password 
						FROM user_account
						WHERE id = $id");
		$row = $query->row(); 
		$password = $this->encrypt->decode($row->password);
		return $password;				
	}
	
	function updatePassword($m) {
		$account = array(
			'password'  => $this->encrypt->encode($m['new_pass'])
		);
		
		$this->db->where('id', $m['id']);
		$this->db->update('user_account', $account);
	}
}
?>