<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PasienSeeder extends Seeder
{
    public function run()
    {
        $data = [
        	[
                'idPasien' 	=> 'PS001',
                'namaPasien'   => 'Kisan Hessi'
            ],
            [
                'idPasien' 	=> 'PS002',
                'namaPasien'   => 'Lutfi PradanaP'
            ],
            [
                'idPasien' 	=> 'PS003',
                'namaPasien'   => 'Kanif Yudistira'
            ],
            [
                'idPasien' 	=> 'PS004',
                'namaPasien'   => 'Jihan Grafika'
            ],
            [
                'idPasien' 	=> 'PS005',
                'namaPasien'   => 'MFarhan Ferdiansyah'
            ]
	    ];

        $this->db->table('TblPasien')->insertBatch($data);
    }
}

