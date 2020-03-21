<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
//$nip = $_POST['nip'];
	
//	$nama_guru= $_POST['nama_guru'];
//	$mapel = $_POST['mapel'];
	
	
?>

<html>
<head>    
    <title>DATA MATERI</title>
</head>

<body>
<h1>Cari Materi</h1>

	<form action="cari_materi.php" method="post" name="form1">
		<table>
			
			<tr>
				<td>MATERI</td>
				<td> <textarea name="materi" >Enter text here...</textarea> </td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name= "submit" value="Cari"></td>
			</tr>
		</table>
	</form>
	

    <table width='80%' border=1>

    <tr>
       <th>id_materi</th> <th>NIP</th> <th>KELAS</th> <th>JURUSAN</th> <th>MATERI</th> <th>Update</th>
    </tr>
    <?php

		if (isset($_POST['submit'])){
		$materi = $_POST['materi'];
		$result = mysqli_query($conn, "SELECT * from tb_materi where materi ='$materi'");
				
		$no=0;
    while($user_data = mysqli_fetch_array($result)) {  $no++;       
        echo "<tr>";
		echo "<td>$no</td>";											 
		//echo "<td>".$user_data['id_materi']."</td>";
        echo "<td>".$user_data['nip']."</td>";
        echo "<td>".$user_data['kelas']."</td>";  
   	 	echo "<td>".$user_data['jurusan']."</td>";
		echo "<td>".$user_data['materi']."</td>";
        echo "</tr>";       
	
    }
		}
    ?>
    </table>
</body>
</html>