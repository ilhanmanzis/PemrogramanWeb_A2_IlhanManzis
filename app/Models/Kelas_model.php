<?php

namespace App\Models;

use CodeIgniter\Model;

class Kelas_model extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $allowedFields = ['nama_kelas'];


    public function rules()
    {
        return [
            'nama_kelas' => [
                'label' => 'nama_kelas',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->orderBy('id_kelas', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['id_kelas' => $id])->first();
    }
}
