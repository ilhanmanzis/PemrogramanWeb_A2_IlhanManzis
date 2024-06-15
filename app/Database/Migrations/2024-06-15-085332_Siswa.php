<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nisn' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'angkatan' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'jurusan' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'kelas' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
        ]);
        $this->forge->addKey('id_siswa', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
