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
        $club1 = [
            'name' => 'Wushu',
            'description' => 'UTM Wushu',
            'image' => 'public/clubs/wushu_club.jpeg',
        ];
        Club::create($club1);

        $club2 = [
            'name' => 'Flying Dance Studio',
            'description' => 'UTM Flying Dance Studio',
            'image' => 'public/clubs/fds_club.jpeg',
        ];
        Club::create($club2);

        $club3 = [
            'name' => 'Kumpulan Tarian Citra Daksina',
            'description' => 'UTM Kumpulan Tarian Citra Daksina',
            'image' => 'public/clubs/cd_club.jpeg',
        ];
        Club::create($club3);

        $club4 = [
            'name' => 'Freedom Dance Crew',
            'description' => 'UTM Freedom Dance Crew',
            'image' => 'public/clubs/fdc_club.jpeg',
        ];
        Club::create($club4);

        $club5 = [
            'name' => 'GASARi',
            'description' => 'UTM GASARi',
            'image' => 'public/clubs/gasari_club.jpg',
        ];
        Club::create($club5);

        $club6 = [
            'name' => 'Teens N Theatre',
            'description' => 'UTM Teens N Theatre',
            'image' => 'public/clubs/tnt_club.jpeg',
        ];
        Club::create($club6);

        $club7 = [
            'name' => 'Southern Voice Choir',
            'description' => 'UTM Southern Voice Choir',
            'image' => 'public/clubs/svc_club.jfif',
        ];
        Club::create($club7);

        $club8 = [
            'name' => 'Chinese Orchestra',
            'description' => 'UTM Chinese Orchestra',
            'image' => 'public/clubs/co_club.jpeg',
        ];
        Club::create($club8);

        $club9 = [
            'name' => 'Losting Music',
            'description' => 'UTM Losting Music',
            'image' => 'public/clubs/losting_club.jpeg',
        ];
        Club::create($club9);

        $club10 = [
            'name' => 'Hanfu',
            'description' => 'UTM Hanfu',
            'image' => 'public/clubs/hanfu_club.jpg',
        ];
        Club::create($club10);

        $club11 = [
            'name' => 'Diabolo',
            'description' => 'UTM Diabolo',
            'image' => 'public/clubs/diabolo_club.jpeg',
        ];
        Club::create($club11);

        $club12 = [
            'name' => '24 Festive Drum',
            'description' => 'UTM 24 Festive Drum',
            'image' => 'public/clubs/24fd_club.jpeg',
        ];
        Club::create($club12);
    }
}
