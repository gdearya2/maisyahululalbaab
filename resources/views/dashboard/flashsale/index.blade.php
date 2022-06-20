@extends('dashboard.layouts.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card  mt-4">
                    <div class="card-body">
                        <h2>Flash Sale Maisyah Corporation </h2>
                        @if(session()->has('success'))
                            <div class="alert alert-success col-lg" role="alert">
                                {{ session('success') }}
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button>
                            </div>
                        @endif
                        <div class=" row d-flex  justify-content-between">
                            <div class="mt-3 col-sm-3">
                                <form method="get">
                                    <label for="cari">Search: </label>
                                    <input type="search" id="keyword" class="form-control" autocomplete="off" name="cari" autofocus value="{{ request('cari') }}">
                                </form>

                            </div>
                        </div>
                        <div id="container" class=" table-responsive">
                            <table id="example2" class="mt-3 table  table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Product</th>
                                        <th>Harga Product</th>
                                        <th>Flash Sale</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>     
                                            <td>{{ $products->firstItem() + $loop->index }}</td>
                                            <td>{{ $product->nama_product }}</td>
                                            <td>{{ $product->harga_product }}</td>
                                            @if ($product->flashsale)
                                            <td><span class="badge bg-success">Active</span></td>
                                            @else
                                            <td><span class="badge bg-danger">Non Active</span></td>
                                            @endif
                                            <td class=" py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    @if ($product->flashsale)
                                                    <a data-toggle="modal" data-target="#editModal" class="btn btn-info "><i class="fas fa-pencil-alt"></i></a>
                                                         <!-- Edit FlashSale -->
                                                         <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <form method="post" action="/dashboard/flashsale/{{ $product->id }}">           
                                                                    @method('PUT')
                                                                    @csrf
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Edit Flash Sale</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label>Akhir Flash Sale</label>
                                                                        <div class="input-group date">
                                                                            <input type="date" value="{{ old('flashsale', $product->flashsale) }}" name="flashsale" id="example" class="form-control "  />
                                                                        </div>
                                                                    </div>
                                                                      <div class="form-group">
                                                                        <label for="formGroupExampleInput">Persentase Sold Out (%)</label>
                                                                        <input type="number" autocomplete="off" class="form-control" name="sold_out" id="formGroupExampleInput" placeholder="Example input placeholder">
                                                                      </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    <form action="/dashboard/flashsale/{{ $product->id }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="flashsale" value= 0000 - 00 - 00>
                                                        <button class="btn btn-danger rounded-0" onclick="return confirm('Apakah kamu yakin?')" style="padding: 0.25rem 0.5rem; font-size:.875rem; margin-left: -1px"><i class=" fas fa-trash "></i></button>
                                                    </form>               
                                                    @else
                                                    <a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary "><i class="fas fa-plus"></i></a>
                                                              <!-- Add FlashSale -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <form method="post" action="/dashboard/flashsale/{{ $product->id }}">           
                                                                    @method('PUT')
                                                                    @csrf
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Flash Sale</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label>Akhir Flash Sale</label>
                                                                        <div class="input-group date">
                                                                            <input type="date" required value="{{ old('flashsale') }}" name="flashsale" id="example" class="form-control "  />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="formGroupExampleInput">Persentase Sold Out (%)</label>
                                                                        <input type="number" required autocomplete="off" class="form-control" name="sold_out" id="formGroupExampleInput" placeholder="Example input placeholder">
                                                                      </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $products->onEachSide(2)->links()}}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content -->
@endsection
