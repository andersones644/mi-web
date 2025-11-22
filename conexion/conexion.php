<?php
$host = "sql311.infinityfree.com";
$user = "if0_40479966";
$pass = "XeEqnFUB2R0";
$db   = "if0_40479966_mi_web";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>