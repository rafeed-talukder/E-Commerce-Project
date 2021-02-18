<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
//        $categories= Category::where('publication_status',1)->get();
        $products=Product::where('publication_status',1)
                           ->orderBy('id','DESC')
//                           ->skip(1)
                           ->take(8)
                           ->get();
//        return $products;
        return view('front-end.home.home', [
//            'categories'=>$categories,
            'products'=>$products
        ]);
    }

    public function categoryProduct($id){

//        $categories= Category::where('publication_status',1)->get();
//        return view('front-end.category.category-content',[
////            'categories'=>$categories
//        ]);

       $categoryProducts=Product::where('category_id',$id)
                 ->where('publication_status',1)
                 ->get();
        return view('front-end.category.category-content',[
            'categoryProducts'=>$categoryProducts
        ]);
    }

    public function categoryProduct1(){
        return view('front-end.category.category-content1');
    }

    public function mailUs(){
        return view('front-end.mail.mail-us');
    }

//    public function categoryindex(){
//        return view('admin.category.add-category');
//    }
//
//    public function managecategory(){
//        return view('admin.category.add-category');
//    }


     public function productDetails($id){
        $products= Product::find($id);
        return view('front-end.product.product-details',[
            'product'=>$products
        ]);
     }

     public function brandProduct($id){
       $brands= Brand::where('id',$id)
                     ->where('publication_status',1)
                     ->get();

         return view('front-end.brand.brand-content',[
             'brandProducts'=>$brands
         ]);
     }
}
