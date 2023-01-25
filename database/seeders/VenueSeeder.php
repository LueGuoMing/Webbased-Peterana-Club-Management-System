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
        $room1 = [
            'name' => 'Dewan Kejora UTM',
            'status' => "avaliable",
            'location' => 'UTM N28a',
        ];
        Room::create($room1);

        $room2 = [
            'name' => 'Dewan Resak UTM',
            'status' => "pending",
            'location' => 'M01',
        ];
        Room::create($room2);

        $room3 = [
            'name' => 'N24',
            'status' => "unavaliable",
            'location' => 'Jalan ???',
        ];
        Room::create($room3);

        $room4 = [
            'name' => 'Arked Angkasa',
            'status' => "avaliable",
            'location' => 'KTDI',
        ];
        Room::create($room4);
    }
}
