<?php /* Smarty version Smarty-3.1.7, created on 2013-02-13 08:33:14
         compiled from "C:\xampp\htdocs\lalaines\application/views\audit_trail\trail_ag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10626511b350a14b8c8-27938609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a116ab7649a50996fe4169966ba88547eec974d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\audit_trail\\trail_ag.tpl',
      1 => 1360740758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10626511b350a14b8c8-27938609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511b350a306d2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511b350a306d2')) {function content_511b350a306d2($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\lalaines\\application\\libraries\\smarty\\plugins\\function.url.php';
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
		<div id="audit_trail" class="modal hide fade" style="margin-top: auto; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Load File</h3>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
cashier/index/searchCustomerInvoice">
					<fieldset>
						<div class="input" style="margin: 0 120px">
							<input class="span3" id="file_path" name="file_path" type="file" placeholder="File directory">
						</div>
						<br>
						<div style="margin: 0 156px">
							<button class="btn btn-small btn-primary" type="submit" id="add">Load File</button>
							<button class="btn btn-small" data-dismiss="modal" id="close">Cancel</button> </div>
					</fieldset>
				</form>
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
				<h2>Ledger By Account Group</h2>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th>Account</th>
						<th>Debit</th>
						<th>Credit</th>
					</thead>
					<tbody>
						<tr>
							<td><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/trail_ledger/index?acc_no=8&from=1-10-12&to=12-10-12">Sales</a></td>
							<td></td>
							<td>7850.00</td>
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