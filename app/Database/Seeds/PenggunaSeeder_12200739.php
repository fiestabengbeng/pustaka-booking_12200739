<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Eka Devien Prassetyo',
                'password'  => md5('12345')
            ],
            [
                'nama'      => 'creator',
                'password'  => md5('23456')
            ],
            [
                'nama'      => '12200739',
                'password'  => md5('Eka Devien Prassetyo')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}