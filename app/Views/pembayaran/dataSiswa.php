<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Biodata Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <td>NISN</td>
                    <td><?= $dataSiswa['nisn'] ?></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><?= $dataSiswa['nama'] ?></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><?= $dataSiswa['nama_kelas'] ?></td>
                </tr>
                <tr>
                    <td>Tahun Angkatan</td>
                    <td><?= $dataSiswa['nama_angkatan'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>