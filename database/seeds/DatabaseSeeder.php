<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->tasks()->save(
                factory(App\Task::class)->make()
            );
        });
    }
}
