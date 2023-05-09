<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ratingSeeder = [
            [
                'description' => 'This is Crazyy, feels like so comfy',
                'room_id' => 1,
                'star_rating' => 4,
                'user_id' => 1,
            ],
            [
                'description' => 'Thisfeels like so comfy',
                'room_id' => 1,
                'star_rating' => 5,
                'user_id' => 1,
            ],
            [
                'description' => 'This is Crazyyy',
                'room_id' => 1,
                'star_rating' => 3,
                'user_id' => 1,
            ],
            [
                'description' => 'This is Crazyyyyy, feels like so comfy',
                'room_id' => 2,
                'star_rating' => 5,
                'user_id' => 1,
            ],
            [
                'description' => 'This is too goood, feels like so comfy',
                'room_id' => 3,
                'star_rating' => 5,
                'user_id' => 1,
            ],
            [
                'description' => 'This is too goooood, feels like so comfy',
                'room_id' => 3,
                'star_rating' => 5,
                'user_id' => 1,
            ],
        ];

        Rating::insert($ratingSeeder);
    }
}
