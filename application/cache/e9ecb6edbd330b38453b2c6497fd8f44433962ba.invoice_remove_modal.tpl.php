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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51446b2b7544d',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51446b2b7544d')) {function content_51446b2b7544d($_smarty_tpl) {?>  		<!-- Modal for Removing an Item -->
									<div id="remove32" class="modal hide fade" style="margin-top: auto">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3>Remove Item</h3>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to remove the item?</p>
					</div>
					<div class="modal-footer">
						<a class="btn" id="removeButton32" href="#" data-url="http://localhost/lalaines/admin/invoice/removeItem?id=32&ic=558082&qty=5&invoice=30181428" onClick="removeItem(32); return false;">Yes</a>
						<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
					</div>
				</div>
							<div id="remove31" class="modal hide fade" style="margin-top: auto">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3>Remove Item</h3>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to remove the item?</p>
					</div>
					<div class="modal-footer">
						<a class="btn" id="removeButton31" href="#" data-url="http://localhost/lalaines/admin/invoice/removeItem?id=31&ic=938221&qty=7&invoice=30181428" onClick="removeItem(31); return false;">Yes</a>
						<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
					</div>
				</div>
					<?php }} ?>