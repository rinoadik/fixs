<?php 
include "con_db.php";

//tambah data item grp
if(isset($_POST['proses_item_grp']) && $_POST['proses_item_grp']=='SIMPAN'){
	$id = $_POST['id'];
	$upline = $_POST['upline'];
	$level = $_POST['level'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$aktif = $_POST['aktif'];
	$crt_date = $_POST['crt_date'];
	$upd_date = $_POST['upd_date'];

	$sql = "INSERT INTO item_grp 
			(id,upline,level,nama,keterangan,aktif,crt_date,upd_date)
			VALUES 
			('$id','$upline','$level','$nama','$keterangan','$aktif','$crt_date','$upd_date')";

	if(!$res = $conn->query($sql))
		echo $sql;
	else
	echo header("Location: view_item_grp.php");
}

//update data item grp
if(isset($_POST['proses_grp_upd'])=='PERBAHARUI'){
	$id = $_POST['id'];
	$upline = $_POST['upline'];
	$level = $_POST['level'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$aktif = $_POST['aktif'];
	$crt_date = $_POST['crt_date'];
	$upd_date = $_POST['upd_date'];

	$sql = "UPDATE item_grp
			SET
				upline 		='$upline',
				level		='$level',
				nama		='$nama',
				keterangan	='$keterangan',
				crt_date	='$crt_date',
				upd_date	='$upd_date'
			WHERE id='$id'";

	if(!$res = $conn->query($sql))
		echo $sql;
	else 
	echo header("Location: view_item_grp.php");
}

//hapus data item grp
if(isset($_POST['proses_grp_dlt'])=='HAPUS'){
	
	$id = $_POST['id'];
	$sql = "DELETE FROM item_grp
			WHERE id='$id'";
			
	if(!$res = $conn->query($sql))
		echo $sql;
	else
	echo  "<script>alert('Data Berhasil Di Hapus!');
			window.location.href = 'view_item_grp.php';
			</script>";
}
?>