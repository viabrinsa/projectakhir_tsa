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
        <p>Cari Laporan:</p>
            <form action="/laporan/carilaporan" method="GET">
                <input type="text" name="carilaporan" placeholder="Cari Laporan ..." value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>
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