<?php /*%%SmartyHeaderCode:23425514bbe8b4ee512-63566459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b91653a638e633ff6292f96eb2c21875436ac8de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\message.tpl',
      1 => 1364029285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23425514bbe8b4ee512-63566459',
  'cache_lifetime' => 1,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d7404d66aa',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d7404d66aa')) {function content_514d7404d66aa($_smarty_tpl) {?><!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<body onload="JavaScript:refresh(3000);">
		<div id="messages">
		<!-- Modal for Messages-->
																				<div id="ignored-message0" class="modal fade in" style="margin-top: -120px; margin-left: -180px; width: 320px; display: block;" aria-hidden="false">
						<div class="modal-header">
							<div id="close"><a href="#" class="close" onClick="closeMessage(0, 1, 7649); return false;">&times;</a></div>
							<h3 style="color: maroon">Confirmation Message</h3>
						</div>
						<div class="modal-body">
							<div class="input" style="margin: 0 10px">
								<div>Name: Elaine Pahang</div>
								<div>Contact: 9332567821</div>
								<div>Date: 2010-01-04</div>
								<div>OR No: 6259</div>
								<div>Amount: Php 99.5</div>
								<div>Reply: <strong>yes</strong></div>
								<div>Date/Time Received: 2013-03-23 17:20:54</div>
																	<div>Status: <span style="color: red">ignored</span></div>
															</div>
						</div>
						<div class="modal-footer">
							<div style="text-align: center">
								<!--<a href="skype:+63<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined index: contact</p>
<p>Filename: cache/b91653a638e633ff6292f96eb2c21875436ac8de.file.message.tpl.cache.php</p>
<p>Line Number: 84</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: cache/b91653a638e633ff6292f96eb2c21875436ac8de.file.message.tpl.cache.php</p>
<p>Line Number: 84</p>

</div>?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
								<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="confirmMessage(0, 1); return false;">Update Confirmation</a>
								<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeMessage(0, 1, 7649); return false;">Update Later</button>
							</div>
						</div>
					</div>
																			</div>

		<script src="http://localhost/trailblazer/assets/scripts/date-format.js" type="text/javascript"></script>
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
		</script><?php }} ?>