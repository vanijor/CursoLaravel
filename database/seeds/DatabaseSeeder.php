<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'           => '11122233344', 
            'phone'         => '35911377', 
            'name'          => 'jorge', 
            'gender'        => 'M', 
            'birth'         => '1981-05-13', 
            'email'         => 'jorge@hotmail.com', 
            'password'      => Hash::make('123456'),
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
