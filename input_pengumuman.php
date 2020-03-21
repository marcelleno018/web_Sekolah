<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form input pengumuman</title>
</head>

<body>
<h1>Input Pengumuman</h1>

	<form action="input_pengumuman.php" method="post">
		<table>
			<tr>
				<td>ID PENGUMUMAN</td>
				<td><input type="text" name="id_pengumuman"></td>
			</tr>
			
			<tr>
				<td>TANGGAL PENGUMUMAN</td>
				<td><input type="date" name="tgl_pengumuman"></td>
			</tr>
			
			<tr>
				<td>ISI PENGUMUMAN</td>
				<td> <textarea name="isi_pengumuman" >Enter text here...</textarea> </td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="simpan"></td>
			</tr>
		</table>
	</form>
	
	 
<?php 
	if(isset($_POST['submit'])){
		$id_pengumuman = $_POST['id_pengumuman'];
		$tgl_pengumuman = $_POST['tgl_pengumuman'];
		$isi_pengumuman = $_POST['isi_pengumuman'];
		
		include_once("config.php");
		$result = mysqli_query($conn, "INSERT INTO `tb_pengumuman` (`id_pengumuman`, `tgl_pengumuman`, `isi_pengumuman`) VALUES ('$id_pengumuman', '$tgl_pengumuman', '$isi_pengumuman')");
		
		echo "berhasil. <a href='tampil_pengumuman.php'>tampilkan</a>";
	}
		
	?>
	

</body>
</html>