<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
//$nip = $_POST['nip'];
	
//	$nama_guru= $_POST['nama_guru'];
//	$mapel = $_POST['mapel'];
	
$result = mysqli_query($conn, "SELECT * from tb_materi");
	
?>

<html>
<head>    
    <title>DATA MATERI</title>
</head>

<body>

<a href="input_materi.php">TAMBAH</a><br/><br/>

    <table width='80%' border=1>

    <tr>
       <th>id_materi</th> <th>NIP</th> <th>KELAS</th> <th>JURUSAN</th> <th>MATERI</th> <th>Update</th>
    </tr>
    <?php  $no=0;
    while($user_data = mysqli_fetch_array($result)) {  $no++;       
        echo "<tr>";
		echo "<td>$no</td>";											 
		//echo "<td>".$user_data['id_materi']."</td>";
        echo "<td>".$user_data['nip']."</td>";
        echo "<td>".$user_data['kelas']."</td>";  
   	 	echo "<td>".$user_data['jurusan']."</td>";
		echo "<td>".$user_data['materi']."</td>";
        echo "<td><a href='update_materi.php?id_materi=$user_data[id_materi]'>Edit</a> | <a href='hapus_materi.php?id_materi=$user_data[id_materi]'>Delete</a></td></tr>";       
	
    }
    ?>
    </table>
</body>
</html>