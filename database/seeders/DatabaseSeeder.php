<?php

namespace Database\Seeders;

use App\Http\Controllers\ConfigController;
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
     //   $this->call(CharacterSeeder::class);
        $this->call(CharacterSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(ItemSupport::class);
        $this->call(CourseSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(ConfigSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(ArticleSeeder::class);
    }
}
