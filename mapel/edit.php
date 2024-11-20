<?php 

if(isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $sql = "SELECT * FROM tb_matpel WHERE id='$id'";
  $result = $koneksi->query($sql);
  $data = $result->fetch_assoc();
}

?>

<form action="fungsiEdit.php" method="POST">
  <h3>Update Mata Pelajaran</h3>
  <div class="form-group">
    <label for="id">ID</label>
    <input type="text" class="form-control" id="id" name="id" placeholder="id mapel" value="<?= $data['id'] ?>" hidden>
    <input type="text" class="form-control" id="id" name="id" placeholder="id mapel" value="<?= $data['id'] ?>" disabled>
  </div>
  <br>
  <div class="form-group">
    <label for="nama-mapel">Nama Mata Pelajaran</label>
    <input type="text" class="form-control" id="nama-mapel" name="mapel" placeholder="nama mapel" value="<?= $data['matpel'] ?>">
  </div>
  <br>
  <input type="submit" value="Update Mapel" class="btn btn-block btn-primary">
</form>