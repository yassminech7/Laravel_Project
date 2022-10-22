<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ControllerInsc extends Controller
{
    public function index(){
        return view('inscription');
    }


    public function getInscrire(Request $request){
        $request->validate([
           'firstName'=>'required|string|max:30',
           'lastName'=>'required|string|max:30',
           'Identifiant'=>'required|string|max:30',
           'login'=>'required|string|max:30',
           'password'=>'required|min:8',
           'email'=>'required',
           'address'=>'required|max:100',
           'age'=>'required|max:2',
           'CIN'=>'required|max:8|min:8',
           'job'=>'required',
           'credit_card_name'=>'required|string|max:30',
           'credit_card_number'=>'required|min:9|max:9',
           'cc-expiration'=>'required',
           'CV'=>'required',
       ]);
       


dd($request->all());
//return $request->input();
   }

}
