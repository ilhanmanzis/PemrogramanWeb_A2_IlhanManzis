<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pembayaran</title>
    <style>
        body {
            font-family: arial;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body onload="window.print();">

    <h3 align="center"><b><br>LAPORAN PEMBAYARAN</b></h3>
    <br />
    <hr />
    TANGGAL <?= $awal ?> SAMPAI <?= $akhir ?>
    <br />
    <br>


    <table border="1" cellspacing="" cellpadding="4" width="100%">
        <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>NISN</th>
            <th>NAMA SISWA</th>
            <th>KELAS</th>
            <th>NO. Bayar</th>
            <th>PEMBAYARAN BULAN</th>
            <th>JUMLAH</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
        $no = 1;
        $total = 0;
        foreach ($dataLaporan as $laporan) :
        ?>
            <tr>
                <td align="center"><?= $no++ ?></td>
                <td align="center"><?= $laporan['tglbayar'] ?></td>
                <td align="center"><?= $laporan['nisn'] ?></td>
                <td align="center"><?= $laporan['nama'] ?></td>
                <td align="center"><?= $laporan['nama_kelas'] ?></td>
                <td align=""><?= $laporan['nobayar'] ?></td>
                <td align=""><?= $laporan['bulan'] ?></td>
                <td align="right"><?= $laporan['jumlah'] ?></td>
                <td align="center"><?= $laporan['ket'] ?></td>
            </tr>
        <?php
            $total += $laporan['jumlah'];
        endforeach;
        ?>
        <tr>
            <td colspan="6" align="right">TOTAL</td>
            <td align="right"><b><?= $total ?></b></td>
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