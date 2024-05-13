<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouterController extends Controller
{
   public function UploadRoute(Request $request){

dd($request->all());


   }
}
