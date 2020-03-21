
<?php
include_once("config.php");

if(isset($_POST['update']))
{
	$nis = $_POST['nis'];
	
	$nama_siswa = $_POST['nama_siswa'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['jurusan'];
	$result = mysqli_query($conn, "UPDATE tb_siswa SET nama_siswa='$nama_siswa', kelas='$kelas', jurusan='$jurusan' WHERE nis='$nis'");
	
	header("location: tampil_siswa.php");
}
?>

<?php
$nis = $_GET['nis'];

$result = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE nis='$nis'");

while ($user_data = mysqli_fetch_array($result))
{
$nama_siswa = $user_data['nama_siswa'];
$kelas =$user_data['kelas'];
$jurusan =$user_data['jurusan'];
}
?>
<!doctype html>
<html>
<head>

<title>mengupdate data table siswa</title>
</head>

<body>
<p href="tampil_siswa.php"> HOME</p>

<h3 align="center">mengupdate data siswa</h3>

<form name="update_siswa" method="post" action="update_siswa.php">
<table width="25%" border="1">
<tr>
<td>NAMA SISWA</td>
<td><input type="text" name="nama_siswa" value=<?php echo $nama_siswa; ?>></td>
</tr>

<tr>
	<td>KELAS</td>
	<td><input type="text" name="kelas" value=<?php echo $kelas; ?>></td>
</tr>


<tr>
	<td>JURUSAN</td>
	<td><input type="text" name="jurusan" value=<?php echo $jurusan; ?>></td>
</tr>

<tr>
	<td><input type="hidden" name="nis" value=<?php echo $nis;?>></td>
	<td><input type="submit" value="update" name="update"></td>
</tr>
</table>
</form>
</body>
</html>