<?php

use Illuminate\Database\Seeder;
use App\Destination;
use Faker\Generator as Faker;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i =0; $i <10; $i++) {
            $types = [
                'Appartamento',
                'Villetta',
                'Monolocale'
            ];
            $new_destination = new Destination();
            $new_destination->city = $faker->city();
            $new_destination->state = $faker->state();
            $new_destination->rooms = rand(1, 7);
            $new_destination->bathrooms = rand(1, 3);
            $new_destination->type = $faker->randomElement($types);
            $new_destination->description = $faker->text(500);
            $new_destination->price_flight = rand(1, 10000);
            $new_destination->price_hotel = rand(1, 10000);
            $new_destination->price_total = rand(1, 30000);
            $new_destination->is_available = rand(0, 1);
            $new_destination->all_inclusive = rand(0, 1);
            $new_destination->save();
        }
    }
}
