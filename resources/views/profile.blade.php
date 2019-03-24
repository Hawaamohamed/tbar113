@extends('index2')
@section('content')

	<link rel="stylesheet" href="{{ url("/design/colo/css/core-style.css") }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.cover2-img img{
	 width:100%;
	 height:50%;
	 margin-top: 0;
 }
 h2.cover-head{
	 line-height:33px;
	 height:300px;
	 line-height:40px;
	 font-family:Releway;
	 padding-top: 9%;
	 background:rgba(3,3,3,0.3);
	 overflow:hidden;
	 margin-top:0;
	 margin: 0;
 }
 h3.profile-head{
	line-height:33px;
	height:160px;
	line-height:30px;
	font-family:Releway;
	padding-top: 20%;
	background:rgba(3,3,3,0.8);
	overflow:hidden;
	margin-top:0;
	margin: 0;
 }
</style>
<div style="background: #ccc;margin-top:60px;min-height:474px;">

  <!--******************Cover Image*********************-->
  <div class="row">
    <div class='col-sm-12'>
     <div class="cover-img clearfix">
       <div class="alert" id="message_cover" style="display: none"></div>
         <div class="hover-content" style="border-radius: 0;width: 100%; margin: 0;right: 0;left: 0;">
         <form method="post" id="upload_form_cover" enctype="multipart/form-data" style="position:absolute;margin-top: 18%;margin-left: 50%;">
            {{ csrf_field() }}
          <label class="btn" id="upload_img">
              <i class="fa fa-camera" style="font-size: 18px;"></i><input type="file" name="select_file" id="select_file_cover" style="display: none;">
          </label>
          <input type="hidden" value="" name="getId">
        </form>
       </div>
			 <!--<h2 class='text-center cover-head'>Cover Image</h2>-->
			 <img class="img-responsive" src="{{ url('/images/cover.JPG') }}" id="uploaded_image_cover" style="width: 100%;margin-top: 0;height:auto">
     </div>
   </div>
  </div>
  <!--*****************End Cover Image*********************-->

    <div class="row" dir='rtl'>
     <!--**************Personal Image**********************-->
     <div class='col-sm-3 col-xs-12 img-info' style="padding: 0">

				 <div class=" clearfix" style="position: relative;left: 0%; top: 0px;">
					 <!-- start Avatar -->
			   <div class="cover2-img">
					 <!--<h3 class="text-center profile-head">Profile Image</h3>-->
					 <img class="img-responsive" id="uploaded_image_profile" src="{{ url('/images/pro.JPG') }}" style="height:auto">
		     </div>
              <div class="hover-content">
                <div class="alert" id="message_profile" style="display: none"></div>
                <form method="post" id="upload_form_profile" enctype="multipart/form-data">
                   {{ csrf_field() }}
                 <label class="btn" id="upload_img_profile">
                     <span class='edit' style="">Edit</span> <i class="fa fa-camera" style="font-size: 20px;color: white;"></i><input type="file" name="select_file" id="select_file_profile" style="display: none;">
                 </label>
                 <input type="hidden" value="" name="getId">
                </form>
                <!-- End Avatar  -->
            </div>

      </div>
      <div class="col-sm-12">
        <div class='info'>
        <h4 class='text-center'style="color:'green';"> اسم الجمعية</h4><br>
        <p class='text-center' dir='rtl'> المحافظة</p>
        <p class='text-center'>رقم التلفون </p>
        <p class='text-center'>تاريخ الانضمام </p>
         </div>
			  <a href="#" class="text-center center-block" style="color: lightseagreen;background:white;font-size:18px;">تفاصيل البوستات</a>
          <a href="{{url('update_ch')}}/{{$id}}" class="text-center center-block" style="color: lightseagreen;background:white;font-size:18px;">تعديل بيانات الجمعيه</a>
 </div>

     </div>
  <!--**************End Personal Image**********************-->

<!--***************Start Posts*****************************-->
    <div class='col-md-8 col-sm-8 col-xs-12 div1'>
        @if(session()->has('update'))
            <div class="alert alert-success">
                <h2>{{session('update')}}</h2>
            </div>
    @endif
      <!--New Post-->
      <setion class="post newPost">
        <div class="panel panel-default" dir='ltr'>

          <div class="panel-body">

            <div class="head" style="margin-top: 20px">
             <div class='row' dir='rtl'>
               <div class='col-sm-3 col-xs-4'>
                <img src="{{ url('/design/images/2.gif') }}" class="img-responsive display-inline pull-right" style="max-width:80px;max-height:80px;border-radius:50%;">
               </div>
               <div class='col-sm-5 col-xs-5'>
                 <span class="name name_pro pull-right">اسم الجمعيه بالكامل </span>
               </div>
              <div class='col-sm-2 col-sm-offset-1 col-xs-1'>
                <span class='date pull-left'> التاريخ </span>
              </div>
             </div>
           </div>
           <div class="row">
            <div class="col-sm-12">
             <textarea type="text" name='post' class='question form-control has-feedback' rows="4"  cols="18" wrap="soft" style="overflow:hidden; resize:none;padding:20px" dir='rtl' Placeholder="اكتب شيئا..."></textarea>
            </div>
            <div class="col-sm-12">
              <span id="uploaded_image"></span>
            </div>
           </div>


         </div>
         <div class='panel-footer'>
           <div class="row">
             <div class='col-sm-9 col-xs-6'>
               <div class="alert" id="message" style="display: none"></div>
               <form method="post" id="upload_form" enctype="multipart/form-data">
                  {{ csrf_field() }}
                <label class="btn" id="upload_img">
                    <i class="fa fa-camera"></i><input type="file" name="select_file" id="select_file" style="display: none;" multiple>
                </label>
              </form>

            </div>
            <div class='col-sm-3 col-xs-6'>
              <span class='btn btn-info pull-right publish pub_pro' id=""><a href="{{url('profile')}}" style="color:white"> نشر</a></span>
            </div>

          </div>
        </div>
       </div>
    </section>


    </div>
        <!--************************End Posts**********************-->

<div class='col-sm-1 details'style=''>

</div>

</div>

<script src="{{ url("/design/colo/js/jquery-3.2.1.min.js") }}"></script>
<script>
$(document).ready(function(){

//Upload Post Image
 $('#upload_form').on('change', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{ route('ajaxupload.store') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
     //$('#message').css('display', 'block');
     //$('#message').html(data.message);
     //$('#message').addClass(data.class_name);
     $('#uploaded_image').html("<img src='images/"+data.uploaded_image+"'class='img-responsive'>");
     $('#uploaded_image img').css({
			 "width":"100%",
			 "max-height":'250px'
		 });
   }
  })
 });


// Profile Image
 $('#upload_form_profile').on('change', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{ route('ajaxupload.store') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    //$('#message_profile').css('display', 'block');
    //$('#message_profile').html(data.message);
    //$('#message_profile').addClass(data.class_name);
    $('#uploaded_image_profile').attr('src',"images/"+data.uploaded_image).css({
      'width':'100%',
      'max-height': '160px'
    });

   }
  })
 });

// Cover Image
 $('#upload_form_cover').on('change', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{ route('ajaxupload.store') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    //$('#message_cover').css('display', 'block');
    //$('#message_cover').html(data.message);
    //$('#message_cover').addClass(data.class_name);
    $('#uploaded_image_cover').attr('src',"images/"+data.uploaded_image).css({
      'width':'100%',
      'height':'300px'
    });
   }
  })
 });


var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);

function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el.style.cssText = '-moz-box-sizing:content-box';
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },0);
}
});
</script>
@endsection
