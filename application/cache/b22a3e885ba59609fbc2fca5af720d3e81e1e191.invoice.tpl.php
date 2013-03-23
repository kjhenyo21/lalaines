<?php /*%%SmartyHeaderCode:31480512d843ab1a1a8-71508628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22a3e885ba59609fbc2fca5af720d3e81e1e191' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\cashier\\invoice.tpl',
      1 => 1363434253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31480512d843ab1a1a8-71508628',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5146ca3fe686b',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5146ca3fe686b')) {function content_5146ca3fe686b($_smarty_tpl) {?><!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
		<!-- Modal for Adding an Item -->
		<div id="addModal" class="modal hide fade" style="margin-top: auto; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="resetAddItemFields(); return false;">&times;</button>
				<h3>Add Item</h3>
			</div>
			<div class="modal-body">
				<form id="addItem">
					<fieldset>
						<div class="input-append" style="margin: 0 100px">
							<input class="span2" id="item_code" name="item_code" type="text" placeholder="Item Code">
							<input class="span2" id="qty" name="qty" type="text" placeholder="Qty" style="width: 30px">
							<input type="hidden" id="temp_inv_no" name="temp_inv_no" value="92928659">
							<button class="btn" type="button" id="addButton">Add</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<!-- Modal for Removing an Item -->
		<div id="removeModal">
					</div>

		<!-- Main -->
		<h3 style="margin: 20px 70px;"> Point-of-Sales Invoice </h3>
		<div id="main-wrapper">
			<form method="post" action="http://localhost/lalaines/cashier/invoice/placeInvoice" style="margin: 0 0">
				<fieldset>
					<div class="form-inline">
						<span>
							<label>Acct. No.</label>
							<input type="text" id="cust_id" name="cust_id" style="height: 11pt; width:80px; margin-right: 30px" placeholder="000000000">
						</span>
						<span>
							<label>Name</label>
							<input type="text" id="cust_name" name="cust_name" style="height: 11pt; margin-right: 30px" placeholder="Last Name, First Name" autocomplete="off">
						</span>
						<span>
							<label>Address</label>
							<input type="text" id="cust_address" name="cust_address" style="height: 11pt; width: 260px; margin-right: 30px" placeholder="Address">
						</span>
					</div>
					<br>
					<div class="form-inline">
						<span>
							<label>Sex</label>
							<select id="cust_sex" name="cust_sex" style="height: 18pt; width: 50px; margin-right: 30px" value="">
								<option>M</option>
								<option>F</option>
							</select>
						</span>
						<span>
							<label>Birthdate</label>
							<input type="text" id="cust_bdate" name="cust_bdate" style="height: 11pt; width: 90px; margin-right: 30px" placeholder="Birthdate">
						</span>
						<span>
							<label>Contact</label>
							<input type="text" id="cust_contact" name="cust_contact" style="height: 11pt; width: 90px; margin-right: 30px" placeholder="Contact Number">
						</span>
						<span>
							<label>Email</label>
							<input type="text" id="cust_email" name="cust_email" style="height: 11pt; width: 90px; margin-right: 30px" placeholder="Email">
						</span>
						<span>
							<label>TI No.</label>
							<input type="text" id="invoice_no" value="92928659" style="height: 11pt; width: 85px" readonly="readonly">
						</span>
					</div>
					<br>
					<div id="items">
						<table class="table table-striped">
							<thead>
								<th style="width: 90px">Item Code</th>
								<th>Description</th>
								<th style="width: 40px; text-align: right">Qty</th>
								<th style="width: 90px; text-align: right">Unit Price</th>
								<th style="width: 90px; text-align: right">Amount</th>
								<th style="width: 20px"></th>
							</thead>
							<tbody>
																	<tr>
										<td><span id="it_code">000000</span></td>
										<td>--</td>
										<td style="text-align: right">0</td>
										<td style="text-align: right">0.00</td>
										<td style="text-align: right">0.00</td>
										<td>--</td>
									</tr>
															</tbody>
						</table>
					</div>
					<div>
						<table style="color: black">
							<tr>
								<td style="width: 300px; vertical-align: top">
									<a href="#addModal" data-toggle="modal" data-inv_no="92928659">Add Item</a>
									<br><br><br><br>
								</td>
								<td style="width: 300px; vertical-align: top">
									<div class="form-inline">
										<span>
											<label>Cash</label>
											<input type="text" id="cash" name="cash" style="height: 11pt; width: 200px; text-align: right; margin-right: 70px" placeholder="0.00" onKeyup="onChangeCash(0.00);">
										</span>
										<span>
											<label>Change</label>
											<input type="text" id="change" name="change" style="height: 11pt; width: 200px; text-align: right; margin-right: 70px; font-style: bold" value="0.00" readonly="readonly">
										</span>
									</div>
								</td>
								<td>
									<table>
										<tr>
											<td style="text-align: right"><strong>Total</strong></td>
											<td style="text-align: right; width: 103px"><strong><span id="total_amt">0.00</span></strong></td>
										</tr>
										<tr>
											<td style="text-align: right">VAT</td>
											<td style="text-align: right"><span id="vat_percent">12%</span></td>
										</tr>
										<tr>
											<td style="text-align: right">VATable Amt</td>
											<td style="text-align: right"><span id="vatable_amt">0.00</span></td>
										</tr>
										<tr>
											<td style="text-align: right">VAT Amt</td>
											<td style="text-align: right"><span id="vat_amt">0.00</span></td>
										</tr>
										<tr>
											<td style="text-align: right"><strong>Amt Due</strong></td>
											<td style="text-align: right"><strong><span id="amt_due">0.00</span></strong></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<div>
						<input type="hidden" id="user_id" name="user_id" value="C-69241">
						<input type="hidden" id="vat" name="vat" value="0.00">
						<button class="btn btn-primary" type="submit" id="enter_payment" disabled="disabled">Enter Payment</button>
						<a data-url="http://localhost/lalaines/cashier/invoice/reset?no=92928659" class="btn" type="button" id="cancel_inv" disabled="disabled">Reset Invoice</a>
						<a href="http://localhost/lalaines/cashier" class="btn" type="button" id="back">Back</a>
					</div>
				</fieldset>
			</form>
		</div>
		<div id="footer">
			<span style="font-size: 11px; color: #b81d1d"><strong>Copyright &copy 2012. All Rights Reserved.</strong></span>
			<br>CSS powered by Twitter Bootstrap
			<br>Kristian Jacob Abad Lora. BS Computer Science 4
			<br>E-mail: kjalora92@yahoo.com | FB: <a href="http://facebook.com/kjhenyo21">kjhenyo21</a> | Twitter: <a href="http://twitter.com/pchan_august">pchan_august</a>
		</div>
	</body>

	<script src="http://localhost/lalaines/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/lalaines/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="http://localhost/lalaines/assets/scripts/bootstrap-typeahead.js" type="text/javascript"></script>
	<script src="http://localhost/lalaines/assets/scripts/date-format.js" type="text/javascript"></script>
	<script src="http://localhost/lalaines/assets/scripts/clock.js" type="text/javascript"></script>
	<script>
		var cust_name;
		var cust_id;
		var amount_due;
		var cash;
		var change;
		var vat_percent = document.getElementById('vat_percent').innerHTML;
		var vat_rate = vat_percent.slice(0, vat_percent.indexOf('%')) / 100;
		var vat_amount = parseFloat(document.getElementById('vat_amt').innerHTML);
		var vatable_amount = parseFloat(document.getElementById('vatable_amt').innerHTML);
		var total_amount = parseFloat(document.getElementById('total_amt').innerHTML);
		var customers;
		var it_code = parseFloat(document.getElementById('it_code').innerHTML);
		console.log(it_code);
		
		//fetch all customers available
		$.ajax({
			url: "invoice/getAllCustomers",
			dataType: "json",
			async: false,
			success: function(data) {
				customers = data;
			}
		});
		
		$(function() {
			$('#cust_name').typeahead({
				source: customers
			});
		});
		
		var onChangeCustName = function(event) {
			//when cust_name is updated, update the address and contact number fields
			cust_name = document.getElementById('cust_name').value;
			cust_id = cust_name.slice(cust_name.indexOf('(')+1, cust_name.indexOf(')'));
			cust_name = cust_name.slice(cust_name.indexOf(')')+1);
			console.log(cust_id);
			setTimeout(function() {
				$.ajax({
					url: "invoice/getCustomerInfo",
					type: "post",
					data: "search=" + cust_id,
					dataType: "json",
					async: false,
					success: function(data) {
						$('#cust_id').val(cust_id);
						$('#cust_name').val(cust_name);
						$('#cust_address').val(data.address);
						$('#cust_sex').val(data.sex);
						$('#cust_bdate').val(data.bdate);
						$('#cust_contact').val(data.contact);
						$('#cust_email').val(data.email);
					}
				});
			}, 1000);
		};

		$('#cust_name').on('change', onChangeCustName);
		
		function resetAddItemFields() {
			document.getElementById('item_code').value = "";
			document.getElementById('qty').value = "";
		}
		
		function onChangeCash(amount_due) {
			//when cash is updated, update the change
			cash = document.getElementById('cash').value;
			amount_due = total_amount;
			change = cash - amount_due;
			$('#change').val(change.toFixed(2));
		}
		
		var form = $('#addItem');
		$('#addButton').click(function(){
			//when qty is updated, check inventory if there's still stock for certain product
			var item_code = document.getElementById('item_code').value;
			var qty_demanded = document.getElementById('qty').value;
			console.log(item_code);
			$.ajax({
				url: "inventory/getQtyOnHand",
				type: "post",
				data: "search=" + item_code,
				dataType: "json",
				async: false,
				success: function(data) {
					console.log("qty: " + data)
					if (qty_demanded > parseInt(data)) {
						alert("Out of stock! Only " + data + " items left.");
					} else if (qty_demanded == 0 || qty_demanded == "") {
						alert("Cannot process 0 order. Please specify a quantity.");
					} else if (data == false) {
						alert("Product not found!");
					} else {
						$.ajax({
							type: "POST",
							url : "invoice/addItem",
							data: form.serialize(),
							dataType: "json",
							success: function(data){
								$('#item_code').val("");
								$('#qty').val("");
								$('#addModal').modal('hide');
								$('#items').load('invoice_items?no=' + data.invoice_no);					 
								$('#removeModal').load('invoice_remove_modal?no=' + data.invoice_no);
								total_amount += data.amount;
								vatable_amt_per_item = data.amount / (1 + vat_rate);
								vat_amt_per_item = data.amount - vatable_amt_per_item;
								vatable_amount += vatable_amt_per_item;
								vat_amount += vat_amt_per_item;
								console.log("amt_item: " + data.amount);
								console.log("vat_rate: " + vat_rate);
								console.log("vat_amt: " + vat_amount);
								document.getElementById('total_amt').innerHTML = total_amount.toFixed(2);
								document.getElementById('vatable_amt').innerHTML = vatable_amount.toFixed(2);
								document.getElementById('vat_amt').innerHTML = vat_amount.toFixed(2);
								document.getElementById('amt_due').innerHTML = total_amount.toFixed(2);
								document.getElementById('vat').value = vat_amount.toFixed(2);
							}
						});
					}
				}
			});
		});
		
		$('#cancel_inv').click(function(){
			$.ajax({
				type: "POST",
				url : $(this).attr('data-url'),
				dataType: "json",
				success: function(data){
					$('#item_code').val("");
					$('#qty').val("");
					$('#items').load('invoice_items?no=' + data);					 
					$('#removeModal').load('invoice_remove_modal?no=' + data);
				}
			});
		});
		
		function removeItem(id) {
			$.ajax({
				type: "POST",
				url : $('#removeButton'+ id).attr('data-url'),
				dataType: "json",
				success: function(data){
					$('#remove'+ id).modal('hide');
					$('#items').load('invoice_items?no=' + data.temp_inv_no);
					total_amount -= data.amount;
					vatable_amt_per_item = data.amount / (1 + vat_rate);
					vat_amt_per_item = data.amount - vatable_amt_per_item;
					vatable_amount -= vatable_amt_per_item;
					vat_amount -= vat_amt_per_item;
					console.log("amt_item: " + data.amount);
					console.log("vat_rate: " + vat_rate);
					console.log("vat_amt: " + vat_amount);
					it_code = parseFloat(document.getElementById('it_code').innerHTML);
					console.log("code: " + it_code);
					if (it_code != 0)
						document.getElementById('enter_payment').disabled = false;
					else document.getElementById('enter_payment').disabled = true;
					document.getElementById('total_amt').innerHTML = total_amount.toFixed(2);
					document.getElementById('vatable_amt').innerHTML = vatable_amount.toFixed(2);
					document.getElementById('vat_amt').innerHTML = vat_amount.toFixed(2);
					document.getElementById('amt_due').innerHTML = total_amount.toFixed(2);
					document.getElementById('vat').value = vat_amount.toFixed(2);
				}
			});
		}
		

		$(function() {
			it_code = parseFloat(document.getElementById('it_code').innerHTML);
			if (it_code != 0) {
				document.getElementById('enter_payment').disabled = false;
				document.getElementById('cancel_inv').removeAttribute("disabled");
			} else {
				document.getElementById('enter_payment').disabled = true;
				document.getElementById('cancel_inv').setAttribute("disabled", "disabled");
			}
		});

	</script>
</html><?php }} ?>