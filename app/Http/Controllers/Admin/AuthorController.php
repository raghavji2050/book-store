<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    private $baseViewDirctory = 'admin.author';
    private $baseRouteName    = 'admin.authors';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::get();

        return view($this->baseViewDirctory.'.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author = new Author();

        return view($this->baseViewDirctory.'.form', compact('author'));
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
          'slug'  => 'required|unique:authors,slug',
          'order_by' => 'nullable',
          'status' => 'nullable',
          'description' => 'nullable',
        ]);

        Author::create($modelAttributes);

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
       $author = Author::with('images')->findOrFail($id);

       return view($this->baseViewDirctory.'.form', compact('author'));
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
      $author = Author::findOrFail($id);

      $modelAttributes = $request->validate([
        'name' => 'required',
        'slug'  => 'required|unique:authors,slug,'.$id,
        'order_by' => 'nullable',
        'status' => 'nullable',
        'description' => 'nullable',
      ]);

      $author->update($modelAttributes);

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
        $author = Author::findOrFail($id)->delete();

        return redirect()->route($this->baseRouteName.'.index');
    }
}
