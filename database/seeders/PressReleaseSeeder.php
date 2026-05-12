<?php

namespace Database\Seeders;

use App\Models\PressRelease;
use Illuminate\Database\Seeder;

class PressReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PressRelease::factory(6)->create();
    }
}
