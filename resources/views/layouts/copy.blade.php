<!-- CoyRight -->
	<div class="copy-Right" >
	    <div class="container">
	      <h5>&copy; Anonymous Team &copy; 2018 - 2019</h5>
	    </div>
	</div>

</div>

<script src="{{ url("/design/jssor.slider.min.js") }}" type="text/javascript"></script>
<script type="text/javascript">jssor_1_slider_init();</script>

<script src="{{ url("/design/dash/jq.js") }}"></script>
<script src="{{ url("/design/dash/match.js") }}"></script>
<script src="{{ url("/design/dash/main.js") }}"></script>

<script src="{{ url("/design/colo/js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ url("/design/colo/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ url("/design/colo/css/bootstrap4/popper.js") }}"></script>
<script src="{{ url("/design/colo/css/bootstrap4/bootstrap.min.js") }}"></script>
<script src="{{ url("/design/colo/plugins/Isotope/isotope.pkgd.min.js") }}"></script>
<script src="{{ url("/design/colo/plugins/OwlCarousel2-2.2.1/owl.carousel.js") }}"></script>
<script src="{{ url("/design/colo/plugins/easing/easing.js") }}"></script>
<script src="{{ url("/design/colo/js/custom.js") }}"></script>
<script src="{{ url("/design/card/jquery.js") }}"></script>
<script src="{{ url("/design/card/card.js") }}"></script>

<script>
var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);

function autosize(){
   var el = this;
   setTimeout(function(){
     el.style.cssText = 'padding:20px;resize:none;overflow:hidden;transition:all .3s ease;width:100%;margin:7px auto;border:none;padding-left:25px';
     // for box-sizing other than "content-box" use:
     // el.style.cssText = '-moz-box-sizing:content-box';
     el.style.cssText = 'height:' + el.scrollHeight + 'px;padding:20px;resize:none;overflow:hidden;transition:all .3s ease;width:100%;margin:7px auto;border:none;padding-left:25px';

   },0);
 }
 $("#file-1").fileinput({
   theme:'fa',
 	uploadUrl:"/image-submit",
 	uploadExraData:function(){
    return{
 		 _token:$("input[name='_token']").val()
 	 };
  },
  allowedFileExtensions:['jpg',"png",'gif'],
  overwriteInitial:false,
  maxFileSize:2000,
  maxFileNum:2,
  slugCallback:function(filename){
 	  return filename.replace('(','_').replace(']','_');
  }

 });

</script>
</body>

</html>
