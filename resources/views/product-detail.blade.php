@extends('layouts.app')

@section('content')

  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'productDetail', 'text' => 'Product Detail']]
  ])
  @include('layouts.includes.product.product-main-area')

@endsection
