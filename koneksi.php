<?php

     $koneksi = mysqli_connect("localhost","root","","db_12_rpl");
     if(!$koneksi){
     	 die("koreksi gagal" . mysqli_connect_error());
     }

?>