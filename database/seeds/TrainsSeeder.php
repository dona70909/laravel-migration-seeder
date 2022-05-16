<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)

    {
            for ($i = 0; $i < 50 ; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();

            $newTrain->data_di_partenza = $faker->dateTimeBetween('+0 days', '1 years');
            $newTrain->data_di_arrivo = $faker->dateTimeBetween($newTrain->data_di_partenza, $newTrain->data_di_partenza->format('Y-m-d') . '+1 day');

            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo =  $faker->time();

            $newTrain->codice_treno = $faker->bothify('???-###');;
            $newTrain->numero_carrozze = $faker->numberBetween(1, 40);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->is_cancellato = $faker->boolean();
            $newTrain->save();
        } 
    }
}
