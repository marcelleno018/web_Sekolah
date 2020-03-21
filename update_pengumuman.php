
<?php
include_once("config.php");

if(isset($_POST['update']))
{
	$id_pengumuman = $_POST['id_pengumuman'];
	
	$tgl_pengumuman = $_POST['tgl_pengumuman'];
	$isi_pengumuman = $_POST['tgl_pengumuman'];
	$result = mysqli_query($conn, "UPDATE tb_pengumuman SET tgl_pengumuman='$tgl_pengumuman', isi_pengumuman='$isi_pengumuman' WHERE id_pengumuman='$id_pengumuman'");
	
	header("location: tampil_pengumuman.php");
}
?>

<?php
$id_pengumuman = $_GET['id_pengumuman'];

$result = mysqli_query($conn, "SELECT * FROM tb_pengumuman WHERE id_pengumuman='$id_pengumuman'");

while ($user_data = mysqli_fetch_array($result))
{
$tgl_pengumuman = $user_data['tgl_pengumuman'];
$isi_pengumuman =$user_data['isi_pengumuman'];
}
?>
<!doctype html>
<html>
<head>

<title>mengupdate data table pengumuman</title>
</head>

<body>
<p href="tampil_pengumuman.php"> HOME</p>

<h3 align="center">mengupdate data pengumuman</h3>

<form name="update_pengumuman" method="post" action="update_pengumuman.php">
<table width="25%" border="1">
<tr>
<td>TANGGAL PENGUMUMAN</td>
<td><input type="date" name="tgl_pengumuman" value=<?php echo $tgl_pengumuman; ?>></td>
</tr>

<tr>
	<td>ISI PENGUMUMAN</td>
	<td><textarea name="isi_pengumuman" >Enter text here...</textarea></td>
</tr>


<tr>
	<td><input type="hidden" name="id_pengumuman" value=<?php echo $id_pengumuman;?>></td>
	  
	<td><input type="submit" value="update" name="update"></td>
</tr>
</table>
</form>
</body>
</html>