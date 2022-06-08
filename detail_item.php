<?php 
include "con_db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM item WHERE id='$id'";
$res = $conn->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ITEM - Detil</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Detil Data item</h2>
<a href="view_item.php"><input class="btn" type="submit" value="BACK"></a>
<a href="view_item.php"><input class="btn" type="submit" value="Lihat data"></a>

<br>
<form action="proc.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>"><br>
	Item grp id<br>
	<input type="text" name="item_grp_id" value="<?= $row['item_grp_id']?>"><br>
	Barcode<br>
	<input type="text" name="barcode" value="<?= $row['barcode']?>"><br>
	Nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	Satuan<br>
	<input type="text" name="satuan_id" value="<?= $row['satuan_id']?>">
	<br>hpp<br>
	<input type="text" name="hpp" value="<?= $row['hpp']?>"><br>
	aktif<br>
	<input type="text" name="aktif" value="<?= $row['aktif']?>"><br>
	
	<input class="simpan" type="submit" name="proses_item_upd" value="PERBAHARUI">
	<input class='btn2'  type='submit' name='proses_item_dlt' value='HAPUS' onclick='return confirm("Yakin Menghapus Data Ini?")'>
					
	</form>
</body>
</html>