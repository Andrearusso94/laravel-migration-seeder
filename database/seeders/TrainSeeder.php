<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->Azienda = $faker->randomElement(['Italo', 'Trenitalia', 'FlixTrain']);
            $train->Data_di_partenza = $faker->dateTimeThisMonth();
            $train->Stazione_di_partenza = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Torino Porta Susa']);
            $train->Stazione_di_arrivo = $faker->randomElement(['Napoli Centrale', 'Salerno', 'Bologna Centrale']);
            $train->Orario_di_partenza = $faker->randomFloat(2, 1, 24);
            $train->Orario_di_arrivo = $faker->randomFloat(2, 1, 24);
            $train->Codice_Treno = $faker->randomBetween(1, 50);
            $train->Numero_Carrozze = $faker->randomDigitNotNull();
            $train->In_orario = $faker->randomElement(['True', 'False']);
            $train->Cancellato = $faker->randomElement(['True', 'False']);
            $train->save();
        }
    }
}
