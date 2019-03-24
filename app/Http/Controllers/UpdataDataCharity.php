<?php

namespace App\Http\Controllers;
use App\Charity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdataDataCharity extends Controller
{
  public function show()
  {
      $row=Charity::find(\request('id'));
      return view('update_ch',['row'=>$row]);
  }
  public function update()
  {
      $id=\request('id');
      if (\request('password')=="") {
          $data = $this->validate(request(),
              [
                  'name' => "required",
                  'email' => "required|email|unique:charities,email," . $id,
                  'phone' => "required",
                  'address' => "required",
                  'visa' => "required",
<<<<<<< HEAD
                  'lat'=>'required',
                  'long'=>'required'
=======
>>>>>>> 2326997575b33a176aaf474ac2b9a7911bdc67f9
              ], [], [
                  'name' =>'الاسم' ,
                  'email' =>'الاميل',
                  'phone' =>'رقم التلفون',
                  'address' =>'العنوان',
                  'visa' =>'رقم الحساب البنكى',
              ]);
      }
      else{
          $data = $this->validate(request(),
              [
                  'name' => "required",
                  'email' => "required|email|unique:charities,email," . $id,
                  'phone' => "required",
                  'address' => "required",
                  'visa' => "required",
<<<<<<< HEAD
                  'password' => "sometimes|nullable|min:6",
                  'lat'=>'required',
                  'long'=>'required'
=======
                  'password' => "sometimes|nullable|min:6"
>>>>>>> 2326997575b33a176aaf474ac2b9a7911bdc67f9
              ], [], [
                  'name' =>'الاسم' ,
                  'email' =>'الاميل',
                  'phone' =>'رقم التلفون',
                  'address' =>'العنوان',
                  'visa' =>'رقم الحساب البنكى',
                  'password' =>'الرقم السرى',
              ]);
          $data['password']=bcrypt(request('password'));
      }
      Charity::where('id',$id)->update($data);
      session()->flash('update','تم تعديل بيانات الجمعيه بنجاح');
      return view('profile',['id'=>$id]);
  }
}
