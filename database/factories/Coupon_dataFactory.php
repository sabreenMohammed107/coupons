<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon_data>
 */
class Coupon_dataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'coupon_code' => Str::random(5),
            'discount_per' => $this->faker->boolean(60) ? 15 : 20,
            'expired_date' => Carbon::parse('2024-08-25'),
            'coupon_status' => 1,
        ];
    }
}
