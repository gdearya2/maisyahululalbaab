@extends('layouts.main2')
@section('section')
<!-- Sidenav Black Overlay-->
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">All Products</h6>
            <!-- Layout Options-->
            <div class="layout-options"><a class="active" href="#"><i class="lni lni-grid-alt"></i></a><a href="product-list"><i class="lni lni-radio-button"></i></a></div>
          </div>
          <!-- Search Form-->
          <div class="mb-3 d-flex justify-content-end">
              <div class="top-search-form">
                <form action="/product">
                  <input class="form-control" value="{{ request('cari') }}" type="search" name="cari" placeholder="Cari Produk..." />
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
          </div>
          @if ($products->count())
          <div class="row g-3">
            @foreach ($products as $product)
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
            @endforeach          
          </div>
          <div class="d-flex justify-content-center mt-5">
          {{ $products->onEachSide(2)->links() }}
          </div>
          @else
          <h5 class="text-center">Product tidak ditemukan</h5>
          @endif
          
        </div>
      </div>
      <a href="#tes" class="to-top">
        <i class="bi bi-arrow-up-short"></i>
      </a>

    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
@endsection