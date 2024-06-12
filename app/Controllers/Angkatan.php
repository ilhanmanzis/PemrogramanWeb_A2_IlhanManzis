<?php

namespace App\Controllers;

use App\Models\Angkatan_model;


class Angkatan extends BaseController
{
    protected $angkatan;

    public function __construct()
    {
        $this->angkatan = new Angkatan_model();
        helper(['form']);
    }
    public function index()
    {
        $data = [
            'title' => 'Angkatan',
            'dataAngkatan' => $this->angkatan->getAll(),
            'validation' => \Config\Services::validation(),
            'showModal' => session()->getFlashdata('showModal'),
            'editModal' => session()->getFlashdata('editModal')

        ];
        echo view('templates/header', $data);
        echo view('angkatan/angkatan', $data);
        echo view('templates/footer');
    }

    public function save()
    {
        if (!$this->validate([
            'name' => 'required',
            'biaya' => 'required|integer',
        ])) {
            session()->setFlashdata('showModal', 'exampleModal');
            return redirect()->to(base_url('angkatan'))->withInput()->with('validation', $this->validator);
        }
        $this->angkatan->save([
            "nama_angkatan" => $this->request->getVar('name'),
            "biaya" => $this->request->getVar('biaya'),
        ]);

        session()->setFlashdata('message', 'Data Berhasil ditambahkan.');
        return redirect()->to(base_url('angkatan'));
    }

    public function getEditAngkatan($id)
    {
        $data['getAngkatan'] = $this->angkatan->getById($id);
        return view('angkatan/view', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'name' => 'required',
            'biaya' => 'required|integer',
        ])) {
            session()->setFlashdata('editModal', 'myModal');
            return redirect()->to(base_url('angkatan'))->withInput()->with('validation', $this->validator);
        }
        $this->angkatan->save([
            "id_angkatan" => $id,
            "nama_angkatan" => $this->request->getVar('name'),
            "biaya" => $this->request->getVar('biaya'),
        ]);

        session()->setFlashdata('message', 'Data Berhasil diedit.');
        return redirect()->to(base_url('angkatan'));
    }

    public function delete($id)
    {
        $this->angkatan->delete($id);
        session()->setFlashdata('message', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('angkatan'));
    }
}
