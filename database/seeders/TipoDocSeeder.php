<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tip_tipo_doc')->insert([
            'TIP_NOMBRE' => 'Instructivo',
            'TIP_PREFIJO' => 'INS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tip_tipo_doc')->insert([
            'TIP_NOMBRE' => 'Libro',
            'TIP_PREFIJO' => 'LIB',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tip_tipo_doc')->insert([
            'TIP_NOMBRE' => 'Tesis',
            'TIP_PREFIJO' => 'TES',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tip_tipo_doc')->insert([
            'TIP_NOMBRE' => 'Articulo',
            'TIP_PREFIJO' => 'ART',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tip_tipo_doc')->insert([
            'TIP_NOMBRE' => 'Monografia',
            'TIP_PREFIJO' => 'MON',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
