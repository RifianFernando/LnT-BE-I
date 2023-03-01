<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $faker = Faker::create('id_ID');

        DB::table('authors')->insert([
            'name' => 'Rifian',
            'birth_of_date' => '2023/10/10',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('authors')->insert([
            'name' => 'Hori',
            'birth_of_date' => '2023/10/10',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'categoryName' => 'Romance'
        ]);

        DB::table('categories')->insert([
            'categoryName' => 'Horror'
        ]);
    }
}
