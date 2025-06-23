<?php
$host = 'localhost';
$dbname = 'voting_system';
$user = 'root';
$pass = '1111';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>