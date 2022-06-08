<?php 
include "con_db.php";

$id = $_GET['id'];
$sqlsatuan = "SELECT * FROM satuan 
				WHERE id='$id'";
$res = $conn->query($sqlsatuan);
$row = $res->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ITEM - Detil</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Detil Data satuan</h2>
<a href="view_satuan.php"><input class="btn" type="submit" value="BACK"></a>
<a href="view_satuan.php"><input class="btn" type="submit" value="Lihat data"></a>

<br>
<form action="proc_satuan.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>"><br>
	nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	keterangan<br>
	<input type="text" name="keterangan" value="<?= $row['keterangan']?>"><br>
	aktif<br>
	<input type="text" name="aktif" value="<?= $row['aktif']?>">
	<br>
	crt_date<br>
	<input type="text" name="crt_date" value="<?= $row['crt_date']?>">
	<br>
	upd_date<br>
	<input type="text" name="upd_date" value="<?= $row['upd_date']?>">
	<br>

	<input class="simpan" type="submit" name="proses_satuan_upd" value="PERBAHARUI">
	<input class='btn2'  type='submit' name='proses_satuan_dlt' value='HAPUS' onclick='return confirm("Yakin Menghapus Data Ini?")'>
					
	</form>
</body>
</html>