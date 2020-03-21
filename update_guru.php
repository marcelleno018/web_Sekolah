
<?php
include_once("config.php");

if(isset($_POST['update']))
{
	$nip = $_POST['nip'];
	
	$nama_guru= $_POST['nama_guru'];
	$mapel = $_POST['mapel'];
	//echo $nama_guru. " " . $mapel. " " . $nip;
	$result = mysqli_query($conn, "UPDATE tb_guru SET nama_guru='$nama_guru', mapel='$mapel' WHERE nip='$nip'");
	
	header("location: tampil_guru.php");
}
?>

<?php
$nip = $_GET['nip'];
//echo $nip;

$result = mysqli_query($conn, "SELECT * FROM tb_guru WHERE nip='$nip'");

while ($user_data = mysqli_fetch_array($result))
{

$nama_guru = $user_data['nama_guru'];
$mapel = $user_data['mapel'];
}

?>
<!doctype html>
<html>
<head>

<title>mengupdate data table guru</title>
</head>

<body>
<p href="tampil_guru.php"> HOME</p>

<h3 align="center">mengupdate data guru</h3>

<form name="update_guru" method="post" action="update_guru.php">
<table width="25%" border="1">

<tr>
<td>NAMA GURU</td>
<td><input type="text" name="nama_guru" value=<?php echo $nama_guru; ?>></td>
</tr>

<tr>
	<td>Mata Pelajaran</td>
	<td><input type="text" name="mapel" value=<?php echo $mapel; ?>></td>
</tr>

<tr>
	  <td><input type="hidden" name="nip" value=<?php echo $nip;?>></td>
	  
	<td><input type="submit" value="update" name="update"></td>
</tr>
</table>
</form>
</body>
</html>