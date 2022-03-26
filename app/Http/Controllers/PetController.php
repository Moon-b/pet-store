<?php

namespace App\Http\Controllers;
use App\Models\Pet;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function Pet(){
        $pets=Pet::all();
        return view('backend.pages.Pet',compact('pets'));
}
public function petform(){
        
    return view('backend.pages.PetForm');
}
public function petpost(Request $request){
    Pet::create([
        'pet_name'=>$request->pet_name,
        'pet_breed'=>$request->pet_breed,
        'pet_size'=>$request->pet_size,
        'pet_color'=>$request->pet_color,
        'pet_life_span'=>$request->pet_life_span,
        'pet_age'=>$request->pet_age,
        'pet_height'=>$request->pet_height,
        'rules'=>$request->rules,
        'pet_weight'=>$request->pet_weight,
        'pet_health'=>$request->pet_health,
        'pet_quality'=>$request->pet_quality,

        
       


        

    ]);
    return redirect()->back();
         
}
}