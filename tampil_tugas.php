
<?php
include_once ("config.php");
$result = mysqli_query ($conn, "SELECT * from tb_tugas");
?>


<html>
	<head>
		<title>DATA TUGAS</title>
	</head>
	<body>
		<a href="input_tugas.php">Tambah</a>
		<table width='80%' border="1">
		<tr>
			<th> NO</th><th> ID TUGAS</th> <TH>NOMOR INDUK SISWA</TH> <th>TANGGAL UPLOAD</th> <th>FILE TUGAS</th> <th> UPDATE</th>
		</tr>
		<?php $no=0;
			while($user_data = mysqli_fetch_array($result))
			{  $no++;  
			echo "<tr>";
			echo "<td>".$no."</td>";
			 echo "<td>".$user_data['id_tugas']. "</td>";
			echo "<td>".$user_data['nis']. "</td>";
			echo "<td>".$user_data['tgl_upload']. "</td>";
			echo "<td>".$user_data['file_tugas']. "</td>";
			echo "<td> <a href= 'update_tugas.php?id_tugas=$user_data[id_tugas]'>EDIT</a>| <a href = 'hapus_tugas.php?id_tugas=$user_data[id_tugas]'> Delete</a></td></tr>";
			
			 }
			
			?>
		</table>
	</body>
</html>