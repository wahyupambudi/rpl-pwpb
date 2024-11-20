<?php 

if(isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $sql = "SELECT * FROM tb_siswa WHERE id='$id'";
  $result = $koneksi->query($sql);
  $data = $result->fetch_assoc();
}

?>

<form action="fungsiEdit.php" method="POST">
  <h3>Ubah Data Siswa</h3>
  <div class="form-group">
    <label for="id">ID</label>
    <input type="text" class="form-control" id="id" name="id" placeholder="id mapel" value="<?= $data['id'] ?>" hidden>
    <input type="text" class="form-control" id="id" name="id" placeholder="id mapel" value="<?= $data['id'] ?>" disabled>
  </div>
  <div class="form-group">
    <label for="nis">NIS</label>
    <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS" value="<?= $data['nis'] ?>">
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="<?= $data['nama'] ?>">
  </div>
  <br>
  <input type="submit" value="Update Siswa" class="btn btn-block btn-primary">
</form>