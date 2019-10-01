<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firstName'=> $faker-> firstName,
      'lastName'=> $faker-> lastName,
      'jobTitle'=> $faker-> sentence(3),
      'bithDay'=> $faker-> date,
      'salary'=> $faker-> randomNumber
    ];
});
