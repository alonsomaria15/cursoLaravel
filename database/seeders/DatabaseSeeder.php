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
<<<<<<< HEAD
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
=======
    //    User::factory(10)->create();  //nos permite insertar 10 registros o mas

        User::factory()->create([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
>>>>>>> bda8e3f5618e7075293ae67e76a5723ac1ea32a4
        ]);
    }
}
