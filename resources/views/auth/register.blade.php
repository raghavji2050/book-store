@extends('layouts.app')

@section('content')

  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'register', 'text' => 'Register']]
  ])
  @include('auth.user-register-area')

@endsection
