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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d73ca6ef8d',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d73ca6ef8d')) {function content_514d73ca6ef8d($_smarty_tpl) {?><!-- Modal for Loading Transaction Details-->
	<div id="trans-details" class="modal hide fade in" style="margin-top: -180px; width: 520px; display: block;" aria-hidden="false">
		<div class="modal-header">
			<div id="close"><a href="#" class="close" onClick="closeIt(); return false;">&times;</a></div>
			<h3>Transaction Details</h3>
		</div>
		<div class="modal-body">
			<div class="input" style="margin: 0 10px">
				<div>Name: Elaine Pahang</div>
				<div>Address: Talisay City</div>
				<div>Contact: 9332567821</div>
				<div>Date: 2010-01-04</div>
				<div>OR No: 6259</div>
				
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
																												<tr>
									<td style="padding: 0 10px;">DESK-FRAME</td>
									<td>1</td>
									<td>99.00</td>
									<td>99.00</td>
								</tr>
																		</tbody>	
				</table>
			</div>
			<br>
			<div style="font-size:8pt; font-style:italic">*Prices/Amount are in Philippine Peso</di>
		</div>
		<div class="modal-footer">
			<div style="text-align: center">
									<!--<a href="skype:+639332567821?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
					<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="textIt('Elaine Pahang', 9332567821, '2010-01-04', 6259, 99.50); return false;">Send SMS to Confirm</a>
								<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeIt(); return false;">Cancel</button>
			</div>
		</div>
	</div><?php }} ?>