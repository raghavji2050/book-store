@extends('layouts.app')

@section('content')

  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'contact', 'text' => 'Contact']]
  ])
  @include('layouts.includes.my-account.entry-header-area', [
    'text' => 'Contact'
  ])
  @include('layouts.includes.contact.map-area')
  @include('layouts.includes.contact.contact-area')

@endsection
