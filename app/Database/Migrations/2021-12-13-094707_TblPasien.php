<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblPasien extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPasien' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'namaPasien'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ]
        ]);
        $this->forge->addKey('idPasien', true);
        $this->forge->createTable('TblPasien');
    }
    
    public function down()
    {
        $this->forge->dropTable('TblPasien');
    }
}
