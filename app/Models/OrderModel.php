<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderModel extends Model
{
    use HasFactory;

    public function addOrder(Request $request)
    {
        $newOrders = [
            'full_name' => $request->input('full_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'description' => $request->input('description')
        ];

        $oldOrders = Storage::get('order.json');

        $oldOrders = json_decode($oldOrders, true);

        $oldOrders[] = $newOrders;

        $newOrders = json_encode($oldOrders);

        Storage::put('order.json', $newOrders);

        return redirect('/order');
    }
}
