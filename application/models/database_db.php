<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Database_DB extends CI_Model {
	private $conn;
	
	
	function __construct() {
		$this->conn = $this->load->database();
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}

	function tableExists($table) {
		if ($this->db->table_exists($table)) {
			return true;
		} else return false;
	}
	
	function createTransactionsTable($columns) {
		$query_string = "CREATE TABLE `transactions` (";
		foreach($columns as $c) {
			$query_string .= "`".trim($c)."` varchar(255),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ","));
		$query_string .= ") ENGINE = InnoDB DEFAULT CHARSET = latin1;";
		//echo $query_string;
		
		$this->db->query($query_string);
	}

	function createTransactionDetailsTable($columns) {
		$query_string = "CREATE TABLE `transaction_details` (";
		foreach($columns as $c) {
			$query_string .= "`".trim($c)."` varchar(255),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ","));
		$query_string .= ") ENGINE = InnoDB DEFAULT CHARSET = latin1;";
		//echo $query_string;
		
		$this->db->query($query_string);
	}
	
	function addTransactions($head, $info) {
		$this->db->truncate('transactions');
		$query_string = "INSERT INTO `transactions` (";
		$noOfHeads = 0;
		foreach($head as $h) {
			$query_string .= "`".trim($h)."`,";
			$noOfHeads++;
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).") VALUES ";

		foreach($info as $i) {
			$query_string .= "(";
			$index = 0;
			while ($index < $noOfHeads) {
				$query_string .= "'".trim($i[$index])."',";
				$index++;
			}
			$query_string = substr($query_string, 0, strrpos($query_string, ","));
			$query_string .= "),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).";";
		//echo $query_string;
		
		$this->db->query($query_string);
	}

	function addTransactionDetails($head, $info) {
		$this->db->truncate('transaction_details');
		$query_string = "INSERT INTO `transaction_details` (";
		$noOfHeads = 0;
		foreach($head as $h) {
			$query_string .= "`".trim($h)."`,";
			$noOfHeads++;
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).") VALUES ";

		foreach($info as $i) {
			$query_string .= "(";
			$index = 0;
			while ($index < $noOfHeads) {
				$query_string .= "'".trim($i[$index])."',";
				$index++;
			}
			$query_string = substr($query_string, 0, strrpos($query_string, ","));
			$query_string .= "),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).";";
		//echo $query_string;
		
		$this->db->query($query_string);
	}
	
	function getSamples($sizeOfTrans, $info) {
		$totalAmountDue = 0;
		$totalTaxableAmount = 0;
		$auditedDeductions = 0;
		$percentageOfDeductions = 0;
		$min = 8;
		$sampleSize = 0;
		
		foreach ($info as $i) {
			$totalAmountDue += $i[2];
			$totalTaxableAmount += $i[3];
		}
		
		$auditedDeductions = $totalAmountDue - $totalTaxableAmount;
		$percentageOfDeductions = $auditedDeductions / $totalAmountDue;
		$sampleSize = $min / $percentageOfDeductions;
		$sampleSize = round($sampleSize);
		
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt_due, `VAT Amount` as vat_amt, `Customer Name` as cust_name, `Customer Address` as cust_address, `Customer Contact` as cust_contact
									FROM transactions
									ORDER BY RAND()
									LIMIT $sampleSize");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items[] = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->amt_due,
					3 => $row->vat_amt,
					4 => $row->cust_name,
					5 => $row->cust_address,
					6 => $row->cust_contact
				);
			}
			return $items;
		} else return false;		
	}

	function getTransactionDetailsByOR($or_no) {
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Item` as item, `Quantity` as qty, `Unit Price` as price, `Amount` as amt
									FROM transaction_details
									WHERE `OR No` = $or_no");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items[] = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->item,
					3 => $row->qty,
					4 => $row->price,
					5 => $row->amt
				);
			}
			return $items;
		} else return false;
	}

	function getTransactionByOR($or_no) {
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt, `Customer Name` as name, `Customer Address` as address, `Customer Contact` as contact
									FROM transactions
									WHERE `OR No` = $or_no");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->amt,
					3 => $row->name,
					4 => $row->address,
					5 => $row->contact
				);
			}
			return $items;
		} else return false;
	}
	
	function storeSentMessage($d) {
		$data = array(
		   'ref' => $d['ref'],
		   'name' => $d['name'],
		   'contact' => $d['contact'],
		   'date' => $d['date'],
		   'or_no' => $d['or_no'],
		   'amt' => $d['amt'],
		   'status' => 'sent'
		);

		$this->db->insert('messages', $data); 
	}
	
	function saveReceivedMessage($ref, $message) {
		date_default_timezone_set('Asia/Hong_Kong');
		$data = array(
			'date_received' => date("Y-m-d H:i:s", time()),
			'reply' => $message,
			'status' => 'new'
		);

		$this->db->where('ref', $ref); 
		$this->db->update('messages', $data); 
	}
	//--
	function confirmMessage($id) {
		date_default_timezone_set('Asia/Hong_Kong');
		$data = array(
			'date_confirmed' => date("Y-m-d H:i:s", time()),
			'status' => 'confirmed'
		);

		$this->db->where('id', $id);
		$this->db->update('messages', $data); 
	}
	
	function ignoreMessage($id) {
		$data = array(
		   'status' => 'ignored'
		);
		
		$this->db->where('id', $id);
		$this->db->update('messages', $data); 
	}
	
	function getIgnoredMessages() {
		$query = $this->db->query("SELECT *	
									FROM messages 
									WHERE status='new' 
										OR status='ignored' 
									ORDER BY id ASC;");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$messages[] = array(
					'id' => $row->id,
					'ref' => $row->ref,
					'date_received' => $row->date_received,
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
	
	function countLatestNewMessages() {
		$query = $this->db->query("SELECT COUNT(*) as count	
									FROM messages 
									WHERE status='new'");
		if ($query->result()) {
			$row = $query->row();
			$count = $row->count;
			return $count;
		} else return false;
	}
	
	function countIgnoredAndNewMessages() {
		$query = $this->db->query("SELECT COUNT(*) as count	
									FROM messages 
									WHERE status='new'
										OR status='ignored'");
		if ($query->result()) {
			$row = $query->row();
			$count = $row->count;
			return $count;
		} else return false;
	}
	
	function checkMessageStatus($ref) {
		$query = $this->db->query("SELECT status	
									FROM messages 
									WHERE ref=$ref");
		if ($query->result()) {
			$row = $query->row();
			$status = $row->status;
			return $status;
		} else return false;
	}
}