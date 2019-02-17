@extends('index')

<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_SlideshowTransitions = [
          {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
          {$Duration:500,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
          {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
          {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
          {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}
        ];

        var jssor_1_options = {
          $AutoPlay: 1,
          $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 0.5s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    .jssorb053 .i {position:absolute;cursor:pointer;}
    .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
    .jssorb053 .i:hover .b {fill-opacity:.7;}
    .jssorb053 .iav .b {fill-opacity: 1;}
    .jssorb053 .i.idn {opacity:.3;}

    .jssora093 {display:block;position:absolute;cursor:pointer;}
    .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
    .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
    .jssora093:hover {opacity:.8;}
    .jssora093.jssora093dn {opacity:.6;}
    .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

    .myheader
    {
        text-align: right ;
        font-family:Calibri,'Segoe UI Semilight', arial;
        color: darkcyan ;
    }
    .myp
    {
        text-align: right ;
        font-family:Calibri,'Segoe UI Semilight', arial;
        color: darkcyan ;
        font-size: 19px
    }
    .mydashdiv
    {
        width: 100% ;
        text-align: center ;
    }
    .mydashdiv p ,
    .mydashdiv p
    {
        font-weight: bold;
        font-family:Calibri,'Segoe UI Semilight', arial;
    }
    .myicon
    {
        margin-top: 20px
    }
</style>

@section('content')

<div class="container" >

    <div class="row" style="margin-top: 50px">
        <div class="col-xs-12">
            <img style="width:300px;height:230px" src="{{ url("design/images/1.jpg") }}" class="rounded mx-auto d-block" alt="Logo">
        </div>
    </div>

    <!-- slider -->
    <div id="jssor_1" style="position:relative;margin:50px auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin"
            style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ url("/design/images/moh.jpg") }}" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                <div>
                    <img data-u="image" src="{{ url("/design/images/n6.jpg") }}" />
                </div>
                <div>
                    <img data-u="image" src="{{ url("/design/images/n14.jpg") }}" />
                </div>
                <div>
                    <img data-u="image" src="{{ url("/design/images/n15.jpg") }}" />
                </div>
                <div>
                    <img data-u="image" src="{{ url("/design/images/n17.jpg") }}" />
                </div>
                <div>
                    <img data-u="image" src="{{ url("/design/images/n9.jpg") }}" />
                </div>
              <!--  <div style="background-color:lightseagreen;">
                    <div style="position:absolute;top:50px;left:50px;width:450px;height:62px;z-index:0;font-size:16px;color:#000000;line-height:24px;text-align:left;padding:5px;box-sizing:border-box;">
                        TBAR3<br>
                        Anonymous Team <br>
                        engmohamedgaber1996@gmail.com <br>
                        01016978512 <br>
                        01147610996
                    </div>
                </div>-->
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                    <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                    <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                    <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                    <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                </svg>
            </div>
        </div>



    <div class="row" style="margin-top: 20px">
        <div class="col-xs-12">
            <h3 class="myheader">( تبرع )</h3>
            <p class="myp">يقدم هذا الموقع خدمات للجمعيات الخيرية للمساعدة على نشر الخير و تسهيل العملية الخيرية </p>
            <p class="myp">الخدمات التى يقدمها الموقع:</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-11">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:right;font-family:Calibri,'Segoe UI Semilight', arial;font-size: 15px">
                    <strong>نشر منشورات عن الحالات لجمع تبرعات لها</strong>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-3 col-md-2 col-lg-1">
            <div class="thumbnail" style="border: 0">
                <img style="width: 37px;height:40px" class="myimg img-responsive user-photo" src="{{url("design/images/post.jpg")}}">
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-xs-9 col-sm-9 col-md-10 col-lg-11">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:right;font-family:Calibri,'Segoe UI Semilight', arial;font-size: 15px">
                    <strong>أستقبال الجمعية تبرعات عن طريق حساب بنكى و التحويل عبر الانترنت</strong>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-3 col-md-2 col-lg-1">
            <div class="thumbnail" style="border: 0">
                <img style="width: 42px;height:40px" class="img-responsive user-photo" src="{{url("design/images/cash.png")}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-11">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:right;font-family:Calibri,'Segoe UI Semilight', arial;font-size: 15px">
                    <strong>إمكانية إجراء محادثة نصيه مع الجمعيات الأخرى و الأشخاص المسجلين فى هذا الموقع</strong>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-3 col-md-2 col-lg-1">
            <div class="thumbnail" style="border: 0">
                <img style="width: 37px;height:40px" class="img-responsive user-photo" src="{{url("design/images/chat.jpg")}}">
            </div>
        </div>
    </div>


    <!-- dahbord-->
     <div class="row" style="margin:50px 0;margin-top: 70px">
        <div class="col-md-4">
            <div class="card" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">560</span></div>
                                <div class="stat-heading">منشور</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-3">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">349</span></div>
                                <div class="stat-heading">جمعية</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="border-radius: 10px;">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="fa fa-male"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">300</span></div>
                                <div class="stat-heading">مستخدم</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
