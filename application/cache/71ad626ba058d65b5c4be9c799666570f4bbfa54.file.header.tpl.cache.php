<?php /* Smarty version Smarty-3.1.7, created on 2013-03-13 09:49:17
         compiled from "C:\xampp\htdocs\lalaines\application/views\cashier\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11719514039e20f4ae6-06971927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71ad626ba058d65b5c4be9c799666570f4bbfa54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\cashier\\header.tpl',
      1 => 1363164548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11719514039e20f4ae6-06971927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514039e22888c',
  'variables' => 
  array (
    'cashier_no' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514039e22888c')) {function content_514039e22888c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\lalaines\\application\\libraries\\smarty\\plugins\\function.url.php';
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