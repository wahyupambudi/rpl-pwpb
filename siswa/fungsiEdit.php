<?php

include '../koneksi.php';
session_start(); // Mulai session

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];

$sql = "UPDATE tb_siswa SET nis='$nis' , nama='$nama' WHERE id='$id'";

if($koneksi -> query($sql) === true ) {
	$_SESSION['nis'] = $nis;
	echo 
	"
		<script> 
			alert('Sukses'); 
			window.location.href = '../siswa';
		</script> 
	";
} else {
	echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>