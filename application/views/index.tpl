<!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Lalaine's Bookstore - Login</title>
		<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
	</head>
	
	<body>
		
		<!-- Navbar -->
		<div id="banner" class="page-header"></div>
		</div>
		
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center"> Members' Log-in </h3>
		<div id="main-wrapper" style="width: 300px">
			{if $response != ""}
				<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> {$response}
				</div>
			{/if}

			{if $accessStatus == "unauthorizedAccess"}
				<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> You are not authorized to access this site without logging in.
				</div>
			{/if}
			<form id="form-login" class="form-horizontal" method="post" action="{url}login">
				<div class="control-group">
					<label class="control-label" for="id">ID Number</label>
					<div class="controls">
						<input type="text" id="id" name="id" placeholder="ID Number">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password">Password</label>
					<div class="controls">
						<input type="password" id="password" name="password" placeholder="Password">
					</div>
				</div>
				<div class="control-group" style="margin-bottom: 0px">
					<div class="controls">
						<button type="submit" class="btn">Log in</button>
					</div>
				</div>
			</form>
		</div>