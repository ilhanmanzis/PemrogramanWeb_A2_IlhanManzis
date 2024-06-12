<?php

namespace App\Controllers;

use App\Models\Kelas_model;


class Kelas extends BaseController
{
    protected $kelas;

    public function __construct()
    {
        $this->kelas = new Kelas_model();
        helper(['form']);
    }
    public function index()
    {
        $data = [
            'title' => 'Kelas',
            'dataKelas' => $this->kelas->getAll(),
            'validation' => \Config\Services::validation(),
            'showModal' => session()->getFlashdata('showModal'),
            'editModal' => session()->getFlashdata('editModal')

        ];
        echo view('templates/header', $data);
        echo view('kelas/kelas', $data);
        echo view('templates/footer');
    }

    public function save()
    {
        if (!$this->validate([
            'name' => 'required',
        ])) {
            session()->setFlashdata('showModal', 'exampleModal');
            return redirect()->to(base_url('kelas'))->withInput()->with('validation', $this->validator);
        }
        $nama = strtoupper($this->request->getVar('name'));
        $this->kelas->save([
            "nama_kelas" => $nama,
        ]);

        session()->setFlashdata('message', 'Data Berhasil ditambahkan.');
        return redirect()->to(base_url('kelas'));
    }

    public function getEditKelas($id)
    {
        $data['getKelas'] = $this->kelas->getById($id);
        return view('kelas/view', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'name' => 'required',
        ])) {
            session()->setFlashdata('editModal', 'myModal');
            return redirect()->to(base_url('kelas'))->withInput()->with('validation', $this->validator);
        }
        $nama = strtoupper($this->request->getVar('name'));
        $this->kelas->save([
            "id_kelas" => $id,
            "nama_kelas" => $nama,
        ]);

        session()->setFlashdata('message', 'Data Berhasil diedit.');
        return redirect()->to(base_url('kelas'));
    }

    public function delete($id)
    {
        $this->kelas->delete($id);
        session()->setFlashdata('message', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('kelas'));
    }
}
