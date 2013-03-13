<?php /* Smarty version Smarty-3.1.7, created on 2013-03-13 06:02:54
         compiled from "C:\xampp\htdocs\lalaines\application/views\audit_trail\trail_transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13566511b3da291b413-88868100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac20e349cc591c8ff7ab746a49fd1ebef7646930' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\audit_trail\\trail_transactions.tpl',
      1 => 1360897779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13566511b3da291b413-88868100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511b3da2b02d8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511b3da2b02d8')) {function content_511b3da2b02d8($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\lalaines\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Lalaine's Bookstore - Home</title>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
	</head>
	
	<body>
		<!-- Modal for Loading a File for Audit Trail-->
		<div id="transaction" class="modal hide fade" style="margin-top: auto; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Transaction Details</h3>
			</div>
			<div class="modal-body">
				<div class="input" style="margin: 0 10px">
					<table id="table" style="text-align: left; color: black">
						<tbody>
							<tr>
								<td>Name:</td>
								<td style="margin-right: 20px">Jinggay Canada</td>
								<td>Contact No:</td>
								<td>09164342892</td>
							</tr>
						</tbody>	
					</table>
					Items
					<table id="table" style="text-align: left; color: black">
						<thead>
							<th>Item</th>
							<th>Quantity</th>
							<th>Unit Price</th>
							<th>Subtotal</th>
						</thead>
						<tbody>
							<tr>
								<td>Mongol Pencil</td>
								<td>2</td>
								<td>6.00</td>
								<td>12.00</td>
							</tr>
						</tbody>	
					</table>
				</div>
				<br>
				<div style="margin: 0 156px">
					<button class="btn btn-small btn-primary" type="submit" id="add">Contact Person</button>
					<button class="btn btn-small" data-dismiss="modal" id="close">Cancel</button>
				</div>
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
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div style="margin: 0 auto; text-align: center">
				<h2>GL Transactions</h2>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th>Date</th>
						<th>OR Number</th>
						<th>Debit</th>
						<th>Credit</th>
					</thead>
					<tbody>
						<tr>
							<td>January 2</td>
							<td><a href="#transaction" data-toggle="modal" style="width: 390px">018423500</a></td>
							<td></td>
							<td>25.00</td>
						</tr>
						<tr>
							<td>January 2</td>
							<td><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/index/transaction?or=018423501">018423501</a></td>
							<td></td>
							<td>54.00</td>
						</tr>
						<tr>
							<td>January 2</td>
							<td><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/index/transaction?or=018423502">018423502</a></td>
							<td></td>
							<td>32.25</td>
						</tr>
						<tr>
							<td>January 2</td>
							<td><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/index/transaction?or=018423503">018423503</a></td>
							<td></td>
							<td>23.76</td>
						</tr>
						<tr>
							<td>January 2</td>
							<td><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/index/transaction?or=018423504">018423504</a></td>
							<td></td>
							<td>43.76</td>
						</tr>

					</tbody>
				</table>
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
		
		$('#file_path').click(function() {
			$('input[type=file]').click();
		});
	</script>
</html><?php }} ?>