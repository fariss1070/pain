<?php
// Chemin du fichier de log
$logFile = 'track_log.txt';

// Récupérer les informations du client
$logData = date('Y-m-d H:i:s') . ' - IP: ' . $_SERVER['REMOTE_ADDR'] . ' - Agent: ' . $_SERVER['HTTP_USER_AGENT'] . "\n";

// Écrire les données dans le fichier de log
file_put_contents($logFile, $logData, FILE_APPEND);

// Envoyer l'image 1x1 pixel
header('Content-Type: image/png');
readfile('pixel.png');
?>
