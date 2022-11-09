@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">RESERVASI</h3>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
        <p>Cari Data Reservasi :</p>
        <form action="/reservasi/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Reservasi .." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
        <hr>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pesan</th>
                    <th>Tanggal Pesan</th>
                    <th>Jenis Paket</th>
                    <th>Promo</th>
                    <th>Jumlah Orang</th>
                    <th>Alasan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $i => $reservasi)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$reservasi->nama_pesan}}</td>
                        <td>{{$reservasi->tgl_pesan}}</td>
                        <td>{{$reservasi->nama_pasket}}</td>
                        <td>{{$reservasi->nama_promo}}</td>
                        <td>{{$reservasi->jumlah_pesan}}</td>
                        <td>{{$reservasi->alasan}}</td>
                        <td class="text-center">{{$reservasi->id_status}}</td>
                        <td><a href="" class="btn btn-info">ACC</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection