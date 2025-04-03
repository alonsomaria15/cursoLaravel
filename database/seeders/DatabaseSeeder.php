<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //    User::factory(10)->create();  //nos permite insertar 10 registros o mas

        User::factory()->create([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
        ]);
    }
}
