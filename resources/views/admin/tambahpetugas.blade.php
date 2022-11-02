@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Tambah Petugas</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="quickForm" action="{{ route('tambahpetugas') }}"   method="post" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="isi">No. HP</label>
                <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No. HP">
              </div>
              <div class="form-group">
                <label for="role">Bidang Kerja</label>
                <input type="text" name="role" class="form-control" id="role" placeholder="Bidang Kerja">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input name="foto" class="form-control" type="file"id="foto" accept="image/*">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>

@endsection