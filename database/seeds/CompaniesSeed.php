<?php

use Illuminate\Database\Seeder;

class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Company::create([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'website' => 'www.' . str_random(5) . '.com',
            'logo' => str_random(7) . 'jpg',
            'password' => bcrypt('secret'),
        ]);
    }
}