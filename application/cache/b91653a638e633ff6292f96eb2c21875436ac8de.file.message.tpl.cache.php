<?php /* Smarty version Smarty-3.1.7, created on 2013-03-23 10:01:27
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\message.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'cache_lifetime' => 1,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514bbe8b7a2df',
  'variables' => 
  array (
    'messages' => 0,
    'row' => 0,
    'm' => 0,
    'noOfMessages' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514bbe8b7a2df')) {function content_514bbe8b7a2df($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<body onload="JavaScript:refresh(3000);">
		<div id="messages">
		<!-- Modal for Messages-->
			<?php if (($_smarty_tpl->tpl_vars['messages']->value)){?>
				<?php $_smarty_tpl->tpl_vars['noOfMessages'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable(0, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
					<div id="ignored-message<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="modal fade in" style="margin-top: -120px; margin-left: -180px; width: 320px; display: block;" aria-hidden="false">
						<div class="modal-header">
							<div id="close"><a href="#" class="close" onClick="closeMessage(<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['m']->value['ref'];?>
); return false;">&times;</a></div>
							<h3 style="color: maroon">Confirmation Message</h3>
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
								<div>Reply: <strong><?php echo $_smarty_tpl->tpl_vars['m']->value['reply'];?>
</strong></div>
								<div>Date/Time Received: <?php echo $_smarty_tpl->tpl_vars['m']->value['date_received'];?>
</div>
								<?php if (($_smarty_tpl->tpl_vars['m']->value['status']=='new')){?>
									<?php $_smarty_tpl->tpl_vars['noOfMessages'] = new Smarty_variable($_smarty_tpl->tpl_vars['noOfMessages']->value-1, null, 0);?>
									<div>Status: <span style="color: red"><strong>New!</strong></span></div>
								<?php }else{ ?>
									<div>Status: <span style="color: red"><?php echo $_smarty_tpl->tpl_vars['m']->value['status'];?>
</span></div>
								<?php }?>
							</div>
						</div>
						<div class="modal-footer">
							<div style="text-align: center">
								<!--<a href="skype:+63<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
								<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="confirmMessage(<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
); return false;">Update Confirmation</a>
								<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeMessage(<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['m']->value['ref'];?>
); return false;">Update Later</button>
							</div>
						</div>
					</div>
					<?php $_smarty_tpl->tpl_vars['noOfMessages'] = new Smarty_variable($_smarty_tpl->tpl_vars['noOfMessages']->value+1, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value+1, null, 0);?>
				<?php } ?>
			<?php }?>
		</div>

		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/date-format.js" type="text/javascript"></script>
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