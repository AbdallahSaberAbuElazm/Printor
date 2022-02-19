<?php

namespace Database\Seeders;

use App\Models\LibraryOwner;
use Illuminate\Database\Seeder;
use PharIo\Manifest\Library;

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
        LibraryOwner::factory(20)->create();
    }
}
