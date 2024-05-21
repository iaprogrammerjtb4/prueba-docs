<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pro_proceso')->insert([
            'PRO_NOMBRE' => 'Ingenieria',
            'PRO_PREFIJO' => 'ING',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('pro_proceso')->insert([
            'PRO_NOMBRE' => 'Marketing',
            'PRO_PREFIJO' => 'MAR',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('pro_proceso')->insert([
            'PRO_NOMBRE' => 'Ventas',
            'PRO_PREFIJO' => 'VEN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('pro_proceso')->insert([
            'PRO_NOMBRE' => 'Recursos humanos',
            'PRO_PREFIJO' => 'REC',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('pro_proceso')->insert([
            'PRO_NOMBRE' => 'Contabilidad',
            'PRO_PREFIJO' => 'CON',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
