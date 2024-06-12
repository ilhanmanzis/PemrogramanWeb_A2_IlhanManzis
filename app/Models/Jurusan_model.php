<?php

namespace App\Models;

use CodeIgniter\Model;

class Jurusan_model extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $allowedFields = ['nama_jurusan'];


    public function rules()
    {
        return [
            'nama_jurusan' => [
                'label' => 'nama_jurusan',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->orderBy('id_jurusan', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['id_jurusan' => $id])->first();
    }
}
