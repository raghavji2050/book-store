@extends('layouts.app')

@section('content')

  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'checkout', 'text' => 'Checkout']]
  ])
  @include('layouts.includes.my-account.entry-header-area', [
    'text' => 'Checkout'
  ])
  @include('layouts.includes.checkout.coupon-area')
  @include('layouts.includes.checkout.checkout-area')

@endsection
