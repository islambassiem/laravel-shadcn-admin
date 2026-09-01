<?php

namespace Database\Seeders;

use App\Models\Employees\Category;
use App\Services\DataSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataSeeder::run(
            filename: 'categories.json',
            table: 'lookup_categories'
        );
    }
}
