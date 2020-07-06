<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FujisuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FujisuUser::class, 10)->create();

    }
}
