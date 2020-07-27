<?php

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
        // $this->call(UserSeeder::class);
        factory(App\User::class,50)->create();
        factory(App\Model\Profile::class,50)->create();
        factory(App\Model\Image::class,100)->create();
        factory(App\Model\Chat::class,100)->create();
    }
}
