<?php

namespace App\Http\Controllers;

use App\Charity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Post;
use App\Images;

class CharityController extends Controller
{
    public function register(){
        $confirm=\request('confirm');
        $data=$this->validate(\request(),[
            'name'=>'required|string|max:20',
            'email'=>'required|email|unique:charities',
            'long'=>'sometimes|nullable|numeric',
            'lat'=>'sometimes|nullable|numeric',
            'phone'=>'required|numeric',
            'address'=>'required|string',
            'visa'=>'required|numeric',
            'password'=>'required|string|min:6',
            'profile'=>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif',
            'cover'=>'sometimes|nullable|image|mimes:jpg,jpeg,png,gif',
            'advertising'=>'sometimes|nullable',
        ]);
        if ($confirm==$data['password']){
            $data['password']=bcrypt(\request('password'));
           // dd($data['password']);
           Charity::create($data);
            session()->flash('added','تم اضافة الجمعية بنجاح ');
            return redirect('/login');
        }
        else{
            return back();
        }
    }
    public function login(){
        if(auth()->guard('charity')->attempt(['email'=>request('email'),'password'=>request('password')]))
        {
           $id=DB::table('charities')->where('email',request('email'))->value('id');
           $charity = Charity::find($id);
           $posts = $charity->posts()->orderBy('id', 'DESC')->get();
           Session::put('charity.charity_id',$id);
           Session::put('charity.name',$charity->name);
           Session::put('charity.profile',$charity->profile);
           return view('profile',compact('id','charity',"posts"));
        }else
        {
            return back();
        }
    }

}
