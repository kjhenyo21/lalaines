<?php /* Smarty version Smarty-3.1.7, created on 2013-03-22 09:56:28
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\trail_ledger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2273351482ff7a49822-97291323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe38ed4490c1c4f981f87378e847e254dedb5a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_ledger.tpl',
      1 => 1363942519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2273351482ff7a49822-97291323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51482ff8462ef',
  'variables' => 
  array (
    'doc' => 0,
    'detail' => 0,
    'month' => 0,
    'year' => 0,
    'info' => 0,
    'row' => 0,
    'i' => 0,
    'acct' => 0,
    'fs' => 0,
    'source' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51482ff8462ef')) {function content_51482ff8462ef($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Trailing the Ledger</title>
	</head>
	
	<body>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 700px">
			<div style="margin: 0 auto; text-align: center">
				<h2><?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
</h2>
				<div class="ledger-subhead"><h4>Account: <?php echo $_smarty_tpl->tpl_vars['detail']->value['acct_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['detail']->value['acct_no'];?>
</h4></div>
				<div class="ledger-subhead">Month/Year: <?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</div>
				<br>
				<table id="table" style="text-align: left; color: black">
					<thead>
						<th>Date</th>
						<th>Description</th>
						<th>Reference</th>
						<th>Debit</th>
						<th>Credit</th>
					</thead>
					<tbody>
						<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable(0, null, 0);?>
						<?php if (($_smarty_tpl->tpl_vars['info']->value)){?>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['row']->value==0){?>
									<tr>
										<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
										<td><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/trail_journal?ref=<?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</a></td>
										<?php if ($_smarty_tpl->tpl_vars['i']->value['debit']!=''){?>
											<td class="amount">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['debit'],2,".",",");?>
</td>
										<?php }else{ ?>
											<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['debit'];?>
</td>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['i']->value['credit']!=''){?>
											<td class="amount">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value['credit'],2,".",",");?>
</td>
										<?php }else{ ?>
											<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['credit'];?>
</td>
										<?php }?>
									</tr>
								<?php }else{ ?>
									<tr>
										<td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['i']->value['day'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['desc'];?>
</td>
										<td><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/trail_journal?ref=<?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['ref'];?>
</a></td>
										<?php if ($_smarty_tpl->tpl_vars['i']->value['debit']!=''){?>
											<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['debit'],2,".",",");?>
</td>
										<?php }else{ ?>
											<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['debit'];?>
</td>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['i']->value['credit']!=''){?>
											<td class="amount"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value['credit'],2,".",",");?>
</td>
										<?php }else{ ?>
											<td class="amount"><?php echo $_smarty_tpl->tpl_vars['i']->value['credit'];?>
</td>
										<?php }?>
									</tr>
								<?php }?>
								<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value+1, null, 0);?>
							<?php } ?>
						<?php }else{ ?>
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
</html><?php }} ?>