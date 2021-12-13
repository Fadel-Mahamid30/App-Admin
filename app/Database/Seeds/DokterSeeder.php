<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DokterSeeder extends Seeder
{
    public function run()
    {
        $data = [
                [
                'idDokter' 	=> 'DK001',
                'namaDokter'   => 'Leonardo Alexander'
        	],
        	[
                'idDokter' 	=> 'DK002',
                'namaDokter'   => 'Lili Asmara'
        	],
        	[
                'idDokter' 	=> 'DK003',
                'namaDokter'   => 'Angga Andika'
        	],
        	[
                'idDokter' 	=> 'DK004',
                'namaDokter'   => 'Boyhaqi'
        	],
        	[
                'idDokter' 	=> 'DK005',
                'namaDokter'   => 'Ade Irma'
            ]
	    ];

        $this->db->table('TblDokter')->insertBatch($data);
    }
}

