<?php 

// memanggil koneksi.php
include '../../koneksi.php';

session_start(); // Mulai session

// mendapatkan data dari method post yang di inputkan user
$username = $_POST['username'];
$password = $_POST['password'];

// lakukan pengecekan user, pada tb_user dimana username sama dengan yang di inputkan oleh user
$sql = "SELECT id, password, role FROM tb_user WHERE username='$username'";
// jalankan query nya
$result = $koneksi->query($sql);

// jika data ditemukan 1 data
if($result->num_rows == 1) {
	// simpan di dalam variabel $data
	$data = $result->fetch_assoc();
	// buat variabel passwordFromDB untuk menyimpan nilai password dari tb_user
	$passwordFromDB = $data['password'];

	// jika user ditemukan
	// lakukan verifikasi menggunakan password_verify
	if(password_verify($password, $passwordFromDB)) {
		// jika password benar maka login berhasil
		$_SESSION['username'] = $username; //buat session username dengan nilai username
		$_SESSION['id_user'] = $data['id']; // mendapatkan id user
		$_SESSION['role'] = $data['role']; // mendapatkan role user yang login

		// kondisi jika user adalah siswa atau user adalah admin
		if ($data['role'] === 'admin') {
			header("Location: /pwpb/admin"); //ini akan mengarah ke admin
		} else if ($data['role'] === 'siswa') {
			header("Location: ../../"); //ini akan mengarah ke halaman home
		}
	} else {
		echo "Password Salah";
	}
} else {
	echo 
	"
		<script> 
			alert('Akun Tidak Ditemukan!'); 
			window.location.href = '../login';
		</script> 
	";
}

$koneksi->close();

?>