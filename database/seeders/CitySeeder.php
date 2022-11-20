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
        \App\Models\City::factory()
                        ->count(5)
                        ->state(new Sequence(
                            ['city' => 'Миасс'],
                            ['city' => 'Златоуст'],
                            ['city' => 'Чебаркуль'],
                            ['city' => 'Челябинск'],
                            ['city' => 'Магнитогорск']
                        ))
                        // ->state(new Sequence(
                        //     ['postal_code' => '456300'],
                        //     ['postal_code' => '456200'],
                        //     ['postal_code' => '456440'],
                        //     ['postal_code' => '454000'],
                        //     ['postal_code' => '455000']
                        // ))
                        ->create();
    }
}
