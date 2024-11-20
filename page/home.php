<?php

// Cek apakah session username sudah ada
if (isset($_SESSION['username'])) {?>
<div class='d-flex justify-content-center'>
	<h1 class='text-uppercase'>selamat datang <span class='text-danger'> <?= $_SESSION['username'] ?> </span> di aplikasi absensi!</h1>
</div>
<?php } else { ?>
<div class='d-flex justify-content-center'>
	<h1 class='text-uppercase'>selamat datang di aplikasi absensi!</h1>
</div>
<p class='text-center'>Untuk dapat mengakses aplikasi ini, silahkan registrasi jika belum memiliki akun. Dan silahkan login untuk masuk kedalam aplikasi.</p>
<div class='d-flex justify-content-center gap-3'>
	<a href='auth/register' class='btn btn-md btn-danger'>Register</a>
	<a href='auth/login' class='btn btn-md btn-primary'>Login</a>
</div>

<?php }
?>


