			<div id="messages" style="margin: 0 auto; text-align: center">
				<h2>Messages</h2>
				<br>
				{if ($messages)}
					<table id="table" class="table table-hover" style="text-align: left; color: black">
						<thead>
							<th style="text-align: center">ID</th>
							<th style="text-align: center">Ref. #</th>
							<th style="text-align: center">Name</th>
							<th style="text-align: center">Contact</th>
							<th style="text-align: center">Transaction Date</th>
							<th style="text-align: center">OR #</th>
							<th style="text-align: center">Amount (Php)</th>
							<th style="text-align: center">Date Sent</th>
							<th style="text-align: center">Reply</th>
							<th style="text-align: center">Date Received</th>
							<th style="text-align: center">Confirmation Status</th>
							<th style="text-align: center">Date Confirmed</th>
							<th></th>
						</thead>
						<tbody>			
							{foreach $messages as $m}
								<tr>
									<td style="text-align: center; vertical-align: center">{$m['id']}</td>
									<td style="text-align: center; vertical-align: center">{$m['ref']}</td>
									<td style="text-align: center; vertical-align: center">{$m['name']}</td>
									<td style="text-align: center; vertical-align: center">{$m['contact']}</td>
									<td style="text-align: center; vertical-align: center">{$m['date']}</td>
									<td style="text-align: center; vertical-align: center">{$m['or_no']}</td>
									<td class="amount" style="text-align: right;">{$m['amt']|number_format:2:".":","}</td>
									<td style="text-align: center; vertical-align: center">{$m['date_sent']}</td>
									{if ($m['reply']) == 'yes'}
										<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">{$m['reply']}</td>
									{else if ($m['reply']) == 'no'}
										<td style="text-align: center; color: red; font-weight: bold; vertical-align: center">{$m['reply']}</td>
									{else}
										<td style="text-align: center; vertical-align: center">--</td>
									{/if}
									{if ($m['date_received']) == '0000-00-00 00:00:00'}
										<td style="text-align: center; vertical-align: center">--</td>
									{else}
										<td style="text-align: center; vertical-align: center">{$m['date_received']}</td>
									{/if}
									{if ($m['status']) == 'sent'}
										<td style="text-align: center; font-weight: bold; color: orange; vertical-align: center">{$m['status']}</td>
									{else if ($m['status']) == 'new'}
										<td style="text-align: center; font-weight: bold; color: #red; vertical-align: center">{$m['status']}</td>
									{else if ($m['status']) == 'ignored'}
										<td style="text-align: center; font-weight: bold; color: grey; vertical-align: center">{$m['status']}</td>
									{else if ($m['status']) == 'confirmed'}
										<td style="text-align: center; font-weight: bold; color: #289909; vertical-align: center">{$m['status']}</td>
									{/if}
									{if ($m['date_confirmed']) == '0000-00-00 00:00:00'}
										<td style="text-align: center; vertical-align: center">--</td>
									{else}
										<td style="text-align: center; vertical-align: center">{$m['date_confirmed']}</td>
									{/if}
									<td><a href="#remove{$m['id']}" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></td>
								</tr>
							{/foreach}
						</tbody>
					</table>
				{else}
				<table class="table table-striped">
					<thead>
						<th style="text-align: center">ID</th>
						<th style="text-align: center">Ref. #</th>
						<th style="text-align: center">Name</th>
						<th style="text-align: center">Contact</th>
						<th style="text-align: center">Transaction Date</th>
						<th style="text-align: center">OR #</th>
						<th style="text-align: center">Amount (Php)</th>
						<th style="text-align: center">Date Sent</th>
						<th style="text-align: center">Reply</th>
						<th style="text-align: center">Date Received</th>
						<th style="text-align: center">Confirmation Status</th>
						<th style="text-align: center">Date Confirmed</th>
						<th></th>
					</thead>
					</table>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><div style="font-style: italic">No message(s) to display.</div> </td>
							</tr>
						</tbody>
					</table>
				{/if}
				<div class="control-group" style="text-align: center; margin-top: 50px;">
					{if ($messages)}
						<a href="#clearModal" type="button" class="btn" data-toggle="modal">Clear Archive</a>
					{else}
						<a type="button" class="btn" disabled="disabled">Clear Archive</a>
					{/if}
					<a href="{url}audit_trail/log_messages" type="button" class="btn btn-primary">View Log File</a>
					<a href="{url}audit_trail" type="button" class="btn">Back</a>
				</div>
			</div>