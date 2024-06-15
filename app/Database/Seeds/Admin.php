<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $data = [
            'nama_admin' => 'admin',
            'username' => 'admin',
            'password' => 'admin'
        ];

        // Using Query Builder
        $this->db->table('admin')->insert($data);
    }
}
