@extends('index3')

@section('content')

<div style="background: #ccc;margin-top:60px;min-height:474px;">

<!--*************Start Posts******************************-->
<div class="row">

  <div class="col-md-2 col-sm-12 col-xs-12" style="background:white;min-height:500px; padding:0;">
    <div class="col-sm-12 text-center" style="background:#128282;height:50%;padding:0;padding-top:7px;color:white" dir='rtl'> الشات
      <p style="background:white;padding:0;height:100%">

      </p>
    </div>
  </div>

  <div class="col-md-1 hidden-xs"> </div>

  <div class='col-md-6 col-sm-12 col-xs-12 div1' style="margin-top: 10px;">
    <setion class="post">
      <div class="panel panel-default">
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
              <p class='lead pull-right'>البوست</p>
          </div>
         <img src="{{ url("/design/images/3.jpeg") }}" class="img-responsive display-inline pull-right post_img" style="width:95%;height:200px;margin-bottom:20px;margin-right:15px;">
        </div>

        <div class='row' style="margin-bottom:-4%;">
          <div class='col-sm-3  hidden-xs'><span class="pull-right">5000</span></div>

          <div class='col-sm-6 col-xs-12'>
          <div class="progress">
           <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">73%</div>
          </div>
         </div>

        <div class='col-sm-3 hidden-xs span2'><span>1000</span></div>

        </div>
       </div>
       <div class='panel-footer'>
         <div class="row">
          <div class='col-sm-9 col-xs-2'>
           <div class='btn btn-default share' id=""><span>مشاركة</span> <i class="fa fa-share " aria-hidden="true"></i></div>
          </div>
          <div class='col-sm-3  col-xs-2'>
            <span class='btn btn-default pull-right donation' aria-hidden="true" href="#myModal2" data-id="" data-toggle="modal"> تبرع</span>
          </div>
        </div>
      </div>
     </div>
  </section>
   <setion class="post">
      <div class="panel panel-default">
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
              <p class='lead pull-right'>البوست</p>
          </div>
         <img src="{{ url("/design/images/3.jpeg") }}" class="img-responsive display-inline pull-right post_img" style="width:95%;height:200px;margin-bottom:20px;margin-right:15px;">
        </div>

        <div class='row' style="margin-bottom:-4%;">
          <div class='col-sm-3  hidden-xs'><span class="pull-right">5000</span></div>

          <div class='col-sm-6 col-xs-12'>
          <div class="progress">
           <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">73%</div>
          </div>
         </div>

        <div class='col-sm-3 hidden-xs span2'><span>1000</span></div>

        </div>
       </div>
       <div class='panel-footer'>
         <div class="row">
          <div class='col-sm-9 col-xs-2'>
           <div class='btn btn-default share' id=""><span>مشاركة</span> <i class="fa fa-share " aria-hidden="true"></i></div>
          </div>
          <div class='col-sm-3  col-xs-2'>
            <span class='btn btn-default pull-right donation' aria-hidden="true" href="#myModal2" data-id="" data-toggle="modal"> تبرع</span>
          </div>
        </div>
      </div>
     </div>
  </section>
  </div>

    <div class="col-md-1 hidden-xs"> </div>

  <!--************************End Post**********************-->


  <div class="col-md-2 col-sm-12 col-xs-12" style="background:white;min-height:500px; padding:0;">
    <div class="col-sm-12 text-center" style="background:#128282;height:50%;padding:0;padding-top:7px;color:white"> الجمعيات
      <p style="background:white;padding:0;height:100%">

      </p>
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




@endsection
