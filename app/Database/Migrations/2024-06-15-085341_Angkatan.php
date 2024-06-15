<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Angkatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_angkatan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_angkatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'biaya' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
        ]);
        $this->forge->addKey('id_angkatan', true);
        $this->forge->createTable('angkatan');
    }

    public function down()
    {
        $this->forge->dropTable('angkatan');
    }
}
