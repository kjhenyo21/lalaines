<?php /* Smarty version Smarty-3.1.7, created on 2013-03-22 03:10:17
         compiled from "C:\xampp\htdocs\trailblazer\application/views\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25174514b0218c86929-62908620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4732c3fb965427a8ffb2f5ff091a058a56e7b2d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\test.tpl',
      1 => 1363918101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25174514b0218c86929-62908620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514b021925528',
  'variables' => 
  array (
    'messages' => 0,
    'noOfMessages' => 0,
    'm' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514b021925528')) {function content_514b021925528($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Home</title>
	</head>
	<body onload="JavaScript:refresh(3000);">
		<!-- Modal for Loading Transaction Details-->
		<?php if (($_smarty_tpl->tpl_vars['messages']->value)){?>
			<?php $_smarty_tpl->tpl_vars['noOfMessages'] = new Smarty_variable(0, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
				<div id="ignored-message<?php echo $_smarty_tpl->tpl_vars['noOfMessages']->value;?>
" class="modal hide fade" style="margin-top: -120px; width: 320px; display: block;" aria-hidden="false">
					<div class="modal-header">
						<div id="close"><a href="#" class="close" onClick="closeMessage(<?php echo $_smarty_tpl->tpl_vars['noOfMessages']->value;?>
); return false;">&times;</a></div>
						<h3 style="color: maroon">Confirmation Message Received!</h3>
					</div>
					<div class="modal-body">
						<div class="input" style="margin: 0 10px">
							<div>Name: <?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
</div>
							<div>Contact: <?php echo $_smarty_tpl->tpl_vars['m']->value['contact'];?>
</div>
							<div>Date: <?php echo $_smarty_tpl->tpl_vars['m']->value['date'];?>
</div>
							<div>OR No: <?php echo $_smarty_tpl->tpl_vars['m']->value['or_no'];?>
</div>
							<div>Amount: Php <?php echo $_smarty_tpl->tpl_vars['m']->value['amt'];?>
</div>
							<div>Reply: <?php echo $_smarty_tpl->tpl_vars['m']->value['reply'];?>
</div>
							<div style="color: red">Status: <?php echo $_smarty_tpl->tpl_vars['m']->value['status'];?>
</div>
						</div>
					</div>
					<div class="modal-footer">
						<div style="text-align: center">
							<!--<a href="skype:+63<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
							<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="textIt(); return false;">Update Confirmation</a>
							<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeMessage(<?php echo $_smarty_tpl->tpl_vars['noOfMessages']->value;?>
); return false;">Update Later</button>
						</div>
					</div>
				</div>
				<?php $_smarty_tpl->tpl_vars['noOfMessages'] = new Smarty_variable($_smarty_tpl->tpl_vars['noOfMessages']->value+1, null, 0);?>
			<?php } ?>
		<?php }?>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/forms.css" rel="stylesheet"></link>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script>
			var no = <?php echo $_smarty_tpl->tpl_vars['noOfMessages']->value;?>
;
			function refresh(timeoutPeriod) {
				var time = timeoutPeriod;
							
				$.ajax({
					type: "GET",
					url : 'checkIgnoredAndNewMessages?no=' + no,
					dataType: "json",
					success: function(data){
						if (data.latest_count != no) {
							console.log('data: '+data.latest_count);
							console.log('current: '+no);
							for (i=0; i < no; i++) {
								$('#ignored-message' + i).removeClass('hide');
								$('#ignored-message' + i).addClass('in');
							}
							
						}
						
					}
				});
				setTimeout("refresh(30000)",timeoutPeriod);
			}
			
			function closeMessage(id) {
				if (id == 0)
					location.reload(true);
				else {
					$('#ignored-message' + id).removeClass('in');
					$('#ignored-message' + id).addClass('hide');
				}
			}
		</script><?php }} ?>