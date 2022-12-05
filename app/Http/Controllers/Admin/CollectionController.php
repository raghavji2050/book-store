<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    private $baseViewDirctory = 'admin.collection';
    private $baseRouteName    = 'admin.collections';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::get();

        return view($this->baseViewDirctory.'.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collection = new Collection();

        return view($this->baseViewDirctory.'.form', compact('collection'));
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
          'slug'  => 'required|unique:collections,slug',
          'description'  => 'nullable',
          'order_by' => 'nullable',
          'status' => 'nullable',
        ]);

        Collection::create($modelAttributes);

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
       $collection = Collection::findOrFail($id);

       return view($this->baseViewDirctory.'.form', compact('collection'));
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
      $collection = Collection::findOrFail($id);

      $modelAttributes = $request->validate([
        'title' => 'required',
        'slug'  => 'required|unique:collections,slug,'.$id,
        'description'  => 'nullable',
        'order_by' => 'nullable',
        'status' => 'nullable',
      ]);

      $collection->update($modelAttributes);

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
        $collection = Collection::findOrFail($id)->delete();

        return redirect()->route($this->baseRouteName.'.index');
    }
}
