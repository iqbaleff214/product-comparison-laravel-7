<div class="col-md-4">
    <div class="card {{ $isMainProduct() ? 'border-danger' : '' }}">
        <img src="{{ asset('assets/img/image.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->title }} {{ $product->second_title }}
            </h5>
          <p class="card-text">Rp{{ number_format($product->price) }}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item  {{ $isMainProduct() ? 'border-danger' : '' }}">
              <h6>Features</h6>
              <p>{{ $product->features }}</p>
          </li>
          <li class="list-group-item  {{ $isMainProduct() ? 'border-danger' : '' }}">
              <h6>Description</h6>
              <p>{{ $product->description }}</p>
          </li>
          <li class="list-group-item  {{ $isMainProduct() ? 'border-danger' : '' }}">
              <h6>Sizing</h6>
              <p>{{ $product->sizing }}</p>
          </li>
        </ul>
      </div>
</div>