<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAdd extends Controller
{
    public function index(){
        return view('noveauProjet');
    }

    public function getInscrire(Request $request){
        $request->validate([
           'Identifier'=>['required'],
           'Title'=>['required'],
           'Price'=>['required','min:3'],
           'Description'=>['required'],
           'delivery_time'=>['required'],
       ]);
       
       dd($request->all());
   }

}
