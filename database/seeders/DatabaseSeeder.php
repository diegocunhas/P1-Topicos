<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert(
            [
                'nome' => 'Teste',
                'capcidade' => 20,
                'tipo' => 'Teste'
            ]
        );
    }
}
