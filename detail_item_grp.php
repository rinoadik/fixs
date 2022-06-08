<?php 
include "con_db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM item_grp WHERE id='$id'";
$res = $conn->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detil item grp</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Detil Data item grp</h2>
<a href="view_item_grp.php"><input class="btn" type="submit" value="BACK"></a>
<a href="view_item_grp.php"><input class="btn" type="submit" value="Lihat data"></a>

<br>
<form action="proc_item_grp.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>"><br>
	upline<br>
	<input type="text" name="upline" value="<?= $row['upline']?>"><br>
	level<br>
	<input type="text" name="level" value="<?= $row['level']?>"><br>
	Nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	keterangan<br>
	<input type="text" name="keterangan" value="<?= $row['keterangan']?>"><br>
	aktif<br>
	<input type="text" name="aktif" value="<?= $row['aktif']?>"><br>
	crd_date<br>
	<input type="text" name="crd_date" value="<?= $row['crt_date']?>"><br>
	upd_date<br>
	<input type="text" name="upd_date" value="<?= $row['upd_date']?>"><br>
	
	<input class="simpan" type="submit" name="proses_grp_upd" value="PERBAHARUI">
	<input class="btn2"  type="submit" name="proses_grp_dlt" value="HAPUS" onclick="return confirm('Yakin Menghapus Data Ini?')">

	</form>
</body>
</html>