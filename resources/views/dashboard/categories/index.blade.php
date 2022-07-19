@extends('dashboard.layouts.main')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card mt-4">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ">
              <h1 class="h2">Kategori Maisyah Corp</h1>
            </div>
            
            @if(session()->has('success'))
              <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
              </div>
            @endif

            <div class=" row "> 
              <!-- Modal Create Kategori -->
              <div class="modal fade" id="modalCreateCategory" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="modalCreateLabel">Tambah Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                                {{-- CATATAN --}}
                                  <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                    <div class="font-weight-bold">Catatan</div>
                                    <ul>    
                                        <li>Nama Kategori harus diawali oleh huruf kapital</li>
                                        <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                    </ul>
                                </div>
                                {{-- Akhir Catatan --}}
                                <form method="post" id="form-create-kategori" action="#">
                                    @csrf
                                    <div class="card-body" style="padding: 1rem !important;">
                                        <div class="form-group">
                                          <label for="nama_kategori">Nama Kategori <span style="color: red;">*</span></label>
                                          <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" autocomplete="off" required placeholder="Masukkan Nama Kategori" >
                                        </div>
                                        <div class="error_nama_kategori">
                                        </div>
                                    </div>
                                </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary createCategory">Tambah Kategori</button>
                        </div>
                    </div>
                  </div>
              </div>
          </div>

          <div class=" row "> 
            <!-- Modal Edit Kategori -->
            <div class="modal fade" id="modalEditCategory" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="modalEditLabel">Edit Kategori</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                              {{-- CATATAN --}}
                                <div class="alert alert-danger" style="color:#842029;background-color:#f8d7da;border-color:#f5c2c7" role="alert">
                                  <div class="font-weight-bold">Catatan</div>
                                  <ul>    
                                      <li>Nama Kategori harus diawali oleh huruf kapital</li>
                                      <li><span style="color:red;font-size:20px">*</span> tidak boleh kosong, harus diisi</li>
                                  </ul>
                              </div>
                              {{-- Akhir Catatan --}}
                              <form method="post" id="form-edit-kategori" action="#">
                                  @csrf
                                  <input type="hidden" name="category_id" id="category_id" value="">
                                  <div class="card-body" style="padding: 1rem !important;">
                                      <div class="form-group">
                                        <label for="nama_edit_kategori">Nama Kategori <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="nama_edit_kategori" name="nama_kategori" autocomplete="off" required placeholder="Masukkan Nama Kategori" >
                                      </div>
                                      <div class="error_nama_edit_kategori">
                                      </div>
                                  </div>
                              </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary editCategory">Edit Kategori</button>
                      </div>
                  </div>
                </div>
            </div>
        </div>

            <div id="container" class="table-responsive ">
              <!-- Button trigger modal Create Category -->
              <button type="button" id="showModalCreateCategory" class="btn btn-primary mb-3">
                Tambah Kategori
              </button>
              <table id="table_categories" class="table table-striped table-hover table-lg">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
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
@endsection
@push('scripts')
<script>
  $(document).ready(function () {
      //CSRF Token
      $.ajaxSetup({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          }
      });
      //Show Table All Category
      $('#table_categories').DataTable({
          processing: true,
          serverSide: true,
          ajax: { 
              url: "{{ route('categories.index') }}",
              type: 'GET'
          },
          columns: [
              {
                  "data" : null, "sortable" : false, 
                  render: function(data,type,row,meta) {
                      return meta.row+ meta.settings._iDisplayStart + 1
                  }
              },
              {data:'nama_kategori', name: 'nama_kategori'},
              {data:'action', name: 'action',searchable:false,orderable: false},
          ]
      });

      // Show Modal Create Category
      $('#showModalCreateCategory').on('click',function(){
        $('#modalCreateCategory').modal('show');
      });

      // Show Modal Edit Category
      $(document).on('click','.showModalEditCategory',function(){
        $('#modalEditCategory').modal('show');
        var categoryID = $(this).attr('id');
        $.ajax({
            url: "/dashboard/categories/get/" + categoryID,
            type: "GET",
            dataType: "json",
            success: function(data){
                 $('#category_id').val(data.Category[0].id);
                 $('#nama_edit_kategori').val(data.Category[0].nama_kategori);
            }
        })  
      });

      // Create Ajax Category
      $('.createCategory').on('click',function(){
        $('#form-create-kategori').ajaxForm({
                  url: "/dashboard/categories",
                  type: "POST",
                  dataType: "json",
                  success: function(data){
                      Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Kategori berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      // Remove if Have Errors
                      $('.error_nama_kategori').removeClass('error-feedback');
                      $('.error_nama_kategori').empty();
                      $('#nama_kategori').removeClass('is-invalid'); 
                      // Hide Modal Create
                      $('#modalCreateCategory').modal('hide');
                      // Reset Form
                      $('#form-create-kategori')[0].reset();
                      //Update DataTable
                      $('#table_categories').DataTable().draw();
                  },
                  error: function(data){
                    if(data.status == 400) {
                      if(data.responseJSON.errors.nama_kategori){
                        $('.error_nama_kategori').html(data.responseJSON.errors.nama_kategori);
                        $('.error_nama_kategori').addClass('error-feedback');
                        $('#nama_kategori').addClass('is-invalid');
                        $('#nama_kategori').removeClass('is-valid');
                      } else{
                        $('.error_nama_kategori').removeClass('error-feedback');
                        $('.error_nama_kategori').empty();
                        $('#nama_kategori').removeClass('is-invalid');
                        $('#nama_kategori').addClass('is-valid');
                    } 
                    }
                }
        }).submit()
      })

      // Update Category
      $(document).on('click', '.editCategory',function(){
        var categoryID = $('#category_id').val();
        $('#form-edit-kategori').ajaxForm({
                url: "/dashboard/categories/" + categoryID,
                method: "POST",
                data: {_method:'PUT'},
                dataType: "json",
                success: function(data){
                    Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Kategori berhasil diupdate',
                      showConfirmButton: false,
                      timer: 1500
                    });
                    // Hide Modal Create
                    $('#modalEditCategory').modal('hide');
                    // Reset Form
                    $('#form-edit-kategori')[0].reset();
                    //Update DataTable
                    $('#table_categories').DataTable().draw(false);
                },
                error: function(data){
                    Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Kategori Gagal diupdate',
                      showConfirmButton: false,
                      timer: 1500
                    });
                }
            }).submit();
      })

      // Delete Category
      $(document).on('click','.hapus',function(){
          var categoryID = $(this).attr('id');
          Swal.fire({
          title: 'Apakah kamu yakin?',
          text: "Kategori yang dihapus tidak dapat dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire(
              'Deleted!',
              'Kategori berhasil dihapus.',
              'success'
              )
              $.ajax({
              url: "/dashboard/categories/"+ categoryID,    
              type: 'delete',
              success: function(data){
                      // draw(false) = agar ketika reload,tetap stay di current pagination
                      $('#table_categories').DataTable().draw(false);
              },
              error: function(data){
                  Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Kategori Gagal dihapus',
                    showConfirmButton: false,
                    timer: 1500
                  });
              }
            });
            }
          }) 
      });
    })
</script>
@endpush

