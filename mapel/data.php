<?php 

// fungsi untuk delete
// mendapatkan method get dari button
  if(isset($_GET['del'])) {
    // mendapatkan id dari parameter method get
    $id = $_GET['del'];
    // lakukan query sql
    $sql = "DELETE FROM tb_matpel WHERE id='$id' ";
    if($koneksi->query($sql) === true) {
      echo 
    "
      <script> 
        window.location.href = '../mapel';
      </script> 
    ";
    }
  }
?>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Mata Pelajaran</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    // ini untuk get semua data dari tb_matpel
    $sql = "SELECT * FROM tb_matpel";
    $result = $koneksi->query($sql);

    // ini untuk nomor
    $no = 0;

    // perulangan data dari tb_matpel
    while ($data = $result->fetch_assoc()) {
      $no++;
    ?>
    <tr>
      <td><?= $no ?></td>
      <td><?= $data['id'] ?></td>
      <td><?= $data['matpel'] ?></td>
      <td>
        <a href="?edit=<?= $data['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="?del=<?= $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus Data?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>

  </tbody>
</table>


