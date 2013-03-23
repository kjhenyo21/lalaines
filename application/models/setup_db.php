<?php
class Setup_DB extends CI_Model {
	private $conn;
	
	function __construct() {
		$this->conn = $this->load->database();
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}

	function saveUserInfo($info) {
		$user = array(
			'id' => $info['id'],
			'lname' => $info['lname'],
			'fname' => $info['fname'],
			'mname' => $info['mname'],
			'sex' => $info['sex'],
			'bdate' => $info['bdate'],
			'address' => $info['address'],
			'contact' => $info['contact'],
			'email' => $info['email']
		);
		
		$company = array(
			'license_no' => $info['license_no'],
			'name' => $info['cname'],
			'address' => $info['caddress']
		);
		
		$account = array(
			'position' => $info['position'],
			'username' => $info['uname'],
			'password' => $this->encrypt->encode($info['password'])
		);
		
		$this->db->insert('users_info', $user);
		$this->db->insert('company_info', $company);
		$this->db->insert('user_account', $account);
	}
	
	function removeTempItem($id) {
		$query = $this->db->query("SELECT amount
									FROM sales_invoice_temp
									WHERE id = $id");
		$row = $query->row(); 
		$data['amount'] = $row->amount;
		
		$this->db->where('id', $id);
		$this->db->delete('sales_invoice_temp');
		
		return $data;
	}
	
	function emptyTempInvoices() {
		$this->db->empty_table('sales_invoice_temp');
	}
	
	function createInvoice($info) {
		$temp = explode(",", $info['cust_name']);
		$lname = trim($temp[0]);
		$fname = trim($temp[1]);
		
		$invoice_info = array(
			'cust_acct_no' => $info['cust_id'],
			'cust_name' => $info['cust_name'],
			'cashier_no' => $info['user_id'],
			'vat_amount' => $info['vat_amount']
		);
		
        $this->db->insert('sales_invoice', $invoice_info);
		
		//if the customer isn't in the database yet, add him/her
		$query = $this->db->query("SELECT *
									FROM customers
									WHERE lname = '$lname'
										AND fname = '$fname'");
										
		if (!$query->row()) {
			$cust_info = array(
				'id' => $info['cust_id'],
				'lname' => $lname,
				'fname' => $fname,
				'bdate' => $info['cust_bdate'],
				'sex' => $info['cust_sex'],
				'address' => $info['cust_address'],
				'contact' => $info['cust_contact'],
				'email' => $info['cust_email']
			);
			$this->db->insert('customers', $cust_info);
		}
		
		$query = $this->db->query("SELECT *
									FROM sales_invoice s
									ORDER BY s.invoice_no
									DESC LIMIT 1");
									
		$row = $query->row(); 
		$si_info['invoice_no'] = $row->invoice_no;
		$si_info['date_time'] = $row->date_time;
		$si_info['user_id'] = $row->cashier_no;
		
		return $si_info;
	}

	function updateSalesInvoiceDetails($items) {
		$items = array(
			'invoice_no' => $items['invoice_no'],
			'inventory_no' => $items['inventory_no'],
			'item_code' => $items['item_code'],
			'quantity' => $items['units_sold'],
			'price' => $items['price'],
			'amount' => $items['amount']
		);
		
        $this->db->insert('sales_invoice_details', $items);
	}
	
	function updateAmountDue($d) {
		$info = array(
			'amount_due' => $d['amount_due']
		);
		
		$this->db->where('invoice_no', $d['invoice_no']);
		$this->db->update('sales_invoice', $info);
	}

	function getPresentVATRate() {
		$query = $this->db->query("SELECT *
									FROM vat_rates
									ORDER BY id
									DESC LIMIT 1");
									
		$row = $query->row(); 
		$vat_rate = $row->vat_rate;
		
		return $vat_rate;
	}
	
	function getPaymentsByStudno($studno) {
		$query = $this->db->query("SELECT p.id as id, OR_no, studno, facID, f.name as facName, amt_paid, date_time
									FROM payments p, fac f
									WHERE p.studno = $studno
										AND p.facID = f.id");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$payments[] = array(
					'id' => $row->id,
					'OR_no' => $row->OR_no,
					'studno' => $row->studno,
					'facID' => $row->facID,
					'facName' => $row->facName,
					'amt_paid' => $row->amt_paid,
					'date_time' => $row->date_time
				);
			}
			return $payments;
		} else return false;
	}
	
	function getTotalPayableByStudno($studno) {
		$query = $this->db->query("SELECT amount
									FROM payables p, fac f
									WHERE p.studno = $studno
										AND p.facID = f.id");
		$totalPayable = 0;
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$totalPayable += $row->amount;
			}
			return $totalPayable;
		} else return false;
	}
	
	function getTotalAmtPaidByStudno($studno) {
		$query = $this->db->query("SELECT amt_paid
									FROM payments p, fac f
									WHERE p.studno = $studno
										AND p.facID = f.id");
		$totalAmtPaid = 0;
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$totalAmtPaid += $row->amt_paid;
			}
			return $totalAmtPaid;
		} else return false;
	}
	
	function getID($name) {
		$query = $this->db->query("SELECT id
									FROM fac
									WHERE name='$name'");
		$row = $query->row(); 
		$id = $row->id;
		return $id;
	}
	
	function enterPayment($p) {
 		$payment = array(
			'OR_no' => $p['or'],
			'studno' => $p['studno'],
			'facID' => $p['fac'],
			'type' => $p['type'],
			'amt_paid' => $p['amount']
		);
		
        $this->db->insert('payments', $payment);	
	}

	function addFacToStud($studno, $fac_id) {
		$payable = array(
			'studno' => $studno,
			'facID' => $fac_id
		);
		
        $this->db->insert('payables', $payable);			
	}
	
	function updateFac($f) {
		$fac = array(
			'name' => $f['name'],
			'amount' => $f['amount'],
			'date_due' => $f['date_due'],
			'memo' => $f['memo']
		);
		
		$this->db->where('id', $f['id']);
		$this->db->update('fac', $fac);
	}
	
	function deleteFac($id) {
		$this->db->where('id', $id);
		$this->db->delete('fac');
	}
}
?>