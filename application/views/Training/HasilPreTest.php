<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= $title ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Karyawan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                <?php foreach ($datakaryawan as $k) : ?>
                <tr>
                    <th><?= $no++; ?></th>
                    <td><?= $k['nik']; ?></td>
                    <td><?= $k['nama_karyawan']; ?></td>
                    <td><?= $k['Status']; ?></td>
                    <td><?= $k['level']; ?></td>
                    <td>
                        <a href="" class="badge bg-warning">detail</a>
                        <a href="" class="badge bg-success">edit</a>
                        <a href="" class="badge bg-danger">delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>