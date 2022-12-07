<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Collection;
use App\Http\Resources\CollectionResource;

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
        $productAreaBooks = json_decode($this->getProductAreaBooks()->toJson(), true);
        $featuredBooks    = json_decode($this->getFeaturedBooks()->toJson(), true);

        return view('home', compact('productAreaBooks', 'featuredBooks'));
    }

    public function getProductAreaBooks()
    {
      $topInterestingCollections = [
        'new-arrival',
        'on-sale',
        'featured-product',
      ];


      $collections = Collection::whereIn('slug', $topInterestingCollections)
                               ->where('status', true)
                               ->with('books.images')
                               ->orderBy('order_by')
                               ->get();

      return CollectionResource::collection($collections);
    }

    public function getFeaturedBooks()
    {
      $featuredBookCollections = [
        'featured-product',
      ];


      $collections = Collection::whereIn('slug', $featuredBookCollections)
                               ->where('status', true)
                               ->with('books.images')
                               ->orderBy('order_by')
                               ->get();

      return CollectionResource::collection($collections);
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
