
<?php
include_once("config.php");

if(isset($_POST['update']))
{
	$id_tugas = $_POST['id_tugas'];
	
	$nis= $_POST['nis'];
	$tgl_upload = $_POST['tgl_upload'];
	$file_tugas = $_POST['file_tugas'];
	
	$result = mysqli_query($conn, "UPDATE tb_tugas SET nis='$nis', tgl_tugas='$tgl_tugas', file_tugas='$file_tugas' WHERE id_tugas='id_tugas'");
	
	header("location: tampil_tugas.php");
}
?>

<?php
$id_tugas = $_GET['id_tugas'];

$result = mysqli_query($conn, "SELECT * FROM tb_tugas WHERE id_tugas='$id_tugas'");

while ($user_data = mysqli_fetch_array($result))
{
$nis = $user_data['nis'];
$tgl_upload = $user_data['tgl_upload'];
$file_tugas = $user_data['file_tugas'];
}
?>
<!doctype html>
<html>
<head>

<title>mengupdate data table tugas</title>
</head>

<body>
<p href="tampil_tugas.php"> HOME</p>

<h3 align="center">mengupdate data tugas</h3>

<form name="update_tugas" method="post" action="update_tugas.php">
<table width="25%" border="1">
<tr>
<td>NIS</td>
<td><input type="text" name="nis" value=<?php echo $nis; ?>></td>
</tr>

<tr>
	<td>Tanggal Upload</td>
	<td><input type="text" name="tgl_upload" value=<?php echo $tgl_upload; ?>></td>
</tr>

<tr>
	<td>File Tugas</td>
	<td><input type="file" name= "file_tugas" value=<?php echo $file_tugas; ?></td>
</tr>

<tr>
<td><input type="hidden" name="id_tugas" value=<?php echo $id_tugas;?>></td>
	<td><input type="submit" value="update" name="update"></td>
</tr>
</table>
</form>
</body>
</html>