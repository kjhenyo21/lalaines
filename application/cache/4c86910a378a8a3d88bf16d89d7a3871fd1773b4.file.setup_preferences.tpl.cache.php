<?php /* Smarty version Smarty-3.1.7, created on 2013-03-20 09:13:14
         compiled from "C:\xampp\htdocs\trailblazer\application/views\setup_preferences.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25650514621948c7d28-86108484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c86910a378a8a3d88bf16d89d7a3871fd1773b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\setup_preferences.tpl',
      1 => 1363767142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25650514621948c7d28-86108484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51462194a6986',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51462194a6986')) {function content_51462194a6986($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
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
setup/savePreferences">
					<h4>Target Database</h4>
					<table style="width: 100%">
						<td style="width: 50%">
							<div class="field-group" id="group-hname">
								<label class="field-label" for="hname">Hostname*</label>
								<div class="control">
									<input type="text" id="hname" name="hname" placeholder="e.g. localhost">
								</div>
							</div>
							<div class="field-group" id="group-uname">
								<label class="field-label" for="uname">Username*</label>
								<div class="control">
									<input type="text" id="uname" name="uname" placeholder="Username">
								</div>
							</div>
							<div class="field-group" id="group-db_name">
								<label class="field-label" for="password">DB Name*</label>
								<div class="control">
									<input type="text" id="db_name" name="db_name" placeholder="Database Name">
						</td>
						<td style="width: 50%">
							<div class="field-group" id="group-db_driver">
								<label class="field-label" for="db_driver" style="width: 140px">DB Driver*</label>
								<div class="control">
									<input type="text" id="db_driver" name="db_driver" placeholder="e. g. mysql, sqlite, etc">
								</div>
							</div>
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
					
					<h4>Document Locations</h4>
					<table id="files" style="width: 100%">
						<thead>
							<th>Document</th>
							<th>Type</th>
							<th>Path</th>
							<th>File Extension</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							<tr id="file-loc">
								<td>
									<div class="table-column" id="group-doc">
										<div class="control">
											<select class="span3 doc" id="doc1" name="doc1" placeholder="e.g. Cash Receipts">
												<option></option>
												<option>Cash Receipts</option>
												<option>Cash Reimbursements</option>
												<option>General Ledger</option>
											</select>
										</div>
									</div>
								</td>
								<td>
									<div class="table-column" id="group-type">
										<div class="control">
											<select class="span3" id="type" name="type" placeholder="e.g. Journal, Ledger, etc">
												<option></option>
												<option>Journal</option>
												<option>Ledger</option>
												<option>Transaction File</option>
												<option>Financial Report</option>
											</select>
										</div>
									</div>
								</td>
								<td>
									<div class="table-column" id="group-path">
										<div class="control">
											<input type="text" class="span4" id="path" name="path" placeholder="Paste the full path of the directory here">
											<div id="upload" style="display: none">
												<input type="file" class="span1" id="theFile" name="theFile" onChange="onFileChange();">
											</div>
										</div>
									</div>
								</td>
								<td>
									<div class="table-column">
										<div class="control">
											<input type="text" class="span1" id="ext" name="ext" placeholder="ex: txt">
										</div>
									</div>
								</td>
								<td>
									<div class="table-column">
										<div class="control">
											<a href="#" data-toggle="modal"><i class="icon-edit" ></i></a>
										</div>
									</div>
								</td>
								<td>
									<div class="table-column">
										<div class="control">
											<a href="#" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<a href="#" onclick="addMoreDocument(); return false;">Add Document</a>
					<hr>
					<div class="field-group" style="margin-bottom: 0px; text-align: center">
						<div class="control">
							<button type="submit" id="no" class="btn btn-primary">Save</button>
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
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-combobox.css" rel="stylesheet"></link>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap-combobox.js" type="text/javascript"></script>
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
			var rowNo = 1;
			
			/**function performClick(node) {
			   node.click();

			}			
			
			function onFileChange() {
				var d = document.getElementById("theFile").value;
				document.forms[0].path.value=document.getElementById("theFile").value;
			}*/

			function addMoreDocument() {
				rowNo += 1;
				$('#files > tbody:last').after('<tr id="file-loc"><td><div class="table-column" id="group-doc"><div class="control"><select class="span3 doc' + rowNo + '" id="doc' + rowNo + '" name="doc' + rowNo + '" placeholder="e.g. Cash Receipts"><option></option><option>Cash Receipts</option><option>Cash Reimbursements</option><option>General Ledger</option></select></div></div></td><td><div class="table-column" id="group-type"><div class="control"><select class="span3" id="type" name="type" placeholder="e.g. Journal, Ledger, etc"><option></option><option>Journal</option><option>Ledger</option><option>Transaction File</option><option>Financial Report</option></select></div></div></td><td><div class="table-column" id="group-path"><div class="control"><input type="text" class="span4" id="path" name="path" placeholder="Paste the full path of the directory here"><div id="upload" style="display: none"><input type="file" class="span1" id="theFile" name="theFile" onChange="onFileChange();"></div></div></div></td><td><div class="table-column"><div class="control"><input type="text" class="span1" id="ext" name="ext" placeholder="ex: txt"></div></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-edit" ></i></a></div></div></td><td><div class="table-column"><div class="control"><a href="#" data-toggle="modal"><i class="icon-remove" style="color: red"></i></a></div></div></td></tr>');
				$('#doc2').combobox();
				$('.add-on btn dropdown-toggle').remove();
			}
			
			$('#bdate').datepicker({
				format: 'yyyy-mm-dd'
			});
			
			$('#doc1').combobox();
			
			$('#submit').click(function(){
				id = $('#id').val();
				lname = $('#lname').val();
				fname = $('#fname').val();
				license_no = $('#license_no').val();
				cname = $('#cname').val();
				uname = $('#uname').val();
				password = $('#password').val();
				cpassword = $('#cpassword').val();
				
							$.ajax({
								type: "POST",
								url: 'setup/savePreferences',
								data: form.serialize()
							});

			});
		</script><?php }} ?>