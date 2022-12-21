<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $club = [
            'name' => 'UTM Wushu',
            'description' => 'UTM Wushu',
            'image' => 'public/clubs/Wushu.jpg',
        ];
        Club::create($club);
    }
}
