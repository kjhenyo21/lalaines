<!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<body onload="JavaScript:refresh(3000);">
		<div id="messages">
		<!-- Modal for Messages-->
			{if ($messages)}
				{$noOfMessages = 0}
				{$row = 0}
				{foreach $messages as $m}
					<div id="ignored-message{$row}" class="modal fade in" style="margin-top: -120px; margin-left: -180px; width: 320px; display: block;" aria-hidden="false">
						<div class="modal-header">
							<div id="close"><a href="#" class="close" onClick="closeMessage({$row}, {$m['id']}, {$m['ref']}); return false;">&times;</a></div>
							<h3 style="color: maroon">Confirmation Message</h3>
						</div>
						<div class="modal-body">
							<div class="input" style="margin: 0 10px">
								<div>Name: {$m['name']}</div>
								<div>Contact: {$m['contact']}</div>
								<div>Date: {$m['date']}</div>
								<div>OR No: {$m['or_no']}</div>
								<div>Amount: Php {$m['amt']}</div>
								<div>Reply: <strong>{$m['reply']}</strong></div>
								<div>Date/Time Received: {$m['date_received']}</div>
								{if ($m['status'] == 'new')}
									{$noOfMessages = $noOfMessages - 1}
									<div>Status: <span style="color: red"><strong>New!</strong></span></div>
								{else}
									<div>Status: <span style="color: red">{$m['status']}</span></div>
								{/if}
							</div>
						</div>
						<div class="modal-footer">
							<div style="text-align: center">
								<!--<a href="skype:+63{$contact}?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
								<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="confirmMessage({$row}, {$m['id']}); return false;">Update Confirmation</a>
								<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeMessage({$row}, {$m['id']}, {$m['ref']}); return false;">Update Later</button>
							</div>
						</div>
					</div>
					{$noOfMessages = $noOfMessages + 1}
					{$row = $row + 1}
				{/foreach}
			{/if}
		</div>

		<script src="{url}assets/scripts/date-format.js" type="text/javascript"></script>
		<script>
			var now = new Date();
			var today = dateFormat(now, 'yyyy-mm-dd H:MM:ss');
			var no = 0;
			var row = 0;
			var rowLeft = 0;
			var ignored = true;
			$('#ignored-message0').focus();
			
			function refresh(timeoutPeriod) {
				var time = timeoutPeriod;
				$.ajax({
					type: "GET",
					url : 'index/checkNewMessages',
					dataType: "json",
					success: function(data){
						console.log('data: '+data.latest_count);
						
						no = data.latest_count;
						console.log('current: '+no);
						row = data.all;
						rowLeft = data.all;
						
						if (data.latest_count != 0) {
							//alert('hey');
							//setTimeout("location.reload(true);",3600000);
							$('#messages').load('ignored_messages');
							$('body').append('<div id="messages"></div>');	
								for (i=0; i < data.all; i++) {
									//show
									$('#ignored-message' + i).removeClass('hide');
									$('#ignored-message' + i).addClass('in');
								}
						} else {
							if (ignored) {
								//$('body').append('<div id="backdropping" class="modal-backdrop fade in"></div> ');	
								for (i=0; i < row; i++) {
									//show
									$('#ignored-message' + i).removeClass('hide');
									$('#ignored-message' + i).addClass('in');
								}
							}
						}
						
					}
				});
				setTimeout("refresh(10000)",timeoutPeriod);
			}
			
			function confirmMessage(id, ref) {
				rowLeft = rowLeft - 1;
				console.log(rowLeft);
				$.ajax({
					type: "GET",
					url : 'index/confirmMessage?id=' + ref
				});
				
				if (rowLeft == 0) {
					//$('#backdropping').remove();
					ignored = false;
					$('#ignored-message' + id).removeClass('in');
					$('#ignored-message' + id).addClass('hide');
				} else {
					ignored = false;
					$('#ignored-message' + id).removeClass('in');
					$('#ignored-message' + id).addClass('hide');
				}
			}
			
			function closeMessage(id, ref, no) {
				//rowLeft = rowLeft - 1;
				//console.log(rowLeft);
				$.ajax({
					type: "GET",
					url : 'index/ignoreMessage?id=' + ref
				});
				
				$.ajax({
					url: 'log_messages/writeToLog?data=' + today + ' ignored message with Ref. No. ' + no,
					type: "GET",
					success: function() {
					}
				});
				
				//if (rowLeft == 0) {
					//$('#backdropping').remove();
				//	ignored = false;
				//	$('#ignored-message' + id).removeClass('in');
				//	$('#ignored-message' + id).addClass('hide');
				//} else {
					ignored = false;
					$('#ignored-message' + id).removeClass('in');
					$('#ignored-message' + id).addClass('hide');
					$('#ignored-message' + id).remove();
				//}
			}
		</script>