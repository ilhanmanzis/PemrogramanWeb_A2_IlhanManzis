<div class="card shadow mb-4">
    <div class="card-body">
        <form action="" method="GET">
            <table class="table">
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><input type="text" name="nisn" id="nisn_siswa" placeholder="Masukan NISN Siswa" class="form-control <?= (validation_show_error('nisn')) ? 'is-invalid' : ''; ?>" value="<?= ($nisnSiswa) ? $nisnSiswa : set_value('nisn'); ?>">
                        <small class="text-danger">
                            <?= validation_show_error('nisn') ?>
                        </small>
                    </td>
                    <td><button type="submit" class="btn btn-primary">Search</button></td>
                </tr>
            </table>

        </form>
    </div>
</div>