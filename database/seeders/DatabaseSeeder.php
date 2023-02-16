<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
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
        //\App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'Test Test',
            'email' => 'mail@mail.com'
        ]);
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        /* Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'Javascript, Core PHP, Laravel',
            'company' => 'Aladdin Academy',
            'location' => 'Cairo, EGYPT',
            'email' => 'test@mail.com',
            'website' => 'https://aladdinacademy.org',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta dolorem culpa praesentium ut eos eum, molestiae blanditiis veritatis aliquid quas velit, deleniti officiis amet, atque dolor impedit a reprehenderit iste!'
        ]);

        Listing::create([
            'title' => 'Fullstack web Developer',
            'tags' => 'HTML, CSS, Bootstrap, Javascript, Vue.js,  Core PHP, Laravel, MySQL, SQLite',
            'company' => 'Aladdin Academy',
            'location' => 'Cairo, EGYPT',
            'email' => 'test@mail.com',
            'website' => 'https://aladdinacademy.org',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta dolorem culpa praesentium ut eos eum, molestiae blanditiis veritatis aliquid quas velit, deleniti officiis amet, atque dolor impedit a reprehenderit iste!'
        ]); */



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
