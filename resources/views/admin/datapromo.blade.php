@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">PROMO</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="/tambahpromo" class="btn btn-primary"><i class="fa fa-plus-square-o"></i>Tambah</a>
        <hr>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Promo</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><img class="img-preview img-fluid" src="" style="max-width: 180px;"></td>
                    <td>
                        <a href="/editpromo" class="btn btn-warning btn-sm">Edit</a>
                        <form action="" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@include('layoutadmin.footer')
@endsection