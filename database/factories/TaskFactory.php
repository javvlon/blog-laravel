<?php
/**
 * Created by PhpStorm.
 * User: javlontulkinoff
 * Date: 2019-02-22
 * Time: 12:26
 */

use Faker\Generator as Faker;

$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'is_complete' => $faker->boolean,
    ];
});