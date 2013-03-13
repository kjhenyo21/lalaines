<?php
class Employees_DB extends CI_Model {
	private $conn;
	
	function __construct() {
		$this->conn = $this->load->database();
		$this->load->library('encrypt');
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}
	
	function getStudnoByID($id) {
		$query = $this->db->query("SELECT studno
									FROM user_account
									WHERE id=$id");
		$row = $query->row(); 
		$studno = $row->studno;
		return $studno;
	}
	
	function getYearAndBlockByStudno($studno) {
		$query = $this->db->query("SELECT studno, year, block
									FROM member
									WHERE studno=$studno");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$info[] = array(
					'studno' => $row->studno,
					'year' => $row->year,
					'block' => $row->block
				);
			}
			return $info;
		} else return false;
	}
	
	function getMembers() {
		$query = $this->db->query("SELECT m.studno, lname, fname, mname, m.mail, phone, role 
									FROM user_account u, member m, role ro
									WHERE u.studno = m.studno
										AND u.roleID = ro.roleID");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$members[] = array(
					'studno' => $row->studno,
					'lname' => $row->lname,
					'fname' => $row->fname,
					'mname' => $row->mname,
					'mail' => $row->mail,
					'phone' => $row->phone,
					'role' => $row->role
				);
			}
			return $members;
		} else return false;
	}
	
	function getMembersByYear($year) {
		$query = $this->db->query("SELECT m.studno as studno, lname, fname, mname, m.mail, phone, role 
									FROM user_account u, member m, role ro
									WHERE (m.studno LIKE '$year%')
										AND u.studno = m.studno
										AND u.roleID = ro.roleID");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$members[] = array(
					'studno' => $row->studno,
					'lname' => $row->lname,
					'fname' => $row->fname,
					'mname' => $row->mname,
					'mail' => $row->mail,
					'phone' => $row->phone,
					'role' => $row->role
				);
			}
			return $members;
		} else return false;
	}
	
	function getMembersByYearAndBlock($year, $block) {
		$query = $this->db->query("SELECT m.studno as studno, lname, fname, mname, m.mail, phone, role 
									FROM user_account u, member m, role ro
									WHERE year = '$year' AND block = '$block'
										AND u.studno = m.studno
										AND u.roleID = ro.roleID");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$members[] = array(
					'studno' => $row->studno,
					'lname' => $row->lname,
					'fname' => $row->fname,
					'mname' => $row->mname,
					'mail' => $row->mail,
					'phone' => $row->phone,
					'role' => $row->role
				);
			}
			return $members;
		} else return false;
	}
	
	function getMembersByRole() {
		$query = $this->db->query("SELECT m.studno, lname, fname, mname, m.mail, phone, role 
									FROM user_account u, member m, role ro
									WHERE u.studno = m.studno
										AND u.roleID = ro.roleID
									ORDER BY role, studno");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$members[] = array(
					'studno' => $row->studno,
					'lname' => $row->lname,
					'fname' => $row->fname,
					'mname' => $row->mname,
					'mail' => $row->mail,
					'phone' => $row->phone,
					'role' => $row->role
				);
			}
			return $members;
		} else return false;
	}
	
	function addMember($m) {
	    $member = array(
			'uname' => $m['uname'],
			'mail' => $m['mail']
        );
 		$account = array(
			'uname' => $m['uname'],
			'mail' => $m['mail'],
			'roleID' => 2,
			'password' => $this->encrypt->encode($m['password'])
		);
		
        $this->db->insert('member', $member);
		$this->db->insert('user_account', $account);	
	}

	function mailExists($m) {
		$query = $this->db->query("SELECT id
									FROM user_account
									WHERE mail = '$m'");
		if ($query->num_rows() != 0) {
			return true;
		}
		else return false;
	}
	
	function updateRole($studno, $role) {
		$account = array(
			'roleID' => $role
		);
		
		$this->db->where('studno', $studno);
		$this->db->update('user_account', $account);
	}
	
	function deleteMember($id) {
		$this->db->where('id', $id);
		$this->db->delete('user_account');
		
		$this->db->where('id', $id);
		$this->db->delete('member');
	}
}
?>