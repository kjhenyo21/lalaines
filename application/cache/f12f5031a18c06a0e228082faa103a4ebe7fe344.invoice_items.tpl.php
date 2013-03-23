<?php /*%%SmartyHeaderCode:1243951432c3115cba2-72361041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f12f5031a18c06a0e228082faa103a4ebe7fe344' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\admin\\invoice_items.tpl',
      1 => 1363427417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243951432c3115cba2-72361041',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51446b2b3f31d',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51446b2b3f31d')) {function content_51446b2b3f31d($_smarty_tpl) {?>					<div id="items">
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
																											<tr>
											<td><span id="it_code">558082</span></td>
											<td>VERONICA FULL BRF(BLK)-XL(C)</td>
											<td style="text-align: right">5</td>
											<td style="text-align: right">140</td>
											<td style="text-align: right">700</td>
											<td><a href="#remove32" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
										</tr>
																			<tr>
											<td><span id="it_code">938221</span></td>
											<td>ULY NWBRA DST 32A/70A</td>
											<td style="text-align: right">7</td>
											<td style="text-align: right">310</td>
											<td style="text-align: right">2170</td>
											<td><a href="#remove31" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
										</tr>
																		<tr>
										<td></td>
										<td></td>
										<td style="text-align: right; color: black"><strong>12</strong></td>
										<td style="text-align: right"></td>
										<td style="text-align: right"></td>
										<td></td>
									</tr>
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