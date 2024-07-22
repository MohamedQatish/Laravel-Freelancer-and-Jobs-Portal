<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PostPackage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            SpecializationSeeder::class,
            CategorySeeder::class,
            SkillSeeder::class,
            CountrySeeder::class,
            FreelancerSeeder::class,
            PostPackageSeeder::class,
            CompanySeeder::class,
            CompanyJobSeeder::class,
            CompanyJobSkillSeeder::class,
        ]);
    }
}
