<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\City::factory()
        //                 ->count(3)
        //                 ->create();

        \App\Models\City::factory()
                        ->count(3)
                        ->state(new Sequence(
                            ['city' => 'Миасс'],
                            ['city' => 'Златоуст'],
                            ['city' => 'Чебаркуль']
                        ))
                        ->state(new Sequence(
                            ['postal_code' => '456300'],
                            ['postal_code' => '456200'],
                            ['postal_code' => '456440']
                        ))
                        ->create();
    }
}
