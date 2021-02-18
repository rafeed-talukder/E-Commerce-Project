<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
//use Cart;
class ChartController extends Controller
{
    public function addToChart(Request $request){
//        return $request->all();
        $product=Product::find($request->id);
//        return $product;

        \Cart::add([
            'id' => $request->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' =>  $request->qty,
            'attributes' => [
                'image'=>$product->product_image
            ],
        ]);

        return redirect('/cart/show');
    }

    public function showChart(){
        $cartCollection = \Cart::getContent();
//        return $cartCollection;
        return view('front-end.cart.showcart',[
            'cartCollection'=>$cartCollection
        ]);
    }

    public function deleteCartItem($id){
        \Cart::remove($id);
        return redirect('/cart/show');
    }

    public function updateCartItem(Request $request){
        \Cart::update($request->id , [
            'quantity'=>$request->quantity
        ] );
        return redirect('/cart/show');
//            return $request;
    }
}
