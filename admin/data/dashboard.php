<?php

$sqlAbsen = $koneksi->query("SELECT COUNT(id) as absen FROM tb_absensi");
$dataAbsen = $sqlAbsen->fetch_assoc();

$sqlUser = $koneksi->query("SELECT COUNT(id) as user FROM tb_user");
$dataUser = $sqlUser->fetch_assoc();

$sqlSiswa = $koneksi->query("SELECT COUNT(id) as siswa FROM tb_siswa");
$dataSiswa = $sqlSiswa->fetch_assoc();

$sqlMapel = $koneksi->query("SELECT COUNT(id) as mapel FROM tb_matpel");
$dataMapel = $sqlMapel->fetch_assoc();


// function hitungData($tabel) {
//     include "../koneksi.php";
//     $sql = "SELECT COUNT(id) as jumlah FROM $tabel";
//     $result = $koneksi->query($sql);
//     $data = $result->fetch_assoc();
//     return $data['jumlah'];
// }

// // Memanggil fungsi untuk setiap tabel
// $jumlahAbsen = hitungData('tb_absensi');
// $jumlahUser  = hitungData('tb_user');
// $jumlahSiswa = hitungData('tb_siswa');
// $jumlahMapel = hitungData('tb_matpel');

?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<h1 class="h3 mb-0 bg-primary p-3 text-white ">Selamat Datang Di Dashboard Admin 🥰😶‍🌫️</h1><br>

<!-- Content Row -->
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xm font-weight-bold text-primary text-uppercase mb-1">
                        Data Absensi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dataAbsen['absen'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xm font-weight-bold text-success text-uppercase mb-1">
                        Data User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dataUser['user'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xm font-weight-bold text-info text-uppercase mb-1">Data Siswa
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $dataSiswa['siswa'] ?></div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xm font-weight-bold text-danger text-uppercase mb-1">
                        Data Mapel</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dataMapel['mapel'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>