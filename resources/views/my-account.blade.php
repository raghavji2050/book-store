@extends('layouts.app')

@section('content')

  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'myAccount', 'text' => 'My Account']]
  ])
  @include('layouts.includes.my-account.entry-header-area', [
    'text' => 'My Account'
  ])
  @include('layouts.includes.my-account.my-account-wrapper')

@endsection
