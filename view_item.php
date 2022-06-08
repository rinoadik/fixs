<?php 
include "con_db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mhs - List</title>
	<link rel="stylesheet" href="style.css">
</head>

<style>
   
</style>
<body>
<h2>Data Item</h2>
<a href="index.php"><input class="btn" type="submit" value="BACK"></a>
<a href="add_item.php"><input class="btn" type="submit" value="Tambah"></a>
<br>

<?php
	//$sql = "SELECT  M.*, P.id as p_id, P.nama as p_nama
	//		FROM mhs M 
	//		JOIN prodi P ON M.prodi_id=P.id ";
	$sql = "SELECT * FROM item";
	$res = $conn->query($sql);
	//menampilkan jumlah hasil query
	$jml_data = $res->num_rows;
	echo "Ditemukan $jml_data data";
	echo "<table border='1' width='100%'>";
	echo "	<thead >
				<tr>
					<td >No.</td>
					<td width='8%'>opsi</td>
					<td >id</td>
					<td >item_grp_id</td>
					<td >barcode</td>
					<td >nama</td>
					<td>satuan_id</td>
					<td >hpp</td>
					<td >aktif</td>
					<td >crt</td>
					<td >crt_date</td>
					<td >upd</td>
					<td >upd_date</td>
				</tr>
			</thead>
			<tbody>";
	$i = 0;
	while($rows = $res->fetch_array(MYSQLI_ASSOC)){
		$i++;
		echo "<tr>
				<td align='center'>$i</td>

				<td align='center'>
					<a href='detail_item.php?id=".$rows['id']."'>detail</a>
				</td>

				<td>".$rows['id']."</td>
				<td>".$rows['item_grp_id']."</td>
				<td>".$rows['barcode']."</td>
				<td>".$rows['nama']."</td>
				<td>".$rows['satuan_id']."</td>
				<td>".$rows['hpp']."</td>
				<td>".$rows['aktif']."</td>
				<td>".$rows['crt']."</td>
				<td>".$rows['crt_date']."</td>
				<td>".$rows['upd']."</td>
				<td>".$rows['upd_date']."</td>
			</tr>";
	}
	echo "	</tbody>
		</table>"
?>
</body>
</html>