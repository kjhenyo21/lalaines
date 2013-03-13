<?php /* Smarty version Smarty-3.1.7, created on 2013-03-13 13:56:19
         compiled from "C:\xampp\htdocs\lalaines\application/views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:376350f6146cc05b07-40102662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6081b72e04ec49a44553e31ec4e87ea93e81a4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\index.tpl',
      1 => 1363179367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '376350f6146cc05b07-40102662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_50f6146d0a95f',
  'variables' => 
  array (
    'response' => 0,
    'accessStatus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f6146d0a95f')) {function content_50f6146d0a95f($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\lalaines\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Lalaine's Bookstore - Login</title>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
	</head>
	
	<body>
		
		<!-- Navbar -->
		<div id="banner" class="page-header"></div>
		</div>
		
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center"> Members' Log-in </h3>
		<div id="main-wrapper" style="width: 300px">
			<?php if ($_smarty_tpl->tpl_vars['response']->value!=''){?>
				<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> <?php echo $_smarty_tpl->tpl_vars['response']->value;?>

				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value=="unauthorizedAccess"){?>
				<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oops!</strong> You are not authorized to access this site without logging in.
				</div>
			<?php }?>
			<form id="form-login" class="form-horizontal" method="post" action="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
login">
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
		</div><?php }} ?>