<?php /*%%SmartyHeaderCode:26682514d345cede625-46764233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c4bd12b9cb3d590da44aa44988c44b41ee5e445' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\message_items.tpl',
      1 => 1364024724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26682514d345cede625-46764233',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d741bc9894',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d741bc9894')) {function content_514d741bc9894($_smarty_tpl) {?>  			<div id="messages" style="margin: 0 auto; text-align: center">
				<h2>Messages</h2>
				<br>
								<table class="table table-striped">
					<thead>
						<th style="text-align: center">ID</th>
						<th style="text-align: center">Ref. #</th>
						<th style="text-align: center">Name</th>
						<th style="text-align: center">Contact</th>
						<th style="text-align: center">Transaction Date</th>
						<th style="text-align: center">OR #</th>
						<th style="text-align: center">Amount (Php)</th>
						<th style="text-align: center">Date Sent</th>
						<th style="text-align: center">Reply</th>
						<th style="text-align: center">Date Received</th>
						<th style="text-align: center">Confirmation Status</th>
						<th style="text-align: center">Date Confirmed</th>
						<th></th>
					</thead>
					</table>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><div style="font-style: italic">No message(s) to display.</div> </td>
							</tr>
						</tbody>
					</table>
								<div class="control-group" style="text-align: center; margin-top: 50px;">
											<a type="button" class="btn" disabled="disabled">Clear Archive</a>
										<a href="http://localhost/trailblazer/audit_trail/log_messages" type="button" class="btn btn-primary">View Log File</a>
					<a href="http://localhost/trailblazer/audit_trail" type="button" class="btn">Back</a>
				</div>
			</div><?php }} ?>