<?php

namespace Database\Seeders;

use App\Models\Additional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdditionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        Additional::insert($additionalSeeder);
    }
}
