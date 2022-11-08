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
                            <th>Nama Pemesan</th>
                            <th>Tanggal Pesan</th>
                            <th>Jenis Paket</th>
                            <th>Promo</th>
                            <th>Jumlah Orang</th>
                            <th>Status</th>
                            <th>Alasan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div><!-- /.card-body -->
        </div>
    </div>
</section>
<!-- End History Section -->

@include('layoutpengunjung.footer')
@endsection