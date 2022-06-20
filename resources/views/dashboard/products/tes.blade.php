@extends('dashboard.layouts.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card  mt-4">
                    <div class="card-body">
                        <h2>Daftar Product </h2>
                        @if(session()->has('success'))
                            <div class="alert alert-success col-lg" role="alert">
                                {{ session('success') }}
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button>
                            </div>
                        @endif
                        <div class=" row ">
                            {{-- <div class="mb-3">
                                <a href="/dashboard/products/create"><button class="btn btn-primary">Tambah Product</button></a>
                            </div> --}}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mb-3" onClick="showCreate()">
                                Tambah Product
                            </button>
                            
                            <!-- Modal Create Product -->
                            <div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="ModalCreateLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="ModalCreateLabel">Tambah Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                            <form method="post" id="form-create-product" action="#" enctype="multipart/form-data">
                                                @csrf
                                                          <div class="card-body" style="padding: 1rem !important;">
                                                                <div class="form-group">
                                                                    <label for="nama_product">Nama Product <span style="color: red;">*</span></label>
                                                                    <input type="text" class="form-control" id="nama_product" name="nama_product" autocomplete="off" required placeholder="Masukkan Nama Product" >
                                                                </div>
                                                                <div class="error_nama_product">
                                                                </div>
                                                                <div class="form-group">
                                                                   <label for="info_product">Info Product <span style="color: red;">*</span></label>
                                                                   <select class="custom-select rounded-2" id="info_product" name="info_product">                       
                                                                       <option value selected disabled >Pilih Info Product...</option>
                                                                       <option value="Sale">Sale</option>
                                                                       <option value="New">New</option>
                                                                       <option value="Hot" >Hot</option>
                                                                       <option value="Promo">Promo</option>
                                                                   </select>
                                                               </div> 
                                                               <div class="error_info_product">
                                                                  
                                                               </div>
                                                                <div class="form-group">
                                                                   <label for="category_id">Kategori Product <span style="color: red;">*</span></label>
                                                                   <select class="custom-select rounded-2" id="category_id" name="category_id"> 
                                                                       <option value selected disabled>Pilih Kategori Product..</option>       
                                                                       @foreach ($categories as $category)               
                                                                       <option value="{{ $category->id }}">{{ $category->nama_kategori}}</option>
                                                                       @endforeach
                                                                    </select>
                                                               </div> 
                                                               <div class="error_kategori_product ">
                                                                  
                                                               </div>
                                                                <div class="form-group">
                                                                    <label for="harga_product">Harga Product <span style="color: red;">*</span></label>
                                                                    <input type="text" class="form-control " id="harga_product" name="harga_product" autocomplete="off"  required placeholder="Masukkan Harga Product" >
                                                                </div>
                                                                <div class="error_harga_product ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="harga_coret_product">Harga Coret</label>
                                                                    <input type="text" class="form-control " id="harga_coret_product" name="harga_coret_product" autocomplete="off"  placeholder="Masukkan Harga Coret">
                                                                </div>
                                                                <div class="error_harga_coret_product ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Utama (300x300) <span style="color: red;">*</span></label>
                                                                    <img class="img-preview img-fluid mb-3 col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product" onchange="previewImage()" name="gambar_product">
                                                                        <label class="custom-file-label" for="gambar_product">Choose file</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image2">Gambar Product Detail 1 (1920x600) <span style="color: red;">*</span></label>
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product_detail" name="gambar_detailProduct1">
                                                                        <label class="custom-file-label" for="gambar_product_detail">Choose file</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Detail 2 (jika ada) (1920x600)</label>
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product_detail2" name="gambar_detailProduct2">
                                                                        <label class="custom-file-label" for="gambar_product">Choose file</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail2 ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Detail 3 (jika ada) (1920x600)</label>
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product_detail3" name="gambar_detailProduct3">
                                                                        <label class="custom-file-label" for="gambar_product">Choose file</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail3 ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi_product" class="form-label">Deskripsi Product <span style="color: red;">*</span></label>
                                                                    <input required id="deskripsi_product" type="hidden" name="deskripsi_product">
                                                                    <trix-editor input="deskripsi_product"></trix-editor>
                                                                </div>
                                                                <div class="error_deskripsi_product ">
                                                                </div>
                                                            </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary create_product" onclick="CreateData()" >Tambah Product</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <!-- Modal Edit Product -->
                            <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalCreateLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="ModalCreateLabel">Edit Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                            <form method="post" id="form-create-product" action="#" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                          <div class="card-body" style="padding: 1rem !important;">
                                                                <input type="hidden" name="product_id" id="product_id" value="">
                                                                <div class="form-group">
                                                                    <label for="nama_product">Nama Product <span style="color: red;">*</span></label>
                                                                    <input type="text" class="form-control" id="nama_product_edit"  name="nama_product" autocomplete="off" required placeholder="Masukkan Nama Product" >
                                                                </div>
                                                                <div class="error_nama_product">
                                                                </div>
                                                                <div class="form-group">
                                                                   <label for="info_product">Info Product <span style="color: red;">*</span></label>
                                                                   <select class="custom-select rounded-2" id="info_product_edit" name="info_product">                       
                                                                       <option >Pilih Info Product...</option>
                                                                       <option value="Sale">Sale</option>
                                                                       <option value="New">New</option>
                                                                       <option value="Hot" >Hot</option>
                                                                       <option value="Promo">Promo</option>
                                                                   </select>
                                                               </div> 
                                                               <div class="error_info_product">
                                                                  
                                                               </div>
                                                                <div class="form-group">
                                                                   <label for="category_id">Kategori Product <span style="color: red;">*</span></label>
                                                                   <select class="custom-select rounded-2" id="category_id_edit" name="category_id"> 
                                                                       <option>Pilih Kategori Product..</option>       
                                                                       @foreach ($categories as $category)               
                                                                       <option value="{{ $category->id }}">{{ $category->nama_kategori}}</option>
                                                                       @endforeach
                                                                    </select>
                                                               </div> 
                                                               <div class="error_kategori_product ">
                                                                  
                                                               </div>
                                                                <div class="form-group">
                                                                    <label for="harga_product">Harga Product <span style="color: red;">*</span></label>
                                                                    <input type="text" class="form-control " id="harga_product_edit" name="harga_product" autocomplete="off"  required placeholder="Masukkan Harga Product" >
                                                                </div>
                                                                <div class="error_harga_product ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="harga_coret_product">Harga Coret</label>
                                                                    <input type="text" class="form-control " id="harga_coret_product_edit" name="harga_coret_product" autocomplete="off"  placeholder="Masukkan Harga Coret">
                                                                </div>
                                                                <div class="error_harga_coret_product ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Utama (300x300) <span style="color: red;">*</span></label>
                                                                    <img class="img-preview img-fluid mb-3 col-sm-5 d-block" >
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_product_edit" onchange="previewImage()" name="gambar_product">
                                                                        <label class="custom-file-label label_product_edit"  for="gambar_product">Choose File</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image2">Gambar Product Detail 1 (1920x600) <span style="color: red;">*</span></label>
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_detailProduct1_edit" name="gambar_detailProduct1">
                                                                        <label class="custom-file-label label_product1_edit"  for="gambar_product_detail">Choose File</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Detail 2 (jika ada) (1920x600)</label>
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="gambar_detailProduct2_edit" name="gambar_detailProduct2">
                                                                        <label class="custom-file-label label_product2_edit"  for="gambar_product">Choose File</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail2 ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image1">Gambar Product Detail 3 (jika ada) (1920x600)</label>
                                                                    <div class="input-group">
                                                                      <div class="custom-file">
                                                                        <input type="file" id="gambar_detailProduct3_edit" class="custom-file-input" name="gambar_detailProduct3">
                                                                        <label class="custom-file-label label_product3_edit"  for="gambar_product">Choose File</label>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_gambar_product_detail3 ">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi_product_edit" class="form-label">Deskripsi Product <span style="color: red;">*</span></label>
                                                                    <input required id="deskripsi_product_edit" type="hidden" name="deskripsi_product">
                                                                    <trix-editor input="deskripsi_product_edit" ></trix-editor>
                                                                </div>
                                                                <div class="error_deskripsi_product ">
                                                                </div>
                                                            </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary edit_product" onclick="editData()" >Edit Product</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div id="container" class=" table-responsive">
                            <table id="table_product" class="mt-3 table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Product</th>
                                        <th>Harga Product</th>
                                        <th>Gambar Product</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content -->
@endsection
@push('scripts')
<script>
    const title = document.querySelector('#title');
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })

    function previewImage() {
      const image = document.querySelector('#gambar_product');
      const imgPreview = document.querySelector('.img-preview');
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
     }
</script>
<script>
//FUNCTION
//Show Create Product
function showCreate(){
    $('#ModalCreate').modal('show');
};      


// Create Ajax Product
function CreateData(){
    $('#form-create-product').ajaxForm({
            url: "/dashboard/products",
            type: "POST",
            dataType: "json",
            success: function(data){
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Product berhasil ditambahkan',
                  showConfirmButton: false,
                  timer: 1500
                });
                // Hide Modal Create
                $('#ModalCreate').modal('hide');
                // Reset Form
                $('#form-create-product')[0].reset();
                //Remove if have Errors
                
                //Update DataTable
                $('#table_product').DataTable().draw();
            },
            error: function(data){
                if(data.status == 400) {
                    if(data.responseJSON.errors.nama_product){
                        $('.error_nama_product').html(data.responseJSON.errors.nama_product);
                        $('.error_nama_product').addClass('error-feedback');
                        $('#nama_product').addClass('is-invalid');
                        $('#nama_product').removeClass('is-valid');
                    } else{
                        $('.error_nama_product').removeClass('error-feedback');
                        $('.error_nama_product').empty();
                        $('#nama_product').removeClass('is-invalid');
                        $('#nama_product').addClass('is-valid');
                    } 
                    if(data.responseJSON.errors.info_product){
                        $('.error_info_product').html(data.responseJSON.errors.info_product);
                        $('.error_info_product').addClass('error-feedback');
                        $('#info_product').addClass('is-invalid');
                        $('#info_product').removeClass('is-valid');
                    } else{
                        $('.error_info_product').removeClass('error-feedback');
                        $('.error_info_product').empty();
                        $('#info_product').removeClass('is-invalid');
                        $('#info_product').addClass('is-valid');
                    } 
                    if(data.responseJSON.errors.category_id){
                        $('.error_kategori_product').html(data.responseJSON.errors.category_id);
                        $('.error_kategori_product').addClass('error-feedback');
                        $('#category_id').addClass('is-invalid');
                        $('#category_id').removeClass('is-valid');
                    } else{
                        $('.error_kategori_product').removeClass('error-feedback');
                        $('.error_kategori_product').empty();
                        $('#category_id').removeClass('is-invalid');
                        $('#category_id').addClass('is-valid');
                    } 
                    if(data.responseJSON.errors.harga_product){
                        $('.error_harga_product').html(data.responseJSON.errors.harga_product);
                        $('.error_harga_product').addClass('error-feedback');
                        $('#harga_product').addClass('is-invalid');
                        $('#harga_product').removeClass('is-valid');
                    } else{
                        $('.error_harga_product').removeClass('error-feedback');
                        $('.error_harga_product').empty();
                        $('#harga_product').removeClass('is-invalid');
                        $('#harga_product').addClass('is-valid');
                    }  
                    if(data.responseJSON.errors.harga_coret_product){
                        $('.error_harga_coret_product').html(data.responseJSON.errors.harga_coret_product);
                        $('.error_harga_coret_product').addClass('error-feedback');
                        $('#harga_coret_product').addClass('is-invalid');
                        $('#harga_coret_product').removeClass('is-valid');
                    } else if($('#harga_coret_product').val().length > 0){
                        $('.error_harga_coret_product').removeClass('error-feedback');
                        $('.error_harga_coret_product').empty();
                        $('#harga_coret_product').removeClass('is-invalid');
                        $('#harga_coret_product').addClass('is-valid');
                    }  else {
                        $('.error_harga_coret_product').removeClass('error-feedback');
                        $('.error_harga_coret_product').empty();
                        $('#harga_coret_product').removeClass('is-invalid');
                        $('#harga_coret_product').removeClass('is-valid');
                    }
                    if(data.responseJSON.errors.gambar_product){
                        $('.error_gambar_product').html(data.responseJSON.errors.gambar_product);
                        $('.error_gambar_product').addClass('error-feedback');
                        $('#gambar_product').addClass('is-invalid');
                        $('#gambar_product').removeClass('is-valid');
                    } else{
                        $('.error_gambar_product').removeClass('error-feedback');
                        $('.error_gambar_product').empty();
                        $('#gambar_product').removeClass('is-invalid');
                        $('#gambar_product').addClass('is-valid');
                    }  
                    if(data.responseJSON.errors.gambar_detailProduct1){
                        $('.error_gambar_product_detail').html(data.responseJSON.errors.gambar_detailProduct1);
                        $('.error_gambar_product_detail').addClass('error-feedback');
                        $('#gambar_product_detail').addClass('is-invalid');
                        $('#gambar_product_detail').removeClass('is-valid');
                    } else{
                        $('.error_gambar_product_detail').removeClass('error-feedback');
                        $('.error_gambar_product_detail').empty();
                        $('#gambar_product_detail').removeClass('is-invalid');
                        $('#gambar_product_detail').addClass('is-valid');
                    }  
                    if(data.responseJSON.errors.gambar_detailProduct2){
                        $('.error_gambar_product_detail2').html(data.responseJSON.errors.gambar_detailProduct2);
                        $('.error_gambar_product_detail2').addClass('error-feedback');
                        $('#gambar_product_detail2').addClass('is-invalid');
                        $('#gambar_product_detail2').removeClass('is-valid');
                    } else if ($('#gambar_product_detail2').val()) {
                        $('.error_gambar_product_detail2').removeClass('error-feedback');
                        $('.error_gambar_product_detail2').empty();
                        $('#gambar_product_detail2').removeClass('is-invalid');
                        $('#gambar_product_detail2').addClass('is-valid');
                    } else{
                        $('.error_gambar_product_detail2').removeClass('error-feedback');
                        $('.error_gambar_product_detail2').empty();
                        $('#gambar_product_detail2').removeClass('is-invalid');
                    }  
                    if(data.responseJSON.errors.gambar_detailProduct3){
                        $('.error_gambar_product_detail3').html(data.responseJSON.errors.gambar_detailProduct3);
                        $('.error_gambar_product_detail3').addClass('error-feedback');
                        $('#gambar_product_detail3').addClass('is-invalid');
                        $('#gambar_product_detail3').removeClass('is-valid');
                    } else if($('#gambar_product_detail3').val()) {
                        $('.error_gambar_product_detail3').removeClass('error-feedback');
                        $('.error_gambar_product_detail3').empty();
                        $('#gambar_product_detail3').removeClass('is-invalid');
                        $('#gambar_product_detail3').addClass('is-valid');
                    } else{
                        $('.error_gambar_product_detail3').removeClass('error-feedback');
                        $('.error_gambar_product_detail3').empty();
                        $('#gambar_product_detail3').removeClass('is-invalid');
                    }  
                    if(data.responseJSON.errors.deskripsi_product){
                        $('.error_deskripsi_product').html(data.responseJSON.errors.deskripsi_product);
                        $('.error_deskripsi_product').addClass('error-feedback');
                        $('#deskripsi_product').addClass('is-invalid');
                        $('#deskripsi_product').removeClass('is-valid');
                    } else{
                        $('.error_deskripsi_product').removeClass('error-feedback');
                        $('#deskripsi_product').removeClass('is-invalid');
                        $('#deskripsi_product').addClass('is-valid');
                        $('.error_deskripsi_product').empty();
                    } 
                }
            }
            
    }).submit();
}
</script>
<script>
$(document).ready(function () {
    //CSRF Token
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
    //Show Product
    $('#table_product').DataTable({
        processing: true,
        serverSide: true,
        ajax: { 
            url: "{{ route('products.index') }}",
            type: 'GET'
        },
        columns: [
            {data:'id', name: 'id'},
            {data:'nama_product', name: 'nama_product'},
            {data:'harga_product', name: 'harga_product'},
            {data:'gambar_product', name: 'gambar_product',searchable:false,orderable: false},
            {data:'action', name: 'action',searchable:false,orderable: false},
        ]
    });

    // Show Edit Product
    $(document).on('click','.edit',function(){
        $('#ModalEdit').modal('show');
        var productID = $(this).attr('id');
        $.ajax({
            url: "/dashboard/products/get/" + productID,
            type: "GET",
            dataType: "json",
            success: function(data){
                console.log(data.product[0]);
                 $('#nama_product_edit').val(data.product[0].nama_product);
                 $('#info_product_edit').val(data.product[0].info_product);
                 $('#category_id_edit').val(data.product[0].category_id);
                 $('#harga_product_edit').val(data.product[0].harga_product);
                 $('#harga_coret_product_edit').val(data.product[0].harga_coret_product);
                 $('.label_product_edit').text(data.product[0].gambar_product);
                 $('.label_product1_edit').text(data.product[0].gambar_detailProduct1);
                 $('.label_product2_edit').text(data.product[0].gambar_detailProduct2);
                 $('.label_product3_edit').text(data.product[0].gambar_detailProduct3);
                 $('#deskripsi_product_edit').val(data.product[0].deskripsi_product);
            }
        })
       
    })

       

    // // Delete Product
    $(document).on('click','.hapus',function(){
        var productID = $(this).attr('id');
        Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Product yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Product berhasil dihapus.',
            'success'
            )
            $.ajax({
            url: "/dashboard/products/"+ productID,    
            type: 'delete',
            success: function(data){
                    $('#table_product').DataTable().draw();
            },
            error: function(data){
                console.log('Error:',data);
            }
        });
        }
        }) 
    });
    
   
});



</script>
@endpush