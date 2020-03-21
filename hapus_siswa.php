<?php

include_once("config.php");


$nis = $_GET['nis'];



$result = mysqli_query($conn, "DELETE FROM tb_siswa WHERE nis=$nis");


header("Location:tampil_siswa.php");
?>