<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
class OrderController extends Controller
{
    public function index()
    {
        $Orders = Order::latest()->paginate(100);
        // Log::info("the message for log");
        // error_log('Some message here.');
                return $Orders;
    }
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'product_id' => 'required',
        ]);
  
        Order::create($request->all());
   
        return 'success order created successfully.';
    }

    public function destroy(Order $Order)
    {
        $Order->delete();
  
        return 'successProduct deleted successfully.';
    }
   
}
