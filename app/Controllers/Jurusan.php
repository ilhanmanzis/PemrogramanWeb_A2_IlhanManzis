<?php

namespace App\Controllers;

use App\Models\Jurusan_model;


class Jurusan extends BaseController
{
    protected $jurusan;

    public function __construct()
    {
        $this->jurusan = new Jurusan_model();
        helper(['form']);
    }
    public function index()
    {
        $data = [
            'title' => 'Jurusan',
            'dataJurusan' => $this->jurusan->getAll(),
            'validation' => \Config\Services::validation(),
            'showModal' => session()->getFlashdata('showModal'),
            'editModal' => session()->getFlashdata('editModal')

        ];
        echo view('templates/header', $data);
        echo view('jurusan/jurusan', $data);
        echo view('templates/footer');
    }

    public function save()
    {
        if (!$this->validate([
            'name' => 'required',
        ])) {
            session()->setFlashdata('showModal', 'exampleModal');
            return redirect()->to(base_url('jurusan'))->withInput()->with('validation', $this->validator);
        }
        $nama = strtoupper($this->request->getVar('name'));
        $this->jurusan->save([
            "nama_jurusan" => $nama,
        ]);

        session()->setFlashdata('message', 'Data Berhasil ditambahkan.');
        return redirect()->to(base_url('jurusan'));
    }

    public function getEditJurusan($id)
    {
        $data['getJurusan'] = $this->jurusan->getById($id);
        return view('jurusan/view', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'name' => 'required',
        ])) {
            session()->setFlashdata('editModal', 'myModal');
            return redirect()->to(base_url('jurusan'))->withInput()->with('validation', $this->validator);
        }
        $nama = strtoupper($this->request->getVar('name'));
        $this->jurusan->save([
            "id_jurusan" => $id,
            "nama_jurusan" => $nama,
        ]);

        session()->setFlashdata('message', 'Data Berhasil diedit.');
        return redirect()->to(base_url('jurusan'));
    }

    public function delete($id)
    {
        $this->jurusan->delete($id);
        session()->setFlashdata('message', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('jurusan'));
    }
}
