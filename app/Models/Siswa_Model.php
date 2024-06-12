<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa_model extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $allowedFields = ['nisn', 'nama', 'angkatan', 'jurusan', 'kelas', 'alamat'];


    public function rules()
    {
        return [
            'nisn' => [
                'label' => 'nisn',
                'rules' => 'trim|required'
            ],
            'nama' => [
                'label' => 'nama',
                'rules' => 'trim|required'
            ],
            'angkatan' => [
                'label' => 'angkatan',
                'rules' => 'trim|required'
            ],
            'jurusan' => [
                'label' => 'jurusan',
                'rules' => 'trim|required'
            ],
            'kelas' => [
                'label' => 'kelas',
                'rules' => 'trim|required'
            ],
            'alamat' => [
                'label' => 'alamat',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->select('siswa.*, angkatan.*, jurusan.*, kelas.*')
            ->join('angkatan', 'siswa.angkatan = angkatan.id_angkatan')
            ->join('jurusan', 'siswa.jurusan = jurusan.id_jurusan')
            ->join('kelas', 'siswa.kelas = kelas.id_kelas')
            ->orderBy('id_siswa', 'ASC')
            ->findAll();
    }

    public function getById($id)
    {
        return $this->select('siswa.*, angkatan.*, jurusan.*, kelas.*')
            ->join('angkatan', 'siswa.angkatan = angkatan.id_angkatan')
            ->join('jurusan', 'siswa.jurusan = jurusan.id_jurusan')
            ->join('kelas', 'siswa.kelas = kelas.id_kelas')
            ->where(['id_siswa' => $id])
            ->first();
    }

    public function getByNisn($nisn)
    {
        return $this->select('siswa.*, angkatan.*, jurusan.*, kelas.*')
            ->join('angkatan', 'siswa.angkatan = angkatan.id_angkatan')
            ->join('jurusan', 'siswa.jurusan = jurusan.id_jurusan')
            ->join('kelas', 'siswa.kelas = kelas.id_kelas')
            ->where(['nisn' => $nisn])
            ->first();
    }
}
