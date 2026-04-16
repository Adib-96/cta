<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "supervision_cta";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("ERREUR CONNEXION : " . $conn->connect_error);
}
?>