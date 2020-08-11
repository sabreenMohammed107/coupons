@extends('layout.web')
@section('style')
<style>
.center {
  margin: auto;
    margin-top: 10%;
    width: 60%;
    background: #fff;
    color: #73AD21;
    border: 3px solid #73AD21;
    padding: 50px;
	text-align:center;
	direction:rtl;
}
body {
    background-attachment: fixed;
}
	</style>

@endsection



@section('content')
<div class="center">
   <img src="{{ asset('webasset/images/logo.jpg')}}" style="width:400px;hieght:200px">
   <h3 style="text-transform: uppercase;font-size:35px"> تهانينا </h3>
  <p style="color:#73AD21; font-size:20px"><b>رقم كود الخصم : </b>{{$randomCoupon->coupon_code}}.</p>
   <p style="color:#73AD21; font-size:20px"><b>على رقم الموبايل : </b>{{$randomCoupon->student->mobile}}</p>
  <hr>
  <p style="color:#73AD21; font-size:20px"><b>  خصم : </b>{{$randomCoupon->discount_per}} %.</p>

  <?php $date = date_create($randomCoupon->expired_date) ?>
  <p style="color:red; font-size:16px">سوف ينتهى فى :  {{ date_format($date,"d-m-Y") }}</p>
</div>

    </div>


@endsection