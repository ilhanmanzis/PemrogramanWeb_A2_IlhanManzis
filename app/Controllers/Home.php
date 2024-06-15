<?php

namespace App\Controllers;

use App\Models\Pembayaran_model;

class Home extends BaseController
{
    protected $pembayaran;

    public function __construct()
    {
        $this->pembayaran = new Pembayaran_model();
    }
    public function index()
    {
        $dataPembayaran = $this->pembayaran->getLunas();
        $totalTransaksi = count($dataPembayaran);
        $totalUang = 0;
        foreach ($dataPembayaran as $pembayaran) :
            $totalUang += $pembayaran['jumlah'];
        endforeach;
        $data = [
            'title' => 'Dasboard',
            'totalTransaksi' => $totalTransaksi,
            'totalUang' => $totalUang
        ];
        echo view('templates/header', $data);
        echo view('dashboard/index', $data);
        echo view('templates/footer');
    }
}
