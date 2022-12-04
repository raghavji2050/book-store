@extends('layouts.app')

@section('content')

  @include('layouts.includes.breadcrumb', [
    'breadcrumbs' => [['route' => 'about', 'text' => 'About']]
  ])
  @include('layouts.includes.my-account.entry-header-area', [
    'text' => 'About'
  ])
  @include('layouts.includes.about.about-main-area')
  @include('layouts.includes.about.our-mission-area')
  @include('layouts.includes.about.counter-area')
  @include('layouts.includes.about.our-team-area')
  @include('layouts.includes.about.skill-area')

@endsection
