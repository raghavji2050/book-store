@extends('layouts.admin')
@php
  $namespace = 'admin.books';
  $entity    = 'Book';
@endphp
@section('content')
<div class="container-fluid">
    <div class="header">
      <div class="row">
        <div class="col-10">
          <h1 class="header-title">
            {{ $entity }}
          </h1>
        </div>
        <div class="col-2 text-end">
          <a href="{{ route($namespace.'.index') }}" class="btn btn-primary btn-sm">Back</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Create {{ $entity }}</h5>
            </div>
            <div class="card-body">
                <form
                  action="{{ $book->id ? route($namespace.'.update', $book->id) : route($namespace.'.store') }}"
                  method="post">
                  @if ($book->id)
                    @method('PUT')
                  @endif
                  @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{ old('name', $book->name) }}" autofocus/>
                            @include('admin.validation-error', ['element' => 'name'])
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title" placeholder="Sub Title" name="sub_title" value="{{ old('name', $book->sub_title) }}" />
                            @include('admin.validation-error', ['element' => 'sub_title'])
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="short_description">Short Description</label>
                        <textarea class="form-control @error('short_description') is-invalid @enderror" name="short_description" id="short_description" placeholder="Description">
                          {{ old('short_description', $book->short_description) }}
                        </textarea>
                        @include('admin.validation-error', ['element' => 'description'])
                    </div>
                    <div class="mb-3">
                        <label for="long_description">Long Description</label>
                        <textarea class="form-control @error('long_description') is-invalid @enderror" name="long_description" id="long_description" placeholder="Description">
                          {{ old('long_description', $book->long_description) }}
                        </textarea>
                        @include('admin.validation-error', ['element' => 'description'])
                    </div>
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="price">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" name="price" value="{{ old('price', $book->price) }}" />
                        @include('admin.validation-error', ['element' => 'price'])
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="discounted_price">Discounted Price</label>
                        <input type="number" class="form-control @error('discounted_price') is-invalid @enderror" id="discounted_price" placeholder="Discounted Price" name="discounted_price" value="{{ old('price', $book->discounted_price) }}" />
                        @include('admin.validation-error', ['element' => 'discounted_price'])
                      </div>
                    </div>
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" placeholder="Name" name="sku" value="{{ old('sku', $book->sku) }}"/>
                        @include('admin.validation-error', ['element' => 'sku'])
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="stars">Stars</label>
                        <input type="number" class="form-control @error('stars') is-invalid @enderror" id="stars" placeholder="Stars" name="stars" value="{{ old('starts', $book->stars) }}" />
                        @include('admin.validation-error', ['element' => 'stars'])
                      </div>
                    </div>
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="order_by">Order by</label>
                        <input type="number" class="form-control @error('order_by') is-invalid @enderror" id="order_by" placeholder="Order by" name="order_by" value="{{ old('order_by', $book->order_by) }}" />
                        @include('admin.validation-error', ['element' => 'order_by'])
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="reviews_count">Review Count</label>
                        <input type="number" class="form-control @error('reviews_count') is-invalid @enderror" id="reviews_count" placeholder="Review Count" name="reviews_count" value="{{ old('reviews_count', $book->reviews_count) }}" />
                        @include('admin.validation-error', ['element' => 'reviews_count'])
                      </div>
                    </div>
                    <div class="mb-3 col-md-12">
                      <label for="author_id">Author</label>
                      <select class="form-control mb-3 @error('author_id') is-invalid @enderror" id="author_id" name="author_id">
    										<option selected="" value="">Select Author</option>
                        @foreach(\App\Models\Author::get() as $author)
								          <option value="{{ $author->id }}" @if(old('author_id', $book->author_id) == $author->id) selected @endif>{{ $author->name }}</option>
                        @endforeach
    									</select>
                      @include('admin.validation-error', ['element' => 'author_id'])
                    </div>
                    <div class="mb-3 col-md-12">
                      <label for="collection_id">Collection</label>
                      <select class="form-control mb-3 @error('collection_id') is-invalid @enderror" id="collection_id" name="collection_id">
    										<option selected="" value="">Select Collection</option>
                        @foreach(\App\Models\Collection::get() as $collection)
								          <option value="{{ $collection->id }}" @if(old('author_id', $book->collection_id) == $collection->id) selected @endif>{{ $collection->title }}</option>
                        @endforeach
    									</select>
                      @include('admin.validation-error', ['element' => 'collection_id'])
                    </div>
                    <div class="mb-3 col-md-12">
                      <label for="category_id">Category</label>
                      <select class="form-control mb-3 @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
    										<option selected="" value="">Select Category</option>
                        @foreach(\App\Models\Category::get() as $category)
								          <option value="{{ $category->id }}" @if(old('author_id', $book->category_id) == $category->id) selected @endif>{{ $category->title }}</option>
                        @endforeach
    									</select>
                      @include('admin.validation-error', ['element' => 'category_id'])
                    </div>
                    <div class="form-check form-switch mb-3">
                      <input type="hidden" value="0" name="status">
  										<input class="form-check-input" type="checkbox" id="book-status" name="status" value="1" @if(old('status', $book->status)) checked @endif>
  										<label class="form-check-label" for="book-status">Enable</label>
  									</div>
                    <div class="form-check form-switch mb-3">
                      <input type="hidden" value="0" name="in_stock">
  										<input class="form-check-input" type="checkbox" id="in-stock-status" name="in_stock" value="1" @if(old('status', $book->in_stock)) checked @endif>
  										<label class="form-check-label" for="in-stock-status">In stock</label>
  									</div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      </div>
    </div>
    @include('admin.book.image')
</div>
@endsection
