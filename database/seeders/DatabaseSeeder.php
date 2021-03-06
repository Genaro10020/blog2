<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //$this->call(CursoSeeder::class); //incluimos el archivo que creamos.
       User::factory(10)->create(); 
       Curso::factory(50)->create();
    }
}
