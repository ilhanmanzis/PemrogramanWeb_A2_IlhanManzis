<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa_model extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $allowedFields = ['nisn', 'nama', 'id_angkatan', 'id_jurusan', 'id_kelas', 'alamat'];


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
            'id_angkatan' => [
                'label' => 'id_angkatan',
                'rules' => 'trim|required'
            ],
            'id_jurusan' => [
                'label' => 'id_jurusan',
                'rules' => 'trim|required'
            ],
            'id_kelas' => [
                'label' => 'id_kelas',
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
        return $this->orderBy('id_siswa', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['id_siswa' => $id])->first();
    }
}
