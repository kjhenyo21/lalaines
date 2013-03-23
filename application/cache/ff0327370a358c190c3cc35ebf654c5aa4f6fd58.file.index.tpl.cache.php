<?php /* Smarty version Smarty-3.1.7, created on 2013-03-15 14:22:17
         compiled from "C:\xampp\htdocs\lalaines\application/views\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69751431503c67326-98593316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff0327370a358c190c3cc35ebf654c5aa4f6fd58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lalaines\\application/views\\admin\\index.tpl',
      1 => 1363353518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69751431503c67326-98593316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51431503f326c',
  'variables' => 
  array (
    'temp_inv_no' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51431503f326c')) {function content_51431503f326c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\lalaines\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
		
		<!-- Main -->
		<h3 style="margin: 20px auto; text-align: center"> Switchboard </h3>
		<div id="main-wrapper" style="width: 300px">
			<div style="margin: 0 auto; text-align: center">
				<a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
admin/invoice?no=<?php echo $_smarty_tpl->tpl_vars['temp_inv_no']->value;?>
" role="button" class="btn" style="width: 190px; margin-bottom:10px">POS Invoice</a>
				<br><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
admin/profile" role="button" class="btn" style="width: 190px; margin-bottom:10px">Profile</a>
				<br><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
index/logout" role="button" class="btn" style="width: 190px">Logout</a>
			</div>
		</div>
			
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/date-format.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/clock.js" type="text/javascript"></script><?php }} ?>