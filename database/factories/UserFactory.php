<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'role_id' => $faker->numberBetween(1,3),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    static $password;

    return [
        'category_id' => $faker->numberBetween(1,10),
        'photo_id' => 1,
        'title' => $faker->sentence(7,11),
        'body' => $faker->paragraphs(rand(10,15), true),
//        'slug'=> $faker->slug()
    ];
});

$factory->define(App\Role::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->randomElement(['administrator', 'subscriber']),

    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->randomElement(['PHP', 'JAVASCRIPT']),

    ];
});

$factory->define(App\Photo::class, function (Faker $faker) {
    static $password;

    return [
        'file' =>'placeholder.jpg',

    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    static $password;

    return [
        'post_id' =>$faker->numberBetween(1,10),
        'is_active' =>1,
        'author'=>$faker->name,
        'photo'=> 'placeholder.jpg',
        'email'=> $faker->safeEmail,
        'body'=> $faker->paragraphs(1, true),


    ];
});

$factory->define(App\CommentReply::class, function (Faker $faker) {
    static $password;

    return [

        'is_active' =>1,
        'author'=>$faker->name,
        'photo'=> 'placeholder.jpg',
        'email'=> $faker->safeEmail,
        'body'=> $faker->paragraphs(1, true),


    ];
});