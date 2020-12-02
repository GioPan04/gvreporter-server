<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $user = new \App\Models\User;
        $user->username='GioPan';
        $user->name='Gioele Pannetto';
        $user->password=bcrypt('password');
        $user->save();
    }
}
