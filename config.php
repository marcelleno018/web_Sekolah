<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sekolah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//echo "koneksi berhasil";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}