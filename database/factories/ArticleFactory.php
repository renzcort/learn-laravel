<?php

use Faker\Generator as Faker;
use App\Models\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' =>  $faker->text(50),
        'body'  =>  $faker->text(200)
    ];
});