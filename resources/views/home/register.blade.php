@extends('layout.web')
@section('style')
<style>
    .freebirdFormviewerViewFormContent {
        color: #202124;
        padding: 0;
    }

    .freebirdFormviewerComponentsQuestionBaseRoot {
        -webkit-transition: background-color 200ms cubic-bezier(0.0, 0.0, 0.2, 1);
        transition: background-color 200ms cubic-bezier(0.0, 0.0, 0.2, 1);
        background-color: #ffffff;
        border: 1px solid #dadce0;
        border-radius: 8px;
        color: #595757;
        margin-bottom: 12px;
        padding: 24px;
        page-break-inside: avoid;
        word-wrap: break-word;
        height: 360px;
        overflow-y: scroll;
    }

    input[type=checkbox]:not(old) {
        width: 2em;
        margin: 0;
        padding: 0;
        font-size: 1em;
        display: flex;
        display: inline;

    }
    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
    @media only screen and (max-width: 600px) {
  .respo {
    margin: 10px 0 0 10px !important;
  }
}
</style>
@endsection



@section('content')

<div class="main">

    <div class="container" style="direction: rtl;width: 686px !important">
    <div style="width:100%;">
        <div style="display: inline-block;width:40%">
        <img src="{{ asset('webasset/images/logo.jpg')}}" style="width:200px;hieght:200px">

        </div>
       
        <div style="display: inline;width:55%">
                <a style="text-decoration: none;font-size:16px;float:left;margin:30px 0 0 20px" href="{{ route('search') }}" class="submit respo"  >البحث عن بيانات كوبون معين
</a>
        </div>
      
    </div>
        
            @if(Session::has('flash_success'))
                <div style="width:100%;background:red;text-align:center;margin-top:20px">
                    <div class="alert alert-success">
                        <strong><i class="fa fa-check-circle"></i> {!! session('flash_success') !!}</strong>
                    </div>
                </div>
            @endif
            @if(Session::has('flash_danger'))
            <div style="width:100%;background:red;text-align:center;margin-top:20px">
                    <div class="alert alert-danger">
                        <strong><i class="fa fa-info-circle"></i> {!! session('flash_danger') !!}</strong>
                    </div>
                </div>
            @endif
           

        <form method="POST" action="{{route('home.store')}}" class="appointment-form" autocomplete="off">
        {{ csrf_field() }}
            <h2 style="text-align:center;margin-bottom: 10px;"> احصل على كوبون خصم </h2>
            <div class="form-group-1">
                <input type="text" name="name" id="name" pattern="[^0-9]*" placeholder="الإسم بالكامل" required />
                <input type="text" name="mobile" value="{{ old('mobile') }}" id="phone" pattern="[0]{1}[0-9]{10}" 
       title="Phone number with 0 and remaing 10 digit with 0-9" placeholder="رقم التليفون (يفضل رقم الواتساب)" required />
                <input type="text" name="job" id="job" placeholder="الوظيفه" />

                <input type="text" name="education" id="education" placeholder="الدراسة" />
                <input type="text" name="city" id="city" placeholder="المحافظة /الدولة" />

            </div>
            <div jscontroller="sWGJ4b" jsaction="EEvAHc:yfX9oc;" class="freebirdFormviewerComponentsQuestionBaseRoot">
                <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                    <h1>إختر المواعيد المفضلة</h1>
                    @foreach($durations as $dur)
                    <input type="checkbox"  name="dur[]" value="{{$dur->id}}">
                    <label for="vehicle1">{{$dur->duration_text}}</label><br>
                    @endforeach
               
                </div>
            </div>
            <div jscontroller="sWGJ4b" jsaction="EEvAHc:yfX9oc;" class="freebirdFormviewerComponentsQuestionBaseRoot">
                <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                    <h1>إختر الدورات المناسبة </h1>

                    @foreach($courses as $course)
                    <input type="checkbox"  name="course[]" value="{{$course->id}}">
                    <label for="vehicle1">{{$course->course_name}}</label><br>
                    @endforeach
          
                </div>
            </div>
            <div class="form-group-1">
                <textarea name="note" id="note" rows="3" placeholder="...الملاحظات" style="width:100%;border: 2px solid #9e9e9ecc;"></textarea>


            </div>

            <div class="form-check">
                <label for="agree-term" class="label-agree-term"><b >ملحوظة : </b>  يتم ربط الكوبون برقم موبايل 1 فقط خاص بالطالب ولا يمكن استخدامه مع كوبون اخر طالما الكوبون الحالى نشط للإستخدام - وكل كوبون خصم يكون له تاريخ إنتهاء يجب ألا يتخطاه ويتم الغاءه تلقائيا
</label>
            </div>
            <div class="form-submit">
                <input type="submit" name="submit" id="submit" class="submit" style="font-size:16px" value=" احصل على كوبون الخصم" />
            </div>
        </form><?php
         $url = 'http://coupons.seniorsteps.net/' ;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=01097003465&text=http://coupons.seniorsteps.net/" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    </div>

</div>
@endsection