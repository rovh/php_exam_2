<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $place = new Place();
        $place->name = 'Station 1';
        $place->description = 'Ваши вещи еще чинятся';
        $place->repair = true;
        $place->work = false; 
        $place->save();

        $work = new Place();
        $work->name = 'Place 2';
        $work->description = 'Вещи еще в работе';
        $work->repair = false;
        $work->work = true; 
        $work->save();

        $repair = new Place();
        $repair->name = 'Area 3';
        $repair->description = 'Вещи чинятся и в работе';
        $repair->repair = true;
        $repair->work = true; 
        $repair->save();
    }
}
