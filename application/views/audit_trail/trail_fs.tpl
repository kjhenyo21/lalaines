<!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Financial Statement</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div style="margin: 0 auto; text-align: center">
				<h2>{$fr_kind}</h2>
				<div id="date-heading">As of {$date}</div>
				<div style="margin-bottom: 20px; font-style: italic">In Philippine Peso</div>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th></th>
						<th></th>
						<th></th>
					</thead>
					<tbody>
						{$column = ""}
						{if ($info)}
							{foreach $info as $i}
								{if ($i['account'] == "Revenue:")}
									{$column = "second"}
									<tr>
										<td style="font-style: italic">{$i['account']}</td>
									</tr>
								{else if ($i['account'] == "Total Revenue")}
									<tr style="font-weight: bold">
										<td>{$i['account']}</td>
										<td></td>
										<td class="amount">{$i['amount']|number_format:2:".":","}</td>
									</tr>
								{else if ($i['account'] == "Less: Expenses:")}
									{$column = "first"}
									<tr style="height: 10px"></tr>
									<tr>
										<td style="font-style: italic">{$i['account']}</td>
									</tr>
								{else if ($i['account'] == "Total Expenses")}
									<tr style="font-weight: bold">
										<td>{$i['account']}</td>
										<td></td>
										<td class="amount">{$i['amount']|number_format:2:".":","}</td>
									</tr>
								{else if ($i['account'] == "Net Income")}
									<tr style="height: 10px"></tr>
									<tr style="font-weight: bold">
										<td>{$i['account']}</td>
										<td></td>
										<td class="amount">{$i['amount']|number_format:2:".":","}</td>
									</tr>
								{else}
									<tr>
										<td><a href="{url}audit_trail/trail_ledger?acct={$i['account']}&month={$month}&year={$year}&fs={$fr_kind}">{$i['account']}</a></td>
										{if ($column == "first" && $i['amount'] != "")}
											<td class="amount">{$i['amount']|number_format:2:".":","}</td>
											<td></td>										
										{else if ($column == "second" && $i['amount'] != "")}										
											<td></td>
											<td class="amount">{$i['amount']|number_format:2:".":","}</td>										
										{/if}
									</tr>
								{/if}
							{/foreach}
						{else}
							<div style="font-style: italic">{$error_msg}</div>
						{/if}
					</tbody>
				</table>
				<div id="source-file">Source File: {$source}</div>
			</div>
		</div>
	<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script>
		
	</script>
</html>