<?php

use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\SuperAdmin::create([
            'name' => 'Afif Maulana Iskandar',
            'email' => 'afif@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678')
        ]);
    }
}
