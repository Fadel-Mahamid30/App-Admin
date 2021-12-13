<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'namaPengguna'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30'
            ],
            'userType'       => [
                'type' => 'ENUM("Dokter","Pasien","Admin")',
                'default' => "Dokter",
                'null' => false
            ],
            'userAlias'       => [
                'type'       => 'VARCHAR',
                'constraint' => '5'
            ],
            'Password'       => [
                'type'       => 'VARCHAR',
                'constraint' => '15'
            ],
            'Status'       => [
                'type'       => 'VARCHAR',
                'constraint' => '1'
            ]
        ]);
        $this->forge->addKey('email', true);
        $this->forge->createTable('TblUser');
    }

    public function down()
    {
        $this->forge->dropTable('TblUser');
    }
}

