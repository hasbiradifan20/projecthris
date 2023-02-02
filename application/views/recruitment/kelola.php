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
                    <th>Nama Pekerjaan</th>
                    <th>Kualifikasi</th>
                    <th>Tanggal Berakhir</th>
                    <th>foto</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($kelolapekerjaan as $k) : ?>
                    <tr>
                        <th><?= $no++; ?></th>
                        <td><?= $k['nama_pekerjaan']; ?></td>
                        <td><?= $k['kualifikasi']; ?></td>
                        <td><?= $k['tanggal_berakhir']; ?></td>
                        <td><?= $k['img']; ?></td>
                        <td>
                            <a href="" class="badge bg-warning">detail</a>
                            <a href="" class="badge bg-success">edit</a>
                            <a href="<?= base_url() ?>recruitment/kelola/hapus/<?= $k['id']  ?>" class="badge bg-danger">delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>