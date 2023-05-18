<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Carbon\Carbon;
use Auth;

class OrderController extends Controller
{
    public function MakeOrder(Request $request)
    {
        $product_id = $request->id;

        Product::findOrFail($product_id)->update([
            'quantity' => $request->quantity - $request->my_quantity,
        ]);

        Order::insert([
            'product_id' => $request->id,
            'user_id' => Auth::user()->id,
            'my_quantity' => $request->my_quantity,
            'product_price' => $request->product_price,
            'total_price' => $request->my_quantity * $request->product_price,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'your Order Is Done ', 
            'alert-type' => 'success'
        );
        return redirect()->route('user.orders')->with($notification);
    }

    public function AllOrders()
    {
        $orders = Order::latest()->get();
        return view('admin.products.orders',compact('orders'));
    }

    public function EAllOrders()
    {
        $orders = Order::all();
        return view('employee.products.orders',compact('orders'));
    }
}
