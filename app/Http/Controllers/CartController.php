<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\BookResource;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();

        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
          'book_id'  => 'required|exists:books,id',
          'quantity' => 'nullable',
        ]);
        $book = json_decode((new BookResource(Book::find($request->book_id)))->toJson(), true);

        $cart = \Cart::add([
            'id' => $request->book_id,
            'name' => $book['name'],
            'price' => $book['price'],
            'quantity' => $request->quantity ?? 1,
            'attributes' => [
              'image' => $book['featured_image'],
              'unitPrice' => $book['price']
            ]
        ]);

        $myCartHtml = view('layouts.includes.header.header-mid-area.my-cart')->render();
        $cartMainArea = view('layouts.includes.cart.cart-main-area')->render();

        return response()->json([
          'message' => 'Book successfully added to cart',
          'myCartHtml' => $myCartHtml,
          'cartMainArea' => $cartMainArea,
        ]);
    }

    public function updateCart(Request $request)
    {
        $request->validate([
          'book_id'  => 'required|exists:books,id',
          'quantity' => 'nullable',
        ]);

        \Cart::update($request->book_id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity ?? 1
            ],
        ]);

        $myCartHtml = view('layouts.includes.header.header-mid-area.my-cart')->render();
        $cartMainArea = view('layouts.includes.cart.cart-main-area')->render();

        return response()->json([
          'message' => 'Book successfully updated to cart',
          'myCartHtml' => $myCartHtml,
          'cartMainArea' => $cartMainArea,
        ]);
    }

    public function removeCart(Request $request)
    {
        $request->validate([
          'book_id'  => 'required|exists:books,id',
        ]);
        \Cart::remove($request->book_id);

        $myCartHtml = view('layouts.includes.header.header-mid-area.my-cart')->render();
        $cartMainArea = view('layouts.includes.cart.cart-main-area')->render();

        return response()->json([
          'message' => 'Book successfully removed from cart',
          'myCartHtml' => $myCartHtml,
          'cartMainArea' => $cartMainArea,
        ]);
    }

    public function clearAllCart()
    {
        \Cart::clear();

        return response()->json([
          'message' => 'All Item Cart Clear Successfully'
        ]);
    }
}
