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
<h2>Tambah Data Item</h2>
<a href="view_item.php"><input class="btn" type="submit" value="BACK"></a>
<a href="view_item.php"><input class="btn" type="submit" value="Lihat data"></a>

<br>


<form action="proc.php" method="post">
	ID<br>
	<input class="" type="text" name="id"><br>
	Item_grp_id<br>
	<select name="item_grp_id">
		<?php 
			$sql_grp = "SELECT * FROM item_grp";
			$res_grp = $conn->query($sql_grp);

			while($grp = $res_grp->fetch_array(MYSQLI_BOTH)){
				if($grp['id'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$grp['id']."' $select> " .$grp['id']." - ".$grp['nama']."</option>";
			}
		?>
	</select><br>
	Barcode<br>
	<input type="text" name="barcode"><br>
	Nama<br>
	<input type="text" name="nama">
	<br>
	satuan_id<br>
	<select name="satuan_id">
		<?php 
			$sql_satuan = "SELECT * FROM satuan";
		
			$res_satuan = $conn->query($sql_satuan);

			while($satuan = $res_satuan->fetch_array(MYSQLI_BOTH)){
				if($satuan['id'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$satuan['id']."' $select> " .$satuan['id']."</option>";
			}
		?>
	</select>
	<br>
	hpp<br>
	<input type="text" name="hpp">
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
	upd_upd<br>
	<input type="text" name="upd_date">
	
	<br>
	<input class="simpan" type="submit" name="proses_item" value="SIMPAN">
</form>
</body>
</html>