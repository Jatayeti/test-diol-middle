@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Ваша корзина котиков</h1>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-3">
                    <product-card
                        :product-data="{{$product}}"
                    />
                </div>
            @endforeach
        </div>
    </div>

@endsection
