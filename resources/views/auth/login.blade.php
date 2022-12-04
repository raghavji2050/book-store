@extends('layouts.app')

@section('content')
  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'login', 'text' => 'Login']]
  ])
  @include('auth.user-login-area')

@endsection
