
<?php
include_once ("config.php");
$result = mysqli_query ($conn, "SELECT * from tb_siswa");
?>


<html>
	<head>
		<title>DATA SISWA</title>
	</head>
	<body>
		<a href="input_siswa.php">Tambah</a>
		<table width='80%' border="1">
		<tr>
			<th> NIS</th>  <th>NAMA SISWA</th> <th>KELAS</th> <th> JURUSAN</th> <th>UPDATE</th>
		</tr>
		

		
		<?php $no=0;
			while($user_data = mysqli_fetch_array($result)) 
			{  $no++; 
			echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>".$user_data['nama_siswa']. "</td>";
			echo "<td>".$user_data['kelas']. "</td>";
			echo "<td>".$user_data['jurusan']. "</td>";
			echo "<td> <a href= 'update_siswa.php?nis=$user_data[nis]'>EDIT</a>| <a href = 'hapus_siswa.php?nis=$user_data[nis]'> Delete</a></td></tr>";
			
			}
			?>
			
		</table>
	</body>