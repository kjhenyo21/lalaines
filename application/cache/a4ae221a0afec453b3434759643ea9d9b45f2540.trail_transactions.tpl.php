<?php /*%%SmartyHeaderCode:19596514877de33d178-33889167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4ae221a0afec453b3434759643ea9d9b45f2540' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_transactions.tpl',
      1 => 1363956758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19596514877de33d178-33889167',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d7404cf230',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d7404cf230')) {function content_514d7404cf230($_smarty_tpl) {?>  <!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Trailing the Transactions</title>
	</head>
	
	<body>
		<div id="transDetailsModal">
		</div>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 900px">
			<div style="margin: 0 auto; text-align: center">
				<h2>Sale Transactions</h2>
				<br>
				<table id="table" class="table table-hover" style="text-align: left; color: black">
					<thead>
																					<th style="text-align: center">Date</th>
															<th style="text-align: center">OR No</th>
															<th style="text-align: center">Amount Due</th>
															<th style="text-align: center">VAT Amount</th>
															<th style="text-align: center">Customer Name</th>
															<th style="text-align: center">Customer Address</th>
															<th style="text-align: center">Customer Contact
</th>
																			<th></th>
						<th></th>
					</thead>
					<tbody>
																																												<tr>
										<td style="text-align: center; vertical-align: center">2010-01-06</td>
										<td style="text-align: center; vertical-align: center"><a href="#trans-details6264" data-toggle="modal" onClick="getDetails('or_no=6264&amt=5.00&name=Karl Arevalo&address=Manila&contact=9332567821'); return false;">6264</a></td>
										<td class="amount" style="text-align: right;">Php 5.00</td>
										<td style="text-align: center; vertical-align: center">Karl Arevalo</td>
										<td style="text-align: center; vertical-align: center">Manila</td>
										<td style="text-align: center; vertical-align: center">9332567821</td>
										<td style="text-align: center; vertical-align: center; width: 30px"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6264&acct=Sales&fs=Income Statement&ledger=General Ledger&journal=Cash Receipts Journal&trans=Sale Transactions">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center; width: 30px"><a>System Audit</a></td>
									</tr>
																																																<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;">2010-01-04</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details6258" data-toggle="modal" onClick="getDetails('or_no=6258&amt=61.50&name=&address=&contact='); return false;">6258</a></td>
										<td class="amount" style="text-align: right;">61.50</td>
										<td style="text-align: center; vertical-align: center;"></td>
										<td style="text-align: center; vertical-align: center;"></td>
										<td style="text-align: center; vertical-align: center;"></td>
										<td style="text-align: center; vertical-align: center;"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6258&acct=Sales&fs=Income Statement&ledger=General Ledger&journal=Cash Receipts Journal&trans=Sale Transactions">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>
									</tr>
																																																<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;">2010-01-04</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details6257" data-toggle="modal" onClick="getDetails('or_no=6257&amt=131.50&name=Justine Balan&address=&contact=9332567821'); return false;">6257</a></td>
										<td class="amount" style="text-align: right;">131.50</td>
										<td style="text-align: center; vertical-align: center;">Justine Balan</td>
										<td style="text-align: center; vertical-align: center;"></td>
										<td style="text-align: center; vertical-align: center;">9332567821</td>
										<td style="text-align: center; vertical-align: center;"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6257&acct=Sales&fs=Income Statement&ledger=General Ledger&journal=Cash Receipts Journal&trans=Sale Transactions">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>
									</tr>
																																																<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;">2010-01-02</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details6253" data-toggle="modal" onClick="getDetails('or_no=6253&amt=997.50&name=Mary Ann Polinar&address=Lahug. Cebu City&contact=9158342099'); return false;">6253</a></td>
										<td class="amount" style="text-align: right;">997.50</td>
										<td style="text-align: center; vertical-align: center;">Mary Ann Polinar</td>
										<td style="text-align: center; vertical-align: center;">Lahug. Cebu City</td>
										<td style="text-align: center; vertical-align: center;">9158342099</td>
										<td style="text-align: center; vertical-align: center;"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6253&acct=Sales&fs=Income Statement&ledger=General Ledger&journal=Cash Receipts Journal&trans=Sale Transactions">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>
									</tr>
																																																<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;">2010-01-04</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details6256" data-toggle="modal" onClick="getDetails('or_no=6256&amt=210.00&name=Eriberta Canada&address=Carcar&contact=9053171598'); return false;">6256</a></td>
										<td class="amount" style="text-align: right;">210.00</td>
										<td style="text-align: center; vertical-align: center;">Eriberta Canada</td>
										<td style="text-align: center; vertical-align: center;">Carcar</td>
										<td style="text-align: center; vertical-align: center;">9053171598</td>
										<td style="text-align: center; vertical-align: center;"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6256&acct=Sales&fs=Income Statement&ledger=General Ledger&journal=Cash Receipts Journal&trans=Sale Transactions">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>
									</tr>
																																																<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;">2010-01-06</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details6261" data-toggle="modal" onClick="getDetails('or_no=6261&amt=513.00&name=Kirby Taghoy&address=&contact=9332567821'); return false;">6261</a></td>
										<td class="amount" style="text-align: right;">513.00</td>
										<td style="text-align: center; vertical-align: center;">Kirby Taghoy</td>
										<td style="text-align: center; vertical-align: center;"></td>
										<td style="text-align: center; vertical-align: center;">9332567821</td>
										<td style="text-align: center; vertical-align: center;"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6261&acct=Sales&fs=Income Statement&ledger=General Ledger&journal=Cash Receipts Journal&trans=Sale Transactions">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>
									</tr>
																																																<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;">2010-01-06</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details6262" data-toggle="modal" onClick="getDetails('or_no=6262&amt=180.00&name=Demelo Lao&address=&contact=9994406820'); return false;">6262</a></td>
										<td class="amount" style="text-align: right;">180.00</td>
										<td style="text-align: center; vertical-align: center;">Demelo Lao</td>
										<td style="text-align: center; vertical-align: center;"></td>
										<td style="text-align: center; vertical-align: center;">9994406820</td>
										<td style="text-align: center; vertical-align: center;"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6262&acct=Sales&fs=Income Statement&ledger=General Ledger&journal=Cash Receipts Journal&trans=Sale Transactions">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>
									</tr>
																																																<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;">2010-01-04</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details6260" data-toggle="modal" onClick="getDetails('or_no=6260&amt=86.50&name=&address=&contact='); return false;">6260</a></td>
										<td class="amount" style="text-align: right;">86.50</td>
										<td style="text-align: center; vertical-align: center;"></td>
										<td style="text-align: center; vertical-align: center;"></td>
										<td style="text-align: center; vertical-align: center;"></td>
										<td style="text-align: center; vertical-align: center;"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6260&acct=Sales&fs=Income Statement&ledger=General Ledger&journal=Cash Receipts Journal&trans=Sale Transactions">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>
									</tr>
																																																<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;">2010-01-04</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details6259" data-toggle="modal" onClick="getDetails('or_no=6259&amt=99.50&name=Elaine Pahang&address=Talisay City&contact=9332567821'); return false;">6259</a></td>
										<td class="amount" style="text-align: right;">99.50</td>
										<td style="text-align: center; vertical-align: center;">Elaine Pahang</td>
										<td style="text-align: center; vertical-align: center;">Talisay City</td>
										<td style="text-align: center; vertical-align: center;">9332567821</td>
										<td style="text-align: center; vertical-align: center;"><a href="http://localhost/trailblazer/audit_trail/summary?ref=ST-1-2010&or_no=6259&acct=Sales&fs=Income Statement&ledger=General Ledger&journal=Cash Receipts Journal&trans=Sale Transactions">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>
									</tr>
																																		</tbody>
				</table>
				<div id="source-file">Source File: D:\Kristian Lora\My Documents\Lalaine's Bookstore\transaction_files\sale_transactions\st-1-2010.tf</div>
			</div>
		</div>
	
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script>
		function getDetails(url) {	
			url = url.replace(/\s/g,"%20");
			console.log(url);
			$('#transDetailsModal').load('load_trans_details/index?' + url);
			$('#trans-details').modal('show');
			$('body').append("<div id='backdrop' class='modal-backdrop fade in'></div>");
		}
		
		function closeIt() {
			$('#trans-details').remove();
			$('#backdrop').remove();
		}
		
		function textIt(name, contact_no, date, or_no, amt_due) {
			var ref = Math.floor(Math.random() * 9000) + 1000;
			var message = "Good day, " + name + "! This is Trailblazer - an automated accounting audit trail. We would just like you to confirm if you have made a transaction with Lalaine's Bookstore amounting to Php" + amt_due + " last " + date + " with OR No: " + or_no + ". Please reply TRAIL<space><Ref No><space><Yes or No> to this number. Your Ref No is " + ref + ". We will be waiting for your reply. Help us fight agaist fraud!";
			$.ajax({
				url: 'http://localhost:8011/send/sms/0' + contact_no + '/' + message + '/',
				type: "GET",
				dataType: "text",
				async: false,
				success: function() {
				},
				error: function(data, status, error){
					alert('Message sent!');
					//if (data.readyState == 4) 
					//	alert('Message sent!');
					//else if (data.readyState == 0) 
					//	alert('Message sending failed! Make sure that your GSM modem is properly inserted to your PC and/or that you have opened FrontlineSMS.');
				}
			});
			$.ajax({
				url: 'index/textPerson?ref=' + ref + '&name=' + name + '&contact=' + contact_no + '&date=' + date + '&or_no=' + or_no + '&amt=' + amt_due,
				type: "GET",
				async: false
			});
		}
	</script>
</html><?php }} ?>