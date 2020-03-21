<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
//$nip = $_POST['nip'];
	
//	$nama_guru= $_POST['nama_guru'];
//	$mapel = $_POST['mapel'];
	
$result = mysqli_query($conn, "SELECT * from tb_guru");
	
?>

<html>
<head>    
    <title>DATA GURU</title>
</head>

<body>
<a href="input_guru.php">TAMBAH</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>No.</th><th>Nomor Induk Pegawai</th> <th>Nama</th> <th>Mata Pelajaran</th> <th>Update</th>
    </tr>
    <?php  $no=0;
    while($user_data = mysqli_fetch_array($result)) {  $no++;       
        echo "<tr>";
		echo "<td>$no</td>";
		echo "<td>".$user_data['nip']."</td>";
        echo "<td>".$user_data['nama_guru']."</td>";
        echo "<td>".$user_data['mapel']."</td>";    
        echo "<td><a href='update_guru.php?nip=$user_data[nip]'>Edit</a> | <a href='hapus_guru.php?nip=$user_data[nip]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>