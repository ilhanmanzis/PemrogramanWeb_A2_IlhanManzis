<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Pembayaran SPP</title>
    <style>
        body {
            font-family: arial;
        }

        /* .print{
            margin-top: 10px;
        }
        @media print {
            .print{
                display: none;
            }
        } */
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body onload="window.print();">

    <h3 align="center"><b><br>LAPORAN PEMBAYARAN</b></h3>
    <br />
    <hr />

    <table>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td> <?= $dataSiswa['nama'] ?></td>
        </tr>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td> <?= $dataSiswa['nisn'] ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td> <?= $dataSiswa['nama_kelas'] ?></td>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td>:</td>
            <td> <?= $dataSiswa['nama_angkatan'] ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td> <?= $dataSiswa['nama_jurusan'] ?></td>
        </tr>
    </table>
    <table border="1" cellspacing="" cellpadding="4" width="100%">
        <tr>
            <th>NO</th>
            <th>TANGGAL BAYAR</th>
            <th>NO. Bayar</th>
            <th>PEMBAYARAN BULAN</th>
            <th>JUMLAH</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
        $no = 1;
        $total = 0;
        foreach ($dataPembayaran as $pembayaran) :
        ?>
            <tr>
                <td align="center"><?= $no++ ?></td>
                <td align="center"><?= $pembayaran['tglbayar'] ?></td>
                <td align=""><?= $pembayaran['nobayar'] ?></td>
                <td align=""><?= $pembayaran['bulan'] ?></td>
                <td align="right">Rp. <?= $pembayaran['jumlah'] ?></td>
                <td align="center"><?= $pembayaran['ket'] ?></td>
            </tr>
        <?php
            $total += $pembayaran['jumlah'];
        endforeach; ?>
        <tr>
            <td colspan="3" align="right">TOTAL</td>
            <td align="right"><b>Rp. <?= $total ?></b></td>
            <td></td>
        </tr>

    </table>

    <table width="100%">
        <tr>
            <td></td>
            <td>
                <br>
                <p>Yogyakarta, <?= date('d/m/Y') ?></p></br>
                Operator,
                <br /><br /><br />
                <p>---------------------------------</p>
            </td>
            <td></td>
        </tr>

    </table>

</body>

</html>