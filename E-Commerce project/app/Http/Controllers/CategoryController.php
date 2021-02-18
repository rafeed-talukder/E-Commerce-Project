<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use DB;
class CategoryController extends Controller
{
    public function categoryindex(){
        return view('admin.category.add-category');
    }

    public function managecategory(){
        $categoriesfromdatabase=Category::all();
//        return $categoriesfromdatabase;

        return view('admin.category.manage-cat',['categoriesindexvalue'=>$categoriesfromdatabase]);
    }
    public function savecategory(Request $request){
//        return $request->all();

//        method 1
        $category=new Category();
        $category->category_name         = $request->category_name;
        $category->category_description  = $request->category_description;
        $category->publication_status    = $request->publication_status;
        $category->save();


//        method 2
//        Category::create($request->all());


//        query builder rules method 3
//        DB::table("categories")->insert([
//            'category_name'      => $request->category_name,
//        'category_description'   => $request->category_description,
//            'publication_status' => $request->publication_status
//        ]);

        return redirect('/category/AddCategory')->with('message','Category info save sucessfully');

    }

    public function unpublishedCategory($id){

        $category=Category::find($id);
        $category->publication_status=0;
        $category->save();
        return redirect('/category/ManageCategory')->with('message','category info unpublished');
      return $id;
    }

    public function publishedCategory($id){

        $category=Category::find($id);
        $category->publication_status=1;
        $category->save();
        return redirect('/category/ManageCategory')->with('message','category info published');
//        return $id;
    }

    public function editCategory($id){
        $category=Category::find($id);
        return view('admin.category.edit-category',['editcategory'=>$category ] );
    }

    public function updateCategory(Request $request){
//        $category= new Category();

        $category=Category::find( $request-> category_id );

        $category->category_name           =   $request->category_name;
        $category->category_description    =   $request->category_description;
        $category->publication_status      =   $request->publication_status;
        $category->save();

        return redirect('/category/ManageCategory')->with('message','Category info Updatw sucessfully');
//        return $request;

//        $category=Category::find($id);
//        return view('admin.category.edit-category',['editcategory'=>$category ] );
    }

    public function deletCategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('/category/ManageCategory')->with('message','Delete sucessfully');

    }

}
