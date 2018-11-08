@extends('layout')

@section('left-sidebar')
    @include('user_info')
@endsection

@section('main-content')
    @include('timeline_posts')
@endsection