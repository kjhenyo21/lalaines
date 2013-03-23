<?php /* Smarty version Smarty-3.1.7, created on 2013-03-16 13:51:54
         compiled from "C:\xampp\htdocs\lalaines\application/views\admin\invoice_remove_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243951432c3123ae63-30600378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9ecb6edbd330b38453b2c6497fd8f44433962ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\admin\\invoice_remove_modal.tpl',
      1 => 1363438268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243951432c3123ae63-30600378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51432c3150fe1',
  'variables' => 
  array (
    'items' => 0,
    'i' => 0,
    'temp_inv_no' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51432c3150fe1')) {function content_51432c3150fe1($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\lalaines\\application\\libraries\\smarty\\plugins\\function.url.php';
?>		<!-- Modal for Removing an Item -->
		<?php if (($_smarty_tpl->tpl_vars['items']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<div id="remove<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="modal hide fade" style="margin-top: auto">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3>Remove Item</h3>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to remove the item?</p>
					</div>
					<div class="modal-footer">
						<a class="btn" id="removeButton<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="#" data-url="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
admin/invoice/removeItem?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&ic=<?php echo $_smarty_tpl->tpl_vars['i']->value['item_code'];?>
&qty=<?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>
&invoice=<?php echo $_smarty_tpl->tpl_vars['temp_inv_no']->value;?>
" onClick="removeItem(<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
); return false;">Yes</a>
						<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
					</div>
				</div>
			<?php } ?>
		<?php }?><?php }} ?>