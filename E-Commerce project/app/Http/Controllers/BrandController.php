<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandindex(){
        return view('admin.brand.add-brand');
    }

    public function saveBrand(Request $request){
//        return view('admin.brand.add-brand');

        $this->validate($request,[
            'brand_name'=>'required|regex:/^[\pL\s\-]+$/u|max:10',
            'brand_description'=>'required',
            'publication_status'=>'required'
            ] );

        $brand=new Brand();
        $brand->brand_name         = $request->brand_name;
        $brand->brand_description  = $request->brand_description;
        $brand->publication_status    = $request->publication_status;
        $brand->save();

        return redirect('/Brand/AddBrand')->with('message','Brand info save sucessfully');

    }
}
