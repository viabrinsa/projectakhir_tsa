@extends('layoutpengunjung.master')
@section('content')
@include('layoutpengunjung.navbarlogin')

<!-- ======= History Section ======= -->
<section id="history" class="history sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>HISTORY</h2>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">History Reservasi</h3>
            </div><!-- /.card-header -->

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Tanggal Pesan</th>
                            <th>Jenis Paket</th>
                            <th>Promo</th>
                            <th>Jenis Hari</th>
                            <th>Jumlah Orang</th>
                            <th>Total Bayar</th>
                            <th>Status</th>
                            <th>Alasan</th>
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
                            <td>{{$reservasi->nama_promo}}</td>
                            <td>{{$reservasi->jumlah_pesan}}</td>
                            <td>{{$reservasi->jumlah_pesan}}</td>
                            <td>{{$reservasi->id_status}}</td>
                            <td>{{$reservasi->alasan}}</td>
                            <td> <a href="{{ url('/editreservasi', ['id' => $reservasi->id_reservasi]) }}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.card-body -->
        </div>
    </div>
</section>
<!-- End History Section -->

@include('layoutpengunjung.footer')
@endsection