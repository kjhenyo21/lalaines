<?php /* Smarty version Smarty-3.1.7, created on 2013-03-23 10:19:40
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\messages.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d278d72447',
  'variables' => 
  array (
    'messages' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d278d72447')) {function content_514d278d72447($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
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
			<?php if (($_smarty_tpl->tpl_vars['messages']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
					<div id="remove<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" class="modal hide fade" style="margin-top: -150px">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Remove Message</h3>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to remove the message from the archive? You can always view it later in the Messages Log File.</p>
						</div>
						<div class="modal-footer">
							<a class="btn" id="removeButton<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" href="#" data-url="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/messages/removeMessage?id=<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['m']->value['ref'];?>
" onClick="removeMessage(<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['m']->value['ref'];?>
); return false;">Yes</a>
							<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
						</div>
					</div>
				<?php } ?>
			<?php }?>
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
				<?php if (($_smarty_tpl->tpl_vars['messages']->value)){?>
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
							<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
								<tr>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['ref'];?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['contact'];?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['date'];?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['or_no'];?>
</td>
									<td class="amount" style="text-align: right;"><?php echo number_format($_smarty_tpl->tpl_vars['m']->value['amt'],2,".",",");?>
</td>
									<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['date_sent'];?>
</td>
									<?php if (($_smarty_tpl->tpl_vars['m']->value['reply'])=='yes'){?>
										<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['reply'];?>
</td>
									<?php }elseif(($_smarty_tpl->tpl_vars['m']->value['reply'])=='no'){?>
										<td style="text-align: center; color: red; font-weight: bold; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['reply'];?>
</td>
									<?php }else{ ?>
										<td style="text-align: center; vertical-align: center">--</td>
									<?php }?>
									<?php if (($_smarty_tpl->tpl_vars['m']->value['date_received'])=='0000-00-00 00:00:00'){?>
										<td style="text-align: center; vertical-align: center">--</td>
									<?php }else{ ?>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['date_received'];?>
</td>
									<?php }?>
									<?php if (($_smarty_tpl->tpl_vars['m']->value['status'])=='sent'){?>
										<td style="text-align: center; font-weight: bold; color: orange; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['status'];?>
</td>
									<?php }elseif(($_smarty_tpl->tpl_vars['m']->value['status'])=='new'){?>
										<td style="text-align: center; font-weight: bold; color: red; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['status'];?>
</td>
									<?php }elseif(($_smarty_tpl->tpl_vars['m']->value['status'])=='ignored'){?>
										<td style="text-align: center; font-weight: bold; color: grey; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['status'];?>
</td>
									<?php }elseif(($_smarty_tpl->tpl_vars['m']->value['status'])=='confirmed'){?>
										<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['status'];?>
</td>
									<?php }?>
									<?php if (($_smarty_tpl->tpl_vars['m']->value['date_confirmed'])=='0000-00-00 00:00:00'){?>
										<td style="text-align: center; vertical-align: center">--</td>
									<?php }else{ ?>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['date_confirmed'];?>
</td>
									<?php }?>
									<td><a href="#remove<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				<?php }else{ ?>
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
				<?php }?>
				<div class="control-group" style="text-align: center; margin-top: 50px;">
					<?php if (($_smarty_tpl->tpl_vars['messages']->value)){?>
						<a href="#clearModal" type="button" class="btn" data-toggle="modal">Clear Archive</a>
					<?php }else{ ?>
						<a type="button" class="btn" disabled="disabled">Clear Archive</a>
					<?php }?>
					<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/log_messages" type="button" class="btn btn-primary">View Log File</a>
					<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail" type="button" class="btn">Back</a>
				</div>
			</div>
		</div>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/date-format.js" type="text/javascript"></script>
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