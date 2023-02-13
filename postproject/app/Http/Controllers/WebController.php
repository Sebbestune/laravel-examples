<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function showAllOrders()
    {
        // logic to get all orders goes here
        $orders = Order::get();
        return view('showorders', ['orders' => $orders]);
    }
}
