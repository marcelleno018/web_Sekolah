<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$nip = $_GET['nip'];



$result = mysqli_query($conn, "DELETE FROM tb_guru WHERE nip=$nip");


header("Location:tampil_guru.php");
?>