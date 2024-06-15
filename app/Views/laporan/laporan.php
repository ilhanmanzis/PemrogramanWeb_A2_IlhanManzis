<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Cetak Laporan</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('cetaklaporan') ?>" method="post" target="_blank">
            <input type="date" name="awal" class="form-control mb-2">
            <input type="date" name="akhir" class="form-control mb-2">
            <button type="submit" name="cetak" class="btn btn-primary">Cetak</button>
        </form>
    </div>
</div>
</div>
</div>