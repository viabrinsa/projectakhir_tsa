@extends('layoutpetugas.master')
@section('content')
    @include('layoutpetugas.navbar')
    @include('layoutpetugas.sidebar')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> DATA PENYEWA</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <p>Cari Data Reservasi :</p>
            <form action="/datapengunjung/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Reservasi .." value="{{ old('cari') }}">
                <input type="submit" value="CARI">
                {{-- <input type="submit" value="+ Pengunjung"> --}}
            </form>
            <hr>
            <table id="example1" class="table table-bordered table-striped">
                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Identitas</th>
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
@endsection
