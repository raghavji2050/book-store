<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function myAccount()
    {
      return view('my-account');
    }

    public function checkout()
    {
      return view('checkout');
    }

    public function cart()
    {
      return view('cart');
    }

    public function contact()
    {
      return view('contact');
    }

    public function about()
    {
      return view('about');
    }

    public function productDetail()
    {
      return view('product-detail');
    }
}
