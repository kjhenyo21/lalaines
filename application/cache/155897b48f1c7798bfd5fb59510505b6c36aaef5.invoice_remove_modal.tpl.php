<?php /*%%SmartyHeaderCode:24369512e0c805c37a8-72788144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '155897b48f1c7798bfd5fb59510505b6c36aaef5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\cashier\\invoice_remove_modal.tpl',
      1 => 1363250735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24369512e0c805c37a8-72788144',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5146ca37c31c5',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5146ca37c31c5')) {function content_5146ca37c31c5($_smarty_tpl) {?>  		<!-- Modal for Removing an Item -->
									<div id="remove2" class="modal hide fade" style="margin-top: auto">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3>Remove Item</h3>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to remove the item?</p>
					</div>
					<div class="modal-footer">
						<a class="btn" id="removeButton2" href="#" data-url="http://localhost/lalaines/cashier/invoice/removeItem?id=2&ic=558082&qty=6&invoice=72250272" onClick="removeItem(2); return false;">Yes</a>
						<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
					</div>
				</div>
							<div id="remove1" class="modal hide fade" style="margin-top: auto">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3>Remove Item</h3>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to remove the item?</p>
					</div>
					<div class="modal-footer">
						<a class="btn" id="removeButton1" href="#" data-url="http://localhost/lalaines/cashier/invoice/removeItem?id=1&ic=938221&qty=3&invoice=72250272" onClick="removeItem(1); return false;">Yes</a>
						<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
					</div>
				</div>
					<?php }} ?>