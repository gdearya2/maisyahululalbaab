<!-- Single Top Product Card-->
<div class="col-6 col-md-4 col-lg-3">
    <div class="card top-product-card">
      <div class="card-body">
        @if ($product->info_product == "Sale")
        <span class="badge badge-success">{{ $product->info_product }}</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
        @elseif ($product->info_product == "Hot")
        <span class="badge badge-warning">{{ $product->info_product }}</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
        @elseif ($product->info_product == "New")
        <span class="badge badge-primary">{{ $product->info_product }}</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
        @else 
        <span class="badge badge-danger">PROMO</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
        @endif
        <a class="product-thumbnail d-block" href="/product/{{ $product->nama_product }}">
          <img class="mb-2" style="height: 158px; object-fit: cover" src="{{ asset('storage/gambar_product/'. $product->gambar_product) }}" alt=""></a><a class="product-title d-block" href="/product/{{ $product->nama_product }}">{{ $product->nama_product }}</a>
        @if ($product->harga_coret_product)
        <p class="sale-price">{{ $product->harga_product }}
          <span>{{ $product->harga_coret_product }}</span>
        </p>
        @else
        <p class="sale-price">{{ $product->harga_product }}
        </p>
        @endif
        <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm " href="/product/{{ $product->nama_product }}"><i class="lni lni-plus"></i></a>
      </div>
    </div>
  </div>      