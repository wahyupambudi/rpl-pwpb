<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="./">APLIKASI ABSENSI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/pwpb">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/pwpb/mapel">Mapel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/pwpb/?page=data">Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/pwpb/?page=kontak">Kontak</a>
        </li>
        <?php 
          if (isset($_SESSION['username'])) { ?>

              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/pwpb/absen">Absen</a>
              </li>

              <li class="nav-item">
               <a class="nav-link active text-white" aria-current="page" href="/pwpb/siswa">Profil<a>
              </li>
          
          <?php 
            } 
          ?>
      </ul>
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php 
          if (isset($_SESSION['username'])) {
            echo " 
          <li class='nav-item'>
            <a class='btn btn-md btn-danger' aria-current='page' href='/pwpb/auth/logout.php'>Logout</a>
          </li>

             ";
          } else {
            echo " 
          <li class='nav-item'>
            <a class='btn btn-md btn-light' aria-current='page' href='/pwpb/auth/login'>Login</a>
          </li>
             ";
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</nav>