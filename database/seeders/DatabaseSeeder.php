<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'type' => 'admin',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Bailleur',
            'email' => 'bailleur@email.com',
            'type' => 'bailleur',
            'password' => bcrypt('password')
        ]);


        User::create([
            'name' => 'Client',
            'email' => 'client@email.com',
            'type' => 'client',
            'password' => bcrypt('password')
        ]);
        $this->call([
            TypeBienSeeder::class,
        ]);
    }
}
