<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $id = $_SESSION['id_user'];
    // ini untuk get semua data dari tb_matpel
    $sql = "SELECT * FROM tb_siswa WHERE id_user='$id'";
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
      <td><?= $data['nis'] ?></td>
      <td><?= $data['nama'] ?></td>
      <td>
        <a href="?edit=<?= $data['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
        
      </td>
    </tr>
    <?php } ?>

  </tbody>
</table>


