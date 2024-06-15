<?php

namespace App\Controllers;

use App\Models\Pembayaran_model;

class Laporan extends BaseController
{
    protected $pembayaran;

    public function __construct()
    {
        $this->pembayaran = new Pembayaran_model();
    }
    public function index()
    {
        $data = [
            'title' => 'Laporan',
        ];
        echo view('templates/header', $data);
        echo view('laporan/laporan', $data);
        echo view('templates/footer');
    }

    public function cetakLaporan()
    {
        $awal = $this->request->getVar('awal');
        $akhir = $this->request->getVar('akhir');

        $dataLaporan = $this->pembayaran->getLaporan($awal, $akhir);

        $data = [
            'dataLaporan' => $dataLaporan,
            'awal' => $awal,
            'akhir' => $akhir
        ];

        echo view('laporan/cetakLaporan', $data);
    }
}
