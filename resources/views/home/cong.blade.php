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
  <hr>
    <div class="form-submit" style="margin:30px 0;">
                <a style="text-decoration: none;font-size:16px" href="{{route('home.index')}}" class="submit"  >احصل على كوبون خصم</a>
            </div>
            <div class="footer">
        <footer class="footer">
        <!-- <a href="https://api.whatsapp.com/send?phone=15551234567&text=I'm%20interested%20in%20your%20car%20for%20sale" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://www.facebook.com/seniorsteps.it/" target="_blank" class="float2">
            <i style="margin: 10px;" class="fa fa-facebook my-float fa-2x"></i>
        </a>
</footer>
            </div>
</div>

    </div>
    
@endsection