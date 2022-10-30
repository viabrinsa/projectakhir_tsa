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
                            <h3 class="card-title">Edit Data Artikel</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="" enctype="multipart/form-data" id="quickForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul Artikel</label>
                                    <input type="text" name="judul" class="form-control" value=""
                                        id="exampleInputEmail1" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="isi">Isi Artikel</label>
                                    <input type="text" name="isi" class="form-control" id="isi"
                                        placeholder="Masukkan deskripsi artikel">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <input class="form-control" name="gambar" type="file" id="gambar" required
                                        accept=".jpg,.png,.jpeg">
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
