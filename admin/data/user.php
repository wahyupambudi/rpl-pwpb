<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data User</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                // ini untuk get semua data dari tb_matpel
                $sql = "SELECT username, email, role FROM tb_user";
                $result = $koneksi->query($sql);

                // ini untuk nomor
                $no = 0;

                // perulangan data dari tb_matpel
                while ($data = $result->fetch_assoc()) {
                  $no++;
                ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $data['username'] ?></td>
                  <td><?= $data['email'] ?></td>
                  <td><?= $data['role'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>