<?php 
include "con_db.php";

//tambah data item
if(isset($_POST['proses_item']) && $_POST['proses_item']=='SIMPAN'){
	$id = $_POST['id'];
	$item_grp_id = $_POST['item_grp_id'];
	$barcode = $_POST['barcode'];
	$nama = $_POST['nama'];
	$satuan= $_POST['satuan_id'];
	$hpp = $_POST['hpp'];
	$aktif = $_POST['aktif'];
	$crt_date = $_POST['crt_date'];
	$upd_date = $_POST['upd_date'];

	$sql = "INSERT INTO item 
			(id,item_grp_id,barcode,nama,satuan_id,hpp,aktif,crt_date,upd_date)
			VALUES 
			('$id','$item_grp_id','$barcode','$nama','$satuan','$hpp','$aktif','$tgl','$upd_date')";

	if(!$res = $conn->query($sql))
		echo $sql;
	else
	echo header("Location: view_item.php");
}

//update data item
if(isset($_POST['proses_item_upd'])=='PERBAHARUI'){
	$id = $_POST['id'];
	$item = $_POST['item_grp_id'];
	$barcode = $_POST['barcode'];
	$item_grp_id = $_POST['item_grp_id'];
	$nama = $_POST['nama'];
	$satuan= $_POST['satuan_id'];
	$hpp = $_POST['hpp'];
	$aktif = $_POST['aktif'];

	$sql = "UPDATE item 
			SET
				id			='$id',
				item_grp_id ='$item',
				barcode		='$barcode',
				nama		='$nama',
				satuan_id	='$satuan',
				hpp			='$hpp',
				aktif		='$aktif'
			WHERE id='$id'";

	if(!$res = $conn->query($sql))
		echo $sql;
	else 
	echo header("Location: view_item.php");
}

//hapus data item
if(isset($_POST['proses_item_dlt'])=='HAPUS'){
	
	$id = $_POST['id'];
	$sql = "DELETE FROM item
			WHERE id='$id'";
			
	if(!$res = $conn->query($sql))
		echo $sql;
	else
	echo  "<script>alert('Data Berhasil Di Hapus!');
			window.location.href = 'view_item.php';
			</script>";
}
?>