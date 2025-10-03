@extends('layouts.app')

@section('title', 'title')
@section('description', 'Page description')
@section('keywords', 'keyqords')
@section('og_type', 'website')
@section('og_image', asset('image/logo.png'))


@section('content')
    @php
        print '<pre>';
        print_r('content');
        print '</pre>';
    @endphp
@endsection
