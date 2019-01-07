@extends('index3')

@section('content')

<div style="background: #ccc;margin-top:60px;min-height:474px;">

  <!--******************Cover Image*********************-->
  <div class="row">
    <div class='col-sm-12'>
     <div class='cover-img'>
          <img class="img-responsive" src="{{ url('/design/images/horse.jpg') }}" style="width: 100%;height: 50%;margin-top: 0">

     </div>
   </div>
  </div>
  <!--*****************End Cover Image*********************-->

    <div class="row" dir='rtl'>
     <!--**************Personal Image**********************-->
     <div class='col-sm-3 col-xs-12 img-info'>
        <div class="col-sm-12 profile-img center-block">
          <!-- start Avatar -->
              <img class="img-responsive img-thumbnail center-block"  src="{{ url('/design/images/1.JPG') }}">
              <form type='form' enctype="multipart/form-data">
                  <label class="btn" id="change_img">
                      <i class="fa fa-camera" style="font-size:9px"></i><input type="file" id='avatar' name='avatar' style="display: none;">
                       تعديل
                  </label>
              </form>
          <!-- End Avatar  -->

      </div>
      <div class="col-sm-12">
        <div class='info'>
        <h4 class='text-center'style="color:'green';"> اسم الجمعية</h4><br>
        <p class='text-center' dir='rtl'> المحافظة</p>
        <p class='text-center'>رقم التلفون </p>
        <p class='text-center'>تاريخ الانضمام </p><br>
      </div>
 </div>

     </div>
  <!--**************End Personal Image**********************-->

<!--***************Start Posts*****************************-->
    <div class='col-md-7 col-sm-7 col-xs-12 div1'>
      <!--New Post-->
      <setion class="post newPost">
        <div class="panel panel-default" dir='ltr' style="margin-top: 20px;">
          <div class="panel-body">

            <div class="head" style="margin-top: 20px">
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
           <div class="row">
            <div class="col-sm-12">
             <textarea type="text" name='post' class='question form-control has-feedback' rows="3"  cols="18" wrap="soft" style="overflow:hidden; resize:none;" dir='rtl' Placeholder="اكتب شيئا..."></textarea>
            </div>
           </div>


         </div>
         <div class='panel-footer'>
           <div class="row">
             <div class='col-sm-9 col-xs-6'>
                <label class="btn" id="upload_img">
                    <i class="fa fa-camera"></i><input type="file" class='photo' name='photo' style="display: none;">
                </label>
            </div>
            <div class='col-sm-3 col-xs-6'>
              <span class='btn btn-info pull-right publish' id=""> نشر</span>
            </div>

          </div>
        </div>
       </div>
    </section>

<!--Old Posts-->

      <setion class="post">
        <div class="panel panel-default" dir='ltr'>
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
            <div class='col-sm-1 col-sm-offset-4 hidden-xs'><span>5000</span></div>

            <div class='col-sm-3 col-xs-12'>
            <div class="progress">
             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">73%</div>
            </div>
           </div>

          <div class='col-sm-1 hidden-xs span2'><span>1000</span></div>

          </div>
         </div>
         <div class='panel-footer'>
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
        <!--************************End Posts**********************-->

<div class='col-sm-2 details'style='background:white' >
  <a href="#" class="text-center center-block" style="color: lightseagreen">تفاصيل البوستات</a>
</div>


</div>

<!--
<script>
$(document).ready(function(){

$(".photo").change(function(e){

  var tmp_name    = $(".photo").val();
  var fileName    = e.target.files[0].name;
  var size        = e.target.files[0].size;
  var photo_type = e.target.files[0].type;


//$(".images").append("<img src='{{ url('/design/images/moh.jpg') }}' class='img-responsive display-inline pull-right' style='width:50%;'>");

$.ajax({
  url:"photos.php",
	type:'POST',
  data:{fileName:fileName,tmp_name,tmp_name,size,size,avatar_type,avatar_type},
  contentType:"multipart/form-data",
  success:function(data)
  {
   //$(".images").append("<img src='{{ url('/design/images/"+data+"') }}' class='img-responsive display-inline pull-right' style='width:50%;'>");
  //document.write(data);
	}
})
})

});
</script> -->
@endsection
