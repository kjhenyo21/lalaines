<?php /* Smarty version Smarty-3.1.7, created on 2013-03-23 08:17:56
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\log_file.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d55c139abf',
  'variables' => 
  array (
    'contents' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d55c139abf')) {function content_514d55c139abf($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
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
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="messages" style="margin: 0 auto; text-align: center">
				<h2>Messages Log File</h2>
				<br>
				<textarea id="log" style="width: 790px; height: 270px;">
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
				<a href="#clearModal" type="button" class="btn btn-primary" data-toggle="modal">Clear Archive</a>
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/log_messages" type="button" class="btn">View Log File</a>
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail" type="button" class="btn">Back</a>
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