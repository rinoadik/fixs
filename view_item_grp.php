<?php 
include "con_db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>item grp</title>
	<link rel="stylesheet" href="style.css">
</head>

<style>
   
</style>
<body>
<h2>Data Item grp</h2>
<a href="index.php"><input class="btn" type="submit" value="BACK"></a>
<a href="add_item_grp.php"><input class="btn" type="submit" value="TAMBAH"></a>
<br>
<?php
	$sql = "SELECT * FROM item_grp";
	$res = $conn->query($sql);
	//menampilakn jumlah hasil query
	$jml_data = $res->num_rows;
	echo "Ditemukan $jml_data data";
	echo "<table border='1' width='100%'>";
	echo "	<thead >
				<tr>
					<td >No.</td>
					<td >opsi</td>
					<td >id</td>
					<td >upline</td>
					<td >level</td>
					<td >nama</td>
					<td>keterangan</td>
					<td >aktif</td>
					<td >crt_date</td>
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
					<a href='detail_item_grp.php?id=".$rows['id']."'>detail</a>
				</td>
				<td>".$rows['id']."</td>
				<td>".$rows['upline']."</td>
				<td>".$rows['level']."</td>
				<td>".$rows['nama']."</td>
				<td>".$rows['keterangan']."</td>
				<td>".$rows['aktif']."</td>
				<td>".$rows['crt_date']."</td>
				<td>".$rows['upd_date']."</td>
				
			</tr>";
	}
	echo "	</tbody>
		</table>"
?>
</body>
</html>