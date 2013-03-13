<?php /*%%SmartyHeaderCode:1059550927989715563-75627825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8d79eb9568da42410a75879370d2d5aefc7dfd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wadwe\\application/views\\cashier\\invoice.tpl',
      1 => 1351803209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1059550927989715563-75627825',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_50c835715bf71',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c835715bf71')) {function content_50c835715bf71($_smarty_tpl) {?>  <!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>WADWE Sales Invoice</title>
		<link href="http://localhost/wadwe/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/wadwe/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/wadwe/assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="http://localhost/wadwe/assets/stylesheets/datepicker.css" rel="stylesheet"></link>
	</head>
	
	<body>
		<!-- Modal for Adding an Item -->
		<div id="add" class="modal hide fade" style="margin-top: auto; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Add Item</h3>
			</div>
			<div class="modal-body">
				<form method="post" action="http://localhost/wadwe/cashier/invoice/addItem?customer=201200001">
					<fieldset>
						<div class="input-append" style="margin: 0 100px">
							<input class="span2" id="item_code" name="item_code" type="text" placeholder="Item Code">
							<input class="span2" id="qty" name="qty" type="text" placeholder="Qty" style="width: 30px">
							<input type="hidden" id="temp_inv_no" name="temp_inv_no" value="7124910712">
							<button class="btn" type="submit" id="add">Add</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		
		<!-- Modal for Removing an Item -->
				
		<!-- Navbar -->
		<div id="banner" class="page-header"></div>
		<div class="navbar navbar-inverse navbar-fixed-top" style="position: relative">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" style="color: white">Cashier No: 0168</a>
				<a class="brand" style="color: white; margin: auto 165px">October 31, 2012  05:30:25 PM</a>
				<a class="brand" href="http://localhost/wadwe/cashier" style="color: white; margin-left: 30px; padding-right: 0px">Home</a>
			</div>
		</div>
		
		<!-- Main -->
		<h3 style="margin: 20px 70px;"> Sales Invoice </h3>
		<div id="main-wrapper">
												<form method="post" action="http://localhost/wadwe/cashier/invoice/placeInvoice">
						<fieldset>
							<div class="form-inline">
								<span>
									<label>Customer</label>
									<input type="text" id="cust_name" value="Lora, Rosario Abad" style="height: 11pt; margin-right: 70px" placeholder="Name">
								</span>
								<span>
									<label>Date/Time</label>
									<input type="text" id="date_time" value="12/09/2012 01:45:23 PM" style="height: 11pt; width: 170px; margin-right: 70px">
								</span>
								<span>						
									<label>Due Date</label>
									<input type="text" id="due_date" style="height: 11pt; width: 80px">
								</span>
							</div>
							<div class="form-inline">
								<span>
									<label>Customer Acct. No.</label>
									<input type="text" id="cust_acct_no" value="201200001" style="height: 11pt; width: 80px; margin-right: 70px">
								</span>
								<span>
									<label>Credit Limit</label>
									<input type="text" id="credit_limit" value="" style="height: 11pt; width: 80px; margin-right: 70px">
								</span>
								<span>
									<label>Temp Invoice No.</label>
									<input type="text" id="invoice_no" value="7124910712" style="height: 11pt; width: 85px; margin-right: 70px">
								</span>
							</div>
							<br>
							<div>
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
												<td>000000</td>
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
										<td style="width: 620px; vertical-align: top">
											<a href="#add" data-toggle="modal" data-inv_no="7124910712">Add Item</a>
											<br><br><br><br>
											<button class="btn btn-primary" type="submit" id="place_inv">Place Invoice</button>
											<a href="http://localhost/wadwe/cashier/invoice/reset?customer=201200001&invoice=7124910712" class="btn" type="button" id="cancel_inv">Cancel Invoice</button>
										</td>
										<td>
											<table>
												<tr>
													<td style="text-align: right"><strong>Total</strong></td>
													<td style="text-align: right; width: 103px"><strong>0</strong></td>
												</tr>
												<tr>
													<td style="text-align: right">VAT</td>
													<td style="text-align: right">12%</td>
												</tr>
												<tr>
													<td style="text-align: right">VATable Amt</td>
													<td style="text-align: right">0</td>
												</tr><tr>
													<td style="text-align: right">VAT Amt</td>
													<td style="text-align: right">0</td>
												</tr><tr>
													<td style="text-align: right"><strong>Amt Due</strong></td>
													<td style="text-align: right"><strong>0</strong></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
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
	
	<script src="http://localhost/wadwe/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/wadwe/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="http://localhost/wadwe/assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
	<script>
		$('#due_date').datepicker();
		var today = new Date();
		document.getElementById('date_time').value = today;
	</script>
</html><?php }} ?>