<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use App\Models\Collection;
use App\Models\Category;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\CollectionResource;
use App\Http\Resources\CategoryResource;

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
        $featuredBooks     = json_decode($this->getFeaturedBooks()->toJson(), true);
        $bestSellingAuthor = json_decode($this->getBestSellingAuthor()->toJson(), true);

        return view('home', compact('featuredBooks', 'bestSellingAuthor'));
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

    public function getBestSellingAuthor()
    {
      $author = Author::where('status', true)
                       ->with('books.images')
                       ->orderBy('order_by')
                       ->first();

      return new AuthorResource($author);
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
