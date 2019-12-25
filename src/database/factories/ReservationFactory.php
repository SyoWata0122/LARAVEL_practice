<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'room_name' => $faker->room_name(),
        'checkin' => $faker->checkin(),
        'checkout' => $faker->checkout()

        //
    ];
});
