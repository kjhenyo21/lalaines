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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5146ca37b5f3f',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5146ca37b5f3f')) {function content_5146ca37b5f3f($_smarty_tpl) {?>					<div id="items">
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
											<td style="text-align: right">6</td>
											<td style="text-align: right">140</td>
											<td style="text-align: right">840</td>
											<td><a href="#remove2" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
										</tr>
																			<tr>
											<td><span id="it_code">938221</span></td>
											<td>ULY NWBRA DST 32A/70A</td>
											<td style="text-align: right">3</td>
											<td style="text-align: right">310</td>
											<td style="text-align: right">930</td>
											<td><a href="#remove1" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
										</tr>
																		<tr>
										<td></td>
										<td></td>
										<td style="text-align: right; color: black"><strong>9</strong></td>
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