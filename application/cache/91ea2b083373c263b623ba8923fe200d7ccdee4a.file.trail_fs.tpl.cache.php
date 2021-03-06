<?php /* Smarty version Smarty-3.1.7, created on 2013-03-22 09:54:32
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\trail_fs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2111351486ec38c4a67-69946801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91ea2b083373c263b623ba8923fe200d7ccdee4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_fs.tpl',
      1 => 1363942447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2111351486ec38c4a67-69946801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51486ec447e0e',
  'variables' => 
  array (
    'fr_kind' => 0,
    'date' => 0,
    'info' => 0,
    'i' => 0,
    'month' => 0,
    'year' => 0,
    'column' => 0,
    'error_msg' => 0,
    'source' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51486ec447e0e')) {function content_51486ec447e0e($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Financial Statement</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div style="margin: 0 auto; text-align: center">
				<h2><?php echo $_smarty_tpl->tpl_vars['fr_kind']->value;?>
</h2>
				<div id="date-heading">As of <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</div>
				<div style="margin-bottom: 20px; font-style: italic">In Philippine Peso</div>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th></th>
						<th></th>
						<th></th>
					</thead>
					<tbody>
						<?php $_smarty_tpl->tpl_vars['column'] = new Smarty_variable('', null, 0);?>
						<?php if (($_smarty_tpl->tpl_vars['info']->value)){?>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<?php if (($_smarty_tpl->tpl_vars['i']->value['account']=="Revenue:")){?>
									<?php $_smarty_tpl->tpl_vars['column'] = new Smarty_variable("second", null, 0);?>
									<tr>
										<td style="font-style: italic"><?php echo $_smarty_tpl->tpl_vars['i']->value['account'];?>
</td>
									</tr>
								<?php }elseif(($_smarty_tpl->tpl_vars['i']->value['account']=="Total Revenue")){?>
									<tr style="font-weight: bold">
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['account'];?>
</td>
										<td></td>
										<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['amount'],2,".",",");?>
</td>
									</tr>
								<?php }elseif(($_smarty_tpl->tpl_vars['i']->value['account']=="Less: Expenses:")){?>
									<?php $_smarty_tpl->tpl_vars['column'] = new Smarty_variable("first", null, 0);?>
									<tr style="height: 10px"></tr>
									<tr>
										<td style="font-style: italic"><?php echo $_smarty_tpl->tpl_vars['i']->value['account'];?>
</td>
									</tr>
								<?php }elseif(($_smarty_tpl->tpl_vars['i']->value['account']=="Total Expenses")){?>
									<tr style="font-weight: bold">
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['account'];?>
</td>
										<td></td>
										<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['amount'],2,".",",");?>
</td>
									</tr>
								<?php }elseif(($_smarty_tpl->tpl_vars['i']->value['account']=="Net Income")){?>
									<tr style="height: 10px"></tr>
									<tr style="font-weight: bold">
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['account'];?>
</td>
										<td></td>
										<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['amount'],2,".",",");?>
</td>
									</tr>
								<?php }else{ ?>
									<tr>
										<td><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/trail_ledger?acct=<?php echo $_smarty_tpl->tpl_vars['i']->value['account'];?>
&month=<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
&year=<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fr_kind']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['account'];?>
</a></td>
										<?php if (($_smarty_tpl->tpl_vars['column']->value=="first"&&$_smarty_tpl->tpl_vars['i']->value['amount']!='')){?>
											<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['amount'],2,".",",");?>
</td>
											<td></td>										
										<?php }elseif(($_smarty_tpl->tpl_vars['column']->value=="second"&&$_smarty_tpl->tpl_vars['i']->value['amount']!='')){?>										
											<td></td>
											<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['amount'],2,".",",");?>
</td>										
										<?php }?>
									</tr>
								<?php }?>
							<?php } ?>
						<?php }else{ ?>
							<div style="font-style: italic"><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
</div>
						<?php }?>
					</tbody>
				</table>
				<div id="source-file">Source File: <?php echo $_smarty_tpl->tpl_vars['source']->value;?>
</div>
			</div>
		</div>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script>
		
	</script>
</html><?php }} ?>