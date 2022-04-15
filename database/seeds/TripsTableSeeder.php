<?php

use App\Trip;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trip = new Trip();

        $trip->destination = 'Amsterdam';
        $trip->departure = '2022-05-22';
        $trip->departure_airport = 'Linate - Milano';
        $trip->return = '2022-05-29';
        $trip->return_airport = 'Schiphol - Amsterdam';
        $trip->ticket_id ='ML012AM';
        $trip->price = 60.35;

        $trip->save();
    }
}
