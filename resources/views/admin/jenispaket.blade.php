@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">JENIS PAKET</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <hr>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Paket</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@include('layoutadmin.footer')
@endsection