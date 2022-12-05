<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private $baseViewDirctory = 'admin.category';
    private $baseRouteName    = 'admin.categories';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();

        return view($this->baseViewDirctory.'.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();

        return view($this->baseViewDirctory.'.form', compact('category'));
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
          'title' => 'required',
          'slug'  => 'required|unique:categories,slug',
          'description'  => 'nullable',
          'order_by' => 'nullable',
          'status' => 'nullable',
        ]);

        Category::create($modelAttributes);

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
       $category = Category::findOrFail($id);

       return view($this->baseViewDirctory.'.form', compact('category'));
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
      $category = Category::findOrFail($id);

      $modelAttributes = $request->validate([
        'title' => 'required',
        'slug'  => 'required|unique:categories,slug,'.$id,
        'description'  => 'nullable',
        'order_by' => 'nullable',
        'status' => 'nullable',
      ]);

      $category->update($modelAttributes);

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
        $category = Category::findOrFail($id)->delete();

        return redirect()->route($this->baseRouteName.'.index');
    }
}
