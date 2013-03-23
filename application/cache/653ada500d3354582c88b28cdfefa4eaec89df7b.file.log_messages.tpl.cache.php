<?php /* Smarty version Smarty-3.1.7, created on 2013-03-23 09:00:57
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\log_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31066514d587c503a50-23323811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '653ada500d3354582c88b28cdfefa4eaec89df7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\log_messages.tpl',
      1 => 1364024920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31066514d587c503a50-23323811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d587c74f82',
  'variables' => 
  array (
    'contents' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d587c74f82')) {function content_514d587c74f82($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
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
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/log_messages/clearLog" class="btn" id="clearButton">Yes</a>
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
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
						<?php echo $_smarty_tpl->tpl_vars['c']->value;?>

					<?php } ?>
				</textarea>
			</div>
			<div class="control-group" style="text-align: center; margin-top: 50px;">
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/log_messages/saveLog" type="button" class="btn btn-primary">Save Log File</a>
				<a href="#clearModal" type="button" class="btn" data-toggle="modal">Clear Log File</a>
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail" type="button" class="btn">Back</a>
			</div>
		</div>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.min.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet"></link>
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
</html><?php }} ?>