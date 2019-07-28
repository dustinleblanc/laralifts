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
        factory(\App\Exercise::class, 25)->create();
        factory(App\User::class, 50)->create()->each(function ($user) {
            factory(\App\Activity::class, 100)->create([
                'user_id' => $user->id,
                'exercise_id' => \App\Exercise::all()->random(1)->first()->id
            ]);
        });
    }
}
