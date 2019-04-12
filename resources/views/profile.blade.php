@extends('index2')
@section('content')

<!-- For upload multiple images (fileinput plugin)-->
<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="http://cdnjs.cloudflare/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fileinput.css" media="all" rel="stylesheet" type="text/css">
<style>
.file-footer-caption,.file-caption-main .file-caption,i.glyphicon-plus-sign,.file-drop-zone-title{
	display:none;
}
button.fileinput-upload-button,button.kv-file-zoom{
	display: none;
}
.input-group-append{
	min-width:50%;
	margin:0;
}
.kv-preview-thumb{
	width:32%;
	margin:2px;
	display:inline-block;
}
.list .dropdown-menu {
	 min-width: 77px;
	 box-shadow: none;
	 top: 77%;
}
.dropdown-toggle::after {
	 display:none;
 }
 .modal {
		background: none;
}
.dropdown-menu button:hover{
	background: #ddd;
	width:100%;
}
</style>
<div style="background: #e2e4e6;margin-top:50px;min-height:474px;">

  <!--******************Cover Image*********************-->
	{{Session('charity_id')}}
  <div class="row">
    <div class='col-sm-12'>
     <div class="cover-img clearfix">
       <div class="alert" id="message_cover" style="display: none"></div>
         <div class="hover-content" style="border-radius: 0;width: 100%; margin: 0;right: 0;left: 0;">
         <form method="post" id="upload_form_cover" action="{{url('/profile/updateCover')}}" enctype="multipart/form-data" style="position:absolute;margin-top: 18%;margin-left: 50%;">
            {{ csrf_field() }}
          <label class="btn" id="upload_img">
              <i class="fa fa-camera" style="font-size: 18px;"></i><input type="file" name="select_file" id="select_file_cover" style="display: none;">
          </label>
          <input type="hidden" value="{{Session('charity.charity_id')}}" name="charity_id">
        </form>
       </div>
			 <img class="img-responsive" src="{{ asset('/avatar/'.$charity->cover) }}" id="uploaded_image_cover" style="width: 100%;max-height: 290px;;margin-top: 0;height:auto">
     </div>
   </div>
  </div>
  <!--*****************End Cover Image*********************-->

    <div class="row" dir='rtl'>
     <!--**************Personal Image**********************-->
     <div class='col-sm-3 col-xs-12 img-info' style="padding: 0">
				 <div class=" clearfix" style="position: relative;left: 0%; top: 0px;">
					 <!-- start Profile -->
			   <div class="cover2-img">
					 <img class="img-responsive" id="uploaded_image_profile" src="{{ url('/avatar/'.$charity->profile) }}" style="max-height: 170px;">
		     </div>
              <div class="hover-content">
                <div class="alert" id="message_profile" style="display: none"></div>
                <form method="post" id="upload_form_profile" action="{{url('/profile/updateProfile')}}" enctype="multipart/form-data">
                   {{ csrf_field() }}
                 <label class="btn" id="upload_img_profile">
                     <span class='edit' style=""></span> <i class="fa fa-camera" style="font-size: 20px;color: white;"></i><input type="file" name="select_file" id="select_file_profile" style="display: none;">
                 </label>
                 <input type="hidden" value="{{Session('charity.charity_id')}}" name="charity_id">

                </form>
                <!-- End Avatar  -->
            </div>
						<!-- Error Message -->
						<div class="profile_error alert alert-danger hidden"></div>

      </div>
      <div class="col-sm-12">
        <div class='info'>
        <h4 class='text-center'style="color:'green';"> {{$charity->name}}</h4><br>
        <p class='text-center' dir='rtl'> {{$charity->address}}</p>
        <p class='text-center'>{{$charity->phone}}</p>
        <p class='text-center'>{{$charity->email}} </p>
			</div><br><br>
			  <a href="#" class="text-center center-block" style="color: lightseagreen;background:white;font-size:18px;">تفاصيل البوستات</a>
        <a href="{{route('update_ch',$charity->id)}}" class="text-center center-block" style="color: lightseagreen;background:white;font-size:18px;margin-bottom: 30px;">تعديل بيانات الجمعيه</a>
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
			<div class="alert_error alert alert-danger hidden"><h3></h3><ul></ul></div>
      <section class="post newPost">
        <div class="panel panel-default" dir='ltr'>
         <form method="POST" action="{{url('/profile/addPost')}}" id="newPost" enctype="multipart/form-data">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="panel-body">
               <input type="hidden" name="ch_id" value="{{Session('charity.charity_id')}}">
            <div class="head" style="margin-top: 20px">
             <div class='row' dir='rtl'>
               <div class='col-sm-2 col-xs-4'>
                <img src="{{ asset('/avatar/'.$charity->profile) }}" class="img-responsive display-inline pull-right" style="max-width:80px;max-height:80px;border-radius:50%;">
               </div>
               <div class='col-sm-10 col-xs-8'>
                 <span class="name name_pro pull-right">{{Session('charity.name')}} </span>
               </div>
             </div>
           </div>
           <div class="row">
            <div class="col-sm-12">
             <textarea type="text" name='post' class='question form-control has-feedback' rows="4"  cols="18" wrap="soft" style="overflow:hidden;border:none; resize:none;padding:20px" dir='rtl' Placeholder="اكتب شيئا..." required></textarea>
            </div>
						<div class='col-sm-12'>
							<!--Plugin inputfile-->
						 <div class="main-section">
							 <div class="form-group">
								 <input type="file" id="file-1" name="file[]" multiple class="file" data-overwrite-initial="false" data-min-file-count="">
							 </div>
						 </div>
						 <!--End Plugin-->
					 </div>
           </div>
         </div>
         <div class='panel-footer'>
           <div class="row">
            <div class='col-sm-offset-9 col-sm-3 col-xs-offset-6 col-xs-6'>
                <input type="submit" name="submit" value="نشر" class='btn btn-info pull-right publish pub_pro' id="addPost" style="color:white">
            </div>
          </div>
        </div>
			</form>
       </div>
    </section>
   <!--*************************Hidden panel***********-->
<section class="hiddenPost">
	 <div class="panel panel-default hidden" dir='ltr' id="appendnewPost">
		 <div class="panel-body">
			 <div class="head" style="margin-top: 20px">
				<div class='row' dir='rtl'>
					<div class='col-sm-3 col-xs-4'>
					 <img src="{{ asset('/avatar/'.$charity->profile) }}" class="img-responsive display-inline pull-right" style="max-width:80px;max-height:80px;border-radius:50%;">
					</div>
					<div class='col-sm-5 col-xs-5'>
						<span class="name name_pro pull-right">{{Session('charity.name')}}</span>
					</div>
				 <div class='col-sm-2 col-sm-offset-1 col-xs-1'>
					 <span class='date pull-left'>
						 now
						</span>
				 </div>
				</div>
			</div>
			<div class="row">
			 <div class="col-sm-12">
				 <div class="" dir="auto" style="margin-top:20px;padding:15px" id="story">

				 </div>
			 </div>
			 <div class="col-sm-12">
						 <div style="margin-bottom:5px" id="images">

						</div>
			 </div>
			 <div class="col-sm-12">

			 </div>
			</div>

		</div>
		<div class='panel-footer'>
			<div class="row">

			 <div class='col-sm-3 col-xs-6'>
					<button class="btn-primary" style="padding:10px">المتبرعون</button>
			 </div>

		 </div>
	 </div>
	</div>
</section>
	 <!--***************end hidden panel*****************-->

		<!--************** Old Posts ************* -->
    <section class="oldPosts">
   @foreach($posts as $post)
			<div class="panel panel-default opost" dir='ltr'>

				<div class="panel-body">
					<div class="head" style="margin-top: 20px">
					 <div class='row' dir='rtl'>
						 <div class='col-sm-2 col-xs-4'>
							<img src="{{ asset('/avatar/'.$charity->profile) }}" class="img-responsive display-inline pull-right" style="max-width:80px;max-height:80px;border-radius:50%;">
						 </div>
						 <div class='col-sm-6 col-xs-5'>
							 <span class="name name_pro pull-right" style="margin-top: 10px;">{{Session('charity.name')}}</span>
						 </div>
						<div class='col-sm-2 col-sm-offset-1 col-xs-1'>
							<span class='date pull-left'>
                <?php
							$timestemp = $post->created_at;
							$day = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->day;
							$month = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->month;
							$year = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->year;
							echo "<span style='color:#999'>" . $day ."/". $month ."/".$year."</span>";
								 ?>
							 </span>
						</div>

						<div class="dropdown list">
						<button class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:white;border:none;border-radius:;color:#333;width: 100%;padding:2px">
						 <i class="fa fa-ellipsis-h pull-right" style="margin-right: 5px;cursor:pointer"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size:12px;padding:7px;">
							<button class="dropdown-item text-center" type="button"><a href="{{url('/profile/editPost/'.$post->id)}}" id="{{$post->id}}" style="color: #333;font-weight: 400">Edit</a></button>
							<button class="dropdown-item text-center" type="button"><span aria-hidden="true" href="#myModal2" data-id="" class="delete" data-toggle="modal" data-toggle="modal" id="{{$post->id}}">Delete</span></button>
						</div>
						</div>

					 </div>
				 </div>
				 <div class="row">
					<div class="col-sm-12">
					<div class="" dir="auto" style="margin-top:20px;padding:15px">
              {{ $post->story }}
							@if($post->images)
						</div>
					</div>
					<div class="col-sm-12">
								@foreach($post->images as $image)
								<div class="col-sm-6" style="margin-bottom:5px">
								 <a href="{{asset('images/'.$image->image)}}" tabindex='-1' class='downfile'><img src="{{asset('images/'.$image->image)}}" class="img-responsive" title="image" alt="{{$image->image}}"></a>
							 </div>
								@endforeach
							@endif
					</div>
					<div class="col-sm-12">
						<span id="uploaded_image"></span>
					</div>
				 </div>

			 </div>
			 <div class='panel-footer'>
				 <div class="row">

					<div class='col-sm-3 col-xs-6'>
					   <button class="btn-primary" style="padding:10px">المتبرعون</button>
					</div>

				</div>
			</div>
		 </div>

		 <!-- Start Delete PopUp -->
 		       <div class='container'>
 		          <div id="myModal2" class="modal fade">
 		              <div class="modal-dialog">
 		                  <div class="modal-content" style="font-size: 16px;">
 		                     <div class="modal-body text-center" style='padding-top:50px'>
 		                        هل انت متاكد انك تريد حذف هذا البوست
 		                      </div>
 		                      <div class="modal-footer" style="justify-content: flex-start;border-top:none;margin-top:16px;">
 		                        <div style="margin: 2px auto;">
 															<form method="post" id="deletePost" action="{{url('/profile/deletePost')}}">
 															  	{{csrf_field()}}
																	<input type="hidden" class="pid" id="pid" name="pid" value="">
 		                           <button type="submit" id="delete" class="btn btn-primary" id="delete" data-dismiss="modal" value="">نعم</button>
 														   <button type="button" class="btn btn-default" data-dismiss="modal" style="background: #ddd;width: 35px;">لا</button>
 															</form>
 		                        </div>
 		                      </div>
 		                  </div>
 		              </div>
 		          </div>
 		        </div>
 		        <!--- End Delete Popup -->

 @endforeach
		</section>

    </div>
        <!--************************End Posts**********************-->

<div class='col-sm-1 details'style=''>

</div>

</div>
<script src="{{ url("/design/colo/js/jquery-3.2.1.min.js") }}"></script>

<!-- For upload multiple images (fileinput plugin)-->
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ url("/design/colo/js/fileinput.js") }}"></script>
<script src="{{ url("/design/colo/themes/fa/theme.js") }}"></script>

<script>
$(document).ready(function(){
//Add POST
$('#newPost').on('submit', function(event){
event.preventDefault();
	var url = $("#newPost").attr('action');
	var thiss=$(this);

  j=0;
  $.ajax({
   url:url,
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
		  $("#newPost")[0].reset();
			//$("#appendnewPost").removeClass("hidden");

			$("#appendnewPost").clone().prependTo(".hiddenPost");
			var hiddenpost = thiss.parent().parent().siblings(".hiddenPost").children("div:eq(1)");
			hiddenpost.removeClass("hidden");
			hiddenpost.children().children().children().children("#story").append(data.post.story);

			if(data.images != ''){
				for(i=0;i<data.images.length;i++)
				{
			   hiddenpost.children().children().children().children("#images").append("<div class='col-sm-4'><img src='/images/"+data.images[i]+"' class='img-responsive' style='width:100%'></div>");
		  	}
			}

	},
	error:function(data_error,exception){

		 var listError="";
		 if(exception == 'error'){
			 $(".alert_error").removeClass("hidden");
			 $(".alert_error h3").html(data_error.responseJSON.message);
			  //$.each(data_error.responseJSON.errors,function(k,v)){
				// listError +="<li>"+v+"</li>";
			 //}
			 //$(".alert_error ul").html(listError);
		 }
	}
 })
 return false;
});

// Profile Image
 $('#upload_form_profile').on('change', function(event){
  event.preventDefault();
	var url = $("#upload_form_profile").attr('action');

  $.ajax({
   url:url,
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
    $('#uploaded_image_profile').attr('src',"/avatar/"+data.uploaded_image).css({
      'width':'100%',
      'max-height': '170px'
    });

	},error:function(error){
		 $(".profile_error").removeClass("hidden").html(error.responseJSON.message);
	}
  })
 });


// Cover Image
 $('#upload_form_cover').on('change', function(event){
	 event.preventDefault();
 	var url = $("#upload_form_cover").attr('action');

   $.ajax({
    url:url,
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
     $('#uploaded_image_cover').attr('src',"/avatar/"+data.uploaded_image).css({
			 'width':'100%',
       'max-height':'290px'
     });

    }
   })
  });

 // Delete post
 $('.dropdown-menu button span.delete').click(function(event)
 {
	 event.preventDefault();
      var postid = $(this).attr('id');
      $("#pid").attr('value',postid);
			$thisPost = $(this).parent().parent().parent().parent().parent().parent().parent(".opost");
  $('#delete').on('click', function()
	{
   var url = $("#deletePost").attr('action');
   var form = $("#deletePost").serialize();
   $.ajax({
    url:url,
    data:form,
		type:"post",
    dataType:'JSON',
    success:function(data)
    {
			 $thisPost.css("display","none");
    }
   })
  });

 });


});
</script>
@endsection
