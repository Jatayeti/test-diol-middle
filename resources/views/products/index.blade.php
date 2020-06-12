@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Котики</h1>
                <div class="sort">
                    <div class="btn-group">
                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Сортировать
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['sort' => 'name-asc'])}}">По названию</a>
                            <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['sort' => 'price-asc'])}}">По возрастанию цены</a>
                            <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['sort' => 'price-desc'])}}">По убыванию цены</a>
                        </div>
                    </div>
                </div>
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

        <div class="row">
            <div class="col">
                {{$products}}
            </div>
        </div>
    </div>

@endsection
