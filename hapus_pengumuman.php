<?php

include_once("config.php");


$id_pengumuman = $_GET['id_pengumuman'];



$result = mysqli_query($conn, "DELETE FROM tb_pengumuman WHERE id_pengumuman=$id_pengumuman");


header("Location:tampil_pengumuman.php");
?>