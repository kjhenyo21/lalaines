<?php /* Smarty version Smarty-3.1.7, created on 2013-03-13 13:55:19
         compiled from "C:\xampp\htdocs\lalaines\application/views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4621514077379dc856-19393722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a666f5e850329b9a613d7ea8698f2b8e7a59f9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\header.tpl',
      1 => 1363164548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4621514077379dc856-19393722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cashier_no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51407737e35aa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51407737e35aa')) {function content_51407737e35aa($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\lalaines\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!DOCTYPE html>
	<head>
		<title>WADWE Cashier</title>
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
		<div class="navbar navbar-inverse navbar-fixed-top" style="position: relative">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" style="color: white">Cashier No: <?php echo $_smarty_tpl->tpl_vars['cashier_no']->value;?>
</a>
					<div class="brand" id="time" style="color: white; margin: auto 120px"></div>
					<a class="brand" href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
cashier" style="color: white; margin-left: 30px; padding-right: 0px">Log out</a>
				</div>
			</div>
		</div><?php }} ?>