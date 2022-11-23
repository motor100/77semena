<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory()
                            ->count(9)
                            ->state(new Sequence(
                                ['parent' => '0'],
                                ['parent' => '0'],
                                ['parent' => '1'],
                                ['parent' => '1'],
                                ['parent' => '1'],
                                ['parent' => '1'],
                                ['parent' => '1'],
                                ['parent' => '1'],
                                ['parent' => '1']
                            ))
                            ->state(new Sequence(
                                ['title' => 'Семена'],
                                ['title' => 'Агрохимия'],
                                ['title' => 'Огурцы'],
                                ['title' => 'Перцы'],
                                ['title' => 'Томаты'],
                                ['title' => 'Овощи'],
                                ['title' => 'Газон'],
                                ['title' => 'Цветы'],
                                ['title' => 'Ягоды']
                            ))
                            ->state(new Sequence(
                                ['slug' => 'semena'],
                                ['slug' => 'agrohimiya'],
                                ['slug' => 'ogurcy'],
                                ['slug' => 'percy'],
                                ['slug' => 'tomaty'],
                                ['slug' => 'ovoshchi'],
                                ['slug' => 'gazon'],
                                ['slug' => 'cvety'],
                                ['slug' => 'yagody']
                            ))
                            ->create();
    }
}
