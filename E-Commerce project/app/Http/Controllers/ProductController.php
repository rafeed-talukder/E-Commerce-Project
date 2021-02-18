<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
//use Faker\Provider\Image;
use Image;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productindex(){

        $categories= Category::where('publication_status' ,1)->get() ;
//        return $categories;

        $brands= Brand::where('publication_status' ,1)->get() ;
//        return $brands;

        return view('admin.product.add-product',[
            'category_array_index'  => $categories,
            'brand_array_index'      => $brands
        ]);
    }

    protected  function  productvalidate($request){
        $this->validate($request,[
            'category_id'=>'required',
//            'brand_id'=>'required',
//            'product_name'=>'required',
//            'product_price'=>'required',
//            'product_quantity'=>'required',
//            'short_description'=>'required',
//            'long_description'=>'required',
//            '$imageUrl'=>'required',
//            'publication_status'=>'required'
//            'category_id'=>'required'
        ]);
    }

    protected function productImageUpload($request){

//        without any package rules

//        $productImage  = $request->file('product_image');
//        $imageName     = $productImage->getClientOriginalName();
//        $imageDirectory='productImage/';
//        $productImage->move($imageDirectory,$imageName);
//        $imageUrl=$imageDirectory.$imageName;
//        return $imageUrl;


//        intervention.io package rules to upload image

        $productImage  = $request->file('product_image');
        $imageType = $productImage->getClientOriginalExtension();
        $imageName = $request->product_name.'.'.$imageType;
        $imageDirectory='productImage/';
        $imageUrl=$imageDirectory.$imageName;
        Image::make($productImage)->resize(200,200)->save($imageUrl);
        return $imageUrl;
    }
    protected function productBasicInfo($request ,$imageUrl){
        $product= new Product();
        $product->category_id        = $request->category_id;
        $product->brand_id           = $request->brand_id;
        $product->product_name       = $request->product_name;
        $product->product_price      = $request->product_price;
        $product->product_quantity   = $request->product_quantity;
        $product->short_description  = $request->short_description;
        $product->long_description   = $request->long_description;
        $product->product_image      = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
}



    public function productsave(Request $request){

         $this->productvalidate($request);
         $imageUrl=$this->productImageUpload($request);
         $this->productBasicInfo($request,$imageUrl);
        return redirect('/product/AddProduct')->with('message','Product save Sucessfully');

//        return $request->product_name;
//          return view('/product/AddProduct')->with('message','Product save Sucessfully');

    }

    public function manageProduct(){
//        $productAllValueFromDatabase=Product::all();
        $productAllValueFromDatabase=DB::table('products')
                     ->join('categories','products.category_id','=','categories.id')
                     ->join('brands','products.brand_id','=','brands.id')
                     ->select('products.*','categories.category_name','brands.brand_name' )
                     ->get();

        return view('admin/product/manageProduct',[
            'productAllValueFromDatabasetoTable'=>$productAllValueFromDatabase
        ]);
    }


    public function editProduct($id){
        $categories= Category::where('publication_status' ,1)->get() ;

        $brands= Brand::where('publication_status' ,1)->get() ;


        $product=Product::find($id);
        return view('admin.product.editProduct',[
            'products'=>$product,
            'category_array_index'  => $categories,
            'brand_array_index'      => $brands
        ]);
    }

    public function updateProduct(Request $request){
        $product=Product::find($request->product_id);

        $productImage  = $request->file('product_image');

        if($productImage){
            unlink($product->product_image );

//            $productImage  = $request->file('product_image');
            $imageType = $productImage->getClientOriginalExtension();
            $imageName = $request->product_name.'.'.$imageType;
            $imageDirectory='productImage/';
            $imageUrl=$imageDirectory.$imageName;
            Image::make($productImage)->resize(200,200)->save($imageUrl);

            $product->category_id        = $request->category_id;
            $product->brand_id           = $request->brand_id;
            $product->product_name       = $request->product_name;
            $product->product_price      = $request->product_price;
            $product->product_quantity   = $request->product_quantity;
            $product->short_description  = $request->short_description;
            $product->long_description   = $request->long_description;
            $product->product_image      = $imageUrl;
            $product->publication_status = $request->publication_status;
            $product->save();

            return redirect('/product/manageProduct')->with('message','Product update Sucessfully');


        }else{
            $product->category_id        = $request->category_id;
            $product->brand_id           = $request->brand_id;
            $product->product_name       = $request->product_name;
            $product->product_price      = $request->product_price;
            $product->product_quantity   = $request->product_quantity;
            $product->short_description  = $request->short_description;
            $product->long_description   = $request->long_description;
//            $product->product_image      = $imageUrl;
            $product->publication_status = $request->publication_status;
            $product->save();

            return redirect('/product/manageProduct')->with('message','Product update Sucessfully');

        }

    }



























}
