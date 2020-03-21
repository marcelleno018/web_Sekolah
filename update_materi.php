
<?php
include_once("config.php");

if(isset($_POST['update']))
{
	$id_materi = $_POST['id_materi'];
	
	$nip= $_POST['nip'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['jurusan'];
	$materi = $_POST['materi'];
	
	$result = mysqli_query($conn, "UPDATE tb_materi SET nip='$nip', kelas='$kelas', jurusan='$jurusan', materi='$materi' WHERE id_materi='$id_materi'");
	
	header("location: tampil_materi.php");
}
?>

<?php
$id_materi = $_GET['id_materi'];

$result = mysqli_query($conn, "SELECT * FROM tb_materi WHERE id_materi='$id_materi'");

while ($user_data = mysqli_fetch_array($result))
{
$nip = $user_data['nip'];
$kelas = $user_data['kelas'];
$jurusan = $user_data['jurusan'];
$materi =$user_data['materi'];
}
?>
<!doctype html>
<html>
<head>

<title>mengupdate data table materi</title>
</head>

<body>
<p href="tampil_materi.php"> HOME</p>

<h3 align="center">mengupdate data materi</h3>

<form name="update_materi" method="post" action="update_materi.php">
<table width="25%" border="1">
<tr>
<td>NIP</td>
<td><input type="text" name="nip" value=<?php echo $nip; ?>></td>
</tr>

<tr>
	<td><label for="kelas">Pilih Kelas:</label></td>
					<td> <select id="kelas" name="kelas">
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					  </select></td> 
</tr>

<tr>
	
	<td><label for="jurusan">Pilih Jurusan:</label></td>
					<td>  <select id="jurusan" name="jurusan">
						<option value="Ipa">Ipa</option>
						<option value="Ips">Ips</option>
					  </select></td>
</tr>

<tr>
	<td>MATERI</td>
	<td><input type="text" name="materi" value=<?php echo $materi ?></td>
</tr>

<tr>
<td><input type="hidden" name="id_materi" value=<?php echo $id_materi;?>></td>
	  
	<td><input type="submit" value="update" name="update"></td>
	
</tr>
</table>
</form>
</body>
</html>