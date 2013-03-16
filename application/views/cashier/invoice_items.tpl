					<div id="items">
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
								{if ($items)}
									{foreach $items as $i}
										<tr>
											<td><span id="it_code">{$i['item_code']}</span></td>
											<td>{$i['desc']}</td>
											<td style="text-align: right">{$i['quantity']}</td>
											<td style="text-align: right">{$i['price']}</td>
											<td style="text-align: right">{$i['amount']}</td>
											<td><a href="#remove{$i['id']}" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
										</tr>
									{/foreach}
									<tr>
										<td></td>
										<td></td>
										<td style="text-align: right; color: black"><strong>{$total_qty}</strong></td>
										<td style="text-align: right"></td>
										<td style="text-align: right"></td>
										<td></td>
									</tr>
								{else}
									<tr>
										<td><span id="it_code">000000</span></td>
										<td>--</td>
										<td style="text-align: right">0</td>
										<td style="text-align: right">0.00</td>
										<td style="text-align: right">0.00</td>
										<td>--</td>
									</tr>
								{/if}
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
	</script>