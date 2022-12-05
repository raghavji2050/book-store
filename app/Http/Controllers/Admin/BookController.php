<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    private $baseViewDirctory = 'admin.book';
    private $baseRouteName    = 'admin.books';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::get();

        return view($this->baseViewDirctory.'.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book();

        return view($this->baseViewDirctory.'.form', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelAttributes = $request->validate([
          'name' => 'required',
          'sub_title' => 'nullable',
          'short_description' => 'nullable',
          'long_description' => 'nullable',
          'price' => 'nullable',
          'discounted_price' => 'nullable',
          'sku' => 'nullable',
          'stars' => 'nullable',
          'in_stock' => 'nullable',
          'order_by' => 'nullable',
          'status' => 'nullable',
          'author_id' => 'required|exists:authors,id',
          'collection_id' => 'nullable|exists:collections,id',
          'category_id' => 'nullable|exists:categories,id',
          'order_by' => 'nullable',
          'reviews_count' => 'nullable',
        ]);

        Book::create($modelAttributes);

        return redirect()->route($this->baseRouteName.'.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $book = Book::findOrFail($id);

       return view($this->baseViewDirctory.'.form', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $book = Book::findOrFail($id);

      $modelAttributes = $request->validate([
        'name' => 'required',
        'sub_title' => 'nullable',
        'short_description' => 'nullable',
        'long_description' => 'nullable',
        'price' => 'nullable',
        'discounted_price' => 'nullable',
        'sku' => 'nullable',
        'stars' => 'nullable',
        'in_stock' => 'nullable',
        'order_by' => 'nullable',
        'status' => 'nullable',
        'author_id' => 'required|exists:authors,id',
        'collection_id' => 'nullable|exists:collections,id',
        'category_id' => 'nullable|exists:categories,id',
        'order_by' => 'nullable',
        'reviews_count' => 'nullable',
      ]);

      $book->update($modelAttributes);

      return redirect()->route($this->baseRouteName.'.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id)->delete();

        return redirect()->route($this->baseRouteName.'.index');
    }
}
