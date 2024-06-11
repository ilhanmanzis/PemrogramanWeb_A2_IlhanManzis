<form action="<?= base_url() ?>angkatan/edit/<?= $getAngkatan['id_angkatan'] ?>" method="post">
    <input type="text" name="name" value="<?= $getAngkatan['nama_angkatan'] ?>" class="form-control mb-2" required>
    <input type="text" name="biaya" value="<?= $getAngkatan['biaya'] ?>" class="form-control mb-2" required>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
    </div>
</form>