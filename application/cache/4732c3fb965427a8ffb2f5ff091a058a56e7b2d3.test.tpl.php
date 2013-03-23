<?php /*%%SmartyHeaderCode:25174514b0218c86929-62908620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4732c3fb965427a8ffb2f5ff091a058a56e7b2d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\test.tpl',
      1 => 1363918101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25174514b0218c86929-62908620',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514bbdddbc4d3',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514bbdddbc4d3')) {function content_514bbdddbc4d3($_smarty_tpl) {?>  <!--
 * WADWE Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
	<head>
		<title>Trailblazer - Home</title>
	</head>
	<body onload="JavaScript:refresh(3000);">
		<!-- Modal for Loading Transaction Details-->
												<div id="ignored-message0" class="modal hide fade" style="margin-top: -120px; width: 320px; display: block;" aria-hidden="false">
					<div class="modal-header">
						<div id="close"><a href="#" class="close" onClick="closeMessage(0); return false;">&times;</a></div>
						<h3 style="color: maroon">Confirmation Message Received!</h3>
					</div>
					<div class="modal-body">
						<div class="input" style="margin: 0 10px">
							<div>Name: Kristian Lora</div>
							<div>Contact: 9336925206</div>
							<div>Date: 2010-01-05</div>
							<div>OR No: 6263</div>
							<div>Amount: Php 33</div>
							<div>Reply: no</div>
							<div style="color: red">Status: ignored</div>
						</div>
					</div>
					<div class="modal-footer">
						<div style="text-align: center">
							<!--<a href="skype:+63<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined index: contact</p>
<p>Filename: cache/4732c3fb965427a8ffb2f5ff091a058a56e7b2d3.file.test.tpl.cache.php</p>
<p>Line Number: 74</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: cache/4732c3fb965427a8ffb2f5ff091a058a56e7b2d3.file.test.tpl.cache.php</p>
<p>Line Number: 74</p>

</div>?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
							<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="textIt(); return false;">Update Confirmation</a>
							<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeMessage(0); return false;">Update Later</button>
						</div>
					</div>
				</div>
											<div id="ignored-message1" class="modal hide fade" style="margin-top: -120px; width: 320px; display: block;" aria-hidden="false">
					<div class="modal-header">
						<div id="close"><a href="#" class="close" onClick="closeMessage(1); return false;">&times;</a></div>
						<h3 style="color: maroon">Confirmation Message Received!</h3>
					</div>
					<div class="modal-body">
						<div class="input" style="margin: 0 10px">
							<div>Name: Kristian Lora</div>
							<div>Contact: 9336925206</div>
							<div>Date: 2010-01-05</div>
							<div>OR No: 6263</div>
							<div>Amount: Php 33</div>
							<div>Reply: yes</div>
							<div style="color: red">Status: ignored</div>
						</div>
					</div>
					<div class="modal-footer">
						<div style="text-align: center">
							<!--<a href="skype:+63<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined index: contact</p>
<p>Filename: cache/4732c3fb965427a8ffb2f5ff091a058a56e7b2d3.file.test.tpl.cache.php</p>
<p>Line Number: 74</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: cache/4732c3fb965427a8ffb2f5ff091a058a56e7b2d3.file.test.tpl.cache.php</p>
<p>Line Number: 74</p>

</div>?call" class="btn btn-small btn-primary" type="submit" id="call">Call</a>-->
							<a href="#" class="btn btn-small btn-primary" type="button" id="text" onClick="textIt(); return false;">Update Confirmation</a>
							<button class="btn btn-small" data-dismiss="modal" id="close" onClick="closeMessage(1); return false;">Update Later</button>
						</div>
					</div>
				</div>
											<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
		<link href="http://localhost/trailblazer/assets/stylesheets/forms.css" rel="stylesheet"></link>
		<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
		<script src="http://localhost/trailblazer/assets/scripts/bootstrap.min.js" type="text/javascript"></script>
		<script>
			var no = 2;
			function refresh(timeoutPeriod) {
				var time = timeoutPeriod;
							
				$.ajax({
					type: "GET",
					url : 'checkIgnoredAndNewMessages?no=' + no,
					dataType: "json",
					success: function(data){
						if (data.latest_count != no) {
							console.log('data: '+data.latest_count);
							console.log('current: '+no);
							for (i=0; i < no; i++) {
								$('#ignored-message' + i).removeClass('hide');
								$('#ignored-message' + i).addClass('in');
							}
							
						}
						
					}
				});
				setTimeout("refresh(30000)",timeoutPeriod);
			}
			
			function closeMessage(id) {
				if (id == 0)
					location.reload(true);
				else {
					$('#ignored-message' + id).removeClass('in');
					$('#ignored-message' + id).addClass('hide');
				}
			}
		</script><?php }} ?>