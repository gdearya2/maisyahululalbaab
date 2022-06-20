@extends('layouts.main2')
@section('section')
<!-- Catagory Single Image-->
      <div class="catagory-single-img" style="background-image: url('{{ asset('img/ProductDetail.jpg') }}')"></div>
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Kategori {{ $category }}</h6>
          </div>
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
                    <img class="mb-2" style="height: 158px; object-fit: cover" src="{{ asset('storage/'. $product->gambar_product) }}" alt=""></a><a class="product-title d-block" href="/product/{{ $product->nama_product }}">{{ $product->nama_product }}</a>
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
        </div>
      </div>
      <a href="#tes" class="to-top">
        <i class="bi bi-arrow-up-short"></i>
      </a>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
@endsection