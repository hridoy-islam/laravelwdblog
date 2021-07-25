@extends('frontend.common.layout')
@section('title', 'Home ')

@section('slider')
@include('frontend.home.slider')
@endsection

@section('content')

@include('frontend.home.main')

@endsection
