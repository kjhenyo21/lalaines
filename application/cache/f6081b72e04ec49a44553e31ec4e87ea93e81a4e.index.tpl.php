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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514b107c5a3d1',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514b107c5a3d1')) {function content_514b107c5a3d1($_smarty_tpl) {?>  <!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Lalaine's Bookstore - Login</title>
		<link href="http://localhost/lalaines/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/lalaines/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/lalaines/assets/stylesheets/main.css" rel="stylesheet"></link>
	</head>
	
	<body>
		
		<!-- Navbar -->
		<div id="banner" class="page-header"></div>
		</div>
		
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center"> Members' Log-in </h3>
		<div id="main-wrapper" style="width: 300px">
			
						<form id="form-login" class="form-horizontal" method="post" action="http://localhost/lalaines/login">
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