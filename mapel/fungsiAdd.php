<?php

include '../koneksi.php';

$id = $_POST['id'];
$mapel = $_POST['mapel'];

$sql = "INSERT INTO tb_matpel (id, matpel) VALUES ('$id' ,'$mapel')";

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