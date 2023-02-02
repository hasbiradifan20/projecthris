<br>
<div class="container-fluid">

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
                        <th>Nama Posisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($dataposisi as $p) : ?>
                    <tr>
                        <th><?= $no++; ?></th>
                        <td><?= $p['nama_posisi']; ?></td>
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
</div>