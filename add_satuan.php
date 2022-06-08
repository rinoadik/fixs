<?php 
include "con_db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>satuan-add</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Tambah Data Satuan</h2>
<a href="view_satuan.php"><input class="btn" type="submit" value="BACK"></a>
<a href="view_satuan.php"><input class="btn" type="submit" value="Lihat data"></a>

<br>


<form action="proc_satuan.php" method="post">
	ID<br>
	<input class="" type="text" name="id"><br>
	nama<br>
	<input type="text" name="nama"><br>
	keterangan<br>
	<input type="text" name="keterangan">
	<br>
	Aktif<br>
	<select name="aktif">
            <option value="1">aktif</option>
            <option value="0">tidak aktif</option>
        </select>
	<br>
	crt<br>
	<input type="text" name="crt">
	<br>
	crt_date<br>
	<input type="text" name="crt_date">
	<br>
	upd<br>
	<input type="text" name="upd">
	<br>
	upd_upd<br>
	<input type="text" name="upd_date">
	
	<br>
	<input class="simpan" type="submit" name="proses_satuan" value="SIMPAN">
</form>
</body>
</html>