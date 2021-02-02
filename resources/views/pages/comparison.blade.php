@extends('template.base')

@section('title', 'Comparison')

@section('content')
<div class="row">
@if (isset($product))
        <x-product-comparison-card main="true" :product="$product"/>
    @endif
    @foreach ($products as $item)
        <x-product-comparison-card :product="$item"/>
    @endforeach
</div>
@endsection