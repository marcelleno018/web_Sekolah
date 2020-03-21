<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form input siswa</title>
</head>


<body>
<h1>INPUT SISWA</h1>

	<form action="input_siswa.php" method="post" >
		<table width="25%" border="0">
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis"></td>
			</tr>
			
			<tr>
				<td>NAMA SISWA</td>
				<td><input type="text" name="nama_siswa"></td>
			</tr>
			
			<tr>
				<td>KELAS</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			
			
			<tr>
				<td>JURUSAN</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="simpan"></td>
			</tr>
		</table>
	</form>


    <?php
	if (isset($_POST['submit'])){
		$nis = $_POST['nis'];
		$nama_siswa = $_POST['nama_siswa']; 
		$kelas = $_POST['kelas'];
		$jurusan = $_POST['jurusan'];
	
			include_once("config.php");
		
		//echo  $nis. " ".$nama_siswa. " " .$kelas. " "  . $jurusan; 

		$result = mysqli_query($conn, "INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `kelas`, `jurusan`) VALUES ('$nis', '$nama_siswa', '$kelas', '$jurusan');");
		echo  "berhasil. <a href= 'tampil_siswa.php'>tampilkan</a>";
	}
	?>
</body>
</html>


 