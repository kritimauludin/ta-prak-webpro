<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GovandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('govandas')->insert([
            'nama' => 'Govanda Dikra Pratama',
            'jeniskelamin' => 'cowo',
            'notelpon' => '08811285795',
        ]);
    }
}