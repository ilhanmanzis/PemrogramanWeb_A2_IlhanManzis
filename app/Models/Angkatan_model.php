<?php

namespace App\Models;

use CodeIgniter\Model;

class Angkatan_model extends Model
{
    protected $table = 'angkatan';
    protected $primaryKey = 'id_angkatan';
    protected $allowedFields = ['nama_angkatan', 'biaya'];


    public function rules()
    {
        return [
            'nama_angkatan' => [
                'label' => 'nama_angkatan',
                'rules' => 'trim|required'
            ],
            'biaya' => [
                'label' => 'biaya',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->orderBy('id_angkatan', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['id_angkatan' => $id])->first();
    }
}
