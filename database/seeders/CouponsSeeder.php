<?php

namespace Database\Seeders;
use App\Models\CouponFactoy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = 100;
        CouponFactoy::factory()->count(100)->create();
    //    Coupon_data::factory(100)->create();
    }
}
