<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classe = [
            ["nom_classe" => "CI", "niveau_id" => 1],["nom_classe" => "CP", "niveau_id" => 1],["nom_classe" => "CE1", "niveau_id" => 1],["nom_classe" => "CE2", "niveau_id" => 1],["nom_classe" => "CM1", "niveau_id" => 1],["nom_classe" => "CM2", "niveau_id" => 1],
            ["nom_classe" => "6iem", "niveau_id" => 2],["nom_classe" => "5iem", "niveau_id" => 2],["nom_classe" => "4iem", "niveau_id" => 2],["nom_classe" => "3iem", "niveau_id" => 2],
            ["nom_classe" => "Seconde", "niveau_id" => 3],["nom_classe" => "Première", "niveau_id" => 3],["nom_classe" => "Terminal", "niveau_id" => 3]
        ];
        
        Classe::insert($classe);
    }
}
