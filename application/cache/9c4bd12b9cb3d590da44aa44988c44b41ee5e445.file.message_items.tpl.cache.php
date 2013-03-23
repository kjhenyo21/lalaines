<?php /* Smarty version Smarty-3.1.7, created on 2013-03-23 08:59:41
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\message_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26682514d345cede625-46764233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c4bd12b9cb3d590da44aa44988c44b41ee5e445' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\message_items.tpl',
      1 => 1364024724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26682514d345cede625-46764233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d345d5944e',
  'variables' => 
  array (
    'messages' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d345d5944e')) {function content_514d345d5944e($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?>			<div id="messages" style="margin: 0 auto; text-align: center">
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
							<th style="text-align: center">Confirmation Status</th>
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
										<td style="text-align: center; font-weight: bold; color: #red; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['m']->value['status'];?>
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
			</div><?php }} ?>