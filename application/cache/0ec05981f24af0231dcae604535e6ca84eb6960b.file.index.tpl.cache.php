<?php /* Smarty version Smarty-3.1.7, created on 2013-03-23 04:53:28
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79475146d0854cbc89-58047973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec05981f24af0231dcae604535e6ca84eb6960b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\index.tpl',
      1 => 1364010803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79475146d0854cbc89-58047973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5146d08580496',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5146d08580496')) {function content_5146d08580496($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Home</title>
	</head>
	
	<body>
		<!-- Modal for Loading a File for Audit Trail-->
		<div id="load_file" class="modal hide fade" style="margin-top: -50px; width: 480px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick="closeIt(); return false;">&times;</button>
				<h3>Load File</h3>
			</div>
			<div class="modal-body">
				<form id="load-file-form" class="form-horizontal" method="post" action="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/index/readFile">
					<fieldset>
						<div style="margin: 0 35px">
							<div class="field-group" id="group-file">
								<label class="field-label" for="file">File</label>
								<div class="control">
									<input type="file" class="span3" id="file" name="file" onChange="onChangeFile(); return false;" placeholder="Enter file directory">
								</div>
							</div>
							<div class="field-group" id="group-doc">
								<label class="field-label" for="doc">FR Kind</label>
								<div class="control">
									<select class="span3" id="doc" name="doc">
										<option></option>
										<option>Income Statement</option>
										<option>Balance Sheet</option>
									</select>
								</div>
							</div>
						</div>
						<div style="margin: 0 156px">
							<button class="btn btn-small" type="submit" id="add" disabled="disabled">Load File</button>
							<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeIt(); return false;">Cancel</button> </div>
					</fieldset>
				</form>
			</div>
		</div>
		
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center"> Switchboard </h3>
		<div id="main-wrapper" style="width: 300px">
			<div style="margin: 0 auto; text-align: center">
				<a  href="#load_file" data-toggle="modal" role="button" class="btn" style="width: 190px; margin-bottom:10px">Start a Trail!</a>				
				<br><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/messages" role="button" class="btn" style="width: 190px; margin-bottom:10px">Messages</a>
				<br><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/profile" role="button" class="btn" style="width: 190px; margin-bottom:10px">Profile</a>
				<br><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/preferences" role="button" class="btn" style="width: 190px; margin-bottom:10px">Preferences</a>
				<br><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
index/logout" role="button" class="btn" style="width: 190px">Logout</a>
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
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script>
			function closeIt() {
				document.getElementById('file').value = "";
				$('#add').attr("disabled", "disabled");
				$('#add').removeClass("btn-primary");
			}
			function onChangeFile() {
				$('#add').removeAttr("disabled");
				$('#add').addClass("btn-primary");
			}
		</script><?php }} ?>