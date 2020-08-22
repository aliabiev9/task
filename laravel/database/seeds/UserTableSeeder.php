<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 300)->create();

        $users = \App\User::all();
        $companies = \App\Company::all();

        foreach ($users as $user) {
            $user->companies()->sync($companies->random(1));
            $user->companies()->sync($companies->random(2));
        }
    }
}
