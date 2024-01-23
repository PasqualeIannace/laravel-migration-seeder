<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $treni = [];

        for ($i = 0; $i < 5; $i++) {
            $newTreno = new Train();
            $newTreno->azienda = "Italo";
            $newTreno->stazione_di_partenza = $faker->sentence(1);
            $newTreno->stazione_di_arrivo = $faker->sentence(1);
            $newTreno->orario_di_partenza = $faker->time();
            $newTreno->orario_di_arrivo = $faker->time();
            $newTreno->codice_treno = $faker->randomNumber(5, true);
            $newTreno->numero_carrozze = $faker->randomNumber(2, false);
            $newTreno->in_orario = 1;
            $newTreno->cancellato = 0;
            $newTreno->save();
        }
    }
}
