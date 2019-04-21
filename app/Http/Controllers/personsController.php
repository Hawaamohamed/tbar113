<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use App\Charity;
use App\Post;
use App\Images;
use Validator;

class personsController extends Controller
{
    public function index(){
     $charities = Charity::all();

     return view('persons',compact('charities'));
    }
}
