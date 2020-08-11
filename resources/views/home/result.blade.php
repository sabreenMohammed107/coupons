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
               
        </div>

    </div>