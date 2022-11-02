@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Edit Petugas</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{url('editpetugas', ['id' => $petugas->id_admin_petugas])}}" enctype="multipart/form-data" id="quickForm">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$petugas->nama}}" id="nama" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" name="email" class="form-control" value="{{$petugas->email}}" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">No. Hp</label>
                <input type="text" name="no_hp" class="form-control" value="{{$petugas->no_hp}}" id="no_hp" placeholder="No. HP">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Bidang Kerja</label>
                <input type="text" name="role" class="form-control" value="{{$petugas->role}}" id="role" placeholder="No. HP">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" name="foto" type="file" id="foto" required accept=".jpg,.png,.jpeg">
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