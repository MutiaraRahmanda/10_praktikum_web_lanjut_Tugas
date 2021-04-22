<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkul = [
            [
                'mahasiswa_id' => '1941720189',
                'matakuliah_id' => '1',
                'nilai' => 'A',
            ],
            [

                'mahasiswa_id' => '1941720189',
                'matakuliah_id' => '2',
                'nilai' => 'A',
            ],
            [

                'mahasiswa_id' => '1941720189',
                'matakuliah_id' => '3',
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '1941720189',
                'matakuliah_id' => '4',
                'nilai' => 'A',
            ],

            [
                'mahasiswa_id' => '1941720034',
                'matakuliah_id' => '1',
                'nilai' => 'B',
            ],
            [
                'mahasiswa_id' => '1941720034',
                'matakuliah_id' => '2',
                'nilai' => 'B',
            ],
            [
                'mahasiswa_id' => '1941720034',
                'matakuliah_id' => '3',
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '1941720034',
                'matakuliah_id' => '4',
                'nilai' => 'B',
            ],
        ];

        DB::table('mahasiswa_matakuliah')->insert($matkul);
    }
}
