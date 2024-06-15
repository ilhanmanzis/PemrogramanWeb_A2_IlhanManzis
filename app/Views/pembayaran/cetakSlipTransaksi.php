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
        <tr>
            <td align="center"><?= 1 ?></td>
            <td align="center"><?= $dataPembayaran['tglbayar'] ?></td>
            <td align=""><?= $dataPembayaran['nobayar'] ?></td>
            <td align=""><?= $dataPembayaran['bulan'] ?></td>
            <td align="right">Rp. <?= $dataPembayaran['jumlah'] ?></td>
            <td align="center"><?= $dataPembayaran['ket'] ?></td>
        </tr>

        <tr>
            <td colspan="4" align="right">TOTAL</td>
            <td align="right"><b>Rp. <?= $dataPembayaran['jumlah'] ?></b></td>
            <td></td>
        </tr>

    </table>

    <table width="100%">
        <tr>
            <td></td>
            <td>
                <br>
                <p>Adiwerna <?= date('d/m/Y') ?></p></br>
                Operator,
                <br /><br /><br />
                <p>---------------------------------</p>
            </td>
            <td></td>
        </tr>

    </table>

</body>

</html>