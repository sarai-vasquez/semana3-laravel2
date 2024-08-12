<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre'=>'Premium',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Estandar',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Economico',
            'created_at'=>Carbon::now()
        ]);

        DB::table('categorias')->insert($data);
    }
}
