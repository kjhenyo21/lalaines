<?php /*%%SmartyHeaderCode:23719514d55c10cddd4-42942766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5cb5e11f97345af6e1738d6b92aafaae6c00489' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\log_file.tpl',
      1 => 1364023072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23719514d55c10cddd4-42942766',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d574e43099',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d574e43099')) {function content_514d574e43099($_smarty_tpl) {?>  <!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Messages Log File</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="messages" style="margin: 0 auto; text-align: center">
				<h2>Messages Log File</h2>
				<br>
				<textarea id="log" style="width: 790px; height: 270px;">
											2013-03-23 13:38:49 kjhenyo sent a confirmation message to Demelo Lao at 9994406820 with Ref. #8975 on Transaction #8975 amounting to P180.00

											2013-03-23 13:38:49 Demelo Lao replied yes on Ref. #8975

											2013-03-23 13:38:49 kjhenyo ignored message with Ref. #8975

											2013-03-23 13:38:49 kjhenyo confirmed message with Ref. #8975

											2013-03-23 13:38:49 kjhenyo cleared message archive
									</textarea>
			</div>
			<div class="control-group" style="text-align: center; margin-top: 50px;">
				<a href="#clearModal" type="button" class="btn btn-primary" data-toggle="modal">Clear Archive</a>
				<a href="http://localhost/trailblazer/audit_trail/log_messages" type="button" class="btn">View Log File</a>
				<a href="http://localhost/trailblazer/audit_trail" type="button" class="btn">Back</a>
			</div>
		</div>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script>
		function removeMessage(id) {
			$.ajax({
				url: 'messages/removeMessage?id=' + id,
				type: "GET",
				success: function() {
					$('#remove'+ id).modal('hide');
					$('#messages').load('message_items');
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
		}
	</script>
</html><?php }} ?>