<?php
session_start();
include '../koneksi.php'; 

if(isset($_SESSION['role']) && $_SESSION['role'] === 'siswa') { ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>


    <?php include "../nav.php"; ?>

    <div class="container mt-2">
      <h3>Dashboard Siswa</h3>

      <?php 

        include "data.php";
        echo "<br>";
        
        if(isset($_GET['edit'])) {
          include 'edit.php';
        } 
      ?>
    </div>


    <?php include "../footer.php"; ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
} else { ?>
    <script> 
      alert('Anda tidak memiliki akses'); 
      window.location.href = '/pwpb';
    </script> 
<?php 
  }
?>


