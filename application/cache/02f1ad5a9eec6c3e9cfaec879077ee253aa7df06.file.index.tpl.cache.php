<?php /* Smarty version Smarty-3.1.7, created on 2012-11-01 17:32:41
         compiled from "C:\xampp\htdocs\wadwe\application/views\cashier\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22709509271d839e733-72350617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02f1ad5a9eec6c3e9cfaec879077ee253aa7df06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wadwe\\application/views\\cashier\\index.tpl',
      1 => 1351787359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22709509271d839e733-72350617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_509271d857c9d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509271d857c9d')) {function content_509271d857c9d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\wadwe\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>WADWE Cashier</title>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
	</head>
	
	<body>
		<!-- Modal for Searching Customer for Invoice-->
		<div id="searchCustomerForInvoice" class="modal hide fade" style="margin-top: auto; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Enter Customer</h3>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
cashier/index/searchCustomerInvoice">
					<fieldset>
						<div class="input-append" style="margin: 0 120px">
							<input class="span2" id="cust_acct_no" name="cust_acct_no" type="text" placeholder="Customer Account Number">
							<button class="btn" type="submit" id="add">Enter</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		
		<!-- Modal for Removing an Item -->
		<div id="remove" class="modal hide fade" style="margin-top: auto">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Remove Item</h3>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to remove the item?</p>
			</div>
			<div class="modal-footer">
				<a href="index/addItem.php?item_code=" class="btn">Yes</a>
				<a href="index.php" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
			</div>
		</div>
		
		<!-- Navbar -->
		<div id="banner" class="page-header"></div>
		<div class="navbar navbar-inverse navbar-fixed-top" style="position: relative">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" style="color: white">Cashier No: 0168</a>
				<a class="brand" style="color: white; margin: auto 165px">October 31, 2012  05:30:25 PM</a>
				<a class="brand" href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
cashier" style="color: white; margin-left: 30px; padding-right: 0px">Log out</a>
			</div>
		</div>
		
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center"> Switchboard </h3>
		<div id="main-wrapper" style="width: 300px">
			<div style="margin: 0 auto; text-align: center">
				<a href="#searchCustomerForInvoice" role="button" class="btn" data-toggle="modal" style="width: 190px">Create New Invoice</a>
				<br><a href="#searchCustomerForPayment" role="button" class="btn" data-toggle="modal" style="width: 190px">Enter Customer Payment</a>
			</div>
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