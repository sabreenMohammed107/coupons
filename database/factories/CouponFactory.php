<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Coupon_data;
use App\Model;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Coupon_data::class, function (Faker $faker) {
    return [
        'coupon_code' => strtolower(str_random(4)),
        'discount_per' =>(int)$faker->boolean(60)? 15 : 20,
        'expired_date' => Carbon::parse('2020-10-05'),
        'coupon_status' => 1,
    ];
});
