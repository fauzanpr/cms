<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('testi')->insert(
            [
                'testi_name' => 'JOHN DUE',
                'testi_jabatan' => 'CEO',
                'testi_uraian' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as '
            ]
        );

        DB::table('testi')->insert(
            [
                'testi_name' => 'FAUZAN',
                'testi_jabatan' => 'FOUNDER',
                'testi_uraian' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as '
            ]
        );

        DB::table('testi')->insert(
            [
                'testi_name' => 'DIKHI DAN ILHAM',
                'testi_jabatan' => 'CTO',
                'testi_uraian' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as '
            ]
        );
    }
}
