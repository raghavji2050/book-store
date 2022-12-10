<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function show($id)
    {
      $book = Book::findOrFail($id);
      $book = json_decode((new BookResource($book))->toJson(), true);

      // echo "<pre>"; print_r($book); die;
      return view('product-detail', compact('book'));
    }
}
