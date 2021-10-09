<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Todo::factory(10)->create();
    }
}
