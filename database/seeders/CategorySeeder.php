<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Services\DataSeeder;
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
