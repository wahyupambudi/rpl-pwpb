<?php 

include '../koneksi.php';

$nis = $_POST['nis'];
$username = $_POST['nama'];
$mapel = $_POST['mapel'];
$status = $_POST['status'];
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];
$createdAt = date("Y-m-d");

$sql = "INSERT INTO tb_absensi (nis, nama, matpel, status, keterangan, tanggal, createdAt) VALUES ('$nis', '$username', '$mapel', '$status', '$keterangan', '$tanggal', '$createdAt')";

if($koneksi -> query($sql) === true ) {
	echo 
	"
		<script> 
			alert('Sukses'); 
			window.location.href = '../absen';
		</script> 
	";
} else {
	echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();

?>