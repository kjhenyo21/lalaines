<?php
class Inventory_DB extends CI_Model {
	private $conn;
	
	function __construct() {
		$this->conn = $this->load->database();
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}
	
	function updateInventory($items) {
		$items = array(
			'item_code' => $items['item_code'],
			'date_time' => $items['date_time'],
			'units_sold' => $items['units_sold'],
			'user' => $items['user_id']
		);
		
        $this->db->insert('inventory_trans_file', $items);
		
		$query = $this->db->query("SELECT inventory_no
									FROM inventory_trans_file
									ORDER BY inventory_no
									DESC LIMIT 1");
									
		$row = $query->row(); 
		$inventory_no = $row->inventory_no;
		
		return $inventory_no;
	}
	
	function updateInventoryMasterFileWhenItemIsAddedToCart($d) {
		$ic = $d['item_code'];
		$query = $this->db->query("SELECT qty_on_hand
									FROM inventory_master_file
									WHERE item_code = $ic");
		
		$row = $query->row(); 
		$qty_on_hand = $row->qty_on_hand;
		$qty_on_hand -= $d['units_sold'];
		
		$info = array(
			'qty_on_hand' => $qty_on_hand
		);
		
		$this->db->where('item_code', $d['item_code']);
		$this->db->update('inventory_master_file', $info);
	}

	function updateInventoryMasterFileWhenItemIsReturned($d) {
		$ic = $d['item_code'];
		$query = $this->db->query("SELECT qty_on_hand as qty
									FROM inventory_master_file
									WHERE item_code = $ic");
		
		$row = $query->row(); 
		$qty_on_hand = $row->qty;
		$qty_on_hand += $d['units_sold'];
		
		$info = array(
			'qty_on_hand' => $qty_on_hand
		);
		
		$this->db->where('item_code', $d['item_code']);
		$this->db->update('inventory_master_file', $info);
	}
	
	function getQtyOnHand($item_code) {
		$query = $this->db->query("SELECT qty_on_hand
									FROM inventory_master_file
									WHERE item_code = $item_code");
		
		if ($query->row()) {
			$row = $query->row(); 
			$qty_on_hand = $row->qty_on_hand;
		} else $qty_on_hand = false;
		return $qty_on_hand;
	}
}
?>