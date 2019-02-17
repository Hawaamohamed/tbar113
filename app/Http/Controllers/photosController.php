<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Images;
use Validator;

class photosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Must Display (Cover , profile) images for this user
      $profile=Images::find(1);
      $cover=Images::find(2);

      return view("profile",array("cover"=>$cover,"profile"=>$profile));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validation = Validator::make($request->all(), [
      'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2024'
     ]);
     $image = $request->file('select_file');

       if($validation->passes())
       {
         $new_name = rand() . '.' . $image->getClientOriginalExtension();
         $image->move(public_path('images'), $new_name);
         $img_table = new Images;
         $img_table->image = $new_name;
         $img_table->type = 'post';
         $img_table->userid = 1;
         $img_table->charityid = 0;
         $img_table->postid = 0;
         $img_table->save();
        return response()->json([
         'message'   => 'Image Upload Successfully',
         'uploaded_image' => $new_name,
         'class_name'  => 'alert-success'
        ]);
       }
       else
       {
        return response()->json([
         'message'   => $validation->errors()->all(),
         'uploaded_image' => 'no-image.jpg',
         'class_name'  => 'alert-danger'
        ]);
       }

}
public function action(Request $request)
{

  $validation = Validator::make($request->all(), [
  'select_file.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2024'
 ]);
 $images = $request->file('select_file');
 $arr = [];
 $i=0;
 foreach($images as $image)
 {
   $new_name = rand() . '.' . $image->getClientOriginalExtension();
   $image->move(public_path('images'), $new_name);
   $img_table = new Images;
   $img_table->image = $new_name;
   $img_table->type = 'post';
   $img_table->userid = 1;
   $img_table->charityid = 0;
   $img_table->postid = 0;
   $img_table->save();
   $arr[$i]=$new_name;
   $i++;
 }
   if($validation->passes())
   {
    return response()->json([
     'message'   => 'Image Upload Successfully',
     'uploaded_image' => $new_name,
     'class_name'  => 'alert-success'
    ]);
   }
   else
   {
    return response()->json([
     'message'   => $validation->errors()->all(),
     'uploaded_image' => 'no-image.jpg',
     'class_name'  => 'alert-danger'
    ]);
   }

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $uid = $request->input('getId');
          $type  = $request->input('type');
          $img_table=Images::find($uid);
          $validation = Validator::make($request->all(), [
          'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2024'
         ]);
         if($validation->passes())
         {
          $image = $request->file('select_file');

          $new_name = rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('images'), $new_name);

          $img_table->image     = $new_name;
          $img_table->type      = $type;
          $img_table->userid    = 1;
          $img_table->charityid = 1;
          $img_table->postid    = 0;
          $img_table->save();

          return response()->json([
           'message'   => 'Image Upload Successfully',
           'uploaded_image' => $new_name,
           'class_name'  => 'alert-success'
          ]);
         }
         else
         {
          return response()->json([
           'message'   => $validation->errors()->all(),
           'uploaded_image' => 'no-image.jpg',
           'class_name'  => 'alert-danger'
          ]);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
