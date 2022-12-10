@extends('layouts.app')

@section('content')

  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'productDetail', 'text' => 'Product Detail', 'routeParams' => $book['id']]]
  ])
  @include('layouts.includes.product.product-main-area')

@endsection
