<div class="card shadow">
    <div class="card-header">
        <table class="table mb-0" style="border-top: 0;" width="100%" cellspacing="0">
            <tr>
                <td width="85%">
                    <h6 class="m-0 font-weight-bold text-primary pt-2">Data Pembayaran</h6>
                </td>
                <td>
                    <a class='btn btn-success btn mb-0' href='<?= base_url() ?>cetaksemuatranskasi?nisn=<?= $dataSiswa['nisn'] ?>' target='_blank'>Cetak Semua</a>
                </td>
            </tr>
        </table>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>NO</td>
                        <th>Bulan</th>
                        <th>Jatuh Tempo</th>
                        <th>No Bayar</th>
                        <th>Tanggal Bayar</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dataPembayaran as $pembayaran) :
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pembayaran['bulan'] ?></td>
                            <td><?= $pembayaran['jatuhtempo'] ?></td>
                            <td><?= $pembayaran['nobayar'] ?></td>
                            <td><?= $pembayaran['tglbayar'] ?></td>
                            <td><?= $pembayaran['jumlah'] ?></td>
                            <td><?= $pembayaran['ket'] ?></td>
                            <td>
                                <?php if ($pembayaran['nobayar'] == '') { ?>
                                    <a class="btn btn-primary btn-sm" href="<?= base_url() ?>prosestransaksi?nisn=<?= $dataSiswa['nisn'] ?>&id=<?= $pembayaran['id_pembayaran'] ?>">Bayar</a>
                                <?php } else {
                                ?>
                                    <a class='btn btn-danger btn-sm mr-1' href='<?= base_url() ?>prosestransaksi?nisn=<?= $dataSiswa['nisn'] ?>&id=<?= $pembayaran['id_pembayaran'] ?>'>Batal</a>
                                    <a class='btn btn-success btn-sm' href='<?= base_url() ?>cetaksliptransaksi?nisn=<?= $dataSiswa['nisn'] ?>&id=<?= $pembayaran['id_pembayaran'] ?>' target='_blank'>Cetak</a>
                                <?php } ?>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>