<?php

namespace App\Controllers;

use App\Models\Siswa_model;
use App\Models\Angkatan_model;
use App\Models\Jurusan_model;
use App\Models\Kelas_model;
use App\Models\Pembayaran_model;

class Siswa extends BaseController
{
    protected $siswa;
    protected $angkatan;
    protected $jurusan;
    protected $kelas;
    protected $pembayaran;

    public function __construct()
    {
        $this->siswa = new Siswa_model();
        $this->angkatan = new Angkatan_model();
        $this->jurusan  = new Jurusan_model();
        $this->kelas = new Kelas_model();
        $this->pembayaran = new Pembayaran_model();
        helper(['form', 'url']);
    }
    public function index()
    {
        $data = [
            'title' => 'Siswa',
            'dataSiswa' => $this->siswa->getAll(),
            'dataAngkatan' => $this->angkatan->getAll(),
            'dataJurusan' => $this->jurusan->getAll(),
            'dataKelas' => $this->kelas->getAll(),
            'validation' => \Config\Services::validation(),
            'showModal' => session()->getFlashdata('showModal'),
            'editModal' => session()->getFlashdata('editModal')
        ];
        echo view('templates/header', $data);
        echo view('siswa/siswa', $data);
        echo view('templates/footer');
    }

    public function save()
    {
        if (!$this->validate([
            'nisn' => 'required|integer|is_unique[siswa.nisn]',
            'name' => 'required',
            'angkatan' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'alamat' => 'required'
        ])) {
            session()->setFlashdata('showModal', 'exampleModal');
            return redirect()->to(base_url('siswa'))->withInput()->with('validation', $this->validator);
        }

        $nama = strtoupper($this->request->getVar('name'));

        //menyimpan data siswa
        $this->siswa->save([
            "nisn" => $this->request->getVar('nisn'),
            "nama" => $nama,
            "angkatan" => $this->request->getVar('angkatan'),
            "jurusan" => $this->request->getVar('jurusan'),
            "kelas" => $this->request->getVar('kelas'),
            "alamat" => $this->request->getVar('alamat'),
        ]);

        $dataSiswa = $this->siswa->getByNisn($this->request->getVar('nisn'));
        //menyimpan data pembayaran siswa
        if ($dataSiswa) {
            $bulanIndo = [
                '01' => 'Januari',
                '02' => 'Februari',
                '03' => 'Maret',
                '04' => 'April',
                '05' => 'Mei',
                '06' => 'Juni',
                '07' => 'Juli',
                '08' => 'Agustus',
                '09' => 'September',
                '10' => 'Oktober',
                '11' => 'November',
                '12' => 'Desember'
            ];
            $awaltempo = date('Y-m-d');

            for ($i = 0; $i < 36; $i++) {
                $jatuhtempo = date("Y-m-d", strtotime("+$i month", strtotime($awaltempo)));

                $bulan = $bulanIndo[date('m', strtotime($jatuhtempo))] . "  " . date('Y', strtotime($jatuhtempo));

                $this->pembayaran->save([
                    "siswa" => $dataSiswa['id_siswa'],
                    "jatuhtempo" => $jatuhtempo,
                    "bulan" => $bulan,
                    "jumlah" => $dataSiswa['biaya']
                ]);
            }
        }

        session()->setFlashdata('message', 'Data Berhasil ditambahkan.');
        return redirect()->to(base_url('siswa'));
    }

    public function getEditSiswa($id)
    {
        $data = [
            'title' => 'Siswa',
            'getSiswa' => $this->siswa->getById($id),
            'getAngkatan' => $this->angkatan->getAll(),
            'getJurusan' => $this->jurusan->getAll(),
            'getKelas' => $this->kelas->getAll(),

        ];
        return view('siswa/view', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nisn' => 'required|integer',
            'name' => 'required',
            'angkatan' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'alamat' => 'required'
        ])) {
            session()->setFlashdata('showModal', 'exampleModal');
            return redirect()->to(base_url('kelas'))->withInput()->with('validation', $this->validator);
        }
        $nama = strtoupper($this->request->getVar('name'));

        //menyimpan data siswa
        $this->siswa->save([
            "id_siswa" => $id,
            "nisn" => $this->request->getVar('nisn'),
            "nama" => $nama,
            "angkatan" => $this->request->getVar('angkatan'),
            "jurusan" => $this->request->getVar('jurusan'),
            "kelas" => $this->request->getVar('kelas'),
            "alamat" => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata('message', 'Data Berhasil diedit.');
        return redirect()->to(base_url('siswa'));
    }

    public function delete($id)
    {
        $this->siswa->delete($id);
        $this->pembayaran->where('siswa', $id)->delete();
        session()->setFlashdata('message', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('kelas'));
    }
}
