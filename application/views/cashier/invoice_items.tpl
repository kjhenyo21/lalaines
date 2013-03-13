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
											<td>{$i['item_code']}</td>
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
										<td>000000</td>
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