<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = ['Украина', 'США', 'Канада', 'Китай', 'Япония'];

        foreach ($countries as $country) {
            factory(\App\Country::class)->create(['country_name' => $country]);
        }
    }
}
