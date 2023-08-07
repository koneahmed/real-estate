<?php

namespace Database\Seeders;

use App\Models\TypeBien;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeBienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeBien::create(['libelle'=> "Studio"]);
        TypeBien::create(['libelle'=> "Appartement"]);
        TypeBien::create(['libelle'=> "Villa"]);
        TypeBien::create(['libelle'=> "Terrain"]);
    }
}
