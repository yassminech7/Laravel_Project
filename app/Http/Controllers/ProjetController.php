<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function show(){
        $projets[0]=new Projet(1,'project 1',1000,'descp1','22-10-2022');
        $projets[1]=new Projet(2,'project 2',2000,'descp2','24-10-2022');
        $projets[2]=new Projet(3,'project 3',3000,'descp3','26-10-2022');
        $projets[3]=new Projet(4,'project 4',4000,'descp4','28-10-2022');
        $projets[4]=new Projet(5,'project 5',5000,'descp5','10-11-2022');

        return view('show_projets',compact('projets'));
    }

    public function getInscrire(Request $request){
        $request->validate([
           'Identifiant'=>['required'],
           'Titre'=>['required'],
           'Prix'=>['required'],
           'Description'=>['required'],
           'Delai_Livraison'=>['required'],
       ]);
       
echo "sucess";
return $request->input();
   }
}
