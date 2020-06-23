<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employe;
use Faker\Generator as Faker;

$factory->define(Employe::class, function (Faker $faker) {
    return [
      'firstname'  =>    $faker -> firstName(),
      'lastname' =>      $faker -> lastName(),
      'date_of_birth' => $faker -> date(),
      'role' =>          $faker -> jobTitle()
    ];
  });
