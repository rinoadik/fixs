<?php 
include "con_db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>add - item</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Tambah Data Item grp</h2>
<a href="view_item.php"><input class="btn" type="submit" value="BACK"></a>
<a href="view_item.php"><input class="btn" type="submit" value="Lihat data"></a>

<br>
<form action="proc_item_grp.php" method="post">
	ID<br>
	<input class="" type="text" name="id"><br>
	upline<br>
	<input class="" type="text" name="upline">
	<br>
	level<br>
	<input type="text" name="level"><br>
	Nama<br>
	<input type="text" name="nama">
	<br>
	keterangan<br>
	<input type="text" name="keterangan">
	<br>
	Aktif<br>
	<select name="aktif">
            <option value="1">aktif</option>
            <option value="0">tidak aktif</option>
        </select>
	<br>
	crt_date<br>
	<input type="text" name="crt_date">
	<br>
	upd_date<br>
	<input type="text" name="upd_date">
	<br>
	<input class="simpan" type="submit" name="proses_item_grp" value="SIMPAN">
</form>
</body>
</html>