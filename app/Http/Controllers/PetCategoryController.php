<?php

namespace App\Http\Controllers;
use App\Models\PetCategory;

use Illuminate\Http\Request;

class PetCategoryController extends Controller
{
    public function PetCategory(){
        $petcategories=PetCategory::all();
        return view('backend.pages.PetCategory',compact('petcategories'));
    }
    public function petcategorycreate(){
        
        return view('backend.pages.PetCategoryForm');
    }
    public function petcategorystore(Request $request){
        PetCategory::create([
            'pet_categories_name'=>$request->pet_categories_name,
            'details'=>$request->details,
            

        ]);
        return redirect()->back();
             
    }
}
