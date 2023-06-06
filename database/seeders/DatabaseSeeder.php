<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\Additional;
use App\Models\Rating;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roomseeder = [
            [
                'partner_id' => 1,
                'room_name' => 'Stellar Space Medium',
                'address1' => 'jl buah batu',
                'address2' => 'jl buah batu',
                'subdistrict' => 'Buah Batu',
                'city' => 'Bandung',
                'zipcode' => '17530',
                'room_type' => 'U Shape',
                'room_area' => '10 x 7 m²',
                'person' => '5-10 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => '',
                'properties8' => '',
                'special_note' => '',
                'foto1' => 'foto1.png',
                'foto2' => 'foto2.png',
                'foto3' => 'foto3.png',
                'foto4' => 'foto4.png',
                'price' => 499000,
            ],
            [
                'partner_id' => 1,
                'room_name' => 'Stellar Space Small',
                'address1' => 'jl buah batu',
                'address2' => 'jl buah batu',
                'subdistrict' => 'Buah Batu',
                'city' => 'Bandung',
                'zipcode' => '17530',
                'room_type' => 'U Shape',
                'room_area' => '10 x 9 m²',
                'person' => '10-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Wifi Included',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => '',
                'properties8' => '',
                'special_note' => '',
                'foto1' => 'foto1 - Copy.png',
                'foto2' => 'foto2 - Copy.png',
                'foto3' => 'foto3 - Copy.png',
                'foto4' => 'foto4 - Copy.png',
                'price' => 599000,
            ],
            [
                'partner_id' => 1,
                'room_name' => 'Stellar Space Large',
                'address1' => 'jl buah batu',
                'address2' => 'jl buah batu',
                'subdistrict' => 'Buah Batu',
                'city' => 'Bandung',
                'zipcode' => '17530',
                'room_type' => 'U Shape',
                'room_area' => '10 x 10 m²',
                'person' => '20-30 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => 'foto1 - Copy (2).png',
                'foto2' => 'foto2 - Copy (2).png',
                'foto3' => 'foto3 - Copy (2).png',
                'foto4' => 'foto4 - Copy (2).png',
                'price' => 799000,
            ],
            [
                'partner_id' => 1,
                'room_name' => 'Buah Batu Meeting',
                'address1' => 'jl buah batu',
                'address2' => 'jl buah batu',
                'subdistrict' => 'Buah Batu',
                'city' => 'Bandung',
                'zipcode' => '17530',
                'room_type' => 'Openspace',
                'room_area' => '10 x 10 m²',
                'person' => '20-30 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => 'foto1 - Copy (3).png',
                'foto2' => 'foto2 - Copy (3).png',
                'foto3' => 'foto3 - Copy (3).png',
                'foto4' => 'foto4 - Copy (3).png',
                'price' => 399000,
            ],
            [
                'partner_id' => 1,
                'room_name' => 'Stellar Lembang Indoor',
                'address1' => 'jl buah batu',
                'address2' => 'jl buah batu',
                'subdistrict' => 'Buah Batu',
                'city' => 'Bandung',
                'zipcode' => '17530',
                'room_type' => 'Indoor',
                'room_area' => '10 x 13 m²',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => 'foto1 - Copy (4).png',
                'foto2' => 'foto2 - Copy (4).png',
                'foto3' => 'foto3 - Copy (4).png',
                'foto4' => 'foto4 - Copy (4).png',
                'price' => 459000,
            ],
            [
                'partner_id' => 1,
                'room_name' => 'Stellar Lembang Openspace',
                'address1' => 'jl buah batu',
                'address2' => 'jl buah batu',
                'subdistrict' => 'Buah Batu',
                'city' => 'Bandung',
                'zipcode' => '17530',
                'room_type' => 'Openspace',
                'room_area' => '10 x 13 m²',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => 'foto1 - Copy (5).png',
                'foto2' => 'foto2 - Copy (5).png',
                'foto3' => 'foto3 - Copy (5).png',
                'foto4' => 'foto4 - Copy (5).png',
                'price' => 459000,
            ],
            [
                'partner_id' => 1,
                'room_name' => 'Stellar Cikarang Lounge',
                'address1' => 'jl buah batu',
                'address2' => 'jl buah batu',
                'subdistrict' => 'Buah Batu',
                'city' => 'Bandung',
                'zipcode' => '17530',
                'room_type' => 'Lounge',
                'room_area' => '10 x 13 m²',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => 'foto1 - Copy (6).png',
                'foto2' => 'foto2 - Copy (6).png',
                'foto3' => 'foto3 - Copy (6).png',
                'foto4' => 'foto4 - Copy (6).png',
                'price' => 459000,
            ],
            [
                'partner_id' => 1,
                'room_name' => 'Stellar Lembang Indoor',
                'address1' => 'jl buah batu',
                'address2' => 'jl buah batu',
                'subdistrict' => 'Buah Batu',
                'city' => 'Bandung',
                'zipcode' => '17530',
                'room_type' => 'Indoor',
                'room_area' => '10 x 13 m²',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => 'foto1 - Copy (7).png',
                'foto2' => 'foto2 - Copy (7).png',
                'foto3' => 'foto3 - Copy (7).png',
                'foto4' => 'foto4 - Copy (7).png',
                'price' => 459000,
            ],
            [
                'partner_id' => 1,
                'room_name' => 'Stellar Mekar Wangi Lounge',
                'address1' => 'jl buah batu',
                'address2' => 'jl buah batu',
                'subdistrict' => 'Buah Batu',
                'city' => 'Bandung',
                'zipcode' => '17530',
                'room_type' => 'Lounge',
                'room_area' => '10 x 13 m²',
                'person' => '15-20 Person',
                'room_description' => 'Providing lake views, The Symphony 9 Tam Coc in Ninh Binh provides accommodation, an outdoor swimming pool, a bar, a shared lounge, a garden and barbecue facilities. Complimentary WiFi is provided.

                There is a private bathroom with bidet in all units, a',
                'properties1' => 'Speaker',
                'properties2' => 'Projector',
                'properties3' => 'Whiteboard',
                'properties4' => 'Charging port',
                'properties5' => 'Food and Baverage',
                'properties6' => 'Free Cancellation',
                'properties7' => 'Wifi Included',
                'properties8' => '',
                'special_note' => '',
                'foto1' => 'foto1 - Copy (8).png',
                'foto2' => 'foto2 - Copy (8).png',
                'foto3' => 'foto3 - Copy (8).png',
                'foto4' => 'foto4 - Copy (8).png',
                'price' => 459000,
            ],
        ];

        $additionalSeeder = [
            [
                'room_id' => 1,
                'type' => 'Starter',
                'name' => 'Fried Fries',
                'description' => 'Kentang Goreng dengan Bumbu khas',
                'price' => 30000,
                'foto' => 'frenchfries.png'
            ],
            [
                'room_id' => 1,
                'type' => 'Starter',
                'name' => 'Fried Fries',
                'description' => 'Kentang Goreng dengan Bumbu khas',
                'price' => 30000,
                'foto' => 'frenchfries.png'
            ],
            [
                'room_id' => 1,
                'type' => 'Starter',
                'name' => 'Fried Fries',
                'description' => 'Kentang Goreng dengan Bumbu khas',
                'price' => 30000,
                'foto' => 'frenchfries.png'
            ],
            [
                'room_id' => 1,
                'type' => 'Main Course',
                'name' => 'Steak and Fries',
                'description' => 'Steak daging sapi dengan kentang disiram bumbu spesial',
                'price' => 75000,
                'foto' => 'steak.png'
            ],
            [
                'room_id' => 1,
                'type' => 'Main Course',
                'name' => 'Steak and Fries',
                'description' => 'Steak daging sapi dengan kentang disiram bumbu spesial',
                'price' => 75000,
                'foto' => 'steak.png'
            ],
            [
                'room_id' => 1,
                'type' => 'Main Course',
                'name' => 'Steak and Fries',
                'description' => 'Steak daging sapi dengan kentang disiram bumbu spesial',
                'price' => 75000,
                'foto' => 'steak.png'
            ],
            [
                'room_id' => 1,
                'type' => 'Deserts & Drinks',
                'name' => 'Mango Pudding',
                'description' => 'Puding rasa mangga dengan irisan mangga asli',
                'price' => 16000,
                'foto' => 'manggo.png'
            ],
            [
                'room_id' => 1,
                'type' => 'Deserts & Drinks',
                'name' => 'Coffe Latte',
                'description' => 'Kopi dengan biji pilihan',
                'price' => 22000,
                'foto' => 'coffee.png'
            ],
            [
                'room_id' => 1,
                'type' => 'Deserts & Drinks',
                'name' => 'Coffe Latte',
                'description' => 'Kopi dengan biji pilihan',
                'price' => 22000,
                'foto' => 'coffee.png'
            ],
        ];

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

        Room::insert($roomseeder);
        Additional::insert($additionalSeeder);
        Rating::insert($ratingSeeder);
        \App\Models\User::factory(2)->create();
        \App\Models\Partner::factory(1)->create();
    }
}
