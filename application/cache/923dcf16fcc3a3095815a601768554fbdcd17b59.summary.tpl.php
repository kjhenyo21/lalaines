<?php /*%%SmartyHeaderCode:11975514c12e20bf2a2-43938155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '923dcf16fcc3a3095815a601768554fbdcd17b59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trailblazer\\application/views\\audit_trail\\summary.tpl',
      1 => 1364024949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11975514c12e20bf2a2-43938155',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514d75e7f3732',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d75e7f3732')) {function content_514d75e7f3732($_smarty_tpl) {?>  <!--
 * Lalaine's Bookstore Computerized AIS
 * @author Kristian Jacob Abad Lora <kjalora92@yahoo.com>
 * @date-created October 31, 2012
-->
<!DOCTYPE html>
	<head>
		<title>Trailblazer - Trailing the Ledger</title>
	</head>
	
	<body>
		<div id="transDetailsModal">
		</div>
		<!-- Main -->
		<br>
		<div id="main-wrapper" style="width: 950px; padding: 40px 10px;">
			<div id="summary-container" style="margin: 0 auto; text-align: center">
				<h2>Audit Trail Summary</h2>
				
				<div class="sub-summary-container">
					<div><strong>Income Statement</strong></div>
					<div>Account: Sales</div>
				</div>
				<div class="arrow">
					<img src="http://localhost/trailblazer/assets/images/arrow-left-small.PNG"></img>
				</div>
				<div class="sub-summary-container">
					<strong>General Ledger</strong>
				</div>
				<div class="arrow">
					<img src="http://localhost/trailblazer/assets/images/arrow-left-small.PNG"></img>
				</div>
				<div class="sub-summary-container">
					<strong>Cash Receipts Journal</strong>
				</div>
				<div class="arrow">
					<img src="http://localhost/trailblazer/assets/images/arrow-left-small.PNG"></img>
				</div>
				<div class="sub-summary-container">
					<strong>Sale Transactions</strong>
										<div>Date: 2010-01-06</div>
					<div>OR No.: <a href="#trans-details6264" data-toggle="modal" onClick="getDetails('or_no=6264&amt=5.00&name=Karl Arevalo&address=Manila&contact=9332567821'); return false;">6264</a></div>
					<div>Amount Due: 5.00</div>
					<div>Name: Karl Arevalo</div>
					<div>Contact: 9332567821</div>
				</div>
			</div>
		
		<input type="submit" value="Take Screenshot Of Div" onclick="capture();" />
		<form method="POST" enctype="multipart/form-data" action="http://localhost/trailblazer/audit_trail/summary/saveImage" id="myForm">
			<input type="hidden" name="img_val" id="img_val" value="" />
		</form>
		<img name="summary_image" src="http://localhost/trailblazer/assets/images/arrow-left.PNG">

  <!--<a href="#" onClick="saveImage(document.summary_image); return false;">Save</a>-->
    <a href="http://localhost/trailblazer/audit_trail/summary/save">Save</a>
	<a href="#" onClick="saveAs('http://localhost/trailblazer/assets/images/arrow-left.PNG', 'k.png'); return false;">Convert To PDF</a>
		</div>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="http://localhost/trailblazer/assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="http://localhost/trailblazer/assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
	<script>
	function capture() {
    $('#summary-container').html2canvas({
        onrendered: function (canvas) {
            //Set hidden field's value to image data (base-64 string)
            $('#img_val').val(canvas.toDataURL("image/png"));
            //Submit the form manually
            document.getElementById("myForm").submit();
        }
    });
}
	
function saveAs(fileUrl, fileName) {
   var save = document.createElement("a");
   save.href = fileUrl;
   save.target = "_blank";
   save.download = fileName || fileUrl;

   var evt = document.createEvent('MouseEvents');
   evt.initMouseEvent('click', true, true, 
                      window, 1, 0, 0, 0, 0, 
                      false, false, false, false, 0, null);

   save.dispatchEvent(evt);
   (window.URL || window.webkitURL).revokeObjectURL(save.href)
}


	
		function saveImage (imgOrURL) {
			console.log(imgOrURL);
			if (typeof imgOrURL == 'object')
				imgURL = imgOrURL.src;
			$.ajax({
				url: 'summary/save?url=' + imgURL,
				type: "GET",
				async: false
			});
		}
		
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