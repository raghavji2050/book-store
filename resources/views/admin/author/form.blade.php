@extends('layouts.admin')
@php
  $namespace = 'admin.authors';
  $entity    = 'Author';
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
                  action="{{ $author->id ? route($namespace.'.update', $author->id) : route($namespace.'.store') }}"
                  method="post">
                  @if ($author->id)
                    @method('PUT')
                  @endif
                  @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{ $author->name }}" autofocus/>
                            @include('admin.validation-error', ['element' => 'name'])
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" name="slug" value="{{ $author->slug }}" />
                            @include('admin.validation-error', ['element' => 'slug'])
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="order_by">Order by</label>
                      <input type="number" class="form-control @error('order_by') is-invalid @enderror" id="order_by" placeholder="Order by" name="order_by" value="{{ $author->order_by }}" />
                      @include('admin.validation-error', ['element' => 'order_by'])
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description">
                          {{ old('description', $author->description) }}
                        </textarea>
                        @include('admin.validation-error', ['element' => 'description'])
                    </div>
                    <div class="form-check form-switch mb-3">
                      <input type="hidden" value="0" name="status">
  										<input class="form-check-input" type="checkbox" id="category-status" name="status" value="1" @if($author->status) checked @endif>
  										<label class="form-check-label" for="category-status">Enable</label>
  									</div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      </div>
    </div>
    @include('admin.author.image')
</div>

@endsection
