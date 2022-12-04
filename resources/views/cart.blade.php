@extends('layouts.app')

@section('content')

  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'cart', 'text' => 'Cart']]
  ])
  @include('layouts.includes.my-account.entry-header-area', [
    'text' => 'Cart'
  ])
  @include('layouts.includes.cart.cart-main-area')

@endsection
