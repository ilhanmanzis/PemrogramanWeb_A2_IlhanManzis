<?php

namespace App\Controllers;

use App\Models\Pembayaran_model;
use App\Models\Siswa_model;


class Pembayaran extends BaseController
{
    protected $pembayaran;
    protected $siswa;
    public function __construct()
    {
        $this->pembayaran = new Pembayaran_model();
        $this->siswa = new Siswa_model();
        helper(['form']);
    }
    public function index()
    {
        $nisn = $this->request->getVar('nisn');

        if ($nisn) {
            if (!$this->validate([
                'nisn' => 'required|integer',
            ])) {
                return redirect()->to(base_url('pembayaran'))->withInput()->with('validation', $this->validator);
            }
            $dataSiswa = $this->siswa->getByNisn($nisn);
            if (!$dataSiswa) {
                $data = [
                    'title' => 'Pembayaran',
                    'nisnSiswa' => $nisn
                ];
                echo view('templates/header', $data);
                echo view('pembayaran/pembayaran', $data);
                echo view('pembayaran/dataKosong', $data);
                echo view('templates/footer');
            } else {
                $dataPembayaran = $this->pembayaran->search($dataSiswa['id_siswa']);
                $data = [
                    'title' => 'Pembayaran',
                    'dataSiswa' => $dataSiswa,
                    'dataPembayaran' => $dataPembayaran,
                    'nisnSiswa' => $nisn
                ];
                echo view('templates/header', $data);
                echo view('pembayaran/pembayaran', $data);
                echo view('pembayaran/dataSiswa', $data);
                echo view('pembayaran/dataPembayaran', $data);
                echo view('templates/footer');
            }
        } else {
            $data = [
                'title' => 'Pembayaran',
                'nisnSiswa' => ''
            ];
            echo view('templates/header', $data);
            echo view('pembayaran/pembayaran', $data);
            echo view('templates/footer');
        }
    }


    public function prosesTransaksi()
    {
        $nisn = $this->request->getGet('nisn');
        $dataSiswa = $this->siswa->getByNisn($nisn);
        if (!$dataSiswa) {
            return redirect()->to(base_url('pembayaran'));
        }

        $idPembayaran = $this->request->getGet('id');
        $dataPembayaran = $this->pembayaran->getById($idPembayaran);
        if (!$dataPembayaran) {
            return redirect()->to(base_url('pembayaran'));
        }

        if ($dataPembayaran['nobayar'] == '') {
            $tglbayar = date('Y-m-d');
            $nobayar = date('dmYHisis');

            $this->pembayaran->save([
                "id_pembayaran" => $idPembayaran,
                "nobayar" => $nobayar,
                "tglbayar" => $tglbayar,
                "ket" => "LUNAS",
            ]);
            return redirect()->to(base_url("pembayaran?nisn=$nisn"));
        } else {
            $this->pembayaran->save([
                "id_pembayaran" => $idPembayaran,
                "nobayar" => '',
                "tglbayar" => '',
                "ket" => "",
            ]);
            return redirect()->to(base_url("pembayaran?nisn=$nisn"));
        }
    }

    public function cetakSemuaTransaksi()
    {
        $nisn = $this->request->getGet('nisn');
        $dataSiswa = $this->siswa->getByNisn($nisn);
        if (!$dataSiswa) {
            return redirect()->to(base_url('pembayaran'));
        }
        $dataPembayaran = $this->pembayaran->searchCetak($dataSiswa['id_siswa']);
        if (!$dataPembayaran) {
            return redirect()->to(base_url('pembayaran'));
        }

        $data = [
            'dataSiswa' => $dataSiswa,
            'dataPembayaran' => $dataPembayaran,
        ];
        echo view('pembayaran/cetakSemuaTransaksi', $data);
    }

    public function cetakSlipTransaksi()
    {
        $nisn = $this->request->getGet('nisn');
        $dataSiswa = $this->siswa->getByNisn($nisn);
        if (!$dataSiswa) {
            return redirect()->to(base_url('pembayaran'));
        }
        $idPembayaran = $this->request->getGet('id');
        $dataPembayaran = $this->pembayaran->getById($idPembayaran);
        if (!$dataPembayaran) {
            return redirect()->to(base_url('pembayaran'));
        }

        $data = [
            'dataSiswa' => $dataSiswa,
            'dataPembayaran' => $dataPembayaran,
        ];

        echo view('pembayaran/cetakSlipTransaksi', $data);
    }
}
