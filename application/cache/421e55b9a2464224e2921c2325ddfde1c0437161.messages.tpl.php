<?php /*%%SmartyHeaderCode:8531514d278d1c33c1-42099301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '421e55b9a2464224e2921c2325ddfde1c0437161' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\messages.tpl',
      1 => 1364030378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8531514d278d1c33c1-42099301',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d740e48ebb',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d740e48ebb')) {function content_514d740e48ebb($_smarty_tpl) {?>  <!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Messages</title>
	</head>
	
	<body>
		<!-- Modal for Removing a Message -->
		<div id="removeModal">
												<div id="remove1" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton1" href="#" data-url="http://localhost/trailblazer/audit_trail/messages/removeMessage?id=1&ref=7649" onClick="removeMessage(1, 7649); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
									</div>
		
		<!-- Modal for Clearing the Archive -->
		<div id="clearModal" class="modal hide fade" style="margin-top: -150px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Clear Archive</h3>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to clear the archive? You can always view the messages in the Messages Log File.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" id="clearButton" onClick="clearIt(); return false;">Yes</a>
				<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
			</div>
		</div>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="messages" style="margin: 0 auto; text-align: center">
				<h2>Messages</h2>
				<br>
									<table id="table" class="table table-hover" style="text-align: left; color: black">
						<thead>
							<th style="text-align: center">ID</th>
							<th style="text-align: center">Ref. #</th>
							<th style="text-align: center">Name</th>
							<th style="text-align: center">Contact</th>
							<th style="text-align: center">Transaction Date</th>
							<th style="text-align: center">OR #</th>
							<th style="text-align: center">Amount (Php)</th>
							<th style="text-align: center">Date Sent</th>
							<th style="text-align: center">Reply</th>
							<th style="text-align: center">Date Received</th>
							<th style="text-align: center">Status</th>
							<th style="text-align: center">Date Confirmed</th>
							<th></th>
						</thead>
						<tbody>			
															<tr>
									<td style="text-align: center; vertical-align: center">1</td>
									<td style="text-align: center; vertical-align: center">7649</td>
									<td style="text-align: center; vertical-align: center">Elaine Pahang</td>
									<td style="text-align: center; vertical-align: center">9332567821</td>
									<td style="text-align: center; vertical-align: center">2010-01-04</td>
									<td style="text-align: center; vertical-align: center">6259</td>
									<td class="amount" style="text-align: right;">99.50</td>
									<td style="text-align: center; vertical-align: center">2013-03-23 17:20:20</td>
																			<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">yes</td>
																												<td style="text-align: center; vertical-align: center">2013-03-23 17:20:54</td>
																												<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">confirmed</td>
																												<td style="text-align: center; vertical-align: center">2013-03-23 17:21:13</td>
																		<td><a href="#remove1" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
													</tbody>
					</table>
								<div class="control-group" style="text-align: center; margin-top: 50px;">
											<a href="#clearModal" type="button" class="btn" data-toggle="modal">Clear Archive</a>
										<a href="http://localhost/trailblazer/audit_trail/log_messages" type="button" class="btn btn-primary">View Log File</a>
					<a href="http://localhost/trailblazer/audit_trail" type="button" class="btn">Back</a>
				</div>
			</div>
		</div>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/date-format.js" type="text/javascript"></script>
	<script>
		var now = new Date();
		var today = dateFormat(now, 'yyyy-mm-dd H:MM:ss');
		function removeMessage(id, ref) {
			$.ajax({
				url: 'messages/removeMessage?id=' + id,
				type: "GET",
				success: function() {
					$('#remove'+ id).modal('hide');
					$('#messages').load('message_items');
				}
			});
			
			$.ajax({
				url: 'log_messages/writeToLog?data=' + today + ' deleted message with Ref. No. ' + ref,
				type: "GET",
				success: function() {
				}
			});
		}
		
		function clearIt() {
			$.ajax({
				url: 'messages/clear',
				type: "GET",
				success: function() {
					$('#clearModal').modal('hide');
					$('#messages').load('message_items');
				}
			});
			
			$.ajax({
				url: 'log_messages/writeToLog?data=' + today + ' cleared messages archive',
				type: "GET",
				success: function() {
				}
			});
		}
	</script>
</html><?php }} ?>