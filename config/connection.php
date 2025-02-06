<?php

$host = getenv("DB_HOST") ?: "musicals.mysql.database.azure.com";
$user = getenv("DB_USER") ?: "musicals";
$password = getenv("DB_PASSWORD") ?: "Password@123";
$database = getenv("DB_DATABASE") ?: "scoe";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    echo "Unable to connect";
}

?>
