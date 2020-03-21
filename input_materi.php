<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> form input materi</title>
</head>

<body>
<h1>Input Materi</h1>

	<form action="input_materi.php" method="post" name="form1">
		<table>
			<tr>
				<td>ID MATERI</td>
				<td><input type="text" name="id_materi"></td>
			</tr>
			
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip"></td>
			</tr>
			
			<tr>
				<td>KELAS</td>
				
				<td><label for="kelas">Pilih Kelas:</label>
					  <select id="kelas" name="kelas">
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					  </select></td>
			</tr>
			
			<tr>
				<td>JURUSAN</td>
				<td><label for="jurusan">Pilih Jurusan:</label>
					  <select id="jurusan" name="jurusan">
						<option value="Ipa">Ipa</option>
						<option value="Ips">Ips</option>
					  </select></td></td>
			</tr>
			
			<tr>
				<td>MATERI</td>
				<td> <textarea name="materi" >Enter text here...</textarea> </td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name= "submit" value="simpan"></td>
			</tr>
		</table>
	</form>
	

	<?php
		if (isset($_POST['submit'])){
			$id_materi = $_POST['id_materi'];
			$nip = $_POST['nip'];
			$kelas = $_POST['kelas'];
			$jurusan = $_POST['jurusan'];
			$materi = $_POST['materi'];
			//echo $id_materi. " ". $nip. " ". $kelas. " "  .$materi ;
			include_once("config.php");
			$result = mysqli_query($conn, "INSERT INTO `tb_materi` (`id_materi`, `nip`, `kelas`, `jurusan`, `materi`) VALUES ('$id_materi', '$nip', '$kelas', '$jurusan', '$materi')");
				echo "berhasil. <a href='tampil_materi.php'>tampilkan</a>";
		}
		?>
  	 
</body>
</html>