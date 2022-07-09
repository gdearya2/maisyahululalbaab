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
          <div class="row g-3" id="pagination-product">
            @include("product.product-pagination",["product"=>$product])
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