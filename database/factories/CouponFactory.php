<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Coupon_data;
use App\Model;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Coupon_data::class, function (Faker $faker) {
    return [
        'coupon_code' => str_random(10),
        'discount_per' =>(int)$faker->boolean(80)? 15 : 20,
        'expired_date' => Carbon::parse('2015-08-30'),
        'coupon_status' => 1,
    ];
});
