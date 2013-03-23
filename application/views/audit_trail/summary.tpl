<!--
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
					<div><strong>{$fs}</strong></div>
					<div>Account: {$acct}</div>
				</div>
				<div class="arrow">
					<img src="{url}assets/images/arrow-left-small.PNG"></img>
				</div>
				<div class="sub-summary-container">
					<strong>{$ledger}</strong>
				</div>
				<div class="arrow">
					<img src="{url}assets/images/arrow-left-small.PNG"></img>
				</div>
				<div class="sub-summary-container">
					<strong>{$journal}</strong>
				</div>
				<div class="arrow">
					<img src="{url}assets/images/arrow-left-small.PNG"></img>
				</div>
				<div class="sub-summary-container">
					<strong>{$trans}</strong>
					{$url = "or_no={$info[1]}&amt={$info[2]}&name={$info[3]}&address={$info[4]}&contact={$info[5]}"}
					<div>Date: {$info[0]}</div>
					<div>OR No.: <a href="#trans-details{$info[1]}" data-toggle="modal" onClick="getDetails('{$url}'); return false;">{$info[1]}</a></div>
					<div>Amount Due: {$info[2]}</div>
					<div>Name: {$info[3]}</div>
					<div>Contact: {$info[5]}</div>
				</div>
			</div>
		
		<input type="submit" value="Take Screenshot Of Div" onclick="capture();" />
		<form method="POST" enctype="multipart/form-data" action="{url}audit_trail/summary/saveImage" id="myForm">
			<input type="hidden" name="img_val" id="img_val" value="" />
		</form>
		<img name="summary_image" src="{url}assets/images/arrow-left.PNG">

  <!--<a href="#" onClick="saveImage(document.summary_image); return false;">Save</a>-->
  {$imgUrl = "{url}audit_trail/summary"}
  <a href="{url}audit_trail/summary/save">Save</a>
	<a href="#" onClick="saveAs('{url}assets/images/arrow-left.PNG', 'k.png'); return false;">Convert To PDF</a>
		</div>
	<link href="{url}assets/stylesheets/bootstrap.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/bootstrap-responsive.css" rel="stylesheet"></link>
	<link href="{url}assets/stylesheets/main.css" rel="stylesheet"></link>
	<script src="{url}assets/scripts/jquery.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/bootstrap.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/html2canvas.js" type="text/javascript"></script>
	<script src="{url}assets/scripts/jquery.plugin.html2canvas.js" type="text/javascript"></script>
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
</html>