<form action="/kelas/edit/<?= $getKelas['id_kelas'] ?>" method="POST">
    <input type="text" name="name" value="<?= $getKelas['nama_kelas'] ?>" class="form-control mb-2" required autofocus>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
    </div>
</form>