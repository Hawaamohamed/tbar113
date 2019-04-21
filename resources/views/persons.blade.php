@extends('index2')
@section('content')

<style>

</style>
<div style="background: #ccc;margin-top:60px;min-height:474px;">


<div class="row">
  <!--*****************Start Chating****************-->
    <div class="col-md-3 col-sm-3 hidden-xs" style=" padding:0;margin-top: 30px;">
     <div class="panel panel-default chat" style="overflow:auto;padding:0;position: fixed;width: 25%;border-radius:20px;left: 5px;">
      <!--<div class="panel-heading" dir='rtl' style="height:35px;"></div>-->
      <div class="panel-body chat_body" style="margin-bottom:0px;top:0px;">
       @foreach($charities as $charity)
        <div class="charity_chat" style="cursor:pointer">
          <div class="col-sm-9 name" style="margin-top:25px;padding:0;padding-right:7px;">
            <span class="chat_charity_name pull-right" style="font-size:12px">{{$charity->name}}</span>
          </div>
          <div class="col-sm-3 img" style="margin-top:20px;padding-right: 0">
            <img src="{{asset('avatar/'.$charity->profile)}}" style="border-radius:50%">
          </div>
        </div>
      @endforeach

      </div>
      <!-- Hidden chat for only one charity -->
      <div class="col-sm-12 hidden" id="appendnewChat" style=" padding: 0;">
       <div class="panel panel-default" style="display:block;border-radius:0 0 20px 20px;padding-left:0">
        <div class="panel-heading" style="height:50px"><div class='col-sm-9' style="padding:2px"><span class="pull-right"></span></div><div class='col-sm-3' style="padding:0"></div></div>
        <div class='panel-body' id="ch_body">

        </div>
        <div class="panel-footer" style="padding: 5px;bottom:0;border-radius:0 0 20px 20px">
            <textarea type="text" name='chat' class='form-control has-feedback' rows="1"  cols="18" wrap="soft" style="overflow:hidden;border:none; resize:none;padding:6px;bottom:0;border-radius:10px" dir='rtl' Placeholder="ارسل رسالة..." required></textarea>
        </div>
       </div>
      </div>
      <!--end hidden-->
     </div>
   </div>

<!--*************Start Posts******************************-->
  <div class='col-md-6 col-sm-12 col-xs-12 div1'>
   <div class="col-sm-12">
    <setion class="post">
      <div class="panel panel-default" style="margin-top:27px;border-radius:20px">
        <div class="panel-body">
            <i class="fa fa-chevron-down" aria-hidden="true" href="#myModal" type="" data-id="PostId" data-toggle="modal"></i>
          <div class="head">
           <div class='row' dir='rtl'>
             <div class='col-sm-3 col-xs-4'>
              <img src="{{ url("/design/images/2.gif") }}" class="img-responsive display-inline pull-right" style="max-width:80px;max-height:80px;border-radius:50%;">
             </div>
             <div class='col-sm-5 col-xs-5'>
               <span class="name pull-right">اسم الجمعيه بالكامل </span>
             </div>
            <div class='col-sm-2 col-sm-offset-1 col-xs-1'>
             <span class='date pull-left'> التاريخ </span>
            </div>
           </div>
         </div>
         <br>
         <div class='row' dir="rtl" style='min-height: 60px;'>
           <div class='col-sm-9 col-xs-12'>
              <p class='pull-right' dir='rtl'>ظاهرة التسول
              انتشرت بكثرة في القرن العشرون بسبب غلاء المعيشة وارتفاع نسبة البطالة
              المبلغ المطلوب 5000 جنية</p>
          </div>
         <img src="{{ url("/design/images/w1.jpg") }}" class="img-responsive display-inline pull-right post_img" style="width:95%;height:200px;margin-bottom:20px;margin-right:15px;">
        </div>

        <div class='row' style="margin-bottom:-2%;">
            <div class='col-sm-3 hidden-xs span2'><span class="pull-right">1500</span></div>
          <div class='col-sm-6 col-xs-12'>
          <div class="progress">
           <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"> 42% </div>
          </div>
         </div>
        <div class='col-sm-3  hidden-xs'><span class="pull-left">5000</span></div>
        </div>
       </div>
       <div class='panel-footer' style="border-radius: 0 0px 20px 20px">
         <div class="row">
          <div class='col-sm-9 col-xs-6'>
           <div class='btn btn-default share' id=""><span>مشاركة</span> <i class="fa fa-share " aria-hidden="true"></i></div>
          </div>
          <div class='col-sm-3  col-xs-6'>
            <span class='btn btn-default pull-right donation' aria-hidden="true" href="#myModal2" data-id="" data-toggle="modal"> تبرع</span>
          </div>
        </div>
      </div>
     </div>
  </section>
  </div>

</div>
      <!--************************End Post**********************-->

      <!--*****************Start Charities****************-->
      <div class="col-md-3 col-sm-3 hidden-xs">
        <div class="panel panel-default " style="position: fixed;width: 25%;border-radius:20px;right: 5px;margin-top:30px">
         <div class="panel-body charities" style="margin-bottom:0px;top:0px;overflow:auto;">
           @foreach($charities as $charity)
            <div class="" style="cursor:pointer">
              <div class="col-sm-9 name" style="margin-top:25px;padding:0;padding-right: 5px;">
                <span class="chat_charity_name pull-right" style="font-size:12px">{{$charity->name}}</span>
              </div>
              <div class="col-sm-3 img" style="margin-top:20px;padding-right: 0;padding:0">
                <img src="{{asset('avatar/'.$charity->profile)}}" style="border-radius:50%">
              </div>
            </div>
          @endforeach

         </div>
        </div>
      </div>



  </div>




</div>




<!-- Start PopUp1 -->
            <div class='container'>
               <div id="myModal" class="modal fade">
                 <form>
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close pull-left" style="margin:0;padding:6px;font-size: 20px;" data-dismiss="modal" aria-hidden="true">&times;</button>
                               <h4 class="modal-title">بلاغ</h4>
                           </div>
                          <div class="modal-body">
                              <div class='row'>
                             <div class='col-md-12 pull-right'>
                               <textarea type="text" name='comment' id='comment' class='question form-control has-feedback' rows="8"  cols="20" wrap="soft" style="overflow:hidden; resize:none;" dir='rtl' Placeholder="اكتب سبب البلاغ..."></textarea>
                             </div>
                           </div>
                         </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">الغاء</button>
                               <button type="submit" class="btn btn-primary btn-lg">ارسال</button>
                           </div>
                       </div>
                   </div>
                 </form>
               </div>
             </div>
      <!-- End Popup --->

      <!-- Start Pop Up -->
                  <div class='container'>
                     <div id="myModal2" class="modal fade">
                       <form>
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <button type="button" class="close pull-left" style="margin:0;padding:6px;font-size: 20px;" data-dismiss="modal" aria-hidden="true">&times;</button>
                                     <h4 class="modal-title">تبرع</h4>
                                 </div>
                                <div class="modal-body">

                                    <div class='row' dir='rtl'>
                                      <div class='row' style='margin-bottom: 33px;'>
                                      <div class="col-sm-4" style='padding-right: 50px'>
                                       <!-- PayPal Logo -->
                                       <img src="{{url('/design/images/paypal.svg ')}}" border="0" class="img-responsive" alt="PayPal Logo" style="width:45%;height: 40px">
                                        <input type="radio" value="paypal" name="paypal" required style="margin-left: 66%;margin-top: 10px;">
                                      </div>
                                      <div class="col-sm-4" style='padding-right: 50px'>
                                       <!-- PayPal Logo -->
                                       <img src="{{url('/design/images/visa.jpg ')}}" border="0" class="img-responsive" alt="PayPal Logo" style="width:45%;height: 40px">
                                        <input type="radio" value="paypal" name="paypal" required style="margin-left: 66%;margin-top: 10px;">
                                      </div>
                                      <div class="col-sm-4" style='padding-right: 50px'>
                                       <!-- PayPal Logo -->
                                       <img src="{{url('/design/images/vodafone.jpg')}}" border="0" class="img-responsive" alt="PayPal Logo" style="width:55%;height: 40px">
                                        <input type="radio" value="paypal" name="paypal" required style="margin-left: 66%">
                                      </div>
                                          <hr>
                                    </div>

                                     <div class='col-sm-3 pull-right'>
                                      <label class="pull-right">الايميل</label>
                                    </div>
                                    <div class='col-sm-6 pull-right'>
                                     <input type="email" name="email" class="form-control">
                                    </div>
                                  </div>

                                  <div class='row' dir='rtl'>
                                   <div class='col-sm-3 pull-right'>
                                    <label class="pull-right">المبلغ</label>
                                  </div>
                                  <div class='col-sm-6 pull-right'>
                                   <input type="text" name="mony"class="form-control">
                                  </div>
                                </div>

                                <div class='row' dir='rtl'>
                                 <div class='col-sm-3 pull-right'>
                                  <label class="pull-right">رقم الحساب</label>
                                </div>
                                <div class='col-sm-6 pull-right'>
                                 <input type="text" name="acount_num" class="form-control">
                                </div>
                              </div>
                            </div>

                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">الغاء</button>
                                     <button type="submit" class="btn btn-primary btn-lg" >ارسال</button>
                                 </div>
                             </div>
                           </form>
                         </div>
                     </div>
                   </div>
            <!-- End Popup --->


      <script src="{{ url("/design/colo/js/jquery-3.2.1.min.js") }}"></script>
      <script>
      $(document).ready(function(){


        $(".charity_icon").on('click',function(){
          $(this).css('display','block');
           $('.charity').animate({
           'right': -$('.charity').width()+$(this).width(),
           //'top':-screen.height + $('.charity').height(),
           'z-index':'2'
         },1000);

      })


      $(".chat").height(window.screen.height/2+84);
      $(".charities").height(window.screen.height/2+50);

  $(".charity_chat").on('click',function(){
      var charityName = $(this).children(".name").children(".chat_charity_name").html();
      var charityImg = $(this).children(".img").children().attr('src');

        $("#appendnewChat").removeClass("hidden");
        $("#appendnewChat").children().children(".panel-heading").children("div:eq(0)").children("span").html(charityName);
        $("#appendnewChat").children().children(".panel-heading").children("div:eq(1)").html("<img src='"+charityImg+"'>");
        $("#appendnewChat img").css({
          "borderRadius":"50%",
          "height":"100%",
          "width":"100%"
        });
        $(".chat_body").css({
          'height':"auto"
        })
        $(".chat_body").css({
          'height':$(".chat").height()/2-77,
          "border-bottom":"3px solid #ccc",
          "overflow":"auto"
        }).parent(".chat").css("overflow","hidden");


  })

  textarea.addEventListener('keydown', autosize);

  function autosize(){
     var el = this;
     setTimeout(function(){
       el.style.cssText = 'transition:all .3s ease;width:100%;border:none;';
       // for box-sizing other than "content-box" use:
       // el.style.cssText = '-moz-box-sizing:content-box';
       el.style.cssText = 'max-height: 30px;resize:none;overflow:hidden;transition:all .3s ease;width:100%;border:none;';

     },0);
   }
    })
    // Add any thing in file
      </script>
@endsection
