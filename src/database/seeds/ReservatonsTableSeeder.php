<?php

use Illuminate\Database\Seeder;

class ReservatonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Reservation::class,100)->create();

    }
}
