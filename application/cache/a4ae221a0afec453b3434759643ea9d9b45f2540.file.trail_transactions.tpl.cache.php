<?php /* Smarty version Smarty-3.1.7, created on 2013-03-22 13:52:44
         compiled from "C:\xampp\htdocs\trailblazer\application/views\audit_trail\trail_transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19596514877de33d178-33889167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4ae221a0afec453b3434759643ea9d9b45f2540' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\trail_transactions.tpl',
      1 => 1363956758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19596514877de33d178-33889167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514877de9f4a6',
  'variables' => 
  array (
    'doc' => 0,
    'headings' => 0,
    'h' => 0,
    'info' => 0,
    'i' => 0,
    'row' => 0,
    'url' => 0,
    'ref' => 0,
    'acct' => 0,
    'fs' => 0,
    'ledger' => 0,
    'journal' => 0,
    'source' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514877de9f4a6')) {function content_514877de9f4a6($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\xampp\\htdocs\\trailblazer\\application\\libraries\\smarty\\plugins\\function.url.php';
?><!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Trailing the Transactions</title>
	</head>
	
	<body>
		<div id="transDetailsModal">
		</div>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 900px">
			<div style="margin: 0 auto; text-align: center">
				<h2><?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
</h2>
				<br>
				<table id="table" class="table table-hover" style="text-align: left; color: black">
					<thead>
						<?php if (($_smarty_tpl->tpl_vars['headings']->value)){?>
							<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value){
$_smarty_tpl->tpl_vars['h']->_loop = true;
?>
								<th style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['h']->value;?>
</th>
							<?php } ?>
						<?php }?>
						<th></th>
						<th></th>
					</thead>
					<tbody>
						<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable(0, null, 0);?>
						<?php if (($_smarty_tpl->tpl_vars['info']->value)){?>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("or_no=".($_smarty_tpl->tpl_vars['i']->value[1])."&amt=".($_smarty_tpl->tpl_vars['i']->value[2])."&name=".($_smarty_tpl->tpl_vars['i']->value[4])."&address=".($_smarty_tpl->tpl_vars['i']->value[5])."&contact=".($_smarty_tpl->tpl_vars['i']->value[6]), null, 0);?>
								<?php if ($_smarty_tpl->tpl_vars['row']->value==0){?>
									<tr>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</td>
										<td style="text-align: center; vertical-align: center"><a href="#trans-details<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
" data-toggle="modal" onClick="getDetails('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'); return false;"><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</a></td>
										<td class="amount" style="text-align: right;">Php <?php echo number_format($_smarty_tpl->tpl_vars['i']->value[2],2,".",",");?>
</td>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[4];?>
</td>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[5];?>
</td>
										<td style="text-align: center; vertical-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value[6];?>
</td>
										<td style="text-align: center; vertical-align: center; width: 30px"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary?ref=<?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
&or_no=<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['ledger']->value;?>
&journal=<?php echo $_smarty_tpl->tpl_vars['journal']->value;?>
&trans=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center; width: 30px"><a>System Audit</a></td>
									</tr>
								<?php }else{ ?>
									<tr style="vertical-align: center;">
										<td style="text-align: center; vertical-align: center important!;"><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</td>
										<td style="text-align: center; vertical-align: center;"><a href="#trans-details<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
" data-toggle="modal" onClick="getDetails('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'); return false;"><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</a></td>
										<td class="amount" style="text-align: right;"><?php echo number_format($_smarty_tpl->tpl_vars['i']->value[2],2,".",",");?>
</td>
										<td style="text-align: center; vertical-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value[4];?>
</td>
										<td style="text-align: center; vertical-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value[5];?>
</td>
										<td style="text-align: center; vertical-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value[6];?>
</td>
										<td style="text-align: center; vertical-align: center;"><a href="<?php echo smarty_function_url(array(),$_smarty_tpl);?>
audit_trail/summary?ref=<?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
&or_no=<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
&acct=<?php echo $_smarty_tpl->tpl_vars['acct']->value;?>
&fs=<?php echo $_smarty_tpl->tpl_vars['fs']->value;?>
&ledger=<?php echo $_smarty_tpl->tpl_vars['ledger']->value;?>
&journal=<?php echo $_smarty_tpl->tpl_vars['journal']->value;?>
&trans=<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
">Audit Trail</a></td>
										<td style="text-align: center; vertical-align: center;"><a>System Audit</a></td>
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
	<script>
		function getDetails(url) {	
			url = url.replace(/\s/g,"%20");
			console.log(url);
			$('#transDetailsModal').load('load_trans_details/index?' + url);
			$('#trans-details').modal('show');
			$('body').append("<div id='backdrop' class='modal-backdrop fade in'></div>");
		}
		
		function closeIt() {
			$('#trans-details').remove();
			$('#backdrop').remove();
		}
		
		function textIt(name, contact_no, date, or_no, amt_due) {
			var ref = Math.floor(Math.random() * 9000) + 1000;
			var message = "Good day, " + name + "! This is Trailblazer - an automated accounting audit trail. We would just like you to confirm if you have made a transaction with Lalaine's Bookstore amounting to Php" + amt_due + " last " + date + " with OR No: " + or_no + ". Please reply TRAIL<space><Ref No><space><Yes or No> to this number. Your Ref No is " + ref + ". We will be waiting for your reply. Help us fight agaist fraud!";
			$.ajax({
				url: 'http://localhost:8011/send/sms/0' + contact_no + '/' + message + '/',
				type: "GET",
				dataType: "text",
				async: false,
				success: function() {
				},
				error: function(data, status, error){
					alert('Message sent!');
					//if (data.readyState == 4) 
					//	alert('Message sent!');
					//else if (data.readyState == 0) 
					//	alert('Message sending failed! Make sure that your GSM modem is properly inserted to your PC and/or that you have opened FrontlineSMS.');
				}
			});
			$.ajax({
				url: 'index/textPerson?ref=' + ref + '&name=' + name + '&contact=' + contact_no + '&date=' + date + '&or_no=' + or_no + '&amt=' + amt_due,
				type: "GET",
				async: false
			});
		}
	</script>
</html><?php }} ?>