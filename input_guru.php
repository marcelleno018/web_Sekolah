<html>
<head>
<meta charset="utf-8">
<title>form input guru</title>
</head>

<body>

<h1>Data Guru</h1>
<form action="input_guru.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nip</td>
                <td><input type="text" name="nip"></td>
            </tr>
            <tr> 
                <td>Nama Guru</td>
                <td><input type="text" name="nama_guru"></td>
            </tr>
            <tr> 
                <td>Mata Pelajaran</td>
                <td><input type="text" name="mapel"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>


    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nip = $_POST['nip'];
        $nama_guru = $_POST['nama_guru'];
        $mapel = $_POST['mapel'];
//echo $nip. " ". $nama_guru. " " . $mapel;
        // include database connection file
      include_once("config.php");

        // Insert user data into table
       $result = mysqli_query($conn, "INSERT INTO `tb_guru` (`nip`, `nama_guru`, `mapel`) VALUES ('$nip','$nama_guru','$mapel')");
		

        // Show message when user added
      echo "berhasil. <a href='tampil_guru.php'>tampilkan</a>";
    }
    ?>
</body>
</html>

