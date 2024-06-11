<?php

namespace App\Controllers;

use App\Models\Siswa_model;

class Siswa extends BaseController
{
    protected $siswa;

    public function __construct()
    {
        $this->siswa = new Siswa_model();
    }
    public function index()
    {
        $data = [
            'title' => 'Siswa',
            'dataSiswa' => $this->siswa->getAll(),
        ];
        echo view('templates/header', $data);
        echo view('siswa/siswa', $data);
        echo view('siswa/create');
        echo view('templates/footer');
    }
}
