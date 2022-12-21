<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $venue = [
            'name' => 'Dewan Kejora UTM',
            'status' => "avaliable",
            'location' => 'UTM N28a',
        ];
        Room::create($venue);
    }
}
