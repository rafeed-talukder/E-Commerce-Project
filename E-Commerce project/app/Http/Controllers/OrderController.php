<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetails;
use App\Payment;
use App\Shippinginfo;
use Illuminate\Http\Request;
use DB;
use PDF;
use Dompdf\Dompdf;

class OrderController extends Controller
{
    public function manageOrder(){

        $orders=DB::table('orders')
            ->join('customers','orders.customer_id','=','customers.id')
            ->join('payments','orders.id','=','payments.order_id')
            ->select('orders.*','customers.firstname','customers.lastname','payments.payment_type','payments.payment_status')
            ->get();
//        return $order;

        return view('admin.order.manage-order',[
            'orders'=>$orders
        ]);
    }

    public function viewOrder($id){

       $order= Order::find($id);
//       return $order;
        $customer= Customer::find($order->customer_id);
//        return $customer;
        $shipping =Shippinginfo::find($order->shipping_id);
//        return $shipping;
        $payment= Payment::where('order_id',$order->id)->first();
        $orderdetails=  OrderDetails::where('order_id',$order->id)->get();
//        return $orderdetails;
       return view('admin.order.view-order',[

           'order'=>$order,
           'customer'=>$customer,
           'payment'=>$payment,
           'orderdetails'=>$orderdetails,
           'shipping'=>$shipping

           ]);
    }

    public function viewOrderInvoice($id){

        $order= Order::find($id);
        $customer= Customer::find($order->customer_id);
        $shipping =Shippinginfo::find($order->shipping_id);
        $payment= Payment::where('order_id',$order->id)->first();
        $orderdetails=  OrderDetails::where('order_id',$order->id)->get();

        return view('admin.order.view-invoice',[

            'order'=>$order,
            'customer'=>$customer,
            'payment'=>$payment,
            'orderdetails'=>$orderdetails,
            'shipping'=>$shipping]);
    }


    public function downloadOrderInvoice($id){

        $order= Order::find($id);
        $customer= Customer::find($order->customer_id);
        $shipping =Shippinginfo::find($order->shipping_id);
        $payment= Payment::where('order_id',$order->id)->first();
        $orderdetails=  OrderDetails::where('order_id',$order->id)->get();

        $pdf = PDF::loadView('admin.order.download-invoice',[
            'order'=>$order,
            'customer'=>$customer,
            'payment'=>$payment,
            'orderdetails'=>$orderdetails,
            'shipping'=>$shipping
        ]);
        return $pdf->download('invoice.pdf');

//        $dompdf = new Dompdf();
//        $dompdf->stream();
//        return $dompdf->stream('invoice.pdf');
//        return view('admin.order.download-invoice');
    }

}
