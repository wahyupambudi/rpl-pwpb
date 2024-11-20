<?php 

if(isset($_SESSION['username'])) {
	echo "

 		<h1>Karena anda sudah login, maka Ini adalah halaman formulir</h1>

	 ";	
} else {
	echo "<h1 class='text-danger text-center'>Anda tidak memiliki akses untuk halaman ini</h1>";
}

?>