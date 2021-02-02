<div class="col-md-3 p-2">
    <div class="card">
    <img src="{{ asset('assets/img/image.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $product->second_title }}</h6>
            <p class="card-text">Rp{{ number_format($product->price) }}</p>
            <a href="{{ route('comparison', ['id'=>$product->id]) }}" class="btn btn-danger btn-sm float-end">Compare</a>
        </div>
    </div>
</div>