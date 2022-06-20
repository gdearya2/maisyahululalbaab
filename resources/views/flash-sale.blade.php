@extends('layouts.main2')
@section('section')
<!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Flash Sale Products</h6>
          </div>
          <div class="row g-3">
            @foreach ($products as $product)
             @if($product->flashsale)
            <!-- Single Flash Sale Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card flash-sale-card">             
                <div class="card-body">
                  <span class="badge badge-warning">FLASH SALE</span>
                  <a href="/product/{{ $product->nama_product }}">
                    <img src="{{ asset('storage/'.$product->gambar_product) }}" alt="">
                    <span class="product-title">{{ $product->nama_product }}</span>
                    <p class="sale-price color-price-flash">{{ $product->harga_product }}
                      <span class="real-price color-coret-flash">{{ $product->harga_coret_product }}</span>
                    </p>
                    <span class="progress-title">33% Sold Out</span>
                    <span class="progress-title-fire-2"></span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            @endif
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