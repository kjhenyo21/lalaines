<?php /*%%SmartyHeaderCode:2111351486ec38c4a67-69946801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91ea2b083373c263b623ba8923fe200d7ccdee4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_fs.tpl',
      1 => 1363942447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2111351486ec38c4a67-69946801',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d762120a55',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d762120a55')) {function content_514d762120a55($_smarty_tpl) {?>  <!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Financial Statement</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div style="margin: 0 auto; text-align: center">
				<h2>Income Statement</h2>
				<div id="date-heading">As of January 2010</div>
				<div style="margin-bottom: 20px; font-style: italic">In Philippine Peso</div>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th></th>
						<th></th>
						<th></th>
					</thead>
					<tbody>
																																													<tr>
										<td style="font-style: italic">Revenue:</td>
									</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=Sales&month=1&year=2010&fs=Income Statement">Sales</a></td>
																				
											<td></td>
											<td class="amount">2,656.00</td>										
																			</tr>
																																<tr style="font-weight: bold">
										<td>Total Revenue</td>
										<td></td>
										<td class="amount">2,656.00</td>
									</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?acct=&month=1&year=2010&fs=Income Statement"></a></td>
																			</tr>
																																									<tr style="height: 10px"></tr>
									<tr>
										<td style="font-style: italic">Less: Expenses:</td>
									</tr>
																																<tr style="height: 10px"></tr>
									<tr style="font-weight: bold">
										<td>Net Income</td>
										<td></td>
										<td class="amount">2,656.00</td>
									</tr>
																										</tbody>
				</table>
				<div id="source-file">Source File: D:\Kristian Lora\My Documents\Lalaine's Bookstore\financial_statements\income_statements\is-1-2010.is</div>
			</div>
		</div>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script>
		
	</script>
</html><?php }} ?>