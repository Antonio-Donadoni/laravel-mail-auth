<?php



use App\Model;
use App\Company;
use Faker\Generator as Faker;


$factory->define(Company::class, function (Faker $faker) {
    return [
      'name' => $faker -> company(),
      'street' => $faker -> streetAddress(),
      'city' => $faker -> city(),
      'state' => $faker -> state(),
      'phone_number' => $faker -> phoneNumber()
    ];
    
});
