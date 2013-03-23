<?php /* Smarty version Smarty-3.1.7, created on 2013-03-20 09:30:54
         compiled from "C:\xampp\htdocs\trailblazer\application/views\setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207325145e3c9b5ec21-63530817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '055b2d5b4ed3ca4c423bf8acc8c54a6224e7bd57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\setup.tpl',
      1 => 1363768249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207325145e3c9b5ec21-63530817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5145e3c9c3818',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5145e3c9c3818')) {function content_5145e3c9c3818($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Trailblazer Digital Accounting Audit Trail Program
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Setup Page</title>
	</head>
	
	<body>
		<!-- Main -->
		<div id="main-wrapper-setup">
			<div id="form-container">
				<form id="setup" class="form-horizontal" method="post" action="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
setup/saveUserInfo">
					<h4>User Info</h4>
					<table style="width: 100%">
						<td style="width: 50%">
							<div class="field-group" id="group-id">
								<label class="field-label" for="id">ID Number*</label>
								<div class="control">
									<input type="text" class="span2" id="id" name="id" placeholder="ID Number">
								</div>
							</div>
							<div class="field-group" id="group-lname">
								<label class="field-label" for="lname">Last Name*</label>
								<div class="control">
									<input type="text" id="lname" name="lname" placeholder="Last Name">
								</div>
							</div>
							<div class="field-group" id="group-fname">
								<label class="field-label" for="fname">First Name*</label>
								<div class="control">
									<input type="text" id="fname" name="fname" placeholder="First Name">
								</div>
							</div>
							<div class="field-group">
								<label class="field-label" for="mname">Middle Name</label>
								<div class="control">
									<input type="text" id="mname" name="mname" placeholder="Middle Name">
								</div>
							</div>
							<div class="field-group">
								<label class="field-label" for="sex">Sex</label>
								<div class="control">
									<select id="sex" name="sex" style="width: 100px">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
							</div>
						</td>
						<td style="width: 50%">
							<div class="field-group">
								<label class="field-label" for="bdate">Birthdate</label>
								<div class="control">
									<input type="text" id="bdate" name="bdate" style="width: 80px" placeholder="Birthdate">
								</div>
							</div>
							<div class="field-group">
								<label class="field-label" for="address">Address</label>
								<div class="control">
									<input type="text" class="span4" id="address" name="address" placeholder="Address">
								</div>
							</div>
							<div class="field-group">
								<label class="field-label" for="contact">Contact</label>
								<div class="control">
									<input type="text" class="span2" id="contact" name="contact" placeholder="Phone/Mobile Number">
								</div>
							</div>
							<div class="field-group">
								<label class="field-label" for="email">E-mail</label>
								<div class="control">
									<input type="text" id="e-mail" name="email" placeholder="E-mail Address">
								</div>
							</div>
						</td>
					</table>
					
					<hr>
					
					<h4>Company Info</h4>
					<table style="width: 100%">
						<td style="width: 50%">
							<div class="field-group" id="group-license_no">
								<label class="field-label" for="license_no">License No.*</label>
								<div class="control">
									<input type="text" class="span2" id="license_no" name="license_no" placeholder="License Number">
								</div>
							</div>
							<div class="field-group" id="group-cname">
								<label class="field-label" for="cname">Name*</label>
								<div class="control">
									<input type="text" id="cname" name="cname" placeholder="Company Name">
								</div>
							</div>
							<div class="field-group">
								<label class="field-label" for="caddress">Address</label>
								<div class="control">
									<input type="text" class="span4" id="caddress" name="caddress" placeholder="Address">
								</div>
							</div>
						</td>
					</table>
					
					<hr>
					
					<h4>User Account</h4>
					<table style="width: 100%">
						<td style="width: 50%">
							<div class="field-group">
								<label class="field-label" for="position">Position</label>
								<div class="control">
									<input type="text" id="position" name="position" placeholder="Company Position">
								</div>
							</div>
							<div class="field-group" id="group-uname">
								<label class="field-label" for="uname">Username*</label>
								<div class="control">
									<input type="text" class="error" id="uname" name="uname" placeholder="Username">
								</div>
							</div>
						</td>
						<td style="width: 50%">
							<div class="field-group" id="group-password">
								<label class="field-label" for="password" style="width: 140px">Password*</label>
								<div class="control">
									<input type="password" id="password" name="password" placeholder="Password">
								</div>
							</div>
							<div class="field-group" id="group-cpassword">
								<label class="field-label" for="cpassword" style="width: 140px">Confirm Password*</label>
								<div class="control">
									<input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password*">
								</div>
							</div>
						</td>
					</table>
					<hr>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<button type="submit" class="btn btn-primary">Save</button>
							<button type="reset" id="reset" class="btn">Reset</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/forms.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/datepicker.css" rel="stylesheet"></link>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script>
			var id = $('#id').val();
			var lname = $('#lname').val();
			var fname = $('#fname').val();
			var license_no = $('#license_no').val();
			var cname = $('#cname').val();
			var uname = $('#uname').val();
			var password = $('#password').val();
			var cpassword = $('#cpassword').val();
			var form = $('#setup');
			
			$('#bdate').datepicker({
				format: 'yyyy-mm-dd'
			});
			
			$('#submit').click(function(){
				id = $('#id').val();
				lname = $('#lname').val();
				fname = $('#fname').val();
				license_no = $('#license_no').val();
				cname = $('#cname').val();
				uname = $('#uname').val();
				password = $('#password').val();
				cpassword = $('#cpassword').val();

				if ((id=="") || (lname=="") || (fname=="") || (license_no=="") || (cname=="") || (uname=="") || (password=="") || (cpassword=="")) {
					if (id=="")
						$('#group-id').addClass("error");
					else $('#group-id').removeClass("error");
					
					if (lname=="")
						$('#group-lname').addClass("error");
					else $('#group-lname').removeClass("error");
					
					if (fname=="")
						$('#group-fname').addClass("error");
					else $('#group-fname').removeClass("error");
					
					if (license_no=="")
						$('#group-license_no').addClass("error");
					else $('#group-license_no').removeClass("error");
					
					if (cname=="")
						$('#group-cname').addClass("error");
					else $('#group-cname').removeClass("error");
					
					if (uname=="")
						$('#group-uname').addClass("error");
					else $('#group-uname').removeClass("error");
					
					if (password=="")
						$('#group-password').addClass("error");
					else $('#group-password').removeClass("error");
					
					if (cpassword=="")
						$('#group-cpassword').addClass("error");
					else $('#group-cpassword').removeClass("error");
					
					if ((password!="") && (cpassword!="")) {
						if (cpassword != password) {
							$('#group-password').addClass("error");
							$('#group-cpassword').addClass("error");
							$('#cpassword').after('<span id="error-text">Does not match!</span>');
						} else {
							$('#group-password').removeClass("error");
							$('#group-cpassword').removeClass("error");
							$('#error-text').remove();
						}
					}
					 $("html, body").animate({ scrollTop: 0 }, "slow");
				} else {
					if ((password!="") && (cpassword!="")) {
						if (cpassword != password) {
							$('#group-password').addClass("error");
							$('#group-cpassword').addClass("error");
							$('#cpassword').after('<span id="error-text">Does not match!</span>');
						} else {
							$('#group-password').removeClass("error");
							$('#group-cpassword').removeClass("error");
							$('#error-text').remove();
							
							$.ajax({
								type: "POST",
								url: 'setup/saveUserInfo',
								data: form.serialize(),
								success: function(data){
									$('#form-container').load('setup_preferences');
								}
							});
						}
					}
				}
			});
		</script><?php }} ?>