<?php 

// memanggil koneksi.php
include '../../koneksi.php';

// proses mendapatkan hasil dari inputan user
$username = $_POST['username'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO tb_user (username, email, password, role) VALUES ('$username', '$email', '$hashedPassword', 'siswa')";

// try {
// 	$data = $koneksi -> query($sql);	
// } catch (Exception $e) {
// 	   echo 'Message: ' .$e->getMessage();
// }


if ($koneksi -> query($sql) === true) {
	echo 
	"
		<script> 
			alert('Registrasi Berhasil'); 
			window.location.href = '../login';
		</script> 
	";
} else {
	echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>