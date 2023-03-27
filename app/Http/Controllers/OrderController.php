<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    private OrderModel $order;

    public function __construct()
    {
        $this->order = new OrderModel();
    }
    public function order()
    {
        return view('order', []);
    }
    public function Createorder(Request $request)
    {
        $this->order->addOrder($request);   
    }
}
