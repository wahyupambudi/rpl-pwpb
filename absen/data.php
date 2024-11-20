<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Mapel</th>
      <th scope="col">Status</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $nis = $_SESSION['nis'];
    // ini untuk get semua data dari tb_matpel
    $sql = "SELECT * FROM tb_absensi WHERE nis='$nis'";
    $result = $koneksi->query($sql);

    // ini untuk nomor
    $no = 0;                                                                      

    // perulangan data dari tb_matpel
    while ($data = $result->fetch_assoc()) {
      $no++;
    ?>
    <tr>
      <td><?= $no ?></td>
      <td><?= $data['nis'] ?></td>
      <td><?= $data['nama'] ?></td>
      <td><?= $data['matpel'] ?></td>
      <td><?= $data['status'] ?></td>
      <td><?= $data['keterangan'] ?></td>
      <td><?= $data['tanggal'] ?></td>
    </tr>
    <?php } ?>

  </tbody>
</table>


