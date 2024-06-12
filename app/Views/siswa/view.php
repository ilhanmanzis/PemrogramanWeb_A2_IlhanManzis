<form action="<?= base_url() ?>siswa/edit/<?= $getSiswa['id_siswa'] ?>" method="POST">
    <input type="text" name="nisn" placeholder="nisn Siswa" class="form-control mb-2" required value="<?= $getSiswa['nisn'] ?>">
    <input type="text" name="name" placeholder="Nama Siswa" class="form-control mb-2" required value="<?= $getSiswa['nama'] ?>">
    <select name="angkatan" class="form-control mb-2">
        <option selected="">-Pilih Angkatan-</option>
        <?php foreach ($getAngkatan as $Angkatan) :
            $selected = ($getSiswa['angkatan'] == $Angkatan['id_angkatan']) ? 'selected' : '';
        ?>
            <option value="<?= $Angkatan['id_angkatan'] ?>" <?= $selected ?>><?= $Angkatan['nama_angkatan'] ?></option>
        <?php endforeach; ?>
    </select>
    <select name="jurusan" class="form-control mb-2">
        <option selected="">-Pilih Jurusan-</option>
        <?php foreach ($getJurusan as $Jurusan) :
            $selected = ($getSiswa['jurusan'] == $Jurusan['id_jurusan']) ? 'selected' : '';
        ?>
            <option value="<?= $Jurusan['id_jurusan'] ?>" <?= $selected ?>><?= $Jurusan['nama_jurusan'] ?></option>
        <?php endforeach; ?>
    </select>
    <select name="kelas" class="form-control mb-2">
        <option selected="">-Pilih Kelas-</option>
        <?php foreach ($getKelas as $Kelas) :
            $selected = ($getSiswa['kelas'] == $Kelas['id_kelas']) ? 'selected' : '';
        ?>
            <option value="<?= $Kelas['id_kelas'] ?>" <?= $selected ?>><?= $Kelas['nama_kelas'] ?></option>
        <?php endforeach; ?>
    </select>
    <textarea name="alamat" class="form-control mb-2" placeholder="Alamat Siswa"><?= $getSiswa['alamat'] ?></textarea>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>