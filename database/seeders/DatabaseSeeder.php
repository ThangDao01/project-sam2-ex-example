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
        $this->call(CharacterSeeder::class);
        $this->call(ItemSupport::class);
        $this->call(DataSupport::class);
<<<<<<< HEAD
        $this->call(AnimalSeeder::class);
=======

>>>>>>> 7ceca96b50c039a0ecf5b7e4258f0a86300f4686
    }
}
