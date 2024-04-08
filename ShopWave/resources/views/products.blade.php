@extends('layout')

@section('content')

<section class="product-cards-container">
    @foreach ($products as $product)
        <div class="product-card">
            <img class="card-image" src="{{ $product->imageUrl }}">
            <div class="card-text-container">
                <h1 class="product-name">{{ $product->name }}</h1>
            </div>
            <a href="{{ route('products.show', $product) }}" class="card-button">SEE PRODUCT</a>    
        </div>
        
    @endforeach
</section>

<div id="paginator">
    {{ $products->links() }}
</div>
@endsection