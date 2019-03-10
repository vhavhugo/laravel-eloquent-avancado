<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('users')->insert([
        //     'name' => 'joao',
        //     'email' => 'joao@teste.com.br',
        //     'password' => bcrypt('1234')
        // ]);


        $this->call(UsersTableSeeder::class);
    }
}
