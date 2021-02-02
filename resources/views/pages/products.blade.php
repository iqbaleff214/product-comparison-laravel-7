@extends('template.base')

@section('title', 'Products')

@section('content')
<div class="row my-4">
    <div class="col">
        <a href="{{ route('comparison.form') }}" class="btn btn-warning">Compare Products</a>
    </div>
</div>
<div class="row">
    @foreach ($products as $product)
        <x-product-card :product="$product" />
    @endforeach
</div>
@endsection