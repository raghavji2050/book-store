@extends('layouts.app')

@section('content')

  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'checkout', 'text' => 'Checkout']]
  ])
  <div class="row">
    <div class="col-12">
      <div class="entry-header-area">
      	<div class="container">
      		<div class="row">
      			<div class="col-lg-12">
      				<div class="entry-header-title">
      					<h2>
                  Checkout
                  <a href="{{ route('checkout', ['edit_address' => true]) }}" class="btn btn-sqr float-end m-0">Edit Address</a>
                </h2>
      				</div>
      			</div>
      		</div>
          @if (count($errors) > 0)
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                {{ $error }}<br>
              @endforeach
            </div>
          @endif
      	</div>
      </div>
    </div>
  </div>

  {{-- @include('layouts.includes.checkout.coupon-area') --}}
  @include('layouts.includes.checkout.checkout-area')

@endsection
