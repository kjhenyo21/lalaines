<?php /* Smarty version Smarty-3.1.7, created on 2012-11-01 21:53:32
         compiled from "C:\xampp\htdocs\wadwe\application/views\cashier\invoice.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_509279897f646',
  'variables' => 
  array (
    'customer_no' => 0,
    'temp_inv_no' => 0,
    'items' => 0,
    'i' => 0,
    'customer' => 0,
    'c' => 0,
    'total_qty' => 0,
    'total_amt' => 0,
    'vatable_amt' => 0,
    'vat_amt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509279897f646')) {function content_509279897f646($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\wadwe\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>WADWE Sales Invoice</title>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/datepicker.css" rel="stylesheet"></link>
	</head>
	
	<body>
		<!-- Modal for Adding an Item -->
		<div id="add" class="modal hide fade" style="margin-top: auto; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Add Item</h3>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
cashier/invoice/addItem?customer=<?php echo $_smarty_tpl->tpl_vars['customer_no']->value;?>
">
					<fieldset>
						<div class="input-append" style="margin: 0 100px">
							<input class="span2" id="item_code" name="item_code" type="text" placeholder="Item Code">
							<input class="span2" id="qty" name="qty" type="text" placeholder="Qty" style="width: 30px">
							<input type="hidden" id="temp_inv_no" name="temp_inv_no" value="<?php echo $_smarty_tpl->tpl_vars['temp_inv_no']->value;?>
">
							<button class="btn" type="submit" id="add">Add</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		
		<!-- Modal for Removing an Item -->
		<?php if (($_smarty_tpl->tpl_vars['items']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<div id="remove<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="modal hide fade" style="margin-top: auto">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3>Remove Item</h3>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to remove the item?</p>
					</div>
					<div class="modal-footer">
						<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
cashier/invoice/removeItem?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&customer=<?php echo $_smarty_tpl->tpl_vars['customer_no']->value;?>
&invoice=<?php echo $_smarty_tpl->tpl_vars['temp_inv_no']->value;?>
" class="btn">Yes</a>
						<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
					</div>
				</div>
			<?php } ?>
		<?php }?>
		
		<!-- Navbar -->
		<div id="banner" class="page-header"></div>
		<div class="navbar navbar-inverse navbar-fixed-top" style="position: relative">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" style="color: white">Cashier No: 0168</a>
				<a class="brand" style="color: white; margin: auto 165px">October 31, 2012  05:30:25 PM</a>
				<a class="brand" href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
cashier" style="color: white; margin-left: 30px; padding-right: 0px">Home</a>
			</div>
		</div>
		
		<!-- Main -->
		<h3 style="margin: 20px 70px;"> Sales Invoice </h3>
		<div id="main-wrapper">
			<?php if (($_smarty_tpl->tpl_vars['customer']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<form method="post" action="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
cashier/invoice/placeInvoice">
						<fieldset>
							<div class="form-inline">
								<span>
									<label>Customer</label>
									<input type="text" id="cust_name" value="<?php echo $_smarty_tpl->tpl_vars['c']->value["lname"];?>
, <?php echo $_smarty_tpl->tpl_vars['c']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value['mname'];?>
" style="height: 11pt; margin-right: 70px" placeholder="Name">
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
									<input type="text" id="cust_acct_no" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" style="height: 11pt; width: 80px; margin-right: 70px">
								</span>
								<span>
									<label>Credit Limit</label>
									<input type="text" id="credit_limit" value="" style="height: 11pt; width: 80px; margin-right: 70px">
								</span>
								<span>
									<label>Temp Invoice No.</label>
									<input type="text" id="invoice_no" value="<?php echo $_smarty_tpl->tpl_vars['temp_inv_no']->value;?>
" style="height: 11pt; width: 85px; margin-right: 70px">
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
										<?php if (($_smarty_tpl->tpl_vars['items']->value)){?>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
												<tr>
													<td><?php echo $_smarty_tpl->tpl_vars['i']->value['item_code'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
													<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>
</td>
													<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
</td>
													<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['i']->value['amount'];?>
</td>
													<td><a href="#remove<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
												</tr>
											<?php } ?>
											<tr>
												<td></td>
												<td></td>
												<td style="text-align: right; color: black"><strong><?php echo $_smarty_tpl->tpl_vars['total_qty']->value;?>
</strong></td>
												<td style="text-align: right"></td>
												<td style="text-align: right"></td>
												<td></td>
											</tr>
										<?php }else{ ?>
											<tr>
												<td>000000</td>
												<td>--</td>
												<td style="text-align: right">0</td>
												<td style="text-align: right">0.00</td>
												<td style="text-align: right">0.00</td>
												<td>--</td>
											</tr>
										<?php }?>
									</tbody>
								</table>
							</div>
							<div>
								<table style="color: black">
									<tr>
										<td style="width: 620px; vertical-align: top">
											<a href="#add" data-toggle="modal" data-inv_no="<?php echo $_smarty_tpl->tpl_vars['temp_inv_no']->value;?>
">Add Item</a>
											<br><br><br><br>
											<button class="btn btn-primary" type="submit" id="place_inv">Place Invoice</button>
											<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
cashier/invoice/reset?customer=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
&invoice=<?php echo $_smarty_tpl->tpl_vars['temp_inv_no']->value;?>
" class="btn" type="button" id="cancel_inv">Cancel Invoice</button>
										</td>
										<td>
											<table>
												<tr>
													<td style="text-align: right"><strong>Total</strong></td>
													<td style="text-align: right; width: 103px"><strong><?php echo $_smarty_tpl->tpl_vars['total_amt']->value;?>
</strong></td>
												</tr>
												<tr>
													<td style="text-align: right">VAT</td>
													<td style="text-align: right">12%</td>
												</tr>
												<tr>
													<td style="text-align: right">VATable Amt</td>
													<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['vatable_amt']->value;?>
</td>
												</tr><tr>
													<td style="text-align: right">VAT Amt</td>
													<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['vat_amt']->value;?>
</td>
												</tr><tr>
													<td style="text-align: right"><strong>Amt Due</strong></td>
													<td style="text-align: right"><strong><?php echo $_smarty_tpl->tpl_vars['total_amt']->value;?>
</strong></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</div>
						</fieldset>
					</form>
				<?php } ?>
			<?php }?>
		</div>
		<div id="footer">
			<span style="font-size: 11px; color: #b81d1d"><strong>Copyright &copy 2012. All Rights Reserved.</strong></span>
			<br>CSS powered by Twitter Bootstrap
			<br>Kristian Jacob Abad Lora. BS Computer Science 4
			<br>E-mail: kjalora92@yahoo.com | FB: <a href="http://facebook.com/kjhenyo21">kjhenyo21</a> | Twitter: <a href="http://twitter.com/pchan_august">pchan_august</a>
		</div>
	</body>
	
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
	<script>
		$('#due_date').datepicker();
		var today = new Date();
		document.getElementById('date_time').value = today;
	</script>
</html><?php }} ?>