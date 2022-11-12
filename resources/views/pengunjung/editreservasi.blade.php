@extends('layoutpengunjung.master')
@section('content')
@include('layoutpengunjung.navbarlogin')

<!-- ======= Reservasi Section ======= -->
<section id="reservasi" class="reservasi sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>RESERVASI</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h5 class="card-title">Daftar Reservasi</small></h5>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{url('editreservasi', ['id' => $reservasi->id_reservasi])}}" enctype="multipart/form-data" id="quickForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_pesan">Nama Pemesan</label>
                                    <input type="text" name="nama_pesan" class="form-control" id="nama_pesan" placeholder="Nama Pemesan">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_pesan">Tanggal Pesan</label>
                                    <input type="datetime-local" name="tgl_pesan" class="form-control" id="tgl_pesan" placeholder="Tanggal Pesan">
                                </div>
                                <div class="form-group">
                                    <label for="nama_paket">Jenis Paket</label>
                                    <select class="form-control">
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_promo">Promo</label>
                                    <select class="form-control">
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga_weekend}">Jenis Hari</label>
                                    <select class="form-control">
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_pesan">Jumlah Orang</label>
                                    <input type="number" name="jumlah_pesan" class="form-control" id="jumlah_pesan" placeholder="Jumlah Orang">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_pesan">Total Bayar</label>
                                    <input type="number" name="jumlah_pesan" class="form-control" id="jumlah_pesan" placeholder="Total Bayar" readonly>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Reservasi</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
            </div>
            <!--/.col (right) -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
</section>
<!-- End Reservasi Section -->
@include('layoutpengunjung.footer')
@endsection