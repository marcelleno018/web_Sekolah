
<?php
include_once ("config.php");
$result = mysqli_query ($conn, "SELECT * from tb_pengumuman");
?>


<html>
	<head>
		<title>DATA PENGUMUMAN</title>
	</head>
	<body>
		<a href="input_pengumuman.php">Tambah</a>
		<table width='80%' border="1">
		<tr>
			<th> ID PENGUMUMAN</th>  <th>TANGGAL PENGUMUMAN</th> <th>ISI PENGUMUMAN</th> <th> UPDATE</th>
		</tr>
		<?php $no=0;
			while($user_data = mysqli_fetch_array($result)) {  $no++;  
			echo "<tr>";
			echo "<td>$no</td>";
		   echo "<td>".$user_data['id_pengumuman']. "</td>";
			echo "<td>".$user_data['tgl_pengumuman']. "</td>";
			echo "<td>".$user_data['isi_pengumuman']. "</td>";
			echo "<td> <a href= 'update_pengumuman.php?id_pengumuman=$user_data[id_pengumuman]'>EDIT</a>| <a href = 'hapus_pengumuman.php?id_pengumuman=$user_data[id_pengumuman]'> Delete</a></td></tr>";
			
				
				}
			?>
			
		</table>
	</body>
</html>
