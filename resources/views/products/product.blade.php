@extends('layouts.master')

@section('content')

    <product-view
        :product-data="{{$product}}"
    />

@endsection
