<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\News;
use App\Models\Alumni;

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
            'name' => 'admin',
            'auth' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'ika',
            'auth' => 'ika',
            'email' => 'ika@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'alumni',
            'auth' => 'alumni',
            'email' => 'alumni@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Alumni::create([
            'body' => 'Program Kerja IKa'
        ]);

        User::factory(4)->create();
        News::factory(15)->create();

    }
}
