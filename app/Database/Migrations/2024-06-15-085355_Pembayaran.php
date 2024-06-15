<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembayaran' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'siswa' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'jatuhtempo' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'bulan' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'nobayar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'tglbayar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'jumlah' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'ket' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'id_admin' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true
            ],
        ]);
        $this->forge->addKey('id_pembayaran', true);
        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
