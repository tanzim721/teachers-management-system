@extends('Layout.App')
@section('title', 'SERVICES')

@section('content')
  @section('page_name', 'Services')
  {{-- @include('Component.HomeBanner') --}}
  {{-- @include('Component.HomeService') --}}
  @include('Services.view')
@endsection
