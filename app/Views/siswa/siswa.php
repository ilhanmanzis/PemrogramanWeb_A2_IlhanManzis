<!-- button triger -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>

<?php
if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
        </button>
    </div>;
<?php endif;
?>

<!-- button triger -->
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
                        <th>Aksi</th>
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
                            <td>
                                <a href="javascript:void(0);" data="<?= $row['id_siswa'] ?>" class="view_data btn btn-sm btn-danger item-delete">Delete</a>

                                <a href="#" class="view_data btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#myModal" data-id="<?= $row['id_siswa'] ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<!-- Modal -->


<!-- create data siswa -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>siswa/create" method="POST">
                    <input type="text" name="nisn" placeholder="nisn Siswa" class="form-control mb-2 <?= (validation_show_error('nisn')) ? 'is-invalid' : ''; ?>" required value="<?= set_value('nisn'); ?>">
                    <small class="text-danger invalid-feedback">
                        <?= validation_show_error('nisn') ?>
                    </small>
                    <input type="text" name="name" placeholder="Nama Siswa" class="form-control mb-2 <?= (validation_show_error('name')) ? 'is-invalid' : ''; ?>" value="<?= set_value('name'); ?>">
                    <small class="text-danger invalid-feedback">
                        <?= validation_show_error('name') ?>
                    </small>
                    <select name="angkatan" class="form-control mb-2 <?= (validation_show_error('angkatan')) ? 'is-invalid' : ''; ?>">
                        <option selected="">-Pilih Angkatan-</option>
                        <?php foreach ($dataAngkatan as $Angkatan) : ?>
                            <option value="<?= $Angkatan['id_angkatan'] ?>"><?= $Angkatan['nama_angkatan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger invalid-feedback">
                        <?= validation_show_error('angkatan') ?>
                    </small>
                    <select name="jurusan" class="form-control mb-2 <?= (validation_show_error('jurusan')) ? 'is-invalid' : ''; ?>">
                        <option selected="">-Pilih Jurusan-</option>
                        <?php foreach ($dataJurusan as $Jurusan) : ?>
                            <option value="<?= $Jurusan['id_jurusan'] ?>"><?= $Jurusan['nama_jurusan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger invalid-feedback">
                        <?= validation_show_error('jurusan') ?>
                    </small>
                    <select name="kelas" class="form-control mb-2 <?= (validation_show_error('kelas')) ? 'is-invalid' : ''; ?>">
                        <option selected="">-Pilih Kelas-</option>
                        <?php foreach ($dataKelas as $Kelas) : ?>
                            <option value="<?= $Kelas['id_kelas'] ?>"><?= $Kelas['nama_kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger invalid-feedback">
                        <?= validation_show_error('kelas') ?>
                    </small>
                    <textarea name="alamat" class="form-control mb-2 <?= (validation_show_error('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Alamat Siswa"><?= set_value('alamat'); ?></textarea>
                    <small class="text-danger invalid-feedback">
                        <?= validation_show_error('alamat') ?>
                    </small>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="Submit" name="simpan" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    <?php if (session()->getFlashdata('showModal')) : ?>
        var showModal = "<?= session()->getFlashdata('showModal') ?>";
        $('#' + showModal).modal('show');
        $('#btn-closee').click(function() {
            $('#' + showModal).modal('hide');
        });
    <?php endif; ?>
</script>

<!-- end create data siswa -->



<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close">x</button>
            </div>
            <div class="modal-body" id="datasiswa">

            </div>
        </div>
    </div>
</div>


<script>
    $('.view_data').click(function() {
        var id_siswa = $(this).data('id');
        $.ajax({
            url: `<?= base_url() ?>siswa/editsiswa/${id_siswa}`,
            method: 'get',
            success: function(data) {
                $('#datasiswa').html(data);
                $('#myModal').modal('show');
            }
        });
    });
</script>




<!-- Modal dialog hapus data-->


<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                Anda ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#dataTable').on('click', '.item-delete', function() {
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        $('#btdelete').off('click').on('click', function() {
            $.ajax({
                url: `<?= base_url() ?>siswa/delete/${id}`,
                method: 'delete',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        });
    });
</script>