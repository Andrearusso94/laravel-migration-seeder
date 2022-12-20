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
            $train->azienda = $faker->randomElement(['Italo', 'Trenitalia', 'FlixTrain']);
            $train->data_di_partenza = $faker->dateTimeThisMonth();
            $train->stazione_di_partenza = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Torino Porta Susa']);
            $train->stazione_di_arrivo = $faker->randomElement(['Napoli Centrale', 'Salerno', 'Bologna Centrale']);
            $train->orario_di_partenza = $faker->randomFloat(2, 1, 24);
            $train->orario_di_arrivo = $faker->randomFloat(2, 1, 24);
            $train->codice_treno = $faker->randomFloat(1, 10, 100);
            $train->numero_carrozze = $faker->randomDigitNotNull();
            $train->in_orario = $faker->randomElement([True, False]);
            $train->cancellato = $faker->randomElement([True, False]);
            $train->save();
        }
    }
}
