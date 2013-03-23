<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Messages_DB extends CI_Model {
	private $conn;
	
	function __construct() {
		$this->conn = $this->load->database();
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}
	
	function getMessages() {
		$query = $this->db->query("SELECT *	
									FROM messages");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$messages[] = array(
					'id' => $row->id,
					'ref' => $row->ref,
					'date_sent' => $row->date_sent,
					'date_received' => $row->date_received,
					'date_confirmed' => $row->date_confirmed,
					'name' => $row->name,
					'contact' => $row->contact,
					'date' => $row->date,
					'or_no' => $row->or_no,
					'amt' => $row->amt,
					'reply' => $row->reply,
					'status' => $row->status
				);
			}
			return $messages;
		} else return false;	
	}

	function getMessageByRef($ref) {
		$query = $this->db->query("SELECT *	
									FROM messages 
									WHERE ref=$ref");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$message = array(
					'id' => $row->id,
					'ref' => $row->ref,
					'date_sent' => $row->date_sent,
					'date_received' => $row->date_received,
					'date_confirmed' => $row->date_confirmed,
					'name' => $row->name,
					'contact' => $row->contact,
					'date' => $row->date,
					'or_no' => $row->or_no,
					'amt' => $row->amt,
					'reply' => $row->reply,
					'status' => $row->status
				);
			}
			return $message;
		} else return false;
	}
	
	function getMessageByID($id) {
		$query = $this->db->query("SELECT *	
									FROM messages 
									WHERE id=$id");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$message = array(
					'id' => $row->id,
					'ref' => $row->ref,
					'date_sent' => $row->date_sent,
					'date_received' => $row->date_received,
					'date_confirmed' => $row->date_confirmed,
					'name' => $row->name,
					'contact' => $row->contact,
					'date' => $row->date,
					'or_no' => $row->or_no,
					'amt' => $row->amt,
					'reply' => $row->reply,
					'status' => $row->status
				);
			}
			return $message;
		} else return false;
	}
	
	function removeMessage($id) {
		$this->db->where('id', $id);
		$this->db->delete('messages'); 
	}
	
	function clear() {
		$this->db->truncate('messages'); 
	}
}