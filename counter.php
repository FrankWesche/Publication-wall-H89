<?php
// Datei, in der die Zugriffsdaten gespeichert werden
$logFile = 'access_log.txt';

// Aktuelles Datum und Uhrzeit
$timestamp = date("Y-m-d H:i:s");

// IP-Adresse des Besuchers
$ip = $_SERVER['REMOTE_ADDR'];

// User-Agent (Browser-Info)
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Eintrag formatieren
$entry = "$timestamp | IP: $ip | Browser: $userAgent\n";

// Eintrag anhängen
file_put_contents($logFile, $entry, FILE_APPEND);

// Optional: Zähler aktualisieren
$counterFile = 'counter.txt';
$count = file_exists($counterFile) ? (int)file_get_contents($counterFile) : 0;
$count++;
file_put_contents($counterFile, $count);
?>
