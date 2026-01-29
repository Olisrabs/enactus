<?php
// db_conn.php

$servername = "localhost";
$username = "enactus"; // Default WAMP username
$password = "enactus"; // Default WAMP password (usually empty)
$database = "enactus"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die(json_encode(['success' => false, 'message' => 'Database connection error']));
}

// Set charset to UTF-8
$conn->set_charset("utf8mb4");

?>