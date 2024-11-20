<div class="row">
  <div class="col-8">
    <h3>Data Absensi</h3>
    <?php include 'data.php'; ?>
  </div>
  <div class="col">
    <div class="container sticky-top">
      <h3>Tambah Absen</h3>
      <form action="fungsiAdd.php" method="POST">
        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" value="<?= $_SESSION['nis'] ?>" name="nis" required hidden="hidden">
          <input type="text" class="form-control" id="nis" value="<?= $_SESSION['nis'] ?>" name="nis" required disabled>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" value="<?= $_SESSION['username'] ?>" name="nama" required hidden>
          <input type="text" class="form-control" id="nama" value="<?= $_SESSION['username'] ?>" name="nama" required disabled>
        </div>
        <div class="mb-3">
          <label for="mapel" class="form-label">Mata Pelajaran</label>
          <select id="mapel" name="mapel" class="form-select">
            <option selected disabled="">Data Mapel</option>
            <?php 
              $sql = "SELECT id FROM tb_matpel";
              $result = $koneksi->query($sql);
              while ($data = $result->fetch_assoc()) { ?>
                <option value="<?= $data['id'] ?>"><?= $data['id'] ?></option>
              <?php 
              }
            ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select id="status" name="status" class="form-select">
            <option selected disabled="">Status Kehadiran</option>
                <option value="H">Hadir</option>
                <option value="I">Izin</option>
                <option value="A">Alfa</option>
                <option value="D">Dispen</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="keterangan" class="form-label">Keterangan</label>
          <input type="text" class="form-control" id="keterangan" placeholder="keterangan" name="keterangan" required>
        </div>
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal" required>
        </div>
        
        <input type="submit" value="Simpan Absensi" class="btn btn-block btn-primary">
        <a href="/pwpb" class="btn btn-block btn-danger">Kembali</a>
      </form>
    </div>
  </div>
</div>
<br><br>