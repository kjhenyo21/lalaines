<!--
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
							<input type="hidden" id="temp_inv_no" name="temp_inv_no" value="{$temp_inv_no}">
							<button class="btn" type="button" id="addButton">Add</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<!-- Modal for Removing an Item -->
		<div id="removeModal">
			{if ($items)}
				{foreach $items as $i}
					<div id="remove{$i['id']}" class="modal hide fade" style="margin-top: auto">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Item</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the item?</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton{$i['id']}" href="#" data-url="{url}cashier/invoice/removeItem?id={$i['id']}&invoice={$temp_inv_no}" onClick="removeItem({$i['id']}); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
				{/foreach}
			{/if}
		</div>

		<!-- Main -->
		<h3 style="margin: 20px 70px;"> Point-of-Sales Invoice </h3>
		<div id="main-wrapper">
			<form method="post" action="{url}cashier/invoice/placeInvoice" style="margin: 0 0">
				<fieldset>
					<div class="form-inline">
						<span>
							<label>Acct. No.</label>
							<input type="text" id="cust_id" name="cust_id" style="height: 11pt; width:80px; margin-right: 30px" placeholder="000000000">
						</span>
						<span>
							<label>Name</label>
							<input type="text" id="cust_name" name="cust_name" style="height: 11pt; margin-right: 30px" placeholder="Name" autocomplete="off">
						</span>
						<span>
							<label>Address</label>
							<input type="text" id="cust_address" name="cust_address" style="height: 11pt; width: 320; margin-right: 30px" placeholder="Address">
						</span>
					</div>
					<br>
					<div class="form-inline">
						<span>
							<label>Contact</label>
							<input type="text" id="cust_contact" name="cust_contact" style="height: 11pt; width: 90px; margin-right: 30px" placeholder="Contact Number">
						</span>
						<span>
							<label>Temp Invoice No.</label>
							<input type="text" id="invoice_no" value="{$temp_inv_no}" style="height: 11pt; width: 85px; margin-right: 70px">
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
								{if ($items)}
									{foreach $items as $i}
										<tr>
											<td>{$i['item_code']}</td>
											<td>{$i['desc']}</td>
											<td style="text-align: right">{$i['quantity']}</td>
											<td style="text-align: right">{$i['price']}</td>
											<td style="text-align: right">{$i['amount']}</td>
											<td><a href="#remove{$i['id']}" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
										</tr>
									{/foreach}
									<tr>
										<td></td>
										<td></td>
										<td style="text-align: right; color: black"><strong>{$total_qty}</strong></td>
										<td style="text-align: right"></td>
										<td style="text-align: right"></td>
										<td></td>
									</tr>
								{else}
									<tr>
										<td>000000</td>
										<td>--</td>
										<td style="text-align: right">0</td>
										<td style="text-align: right">0.00</td>
										<td style="text-align: right">0.00</td>
										<td>--</td>
									</tr>
								{/if}
							</tbody>
						</table>
					</div>
					<div>
						<table style="color: black">
							<tr>
								<td style="width: 300px; vertical-align: top">
									<a href="#addModal" data-toggle="modal" data-inv_no="{$temp_inv_no}">Add Item</a>
									<br><br><br><br>
								</td>
								<td style="width: 300px; vertical-align: top">
									<div class="form-inline">
										<span>
											<label>Cash</label>
											<input type="text" id="cash" name="cash" style="height: 11pt; width: 200px; text-align: right; margin-right: 70px" placeholder="0.00" onChange="onChangeCash({$total_amt});">
										</span>
										<span>
											<label>Change</label>
											<input type="text" id="change" name="change" style="height: 11pt; width: 200px; text-align: right; margin-right: 70px; font-style: bold" value="0.00">
										</span>
									</div>
								</td>
								<td>
									<table>
										<tr>
											<td style="text-align: right"><strong>Total</strong></td>
											<td style="text-align: right; width: 103px"><strong>{$total_amt}</strong></td>
										</tr>
										<tr>
											<td style="text-align: right">VAT</td>
											<td style="text-align: right">12%</td>
										</tr>
										<tr>
											<td style="text-align: right">VATable Amt</td>
											<td style="text-align: right">{$vatable_amt}</td>
										</tr>
										<tr>
											<td style="text-align: right">VAT Amt</td>
											<td style="text-align: right">{$vat_amt}</td>
										</tr>
										<tr>
											<td style="text-align: right"><strong>Amt Due</strong></td>
											<td style="text-align: right"><strong>{$total_amt}</strong></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<div>
						<input type="hidden" id="user_id" name="user_id" value="{$cashier_no}">
						<button class="btn btn-primary" type="submit" id="enter_payment">Enter Payment</button>
						<a data-url="{url}cashier/invoice/reset?no={$temp_inv_no}" class="btn" type="button" id="cancel_inv">Cancel Invoice</a>
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

	<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap-typeahead.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/date-format.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/clock.js" type="text/javascript"></script>
	<script>
		var cust_name;
		var cust_id;
		var amount_due;
		var cash;
		var change;
		
		$(function() {
			$('#cust_name').typeahead({
				source: function(query, process) {
					$.ajax({
						url: "invoice/searchCustomers",
						type: "post",
						data: "search=" + query,
						dataType: "json",
						async: false,
						success: function(data) {
							process(data);
						}
					});
				}
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
						$('#cust_contact').val(data.contact);
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
			change = cash - amount_due;
			$('#change').val(change);
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
					if (qty_demanded > parseInt(data)) {
						alert("Out of stock! Only " + data + " items left.");
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
								$('#items').load('invoice_items?no=' + data);					 
								$('#removeModal').load('invoice_remove_modal?no=' + data);
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
					}
			});
		}
	</script>
</html>