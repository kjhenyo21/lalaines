<!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Lalaine's Bookstore - Home</title>
		<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
	</head>
	
	<body>
		<!-- Modal for Loading a File for Audit Trail-->
		<div id="audit_trail" class="modal hide fade" style="margin-top: auto; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Load File</h3>
			</div>
			<div class="modal-body">
				<form method="post" action="{url}cashier/index/searchCustomerInvoice">
					<fieldset>
						<div class="input" style="margin: 0 120px">
							<input class="span3" id="file_path" name="file_path" type="file" placeholder="File directory">
						</div>
						<br>
						<div style="margin: 0 156px">
							<button class="btn btn-small btn-primary" type="submit" id="add">Load File</button>
							<button class="btn btn-small" data-dismiss="modal" id="close">Cancel</button> </div>
					</fieldset>
				</form>
			</div>
		</div>
		
		<!-- Navbar -->
		<div id="banner" class="page-header"></div>
		<div class="navbar navbar-inverse navbar-fixed-top" style="position: relative">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" style="color: white">Cashier No: 0168</a>
				<a class="brand" style="color: white; margin: auto 165px">October 31, 2012  05:30:25 PM</a>
				<a class="brand" href="{url}cashier" style="color: white; margin-left: 30px; padding-right: 0px">Log out</a>
			</div>
		</div>
		
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div style="margin: 0 auto; text-align: center">
				<h2>General Ledger</h2>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th>Date</th>
						<th>OR Number</th>
						<th>Debit</th>
						<th>Credit</th>
					</thead>
					<tbody>
						<tr>
							<td>January 2012</td>
							<td><a href="{url}audit_trail/trail_transactions/index?from=018423500&to=018423628">018423500-018423628</a></td>
							<td></td>
							<td>290.00</td>
						</tr>
						<tr>
							<td>February 2012</td>
							<td><a href="{url}audit_trail/trail_transactions/index?from=018423628&to=018423753">018423628-018423753</a></td>
							<td></td>
							<td>380.00</td>
						</tr>
						<tr>
							<td>March 2012</td>
							<td><a href="{url}audit_trail/trail_transactions/index?from=018423753&to=018423884">018423753-018423884</a></td>
							<td></td>
							<td>400.25</td>
						</tr>
						<tr>
							<td>April 2012</td>
							<td><a href="{url}audit_trail/trail_transactions/index?from=018423884&to=018423972">018423884-018423972</a></td>
							<td></td>
							<td>634.55</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
		<div id="footer">
			<span style="font-size: 11px; color: #b81d1d"><strong>Copyright &copy 2012. All Rights Reserved.</strong></span>
			<br>CSS powered by Twitter Bootstrap
			<br>Kristian Jacob Abad Lora. BS Computer Science 4
			<br>E-mail: kjalora92@yahoo.com | FB: <a href="http://facebook.com/kjhenyo21">kjhenyo21</a> | Twitter: <a href="http://twitter.com/pchan_august">pchan_august</a>
		</div>
	</body>
	
	<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
	<script>
		$('#due_date').datepicker();
		var today = new Date();
		document.getElementById('date_time').value = today;
		
		$('#file_path').click(function() {
			$('input[type=file]').click();
		});
	</script>
</html>