<?php 
include "con_db.php";

//tambah data satuan
if(isset($_POST['proses_satuan']) && $_POST['proses_satuan']=='SIMPAN'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$aktif = $_POST['aktif'];
	$crt= $_POST['crt'];
	$crt_date = $_POST['crt_date'];
	$upd= $_POST['upd'];
	$upd_date = $_POST['upd_date'];

	$sql = "INSERT INTO satuan 
			(id,nama,keterangan,aktif,crt,crt_date,upd,upd_date)
			VALUES 
			('$id','$nama','$keterangan','$aktif','$crt','$crt_date','$upd','$upd_date')";

	if(!$res = $conn->query($sql))
		echo $sql;
	else
	echo header("Location: view_satuan.php");
}

//update data satuan
if(isset($_POST['proses_satuan_upd']) && $_POST['proses_satuan_upd']=='PERBAHARUI'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$aktif = $_POST['aktif'];
	$crt_date = $_POST['crt_date'];
	$upd_date = $_POST['upd_date'];
	

	$sql = "UPDATE satuan
			SET
				nama		='$nama',
				keterangan	='$keterangan',
				aktif		='$aktif',
				crt_date	='$crt_date',
				upd_date	='$upd_date'
			WHERE id='$id'";

	if(!$res = $conn->query($sql))
		echo $sql;
	else 
	echo header("Location: view_satuan.php");
}

//hapus data item
if(isset($_POST['proses_satuan_dlt'])=='HAPUS'){
	
	$id = $_POST['id'];
	$sql = "DELETE FROM satuan
			WHERE id='$id'";
			
	if(!$res = $conn->query($sql))
		echo $sql;
	else
	echo  "<script>alert('Data Berhasil Di Hapus!');
			window.location.href = 'view_satuan.php';
			</script>";
}
?>