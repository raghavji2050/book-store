<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Address;

class UserController extends Controller
{
    public function myAccount()
    {
      $orders = Order::where(['user_id' => auth()->user()->id])->orderByDesc('created_at')->get();
      $billingAddress = Address::where(['type' => 'billing_address', 'user_id' => auth()->user()->id])->first();

      return view('my-account', compact('orders', 'billingAddress'));
    }
}
