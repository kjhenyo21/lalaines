<!--
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
			{if ($messages)}
				{foreach $messages as $m}
					<div id="remove{$m['id']}" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton{$m['id']}" href="#" data-url="{url}audit_trail/messages/removeMessage?id={$m['id']}&ref={$m['ref']}" onClick="removeMessage({$m['id']}, {$m['ref']}); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
				{/foreach}
			{/if}
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
				{if ($messages)}
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
							{foreach $messages as $m}
								<tr>
									<td style="text-align: center; vertical-align: center">{$m['id']}</td>
									<td style="text-align: center; vertical-align: center">{$m['ref']}</td>
									<td style="text-align: center; vertical-align: center">{$m['name']}</td>
									<td style="text-align: center; vertical-align: center">{$m['contact']}</td>
									<td style="text-align: center; vertical-align: center">{$m['date']}</td>
									<td style="text-align: center; vertical-align: center">{$m['or_no']}</td>
									<td class="amount" style="text-align: right;">{$m['amt']|number_format:2:".":","}</td>
									<td style="text-align: center; vertical-align: center">{$m['date_sent']}</td>
									{if ($m['reply']) == 'yes'}
										<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">{$m['reply']}</td>
									{else if ($m['reply']) == 'no'}
										<td style="text-align: center; color: red; font-weight: bold; vertical-align: center">{$m['reply']}</td>
									{else}
										<td style="text-align: center; vertical-align: center">--</td>
									{/if}
									{if ($m['date_received']) == '0000-00-00 00:00:00'}
										<td style="text-align: center; vertical-align: center">--</td>
									{else}
										<td style="text-align: center; vertical-align: center">{$m['date_received']}</td>
									{/if}
									{if ($m['status']) == 'sent'}
										<td style="text-align: center; font-weight: bold; color: orange; vertical-align: center">{$m['status']}</td>
									{else if ($m['status']) == 'new'}
										<td style="text-align: center; font-weight: bold; color: red; vertical-align: center">{$m['status']}</td>
									{else if ($m['status']) == 'ignored'}
										<td style="text-align: center; font-weight: bold; color: grey; vertical-align: center">{$m['status']}</td>
									{else if ($m['status']) == 'confirmed'}
										<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">{$m['status']}</td>
									{/if}
									{if ($m['date_confirmed']) == '0000-00-00 00:00:00'}
										<td style="text-align: center; vertical-align: center">--</td>
									{else}
										<td style="text-align: center; vertical-align: center">{$m['date_confirmed']}</td>
									{/if}
									<td><a href="#remove{$m['id']}" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
							{/foreach}
						</tbody>
					</table>
				{else}
				<table class="table table-striped">
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
						<th style="text-align: center">Confirmation Status</th>
						<th style="text-align: center">Date Confirmed</th>
						<th></th>
					</thead>
					</table>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><div style="font-style: italic">No message(s) to display.</div> </td>
							</tr>
						</tbody>
					</table>
				{/if}
				<div class="control-group" style="text-align: center; margin-top: 50px;">
					{if ($messages)}
						<a href="#clearModal" type="button" class="btn" data-toggle="modal">Clear Archive</a>
					{else}
						<a type="button" class="btn" disabled="disabled">Clear Archive</a>
					{/if}
					<a href="{url}audit_trail/log_messages" type="button" class="btn btn-primary">View Log File</a>
					<a href="{url}audit_trail" type="button" class="btn">Back</a>
				</div>
			</div>
		</div>
	<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/date-format.js" type="text/javascript"></script>
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
</html>