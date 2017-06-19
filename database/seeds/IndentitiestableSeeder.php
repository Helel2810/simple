<?php

use Illuminate\Database\Seeder;

class IndentitiestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('identities')->insert([
            'first' => str_random(10),
            'last' => str_random(10),
            'address' => str_random(20),
            'email' => str_random(10).'@gmail.com',
            'phone' => str_random(10),
        ]);

        DB::table('identities')->insert([
            'first' => str_random(10),
            'last' => str_random(10),
            'address' => str_random(20),
            'email' => str_random(10).'@gmail.com',
            'phone' => str_random(10),
        ]);
    }
}
