<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>input form tugas</title>
</head>

<body>
<h1>INPUT TUGAS</h1>

	<form action="input_tugas.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>NIS</td>
			<td><input type="text" name="nis"></td>
		</tr>
		
		<tr>
			<td>TANGGAL UPLOAD</td>
			<td><input type="date" name="tgl_tugas"></td>
		</tr>
		
		<tr>
			<td>FILE TUGAS</td>
			<td><input type="file" name="file_tugas"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="simpan"></td>
		</tr>
	</table>
	
</form>

<?php 
	if(isset($_POST['submit'])){
		
		$nis = $_POST['nis'];
		$tgl_tugas= $_POST['tgl_tugas'];
		
		$file_tugas= $_FILES['file_tugas']['name'];
		
		$file_tmp = $_FILES['file_tugas']['tmp_name'];
		move_uploaded_file($file_tmp, 'file/'.$file_tugas);

	//echo $nis ."-". $tgl_tugas ."-". $file_upload;
	include_once("config.php");
		$result = mysqli_query($conn, "INSERT INTO `tb_tugas` (`id_tugas`, `nis`, `tgl_upload`, `file_tugas`) VALUES (NULL, '$nis', '$tgl_tugas', '$file_tugas')");
		
	echo "berhasil. <a href='tampil_tugas.php'>tampilkan</a>";	
	}

	?>
</body>
</html>