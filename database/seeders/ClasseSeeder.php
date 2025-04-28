<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classe;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $classes = [
        'Licence 1',
        'Licence 2',
        'Licence 3',
        'Master 1',
        'Master 2',
    ];

    foreach ($classes as $libelle) {
        $classe = new Classe();
        $classe->libelle = $libelle;
        $classe->save();
    }
}
}