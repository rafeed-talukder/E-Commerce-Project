<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetails;
use App\Payment;
use App\shipping;
use App\Shippinginfo;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        return view('front-end.checkout.checkout-content');
    }

    public function customerSignUp(Request $request){

        $this->validate($request,[
            "email"=>"email|unique:customers,email"
        ]);

        $customer= new Customer();
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->number = $request->number;
        $customer->address = $request->address;
        $customer->save();

        $customerId=$customer->id;
//        return $customerId;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->firstname.' '.$customer->lastname);

        $data=$customer->toArray();
        Mail::send('front-end.mails.confirmationMail',$data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('confirmation mail');
        } );

//        return view('front-end.checkout.shipping');

        return redirect('/checkout/shipping');
    }


    public function customerLogIn(Request $request){
       $customer= Customer::where('email',$request->email)->first();

        Session::put('customerId',$customer->id);
        Session::put('customerName',$customer->firstname.' '.$customer->lastname);

        if (password_verify($request->password, $customer->password)) {
            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->firstname.' '.$customer->lastname);

            return redirect('/checkout/shipping');

        } else {
            return redirect('/cart/checkout/')->with('message','Please,Input valid Password');

        }

       return $customer;
    }

    public function customerLogout(){
        session::forget('customerId');
        session::forget('customerName');

        return redirect('/');

    }

    public function newcustomerLogin(){
        return view('front-end.customer.customer-login');

    }

    public function shipping(){
        $customerId = Customer::find(Session::get('customerId'));
//        return $customerId;
        return view('front-end.checkout.shipping', ['customerId'=>$customerId] );
    }

    public function saveShipping(Request $request){
        $shipping =new Shippinginfo();
        $shipping->fullname = $request->fullname;
        $shipping->email = $request->email;
        $shipping->number = $request->number;
        $shipping->address = $request->address;

        $shipping->save();

        $shippingId=$shipping->id;
        Session::put('shippingId',$shippingId);

        return redirect('/checkout/payment');


    }

    public function paymentShipping(){
        return view('front-end.checkout.payment');

    }

    public function orderProcess(Request $request){
       $paymentType= $request->payment_type;

       if ($paymentType == 'cash'){
           $order=new Order();
           $order->customer_id=Session::get('customerId');
           $order->shipping_id=Session::get('shippingId');
           $order->order_total=Session::get('orderTotal');
           $order->save();

           $peyment=new Payment();
           $peyment->order_id=$order->id;
           $peyment->payment_type=$paymentType;
           $peyment->save();

           $cartProducts=\Cart::getContent();

           foreach ($cartProducts as $cartProduct){
               $orderdetails=new OrderDetails();

               $orderdetails->order_id =$order->id;
               $orderdetails->product_id =$cartProduct->id;
               $orderdetails->product_name =$cartProduct->name;
               $orderdetails->product_price =$cartProduct->price;
               $orderdetails->product_quantity =$cartProduct->quantity;

               $orderdetails->save();

           }

           \Cart::clear();
           return redirect('/complete/order');


       }elseif ($paymentType == 'paypal'){

       }elseif ($paymentType == 'bkash'){

       }
    }

    public function completeOrder(){
        return 'sucess';
    }

}
