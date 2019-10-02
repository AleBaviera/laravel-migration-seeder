<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Enterprise;

$factory->define(Enterprise::class, function (Faker $faker) {
    return [
        'name'=> $faker-> word,
        'phone'=> $faker-> phoneNumber,
        'mail'=> $faker-> email,
        'website'=> $faker-> url
    ];
});
