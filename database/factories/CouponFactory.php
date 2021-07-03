<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coupon_data;
use App\Model;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Coupon_data::class, function (Faker $faker) {




    return [
        'coupon_code' => strtolower(str_random(5)),
        'discount_per' => (int)$faker->boolean(60) ? 15 : 20,
        'expired_date' => Carbon::parse('2021-08-25'),
        'coupon_status' => 1,
      
    ];


    // $data=[
    //     'coupon_code' => strtolower(str_random(5)),
       
    //     'expired_date' => Carbon::parse('2020-01-25'),
    //     'coupon_status' => 1,
    // ];
    // $i=1;
    // while($i<=20){
    //     if($i%5 == 0){
    //         $data['discount_per']=$i;
    //     }
    //    $i++;
    // }

});
