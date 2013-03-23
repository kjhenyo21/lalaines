<!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Messages Log File</title>
	</head>
	
	<body>
		<!-- Modal for Clearing Log File -->
		<div id="clearModal" class="modal hide fade" style="margin-top: -150px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Clear Archive</h3>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to clear the log file?</p>
			</div>
			<div class="modal-footer">
				<a href="{url}audit_trail/log_messages/clearLog" class="btn" id="clearButton">Yes</a>
				<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
			</div>
		</div>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="messages" style="margin: 0 auto; text-align: center">
				<h2>Messages Log File</h2>
				<br>
				<textarea id="log" style="width: 790px; height: 270px;" readonly="readonly">
					{foreach $contents as $c}
						{$c}
					{/foreach}
				</textarea>
			</div>
			<div class="control-group" style="text-align: center; margin-top: 50px;">
				<a href="{url}audit_trail/log_messages/saveLog" type="button" class="btn btn-primary">Save Log File</a>
				<a href="#clearModal" type="button" class="btn" data-toggle="modal">Clear Log File</a>
				<a href="{url}audit_trail" type="button" class="btn">Back</a>
			</div>
		</div>
	<link href="{url}assets/stylesheets/bootstrap.min.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script>
		function clearIt() {
			$.ajax({
				url: 'messages/clear',
				type: "GET",
				success: function() {
					$('#clearModal').modal('hide');
					$('#messages').load('message_items');
				}
			});
		}
	</script>
</html>