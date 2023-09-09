<?php
// Récupérer l'adresse IP du visiteur
$ip = $_SERVER['REMOTE_ADDR'];

// Récupérer le pays du visiteur en utilisant l'API de géolocalisation de geoplugin.net
$json = file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip");
$ip_info = json_decode($json, true);
$country = $ip_info['geoplugin_countryName'];

// Récupérer l'appareil du visiteur en analysant l'en-tête User-Agent
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$device = '';
if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
    $device = 'Mobile';
} elseif (strpos($user_agent, 'Tablet') !== false || strpos($user_agent, 'iPad') !== false) {
    $device = 'Tablet';
} else {
    $device = 'Desktop';
}

// Créer le message à enregistrer dans le fichier texte
$message = "Adresse IP: $ip | Pays: $country | Appareil: $device" . PHP_EOL;

// Enregistrer le message dans le fichier texte
$file = fopen('../visitors.txt', 'a'); // Ouvrir le fichier en mode d'ajout pour ajouter le message à la fin
fwrite($file, $message); // Écrire le message dans le fichier
fclose($file); // Fermer le fichier
?>
