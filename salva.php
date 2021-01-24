<?php 

define (DEBUG, true);

if (DEBUG) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

date_default_timezone_set('Europe/Rome');

// CONNECT TO THE DATABASE
$DB_NAME = 'efarm_lace';
$DB_HOST = 'localhost';
$DB_USER = 'efarm_lace';
$DB_PASS = 'As&P*2.HzX23';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (mysqli_connect_errno()) {

printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} 


// Salvo i dati
$query = "INSERT INTO lead (nome, cognome, email, brand, data_registrazione) VALUES ('". $mysqli->escape_string($_POST["nome"]) . "','" . $mysqli->escape_string($_POST["cognome"]) ."','". $mysqli->escape_string($_POST["email"]) ."','". $mysqli->escape_string($_POST["brand"]) ."', now())";

$mysqli->query($query);

?>