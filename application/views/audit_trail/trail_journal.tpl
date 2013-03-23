<!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Trailing the Journal</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div style="margin: 0 auto; text-align: center">
				<h2>{$doc}</h2>
				<br>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th>Date</th>
						<th>Description</th>
						<th>Reference</th>
						<th>Cash (Dr)</th>
						<th>Other (Dr)</th>
						<th>Sales (Cr)</th>
					</thead>
					<tbody>
						{$row = 0}
						{if ($info)}
							{foreach $info as $i}
								{if $row == 0}
									<tr>
										<td style="text-align: right">{$month} {$i['day']}</td>
										<td>{$i['desc']}</td>
										<td><a href="{url}audit_trail/trail_trans?ref={$i['ref']}&acct={$acct}&fs={$fs}&ledger={$ledger}&journal={$doc}">{$i['ref']}</a></td>
										{if $i['cash'] != ""}
											<td class="amount">Php {$i['cash']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['cash']}</td>
										{/if}
										{if $i['other'] != ""}
											<td class="amount">Php {$i['other']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['other']}</td>
										{/if}
										{if $i['sales'] != ""}
											<td class="amount">Php {$i['sales']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['sales']}</td>
										{/if}
									</tr>
								{else}
									<tr>
										<td style="text-align: right">{$i['day']}</td>
										<td>{$i['desc']}</td>
										<td><a href="{url}audit_trail/trail_trans?ref={$i['ref']}&acct={$acct}&fs={$fs}&ledger={$ledger}&journal={$doc}">{$i['ref']}</a></td>
										{if $i['cash'] != ""}
											<td class="amount">{$i['cash']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['cash']}</td>
										{/if}
										{if $i['other'] != ""}
											<td class="amount">{$i['other']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['other']}</td>
										{/if}
										{if $i['sales'] != ""}
											<td class="amount">{$i['sales']|number_format:2:".":","}</td>
										{else}
											<td class="amount">{$i['sales']}</td>
										{/if}
									</tr>
								{/if}
								{$row = $row + 1}
							{/foreach}
						{else}
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
</html>