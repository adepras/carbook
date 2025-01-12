<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_details')->insert([
            'user_id' => 1,
            'nama' => 'Pengguna',
            'alamat' => 'Jl. Contoh Alamat No. 123, Kota Contoh',
            'telepon' => '081234567890',
            'whatsapp' => '081234567890',
            'nik' => '1234567890123456',
            'foto_ktp' => 'foto_jpg',
            'nomor_sim' => 'AB1234567890',
            'foto_sim' => 'foto_jpg',
        ]);
    }
}
