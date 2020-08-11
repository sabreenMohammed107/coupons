<div jscontroller="sWGJ4b" jsaction="EEvAHc:yfX9oc;" class="freebirdFormviewerComponentsQuestionBaseRoot">
			
			<div class="freebirdFormviewerComponentsQuestionBaseHeader">
			
  <p style="color:#73AD21; font-size:20px;margin-top:0"><b>رقم كود الخصم : </b><span id="couponCode">{{$coupon->coupon_code}}.<span>
</p>
  <p style="color:red; font-size:20px;margin-top:0"><b>قيمة الخصم : </b><span  id="couponPer">{{$coupon->discount_per}}</span> %.</p>
 <p style="color:#73AD21; font-size:20px;margin-top:0"><b>على رقم الموبايل : </b><span  id="couponMobile">{{$coupon->student->mobile ?? ''}}</span></p>
  <hr>
  <?php $date = date_create($coupon->expired_date) ?>
  <p style="color:red; font-size:16px">سوف ينتهى فى :<span id="couponDate"> {{ date_format($date,"d-m-Y") }}</span></p>
		</div></div>
		
               
        <div class="form-check">
                <label for="agree-term" class="label-agree-term"><b >ملحوظة : </b>  يتم ربط الكوبون برقم موبايل 1 فقط خاص بالطالب ولا يمكن استخدامه مع كوبون اخر طالما الكوبون الحالى نشط للإستخدام - وكل كوبون خصم يكون له تاريخ إنتهاء يجب ألا يتخطاه ويتم الغاءه تلقائيا
</label>
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