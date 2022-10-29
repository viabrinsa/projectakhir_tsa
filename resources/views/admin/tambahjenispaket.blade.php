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
                        <h3 class="card-title">Tambah Jenis Paket</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="" enctype="multipart/form-data" id="quickForm">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Jenis Paket</label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="Nama">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input name="gambar" class="form-control" type="file" required accept=".jpg,.png,.jpeg">
                            </div>
                            <div class="form-group">
                                <label for="isi">Deskripsi</label>
                                <input type="text" name="isi" class="form-control" id="isi" placeholder="No. HP">
                            </div>
                            <div class="form-group">
                                <label for="isi">Harga</label>
                                <input type="text" name="isi" class="form-control" id="isi" placeholder="Bidang Kerja">
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
@include('layoutadmin.footer')
@endsection