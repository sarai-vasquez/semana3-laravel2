<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre'=>'Jose',
            'edad'=>25,
            'categoria'=>1,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Maria',
            'edad'=>27,
            'categoria'=>2,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Sarai',
            'edad'=>19,
            'categoria'=>3,
            'created_at'=>Carbon::now()
        ]);

        DB::table('clientes')->insert($data);
    }
}
