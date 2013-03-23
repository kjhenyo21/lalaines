<?php /* Smarty version Smarty-3.1.7, created on 2013-03-16 10:50:42
         compiled from "C:\xampp\htdocs\lalaines\application/views\cashier\invoice_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24254512df0a20182d0-47828979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb1724dcc57e7fd2d0cd9c2872e98d36e83a7889' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\cashier\\invoice_items.tpl',
      1 => 1363427417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24254512df0a20182d0-47828979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_512df0a22768d',
  'variables' => 
  array (
    'items' => 0,
    'i' => 0,
    'total_qty' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512df0a22768d')) {function content_512df0a22768d($_smarty_tpl) {?>					<div id="items">
						<table class="table table-striped">
							<thead>
								<th style="width: 90px">Item Code</th>
								<th>Description</th>
								<th style="width: 40px; text-align: right">Qty</th>
								<th style="width: 90px; text-align: right">Unit Price</th>
								<th style="width: 90px; text-align: right">Amount</th>
								<th style="width: 20px"></th>
							</thead>
							<tbody>
								<?php if (($_smarty_tpl->tpl_vars['items']->value)){?>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
										<tr>
											<td><span id="it_code"><?php echo $_smarty_tpl->tpl_vars['i']->value['item_code'];?>
</span></td>
											<td><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
											<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>
</td>
											<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
</td>
											<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['i']->value['amount'];?>
</td>
											<td><a href="#remove<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
										</tr>
									<?php } ?>
									<tr>
										<td></td>
										<td></td>
										<td style="text-align: right; color: black"><strong><?php echo $_smarty_tpl->tpl_vars['total_qty']->value;?>
</strong></td>
										<td style="text-align: right"></td>
										<td style="text-align: right"></td>
										<td></td>
									</tr>
								<?php }else{ ?>
									<tr>
										<td><span id="it_code">000000</span></td>
										<td>--</td>
										<td style="text-align: right">0</td>
										<td style="text-align: right">0.00</td>
										<td style="text-align: right">0.00</td>
										<td>--</td>
									</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
	<script>
		$(function() {
			it_code = parseFloat(document.getElementById('it_code').innerHTML);
			if (it_code != 0) {
				document.getElementById('enter_payment').disabled = false;
				document.getElementById('cancel_inv').removeAttribute("disabled");
			} else {
				document.getElementById('enter_payment').disabled = true;
				document.getElementById('cancel_inv').setAttribute("disabled", "disabled");
			}
		});
	</script><?php }} ?>