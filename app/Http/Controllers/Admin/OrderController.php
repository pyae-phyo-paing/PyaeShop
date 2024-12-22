<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orders(){
        $orders = Order::all(); //order အားလုံးကို ယူတာ
        // var_dump($orders);
        $voucher_group = $orders->groupBy('voucher_no')->toArray(); //voucher no တူတာတွေကို Group ဖွဲပြီး Array ပြောင်း
        // dd($voucher_group);

        foreach($voucher_group as $voucher){
            $orders_id = array_column($voucher, 'id'); //array ထဲမှာ ရှိတဲ့ order id တွေကို ယူ 
            // var_dump($orders_id);
            $order_data[] = Order::whereIn('id',$orders_id)->where('status','Pending')->first(); //voucher no တူတဲ့ order တွေထဲက ပထမဆုံး id တစ်ခုရဲ့ data တွေကို ဆွဲထုတ်ပြီး array ထဲထည့် 

        }

        return view('admin.orders.index',compact('order_data'));
    }

    public function orderAccept(){

    }

    public function orderComplete() {
        
    }
}
