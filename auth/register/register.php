<?php 

// memanggil koneksi.php
include '../../koneksi.php';

// proses mendapatkan hasil dari inputan user
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO tb_user (username, email, password, role) VALUES ('$username', '$email', '$hashedPassword', 'siswa')";

// try {
// 	$data = $koneksi -> query($sql);	
// } catch (Exception $e) {
// 	   echo 'Message: ' .$e->getMessage();
// }


if ($koneksi -> query($sql) === true) {

	// dapatkan id terkahir dari user
	$getId = $koneksi->insert_id;

	// insert data ke dalam tb_siswa
	$sql = "INSERT INTO tb_siswa (nis, nama, id_user) VALUES ('', '$username', '$getId')";
	$koneksi->query($sql);

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