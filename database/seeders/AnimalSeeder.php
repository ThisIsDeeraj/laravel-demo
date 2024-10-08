<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create(
            [
                'type' => 'Animal',
                'name' =>'Dog',
                'age' =>15

            ]
        );
        Animal::create(
            [
                'type' => 'Cat',
                'name' =>'Dog',
                'age' =>5

            ]
        );
    }
}
