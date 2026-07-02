<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "vinilstore";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erro de conexão.");
}
?>