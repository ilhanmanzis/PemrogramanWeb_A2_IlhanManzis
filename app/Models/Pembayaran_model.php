<?php

namespace App\Models;

use CodeIgniter\Model;

class Pembayaran_model extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $allowedFields = ['siswa', 'jatuhtempo', 'bulan', 'nobayar', 'tglbayar', 'jumlah', 'ket'];


    public function rules()
    {
        return [
            'siswa' => [
                'label' => 'id_siswa',
                'rules' => 'trim|required'
            ],
            'jatuhtempo' => [
                'label' => 'jatuhtempo',
                'rules' => 'trim|required'
            ],
            'bulan' => [
                'label' => 'bulan',
                'rules' => 'trim|required'
            ],
            'nobayar' => [
                'label' => 'nobayar',
                'rules' => 'trim'
            ],
            'tglbayar' => [
                'label' => 'tglbayar',
                'rules' => 'trim'
            ],
            'jumlah' => [
                'label' => 'jumlah',
                'rules' => 'trim|required'
            ],
            'ket' => [
                'label' => 'ket',
                'rules' => 'trim'
            ]
        ];
    }

    public function getById($id)
    {
        return $this->where('id_pembayaran', $id)->first();
    }
    public function search($idSiswa)
    {
        return $this->where('siswa', $idSiswa)->orderBy('jatuhtempo', 'ASC')->findAll();
    }
}
