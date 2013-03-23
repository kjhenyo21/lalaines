<?php /* Smarty version Smarty-3.1.7, created on 2013-03-21 15:41:03
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\trans_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2792451493326ebe3a7-86730268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e16a3a7a926cc16081f55eb3dbf607705da8351' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trans_details.tpl',
      1 => 1363876285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2792451493326ebe3a7-86730268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514933271c8ed',
  'variables' => 
  array (
    'name' => 0,
    'address' => 0,
    'contact' => 0,
    'date' => 0,
    'or_no' => 0,
    'details' => 0,
    'd' => 0,
    'amt_due' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514933271c8ed')) {function content_514933271c8ed($_smarty_tpl) {?><!-- Modal for Loading Transaction Details-->
	<div id="trans-details" class="modal hide fade in" style="margin-top: -180px; width: 520px; display: block;" aria-hidden="false">
		<div class="modal-header">
			<div id="close"><a href="#" class="close" onClick="closeIt(); return false;">&times;</a></div>
			<h3>Transaction Details</h3>
		</div>
		<div class="modal-body">
			<div class="input" style="margin: 0 10px">
				<div>Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
				<div>Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</div>
				<div>Contact: <?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
</div>
				<div>Date: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</div>
				<div>OR No: <?php echo $_smarty_tpl->tpl_vars['or_no']->value;?>
</div>
				
				<br>
				<br>
				<table id="table" style="text-align: center; color: black">
					<thead>
						<th style="padding: 0 10px;">Item</th>
						<th>Quantity</th>
						<th>Unit Price</th>
						<th>Amount</th>
					</thead>
					<tbody>
						<?php if (($_smarty_tpl->tpl_vars['details']->value)){?>
							<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable(0, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['details']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
								<tr>
									<td style="padding: 0 10px;"><?php echo $_smarty_tpl->tpl_vars['d']->value[2];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['d']->value[3];?>
</td>
									<td><?php echo number_format($_smarty_tpl->tpl_vars['d']->value[4],2,".",",");?>
</td>
									<td><?php echo number_format($_smarty_tpl->tpl_vars['d']->value[5],2,".",",");?>
</td>
								</tr>
							<?php } ?>
						<?php }?>
					</tbody>	
				</table>
			</div>
			<br>
			<div style="font-size:8pt; font-style:italic">*Prices/Amount are in Philippine Peso</di>
		</div>
		<div class="modal-footer">
			<div style="text-align: center">
				<?php if (($_smarty_tpl->tpl_vars['contact']->value=='')){?>
					<!--<a href="#" class="btn btn-small btn-primary" type="submit" id="call" disabled="disabled">Call</a>-->
					<a href="#" class="btn btn-small" type="button" id="text" disabled="disabled">Send SMS to Confirm</a>
				<?php }else{ ?>
					<!--<a href="skype:+63<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
					<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="textIt('<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
', <?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
', <?php echo $_smarty_tpl->tpl_vars['or_no']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['amt_due']->value;?>
); return false;">Send SMS to Confirm</a>
				<?php }?>
				<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeIt(); return false;">Cancel</button>
			</div>
		</div>
	</div><?php }} ?>