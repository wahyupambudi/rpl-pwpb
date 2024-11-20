<?php

include '../koneksi.php';

$id = $_POST['id'];
$mapel = $_POST['mapel'];

$sql = "UPDATE tb_matpel SET matpel='$mapel' WHERE id='$id'";

if($koneksi -> query($sql) === true ) {
	echo 
	"
		<script> 
			alert('Sukses'); 
			window.location.href = '../mapel';
		</script> 
	";
} else {
	echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>