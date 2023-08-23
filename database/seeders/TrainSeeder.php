<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i <= 3; $i++) {
            $train = new Train();

            $train->Azienda = $faker->word();
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->Orario_di_partenza = $faker->time();
            $train->Orario_di_arrivo = $faker->time();
            $train->Codice_Treno = $faker->randomNumber(5, true);
            $train->Numero_Carrozze = $faker->randomNumber(5, true);
            $train->In_orario = $faker->boolean();
            $train->Cancellato = $faker->boolean();
            $train->save();
        }
    }
}
