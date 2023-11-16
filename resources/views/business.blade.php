@extends("layouts.sidebar")

@section('content')
    <link rel="stylesheet" href="{{asset('new/assets/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('new/assets/css/responsive.css')}}">
    <!-- color -->
    <link rel="stylesheet" href="{{asset('new/assets/css/color.css')}}">
    <!-- jQuery -->
@include('ads.pricing')
@endsection
