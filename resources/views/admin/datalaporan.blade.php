@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">LAPORAN</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <hr>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pesan</th>
                    <th>Tanggal Pesan</th>
                    <th>Jenis Paket</th>
                    <th>Jumlah Orang</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection