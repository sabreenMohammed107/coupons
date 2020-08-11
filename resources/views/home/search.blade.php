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
    }

    input[type=checkbox]:not(old) {
        width: 2em;
        margin: 0;
        padding: 0;
        font-size: 1em;
        display: flex;
        display: inline;

    }
</style>

@endsection


@section('content')
<div class="main">

    <div class="container" style="direction: rtl;width: 686px !important">
        <img src="{{ asset('webasset/images/logo.jpg')}}" style="width:200px;hieght:200px">
        <div class="form-submit" style="margin: 0 30px;">
                <a style="text-decoration: none;font-size:16px" href="{{route('home.index')}}" class="submit"  >احصل على كوبون خصم</a>
            </div>
        <form method="POST" action="{{route('fetch-result')}}" class="appointment-form" style="padding: 0px 60px 0px 60px;" id="appointment-form">
            <input type="hidden" value="{{csrf_token()}}" id="catToken" />
            <h2 style="text-align:center;margin-bottom: 10px;">البحث عن كوبون الخصم</h2>
            <div class="form-group-1">
                <input type="text" name="phone" id="phone" placeholder="رقم الموبايل المسجل " required />

                <span id="phonerror" style="color:red;background:#ccc;text-align:center;margin-bottom:20px;display:none">يجب ان تدخل رقم الموبايل </span>
                <span id="rrorResult" style="color:red;background:#ccc;text-align:center;margin-bottom:20px;display:none">هذا الرقم غير مسجل /او لايوجد لديه  كوبونات مفعلة</span>


            </div>
            <div class="form-submit">
                <input type="submit" name="submit" id="search_button" class="submit" style="font-size:16px" value="بحث " />
            </div>
        </form>
        <div id="result">
            @include('home.result')

        </div>

        @endsection
        @section('scripts')

        <script type="text/javascript">
            $(document).ready(function() {
                $('#search_button').click(function() {
                    event.preventDefault();
                    var token = $("#catToken").val();
                    var OR = document.getElementById("phone").value;
                    if (OR == '') {
                        $('#phonerror').css('display', 'block');
                    } else {
                        $('#phonerror').css('display', 'none');
                        $.ajax({
                            type: 'POST',
                            url: "{{route('fetch-result')}}",
                            data: {
                                _token: token,
                                phone: $('#phone').val(),

                            },
                            success: function(result) {

                                $('#result').html(result);
                                $('#rrorResult').css('display', 'none');
                            },
                            error: function() {
                                $('#rrorResult').css('display', 'block');
                                $('span#couponCode').html('');
                                $('span#couponPer').html('');
                                $('span#couponMobile').html('');
                                $('span#couponDate').html('');


                            }
                        });
                    }
                });
            });
        </script>
        @endsection