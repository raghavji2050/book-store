@extends('layouts.app')

@section('content')

  @include('layouts.includes.home.banner-area')
  @include('layouts.includes.home.slider-area')
  @include('layouts.includes.home.product-area')
  {{-- @include('layouts.includes.home.middle-banner') --}}
  @include('layouts.includes.home.bestseller-area')
  @include('layouts.includes.home.new-book-area')
  {{-- @include('layouts.includes.home.banner-static-area') --}}
  @include('layouts.includes.home.most-product-area')
  {{-- @include('layouts.includes.home.testimonial-area') --}}
  {{-- @include('layouts.includes.home.recent-post-area') --}}
  {{-- @include('layouts.includes.home.social-group-area') --}}
  <div class="product-detail-modal-div"></div>

@endsection
