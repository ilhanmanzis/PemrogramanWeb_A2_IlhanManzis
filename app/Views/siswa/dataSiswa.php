<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataSiswa as $row) : ?>
                        <tr>
                            <td><?= $row['nisn'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['nama_angkatan'] ?></td>
                            <td><?= $row['nama_jurusan'] ?></td>
                            <td><?= $row['nama_kelas'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>