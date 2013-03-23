<?php /*%%SmartyHeaderCode:3081251472b2eeab6a3-16636473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d90791c062aaba7ddce00e7e002e68c7f9dfbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_fr.tpl',
      1 => 1363686011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3081251472b2eeab6a3-16636473',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514850990055b',
  'variables' => 
  array (
    'fr_kind' => 0,
    'date' => 0,
    'info' => 0,
    'i' => 0,
    'month' => 0,
    'year' => 0,
    'column' => 0,
    'error_msg' => 0,
    'source' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514850990055b')) {function content_514850990055b($_smarty_tpl) {?><!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Financial Report</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div style="margin: 0 auto; text-align: center">
				<h2>Income Statement</h2>
				<div id="date-heading">As of January 2010</div>
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
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?account=Sales&month=1&year=2010">Sales</a></td>
																				
											<td></td>
											<td class="amount">3133.50</td>										
																			</tr>
																																<tr style="font-weight: bold">
										<td>Total Revenue</td>
										<td></td>
										<td class="amount">3133.50</td>
									</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?account=&month=1&year=2010"></a></td>
																				
											<td></td>
											<td class="amount"></td>										
																			</tr>
																																									<tr style="height: 10px"></tr>
									<tr>
										<td style="font-style: italic">Less: Expenses:</td>
									</tr>
																																<tr>
										<td><a href="http://localhost/trailblazer/audit_trail/trail_ledger?account=Freight-in&month=1&year=2010">Freight-in</a></td>
																					<td class="amount">600.00</td>
											<td></td>										
																			</tr>
																																<tr style="font-weight: bold">
										<td>Total Expenses</td>
										<td></td>
										<td class="amount">600.00</td>
									</tr>
																																<tr style="height: 10px"></tr>
									<tr style="font-weight: bold">
										<td>Net Income</td>
										<td></td>
										<td class="amount">2533.50</td>
									</tr>
																										</tbody>
				</table>
				<div id="source-file">Source File: D:\Kristian Lora\My Documents\Lalaine's Bookstore\reports\income_statements\is-1-2010.is</div>
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