<?php

include_once("config.php");


$id_materi = $_GET['id_materi'];



$result = mysqli_query($conn, "DELETE FROM tb_materi WHERE id_materi=$id_materi");


header("Location:tampil_materi.php");
?>