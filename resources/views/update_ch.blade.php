@extends('index2')
@section('content')


    <div class="col-sm-offset-2 col-sm-8 box">

        <div class="box-header">
            <h3 class="box-title"></h3>
        </div >
        <br><br>

                <!-- /.box-header -->
        <div class="" style="font-size: 50px; border: 2px;padding: 15px;background:#f5f5f5" align="center" >

            <div class="form-group" style="font-size: 20px; max-width: 600px" >
                @if(count($errors->all())>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{$e}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
         <h2 class="text-center" style="color:#333">تعديل البيانات </h2>
        <form action="{{url('updateData')}}" method="post">
            <input type="hidden" name="id" value="{{$row->id}}">

            <div class="form-group" style="font-size: 20px; max-width: 600px" >
                <label name="name" style="float: right;" >اسم الجمعيه</label>
                <input type="text" name="name" value="{{$row->name}}" class="form-control" style="font-size: 20px;text-align: right">
            </div>

            <div class="form-group" style="font-size: 20px; max-width: 600px">
                <label name="email" style="float: right;">البريد الالكترونى</label>
                <input type="email" name="email"  value="{{$row->email}}"  class="form-control" style="font-size: 20px;text-align: right">
            </div>

            <div class="form-group" style="font-size: 20px; max-width: 600px">
                <label name="phone" style="float: right;">رقم التلفون</label>
                <input type="text" name="phone" value="{{$row->phone}}" class="form-control" style="font-size: 20px;text-align: right">
            </div>


            <div class="form-group" style="font-size: 20px; max-width: 600px">
                <label name="visa" style="float: right;">Visa</label>
                <input type="text" name="visa" value="{{$row->visa}}" class="form-control" style="font-size: 20px;text-align: right">
            </div>

            <div class="form-group" style="font-size: 20px; max-width: 600px">
                <label name="password" style="float: right;">الرقم السرى</label>
                <input type="password" name="password"  class="form-control" style="font-size: 20px;text-align: right">
            </div>

            <div class="form-group" style="font-size: 20px; max-width: 600px">
                <label name="address" style="float: right;">العنوان</label>
                <input type="text" name="address" id="address" value="{{$row->address}}" class="form-control" style="font-size: 20px;text-align: right">
            </div>
             
            <div class="form-group" style="font-size: 20px; max-width: 600px">
                <div id="us1" class="form-group has-feedback" style="width:100%; height: 200px;"></div>
                <input type="hidden" name="long" id="long" value="{{$row->long}}">
                <input type="hidden" name="lat" id="lat" value="{{$row->lat}}">

            </div>

            <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">

            <div class="form-group" style="font-size: 20px; max-width: 600px">
            <input type="submit" value="حفظ" class="btn btn-success" style="font-size: 20px;padding: 0 20px;margin-top:20px">
            </div>
        </form>
        </div>
        <div class="box-body">
        </div>
        <!-- /.box-body -->
    </div>
<<<<<<< HEAD
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyBwxuW2cdXbL38w9dcPOXfGLmi1J7AVVB8'></script>
    <script type="text/javascript" src='{{url('js/locationpicker/locationpicker.jquery.js')}}'></script>
    <script>
        $('#us1').locationpicker({
            location: {
                latitude: {{$row->lat}},
                longitude: {{$row->long}}
            },
            radius: 300,
            markerIcon: '{{url('design/images/map-marker.png')}}',
            inputBinding: {
                latitudeInput: $('#lat'),
                longitudeInput: $('#long'),
                //radiusInput: $('#us2-radius'),
                locationNameInput: $('#address')
            }
        });
    </script>
=======
>>>>>>> 2326997575b33a176aaf474ac2b9a7911bdc67f9
@endsection
